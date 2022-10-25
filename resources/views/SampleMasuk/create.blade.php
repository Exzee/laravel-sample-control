@extends('layouts.samplemasuk.dashboard')

@section('title', 'Tambah Sample')


@section('content')
    <div class="container">
        <h2 class="content-title">Tambah Data Sample</h2>
        <h5 class="content-desc mb-4">Customer Technical Service</h5>
    </div>
    <div class="row mt-5 pb-5">
        <a href="/samplemasuk" class="col-lg-2 col-sm-8 d-flex sidebar-item active justify-content-center align-items-center"
            style="color: aliceblue"><i class="bi bi-caret-left"> Kembali</i></a>



        <form action="/samplemasuk" method="post" enctype="multipart/form-data">
            @csrf
            {{-- Kode Sample --}}
            <div class="row">
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text"
                            class="form-control statistics-card @error('kode_sample_masuk') is-invalid @enderror"
                            id="floatingkosesample" placeholder="12345" name="kode_sample_masuk" required>
                        <label for="floatingkosesample">Kode Sample</label>
                        @error('kode_sample_masuk')
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
                            <option value="1">Demestic</option>
                            <option value="2">Export</option>
                        </select>
                        <label for="floatingsegment">Segment</label>
                    </div>
                </div>
                {{-- Jenis Sample --}}
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-floating">
                        <select class="form-select statistics-card" id="floatingjenis_sample" name="jenis_sample">
                            <option selected>Pilih</option>
                            <option value="1">Complaint</option>
                            <option value="2">Market</option>
                        </select>
                        <label for="floatingjenis_sample">Kategori Sample</label>
                    </div>
                </div>
                {{-- Tanggal terima Sample --}}
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-floating">
                        <input type="date"
                            class="form-control statistics-card @error('tanggal_terima') is-invalid @enderror"
                            id="floatingtanggal_terima" placeholder="Tanggal Terima" name="tanggal_terima" required>
                        <label for="floatingtanggal_terima">Tanggal Terima Sample</label>
                        @error('tanggal_terima')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- Nama Pengirim --}}
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text"
                            class="form-control statistics-card @error('nama_pengirim') is-invalid @enderror"
                            id="floatingnama" placeholder="Preman SCBD" name="nama_pengirim" required>
                        <label for="floatingnama">Nama Pengirim</label>
                        @error('nama_pengirim')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- Customer --}}
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control statistics-card @error('customer') is-invalid @enderror"
                            id="floatingcustomer" placeholder="customer" name="customer" required>
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
                            id="floatingproduct" placeholder="087883231691" name="product" required>
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
                            id="floatinglot" placeholder="Lot No" name="lot_number" required>
                        <label for="floatinglot">Lot Number</label>
                        @error('lot_number')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- Problem --}}
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control statistics-card @error('problem') is-invalid @enderror"
                            id="floatingproblem" placeholder="2022" name="problem" required>
                        <label for="floatingproblem">Problem</label>
                        @error('problem')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- Deskripsi Sample --}}
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control statistics-card @error('deskripsi_sample') is-invalid @enderror"
                            placeholder="Leave a comment here" id="floatingdeskripsi" style="height: 100px" name="deskripsi_sample"></textarea>
                        <label for="floatingdeskripsi">Deskripsi Sample</label>
                        @error('deskripsi_sample')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Upload Gambar --}}
                {{-- UPLOAD IMAGE THUMBNAIL --}}
                <img class="gambar-preview img-fluid mb-3 col-sm-5">
                <div class="custom-file mb-3 @error('foto_sample_masuk') is-invalid @enderror">
                    <input type="file" id="foto_sample_masuk" name="foto_sample_masuk">
                    <label><i class="bi bi-upload "></i> Upload Foto Sample</label>
                    @error('foto_sample_masuk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <hr class="border-primary">
            <button class="btn btn-primary sidebar-item active" type="submit"><i class="bi bi-plus-circle-dotted">
                    Tambahkan</i></button>

        </form>

    </div>

@endsection
