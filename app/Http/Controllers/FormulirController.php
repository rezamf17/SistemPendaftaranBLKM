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
        $formulir = Formulir::all();
        return view ('admin.DataUser', compact('formulir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('user.FormulirUser');
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
        $formulir->kota = $request->kota;
        $formulir->jenis_kelamin = $request->jenis_kelamin;
        $formulir->pekerjaan = $request->pekerjaan;
        $formulir->no_hp = $request->no_hp;
        $formulir->peminatan = $request->peminatan;
        $formulir->status = "Calon Peserta";
        $formulir->save();

        // DB::table('formulir')->insert([
        //     'id_user' => Auth::user()->id,
        //     'nama' => $request->nama,
        //     'ttl' => $request->ttl,
        //     'alamat' => $request->alamat,
        //     'kota' => $request->kota,
        //     'no_kk' => $request->no_kk,
        //     'no_ktp' => $request->no_ktp,
        //     'jenis_kelamin' => $request->jenis_kelamin,
        //     'pekerjaan' => $request->pekerjaan,
        //     'no_hp' => $request->no_hp,
        //     'no_rek' => $request->no_rek,
        //     'bank' => $request->bank,
        //     'peminatan' => $request->peminatan,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

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
        $formulir = Formulir::where('id', $id)->first();
        return view ('admin.LihatUser', compact('formulir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formulir = Formulir::where('id', $id)->first();
        return view ('admin.EditUser', compact('formulir'));    }

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
        $formulir->id_user = Auth::user()->id;
        $formulir->id_provinces = $request->provinsi;
        $formulir->id_cities = $request->kota;
        $formulir->id_districts = $request->kecamatan;
        $formulir->id_villages = $request->desa;
        $formulir->nama = $request->nama;
        $formulir->ttl = $request->ttl;
        $formulir->alamat = $request->alamat;
        $formulir->kota = $request->kota;
        $formulir->no_kk = $request->no_kk;
        $formulir->no_ktp = $request->no_ktp;
        $formulir->jenis_kelamin = $request->jenis_kelamin;
        $formulir->pekerjaan = $request->pekerjaan;
        $formulir->no_hp = $request->no_hp;
        $formulir->no_rek = $request->no_rek;
        $formulir->bank = $request->bank;
        $formulir->atas_nama = $request->atas_nama;
        $formulir->peminatan = $request->peminatan;
        $formulir->status = $request->status;
        $formulir->save();
        // dd($request->all());
        return redirect('Formulir/'.$id)->with('success', 'Data Formulir User Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formulir = Formulir::find($id);
        $formulir->delete();

        return redirect('Formulir')->with('success', 'Data User Berhasil Dihapus!');
    }

    public function gantiStatus(Request $request, $id)
    {
        $status = Formulir::find($id);
        $status->status = $request->status;
        $status->save();

        return redirect('Formulir/'.$id)->with('success', 'Status Berhasil Di Ganti!');
    }

    public function viewLengkapiData($id)
    {
        $formulir = Formulir::where('id_user', $id)->first();
        return view('user.LengkapiData', compact('formulir'));
    }
}
