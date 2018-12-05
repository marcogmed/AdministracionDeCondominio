<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Condominium;

class Division extends Model
{
    public function condominiums()
    {
    	return $this->hasMany(Condominium::class);
    }
}
