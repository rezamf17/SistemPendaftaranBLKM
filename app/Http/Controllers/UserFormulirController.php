<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulir;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserFormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('user.FormulirUser');    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formulir = new Formulir;
        $formulir->id_user = Auth::user()->id;
        $formulir->id_provinces = $request->provinsi;
        $formulir->id_cities = $request->kota;
        $formulir->id_districts = $request->kecamatan;
        $formulir->id_villages = $request->desa;
        $formulir->nama = $request->nama;
        $formulir->ttl = $request->ttl;
        $formulir->alamat = $request->alamat;
        $formulir->jenis_kelamin = $request->jenis_kelamin;
        $formulir->pekerjaan = $request->pekerjaan;
        $formulir->no_hp = $request->no_hp;
        $formulir->peminatan = $request->peminatan;
        $formulir->save();

        // dd($request->all());
        return redirect('user')->with('success', 'Pengisian Formulir Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formulir = Formulir::where('id_user', $id)->first();
        return view('user.LihatFormulir', compact('formulir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formulir = Formulir::where('id_user', $id)->first();
        return view('user.LengkapiData', compact('formulir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formulir = Formulir::find($id);
        $formulir->no_kk = $request->no_kk;
        $formulir->no_ktp = $request->no_ktp;
        $formulir->no_rek = $request->no_rek;
        $formulir->bank = $request->bank;
        $formulir->atas_nama = $request->atas_nama;
        $formulir->save();

        return redirect('user')->with('success', 'Formulir Berhasil Dilengkapi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
