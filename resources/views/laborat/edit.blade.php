@extends('layouts.laborat.dashboard')

@section('title', 'Rubah Data Laborat')


@section('content')
    <div class="container">
        <h2 class="content-title">Rubah Data Sample</h2>
        <h5 class="content-desc mb-4">Customer Technical Service</h5>
    </div>
    <div class="row mt-5 pb-5">
        <a href="/laborat" class="col-lg-2 col-sm-8 d-flex sidebar-item active justify-content-center align-items-center"
            style="color: aliceblue"><i class="bi bi-caret-left"> Kembali</i></a>



        <form action="/laborat/{{ $formLaborat->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            {{-- Kode Sample --}}
            <div class="row">
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control statistics-card" id="floatingkodesample"
                            placeholder="12345" name="kode_form_laborat"
                            value="{{ old('kode_form_laborat', $formLaborat->kode_form_laborat) }}" required>
                        <label for="floatingkodesample">Kode Sample</label>
                    </div>
                </div>
                {{-- Kode Sample Masuk --}}
                <div class="col-12">
                    <div id="modal" class="form-control statistics-card" tabindex="-1" role="dialog"
                        aria-hidden="true">
                        <label for="floatingsamplemasuk" class="mb-0">Kode Sample Masuk</label>
                        <select class="form-select statistics-card" id="samplemasukid" name="sample_masuk_id"
                            data-width="100%">
                            @foreach ($samplemasuk as $samplemasuk)
                                @if (old('sample_masuk_id') == $samplemasuk->id)
                                    <option value="{{ $samplemasuk->id }}" selected>
                                        {{ $samplemasuk->kode_sample_masuk }} [
                                        {{ date('d-M-y', strtotime($samplemasuk->tanggal_terima)) }} |
                                        {{ $samplemasuk->customer }} |
                                        {{ $samplemasuk->problem }} ]
                                    </option>
                                    </option>
                                @else
                                    <option value="{{ $samplemasuk->id }}">{{ $samplemasuk->kode_sample_masuk }} [
                                        {{ date('d-M-y', strtotime($samplemasuk->tanggal_terima)) }} |
                                        {{ $samplemasuk->customer }} |
                                        {{ $samplemasuk->problem }} ]</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- Pengirim Sample --}}
                <div class="col-12">
                    <div id="modal" class="form-control statistics-card" tabindex="-1" role="dialog"
                        aria-hidden="true">
                        <label for="floatingpengirim" class="mb-0">Nama Pengirim</label>
                        <select class="form-select statistics-card" id="daftarkaryawan" name="karyawan_id">
                            @foreach ($karyawan as $karyawan)
                                @if (old('karyawan_id') == $karyawan->id)
                                    <option value="{{ $karyawan->id }}" selected>{{ $karyawan->nama_karyawan }}
                                    </option>
                                @else
                                    <option value="{{ $karyawan->id }}">{{ $karyawan->nama_karyawan }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- Tanggal Kirim Sample --}}
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-floating">
                        <input type="date" class="form-control statistics-card" id="floatingtanggal_terima"
                            placeholder="Tanggal Kirim" name="tanggal_kirim_laborat"
                            value="{{ old('tanggal_kirim_laborat', $formLaborat->tanggal_kirim_laborat) }}" required>
                        <label for="floatingtanggal_terima">Tanggal Kirim Sample</label>
                    </div>
                </div>
                {{-- Status Laborat --}}
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-floating">
                        <select class="form-select statistics-card" id="floatingstatuslaborat" aria-label="status_laborat"
                            name="status_laborat">
                            <option selected>Pilih</option>
                            <option value="Diproses" @if ($formLaborat->status_laborat == 'Diproses') selected @endif>Diproses</option>
                            <option value="Selesai" @if ($formLaborat->status_laborat == 'Selesai') selected @endif>Selesai</option>
                            <option value="Batal" @if ($formLaborat->status_laborat == 'Batal') selected @endif>Batal</option>
                        </select>
                        <label for="floatingstatuslaborat">Status Laborat</label>
                    </div>
                </div>
                {{-- Keterangan Sample --}}
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control statistics-card @error('keterangan') is-invalid @enderror"
                            placeholder="Leave a comment here" id="floatingdeskripsi" style="height: 100px" name="keterangan">{{ old('keterangan', $formLaborat->keterangan) }}</textarea>
                        <label for="floatingdeskripsi">Keterangan Lain</label>
                        @error('keterangan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <strong class="alert alert-light">
                    * Kosongkan Field dibawah jika analisa belum selesai
                </strong>
                {{-- Kode Laporan Laborat --}}
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control statistics-card" id="kodelaborat"
                            placeholder="kode_laporan" name="kode_laporan"
                            value="{{ old('kode_laporan', $formLaborat->kode_laporan) }}">
                        <label for="kodelaborat">Kode Laporan Dari Laborat</label>
                    </div>
                </div>
                {{-- Tanggal Selesai Sample --}}
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-floating">
                        <input type="date" class="form-control statistics-card" id="tanggal_selesai"
                            placeholder="Tanggal Selesai" name="tanggal_selesai_laborat"
                            value="{{ old('tanggal_selesai_laborat', $formLaborat->tanggal_selesai_laborat) }}">
                        <label for="tanggal_selesai">Tanggal Selesai Analisa</label>
                    </div>
                </div>
                {{-- Status Sample Laborat Setelah Analisa --}}
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-floating">
                        <select class="form-select statistics-card" id="floatingstatuslaborat" aria-label="status_sample"
                            name="status_sample">
                            <option value="Kembali" @if ($formLaborat->status_sample == 'Kembali') selected @endif>Kembali</option>
                            <option value="Tidak Kembali" @if ($formLaborat->status_sample == 'Tidak Kembali') selected @endif>Tidak Kembali
                            </option>
                        </select>
                        <label for="floatingstatuslaborat">Status Sample</label>
                    </div>
                </div>

            </div>
            <hr class="border-primary">
            <button class="btn btn-primary sidebar-item active" type="submit"><i class="bi bi-hdd-fill">
                    Simpan</i></button>

        </form>

    </div>

@endsection
@push('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript">
        // $(document).ready(function() {
        $('#daftarkaryawan').select2();
        // });

        // $(document).on('click, function() {
        // $("#samplemasukid").ready.select2();
        // });

        $('#samplemasukid').select2({
            dropdownParent: $('#modal')
        });
    </script>
@endpush
