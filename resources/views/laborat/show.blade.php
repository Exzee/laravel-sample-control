@extends('layouts.laborat.dashboard')

@section('title', 'Sample Laborat')

@section('content')

    <div class="col-12 col-lg-12">
        <h2 class="content-title">Sample Laborat</h2>
        <h5 class="content-desc mb-4">Customer Technical Service</h5>

        <a href="/samplekeluar" class="col-lg-2 col-sm-8 d-flex sidebar-item active justify-content-center align-items-center"
            style="color: aliceblue"><i class="bi bi-arrow-bar-left fs-3"></i> Kembali</a>

        <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
            <div class="d-flex flex-column justify-content-between align-items-center ">
                {{-- @if ($formLaborat->kode_form_laborat)
                    <img src="{{ asset('storage/' . $formLaborat->samplemasuk->foto_sample_masuk) }}" alt="Foto Sample"
                        class="img-thumbnail" width="300" style="border-radius: 15%">
                @else
                    <img src="{{ asset('/avatars/no_image.png') }}" alt="Foto Sample" class="img-thumbnail" width="300"
                        style="border-radius: 15%">
                @endif --}}
                <div class="d-flex justify-content-center align-items-center employee-status verified">
                    <p class="employee-name">{{ $laborat->kode_form_laborat }}</p>
                    <div class="employee-status-image">
                        <img src="{{ asset('template/assets/img/employees/check.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>


        {{-- kode_form_laborat --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="select" class=" form-control-label">Kode Form</label></div>
            <div class="col-12 col-md-9">
                <select name="kode_form_laborat" class="form-control border-0 border-bottom" disabled>
                    {{-- <option selected disabled value="">Pilih</option> --}}
                    <option value="{{ old('kode_form_laborat', $laborat->kode_form_laborat) }}">
                        {{ old('kode_form_laborat', $laborat->kode_form_laborat) }}</option>
                </select>
            </div>
        </div>

        {{-- Nama Pengirim --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="pengirim-input" class="form-control-label">Nama Pengirim</label></div>
            <div class="col-12 col-md-9"><input type="email" id="pengirim-input" name="nama_pengirim"
                    placeholder="Masukkan Nama Pengirim" class="form-control border-0 border-bottom"
                    value="{{ old('nama_pengirim', $laborat->nama_pengirim) }}" readonly>
            </div>
        </div>

        {{-- Tanggal Terima Sample --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="tanggal_terima" class=" form-control-label">Tanggal Terima</label></div>
            <div class="col-12 col-md-9"><input type="date" id="tanggal_terima" name="tanggal_terima"
                    class="form-control border-0 border-bottom"
                    value="{{ old('tanggal_terima', $laborat->tanggal_terima) }}" readonly></div>
        </div>

        {{-- Jenis Sample --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="jenis-input" class=" form-control-label">Jenis Sample</label></div>
            <div class="col-12 col-md-9"><input type="text" id="jenis-input" name="jenis_sample"
                    class="form-control border-0 border-bottom" value="{{ old('no_hp', $laborat->jenis_sample) }}" readonly>
            </div>
        </div>

        {{-- Customer --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="customer-input" class=" form-control-label">Customer</label></div>
            <div class="col-12 col-md-9"><input type="text" id="customer-input" name="customer"
                    class="form-control border-0 border-bottom" value="{{ old('customer', $laborat->customer) }}"
                    disabled=""></div>
        </div>


        {{-- footer form --}}
        {{-- <div class="card-footer">
            <a href="{{ url('samplemasuk/' . $formLaborat->id . '/cetak/' . $formLaborat->kode_sample_masuk) }}"
                class="btn btn-primary btn-sm" target="_blank">
                <i class="bi bi-printer"></i> Cetak
            </a>
        </div> --}}

    </div>

@endsection
