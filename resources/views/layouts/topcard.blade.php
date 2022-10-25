<div class="row">
    <div class="col-12">
        {{-- <h2 class="content-title">Statistics</h2>
        <h5 class="content-desc mb-4">Your business growth</h5> --}}
    </div>

    {{-- <div class="col-12 col-md-6 col-lg-3">
        <div class="statistics-card">

            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex flex-column justify-content-between align-items-start">
                    <h5 class="content-desc">Karyawan</h5>

                    <h3 class="statistics-value">{{ $karyawan }} Orang</h3>
                </div>

                <button class="btn-statistics">
                    <img src="{{ asset('template/assets/img/global/times.svg') }}" alt="">
                </button>
            </div>

            <div class="statistics-list">
                <img class="statistics-image" src="{{ asset('template/assets/img/home/history/photo-4.png') }}"
                    alt="">
                <img class="statistics-image" src="{{ asset('template/assets/img/home/history/photo-3.png') }}"
                    alt="">
                <img class="statistics-image" src="{{ asset('template/assets/img/home/history/photo.png') }}"
                    alt="">
                <img class="statistics-image" src="{{ asset('template/assets/img/home/history/photo-1.png') }}"
                    alt="">
                <img class="statistics-image" src="{{ asset('template/assets/img/home/history/photo-2.png') }}"
                    alt="">
            </div>

        </div>
    </div> --}}

    <div class="col-12 col-md-6 col-lg-4">
        <div class="statistics-card">

            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex flex-column justify-content-between align-items-start">
                    <h5 class="content-desc">Sample Masuk</h5>

                    <h3 class="statistics-value">{{ $samplemasuk }} Sample</h3>
                </div>
                <a href="/samplemasuk">
                    <button class="btn-statistics">
                        <img src="{{ asset('template/assets/img/global/times.svg') }}" alt="">
                    </button>
                </a>
            </div>

            {{-- <div class="statistics-list">
                <div class="statistics-icon award">
                    <img src="{{ asset('template/assets/img/home/team/award.svg') }}" alt="">
                </div>
                <div class="statistics-icon globe">
                    <img src="{{ asset('template/assets/img/home/team/globe.svg') }}" alt="">
                </div>
                <div class="statistics-icon target">
                    <img src="{{ asset('template/assets/img/home/team/target.svg') }}" alt="">
                </div>
                <div class="statistics-icon box">
                    <img src="{{ asset('template/assets/img/home/team/box.svg') }}" alt="">
                </div>
            </div> --}}

        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
        <div class="statistics-card">

            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex flex-column justify-content-between align-items-start">
                    <h5 class="content-desc">Sample Keluar</h5>

                    <h3 class="statistics-value">{{ $samplekeluar }} Sample</h3>
                </div>
                <a href="/samplekeluar">
                    <button class="btn-statistics">
                        <img src="{{ asset('template/assets/img/global/times.svg') }}" alt="">
                    </button>
                </a>
            </div>

        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
        <div class="statistics-card">

            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex flex-column justify-content-between align-items-start">
                    <h5 class="content-desc">Sample Analisa Laborat</h5>

                    <h3 class="statistics-value">{{ $formLaborat }} Sample</h3>
                </div>
                <a href="/laborat">
                    <button class="btn-statistics">
                        <img src="{{ asset('template/assets/img/global/times.svg') }}" alt="">
                    </button>
                </a>
            </div>

        </div>
    </div>

</div>
