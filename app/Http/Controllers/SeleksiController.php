<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seleksi;
use App\Models\Formulir;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SeleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id_cities = $request->id_cities;
        $id_disctricts = $request->id_districts;
        $kota = Seleksi::where('province_code', '32')->get();
        $seleksi = Formulir::where('id_cities', $id_cities);
        $all = Formulir::all();
        return view('admin.Seleksi', compact('kota', 'seleksi', 'all'));
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
        $seleksi = new Formulir;
        $seleksi->id_cities = $request->id_cities;
        $seleksi->id_districts = $request->id_districts;
        $seleksi->status = $request->status;
        $seleksi->nama = $request->nama;
        // dd($request->all());
        // return $request;
        // return redirect('Seleksi/'.$request->id_cities);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id_cities)
    {
        $id_cities = $request->id_cities;
        $seleksi = Formulir::where('id_cities', $id_cities)->get();
        $seleksis = Formulir::where('id_cities', $id_cities)->first();
        // $seleksi = DB::table('formulir')->where('id_cities', $id_cities)->get();
        return $seleksi;
        // return view('admin.LihatSeleksi', compact( 'seleksi','seleksis', 'id_cities'));
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

    public function seleksi(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'id_cities' => 'required|exists:formulir',
        'peminatan' => 'required|exists:formulir',
        'status' => 'required|exists:formulir',
        ]);

        if ($validator->fails()) {
        return back()->with('warning', $validator->messages()->all()[0])->withInput();
        }

        $id_cities = $request->id_cities;
        $peminatan = $request->peminatan;
        $status = $request->status;
        $nama = $request->nama;
        $seleksi = Formulir::where('id_cities', $id_cities)
        ->where('peminatan', $peminatan)->where('status', $status)
        ->get();
        $seleksiPeminatan = Formulir::where('id_cities', $id_cities)
        ->where('peminatan', $peminatan)
        ->first();

        // return $seleksiP;
        // $seleksi = DB::table('formulir')->where('id_cities', $id_cities)->get();
        return view('admin.LihatSeleksi', compact( 'seleksi','seleksiPeminatan', 'id_cities', 'nama'));
    }

    public function gantiSemuaStatus(Request $request, $id)
    {
        // $status = Formulir::find($id);
        // $status->status = $request->status;
        // $status = Formulir::whereIn('id', $id)->update($request->all());
        $id_cities = $request->id_cities;
        $peminatan = $request->peminatan;
        $status = $request->status;
        $ids = $request->id;
        $seleksi = Formulir::where('id_cities', $id_cities)
        ->where('peminatan', $peminatan)->where('status', $status)
        ->get('id');
        DB::table('users')
        ->whereIn('id', $ids)
        ->update(['status' => $request->status]);
        DB::table('formulir')
        ->whereIn('id_user', $ids)
        ->update(['status' => $request->status]);

        return redirect('Seleksi')->with('success', 'Status Berhasil Di Ganti!');
    }
}
