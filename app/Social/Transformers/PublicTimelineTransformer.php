<?php
namespace App\Social\Transformers;

use App\Notice;
use League\Fractal;

class PublicTimelineTransformer extends Fractal\TransformerAbstract
{
	public function transform(Notice $notice)
	{
	    return [
	    	'text'	  => $notice->rendered,
	    	'truncated' => false,
	    	'created_at' => $notice->created_at,
	    	'in_reply_to_status_id' => null,
	    	'uri' => $notice->uri(),
	    	'source' => $notice->source,
	    	'source_link' => null,
	        'id'      => (int) $notice->id,
	    	'in_reply_to_user_id' => null,
	    	'in_reply_to_screen_name' => null,
	    	'geo' => null,
	    	'attachments' => [],
	    	'user' => [
	    		'id' => $notice->user->id,
	    		'name' => $notice->user->name,
	    		'screen_name' => $notice->user->username,
	    		'location' => '',
	    		'description' => '',
	    		'profile_image_url' => $notice->user->profileImageUrl(),
	    		'profile_image_url_https' => $notice->user->profileImageUrl(),
	    		'profile_image_url_profile_size' => $notice->user->profileImageUrl(),
	    		'profile_image_url_original' => $notice->user->profileImageUrl(),
	    		'groups_count' => 0,
	    		'linkcolor' => false,
	    		'backgroundcolor' => false,
	    		'url' => null,
	    		'protected' => false,
	    		'followers_count' => 0,
	    		'friends_count' => 0,
	    		'created_at' => $notice->user->created_at,
	    		'utc_offset' => null,
	    		'time_zone' => null,
	    		'statuses_count' => $notice->user->statuses->count(),
	    		'following' => false,
	    		'statusnet_blocking' => false,
	    		'notifications' => false,
	    		'statusnet_profile_url' => $notice->user->url(),
	    		'favorites_count' => 0,
	    	],
	    	'statusnet_html' => $notice->rendered,
	    	'statusnet_conversation_id' => $notice->id,
	    	'favorited' => false,
	    	'repeated' => false,
	    ];
	}
}