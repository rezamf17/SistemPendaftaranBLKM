<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulir;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function user()
    {
        $user = User::where('id', Auth::user()->id);
        return view ('user.DashboardUser', compact('user'));
    }
    public function catch()
    {
        return view ('user.catchAPI');
    }
    public function catchRequest(Request $request)
    {
        // $request->provinsi;
        // $request->kabupaten;
        // $request->provinsi;
        // $request->provinsi;
        return $request;
    }
    public function render_dropdown()
    {
      return view('dd'); 
    }
}
