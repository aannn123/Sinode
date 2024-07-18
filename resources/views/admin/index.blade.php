@extends('layouts.admin.default')
@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div style="background-color: #f4f6f9">

                        <div class="section-header">
                            <h1>Dashboard</h1>
                        </div>
                        <div class="row">

                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="card card-statistic-1">
                                    <div class="card-icon bg-primary" style="background: #35A5DD">
                                        <i class="fas fa-users"></i>
                                    </div>

                                    <div class="card-wrap">
                                        <div class="card-header">
                                            <h4>Total Survey</h4>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        {{ $all }}
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="card card-statistic-1">
                                    <div class="card-icon bg-success" style="background: #35A5DD">
                                        <i class="fas fa-user-check"></i>
                                    </div>

                                    <div class="card-wrap">
                                        <div class="card-header">
                                            <h4>Memenuhi Syarat</h4>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        {{ $success }}
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="card card-statistic-1">
                                    <div class="card-icon bg-danger" style="background: #35A5DD">
                                        <i class="fas fa-user-times"></i>
                                    </div>

                                    <div class="card-wrap">
                                        <div class="card-header">
                                            <h4>Tidak Memenuhi Syarat</h4>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        {{ $failed }}
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Data Statistik Survey</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myChart" height="158"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
@push('js')
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                    "Oktober", "November", "Desember"
                ],
                datasets: [{
                        label: 'Total Survey',
                        data: [{{ $month['jan'] }}, {{ $month['feb'] }}, {{ $month['mar'] }},
                            {{ $month['apr'] }}, {{ $month['mei'] }}, {{ $month['jun'] }},
                            {{ $month['jul'] }}, {{ $month['ags'] }}, {{ $month['sep'] }},
                            {{ $month['okt'] }}, {{ $month['nov'] }}, {{ $month['des'] }}
                        ],
                        borderWidth: 2,
                        backgroundColor: '#6777ef',
                        borderColor: '#6777ef',
                        borderWidth: 2.5,
                        pointBackgroundColor: '#ffffff',
                        pointRadius: 4
                    },
                    {
                        label: 'Berhasil',
                        data: [{{ $succ['jan'] }}, {{ $succ['feb'] }}, {{ $succ['mar'] }},
                            {{ $succ['apr'] }}, {{ $succ['mei'] }}, {{ $succ['jun'] }},
                            {{ $succ['jul'] }}, {{ $succ['ags'] }}, {{ $succ['sep'] }},
                            {{ $succ['okt'] }}, {{ $succ['nov'] }}, {{ $succ['des'] }}
                        ],
                        borderWidth: 2,
                        backgroundColor: '#47c363',
                        borderColor: '#47c363',
                        borderWidth: 2.5,
                        pointBackgroundColor: '#ffffff',
                        pointRadius: 4
                    },
                    {
                        label: 'Gagal',
                        data: [{{ $fail['jan'] }}, {{ $fail['feb'] }}, {{ $fail['mar'] }},
                            {{ $fail['apr'] }}, {{ $fail['mei'] }}, {{ $fail['jun'] }},
                            {{ $fail['jul'] }}, {{ $fail['ags'] }}, {{ $fail['sep'] }},
                            {{ $fail['okt'] }}, {{ $fail['nov'] }}, {{ $fail['des'] }}
                        ],
                        borderWidth: 2,
                        backgroundColor: '#fc544b',
                        borderColor: '#fc544b',
                        borderWidth: 2.5,
                        pointBackgroundColor: '#ffffff',
                        pointRadius: 4
                    }
                ]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            drawBorder: false,
                            color: '#f2f2f2',
                        },
                        ticks: {
                            beginAtZero: true,
                            stepSize: 150
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            display: false
                        },
                        gridLines: {
                            display: false
                        }
                    }]
                },
            }
        });

    </script>
@endpush
