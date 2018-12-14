<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Finance;

class CategoryFinanceMove extends Model
{
    public function finance()
    {
    	return $this->belongsTo(Finance::class);
    }
}
