@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <form action="/user/changepassword" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="current_password" name="current_password">Current Password</label>
                    <input type="password" class="form-control" id="current_password" name="current_password">
                </div>
                <div class="form-group">
                    <label for="new_password1">New Password</label>
                    <input type="password" class="form-control" id="new_password1" name="new_password1">
                </div>
                <div class="form-group">
                    <label for="new_password2">Confirm Password</label>
                    <input type="password" class="form-control" id="new_password2" name="new_password2">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" disabled>Change Password</button>
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
    