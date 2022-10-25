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
    @stack('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <title>@yield('title')</title>

    <style>
        .table-responsive {
            width: 100%;
            margin-bottom: 15px;
            overflow-y: hidden;
            -ms-overflow-style: -ms-autohiding-scrollbar;
            border: 1px solid #ddd;
        }

        .table-responsive>.table {
            margin-bottom: 0;
        }

        .table-responsive>.table>thead>tr>th,
        .table-responsive>.table>tbody>tr>th,
        .table-responsive>.table>tfoot>tr>th,
        .table-responsive>.table>thead>tr>td,
        .table-responsive>.table>tbody>tr>td,
        .table-responsive>.table>tfoot>tr>td {
            white-space: nowrap;
        }

        .table-responsive>.table-bordered {
            border: 0;
        }

        .table-responsive>.table-bordered>thead>tr>th:first-child,
        .table-responsive>.table-bordered>tbody>tr>th:first-child,
        .table-responsive>.table-bordered>tfoot>tr>th:first-child,
        .table-responsive>.table-bordered>thead>tr>td:first-child,
        .table-responsive>.table-bordered>tbody>tr>td:first-child,
        .table-responsive>.table-bordered>tfoot>tr>td:first-child {
            border-left: 0;
        }

        .table-responsive>.table-bordered>thead>tr>th:last-child,
        .table-responsive>.table-bordered>tbody>tr>th:last-child,
        .table-responsive>.table-bordered>tfoot>tr>th:last-child,
        .table-responsive>.table-bordered>thead>tr>td:last-child,
        .table-responsive>.table-bordered>tbody>tr>td:last-child,
        .table-responsive>.table-bordered>tfoot>tr>td:last-child {
            border-right: 0;
        }

        .table-responsive>.table-bordered>tbody>tr:last-child>th,
        .table-responsive>.table-bordered>tfoot>tr:last-child>th,
        .table-responsive>.table-bordered>tbody>tr:last-child>td,
        .table-responsive>.table-bordered>tfoot>tr:last-child>td {
            border-bottom: 0;
        }
    </style>


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
                {{-- @include('layouts.topcard') --}}
                {{-- End Top Card --}}

                {{-- Content --}}
                @yield('content')
                {{-- End Content --}}


            </div>
        </div>
    </div>



    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
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
    @stack('script')

</body>

</html>
