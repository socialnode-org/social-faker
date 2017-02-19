<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{

	public function user() 
	{
		return $this->belongsTo('App\User');
	}

    public function uri($objectType = "note") 
    {
    	$tag = 'example.org';
    	$timestamp = $this->created_at->format('Y-M-d');
    	$id = $this->id;

    	switch ($objectType) {
    		case 'note':
    			$res = "tag:$tag,$timestamp:noticeId=$id:objectType=$objectType";
    			break;
    		case 'thread':
    			$res = "tag:$tag,$timestamp:objectType=$objectType:nonce=".str_random(16);
    			break;
    		
    		default:
    			$res = "tag:$tag,$timestamp:noticeId=$id:objectType=$objectType";
    			break;
    	}
    	return $res;
    }

    public function url()
    {
    	$domain = config('app.url');
    	return "{$domain}/notice/{$this->id}";
    }

}
