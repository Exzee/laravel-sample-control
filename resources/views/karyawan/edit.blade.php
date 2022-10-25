@extends('layouts.karyawan.dashboard')

@section('title', 'Update Karyawan')


@section('content')

    <div class="row mt-5 pb-5">
        <a href="/karyawan" class="col-lg-2 col-sm-8 d-flex sidebar-item active justify-content-center align-items-center"
            style="color: aliceblue"><i class="bi bi-caret-left"> Kembali</i></a>

        <div class="col-12">
            <h2 class="content-title">Update Karyawan</h2>
            <h5 class="content-desc mb-4">Customer Technical Service</h5>
        </div>


        <form action="/karyawan/{{ $karyawan->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="row">
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control statistics-card @error('no_badge') is-invalid @enderror"
                            id="floatingnobadge" placeholder="12345" name="no_badge"
                            value="{{ old('no_badge', $karyawan->no_badge) }}">
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
                            id="floatingnama" placeholder="Preman SCBD" name="nama_karyawan"
                            value="{{ old('nama_karyawan', $karyawan->nama_karyawan) }}">
                        <label for="floatingnama">Nama Karyawan</label>
                        @error('nama_karyawan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-floating">
                        <select class="form-select statistics-card" id="floatingjeniskelamin" aria-label="Jenis kelamin"
                            name="jenis_kelamin">
                            <option selected>Pilih</option>
                            <option value="Laki-Laki" @if ($karyawan->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                            <option value="Perempuan" @if ($karyawan->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                        </select>
                        <label for="floatingjeniskelamin">Jenis Kelamin</label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-floating">
                        <input type="date"
                            class="form-control statistics-card @error('tanggal_lahir') is-invalid @enderror"
                            id="floatingtanggal_lahir" placeholder="Tanggal Lahir" name="tanggal_lahir"
                            value="{{ old('tanggal_lahir', $karyawan->tanggal_lahir) }}">
                        <label for="floatingtanggal_lahir">Tanggal Lahir</label>
                        @error('tanggal_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="email" class="form-control statistics-card @error('email') is-invalid @enderror"
                            id="floatingemail" placeholder="ahmad@gmail.com" name="email"
                            value="{{ old('email', $karyawan->email) }}">
                        <label for="floatingemail">Email</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control statistics-card @error('no_hp') is-invalid @enderror"
                            id="floatingnohp" placeholder="087883231691" name="no_hp"
                            value="{{ old('no_hp', $karyawan->no_hp) }}">
                        <label for="floatingnohp">Nomor Handpone</label>
                        @error('no_hp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control statistics-card @error('agama') is-invalid @enderror"
                            id="floatingagama" placeholder="Islam" name="agama"
                            value="{{ old('agama', $karyawan->agama) }}">
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
                            id="floatingtahunmasuk" placeholder="2022" name="tahun_masuk"
                            value="{{ old('tahun_masuk', $karyawan->tahun_masuk) }}">
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
                            <option value="Menikah" @if ($karyawan->status_pernikahan == 'Menikah') selected @endif>Menikah</option>
                            <option value="Belum Menikah" @if ($karyawan->status_pernikahan == 'Belum Menikah') selected @endif>Belum Menikah
                            </option>
                        </select>
                        <label for="floatingstatuskawin">Status Perkawinan</label>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="form-floating">
                        <select class="form-select statistics-card" id="floatingjabatan" name="jabatan">
                            <option selected>Pilih</option>
                            <option value="Operator" @if ($karyawan->jabatan == 'Operator') selected @endif>Operator</option>
                            <option value="Supervisor" @if ($karyawan->jabatan == 'Supervisor') selected @endif>Supervisor
                            </option>
                            <option value="Superintendent" @if ($karyawan->jabatan == 'Superintendent') selected @endif>
                                Superintendent
                            </option>
                            <option value="Manager" @if ($karyawan->jabatan == 'Manager') selected @endif>Manager</option>
                            <option value="Deputy General Manager" @if ($karyawan->jabatan == 'Deputy General Manager') selected @endif>
                                Deputy
                                General Manager</option>
                        </select>
                        <label for="floatingjabatan">Jabatan</label>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="form-floating">
                        <select class="form-select statistics-card" id="floatingstatusjabatan" name="status_jabatan">
                            <option selected>Pilih</option>
                            <option value="Tetap" @if ($karyawan->status_jabatan == 'Tetap') selected @endif>Tetap</option>
                            <option value="Kontrak" @if ($karyawan->status_jabatan == 'Kontrak') selected @endif>Kontrak</option>
                        </select>
                        <label for="floatingstatusjabatan">Status jabatan</label>
                    </div>
                </div>

                {{-- Upload Gambar --}}
                <div class="col-lg-6 col-sm-12 mb-3">
                    <div class="statistics-card @error('foto_karyawan') is-invalid @enderror">
                        <img src="/{{ $karyawan->foto_karyawan }}" width="350">
                    </div>
                    @error('foto_karyawan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-6 col-sm-12 mb-3">
                    <div class="statistics-card">
                        <input type="file" id="foto_karyawan" name="foto_karyawan" onchange="previewImage()"
                            value="{{ old('foto_karyawan', $karyawan->foto_karyawan) }}">
                        <i class="bi bi-upload"></i>
                    </div>
                </div>

            </div>
            <hr class="border-primary">
            <button class="btn btn-primary sidebar-item active" type="submit"><i class="bi bi-hdd-fill">
                    Simpan</i></button>

        </form>

    </div>

@endsection
