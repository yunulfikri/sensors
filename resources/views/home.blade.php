@extends('layouts.app-ext')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h1 text-center">{{ __('Sensor Data') }}</div>

                <div class="card-body">
                  <table class="table" id="myTable">
                    <thead class="thead-dark">
                        <tr class="text-center">
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
                <div class="card-footer bg-dark text-light">
                  {{ __('This data is received from Arduino hourly') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
