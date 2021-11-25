<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuesioner;
use Illuminate\Support\Facades\Auth;

class KuesionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.Kuesioner');
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
        $kuesioner = new Kuesioner;
        $kuesioner->id_user = Auth::user()->id;
        $kuesioner->soal_1 = $request->soal_1;
        $kuesioner->soal_2 = $request->soal_2;
        $kuesioner->soal_3 = $request->soal_3;
        $kuesioner->soal_4 = $request->soal_4;
        $kuesioner->soal_5 = $request->soal_5;
        $kuesioner->soal_6 = $request->soal_6;
        $kuesioner->soal_7 = $request->soal_7;
        $kuesioner->soal_8 = $request->soal_8;
        $kuesioner->soal_9 = $request->soal_9;
        $kuesioner->soal_10 = $request->soal_10;
        $kuesioner->soal_11 = $request->soal_11;
        $kuesioner->soal_12 = $request->soal_12;
        $kuesioner->soal_13 = $request->soal_13;
        // dd($request->all());
        $kuesioner->save();

        return redirect('user')->with('success', 'Survey Berhasil Diisi!');
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
