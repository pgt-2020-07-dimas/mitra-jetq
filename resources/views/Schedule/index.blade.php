@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <br>
            <div>
                <label class="h5">November, 9-15 2020</label> 
                <button class="btn btn-sm btn-outline-secondary"> <</button>
                <button class="btn btn-sm btn-outline-secondary"> ></button>
            </div>
            <br>
                <table class="table table-bordered">
                    <thead>
                        <tr class="bg-primary text-white font-weight-bold text-center">
                            <td class="bg-white"></td>
                            @foreach($weeks as $week)
                            <td>{{$week}}</td>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <td class="bg-primary text-white text-center">{{$d['aircraft_name']}} / {{$d['registration_number'] }} / {{$d['aircraft_base']}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection