@extends('layouts.pengguna.dashboard')

@section('title', 'Update Pengguna')


@section('content')

    <div class="row mt-5 pb-5">
        <a href="/pengguna" class="col-lg-2 col-sm-8 d-flex sidebar-item active justify-content-center align-items-center"
            style="color: aliceblue"><i class="bi bi-caret-left"> Kembali</i></a>

        <div class="col-12">
            <h2 class="content-title">Update Pengguna</h2>
            <h5 class="content-desc mb-4">Customer Technical Service</h5>
        </div>


        <form action="/pengguna/{{ $users->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="row">
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control statistics-card @error('name') is-invalid @enderror"
                            id="namalengkap" placeholder="12345" name="name" value="{{ old('name', $users->name) }}">
                        <label for="namalengkap">Nama Lengkap</label>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-floating">
                        <input type="text" class="form-control statistics-card @error('username') is-invalid @enderror"
                            id="username" placeholder="Username" name="username"
                            value="{{ old('username', $users->username) }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-floating">
                        <select class="form-select statistics-card" id="roleuser" name="role_user">
                            <option selected>Pilih</option>
                            <option value="Admin" @if ($users->role_user == 'Admin') selected @endif>Admin</option>
                            <option value="User" @if ($users->role_user == 'User') selected @endif>User</option>
                        </select>
                        <label for="roleuser">Role User</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="email" class="form-control statistics-card @error('email') is-invalid @enderror"
                            id="floatingemail" placeholder="ahmad@gmail.com" name="email"
                            value="{{ old('email', $users->email) }}">
                        <label for="floatingemail">Email</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="password" class="form-control statistics-card @error('password') is-invalid @enderror"
                            id="floatingnohp" placeholder="password" name="password">
                        <label for="floatingnohp">Password</label>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <hr class="border-primary">
            <button class="btn btn-primary sidebar-item active" type="submit"><i class="bi bi-hdd-fill">
                    Simpan</i></button>

        </form>

    </div>

@endsection
