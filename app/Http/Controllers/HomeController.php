<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulir;
use App\Models\User;
use App\Models\Kuesioner;
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
        $user = User::all()->count();
        $formulir = Formulir::all()->count();
        $kuesioner = Kuesioner::all()->count();
        $tataBoga = Formulir::where('peminatan', 'Tata Boga')->count();
        $lasListrik = Formulir::where('peminatan', 'Las Listrik')->count();
        $tataRias = Formulir::where('peminatan', 'Tata Rias Wajah dan Hijab')->count();
        $financial = Formulir::where('peminatan', 'Financial Life Skill')->count();
        $barista = Formulir::where('peminatan', 'Barista')->count();
        $catering = Formulir::where('peminatan', 'Catering')->count();
        $otomotif = Formulir::where('peminatan', 'Otomotif Service Sepeda Motor Ringan')->count();
        $bakery = Formulir::where('peminatan', 'Bakery')->count();
        $startUp = Formulir::where('peminatan', 'Start Up')->count();
        $teknikCukur = Formulir::where('peminatan', 'Teknik Cukur Dasar')->count();

        return view('home', compact(
            'user', 
            'formulir', 
            'otomotif', 
            'tataBoga', 
            'lasListrik',
            'tataRias',
            'financial',
            'barista',
            'catering',
            'bakery',
            'startUp',
            'teknikCukur',
            'kuesioner'
        ));
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
