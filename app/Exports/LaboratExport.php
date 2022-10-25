<?php

namespace App\Exports;

use App\Models\FormLaborat;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class LaboratExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return FormLaborat::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'Kode Form Laborat',
            'Sample Masuk ID',
            'Karyawan ID',
            'Tanggal Kirim Ke Laborat',
            'Status Laborat' ,
            'Keterangan',
            'Kode Laporan',
            'Tanggal Selesai Laborat',
            'Status Sample',
            'Tanggal Input',
            'Tanggal Update',
        ];
    }
}
