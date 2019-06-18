<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    protected $username = 'username';
    // protected $pass = 'pass';
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    protected $maxAttempts = 5000;
    protected $maxLoginAttempts=5000;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/pegawai';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'username' => 'required|max:255',
            // 'email' => 'required|email|max:255|unique:users',
            'pass' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            // 'email' => $data['email'],
            'pass' => bcrypt($data['pass']),
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }

    // protected function authenticated(Request $request, $user)
    // {
    //  return redirect('/pegawai');
    // }

    public function redirectTo() {
        return '/pegawai';
    }

    protected function showRegistrationForm(){}
    protected function register(){}

}
