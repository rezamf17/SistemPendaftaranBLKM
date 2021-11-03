<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulir;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('user.Formulir');
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
        // $formulir = new Formulir;
        // $formulir->id_user = Auth::user()->id;
        // $formulir->nama = $request->nama;
        // $formulir->ttl = $request->ttl;
        // $formulir->alamat = $request->alamat;
        // $formulir->kota = $request->kota;
        // $formulir->no_kk = $request->no_kk;
        // $formulir->no_ktp = $request->no_ktp;
        // $formulir->jenis_kelamin = $request->jenis_kelamin;
        // $formulir->pekerjaan = $request->pekerjaan;
        // $formulir->no_hp = $request->no_hp;
        // $formulir->no_rek = $request->no_rek;
        // $formulir->bank = $request->bank;
        // $formulir->peminatan = $request->peminatan;
        // $formulir->save();

        DB::table('formulir')->insert([
            'id_user' => Auth::user()->id,
            'nama' => $request->nama,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'no_kk' => $request->no_kk,
            'no_ktp' => $request->no_ktp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pekerjaan' => $request->pekerjaan,
            'no_hp' => $request->no_hp,
            'no_rek' => $request->no_rek,
            'bank' => $request->bank,
            'peminatan' => $request->peminatan,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // dd($request->all());
        // print_r($request->all());
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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