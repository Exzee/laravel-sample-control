{{-- GRAFIK TAHUNAN SEGMENT --}}
<div class="col-12 col-lg-6">
    <h2 class="content-title">Grafik Tahunan</h2>
    <h5 class="content-desc mb-4">Segment Sample Masuk</h5>
    <div class="document-card">
        <canvas id="sm_segment_tahunan"></canvas>
    </div>
</div>
{{-- GRAFIK TAHUNAN KATEGORI SAMPLE --}}
<div class="col-12 col-lg-6">
    <h2 class="content-title">Grafik Tahunan</h2>
    <h5 class="content-desc mb-4">Kategori Sample Masuk</h5>
    <div class="document-card">
        <canvas id="sm_jenis_tahunan"></canvas>
    </div>
</div>
{{-- GRAFIK BULANAN --}}
<div class="col-12 col-lg-12">
    <h2 class="content-title">Grafik Bulanan</h2>
    <h5 class="content-desc mb-4">Semua Sample Masuk</h5>
    <div class="document-card">
        <canvas id="sm_bulanan" height="60px"></canvas>
    </div>
</div>

@push('script')
    {{-- CHART GRAFIK BULANAN SAMPLE MASUK --}}
    <script>
        const SMChartBulanan = document.getElementById('sm_bulanan');
        const myChart = new Chart(SMChartBulanan, {
            type: 'line',
            data: {
                labels: _ydata,
                datasets: [{
                    label: 'Sample Masuk ',
                    data: _xdata,
                    fill: true,
                    backgroundColor: [
                        'rgba(248, 194, 145,0.4)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
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

        //CHART GRAFIK TAHUNAN SAMPLE MASUK BERDASARKAN SEGMENT
        var Config_SegmentTahunan = {
            type: 'bar',
            data: {
                labels: _ydata3,
                datasets: [{
                    label: 'Domestic',
                    data: _xdata1,
                    fill: true,
                    backgroundColor: [
                        'rgba(48, 51, 107,1.0)'
                    ],
                    borderColor: [
                        'rgba(19, 15, 64,1.0)'
                    ],
                }, {
                    label: 'Export',
                    data: _xdata2,
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

        window.onload = function() {
            var SMSegmentTahunan = document.getElementById('sm_segment_tahunan').getContext('2d');
            window.myLine = new Chart(SMSegmentTahunan, Config_SegmentTahunan);
        };

        //CHART GRAFIK TAHUNAN SAMPLE MASUK BERDASARKAN JENIS SAMPLE
        var Config_sm_jenis_tahun = {
            type: 'bar',
            data: {
                labels: _ydata3,
                datasets: [{
                    label: 'Complaint',
                    data: _xdata4,
                    fill: true,
                    backgroundColor: [
                        'rgba(12, 36, 97,1.0)'
                    ],
                    borderColor: [
                        'rgba(10, 61, 98,1.0)'
                    ],
                }, {
                    label: 'Market',
                    data: _xdata5,
                    fill: true,
                    backgroundColor: [
                        'rgba(56, 173, 169,1.0)'
                    ],
                    borderColor: [
                        'rgba(7, 153, 146,1.0)'
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
        const SM_Jenis_tahunan = document.getElementById('sm_jenis_tahunan');
        const SM_Chart_jenis = new Chart(SM_Jenis_tahunan, Config_sm_jenis_tahun);
    </script>
@endpush
