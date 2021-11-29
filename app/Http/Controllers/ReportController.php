<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seleksi;
use App\Models\Formulir;
use PhpOffice\PhpWord\TemplateProcessor;

class ReportController extends Controller
{
    public function index()
    {
        $kota = Seleksi::where('province_code', '32')->get();
        return view('admin.laporan.Laporan', compact('kota'));
    }

    public function LaporanAbsensi(Request $request)
    {
        $cities = $request->cities;
        $peminatan = $request->peminatan;
        $formulir = Formulir::where('id_cities', $cities)
        ->where('peminatan', $peminatan)->get();
        return view ('admin.laporan.LaporanAbsensi', compact('formulir'));
    }

    public function LaporanAbsensiReport(Request $request)
    {
        $cities = $request->cities;
        $peminatan = $request->peminatan;
        // $formulir = Formulir::where('id_cities', $cities)
        // ->where('peminatan', $peminatan)->get();
        // $formulir = Formulir::all();
        $report = new TemplateProcessor('word-template/DataAbsensi.docx');
        $formulir = $report->getVariables();
        
        // $report->setValue('loop', $loop->iteration);
        foreach ($formulir as $key) {
            // code...
        $report->setValue($key, 'loop');
        $report->setValue($key, 'alamat');
        }
        
        $fileName = 'tes';
        $report->saveAs($fileName. '.docx');
        return response()->download($fileName. '.docx')->deleteFileAfterSend(true);
    }
}
