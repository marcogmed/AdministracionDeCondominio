<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Role;

class MenuOption extends Model
{
    public function role()
    {
    	return $this->belongTo(Role::class);
    }
}
