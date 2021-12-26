<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = RouteServiceProvider::USER;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

     public function login(Request $request){
        $input = $request->all();

        $this->validate($request, [

            'phone' => 'required',

            'password' => 'required',

        ]);
                if(auth()->attempt(array('phone' => $input['phone'], 'password' => $input['password'])))

        {

            if (auth()->user()->role == 1) {

                return redirect()->route('home');

            }else if (auth()->user()->role == 2){
                return redirect()->route('user');
            }

        }else{

            return redirect()->route('login')

                ->with('warning','Email atau Password salah!');
                // ->withErrors('Email atau Password salah!');
        }
    }

    
}
