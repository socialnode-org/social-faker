<?php
namespace App\Social\Transformers;

use League\Fractal;

class UserProfileTransformer extends Fractal\TransformerAbstract
{
	public function transform($user)
	{
	    return [
		    'id' => 1,
		    'name' => $user->username,
		    'screen_name' => $user->screenname,
		    'location' => null,
		    'description' => null,
		    'profile_image_url' => $user->profileImageUrl(),
		    'profile_image_url_https' => $user->profileImageUrl(),
		    'profile_image_url_profile_size' => $user->profileImageUrl(),
		    'profile_image_url_original' => $user->profileImageUrl(),
		    'groups_count' => 0,
		    'linkcolor' => false,
		    'backgroundcolor' => false,
		    'url' => '',
		    'protected' => false,
		    'followers_count' => 0,
		    'friends_count' => 0,
		    'created_at' => $user->created_at,
		    'utc_offset' => '',
		    'time_zone' => '',
		    'statuses_count' => $user->statuses->count(),
		    'following' => false,
		    'statusnet_blocking' => false,
		    'notifications' => false,
		    'status' => [],
		    'statusnet_profile_url' => $user->url(),
		    'favourites_count' => 0
	    ];
	}
}