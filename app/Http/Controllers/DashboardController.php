<?php

namespace App\Http\Controllers;
use App\Models\FormLaborat;
use App\Models\Karyawan;
use App\Models\Samplemasuk;
use App\Models\Samplekeluar;
Use Carbon\Carbon;
use App\Exports\SamplemasukExport;
use App\Exports\SamplekeluarExport;
use App\Exports\LaboratExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all()->count();
        $samplemasuk = Samplemasuk::all()->count();
        $samplekeluar = Samplekeluar::all()->count();
        $formLaborat = FormLaborat::all()->count();
        

        // --------------------  SEMUA DATA SAMPLE MASUK START --------------------
        // DATA SEMUA SAMPLE MASUK BY BULAN
        $datasm = Samplemasuk::select('id','tanggal_terima')->orderby('tanggal_terima','ASC')->get()->groupby(function($date) {
            return Carbon::parse($date->tanggal_terima)->format('M-Y');
        });
        $bulan = [];
        $hitungbulan = [];
        foreach ($datasm as $key => $value) {
            $bulan[] = $key;
            $hitungbulan[] = count($value);
        }       
        // ALL SEGMENT BY TAHUN --- 
        $allsegment = Samplemasuk::whereIn('segment', ['Domestic', 'Export'])->orderby('tanggal_terima','ASC')->get()->groupby(function($date) {
            return Carbon::parse($date->tanggal_terima)->format('Y');
        });
        $alltahun = [];
        $hitungtahunall = [];
        foreach ($allsegment as $keyall => $valueall) {
            $alltahun[] = $keyall;
            $hitungtahunall[] = count($valueall);
        }

        // DOMESTIC SEGMENT BY TAHUN
        $domsegment = Samplemasuk::where('segment','Domestic')->orderby('tanggal_terima','ASC')->get()->groupby(function($date) {
            return Carbon::parse($date->tanggal_terima)->format('Y');
        });
        $domsegment_tahun = [];
        $domsegment_hitungtahun = [];
        foreach ($domsegment as $keydom => $domestic) {
            $domsegment_tahun[] = $keydom;
            $domsegment_hitungtahun[] = count($domestic);
        }
        // EXPORT SEGMENT BY TAHUN
        $expsegment = Samplemasuk::where('segment','Export')->orderby('tanggal_terima','ASC')->get()->groupby(function($date) {
            return Carbon::parse($date->tanggal_terima)->format('Y');
        });
        $expsegment_tahun = [];
        $expsegment_hitungtahun = [];
        foreach ($expsegment as $keyexp => $export) {
            $expsegment_tahun[] = $keyexp;
            $expsegment_hitungtahun[] = count($export);
        }

        // SAMPLE COMPLAINT BY TAHUN
        $domsegment = Samplemasuk::where('jenis_sample','Complaint')->orderby('tanggal_terima','ASC')->get()->groupby(function($date) {
            return Carbon::parse($date->tanggal_terima)->format('Y');
        });
        $kategoricompl_tahun = [];
        $kategoricompl_hitungtahun = [];
        foreach ($domsegment as $keydom => $complaint) {
            $kategoricompl_tahun[] = $keydom;
            $kategoricompl_hitungtahun[] = count($complaint);
        }
        // SAMPLE COMPLAINT BY TAHUN
        $expsegment = Samplemasuk::where('jenis_sample','Market')->orderby('tanggal_terima','ASC')->get()->groupby(function($date) {
            return Carbon::parse($date->tanggal_terima)->format('Y');
        });
        $kategorimarket_tahun = [];
        $kategorimarket_hitungtahun = [];
        foreach ($expsegment as $keyexp => $market) {
            $kategorimarket_tahun[] = $keyexp;
            $kategorimarket_hitungtahun[] = count($market);
        }
        // --------------------  SEMUA DATA SAMPLE MASUK END --------------------


        // --------------------  SEMUA DATA SAMPLE KELUAR START --------------------
        // DATA SEMUA SAMPLE KELUAR BY BULAN
        $datask = Samplekeluar::select('id','tanggal_kirim')->orderby('tanggal_kirim','ASC')->get()->groupby(function($date) {
            return Carbon::parse($date->tanggal_kirim)->format('M-Y');
        });
        $sk_bulan = [];
        $sk_hitungbulan = [];
        foreach ($datask as $key => $skbulan_value) {
            $sk_bulan[] = $key;
            $sk_hitungbulan[] = count($skbulan_value);
        }   
        // DOMESTIC SEGMENT BY TAHUN
        $domsegment = Samplekeluar::where('segment','Domestic')->orderby('tanggal_kirim','ASC')->get()->groupby(function($date) {
            return Carbon::parse($date->tanggal_kirim)->format('Y');
        });
        $sk_domsegment_tahun = [];
        $sk_domsegment_hitungtahun = [];
        foreach ($domsegment as $sk_keydom => $sk_domestic) {
            $sk_domsegment_tahun[] = $sk_keydom;
            $sk_domsegment_hitungtahun[] = count($sk_domestic);
        }
        // EXPORT SEGMENT BY TAHUN
        $expsegment = Samplekeluar::where('segment','Export')->orderby('tanggal_kirim','ASC')->get()->groupby(function($date) {
            return Carbon::parse($date->tanggal_kirim)->format('Y');
        });
        $sk_expsegment_tahun = [];
        $sk_expsegment_hitungtahun = [];
        foreach ($expsegment as $sk_keyexp => $sk_export) {
            $sk_expsegment_tahun[] = $sk_keyexp;
            $sk_expsegment_hitungtahun[] = count($sk_export);
        }    
        // SAMPLE COMPLAINT BY TAHUN
        $sk_domsegment = Samplekeluar::where('jenis_sample','Complaint')->orderby('tanggal_kirim','ASC')->get()->groupby(function($date) {
            return Carbon::parse($date->tanggal_kirim)->format('Y');
        });
        $sk_kategoricompl_tahun = [];
        $sk_kategoricompl_hitungtahun = [];
        foreach ($sk_domsegment as $sk_keydom => $sk_complaint) {
            $sk_kategoricompl_tahun[] = $sk_keydom;
            $sk_kategoricompl_hitungtahun[] = count($sk_complaint);
        }
        // SAMPLE COMPLAINT BY TAHUN
        $sk_expsegment = Samplekeluar::where('jenis_sample','Market')->orderby('tanggal_kirim','ASC')->get()->groupby(function($date) {
            return Carbon::parse($date->tanggal_kirim)->format('Y');
        });
        $sk_kategorimarket_tahun = [];
        $sk_kategorimarket_hitungtahun = [];
        foreach ($sk_expsegment as $sk_keyexp => $sk_market) {
            $sk_kategorimarket_tahun[] = $sk_keyexp;
            $sk_kategorimarket_hitungtahun[] = count($sk_market);
        }


        return view('layouts.main', compact('karyawan', 'samplemasuk', 'samplekeluar','formLaborat','datasm','bulan','hitungbulan','domsegment_tahun','domsegment_hitungtahun','domsegment','expsegment','expsegment_tahun','expsegment_hitungtahun','allsegment','alltahun','hitungtahunall','kategoricompl_tahun','kategoricompl_hitungtahun','kategorimarket_tahun','kategorimarket_hitungtahun','datask','sk_bulan','sk_hitungbulan','sk_domsegment_tahun','sk_domsegment_hitungtahun','sk_expsegment_tahun','sk_expsegment_hitungtahun','sk_kategoricompl_tahun','sk_kategoricompl_hitungtahun','sk_kategorimarket_tahun','sk_kategorimarket_hitungtahun'));
    }



    public function grafikkaryawan()
    {
        // return view('layouts.main',['title'=>'grafikkaryawan']);
    }

    public function exporsamplemasuk()
    {
        return Excel::download(new SamplemasukExport, 'samplemasuk.xlsx');
    }
    public function exporsamplekeluar()
    {
        return Excel::download(new SamplekeluarExport, 'samplekeluar.xlsx');
    }
    public function exporsamplelaborat()
    {
        return Excel::download(new LaboratExport, 'laborat.xlsx');
    }
}
