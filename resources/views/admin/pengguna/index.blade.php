@extends('layouts.pengguna.dashboard')

@section('title', 'Data Pengguna Sistem')

@section('content')
    <div class="nav pt-2 pb-2 mb-0 mt-0">
        <div class="col-lg-6">
            <h2 class="content-title">Data Pengguna Sistem</h2>
            <h5 class="content-desc mb-4">Customer Technical Service</h5>
        </div>
        <form class="d-flex justify-content-between align-items-center nav-input-container">
            <div class="nav-input-group">
                <input type="search" class="nav-input" placeholder="Cari username, email.." name="search"
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

            <a href="/pengguna/create"
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

        @foreach ($users as $item)
            <div class="col-6 col-md-3 col-lg-3 col-xs-12">
                <div class="d-flex flex-column justify-content-between align-items-center employee-card w-100">
                    <div class="d-flex flex-column justify-content-center align-items-center mt-3">
                        {{-- <a href="/pengguna/{{ $item->id }}" class="employee-name">{{ $item->name }}</a> --}}
                        <span class="employee-name">{{ $item->name }}</span>
                        <span class="employee-role">{{ $item->username }}</span>
                        <span class="employee-role">{{ $item->email }}</span>
                    </div>

                    <div class="d-flex justify-content-center align-items-center employee-status verified">
                        @if ($item->role_user == 'Admin')
                            <div class="employee-status-image">
                                <img src="{{ asset('template/assets/img/employees/check.svg') }}" alt="">
                            </div>
                            <span class="employee-status-text">Admin</span>
                        @elseif($item->role_user == 'User')
                            <p class="employee-role">{{ $item->role_user }}</p>
                        @endif
                        {{-- <span>{{ $item->status_jabatan }}</span> --}}
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-start d-inline">
                        <a href="/pengguna/{{ $item->id }}/edit" class="btn-statistics">
                            <img src="{{ asset('template/assets/img/global/edit.svg') }}" alt="">
                        </a>

                        <form action="/pengguna/{{ $item->id }}" method="post" class="d-inline">
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

        {{ $users->appends(['search' => request()->search])->links('vendor.pagination.bootstrap-5') }}
    </div>
@endsection
