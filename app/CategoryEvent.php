<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Event;

class CategoryEvent extends Model
{
    //

    public function event()
    {
    	return $this->belongTo(Event::class);
    }
}
