<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Hash;
use Auth;
use Theme;
use DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }


    public function authenticate() {
        $username = Input::get('username');
        $password = Input::get('password');

        $data = array (
            'email' => $username,
            'password' =>$password
        );

        $rules = array (
            'email' => 'required|max:255',
            'password' => 'required|max:50',
        );

        $validator = Validator::make($data,$rules);

        if ($validator->fails()){

            return Redirect::to('/');

        }else {
            if (Auth::attempt(['email' => $username, 'password' => $password ])){

                $id = Auth::id();

                Db::table('users')
                    ->where('user_id',$id)
                    ->update(['status' => 1]);

                return Redirect::to('/index');

            }else {
                return Redirect::to('/')
                    ->withErrors([
                        'validate' => 'Invalid username or password'
                    ]);
            }
        }
    }

    function logout(){
        $id = Auth::id();

        Db::table('users')

            ->where('user_id',$id)
            ->update(['status' => 0]);

        Auth::logout();
        return Redirect::to('/');
    }
}
