<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public function notice()
    {
    	$this->belongsTo('App\Notice');
    }
}
