<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Samplekeluar extends Model
{
    use HasFactory;
    protected $table = 'sample_keluar';
    protected $guarded = ['id'];
}
