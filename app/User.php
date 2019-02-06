<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
use App\Event;
use App\AgendaPlace;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'surname', 'house_number', 'phone_number', 'email', 'password','role_id', 'division_id', 'condominium_id', 'is_owner', 'is_provider','is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->hasOne(Role::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
    public function agendaPlaces()
    {
        return $this->hasMany(AgendaPlaces::class);
    }
}
