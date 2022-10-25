@extends('layouts.pengguna.dashboard')

@section('title', 'Tambah Pengguna')


@section('content')

    <div class="row mt-5 pb-5">
        <a href="/pengguna" class="col-lg-2 col-sm-8 d-flex sidebar-item active justify-content-center align-items-center"
            style="color: aliceblue"><i class="bi bi-caret-left"> Kembali</i></a>

        <div class="col-12">
            <h2 class="content-title">Tambah Pengguna Sistem</h2>
            <h5 class="content-desc mb-4">Customer Technical Service</h5>
        </div>


        <form action="/pengguna" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control statistics-card @error('name') is-invalid @enderror"
                            id="namalengkap" placeholder="Nama Lengkap" name="name">
                        <label for="namalengkap">Nama Lengkap</label>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-floating">
                        <input type="text" class="form-control statistics-card @error('username') is-invalid @enderror"
                            id="username" placeholder="username" name="username">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-floating">
                        <select class="form-select statistics-card @error('role_user') is-invalid @enderror" id="roleuser"
                            name="role_user">
                            <option selected>Pilih</option>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                        <label for="roleuser">Role Pengguna</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="email" class="form-control statistics-card @error('email') is-invalid @enderror"
                            id="floatingemail" placeholder="ahmad@gmail.com" name="email">
                        <label for="floatingemail">Email</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="password" class="form-control statistics-card @error('password') is-invalid @enderror"
                            id="password" placeholder="password" name="password">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


            </div>
            <hr class="border-primary">
            <button class="btn btn-primary sidebar-item active" type="submit"><i class="bi bi-plus-circle-dotted">
                    Tambahkan</i></button>

        </form>

    </div>

@endsection
