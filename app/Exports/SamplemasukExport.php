<?php

namespace App\Exports;

use App\Models\Samplemasuk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SamplemasukExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Samplemasuk::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'Kode Sample Masuk',
            'Nama pengirim',
            'Tanggal Terima',
            'Segment',
            'Jenis Sample' ,
            'Customer',
            'Product',
            'Lot Number',
            'Problem',
            'Deskripsi Sample',
            'Foto Sample',
            'Tanggal Input',
            'Tanggal Update',
        ];
    }
}
