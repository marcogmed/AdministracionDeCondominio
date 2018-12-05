<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Status;

class AgendaPlace extends Model
{
    //

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function status()
    {
    	return $this->hasOne(Satus::class);
    }
}
