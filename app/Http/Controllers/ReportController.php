<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seleksi;
use App\Models\Formulir;
use PhpOffice\PhpWord\TemplateProcessor;
use Dompdf\Dompdf;
use PDF;

class ReportController extends Controller
{
    public function index()
    {
        $kota = Seleksi::where('province_code', '32')->get();
        return view('admin.laporan.Laporan', compact('kota'));
    }

    public function ViewAbsensi(Request $request)
    {
        $cities = $request->cities;
        $peminatan = $request->peminatan;
        $hari = $request->hari;
        $tanggal = $request->tanggal;
        $tahun = $request->tahun;
        $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        $tempat = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->first();
        // dd($request->all());
        return view ('admin.laporan.ViewAbsensi', compact('formulir', 'peminatan', 'hari', 'tanggal', 'tempat', 'cities', 'tahun'));
    }

    public function LaporanAbsensi(Request $request)
    {
        $hari = $request->hari;
        $tanggal = $request->tanggal;
        $cities = $request->cities;
        $peminatan = $request->peminatan;
        $tahun = $request->tahun;
        $tempat = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->first();
        $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        // return view ('admin.laporan.LaporanAbsensi', compact('formulir', 'peminatan', 'hari', 'tanggal', 'tempat', 'cities'));
        $pdf = PDF::loadview('admin.laporan.LaporanAbsensi', compact('formulir', 'peminatan', 'hari', 'tanggal', 'tempat', 'cities', 'tahun'));
        return $pdf->download('Daftar-Hadir-'.$peminatan.'-'.$tahun.$tempat->cities->name.'.pdf');

    }
}
