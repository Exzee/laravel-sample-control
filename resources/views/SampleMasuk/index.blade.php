@extends('layouts.samplemasuk.dashboard')
@section('title', 'Data Sample Masuk')
@section('content')

    {{-- HEADER ATAS --}}
    <div class="nav pt-2 pb-2 mb-0 mt-0">
        <div class="col-lg-6">
            <h2 class="content-title">Sample Masuk</h2>
            <h5 class="content-desc mb-4">Customer Technical Service</h5>
        </div>
        <form class="d-flex justify-content-between align-items-center nav-input-container">
            <div class="nav-input-group">
                <input type="search" class="nav-input" placeholder="Cari Kode, Customer" name="search"
                    value="{{ request()->search }}">
                <button class="btn-nav-input" type="submit"><img src="{{ asset('template/assets/img/global/search.svg') }}"
                        alt=""></button>
            </div>
        </form>
    </div>
    {{-- HEADE ATAS END --}}

    {{-- SEARCH BY TANGGAL START --}}
    <a href="/samplemasukexport" class="btn btn-outline-success" id="export-sm">Export</a>
    <button class="btn btn-outline-warning" id="show-search">Pencarian By Tanggal</button>
    <div class="col-12">
        <form action="/samplemasuk" method="get" id="pencarian-tanggal">
            <input type="hidden" name="search">
            <div class="row">
                <label for="info" class="col-form-label col-sm-12 text-primary text-align-center">Pencarian
                    Berdasarkan
                    Tanggal
                    Terima</label>
                <div class="col-md-4 col-sm-2">
                    From <input type="date" class="form-control input-sm" id="fromDate" name="fromDate"
                        value="{{ request()->fromDate }}">
                </div>
                <div class="col-md-4 col-sm-2">
                    To <input type="date" class="form-control input-sm" id="toDate" name="toDate"
                        value="{{ request()->toDate }}">
                </div>
                <div class="col-md-4 col-sm-6 d-flex d-inline mt-4">
                    <button type="submit" class="btn btn-outline-primary">Search <img
                            src="{{ asset('template/assets/img/global/search.svg') }}" alt="Search"></button>
                    <button onclick="reset_date()" class="btn btn-outline-warning">Reset <img
                            src="{{ asset('template/assets/img/global/x-circle.svg') }}" alt="Reset"></button>
                </div>
            </div>
        </form>
    </div>
    {{-- START BY TANGGAL END --}}

    {{-- NOTIFIKASI / ALERT --}}
    <div class="row mt-2 pb-2 pt-2">
        {{-- Alert --}}
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat ! </strong> {{ session('success') }}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Selamat !</strong> {{ session('delete') }}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    {{-- NOTIFIKASI END --}}

    {{-- TOMBOL TAMBAH DATA START --}}
    <a href="/samplemasuk/create"
        class="col-lg-2 col-sm-8 d-flex sidebar-item active justify-content-center align-items-center"
        style="color: aliceblue">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus"
            viewBox="0 0 16 16">
            <path
                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
        </svg>
        <span>Tambah</span>
    </a>
    {{-- TOMBOL TAMBAH DATA END --}}

    {{-- TABLE DATA START --}}
    <div class="col-12 mt-2 pb-2 pt-2">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead style="background-color: rgb(239, 239, 247);">
                    <tr>
                        <th>No</th>
                        <th>Kode Sample</th>
                        <th>Segment</th>
                        <th>Tanggal Terima</th>
                        <th>Pengirim</th>
                        <th>Jenis Sample</th>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Lot No</th>
                        <th>Problem</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($samplemasuk->count())
                        @foreach ($samplemasuk as $sample)
                            <tr>
                                <td>{{ $samplemasuk->firstItem() + $loop->index }}</td>
                                <td>{{ $sample->kode_sample_masuk }}</td>
                                <td>{{ $sample->segment }}</td>
                                <td>{{ date('d-F-Y', strtotime($sample->tanggal_terima)) }}</td>
                                <td>{{ $sample->nama_pengirim }}</td>
                                <td>{{ $sample->jenis_sample }}</td>
                                <td>{{ $sample->customer }}</td>
                                <td>{{ $sample->product }}</td>
                                <td>{{ $sample->lot_number }}</td>
                                <td>{{ $sample->problem }}</td>
                                <td>
                                    <div class="d-flex flex-row justify-content-between align-items-start d-inline">
                                        <a href="/samplemasuk/{{ $sample->id }}" class="btn-statistics">
                                            <img src="{{ asset('template/assets/img/global/eye.svg') }}" alt="">
                                        </a>

                                        <a href="/samplemasuk/{{ $sample->id }}/edit" class="btn-statistics">
                                            <img src="{{ asset('template/assets/img/global/edit.svg') }}" alt="">
                                        </a>

                                        <form action="/samplemasuk/{{ $sample->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn-statistics" onclick="return confirm('Yakin Hapus data?')">
                                                <i class="bi bi-x-lg"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="12" class="text-center">Tidak ada data</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

    </div>
    {{-- TABLE DATA END --}}

    {{-- PAGINATOR --}}
    {{ $samplemasuk->links('vendor.pagination.bootstrap-5') }}
    {{-- {{ $samplemasuk->links('vendor.pagination.bootstrap-5') }} --}}
    {{-- PAGINATOR END --}}
@endsection

@push('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- jQuery, Datepicker js -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> --}}
    <script>
        // RESET DATEPICKER
        function reset_date() {
            document.getElementById("fromDate").value = "";
            document.getElementById("toDate").value = "";
        }

        // SHOW-HIDE COMPONEN
        $("#pencarian-tanggal").hide(); //hides div.
        // $("#pencarian-tanggal").show(); //shows div.

        let btnName = document.getElementById('show-search');
        btnName.addEventListener('click', () => {
            let element = document.getElementById('pencarian-tanggal');
            if (element.style.display != 'inline') {
                element.style.display = 'inline';
            } else {
                element.style.display = 'none'
            }
        })
    </script>
@endpush
