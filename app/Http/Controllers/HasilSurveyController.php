<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuesioner;

class HasilSurveyController extends Controller
{
    public function index()
    {
        $total = Kuesioner::select('soal_1')->count();
        $percentA1 = Kuesioner::select('soal_1')->where('soal_1','a')->count() / $total * 100;
        $percentB1= Kuesioner::select('soal_1')->where('soal_1','b')->count() / $total * 100;
        $percentC1 = Kuesioner::select('soal_1')->where('soal_1','c')->count() / $total * 100;

        $percentA2 = Kuesioner::select('soal_2')->where('soal_2','a')->count() / $total * 100;
        $percentB2 = Kuesioner::select('soal_2')->where('soal_2','b')->count() / $total * 100;
        $percentC2 = Kuesioner::select('soal_2')->where('soal_2','c')->count() / $total * 100;

        $percentA3 = Kuesioner::select('soal_3')->where('soal_3','a')->count() / $total * 100;
        $percentB3 = Kuesioner::select('soal_3')->where('soal_3','b')->count() / $total * 100;
        $percentC3 = Kuesioner::select('soal_3')->where('soal_3','c')->count() / $total * 100;

        $percentA4 = Kuesioner::select('soal_4')->where('soal_4','a')->count() / $total * 100;
        $percentB4 = Kuesioner::select('soal_4')->where('soal_4','b')->count() / $total * 100;
        $percentC4 = Kuesioner::select('soal_4')->where('soal_4','c')->count() / $total * 100;

        $percentA5 = Kuesioner::select('soal_5')->where('soal_5','a')->count() / $total * 100;
        $percentB5 = Kuesioner::select('soal_5')->where('soal_5','b')->count() / $total * 100;
        $percentC5 = Kuesioner::select('soal_5')->where('soal_5','c')->count() / $total * 100;

        $percentA6 = Kuesioner::select('soal_6')->where('soal_6','a')->count() / $total * 100;
        $percentB6 = Kuesioner::select('soal_6')->where('soal_6','b')->count() / $total * 100;
        $percentC6 = Kuesioner::select('soal_6')->where('soal_6','c')->count() / $total * 100;

        $percentA7 = Kuesioner::select('soal_7')->where('soal_7','a')->count() / $total * 100;
        $percentB7 = Kuesioner::select('soal_7')->where('soal_7','b')->count() / $total * 100;
        $percentC7 = Kuesioner::select('soal_7')->where('soal_7','c')->count() / $total * 100;

        $percentA8 = Kuesioner::select('soal_8')->where('soal_8','a')->count() / $total * 100;
        $percentB8 = Kuesioner::select('soal_8')->where('soal_8','b')->count() / $total * 100;
        $percentC8 = Kuesioner::select('soal_8')->where('soal_8','c')->count() / $total * 100;

        $percentA9 = Kuesioner::select('soal_9')->where('soal_9','a')->count() / $total * 100;
        $percentB9 = Kuesioner::select('soal_9')->where('soal_9','b')->count() / $total * 100;
        $percentC9 = Kuesioner::select('soal_9')->where('soal_9','c')->count() / $total * 100;

        $percentA10 = Kuesioner::select('soal_10')->where('soal_10','a')->count() / $total * 100;
        $percentB10 = Kuesioner::select('soal_10')->where('soal_10','b')->count() / $total * 100;
        $percentC10 = Kuesioner::select('soal_10')->where('soal_10','c')->count() / $total * 100;

        $percentA11 = Kuesioner::select('soal_11')->where('soal_11','a')->count() / $total * 100;
        $percentB11 = Kuesioner::select('soal_11')->where('soal_11','b')->count() / $total * 100;
        $percentC11 = Kuesioner::select('soal_11')->where('soal_11','c')->count() / $total * 100;
        $data = Kuesioner::select('id','id_user','soal_12', 'soal_13')->get();
        return view('admin.HasilSurvey', compact('percentA1',
         'percentB1', 
         'percentC1', 
         'percentA2', 
         'percentB2', 
         'percentC2',
         'percentA3', 
         'percentB3', 
         'percentC3',
         'percentA4', 
         'percentB4', 
         'percentC4',
         'percentA5', 
         'percentB5', 
         'percentC5',
         'percentA6', 
         'percentB6', 
         'percentC6',
         'percentA7', 
         'percentB7', 
         'percentC7',
         'percentA8', 
         'percentB8', 
         'percentC8',
         'percentA9', 
         'percentB9', 
         'percentC9',
         'percentA10', 
         'percentB10', 
         'percentC10',
         'percentA11', 
         'percentB11', 
         'percentC11', 'data'));
    }

    public function jawabanSurvey($id)
    {
        $kuesioner = Kuesioner::where('id', $id)->first();
        return view('admin.JawabanSurvey', compact('kuesioner'));
    }

}
