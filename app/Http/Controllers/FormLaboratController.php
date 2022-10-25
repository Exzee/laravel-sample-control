<?php

namespace App\Http\Controllers;

use App\Models\FormLaborat;
use App\Models\Karyawan;
use App\Models\Samplemasuk;
use Illuminate\Http\Request;
use Termwind\Components\Dd;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Carbon\Carbon;

class FormLaboratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $search = $request->search;

        if (request()->fromDate || request()->toDate) {
            $fromDate = Carbon::parse(request()->fromDate)->toDateTimeString();
            $toDate = Carbon::parse(request()->toDate)->toDateTimeString();
            $formLaborat = FormLaborat::with('karyawan', 'samplemasuk')->whereBetween('tanggal_kirim_laborat', [$fromDate, $toDate])->latest()->paginate(6)->withquerystring();
        } elseif (request()->search) {
            $formLaborat = FormLaborat::with(['karyawan', 'samplemasuk'])
            ->when($search, function ($query) use ($search) {
            $query->where('kode_form_laborat', 'like', "%{$search}%")
            ->orWhere('kode_laporan', 'like', "%{$search}%")
            ->orWhere('tanggal_kirim_laborat', 'like', "%{$search}%");
            })->orWherehas('samplemasuk', function ($query) use ($search) {
                $query->where('kode_sample_masuk', 'like', "%{$search}%")
                ->orWhere('customer', 'like', "%{$search}%");
            })->orWherehas('karyawan', function ($query) use ($search) {
                $query->where('nama_karyawan', 'like', "%{$search}%");
            })->latest()->paginate(6)->withquerystring();
        }else{
            $formLaborat = FormLaborat::with(['karyawan', 'samplemasuk'])->latest()->paginate(6);
        }
        
        return view('laborat.index', compact('formLaborat'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laborat.create', ['karyawan' => Karyawan::all(), 'samplemasuk' => Samplemasuk::all()]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'kode_form_laborat' => 'required|unique:form_laborat',
            'sample_masuk_id' => 'required',
            'karyawan_id' => 'required',
            'tanggal_kirim_laborat' => 'required',
            'status_laborat' => 'required',
            'keterangan' => 'nullable',
            'kode_laporan' => 'nullable',
            'tanggal_selesai_laborat' => 'nullable',
            'status_sample' => 'nullable',
        ]);
                
        
        FormLaborat::create($validatedData);

        return redirect('/laborat')->with('success','Sample Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormLaborat  $formLaborat
     * @return \Illuminate\Http\Response
     */
    public function show(FormLaborat $formLaborat)
    {
        // return view('laborat.show', compact('formLaborat'));
        return view('laborat.show',[
            'laborat' => $formLaborat 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormLaborat  $formLaborat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $formLaborat = FormLaborat::with(['karyawan', 'samplemasuk',])->findOrFail($id);
        // return view('laborat.edit', compact('formLaborat'));
    
        return view('laborat.edit', ['formLaborat' => FormLaborat::findOrFail($id), 'karyawan' => Karyawan::all(), 'samplemasuk' => Samplemasuk::all()]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormLaborat  $formLaborat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormLaborat $formLaborat, $id)
    {
        // dd($request->all());
        $formLaborat = FormLaborat::findOrFail($id);
       $validatedData = $request->validate([
            'kode_form_laborat' => 'required|unique:form_laborat,kode_form_laborat,'.$formLaborat->id,
            'sample_masuk_id' => 'required',
            'karyawan_id' => 'required',
            'tanggal_kirim_laborat' => 'required',
            'status_laborat' => 'required',
            'keterangan' => 'nullable',
            'kode_laporan' => 'nullable',
            'tanggal_selesai_laborat' => 'nullable',
            'status_sample' => 'nullable',
        ]);

        // $formLaborat->update($validatedData);
        FormLaborat::whereId($id)->update($validatedData);
        // FormLaborat::where('id', $formLaborat->id)
        // ->update($validatedData);
        return redirect('/laborat')->with('success','Sample Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormLaborat  $formLaborat
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormLaborat $formLaborat, $id)
    {
        $model = FormLaborat::find($id);
        $model->delete();

        return redirect('/laborat')->with('delete','Data Berhasil Dihapus');
    }

    // function fetch(Request $request)
    // {
    //     if($request->get('query'))
    //     {
    //         $query = $request->get('query');
    //         $data = DB::table('sample_masuk')
    //             ->where('id', 'LIKE', "%{$query}%")
    //             ->orWhere('kode_sample_masuk', 'LIKE', "%{$query}%")
    //             ->get();
    //         $output = '<ul class="dropdown-menu" style="display:block; position:relative;width:100%;">';
    //         foreach($data as $row)
    //         {
    //             $output .= '
    //             <li><a class="dropdown-item" href="#">'.$row->id.'</a></li>
    //             ';
    //         }
    //         $output .= '</ul>';
    //         echo $output;
    //     }
    // }

    public function caritanggal(Request $request)
    {
       
    //    $fromDate = $request->input('fromDate');
    //    $toDate = $request->input('toDate');

       
        // $datanya = DB::table('form_laborat')->select()
        // ->Where('tanggal_kirim_laborat', '>=', $fromDate)
        // ->where('tanggal_kirim_laborat', '<=', $toDate)
        // ->get();
        // // dd($datanya);
        // return view('laborat.index', compact('datanya'));

        $cari = $request->cari;
        $fromDate = $request->fromDate;
        $toDate = $request->toDate;
        $formLaborat = FormLaborat::with(['karyawan', 'samplemasuk',])->when($cari, function ($query) use ($cari) {
            $query->where('kode_form_laborat', 'like', '%'.$cari.'%');
        })->when($fromDate, function ($query) use ($fromDate) {
            $query->where('tanggal_kirim_laborat', '>=', $fromDate);
        })->when($toDate, function ($query) use ($toDate) {
            $query->where('tanggal_kirim_laborat', '<=', $toDate);
        })->latest()->paginate(10);

        return view('laborat.index', compact('formLaborat'));


        
    }
}
