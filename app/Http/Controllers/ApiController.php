<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use App\{Notice,User};
use App\Social\Transformers\{PublicTimelineTransformer};
class ApiController extends Controller
{
    public function publicTimeline($fmt = 'json')
    {
    	$notices = Notice::orderBy('id', 'desc')->take(10)->get();
		$manager = new Manager();
		$resource = new Collection($notices, new PublicTimelineTransformer());
		$res = $manager->createData($resource)->toArray();

		return response()->json($res['data'], 200, [], JSON_PRETTY_PRINT);
    }
}
