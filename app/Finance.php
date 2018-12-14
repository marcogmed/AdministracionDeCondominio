<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CategoryFincanceMove;

class Finance extends Model
{
    public function categoryFinanceMove()
    {
    	return $this->hasOne(CategoryFincanceMove::class);
    }
}
