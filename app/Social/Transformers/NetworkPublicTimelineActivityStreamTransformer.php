<?php
namespace App\Social\Transformers;

use App\Notice;
use League\Fractal;

class NetworkPublicTimelineActivityStreamTransformer extends Fractal\TransformerAbstract
{
	public function transform(Notice $notice)
	{
	    return [
	    	'actor' => [
	    		'id' => $notice->user->url(),
	    		'displayName' => $notice->user->username,
	    		'status_net' => [
	    			'avatarLinks' => [
	    				[
	    					'url' => $notice->user->profileImageUrl(),
	    					'rel' => 'avatar',
	    					'type' => 'image/jpeg',
	    					'width' => 96,
	    					'height' => 96
	    				],
	    				[
	    					'url' => $notice->user->profileImageUrl(),
	    					'rel' => 'avatar',
	    					'type' => 'image/jpeg',
	    					'width' => 96,
	    					'height' => 96
	    				],
	    				[
	    					'url' => $notice->user->profileImageUrl(),
	    					'rel' => 'avatar',
	    					'type' => 'image/jpeg',
	    					'width' => 48,
	    					'height' => 48
	    				],
	    				[
	    					'url' => $notice->user->profileImageUrl(),
	    					'rel' => 'avatar',
	    					'type' => 'image/jpeg',
	    					'width' => 24,
	    					'height' => 24
	    				],
	    			],
	    			'profile_info' => [
	    				'local_id' => $notice->user->id
	    			]
	    		],
				'image' => [
					'url' => $notice->user->profileImageUrl(),
					'rel' => 'avatar',
					'type' => 'image/jpeg',
					'width' => 24,
					'height' => 24
	    		],
	    		'objectType' => 'person',
	    		'summary' => '',
	    		'url' => $notice->user->url(),
	    		'portablecontacts_net' => [
	    			'preferredUsername' => $notice->user->username,
	    			'displayName' => $notice->user->screenname,
	    			'note' => '',
	    			'addresses' => [
	    				'formatted' => ''
	    			],
	    			'urls' => [
	    				[
	    					'type' => 'homepage',
	    					'value' => $notice->user->url(),
	    					'primary' => true
	    				]
	    			],
	    		]
	    	],
	    	'content' => $notice->rendered,
	    	'generator' => [
	    		'id' => 'tag:status.net,2009:notice-source:ostatus',
	    		'objectType' => 'application',
	    		'status_net' => [
	    			'source_code' => 'ostatus'
	    		]
	    	],
	    	'id' => $notice->uri('comment'),
	    	'object' => [
	    		'id' => $notice->uri('comment'),
	    		'objectType' => 'comment',
	    		'content' => $notice->rendered,
	    		'url' => $notice->url(),
	    		'status_net' => [
	    			'notice_id' => null
	    		],
	    		'inReplyTo' => []
	    	],
	    	'to' => [],
	    	'status_net' => [
	    		'conversation' => $notice->uri('thread'),
	    		'notice_info' => [
	    			'local_id' => $notice->id,
	    			'source' => 'ostatus' 
	    		]
	    	],
	    	'published' => $notice->created_at,
	    	'provider' => [
	    		'objectType' => 'service',
	    		'displayName' => config('app.name'),
	    		'url' => config('app.url')
	    	],
	    	'verb' => 'post',
	    	'url' => $notice->url()
	    ];
	}
}