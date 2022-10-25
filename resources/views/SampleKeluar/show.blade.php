@extends('layouts.samplekeluar.dashboard')

@section('title', 'Lihat Sample Keluar')

@section('content')

    <div class="col-12 col-lg-12">
        <h2 class="content-title">Sample Keluar</h2>
        <h5 class="content-desc mb-4">Customer Technical Service</h5>

        <a href="/samplekeluar" class="col-lg-2 col-sm-8 d-flex sidebar-item active justify-content-center align-items-center"
            style="color: aliceblue"><i class="bi bi-caret-left"> Kembali</i></a>

        <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
            <div class="d-flex flex-column justify-content-between align-items-center ">
                @if ($samplekeluar->foto_sample_keluar)
                    <img src="{{ asset('storage/' . $samplekeluar->foto_sample_keluar) }}" alt="Foto Sample"
                        class="img-thumbnail" width="300" style="border-radius: 15%">
                @else
                    <img src="{{ asset('/avatars/no_image.png') }}" alt="Foto Sample" class="img-thumbnail" width="300"
                        style="border-radius: 15%">
                @endif
                <div class="d-flex justify-content-center align-items-center employee-status verified">
                    <p class="employee-name">{{ $samplekeluar->kode_sample_keluar }}</p>
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
                    <option value="{{ old('segment', $samplekeluar->segment) }}">
                        {{ old('segment', $samplekeluar->segment) }}</option>
                </select>
            </div>
        </div>

        {{-- Jasa Expedisi --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="pengirim-input" class="form-control-label">Jasa Expedisi</label></div>
            <div class="col-12 col-md-9"><input type="email" id="pengirim-input" name="expedisi_pengiriman"
                    placeholder="Masukkan Jasa Expedisi" class="form-control border-0 border-bottom"
                    value="{{ old('expedisi_pengiriman', $samplekeluar->expedisi_pengiriman) }}" readonly>
            </div>
        </div>

        {{-- Tanggal Kirim Sample --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="tanggal_kirim" class=" form-control-label">Tanggal Kirim</label></div>
            <div class="col-12 col-md-9"><input type="date" id="tanggal_kirim" name="tanggal_kirim"
                    class="form-control border-0 border-bottom"
                    value="{{ old('tanggal_kirim', $samplekeluar->tanggal_kirim) }}" readonly></div>
        </div>

        {{-- Jenis Sample --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="jenis-input" class=" form-control-label">Jenis Sample</label></div>
            <div class="col-12 col-md-9"><input type="text" id="jenis-input" name="jenis_sample"
                    class="form-control border-0 border-bottom" value="{{ old('no_hp', $samplekeluar->jenis_sample) }}"
                    readonly>
            </div>
        </div>

        {{-- Customer --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="customer-input" class=" form-control-label">Customer</label></div>
            <div class="col-12 col-md-9"><input type="text" id="customer-input" name="customer"
                    class="form-control border-0 border-bottom" value="{{ old('customer', $samplekeluar->customer) }}"
                    disabled=""></div>
        </div>

        {{-- Product --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="product-input" class=" form-control-label">Product</label></div>
            <div class="col-12 col-md-9"><input type="text" id="product-input" name="product"
                    class="form-control border-0 border-bottom" value="{{ old('product', $samplekeluar->product) }}"
                    disabled=""></div>
        </div>

        {{-- Lot Number --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="lot_no" class=" form-control-label">Lot Number</label></div>
            <div class="col-12 col-md-9"><input type="text" id="lot_no" name="lot_number"
                    class="form-control border-0 border-bottom" value="{{ old('lot_number', $samplekeluar->lot_number) }}"
                    readonly></div>
        </div>

        {{-- Deskripsi Sample --}}
        <div class="row form-group">
            <div class="col col-md-3"><label for="deskripsi" class=" form-control-label">Deskripsi Sample</label></div>
            <div class="col-12 col-md-9">
                <textarea class="form-control statistics-card" id="floatingdeskripsi" style="height: 100px" name="deskripsi_sample"
                    readonly>{{ old('deskripsi_sample', $samplekeluar->deskripsi_sample) }}</textarea>
            </div>
        </div>


        {{-- footer form --}}
        <div class="card-footer">
            <button class="btn btn-primary btn-sm" onclick="window.print()"><i class="bi bi-printer"> Cetak</i></button>
            {{-- <a href="{{ url('samplekeluar/' . $samplekeluar->id . '/cetak/' . $samplekeluar->kode_sample_keluar) }}"
                class="btn btn-primary btn-sm" target="_blank">
                <i class="bi bi-printer"></i> Cetak
            </a> --}}
        </div>

    </div>

@endsection
