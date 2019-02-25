<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Division;

class Condominium extends Model
{
    protected $table = 'condominiums';
    public function division()
    {
    	return $this->belongsTo(Division::class);
    }
}
