<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Karyawan;
use App\Models\Samplemasuk;

class FormLaborat extends Model
{
    
    use HasFactory;
    protected $table = 'form_laborat';
    protected $guarded = ['id'];



    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id');
    }

    public function samplemasuk()
    {
        return $this->belongsTo(SampleMasuk::class, 'sample_masuk_id');
    }

}
