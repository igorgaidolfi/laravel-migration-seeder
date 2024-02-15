@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th>Azienda</th>
                          <th>Stazione di Partenza</th>
                          <th>Stazione di Arrivo</th>
                          <th>Orario di partenza</th>
                          <th>Orario di arrivo</th>
                          <th>Data di partenza</th>
                          <th>Data di arrivo</th>
                          <th>Codice Treno</th>
                          <th>Numero Carrozze</th>
                          <th>In orario</th>
                          <th>Cancellato</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($trains as $train)
                            @if($train -> departure_date == date('Y-m-d'))
                                <tr>
                                    <td>{{$train -> company}}</td>
                                    <td>{{$train -> origin_station}}</td>
                                    <td>{{$train -> destination_station}}</td>
                                    <td>{{$train -> departure_hour}}</td>
                                    <td>{{$train -> arrival_hour}}</td>
                                    <td>{{date('d-m-Y', strtotime($train->departure_date)) }}</td>
                                    <td>{{date('d-m-Y', strtotime($train->arrival_date))}}</td>
                                    <td>{{$train -> train_code}}</td>
                                    <td>{{$train -> number_of_coaches}}</td>
                                    <td>{{$train -> on_time}}</td>
                                    <td>{{$train -> cancelled}}</td>
                                </tr>
                            @endif
                        @endforeach
                      </tbody>                    
                </table>
            </div>
        </div>
    </div>
@endsection