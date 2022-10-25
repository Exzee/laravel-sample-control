@extends('layouts.karyawan.dashboard')

@section('title', 'Profile Karyawan')

@section('content')

    <div class="col-12 col-lg-12">
        <h2 class="content-title">Profile Karyawan</h2>
        <h5 class="content-desc mb-4">Customer Technical Service</h5>
        <a href="/karyawan" class="col-lg-2 col-sm-8 d-flex sidebar-item active justify-content-center align-items-center"
            style="color: aliceblue"><i class="bi bi-caret-left"> Kembali</i></a>

        <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
            <div class="d-flex flex-column justify-content-between align-items-center ">
                @if ($karyawan->foto_karyawan)
                    <img src="{{ asset('storage/' . $karyawan->foto_karyawan) }}" alt="Foto Karyawan" class="img-thumbnail"
                        width="300" style="border-radius: 50%">
                @else
                    <img src="{{ asset('/avatars/no_image.png') }}" alt="Foto Karyawan" class="img-thumbnail" width="300"
                        style="border-radius: 50%">
                @endif
                <div class="d-flex justify-content-center align-items-center employee-status verified">
                    <p class="employee-name">{{ $karyawan->nama_karyawan }}</p>
                    <div class="employee-status-image">
                        <img src="{{ asset('template/assets/img/employees/check.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>


        {{-- No Badge --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="no_badge" class=" form-control-label">No Badge</label></div>
            <div class="col-12 col-md-9"><input type="text" id="no_badge" name="no_badge"
                    class="form-control border-0 border-bottom" value="{{ old('no_badge', $karyawan->no_badge) }}" readonly>
            </div>
        </div>

        {{-- Nama --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Karyawan</label></div>
            <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama_karyawan"
                    class="form-control border-0 border-bottom" value="{{ old('nama_karyawan', $karyawan->nama_karyawan) }}"
                    readonly></div>
        </div>

        {{-- Jenis Kelamin --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="select" class=" form-control-label">Jenis Kelamin</label></div>
            <div class="col-12 col-md-9">
                <select name="jenis_kelamin" class="form-control border-0 border-bottom" disabled>
                    {{-- <option selected disabled value="">Pilih</option> --}}
                    <option value="{{ old('jenis_kelamin', $karyawan->jenis_kelamin) }}">
                        {{ old('jenis_kelamin', $karyawan->jenis_kelamin) }}</option>
                </select>
            </div>
        </div>

        {{-- Email --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="email-input" class="form-control-label">Email</label></div>
            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" placeholder="Masukkan Email"
                    class="form-control border-0 border-bottom" value="{{ old('email', $karyawan->email) }}" readonly>
            </div>
        </div>

        {{-- Tanggal Lahir --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="tanggal_lahir" class=" form-control-label">Tanggal Lahir</label></div>
            <div class="col-12 col-md-9"><input type="date" id="tanggal_lahir" name="tanggal_lahir"
                    class="form-control border-0 border-bottom" value="{{ old('tanggal_lahir', $karyawan->tanggal_lahir) }}"
                    readonly></div>
        </div>

        {{-- No HP --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">No HP</label></div>
            <div class="col-12 col-md-9"><input type="text" id="text-input" name="no_hp"
                    class="form-control border-0 border-bottom" value="{{ old('no_hp', $karyawan->no_hp) }}" readonly>
            </div>
        </div>

        {{-- Agama --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Agama</label></div>
            <div class="col-12 col-md-9"><input type="text" id="text-input" name="agama"
                    class="form-control border-0 border-bottom" value="{{ old('agama', $karyawan->agama) }}"
                    disabled=""></div>
        </div>

        {{-- Tahun Masuk --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tahun Masuk Kerja</label></div>
            <div class="col-12 col-md-9"><input type="text" id="text-input" name="tahun_masuk"
                    class="form-control border-0 border-bottom" value="{{ old('tahun_masuk', $karyawan->tahun_masuk) }}"
                    disabled=""></div>
        </div>

        {{-- Status Pernikahan --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="select" class=" form-control-label">Status Pernikahan</label></div>
            <div class="col-12 col-md-9">
                <select name="status_pernikahan" class="form-control border-0 border-bottom" disabled="">
                    {{-- <option selected disabled value="">Pilih</option> --}}
                    <option value="{{ old('status_pernikahan', $karyawan->status_pernikahan) }}"">
                        {{ old('status_pernikahan', $karyawan->status_pernikahan) }}</option>
                </select>
            </div>
        </div>

        {{-- Jabatan --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jabatan</label></div>
            <div class="col-12 col-md-9"><input type="text" id="text-input" name="jabatan"
                    class="form-control border-0 border-bottom" value="{{ old('jabatan', $karyawan->jabatan) }}"
                    readonly></div>
        </div>

        {{-- Status Jabatan --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Status Jabatan</label></div>
            <div class="col-12 col-md-9"><input type="text" id="text-input" name="status_jabatan"
                    class="form-control border-0 border-bottom"
                    value="{{ old('status_jabatan', $karyawan->status_jabatan) }}" readonly>
            </div>
        </div>



        {{-- footer form --}}
        <div class="card-footer">
            <button class="btn btn-primary btn-sm" onclick="window.print()"><i class="bi bi-printer"> Cetak</i></button>
            {{-- <a href="{{ url('karyawan/' . $karyawan->id . '/cetak/' . $karyawan->no_badge) }}"
                class="btn btn-primary btn-sm" onclick="window.print()">
                
            </a> --}}
        </div>





    </div>

@endsection
