<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Mail\welcomeEmail;
use App\Http\Controllers\Controller;
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
            'last_name'     => 'required|string|max:255',
            'first_name'    => 'required|string|max:255',
            'salutations'   => 'required|string|max:255',
            'position'      => 'required|string|max:255',
            'country'       => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users',
            'facebook'      => 'required|string|max:255',
            'linkedln'      => 'required|string|max:255',
            'twitter'       => 'required|string|max:255',
            'password'      => 'required|string|min:6|confirmed',
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
        $user = User::create([
            'first_name'    => $data['first_name'],
            'last_name'     => $data['last_name'],
            'salutations'   => $data['salutations'],
            'position'      => $data['position'],
            'country'       => $data['country'],
            'email'         => $data['email'],
            'facebook'      => $data['facebook'],
            'linkedln'      => $data['linkedln'],
            'twitter'       => $data['twitter'],
            'password'      => bcrypt($data['password']),
        ]);

        return $user;

        \Mail::to($user)->send(new welcomeEmail);
    }
}
