{{-- GRAFIK TAHUNAN SEGMENT --}}
<div class="col-12 col-lg-6">
    <h2 class="content-title">Grafik Tahunan</h2>
    <h5 class="content-desc mb-4">Segment Sample Keluar</h5>
    <div class="document-card">
        <canvas id="sk_segment_tahunan"></canvas>
    </div>
</div>
{{-- GRAFIK TAHUNAN KATEGORI SAMPLE --}}
<div class="col-12 col-lg-6">
    <h2 class="content-title">Grafik Tahunan</h2>
    <h5 class="content-desc mb-4">Kategori Sample Keluar</h5>
    <div class="document-card">
        <canvas id="sk_kategori_tahunan"></canvas>
    </div>
</div>
{{-- GRAFIK BULANAN --}}
<div class="col-12 col-lg-12">
    <h2 class="content-title">Grafik Bulanan</h2>
    <h5 class="content-desc mb-4">Semua Sample Keluar</h5>
    <div class="document-card">
        <canvas id="sk_bulanan" height="60px"></canvas>
    </div>
</div>

@push('script')
    {{-- // CHART GRAFIK BULANAN SAMPLE KELUAR --}}
    <script>
        const ctx_sm = document.getElementById('sk_bulanan');
        const myChartsk = new Chart(ctx_sm, {
            type: 'line',
            data: {
                labels: _ydata6,
                datasets: [{
                    label: 'Sample Keluar',
                    data: _xdata6,
                    fill: true,
                    backgroundColor: [
                        'rgba(56, 173, 169, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(7, 153, 146,1.0)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        //CHART GRAFIK TAHUNAN SAMPLE KELUAR BERDASARKAN SEGMENT
        var Config_sk_segment_tahun = {
            type: 'bar',
            data: {
                labels: _ydata7,
                datasets: [{
                    label: 'Domestic',
                    data: _xdata7,
                    fill: true,
                    backgroundColor: [
                        'rgba(56, 173, 169,1.0)'
                    ],
                    borderColor: [
                        'rgba(7, 153, 146,1.0)'
                    ],
                }, {
                    label: 'Export',
                    data: _xdata8,
                    fill: true,
                    backgroundColor: [
                        'rgba(60, 99, 130,1.0)'
                    ],
                    borderColor: [
                        'rgba(10, 61, 98,1.0)'
                    ],
                }]
            },
            options: {
                spanGaps: true,
                responsive: true,
                title: {
                    display: false,
                    text: 'Chart.js bar Chart'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Labels'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Values'
                        },
                        ticks: {
                            beginAtZero: true,
                            min: 0,
                            max: 10,

                        }
                    }]
                }
            }
        };

        const SK_Segment_Tahunan = document.getElementById('sk_segment_tahunan');
        const myChartsk2 = new Chart(SK_Segment_Tahunan, Config_sk_segment_tahun);

        //CHART GRAFIK TAHUNAN SAMPLE KELUAR BERDASARKAN KATEGORI
        var Config_SK_Kategori_tahun = {
            type: 'bar',
            data: {
                labels: _ydata9,
                datasets: [{
                    label: 'Complaint',
                    data: _xdata9,
                    fill: true,
                    backgroundColor: [
                        'rgba(48, 51, 107,1.0)'
                    ],
                    borderColor: [
                        'rgba(19, 15, 64,1.0)'
                    ],
                }, {
                    label: 'Market',
                    data: _xdata10,
                    fill: true,
                    backgroundColor: [
                        'rgba(255, 121, 121,1.0)'
                    ],
                    borderColor: [
                        'rgba(235, 77, 75,1.0)'
                    ],
                }]
            },
            options: {
                spanGaps: true,
                responsive: true,
                title: {
                    display: false,
                    text: 'Chart.js bar Chart'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Labels'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Values'
                        },
                        ticks: {
                            min: 1,
                            max: 10,

                        }
                    }]
                }
            }
        };
        const SK_Kategori_tahunan = document.getElementById('sk_kategori_tahunan');
        const SK_Chart_Kategori = new Chart(SK_Kategori_tahunan, Config_SK_Kategori_tahun);
        // window.onload = function() {
        //     var SKKategori_Tahun = document.getElementById('sk_kategori_tahunan').getContext('2d');
        //     window.myLine = new Chart(SKKategori_Tahun, Config_SK_Kategori_tahun);
        // };
    </script>
@endpush
