@extends('layouts.samplemasuk.dashboard')

@section('title', 'Sample Masuk')

@section('content')

    <div class="col-12 col-lg-12">
        <h2 class="content-title">Sample Masuk</h2>
        <h5 class="content-desc mb-4">Customer Technical Service</h5>

        <a href="/samplemasuk" class="col-lg-2 col-sm-8 d-flex sidebar-item active justify-content-center align-items-center"
            style="color: aliceblue"><i class="bi bi-caret-left"> Kembali</i></a>

        <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
            <div class="d-flex flex-column justify-content-between align-items-center ">
                @if ($samplemasuk->foto_sample_masuk)
                    <img src="{{ asset('storage/' . $samplemasuk->foto_sample_masuk) }}" alt="Foto Sample"
                        class="img-thumbnail" width="300" style="border-radius: 15%">
                @else
                    <img src="{{ asset('/avatars/no_image.png') }}" alt="Foto Sample" class="img-thumbnail" width="300"
                        style="border-radius: 15%">
                @endif
                <div class="d-flex justify-content-center align-items-center employee-status verified">
                    <p class="employee-name">{{ $samplemasuk->kode_sample_masuk }}</p>
                    <div class="employee-status-image">
                        <img src="{{ asset('template/assets/img/employees/check.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>


        {{-- Segment --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="select" class=" form-control-label">Segment</label></div>
            <div class="col-12 col-md-9">
                <select name="segment" class="form-control border-0 border-bottom" disabled>
                    {{-- <option selected disabled value="">Pilih</option> --}}
                    <option value="{{ old('segment', $samplemasuk->segment) }}">
                        {{ old('segment', $samplemasuk->segment) }}</option>
                </select>
            </div>
        </div>

        {{-- Nama Pengirim --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="pengirim-input" class="form-control-label">Nama Pengirim</label></div>
            <div class="col-12 col-md-9"><input type="email" id="pengirim-input" name="nama_pengirim"
                    placeholder="Masukkan Nama Pengirim" class="form-control border-0 border-bottom"
                    value="{{ old('nama_pengirim', $samplemasuk->nama_pengirim) }}" readonly>
            </div>
        </div>

        {{-- Tanggal Terima Sample --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="tanggal_terima" class=" form-control-label">Tanggal Terima</label></div>
            <div class="col-12 col-md-9"><input type="date" id="tanggal_terima" name="tanggal_terima"
                    class="form-control border-0 border-bottom"
                    value="{{ old('tanggal_terima', $samplemasuk->tanggal_terima) }}" readonly></div>
        </div>

        {{-- Jenis Sample --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="jenis-input" class=" form-control-label">Jenis Sample</label></div>
            <div class="col-12 col-md-9"><input type="text" id="jenis-input" name="jenis_sample"
                    class="form-control border-0 border-bottom" value="{{ old('no_hp', $samplemasuk->jenis_sample) }}"
                    readonly>
            </div>
        </div>

        {{-- Customer --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="customer-input" class=" form-control-label">Customer</label></div>
            <div class="col-12 col-md-9"><input type="text" id="customer-input" name="customer"
                    class="form-control border-0 border-bottom" value="{{ old('customer', $samplemasuk->customer) }}"
                    disabled=""></div>
        </div>

        {{-- Product --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="product-input" class=" form-control-label">Product</label></div>
            <div class="col-12 col-md-9"><input type="text" id="product-input" name="product"
                    class="form-control border-0 border-bottom" value="{{ old('product', $samplemasuk->product) }}"
                    disabled=""></div>
        </div>

        {{-- Lot Number --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="lot_no" class=" form-control-label">Lot Number</label></div>
            <div class="col-12 col-md-9"><input type="text" id="lot_no" name="lot_number"
                    class="form-control border-0 border-bottom" value="{{ old('lot_number', $samplemasuk->lot_number) }}"
                    readonly></div>
        </div>

        {{-- Problem --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="problem-input" class=" form-control-label">Problem</label></div>
            <div class="col-12 col-md-9"><input type="text" id="problem-input" name="problem"
                    class="form-control border-0 border-bottom" value="{{ old('problem', $samplemasuk->problem) }}"
                    readonly></div>
        </div>

        {{-- Deskripsi Sample --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="deskripsi" class=" form-control-label">Deskripsi Sample</label></div>
            <div class="col-12 col-md-9">
                <textarea class="form-control statistics-card" id="floatingdeskripsi" style="height: 100px" name="deskripsi_sample"
                    readonly>{{ old('deskripsi_sample', $samplemasuk->deskripsi_sample) }}</textarea>
            </div>
        </div>


        {{-- footer form --}}
        <div class="card-footer">
            <button class="btn btn-primary btn-sm" onclick="window.print()"><i class="bi bi-printer"> Cetak</i></button>
            {{-- <a href="{{ url('samplemasuk/' . $samplemasuk->id . '/cetak/' . $samplemasuk->kode_sample_masuk) }}"
                class="btn btn-primary btn-sm" target="_blank">
                <i class="bi bi-printer"></i> Cetak
            </a> --}}
        </div>

    </div>

@endsection
