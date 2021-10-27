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
        
        <div class="col-6 px-3 border-left-primary">
            <form action="" method="get" class="form">
                <input type="date" name="date" id="" class="form-control mb-2" value="{{ $dateStart->format('Y-m-d')}}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-6 px-3 border-left-danger">
            <form action="" method="get" class="form">
                <input type="date" name="date" id="" class="form-control mb-2" value="{{ $dateStart->format('Y-m-d')}}">
                <label for="">To</label>
                <input type="date" name="enddate" id="" class="form-control mb-2" value="{{ $dateEnd->format('Y-m-d')}}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    
</div>
<hr>
<div class="row">

    <div class="col col-md-12">
        {{-- <canvas id="vocChart" height="280" width="600"></canvas> --}}
        <div id="vocChart"></div>
    </div>
    <div class="col col-md-12">
        <canvas id="vbebanChart" height="280" width="600"></canvas>
    </div>
    <div class="col col-md-6">
        <canvas id="ibebanChart" height="280" width="600"></canvas>
    </div>
    <div class="col col-md-6">
        <canvas id="suhuChart" height="280" width="600"></canvas>
    </div>
    <div class="col col-md-6">
        <canvas id="irradiasiChart" height="280" width="600"></canvas>
    </div>
    <div class="col col-md-6">
        <canvas id="dayaChart" height="280" width="600"></canvas>
    </div>
    

</div>
<div class="d-flex justify-content-center mt-5">

    <div class="card">
        <div class="card-header h1 text-center">{{ __('Sensor Data') }}</div>

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
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<!-- Your application script -->
<script>
    var time = <?php echo $time; ?>;
    var timefull = <?php echo $timefull; ?>;
    var voc = <?php echo $voc; ?>;
    var vbeban = <?php echo $vbeban; ?>;
    var ibeban = <?php echo $ibeban; ?>;
    var suhu = <?php echo $suhu; ?>;
    var daya = <?php echo $daya; ?>;
    var irradiasi = <?php echo $irradiasi; ?>;
     
    var chart = new ApexCharts(document.querySelector("#vocChart"), {
        chart: {
            type: 'line'
        },
        stroke: {
            curve: 'smooth',
        },
        series: [{
            name: 'sales',
            data: voc
        }],
        xaxis: {
            categories: time
        },
        annotations: {
        xaxis: [
            {
                x: '17:00',
                borderColor: '#775DD0',
            }
        ]
        }
    });

    chart.render();
</script>
@endsection
