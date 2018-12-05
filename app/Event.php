<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;
use App\Status;

class Event extends Model
{
    //

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function category()
    {
    	return $this->hasOne(Category::class);
    }
    public function status()
    {
    	return $this->hasOne(Status::class);
    }
}
