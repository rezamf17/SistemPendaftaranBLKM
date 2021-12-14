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

    public function ViewTandaTerimaBahan(Request $request)
    {
        $cities = $request->cities;
        $hari = $request->hari;
        $tanggal = $request->tanggal;
        $tahun = $request->tahun;
        $peminatan = $request->peminatan;
         $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        $tempat = Formulir::where('id_cities', $cities)->first();
        return view ('admin.laporan.ViewTandaTerimaBahan', compact('hari', 'tanggal', 'cities', 'tahun', 'tempat', 'peminatan', 'formulir'));
    }

    public function LaporanTandaTerimaBahan(Request $request)
    {
        $cities = $request->cities;
        $hari = $request->hari;
        $tanggal = $request->tanggal;
        $tahun = $request->tahun;
        $peminatan = $request->peminatan;
         $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        $tempat = Formulir::where('id_cities', $cities)->first();
        // return view ('admin.laporan.LaporanTandaTerimaBahan', compact('hari', 'tanggal', 'cities', 'tahun', 'tempat', 'peminatan', 'formulir'));
        $pdf = PDF::loadview('admin.laporan.LaporanTandaTerimaBahan', compact('hari', 'tanggal', 'cities', 'tahun', 'tempat', 'peminatan', 'formulir'));
        return $pdf->download('TandaTerimaHasilBahan-'.$peminatan.'-'.$tempat->cities->name.'-'.$tahun.'.pdf');
    }

    public function ViewTandaTerimaBahanMateri(Request $request)
    {
        $cities = $request->cities;
        $hari = $request->hari;
        $tanggal = $request->tanggal;
        $tahun = $request->tahun;
        $peminatan = $request->peminatan;
         $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        $tempat = Formulir::where('id_cities', $cities)->first();
        return view ('admin.laporan.ViewTandaTerimaBahanMateri', compact('hari', 'tanggal', 'cities', 'tahun', 'tempat', 'peminatan', 'formulir'));
    }

    public function LaporanTandaTerimaBahanMateri(Request $request)
    {
        $cities = $request->cities;
        $hari = $request->hari;
        $tanggal = $request->tanggal;
        $tahun = $request->tahun;
        $peminatan = $request->peminatan;
         $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        $tempat = Formulir::where('id_cities', $cities)->first();
        // return view ('admin.laporan.LaporanTandaTerimaBahanMateri', compact('hari', 'tanggal', 'cities', 'tahun', 'tempat', 'peminatan', 'formulir'));
        $pdf = PDF::loadview('admin.laporan.LaporanTandaTerimaBahanMateri', compact('hari', 'tanggal', 'cities', 'tahun', 'tempat', 'peminatan', 'formulir'));
        return $pdf->download('TandaTerimaHasilBahanMateri-'.$peminatan.'-'.$tempat->cities->name.'-'.$tahun.'.pdf');
    }

    public function ViewDaftarHadirPermakanan(Request $request)
    {
        $hari1 = $request->hari_1;
        $tanggal1 = $request->tanggal_1;
        $hari2 = $request->hari_2;
        $tanggal2 = $request->tanggal_2;
        $hari3 = $request->hari_3;
        $tanggal3 = $request->tanggal_3;
        $cities = $request->cities;
        $tahun = $request->tahun;
        $peminatan = $request->peminatan;
         $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        $tempat = Formulir::where('id_cities', $cities)->first();
        return view ('admin.laporan.ViewDaftarHadirPermakanan', compact(
            'hari1', 
            'tanggal1',
            'hari2', 
            'tanggal2', 
            'hari3', 
            'tanggal3', 
            'cities', 
            'tahun', 
            'tempat', 
            'peminatan', 
            'formulir'));
    }

    public function LaporanDaftarHadirPermakanan(Request $request)
    {
        $hari1 = $request->hari_1;
        $tanggal1 = $request->tanggal_1;
        $hari2 = $request->hari_2;
        $tanggal2 = $request->tanggal_2;
        $hari3 = $request->hari_3;
        $tanggal3 = $request->tanggal_3;
        $cities = $request->cities;
        $tahun = $request->tahun;
        $peminatan = $request->peminatan;
         $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        $tempat = Formulir::where('id_cities', $cities)->first();
        // return view ('admin.laporan.LaporanDaftarHadirPermakanan', compact(
        //     'hari1', 
        //     'tanggal1',
        //     'hari2', 
        //     'tanggal2', 
        //     'hari3', 
        //     'tanggal3', 
        //     'cities', 
        //     'tahun', 
        //     'tempat', 
        //     'peminatan', 
        //     'formulir'));
        $pdf = PDF::loadview('admin.laporan.LaporanDaftarHadirPermakanan', compact(
            'hari1', 
            'tanggal1',
            'hari2', 
            'tanggal2', 
            'hari3', 
            'tanggal3', 'cities', 'tahun', 'tempat', 'peminatan', 'formulir'))->setPaper('a4', 'landscape');
        return $pdf->download('DaftarHadirPermakanan-'.$peminatan.'-'.$tempat->cities->name.'-'.$tahun.'.pdf');
    }

    public function ViewDaftarHadirPelajaran(Request $request)
    {
        $jam_awal_1 = $request->jam_awal_1;
        $jam_akhir_1 = $request->jam_akhir_1;
        $jam_awal_2 = $request->jam_awal_2;
        $jam_akhir_2 = $request->jam_akhir_2;
        $jam_awal_3 = $request->jam_awal_3;
        $jam_akhir_3 = $request->jam_akhir_3;
        $jam_awal_4 = $request->jam_awal_4;
        $jam_akhir_4 = $request->jam_akhir_4;
        $jam_awal_5 = $request->jam_awal_5;
        $jam_akhir_5 = $request->jam_akhir_5;
        $jam_awal_6 = $request->jam_awal_6;
        $jam_akhir_6 = $request->jam_akhir_6;
        $nama_pertemuan_1 = $request->nama_pertemuan_1;
        $nama_pertemuan_2 = $request->nama_pertemuan_2;
        $nama_pertemuan_3 = $request->nama_pertemuan_3;
        $nama_pertemuan_4 = $request->nama_pertemuan_4;
        $nama_pertemuan_5 = $request->nama_pertemuan_5;
        $nama_pertemuan_6 = $request->nama_pertemuan_6;
        $hari = $request->hari;
        $tanggal = $request->tanggal;
        $cities = $request->cities;
        $tahun = $request->tahun;
        $peminatan = $request->peminatan;
         $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        $tempat = Formulir::where('id_cities', $cities)->first();
        return view ('admin.laporan.ViewDaftarHadirPelajaran', compact(
            'jam_awal_1', 
            'jam_awal_2', 
            'jam_awal_3', 
            'jam_awal_4', 
            'jam_awal_5', 
            'jam_awal_6',
            'jam_akhir_1', 
            'jam_akhir_2', 
            'jam_akhir_3', 
            'jam_akhir_4', 
            'jam_akhir_5', 
            'jam_akhir_6',
            'nama_pertemuan_1', 
            'nama_pertemuan_2', 
            'nama_pertemuan_3', 
            'nama_pertemuan_4', 
            'nama_pertemuan_5', 
            'nama_pertemuan_6', 
            'cities',
            'hari',
            'tanggal', 
            'tahun', 
            'tempat', 
            'peminatan', 
            'formulir'));
    }

    public function LaporanDaftarHadirPelajaran(Request $request)
    {
        $jam_awal_1 = $request->jam_awal_1;
        $jam_akhir_1 = $request->jam_akhir_1;
        $jam_awal_2 = $request->jam_awal_2;
        $jam_akhir_2 = $request->jam_akhir_2;
        $jam_awal_3 = $request->jam_awal_3;
        $jam_akhir_3 = $request->jam_akhir_3;
        $jam_awal_4 = $request->jam_awal_4;
        $jam_akhir_4 = $request->jam_akhir_4;
        $jam_awal_5 = $request->jam_awal_5;
        $jam_akhir_5 = $request->jam_akhir_5;
        $jam_awal_6 = $request->jam_awal_6;
        $jam_akhir_6 = $request->jam_akhir_6;
        $nama_pertemuan_1 = $request->nama_pertemuan_1;
        $nama_pertemuan_2 = $request->nama_pertemuan_2;
        $nama_pertemuan_3 = $request->nama_pertemuan_3;
        $nama_pertemuan_4 = $request->nama_pertemuan_4;
        $nama_pertemuan_5 = $request->nama_pertemuan_5;
        $nama_pertemuan_6 = $request->nama_pertemuan_6;
        $hari = $request->hari;
        $tanggal = $request->tanggal;
        $cities = $request->cities;
        $tahun = $request->tahun;
        $peminatan = $request->peminatan;
         $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        $tempat = Formulir::where('id_cities', $cities)->first();
        // return view ('admin.laporan.LaporanDaftarHadirPelajaran', compact(
        //     'jam_awal_1', 
        //     'jam_awal_2', 
        //     'jam_awal_3', 
        //     'jam_awal_4', 
        //     'jam_awal_5', 
        //     'jam_awal_6',
        //     'jam_akhir_1', 
        //     'jam_akhir_2', 
        //     'jam_akhir_3', 
        //     'jam_akhir_4', 
        //     'jam_akhir_5', 
        //     'jam_akhir_6',
        //     'nama_pertemuan_1', 
        //     'nama_pertemuan_2', 
        //     'nama_pertemuan_3', 
        //     'nama_pertemuan_4', 
        //     'nama_pertemuan_5', 
        //     'nama_pertemuan_6', 
        //     'cities',
        //     'hari',
        //     'tanggal', 
        //     'tahun', 
        //     'tempat', 
        //     'peminatan', 
        //     'formulir'));
        $pdf = PDF::loadview('admin.laporan.LaporanDaftarHadirPelajaran', compact(
            'jam_awal_1', 
            'jam_awal_2', 
            'jam_awal_3', 
            'jam_awal_4', 
            'jam_awal_5', 
            'jam_awal_6',
            'jam_akhir_1', 
            'jam_akhir_2', 
            'jam_akhir_3', 
            'jam_akhir_4', 
            'jam_akhir_5', 
            'jam_akhir_6',
            'nama_pertemuan_1', 
            'nama_pertemuan_2', 
            'nama_pertemuan_3', 
            'nama_pertemuan_4', 
            'nama_pertemuan_5', 
            'nama_pertemuan_6', 'cities', 'tahun', 'tempat', 'peminatan', 'formulir', 'hari', 'tanggal'))->setPaper('a4', 'landscape');
        return $pdf->download('DaftarHadirPelajaran-'.$peminatan.'-'.$tempat->cities->name.'-'.$tahun.'.pdf');
    }

    public function ViewDaftarNominatif(Request $request)
    {
        $cities = $request->cities;
        $peminatan = $request->peminatan;
        $tahun = $request->tahun;
        $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        $tempat = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->first();
        // dd($request->all());
        return view ('admin.laporan.ViewDaftarNominatif', compact('formulir', 'peminatan', 'tempat', 'cities', 'tahun'));
    }

    public function LaporanDaftarNominatif(Request $request)
    {
        $cities = $request->cities;
        $peminatan = $request->peminatan;
        $tahun = $request->tahun;
        $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        $tempat = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->first();
        // dd($request->all());
        // return view ('admin.laporan.LaporanDaftarNominatif', compact('formulir', 'peminatan', 'tempat', 'cities', 'tahun'));
        $pdf = PDF::loadview('admin.laporan.LaporanDaftarNominatif', compact(
         'cities', 'tahun', 'peminatan', 'formulir', 'tempat'));
        return $pdf->download('DaftarNominatif-'.$peminatan.'-'.$tempat->cities->name.'-'.$tahun.'.pdf');
    }

    public function ViewSertifikat(Request $request, $id)
    {
        $nomor = $request->nomor;
        $tahun = $request->tahun;
        $mulai = $request->mulai;
        $selesai = $request->selesai;
        $tempat = $request->tempat;
        $formulir = Formulir::where('id', $id)->first();
        return view ('admin.laporan.ViewSertifikat', compact('tempat', 'tahun', 'nomor', 'mulai', 'selesai', 'formulir'));
    }

    public function LaporanSertifikat(Request $request, $id)
    {
        $nomor = $request->nomor;
        $tahun = $request->tahun;
        $mulai = $request->mulai;
        $selesai = $request->selesai;
        $tempat = $request->tempat;
        $formulir = Formulir::where('id', $id)->first();
        // return view ('admin.laporan.LaporanSertifikat', compact('tempat', 'tahun', 'nomor', 'mulai', 'selesai', 'formulir'));
        $pdf = PDF::loadview('admin.laporan.LaporanSertifikat', compact(
         'tempat', 'tahun', 'nomor', 'mulai', 'selesai', 'formulir'))->setPaper('a4', 'landscape');;
        return $pdf->download('Sertifikat-'.$formulir->nama.'.pdf');
    }
}
