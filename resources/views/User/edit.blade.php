@extends('layouts.app')

@section('content')
    <div class="row">
            <div class="col-lg-8">
                <form action="{{config('app.url')}}/user" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                @csrf
                @method('put')
                <input type="hidden" value="{{ $data['id'] }}">
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" value="{{ $data['email'] }}" readonly="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $data['name'] }}">
                                        </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Picture</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="https://mitra.jet-q.com/assets/img/profile/profile_pict_elang_lintas.png" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" disabled>Edit</button>
                    </div>
                </div>

                </form>
            </div>
        </div>
        <!-- api belum -->
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>API Belum selesai</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
@endsection