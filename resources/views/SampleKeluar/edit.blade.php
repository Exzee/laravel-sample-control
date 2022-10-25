@extends('layouts.samplekeluar.dashboard')

@section('title', 'Rubah Data Sample')


@section('content')
    <div class="container">
        <h2 class="content-title">Rubah Data Sample</h2>
        <h5 class="content-desc mb-4">Customer Technical Service</h5>
    </div>
    <div class="row mt-5 pb-5">
        <a href="/samplekeluar" class="col-lg-2 col-sm-8 d-flex sidebar-item active justify-content-center align-items-center"
            style="color: aliceblue"><i class="bi bi-caret-left"> Kembali</i></a>



        <form action="/samplekeluar/{{ $samplekeluar->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            {{-- Kode Sample --}}
            <div class="row">
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text"
                            class="form-control statistics-card @error('kode_sample_keluar') is-invalid @enderror"
                            id="floatingkodesample" placeholder="12345" name="kode_sample_keluar"
                            value="{{ old('kode_sample_keluar', $samplekeluar->kode_sample_keluar) }}" required>
                        <label for="floatingkodesample">Kode Sample Keluar</label>
                        @error('kode_sample_keluar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- Segment --}}
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-floating">
                        <select class="form-select statistics-card" id="floatingsegment" aria-label="segment"
                            name="segment">
                            <option selected>Pilih</option>
                            <option value="Domestic" @if ($samplekeluar->segment == 'Domestic') selected @endif>Domestic</option>
                            <option value="Export" @if ($samplekeluar->segment == 'Export') selected @endif>Export</option>
                        </select>
                        <label for="floatingsegment">Segment</label>
                    </div>
                </div>
                {{-- Jenis Sample --}}
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-floating">
                        <select class="form-select statistics-card" id="floatingjenis_sample" name="jenis_sample">
                            <option selected>Pilih</option>
                            <option value="Complaint" @if ($samplekeluar->jenis_sample == 'Complaint') selected @endif>Complaint</option>
                            <option value="Market" @if ($samplekeluar->jenis_sample == 'Market') selected @endif>Market</option>
                        </select>
                        <label for="floatingjenis_sample">Kategori Sample</label>
                    </div>
                </div>
                {{-- Tanggal terima Sample --}}
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-floating">
                        <input type="date" class="form-control statistics-card" id="floatingtanggal_kirim"
                            placeholder="Tanggal Kirim" name="tanggal_kirim"
                            value="{{ old('tanggal_terima', $samplekeluar->tanggal_kirim) }}" required>
                        <label for="floatingtanggal_kirim">Tanggal Kirim Sample</label>
                    </div>
                </div>
                {{-- Expedisi --}}
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text"
                            class="form-control statistics-card @error('expedisi_pengiriman') is-invalid @enderror"
                            id="floatingnama" placeholder="Preman SCBD" name="expedisi_pengiriman"
                            value="{{ old('expedisi_pengiriman', $samplekeluar->expedisi_pengiriman) }}" required>
                        <label for="floatingnama">Jasa Expedisi</label>
                        @error('expedisi_pengiriman')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- Customer --}}
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control statistics-card @error('customer') is-invalid @enderror"
                            id="floatingcustomer" placeholder="customer" name="customer"
                            value="{{ old('customer', $samplekeluar->customer) }}" required>
                        <label for="floatingcustomer">Customer</label>
                        @error('customer')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- Product --}}
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control statistics-card @error('product') is-invalid @enderror"
                            id="floatingproduct" placeholder="Type of Yarn" name="product"
                            value="{{ old('product', $samplekeluar->product) }}" required>
                        <label for="floatingproduct">Product</label>
                        @error('product')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- Lot No --}}
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control statistics-card @error('lot_number') is-invalid @enderror"
                            id="floatinglot" placeholder="Lot No" name="lot_number"
                            value="{{ old('lot_number', $samplekeluar->lot_number) }}" required>
                        <label for="floatinglot">Lot Number</label>
                        @error('lot_number')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- Deskripsi Sample --}}
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control statistics-card @error('deskripsi_sample') is-invalid @enderror"
                            placeholder="Leave a comment here" id="floatingdeskripsi" style="height: 100px" name="deskripsi_sample">{{ old('deskripsi_sample', $samplekeluar->deskripsi_sample) }}</textarea>
                        <label for="floatingdeskripsi">Deskripsi Sample</label>
                        @error('deskripsi_sample')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Upload Gambar --}}

                <div class="col-lg-6 col-sm-12 mb-3">
                    <div class="statistics-card  @error('foto_sample_keluar') is-invalid @enderror">
                        <img src="/{{ $samplekeluar->foto_sample_keluar }}" width="350">
                    </div>
                    @error('foto_sample_keluar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-6 col-sm-12 mb-3">
                    <div class="statistics-card">
                        <input type="file" id="foto_sample_keluar" name="foto_sample_keluar"
                            onchange="previewImage()"
                            value="{{ old('foto_sample_keluar', $samplekeluar->foto_sample_keluar) }}">
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
