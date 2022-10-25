@extends('layouts.karyawan.dashboard')

@section('title', 'Data Karyawan')

@section('content')

    <div class="nav pt-2 pb-2 mb-0 mt-0">
        <div class="col-lg-6">
            <h2 class="content-title">Karyawan</h2>
            <h5 class="content-desc mb-4">Customer Technical Service</h5>
        </div>
        <form class="d-flex justify-content-between align-items-center nav-input-container">
            <div class="nav-input-group">
                <input type="search" class="nav-input" placeholder="Cari No Badge, Nama Karyawan" name="search"
                    value="{{ request()->search }}">
                <button class="btn-nav-input" type="submit"><img src="{{ asset('template/assets/img/global/search.svg') }}"
                        alt=""></button>
            </div>
        </form>
    </div>
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

        <div class="col-12">

            <a href="/karyawan/create"
                class="col-lg-2 col-sm-8 d-flex sidebar-item active justify-content-center align-items-center"
                style="color: aliceblue">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                <span>Tambah</span>
            </a>
        </div>
        @if ($karyawan->count())
            @foreach ($karyawan as $item)
                <div class="col-6 col-md-4 col-lg-4 col-xs-12">
                    <div class="d-flex flex-column justify-content-between align-items-center employee-card w-100">
                        @if ($item->foto_karyawan)
                            <img src="{{ asset('storage/' . $item->foto_karyawan) }}" alt="" class="employee-img"
                                style="border-radius: 50%;">
                        @else
                            <img src="{{ asset('/avatars/no_image.png') }}" alt="" class="employee-img"
                                style="border-radius: 50%;">
                        @endif

                        <div class="d-flex flex-column justify-content-center align-items-center mt-3">
                            <a href="/karyawan/{{ $item->id }}" class="employee-name">{{ $item->nama_karyawan }}</a>
                            {{-- <h4 class="employee-name">{{ $item->nama_karyawan }}</h4> --}}
                            <span class="employee-role">{{ $item->no_badge }}</span>
                            <span class="employee-role">{{ $item->email }}</span>
                        </div>

                        <div class="d-flex justify-content-center align-items-center employee-status verified">
                            <p class="employee-role">{{ $item->jabatan }}</p>
                            @if ($item->status_jabatan == 'Tetap')
                                <div class="employee-status-image">
                                    <img src="{{ asset('template/assets/img/employees/check.svg') }}" alt="">
                                </div>
                            @elseif($item->status_jabatan == 'Kontrak')
                                <div class="employee-status-image">
                                    <img src="{{ asset('template/assets/img/global/check-circle.svg') }}" alt="">
                                </div>
                            @endif
                            <span>{{ $item->status_jabatan }}</span>
                        </div>
                        <div class="d-flex flex-row justify-content-between align-items-start d-inline">
                            <a href="/karyawan/{{ $item->id }}/edit" class="btn-statistics">
                                <img src="{{ asset('template/assets/img/global/edit.svg') }}" alt="">
                            </a>

                            <form action="/karyawan/{{ $item->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn-statistics" onclick="return confirm('Yakin Hapus data?')">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('template/assets/img/employees/empty.svg') }}" alt="" class="empty-img">
                    <h4 class="empty-title">Data Karyawan Kosong</h4>
                    <p class="empty-desc">Silahkan tambahkan data karyawan</p>
                </div>
            </div>
        @endif

        {{ $karyawan->appends(['search' => request()->search])->links('vendor.pagination.bootstrap-5') }}
    </div>

@endsection
