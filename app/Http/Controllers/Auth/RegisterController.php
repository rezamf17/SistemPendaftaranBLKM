<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Formulir;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::USER;

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
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255', 'unique:users,phone'],
            // 'role' => ['required'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'status' => ['string']
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'role' => 2,
            'password' => Hash::make($data['password']),
            'status' => "Calon Peserta"
        ]);

    }

    public function daftar(Request $request)
    {
         $validator = Validator::make($request->all(), [
        'name' => 'required',
        'phone' => 'required|unique:users,phone',
        'password' => 'required|min:6|confirmed'
        ]);

        if ($validator->fails()) {
         return redirect('register')->with('warning', 'Pendaftaran Akun Gagal!');
        }

        $user = new User;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->role = 2;
        $user->status = 'Calon Peserta';
        // $user->save();

        // return redirect()->route('user');
        return $redirectTo;
    }
}
