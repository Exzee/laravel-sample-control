<?php

namespace App\Http\Controllers;

use App\Models\Samplemasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;
use App\Exports\SamplemasukExport;
use Maatwebsite\Excel\Facades\Excel;

class SampleMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        // PERULANGAN KONDISI
        $search = $request->search;

        if (request()->fromDate || request()->toDate) {
            $fromDate = Carbon::parse(request()->fromDate)->toDateTimeString();
            $toDate = Carbon::parse(request()->toDate)->toDateTimeString();
            $samplemasuk = Samplemasuk::whereBetween('tanggal_terima', [$fromDate, $toDate])->latest()->paginate(10)->withquerystring();
        } elseif (request()->search) {
            $samplemasuk = Samplemasuk::when($search, function ($query) use ($search) {
                $query->where('kode_sample_masuk', 'like', "%{$search}%")
                ->orWhere('customer', 'like', "%{$search}%")
                ->orWhere('lot_number', 'like', "%{$search}%")
                ->orWhere('nama_pengirim', 'like', "%{$search}%")
                ->orwhereDate('tanggal_terima', 'like', "%{$search}%")
                ->orwhereTime('tanggal_terima', 'like', "%{$search}%");
            })->latest()->paginate(10)->withquerystring();
        }else{
            $samplemasuk = Samplemasuk::latest()->paginate(10);
        }
        return view('samplemasuk.index', compact('samplemasuk', 'search'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('samplemasuk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_sample_masuk' => 'required|unique:sample_masuk',
            'nama_pengirim' => 'required|max:255',
            'tanggal_terima' => 'required',
            'segment' => 'required',
            'jenis_sample' => 'required',
            'customer' => 'required',
            'product' => 'required',
            'lot_number' => 'required',
            'problem' => 'required',
            'deskripsi_sample' => 'required',
            'foto_sample_masuk' => 'image|file|max:3072|',
        ]);

        //Upload File Foto
        if($request->file('foto_sample_masuk')){
            $validatedData['foto_sample_masuk'] = $request->file('foto_sample_masuk')->store('sample-masuk');
        }

        Samplemasuk::create($validatedData);

        return redirect('samplemasuk')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Samplemasuk  $samplemasuk
     * @return \Illuminate\Http\Response
     */
    public function show(Samplemasuk $samplemasuk)
    {
        return view('samplemasuk.show', compact('samplemasuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Samplemasuk  $samplemasuk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $samplemasuk = Samplemasuk::find($id);
        return view('samplemasuk.edit', compact('samplemasuk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Samplemasuk  $samplemasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $samplemasuk = Samplemasuk::find($id);
        $validatedData = $request->validate([
            'kode_sample_masuk' => 'required|unique:sample_masuk,kode_sample_masuk,'.$samplemasuk->id,
            'nama_pengirim' => 'required|max:255',
            'tanggal_terima' => 'required',
            'segment' => 'required',
            'jenis_sample' => 'required',
            'customer' => 'required',
            'product' => 'required',
            'lot_number' => 'required',
            'problem' => 'required',
            'deskripsi_sample' => 'required',
            'foto_sample_masuk' => 'image|file|max:3072|',
        ]);

        //Upload File Foto with validasi
        if($request->file('foto_sample_masuk')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['foto_sample_masuk'] = $request->file('foto_sample_masuk')->store('sample-masuk');
        }

        $samplemasuk->update($validatedData);
        

        return redirect('/samplemasuk')->with('success','Data Berhasil Dirubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Samplemasuk  $samplemasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Samplemasuk $samplemasuk)
    {
        if($samplemasuk->image){
            Storage::delete($samplemasuk->image);
        }

        Samplemasuk::destroy($samplemasuk->id);

        Return redirect('/samplemasuk')->with('delete', 'Data Berhasil Dihapus');
    }

    // public function exportexcel()
    // {
    //     // return view('claim.csa');
    //     return Excel::download(new SamplemasukExport, 'samplemasuk.xlsx');
    // }
    
}
