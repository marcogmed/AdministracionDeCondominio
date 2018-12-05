<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AgendaPlace;
use App\Event;


class Status extends Model
{
    public function agendaPlace()
    {
    	return $this->belongsTo(AgendaPlace::class);
    }

    public function event()
    {
    	return $this->belongsTo(Event::class);
    }
}
