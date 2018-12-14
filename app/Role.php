<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\MenuOption;

class Role extends Model
{
    //
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function menuOptions()
    {
    	return $this-> hasMany(MenuOption::class);
    }
}
