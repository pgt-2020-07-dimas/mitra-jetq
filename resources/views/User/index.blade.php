@extends('layouts.app')

@section('content') 
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="card border-left-primary">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="https://mitra.jet-q.com/assets/img/profile/profile_pict_elang_lintas.png" alt="company-profile" class="card-image img-fluid">
                            </div>
                            <div class="col-md-8">
                                <h5>{{ $data['name'] }}</h5>
                                <p class="card-text">
                                    {{ $data['email'] }} 
                                </p>
                                <p class="card-text">
                                Member since {{ date('d F Y', $data['date_created'])}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection