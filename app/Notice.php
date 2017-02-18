<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{

	public function user() 
	{
		return $this->belongsTo('App\User');
	}

    public function uri() 
    {
    	$tag = 'example.org';
    	$timestamp = $this->created_at->format('Y-M-d');
    	$id = $this->id;
    	return "tag:$tag,$timestamp:noticeId=$id:objectType=note";
    }

}
