<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Condominium;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:100'],
            'lastname' => ['required', 'string', 'max:150'],
            'surname' => ['required', 'string', 'max:150'],
            'phone_number' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],

            /*'role_id' => ['required', 'integer'],
            'division_id' => ['required', 'integer'],
            'condominium_id' => ['required', 'integer'],
           
            'is_owner' => ['required','tinyInteger','True'],
            'is_provider' => ['required','tinyInteger','False'],
            'is_active' => ['required','tinyInteger','True'],
*/
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'lastname'=> $data['lastname'],
            'surname'=> $data['surname'],
            'house_number' => $data['house_number'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id'=> $data['role_id'],
            'division_id' => $data['division_id'],
            'condominium_id' => $data['condominium_id'],
            'is_owner'=> $data['is_owner'],
            'is_provider'=> $data ['is_provider'],
            'is_active'=> $data['is_active'],
            


        ]);
    }
}
