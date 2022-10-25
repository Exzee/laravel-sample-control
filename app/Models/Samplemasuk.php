<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Samplemasuk extends Model
{
    use HasFactory;
    protected $table = 'sample_masuk';
    protected $guarded = ['id'];


    public function formlaborat()
    {
        return $this->hasMany(FormLaborat::class);
    }
}
