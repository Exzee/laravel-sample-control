<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
        // $karyawan = Karyawan::all();
        $search = $request->search;
        $karyawan = Karyawan::when($search, function ($query) use ($search) {
            $query->where('nama_karyawan', 'like', "%{$search}%")
            ->orWhere('no_badge', 'like', "%{$search}%");
        })->paginate(9);


        return view('karyawan.index', compact('karyawan'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create');
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
            'no_badge' => 'required|max:20',
            'nama_karyawan' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required|email|unique:karyawan',
            'no_hp' => 'required|unique:karyawan',
            'agama' => 'required',
            'tahun_masuk' => 'required',
            'status_pernikahan' => 'required',
            'jabatan' => 'required',
            'status_jabatan' => 'required',
            'foto_karyawan' => 'image|file|max:1024|',
        ]);

        //Upload File Foto
        if($request->file('foto_karyawan')){
            $validatedData['foto_karyawan'] = $request->file('foto_karyawan')->store('avatars');
        }

        Karyawan::create($validatedData);

        return redirect('karyawan')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        return view('karyawan.show', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit', compact('karyawan'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::find($id);
        $validatedData = $request->validate([
            'no_badge' => 'required|max:20',
            'nama_karyawan' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required|email|unique:karyawan,email,'.$karyawan->id,
            'no_hp' => 'required|unique:karyawan,no_hp,'.$karyawan->id,
            'agama' => 'required',
            'tahun_masuk' => 'required',
            'status_pernikahan' => 'required',
            'jabatan' => 'required',
            'status_jabatan' => 'required',
            'foto_karyawan' => 'image|file|max:1024|',
        ]);
        
        // UPLOAD IMAGE SETELAH VALIDASI
        if($request->file('foto_karyawan')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['foto_karyawan'] = $request->file('foto_karyawan')->store('Avatars');
        }

        $karyawan->update($validatedData);
        

        return redirect('/karyawan')->with('success','Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        if($karyawan->image){
            Storage::delete($karyawan->image);
        }

        Karyawan::destroy($karyawan->id);

        return redirect('karyawan')->with('delete','Data Berhasil Dihapus');
    }
}
