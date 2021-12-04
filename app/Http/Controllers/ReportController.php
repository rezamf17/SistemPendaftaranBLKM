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

    public function ViewAbsensiUndangan(Request $request)
    {
        $cities = $request->cities;
        $hari = $request->hari;
        $tanggal = $request->tanggal;
        $tahun = $request->tahun;
        $tempat = Formulir::where('id_cities', $cities)->first();
        return view ('admin.laporan.ViewDaftarHadirUndangan', compact('hari', 'tanggal', 'cities', 'tahun', 'tempat'));
    }
    public function LaporanAbsensiUndangan(Request $request)
    {
        $cities = $request->cities;
        $hari = $request->hari;
        $tanggal = $request->tanggal;
        $tahun = $request->tahun;
        $tempat = Formulir::where('id_cities', $cities)->first();
        // return view ('admin.laporan.LaporanDaftarHadirUndangan', compact('hari', 'tanggal', 'cities', 'tahun', 'tempat'));
        $pdf = PDF::loadview('admin.laporan.LaporanDaftarHadirUndangan', compact('hari', 'tanggal', 'cities', 'tahun', 'tempat'));
        return $pdf->download('Daftar-Hadir-Undangan'.$tanggal.'-'.$tempat->cities->name.'.pdf');
    }

    public function ViewTandaTerimaSertifikat(Request $request)
    {
        $cities = $request->cities;
        $hari = $request->hari;
        $tanggal = $request->tanggal;
        $tahun = $request->tahun;
        $peminatan = $request->peminatan;
         $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        $tempat = Formulir::where('id_cities', $cities)->first();
        return view ('admin.laporan.ViewTandaTerimaSertifikat', compact('hari', 'tanggal', 'cities', 'tahun', 'tempat', 'peminatan', 'formulir'));
    }

    public function LaporanTandaTerimaSertifikat(Request $request)
    {
        $cities = $request->cities;
        $hari = $request->hari;
        $tanggal = $request->tanggal;
        $tahun = $request->tahun;
        $peminatan = $request->peminatan;
         $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        $tempat = Formulir::where('id_cities', $cities)->first();
        // return view ('admin.laporan.LaporanTandaTerimaSertifikat', compact('hari', 'tanggal', 'cities', 'tahun', 'tempat', 'peminatan', 'formulir'));
        $pdf = PDF::loadview('admin.laporan.LaporanTandaTerimaSertifikat', compact('hari', 'tanggal', 'cities', 'tahun', 'tempat', 'peminatan', 'formulir'));
        return $pdf->download('TandaTerimaSertifikat-'.$peminatan.'-'.$tempat->cities->name.'-'.$tahun.'.pdf');
    }

    public function ViewTandaTerimaPerlengkapan(Request $request)
    {
        $cities = $request->cities;
        $hari = $request->hari;
        $tanggal = $request->tanggal;
        $tahun = $request->tahun;
        $peminatan = $request->peminatan;
        $perlengkapan_1 = $request->perlengkapan_1;
        $perlengkapan_2 = $request->perlengkapan_2;
        $perlengkapan_3 = $request->perlengkapan_3;
        $perlengkapan_4 = $request->perlengkapan_4;
        $perlengkapan_5 = $request->perlengkapan_5;
        $perlengkapan_6 = $request->perlengkapan_6;
         $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        $tempat = Formulir::where('id_cities', $cities)->first();
        return view ('admin.laporan.ViewTandaTerimaPerlengkapan', compact(
            'hari', 
            'tanggal', 
            'cities', 
            'tahun', 
            'tempat', 
            'peminatan', 
            'formulir',
            'perlengkapan_1',
            'perlengkapan_2',
            'perlengkapan_3',
            'perlengkapan_4',
            'perlengkapan_5',
            'perlengkapan_6',));
    }

    public function LaporanTandaTerimaPerlengkapan(Request $request)
    {
        $cities = $request->cities;
        $hari = $request->hari;
        $tanggal = $request->tanggal;
        $tahun = $request->tahun;
        $peminatan = $request->peminatan;
        $perlengkapan_1 = $request->perlengkapan_1;
        $perlengkapan_2 = $request->perlengkapan_2;
        $perlengkapan_3 = $request->perlengkapan_3;
        $perlengkapan_4 = $request->perlengkapan_4;
        $perlengkapan_5 = $request->perlengkapan_5;
        $perlengkapan_6 = $request->perlengkapan_6;
         $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        $tempat = Formulir::where('id_cities', $cities)->first();
        // return view ('admin.laporan.LaporanTandaTerimaPerlengkapan', compact(
        //     'hari', 
        //     'tanggal', 
        //     'cities', 
        //     'tahun', 
        //     'tempat', 
        //     'peminatan', 
        //     'formulir',
        //     'perlengkapan_1',
        //     'perlengkapan_2',
        //     'perlengkapan_3',
        //     'perlengkapan_4',
        //     'perlengkapan_5',
        //     'perlengkapan_6',
        // ));
        $pdf = PDF::loadview('admin.laporan.LaporanTandaTerimaPerlengkapan', compact('hari', 'tanggal', 'cities', 'tahun', 'tempat', 'peminatan', 'formulir', 'perlengkapan_1',
            'perlengkapan_2',
            'perlengkapan_3',
            'perlengkapan_4',
            'perlengkapan_5',
            'perlengkapan_6',));
        return $pdf->download('TandaTerimaPerlengkapan-'.$peminatan.'-'.$tempat->cities->name.'-'.$tahun.'.pdf');
    }

    public function ViewTandaTerimaHasilPraktik(Request $request)
    {
        $cities = $request->cities;
        $hari = $request->hari;
        $tanggal = $request->tanggal;
        $tahun = $request->tahun;
        $peminatan = $request->peminatan;
        $bahan_praktik = $request->bahan_praktik;
         $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        $tempat = Formulir::where('id_cities', $cities)->first();
        return view ('admin.laporan.ViewTandaTerimaHasilPraktik', compact('hari', 'tanggal', 'cities', 'tahun', 'tempat', 'peminatan', 'formulir', 'bahan_praktik'));
    }

    public function LaporanTandaTerimaHasilPraktik(Request $request)
    {
        $cities = $request->cities;
        $hari = $request->hari;
        $tanggal = $request->tanggal;
        $tahun = $request->tahun;
        $peminatan = $request->peminatan;
        $bahan_praktik = $request->bahan_praktik;
         $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        $tempat = Formulir::where('id_cities', $cities)->first();
        // return view ('admin.laporan.LaporanTandaTerimaHasilPraktik', compact('hari', 'tanggal', 'cities', 'tahun', 'tempat', 'peminatan', 'formulir', 'bahan_praktik'));
        $pdf = PDF::loadview('admin.laporan.LaporanTandaTerimaHasilPraktik', compact('hari', 'tanggal', 'cities', 'tahun', 'tempat', 'peminatan', 'formulir', 'bahan_praktik'));
        return $pdf->download('TandaTerimaHasilPraktik-'.$peminatan.'-'.$tempat->cities->name.'-'.$tahun.'.pdf');
    }

    public function ViewTandaTerimaObat(Request $request)
    {
        $cities = $request->cities;
        $hari = $request->hari;
        $tanggal = $request->tanggal;
        $tahun = $request->tahun;
        $peminatan = $request->peminatan;
         $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        $tempat = Formulir::where('id_cities', $cities)->first();
        return view ('admin.laporan.ViewTandaTerimaObat', compact('hari', 'tanggal', 'cities', 'tahun', 'tempat', 'peminatan', 'formulir'));
    }

    public function LaporanTandaTerimaObat(Request $request)
    {
        $cities = $request->cities;
        $hari = $request->hari;
        $tanggal = $request->tanggal;
        $tahun = $request->tahun;
        $peminatan = $request->peminatan;
         $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        $tempat = Formulir::where('id_cities', $cities)->first();
        // return view ('admin.laporan.LaporanTandaTerimaObat', compact('hari', 'tanggal', 'cities', 'tahun', 'tempat', 'peminatan', 'formulir'));
        $pdf = PDF::loadview('admin.laporan.LaporanTandaTerimaObat', compact('hari', 'tanggal', 'cities', 'tahun', 'tempat', 'peminatan', 'formulir'));
        return $pdf->download('TandaTerimaHasilObat-'.$peminatan.'-'.$tempat->cities->name.'-'.$tahun.'.pdf');
    }
}
