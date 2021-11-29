<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Formulir;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class UserFormulirExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    protected $id;
    protected $formulir;
    public function __construct($id, $formulir)
    {
        $this->id = $id;
        $this->formulir = $formulir;
    }
    public function view(): View
    {
        $id = $this->id;
        $formulir = $this->formulir;
        return view('admin.laporan.LaporanBiodata', compact('id', 'formulir'));
    }
}
