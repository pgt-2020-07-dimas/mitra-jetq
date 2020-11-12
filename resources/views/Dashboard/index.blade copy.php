@extends('layouts.app')

@section('content')
    <div class="row">
        <!-- SUCCESS FLIGHTS M0NTHLY-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Success Flights (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0 Flights</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SUCCESS FLIGHTS ANNUAL-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Success Flights (Annual)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">0 Flights</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- WAITING FOR FLIGHTS ANNUAL-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Waiting For Flights</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">0 Flights</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- PENDING REQUEST-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">PENDING REQUEST</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">0 Requests</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- ROW 2 -->
    <div class="row">
        <!-- TOTAL ASSETS -->
        <div class="col-xl-3 col-md-6 col-xl-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">TOTAL ASSETS</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0 Aircrafts</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ACTIVE ASSETS -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">ACTIVE ASSETS</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">0 Aircrafts</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-plane fa-2x text-gray-300"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- INACTIVE ASSETS-->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">INACTIVE ASSETS</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">0 Aircrafts</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-plane-slash fa-2x text-gray-300"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection