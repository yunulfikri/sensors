@extends('layouts.app-ext')
@section('content')
<div class="jumbotron">
    <h2>Grafik Tanggal</h2>
    {{ $dateStart->format('d-m-Y')}}
    {{ " - ".$dateEnd->format('d-m-Y')}}
</div>

<div class="container">
    <h3 class="">Filter</h3>

    <div class="row col-12">
        
        <div class="px-3 col-6 border-left-primary">
            <form action="" method="get" class="form">
                <input type="date" name="date" id="" class="mb-2 form-control" value="{{ $dateStart->format('Y-m-d')}}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="px-3 col-6 border-left-danger">
            <form action="" method="get" class="form">
                <input type="date" name="date" id="" class="mb-2 form-control" value="{{ $dateStart->format('Y-m-d')}}">
                <label for="">To</label>
                <input type="date" name="enddate" id="" class="mb-2 form-control" value="{{ $dateEnd->format('Y-m-d')}}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    
</div>
<hr>
<div class="row">

    <div class="col col-md-12 pt-5">
        <div class="text-center">
                Ket. <span style="background-color: green; color: green">--</span> hari 1 , <span style="background-color: blue; color: blue">--</span> hari 2, <span style="background-color: orange; color: orange">--</span> hari 3, <span style="background-color: red; color: red">--</span> hari 4, <span style="background-color: black; color: black">--</span> hari 5, <span style="background-color: violet; color: violet">--</span> hari 6, <span style="background-color: maroon; color: maroon">--</span> hari 7
        </div>
        <canvas id="vocChart" height="280" width="600"></canvas>
    </div>
    <div class="col col-md-12 pt-5">
        <div class="text-center">
                Ket. <span style="background-color: green; color: green">--</span> hari 1 , <span style="background-color: blue; color: blue">--</span> hari 2, <span style="background-color: orange; color: orange">--</span> hari 3, <span style="background-color: red; color: red">--</span> hari 4, <span style="background-color: black; color: black">--</span> hari 5, <span style="background-color: violet; color: violet">--</span> hari 6, <span style="background-color: maroon; color: maroon">--</span> hari 7
        </div>
        <canvas id="vbebanChart" height="280" width="600"></canvas>
    </div>
    <div class="col col-md-12 pt-5">
        <div class="text-center">
                Ket. <span style="background-color: green; color: green">--</span> hari 1 , <span style="background-color: blue; color: blue">--</span> hari 2, <span style="background-color: orange; color: orange">--</span> hari 3, <span style="background-color: red; color: red">--</span> hari 4, <span style="background-color: black; color: black">--</span> hari 5, <span style="background-color: violet; color: violet">--</span> hari 6, <span style="background-color: maroon; color: maroon">--</span> hari 7
        </div>
        <canvas id="ibebanChart" height="280" width="600"></canvas>
    </div>
    <div class="col col-md-12 pt-5">
        <div class="text-center">
                Ket. <span style="background-color: green; color: green">--</span> hari 1 , <span style="background-color: blue; color: blue">--</span> hari 2, <span style="background-color: orange; color: orange">--</span> hari 3, <span style="background-color: red; color: red">--</span> hari 4, <span style="background-color: black; color: black">--</span> hari 5, <span style="background-color: violet; color: violet">--</span> hari 6, <span style="background-color: maroon; color: maroon">--</span> hari 7
        </div>
        <canvas id="suhuChart" height="280" width="600"></canvas>
    </div>
    <div class="col col-md-12 pt-5">
        <div class="text-center">
                Ket. <span style="background-color: green; color: green">--</span> hari 1 , <span style="background-color: blue; color: blue">--</span> hari 2, <span style="background-color: orange; color: orange">--</span> hari 3, <span style="background-color: red; color: red">--</span> hari 4, <span style="background-color: black; color: black">--</span> hari 5, <span style="background-color: violet; color: violet">--</span> hari 6, <span style="background-color: maroon; color: maroon">--</span> hari 7
        </div>
        <canvas id="irradiasiChart" height="280" width="600"></canvas>
    </div>
    <div class="col col-md-12 pt-5">
        <div class="text-center">
                Ket. <span style="background-color: green; color: green">--</span> hari 1 , <span style="background-color: blue; color: blue">--</span> hari 2, <span style="background-color: orange; color: orange">--</span> hari 3, <span style="background-color: red; color: red">--</span> hari 4, <span style="background-color: black; color: black">--</span> hari 5, <span style="background-color: violet; color: violet">--</span> hari 6, <span style="background-color: maroon; color: maroon">--</span> hari 7
        </div>
        <canvas id="dayaChart" height="280" width="600"></canvas>
    </div>
    

</div>
<div class="mt-5 d-flex justify-content-center">

    <div class="card">
        <div class="text-center card-header h1">{{ __('Sensor Data') }}</div>

        <div class="card-body">
            <div class="table-responsive">


                <table class="table" id="myTable">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Voc (V)</th>
                            <th scope="col">Vbeban (V)</th>
                            <th scope="col">Ibeban (mA)</th>
                            <th scope="col">beban (Ohm)</th>
                            <th scope="col">Suhu</th>
                            <th scope="col">Irradiasi (W/m2)</th>
                            <th scope="col">Daya (W)</th>
                            <th scope="col">Kelembaban</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->created_at->format('d-m-Y') }}</td>
                            <td>{{ $item->created_at->format('H:i') }}</td>
                            <td>{{ $item->voc }}</td>
                            <td>{{ $item->vbeban }}</td>
                            <td>{{ $item->ibeban }}</td>
                            <td>39</td>
                            <td>{{ $item->suhu }}</td>
                            <td>{{ $item->irradiasi }}</td>
                            <td>{{ $item->daya }}</td>
                            <td>{{ $item->kelembaban }}%</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-dark text-light">
            {{ __('This data is received from Arduino hourly') }}
        </div>
    </div>
</div>


@endsection

@section('script')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/1.0.2/chartjs-plugin-annotation.min.js" integrity="sha512-FuXN8O36qmtA+vRJyRoAxPcThh/1KJJp7WSRnjCpqA+13HYGrSWiyzrCHalCWi42L5qH1jt88lX5wy5JyFxhfQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/0.5.7/chartjs-plugin-annotation.js" crossorigin="anonymous"></script>
<!-- Your application script -->
<script>
    var time = <?php echo $time; ?>;
    var voc = <?php echo $voc; ?>;
    var vbeban = <?php echo $vbeban; ?>;
    var ibeban = <?php echo $ibeban; ?>;
    var suhu = <?php echo $suhu; ?>;
    var daya = <?php echo $daya; ?>;
    var irradiasi = <?php echo $irradiasi; ?>;
    var warna = <?= $warna ?>;

    console.log(warna);
     
    const optionsPlugins = {
        plugins: {
            autocolors: false,
            annotation: {
            annotations: {
                line1: {
                type: 'line',
                yMin: 60,
                yMax: 60,
                borderColor: 'rgb(255, 99, 132)',
                borderWidth: 2,
                }
            }
            }
        }
    }

    var barChartDatavoc = {
        labels: time,
        datasets: [{
            label: 'voc',
            backgroundColor: "rgba(243, 39, 239, 0.05)",
            borderColor: "rgba(243, 39, 239, 1)",
            data: voc
        }]
    };
    var barChartDatavbeban = {
        labels: time,
        datasets: [{
            label: 'Vbeban',
            backgroundColor: "rgba(252, 186, 3, 0.05)",
            borderColor: "rgba(252, 186, 3, 1)",
            data: vbeban
        }]
    };
    var barChartDataibeban = {
        labels: time,
        datasets: [{
            label: 'Ibeban',
            backgroundColor: "rgba(3, 144, 252, 0.05)",
            borderColor: "rgba(3, 144, 252, 1)",
            data: ibeban
        }]
    };
    var barChartDatasuhu = {
        labels: time,
        datasets: [{
            label: 'Suhu',
            backgroundColor: "rgba(230, 14, 2, 0.05)",
            borderColor: "rgba(230, 14, 2, 1)",
            data: suhu
        }]
    };
    var barChartDatadaya = {
        labels: time,
        datasets: [{
            label: 'Daya (W)',
            backgroundColor: "rgba(2, 230, 222, 0.05)",
            borderColor: "rgba(2, 230, 222, 1)",
            data: daya
        }]
    };
    var barChartDatairradiasi = {
        labels: time,
        datasets: [{
            label: 'Irradiasi (W/m2)',
            backgroundColor: "rgba(255, 81, 0, 0.05)",
            borderColor: "rgba(255, 81, 0, 1)",
            data: irradiasi
        }]
    };

    window.onload = function () {
        var ctvvoc = document.getElementById("vocChart").getContext("2d");
        window.myBar = new Chart(ctvvoc, {
            type: 'line',
            data: barChartDatavoc,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: '#c1c1c1',
                        borderSkipped: 'bottom'
                    }
                },
                tooltips: {
                    enabled: true
                },
                title: {
                    display: true,
                    text: 'Voc (V) Chart'
                },
                responsive: true,
                annotation: {
                    drawTime: 'afterDatasetsDraw',
                    annotations: warna,
                }
            }
            
        });

        var ctxvbeban = document.getElementById("vbebanChart").getContext("2d");
        window.myBar = new Chart(ctxvbeban, {
            type: 'line',
            data: barChartDatavbeban,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: '#fcba03',
                        borderSkipped: 'bottom'
                    }
                },
                tooltips: {
                    enabled: true
                },
                title: {
                    display: true,
                    text: 'Vbeban (V) Chart'
                },
                responsive: true,
                annotation: {
                    drawTime: 'afterDatasetsDraw',
                    annotations: warna,
                }
            }
        });

        var ctxibeban = document.getElementById("ibebanChart").getContext("2d");
        window.myBar = new Chart(ctxibeban, {
            type: 'line',
            data: barChartDataibeban,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: '#fcba03',
                        borderSkipped: 'bottom'
                    }
                },
                tooltips: {
                    enabled: true
                },
                title: {
                    display: true,
                    text: 'Ibeban (A) Chart'
                },
                responsive: true,
                annotation: {
                    drawTime: 'afterDatasetsDraw',
                    annotations: warna,
                }
            }
        });

        var ctxsuhu = document.getElementById("suhuChart").getContext("2d");
        window.myBar = new Chart(ctxsuhu, {
            type: 'line',
            data: barChartDatasuhu,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: '#fcba03',
                        borderSkipped: 'bottom'
                    }
                },
                tooltips: {
                    enabled: true
                },
                title: {
                    display: true,
                    text: 'Suhu Chart'
                },
                responsive: true,
                annotation: {
                    drawTime: 'afterDatasetsDraw',
                    annotations: warna,
                }
                
            }
        });
        
        var ctxdaya = document.getElementById("dayaChart").getContext("2d");
        window.myBar = new Chart(ctxdaya, {
            type: 'line',
            data: barChartDatadaya,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: '#fcba03',
                        borderSkipped: 'bottom'
                    }
                },
                tooltips: {
                    enabled: true
                },
                title: {
                    display: true,
                    text: 'Daya Chart'
                },
                responsive: true,
                annotation: {
                    drawTime: 'afterDatasetsDraw',
                    annotations: warna,
                }
            }
        });

        var ctxirradiasi = document.getElementById("irradiasiChart").getContext("2d");
        window.myBar = new Chart(ctxirradiasi, {
            type: 'line',
            data: barChartDatairradiasi,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: '#fcba03',
                        borderSkipped: 'bottom'
                    }
                },
                tooltips: {
                    enabled: true
                },
                title: {
                    display: true,
                    text: 'Irradiasi Chart'
                },
                responsive: true,
                annotation: {
                    drawTime: 'afterDatasetsDraw',
                    annotations: warna,
                }
            }
        });

        
    }

</script>
@endsection
