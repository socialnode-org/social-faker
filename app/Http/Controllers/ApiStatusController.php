<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use App\{Notice,User};
use App\Social\Transformers\{PublicTimelineTransformer,NetworkPublicTimelineActivityStreamTransformer};

class ApiStatusController extends Controller
{
	public function publicTimeline($fmt = 'json')
	{
		$notices = Notice::orderBy('id', 'desc')->take(10)->get();
		$manager = new Manager();
		$res = $this->responseFormatter($fmt, $notices, $manager, ['json', 'as', 'atom', 'rss', 'xml']);
		return response()->json($res, 200, [], JSON_PRETTY_PRINT);
	}

	public function networkTimeline($fmt = 'json')
	{
		$notices = Notice::orderBy('id', 'desc')->take(10)->get();
		$manager = new Manager();
		$res = $this->responseFormatter($fmt, $notices, $manager, ['json', 'as', 'atom', 'rss', 'xml']);
		return response()->json($res, 200, [], JSON_PRETTY_PRINT);
	}

	public function responseFormatter($fmt, $notices, $manager, $allowed = ['as', 'json', 'xml'])
	{
    	// TODO: Fix rss + atom transformers

    	// Check for allowed response formats
		if( false === in_array($fmt, $allowed) ) {
			$fmt = 'json';
		}

		switch ($fmt) {
			case 'json':
			case 'xml':
			$res = $this->jsonTransform($notices, $manager);
			break;

			case 'as':
			$res = $this->activityStreamTransform($notices, $manager);
			break;

			case 'atom':
			$res = $this->atomTransform('atom', $notices, $manager);
			break;

			case 'rss':
			$res = $this->atomTransform('rss', $notices, $manager);
			break;
			
			default:
			$res = $this->jsonTransform($notices, $manager);
			break;
		}

		return $res;
	}

	public function activityStreamTransform($notices, Manager $manager)
	{
		$resource = new Collection($notices, new NetworkPublicTimelineActivityStreamTransformer());
		$res = $manager->createData($resource)->toArray();
		return [
  		'generator' => 'GNU social 1.2.0-beta5',
  		'title' => config('app.name') . ' network public timeline',
  		'totalItems' => $notices->count(),
  		'items' => $res['data'],
  		'links' => [
    		'url' => config('app.url') . '/main/all',
    		'rel' => 'alternate',
    		'type' => 'text/html'
  		]
		];
	}

	public function jsonTransform($notices, Manager $manager)
	{
		$resource = new Collection($notices, new PublicTimelineTransformer());
		$res = $manager->createData($resource)->toArray();
		return $res['data'];
	}

	public function atomTransform($fmt = 'atom', $notices, Manager $manager)
	{
		$fmt = ('rss' === $fmt) ? $fmt : 'atom';

		$feed = \App::make("feed");

		$feed->title = '';
		$feed->description = '';
		$feed->logo = $notices[0]->user->profileImageUrl();
		$feed->link = url('feed');
		$feed->setDateFormat('datetime');
		$feed->pubdate = $notices[0]->created_at;
		$feed->lang = 'en';
		$feed->setShortening(true);
		$feed->setTextLimit(100);

		foreach ($notices as $post)
		{
			$feed->add( 
				str_limit($post->content,100), 
				$post->user->username, 
				$post->url(), 
				$post->created_at, 
				$post->rendered
				);
		}

		return $feed->render($fmt);
	}
}
