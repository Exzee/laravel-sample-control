@extends('layouts.samplekeluar.dashboard')

@section('title', 'Tambah Sample Keluar')


@section('content')
    <div class="container">
        <h2 class="content-title">Tambah Data Sample Keluar</h2>
        <h5 class="content-desc mb-4">Customer Technical Service</h5>
    </div>
    <div class="row mt-5 pb-5">
        <a href="/samplekeluar" class="col-lg-2 col-sm-8 d-flex sidebar-item active justify-content-center align-items-center"
            style="color: aliceblue"><i class="bi bi-caret-left"> Kembali</i></a>

        <form action="/samplekeluar" method="post" enctype="multipart/form-data">
            @csrf
            {{-- Kode Sample --}}
            <div class="row">
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text"
                            class="form-control statistics-card @error('kode_sample_keluar') is-invalid @enderror"
                            id="floatingkodesamplekeluar" placeholder="12345" name="kode_sample_keluar" required>
                        <label for="floatingkodesamplekeluar">Kode Sample Keluar</label>
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
                {{-- Tanggal Kirim Sample --}}
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-floating">
                        <input type="date" class="form-control statistics-card" id="floatingtanggalkirim"
                            placeholder="Tanggal Kirim" name="tanggal_kirim" required>
                        <label for="floatingtanggalkirim">Tanggal Kirim Sample</label>
                    </div>
                </div>

                {{-- Expedisi Pengirim --}}
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text"
                            class="form-control statistics-card  @error('expedisi_pengiriman') is-invalid @enderror"
                            id="floatingexpedisi" placeholder="Preman SCBD" name="expedisi_pengiriman" required>
                        <label for="floatingexpedisi">Jasa Expedisi</label>
                        @error('expedisi_pengiriman')
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
                <div class="custom-file mb-3  @error('foto_sample_keluar') is-invalid @enderror">
                    <input type="file" id="foto_sample_keluar" name="foto_sample_keluar">
                    <label><i class="bi bi-upload "></i> Upload Foto Sample</label>
                    @error('foto_sample_keluar')
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
