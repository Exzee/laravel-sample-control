<?php

namespace App\Exports;

use App\Models\Samplekeluar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class SamplekeluarExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Samplekeluar::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'Kode Sample Keluar',
            'Expedisi',
            'Tanggal Kirim',
            'Segment',
            'Jenis Sample' ,
            'Customer',
            'Product',
            'Lot Number',
            'Deskripsi Sample',
            'Foto Sample',
            'Tanggal Input',
            'Tanggal Update',
        ];
    }
}
 