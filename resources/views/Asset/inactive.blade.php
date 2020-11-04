@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-5 mb-3">
                <div class="text-center">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Base</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if($data <> null)
                        @foreach ($data as $d)
                            <tr class="aircraft-row" data-id="{{ $d['aircraft_id'] }}" id="{{ $d['aircraft_id'] }}">
                                <td><img src="http://api.jet-q.com/assets/img/aircraft/{{$d['main_image']}}" alt="" class="img-fluid" style="max-width: 100px;"></td>
                                <td>{{ $d['registration_number'] }}</td>
                                <td>{{ $d['aircraft_name'] }}</td>
                                <td>{{ $d['aircraft_base'] }}</td>
                            </tr>
                        @endforeach
                        @else

                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card mb-4">
                    <div class="card-header">
                        <h6>Aircraft Detail</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5 d-none d-md-block">
                                <div class="row ">
                                    <div class="col-md-12 mb-2">
                                        <img src="https://api.jet-q.com/assets/img/aircraft/main_image_default.jpg" alt="No Image" class="img-fluid aircraft-image img-aircraft-1">

                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <img src="https://api.jet-q.com/assets/img/aircraft/second_image_default.jpg" alt="No Image" class="img-fluid image-2 img-aircraft">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <img src="https://api.jet-q.com/assets/img/aircraft/second_image_default.jpg" alt="No Image" class="img-fluid image-3 img-aircraft">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <img src="https://api.jet-q.com/assets/img/aircraft/second_image_default.jpg" alt="No Image" class="img-fluid image-4 img-aircraft">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <img src="https://api.jet-q.com/assets/img/aircraft/second_image_default.jpg" alt="No Image" class="img-fluid image-5 img-aircraft">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="" class="small">Aircraft Name</label>
                                        <h5 class="card-title aircraft-name font-weight-bold">-</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="small">Reg. Number</label>
                                        <h5 class="card-title font-weight-bold registration-number">-</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="small">Base</label>
                                        <h5 class="card-title aircraft-base font-weight-bold">-</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="small">Aircraft Cost</label>
                                        <h5 class="card-title aircraft-cost font-weight-bold">-</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="small">Aircraft Range</label>
                                        <h5 class="card-title aircraft-range font-weight-bold">-</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="small">Aircraft Speed</label>
                                        <h5 class="card-title aircraft-speed font-weight-bold">-</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="small">Year</label>
                                        <h5 class="card-title aircraft-year font-weight-bold">-</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="small">Min. Takeoff</label>
                                        <h5 class="card-title aircraft-takeoff font-weight-bold">-</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="small">Min. Landing</label>
                                        <h5 class="card-title aircraft-landing font-weight-bold">-</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="small">Cabin Height</label>
                                        <h5 class="card-title aircraft-height font-weight-bold">-</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="small">Cabin Width</label>
                                        <h5 class="card-title aircraft-width font-weight-bold">-</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="small">Cabin Length</label>
                                        <h5 class="card-title aircraft-length font-weight-bold">-</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="small">Services</label>
                                        <h5 class="card-title aircraft-service font-weight-bold">-</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="small">Max. Seat</label>
                                        <h5 class="card-title aircraft-seats font-weight-bold">-</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="small">Max. Lugage</label>
                                        <h5 class="card-title aircraft-luggage font-weight-bold">-</h5>
                                    </div>
                                    
                                    
                                </div>
                                <div class="row mt-2" >
                                    <div class="col-md-6">
                                        <label for="" class="small">List of Service</label>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="#" data-toggle="modal" data-target="#addService" class="add-button" style="display:none;">
                                            +Add Service
                                        </a>
                                    </div>                                    
                                </div>
                                <div class="overflow-auto my-2" style="max-height: 150px;">
                                        <div id="list-service" class="list-group list-group-flush">

                                        </div>
                                </div>
                                <div class="row mb-2 row-button" style="display: none;">
                                        <div class="col">
                                            <a href="#" class="btn btn-sm btn-outline-primary btn-block btn-edit"><span class="mdi mdi-square-edit-outline"> Edit</a>
                                        </div>
                                        <div class="col">
                                            <form action="/asset/changestatus" method="post">
                                                @csrf
                                                @method('put')                                                
                                                <input type="hidden" value="1" name="isActive">
                                                <input type="hidden" class="clicked" name="aircraft_id">
                                                <button class="btn btn-sm btn-outline-success btn-block btn-status" data-status="Activate">Activate</button>
                                            </form>                                            
                                        </div>
                                        <div class="col">
                                            <form action="/asset/delete" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="hidden" class="clicked" name="aircraft_id">
                                                <button class="btn btn-sm btn-outline-danger btn-block btn-delete" data-button="Aircraft">Delete</button>
                                            </form>   
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection