<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        // return request()->all();
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:6',
            'role_user' => 'required',
        ]);

        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);
        return redirect('/login')->with('success', 'User Baru Berhasil Ditambahkan');
    }
}
