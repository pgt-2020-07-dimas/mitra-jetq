@extends('layouts.app')
 
@section('content')
    <div class="container-fluid">
        <form action="/asset/update" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
            <div class="row">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="hidden" value="{{ $data['aircraft_id'] }}" name="aircraft_id">
                                <label for="">Aircraft Name</label>
                                <input value="{{ old('aircraft_name', $data['aircraft_name']) }}" class="form-control @error('aircraft_name') is-invalid @enderror" type="text" id="aircraft_name" name="aircraft_name" placeholder="e.g. HAWKER 800XP">
                                @error('aircraft_name') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>                        
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Aircraft Base (IATA Code)</label>
                                <input value="{{ old('aircraft_base', $data['aircraft_base']) }}" class="form-control @error('aircraft_base') is-invalid @enderror" type="text" id="aircraft_base" name="aircraft_base" placeholder="e.g. HLP">
                                @error('aircraft_base') <div class="invalid-feedback">{{ $message }}</div>@enderror
                                <div class="base-list" id="base-list"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Registration Number</label>
                                <input value="{{ old('registration_number', $data['registration_number']) }}" class="form-control @error('registration_number') is-invalid @enderror" id="registration_number" name="registration_number" type="text">
                                @error('registration_number') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>                        
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Manufactured Year</label>
                                <input value="{{ old('manufactured_year', $data['manufactured_year']) }}" class="form-control @error('manufactured_year') is-invalid @enderror" id="manufactured_year" name="manufactured_year" type="number">
                                @error('manufactured_year') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Cost ($USD)</label>
                                <input value="{{ old('aircraft_cost', $data['aircraft_cost']) }}" class="form-control @error('aircraft_cost') is-invalid @enderror" type="number" id="aircraft_cost" name="aircraft_cost">
                                @error('aircraft_cost') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>                        
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Range (nmi)</label>
                                <input value="{{ old('aircraft_range', $data['aircraft_range']) }}" class="form-control @error('aircraft_range') is-invalid @enderror"id="aircraft_range" name="aircraft_range"  type="text">
                                @error('aircraft_range') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Speed (Kn)</label>
                                <input value="{{ old('aircraft_speed', $data['aircraft_speed']) }}" class="form-control @error('aircraft_speed') is-invalid @enderror" type="text" id="aircraft_speed" name="aircraft_speed">
                                @error('aircraft_speed') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>                        
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Takeoff Distance (ft)</label>
                                <input value="{{ old('takeoff_distance', $data['takeoff_distance']) }}" class="form-control @error('takeoff_distance') is-invalid @enderror" type="text" id="takeoff_distance" name="takeoff_distance" placeholder="Min. distance">
                                @error('takeoff_distance') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Landing Distance (ft)</label>
                                <input value="{{ old('landing_distance', $data['landing_distance']) }}" class="form-control @error('landing_distance') is-invalid @enderror" type="text" id="landing_distance" name="landing_distance" placeholder="Min. distance">
                                @error('landing_distance') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>                        
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Cabin Height (ft)</label>
                                <input value="{{ old('cabin_height', $data['cabin_height']) }}" class="form-control @error('cabin_height') is-invalid @enderror" id="cabin_height" name="cabin_height" type="text">
                                @error('cabin_height') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Cabin Width (ft)</label>
                                <input value="{{ old('cabin_width', $data['cabin_width']) }}" class="form-control @error('cabin_width') is-invalid @enderror" id="cabin_width" name="cabin_width" type="text">
                                @error('cabin_width') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>                        
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Cabin Length (ft)</label>
                                <input value="{{ old('cabin_length', $data['cabin_length']) }}" class="form-control @error('cabin_length') is-invalid @enderror" id="cabin_length" name="cabin_length" type="text">
                                @error('cabin_length') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Max Seats</label>
                                <input value="{{ old('max_seats', $data['max_seats']) }}" class="form-control @error('max_seats') is-invalid @enderror" id="max_seats" name="max_seats" type="text">
                                @error('max_seats') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>                        
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Max Lugagge</label>
                                <input value="{{ old('max_luggage', $data['max_luggage']) }}" class="form-control @error('max_luggage') is-invalid @enderror" type="text" id="max_luggage" name="max_luggage">
                                @error('max_luggage') <div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Aircraft Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="main_image" name="main_image">
                                    <label class="custom-file-label" for="main_image">{{$data['main_image']}}</label>
                                    <input type="hidden" id="main_image" name="main_image" value="{{$data['main_image']}}">
                                </div>
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="second_image" name="second_image">
                                    <label class="custom-file-label" for="second_image">{{$data['second_image']}}</label>
                                    <input type="hidden" id="second_image" name="second_image" value="{{$data['second_image']}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="third_image" name="third_image">
                                    <label class="custom-file-label" for="third_image">{{$data['third_image']}}</label>
                                    <input type="hidden" id="third_image" name="third_image" value="{{$data['third_image']}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="fourth_image" name="fourth_image">
                                    <label class="custom-file-label" for="fourth_image">{{$data['fourth_image']}}</label>
                                    <input type="hidden" id="fourth_image" name="fourth_image" value="{{$data['fourth_image']}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="fifth_image" name="fifth_image">
                                    <label class="custom-file-label" for="fifth_image">{{$data['fifth_image']}}</label>
                                    <input type="hidden" id="fifth_image" name="fifth_image" value="{{$data['fifth_image']}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-check">
                                    <input value="1" {{ $data['isMedevac'] == 1 ? 'checked' : '' }} class="form-check-input" type="checkbox" id="isMedevac" name="isMedevac">
                                    
                                    <label class="form-check-label" for="isMedevac">
                                        Medevac
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-check">
                                    <input value="1" {{ $data['isVIP'] == 1 ? 'checked' : '' }} class="form-check-input" type="checkbox" id="isVIP" name="isVIP">
                                    <label class="form-check-label" for="isVIP">
                                        VIP Charter
                                    </label>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" value="{{ $data['isActive']}}" name="isActive">
                        <div class="col-md-12">
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Simpan Data Asset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection