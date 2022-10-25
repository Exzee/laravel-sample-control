<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $users = User::when($search, function ($query) use ($search) {
            $query->where('name', 'like', "%{$search}%")
            ->orWhere('username', 'like', "%{$search}%")
            ->orWhere('email', 'like', "%{$search}%");
        })->paginate(8);


        return view('admin.pengguna.index', compact('users'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return request()->all();
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'email' => 'required|email:dns|unique:users|max:255',
            'password' => 'required|min:6',
            'role_user' => 'required',
        ]);

        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);
        return redirect('/pengguna')->with('success', 'User Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.pengguna.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users,username,'.$users->id,
            'email' => 'required|email:dns|unique:users,email,'.$users->id,
            'password' => 'required|min:6',
            'role_user' => 'required',
        ]);

        $validateData['password'] = Hash::make($validateData['password']);
        $users->update($validateData);
        return redirect('/pengguna')->with('success', 'User Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user,$id)
    {
        $model = User::find($id);
        $model->delete();
        return redirect('/pengguna')->with('delete', 'User Berhasil Dihapus');
    }
}
