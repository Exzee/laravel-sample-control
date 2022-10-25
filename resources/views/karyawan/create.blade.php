@extends('layouts.karyawan.dashboard')

@section('title', 'Tambah Karyawan')


@section('content')

    <div class="row mt-5 pb-5">
        <a href="/karyawan" class="col-lg-2 col-sm-8 d-flex sidebar-item active justify-content-center align-items-center"
            style="color: aliceblue"><i class="bi bi-caret-left"> Kembali</i></a>

        <div class="col-12">
            <h2 class="content-title">Tambah Karyawan</h2>
            <h5 class="content-desc mb-4">Customer Technical Service</h5>
        </div>


        <form action="/karyawan" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control statistics-card @error('no_badge') is-invalid @enderror"
                            id="floatingnobadge" placeholder="12345" name="no_badge" required>
                        <label for="floatingnobadge">Nomor Badge</label>
                        @error('no_badge')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text"
                            class="form-control statistics-card @error('nama_karyawan') is-invalid @enderror"
                            id="floatingnama" placeholder="Preman SCBD" name="nama_karyawan" required>
                        <label for="floatingnama">Nama Karyawan</label>
                        @error('nama_karyawan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-floating">
                        <select class="form-select statistics-card @error('jenis_kelamin') is-invalid @enderror"
                            id="floatingjeniskelamin" aria-label="Jenis kelamin" name="jenis_kelamin">
                            <option selected>Pilih</option>
                            <option value="1">Laki-Laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                        <label for="floatingjeniskelamin">Jenis Kelamin</label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-floating">
                        <input type="date"
                            class="form-control statistics-card @error('tanggal_lahir') is-invalid @enderror"
                            id="floatingtanggal_lahir" placeholder="Tanggal Lahir" name="tanggal_lahir" required>
                        <label for="floatingtanggal_lahir">Tanggal Lahir</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="email" class="form-control statistics-card @error('email') is-invalid @enderror"
                            id="floatingemail" placeholder="ahmad@gmail.com" name="email" required>
                        <label for="floatingemail">Email</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control statistics-card @error('no_hp') is-invalid @enderror"
                            id="floatingnohp" placeholder="087883231691" name="no_hp" required>
                        <label for="floatingnohp">Nomor Handpone</label>
                        @error('no_hp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control statistics-card @error('agama') is-invalid @enderror"
                            id="floatingagama" placeholder="Islam" name="agama" required>
                        <label for="floatingagama">Agama</label>
                        @error('agama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text"
                            class="form-control statistics-card @error('tahun_masuk') is-invalid @enderror"
                            id="floatingtahunmasuk" placeholder="2022" name="tahun_masuk" required>
                        <label for="floatingtahunmasuk">Tahun Masuk</label>
                        @error('tahun_masuk')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="form-floating">
                        <select class="form-select statistics-card" id="floatingstatuskawin" name="status_pernikahan">
                            <option selected>Pilih</option>
                            <option value="1">Menikah</option>
                            <option value="2">Belum Menikah</option>
                        </select>
                        <label for="floatingstatuskawin">Status Perkawinan</label>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="form-floating">
                        <select class="form-select statistics-card" id="floatingjabatan" name="jabatan">
                            <option selected>Pilih</option>
                            <option value="1">Operator</option>
                            <option value="2">Supervisor</option>
                            <option value="3">Superintendent</option>
                            <option value="4">Manager</option>
                            <option value="5">Deputy General Manager</option>
                        </select>
                        <label for="floatingjabatan">Jabatan</label>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="form-floating">
                        <select class="form-select statistics-card" id="floatingstatusjabatan" name="status_jabatan">
                            <option selected>Pilih</option>
                            <option value="1">Tetap</option>
                            <option value="2">Kontrak</option>
                        </select>
                        <label for="floatingstatusjabatan">Status jabatan</label>
                    </div>
                </div>
                {{-- Upload Gambar --}}
                {{-- UPLOAD IMAGE THUMBNAIL --}}
                <img class="gambar-preview img-fluid mb-3 col-sm-5">
                <div class="custom-file mb-3">
                    <input type="file" id="foto_karyawan" name="foto_karyawan">
                    <label><i class="bi bi-upload"></i> Upload Foto Karyawan</label>
                </div>

            </div>
            <hr class="border-primary">
            <button class="btn btn-primary sidebar-item active" type="submit"><i class="bi bi-plus-circle-dotted">
                    Tambahkan</i></button>

        </form>

    </div>

@endsection
