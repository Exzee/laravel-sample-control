<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="shortcut icon" href="{{ asset('template/assets/img/global/logo.svg') }}" type="image/x-icon" />
    <link rel="icon" href="{{ asset('template/assets/img/global/logo.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('template/css/index.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <title>E-Lite Dashboard @yield('title')</title>
    @stack('css')
</head>

<body>

    <div class="screen-cover d-none d-xl-none"></div>

    <div class="row">
        {{-- Sidebar --}}
        @include('layouts.sidebar')
        {{-- End Sidebar --}}

        {{-- Widget Content --}}

        <div class="col-12 col-xl-9">
            {{-- Header Navigation --}}
            @include('layouts.header')
            {{-- End Header Navigation --}}

            {{-- Card Header --}}

            <div class="content">
                {{-- Top Card --}}
                @include('layouts.topcard')
                {{-- End Top Card --}}


                {{-- Content --}}
                @yield('content')
                {{-- End Content --}}

                {{-- @can('gate_admin') --}}
                <div class="row mt-5">
                    {{-- Left Card --}}
                    @include('layouts.leftcard')
                    {{-- End Left Card --}}

                    {{-- Right Card --}}
                    @include('layouts.rightcard')
                    {{-- End Right Card --}}
                </div>
                {{-- @endcan --}}
            </div>
        </div>
    </div>

    {{-- {{ dd($hitungtahunall) }} --}}
    {{-- {{ dd($hitungtahunall) }} --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script>
        const navbar = document.querySelector('.col-navbar')
        const cover = document.querySelector('.screen-cover')

        const sidebar_items = document.querySelectorAll('.sidebar-item')

        function toggleNavbar() {
            navbar.classList.toggle('d-none')
            cover.classList.toggle('d-none')
        }

        function toggleActive(e) {
            sidebar_items.forEach(function(v, k) {
                v.classList.remove('active')
            })
            e.closest('.sidebar-item').classList.add('active')

        }
    </script>

    {{-- SCRIPT UNTUK GRAFIK --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"
        integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        // -------- JSON SEMUA SAMPLE MASUK ------------
        var _ydata = JSON.parse('{!! json_encode($bulan) !!}');
        var _xdata = JSON.parse('{!! json_encode($hitungbulan) !!}');
        // JSON SAMPLE MASUK TAHUNAN BY DOMESTIC
        var _ydata1 = JSON.parse('{!! json_encode($domsegment_tahun) !!}');
        var _xdata1 = JSON.parse('{!! json_encode($domsegment_hitungtahun) !!}');
        // JSON SAMPLE MASUK TAHUNAN BY EXPORT
        var _ydata2 = JSON.parse('{!! json_encode($expsegment_tahun) !!}');
        var _xdata2 = JSON.parse('{!! json_encode($expsegment_hitungtahun) !!}');
        // JSON SAMPLE MASUK TAHUNAN BY ALL
        var _ydata3 = JSON.parse('{!! json_encode($alltahun) !!}');
        var _xdata3 = JSON.parse('{!! json_encode($hitungtahunall) !!}');

        // JSON SAMPLE MASUK TAHUNAN BY KATEGORI COMPLAINT
        var _ydata4 = JSON.parse('{!! json_encode($kategoricompl_tahun) !!}');
        var _xdata4 = JSON.parse('{!! json_encode($kategoricompl_hitungtahun) !!}');
        // JSON SAMPLE MASUK TAHUNAN BY KATEGORI MARKET
        var _ydata5 = JSON.parse('{!! json_encode($kategorimarket_tahun) !!}');
        var _xdata5 = JSON.parse('{!! json_encode($kategorimarket_hitungtahun) !!}');

        // -------- JSON SEMUA SAMPLE KELUAR ------------
        var _ydata6 = JSON.parse('{!! json_encode($sk_bulan) !!}');
        var _xdata6 = JSON.parse('{!! json_encode($sk_hitungbulan) !!}');
        // JSON SAMPLE MASUK TAHUNAN BY DOMESTIC
        var _ydata7 = JSON.parse('{!! json_encode($sk_domsegment_tahun) !!}');
        var _xdata7 = JSON.parse('{!! json_encode($sk_domsegment_hitungtahun) !!}');
        // JSON SAMPLE MASUK TAHUNAN BY EXPORT
        var _ydata8 = JSON.parse('{!! json_encode($sk_expsegment_tahun) !!}');
        var _xdata8 = JSON.parse('{!! json_encode($sk_expsegment_hitungtahun) !!}');
        // JSON SAMPLE MASUK TAHUNAN BY KATEGORI COMPLAINT
        var _ydata9 = JSON.parse('{!! json_encode($sk_kategoricompl_tahun) !!}');
        var _xdata9 = JSON.parse('{!! json_encode($sk_kategoricompl_hitungtahun) !!}');
        // JSON SAMPLE MASUK TAHUNAN BY KATEGORI MARKET
        var _ydata10 = JSON.parse('{!! json_encode($sk_kategorimarket_tahun) !!}');
        var _xdata10 = JSON.parse('{!! json_encode($sk_kategorimarket_hitungtahun) !!}');
    </script>

    @stack('script')
</body>

</html>
