<?php

namespace App\Http\Controllers;

use App\Models\Samplekeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
Use Illuminate\Support\Carbon;

class SampleKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // // $samplekeluar = Samplekeluar::all();
        // $search = $request->search;
        // $samplekeluar = Samplekeluar::when($search, function ($query) use ($search) {
        //     $query->where('kode_sample_keluar', 'like', "%{$search}%")
        //     ->orWhere('customer', 'like', "%{$search}%")
        //     ->orWhere('expedisi_pengiriman', 'like', "%{$search}%")
        //     ->orwhereDate('tanggal_kirim', 'like', "%{$search}%")
        //     ->orwhereTime('tanggal_kirim', 'like', "%{$search}%");
        // })->latest()->paginate(10);

        // PERULANGAN KONDISI
        $search = $request->search;

        if (request()->fromDate || request()->toDate) {
            $fromDate = Carbon::parse(request()->fromDate)->toDateTimeString();
            $toDate = Carbon::parse(request()->toDate)->toDateTimeString();
            $samplekeluar = Samplekeluar::whereBetween('tanggal_kirim', [$fromDate, $toDate])->latest()->paginate(10)->withquerystring();
        } elseif (request()->search) {
            $samplekeluar = Samplekeluar::when($search, function ($query) use ($search) {
                $query->where('kode_sample_keluar', 'like', "%{$search}%")
                ->orWhere('customer', 'like', "%{$search}%")
                ->orWhere('expedisi_pengiriman', 'like', "%{$search}%")
                ->orwhereDate('tanggal_kirim', 'like', "%{$search}%")
                ->orwhereTime('tanggal_kirim', 'like', "%{$search}%");
            })->latest()->paginate(10)->withquerystring();
        }else{
            $samplekeluar = Samplekeluar::latest()->paginate(10);
        }

        return view('Samplekeluar.index', compact('samplekeluar', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('samplekeluar.create');
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
            'kode_sample_keluar' => 'required|unique:sample_keluar',
            'expedisi_pengiriman' => 'required',
            'tanggal_kirim' => 'required',
            'segment' => 'required',
            'jenis_sample' => 'required',
            'customer' => 'required',
            'product' => 'required',
            'lot_number' => 'required',
            'deskripsi_sample' => 'required',
            'foto_sample_keluar' => 'image|file|max:3072|',
        ]);

        //Upload File Foto
        if($request->file('foto_sample_keluar')){
            $validatedData['foto_sample_keluar'] = $request->file('foto_sample_keluar')->store('sample-keluar');
        }

        Samplekeluar::create($validatedData);

        return redirect('samplekeluar')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Samplekeluar  $samplekeluar
     * @return \Illuminate\Http\Response
     */
    public function show(Samplekeluar $samplekeluar)
    {
        return view('samplekeluar.show', compact('samplekeluar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Samplekeluar  $samplekeluar
     * @return \Illuminate\Http\Response
     */
    public function edit(Samplekeluar $samplekeluar)
    {
        return view('samplekeluar.edit', compact('samplekeluar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Samplekeluar  $samplekeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $samplekeluar = Samplekeluar::find($id);
        $validatedData = $request->validate([
            'kode_sample_keluar' => 'required|unique:sample_keluar,kode_sample_keluar,'.$samplekeluar->id,
            'expedisi_pengiriman' => 'required',
            'tanggal_kirim' => 'required',
            'segment' => 'required',
            'jenis_sample' => 'required',
            'customer' => 'required',
            'product' => 'required',
            'lot_number' => 'required',
            'deskripsi_sample' => 'required',
            'foto_sample_keluar' => 'image|file|max:3072|',
        ]);

        //Upload File Foto with validasi
        if($request->file('foto_sample_keluar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['foto_sample_keluar'] = $request->file('foto_sample_keluar')->store('sample-keluar');
        }

        $samplekeluar->update($validatedData);
        

        return redirect('/samplekeluar')->with('success','Data Berhasil Dirubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Samplekeluar  $samplekeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Samplekeluar $samplekeluar)
    {
        if($samplekeluar->image){
            Storage::delete($samplekeluar->image);
        }

        Samplekeluar::destroy($samplekeluar->id);

        Return redirect('/samplekeluar')->with('delete', 'Data Berhasil Dihapus');
    }
}
