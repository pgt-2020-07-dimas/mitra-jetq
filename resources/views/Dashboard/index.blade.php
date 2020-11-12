@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row my-2">
            <div class="col-md-12">
                <label for="" class="h5 font-weight-bold">Overview</label>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="row">
                    <!-- Card -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
                        <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                            <div class="card-body text-center">
                                <h6 class="card-title font-weight-bold">Requested</h6>
                                <p class="h1 text-center">5</p>
                            </div>
                        </div>
                    </div>
                    <!-- End card -->
                    <!-- Card -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-body text-center">
                                <h6 class="card-title font-weight-bold">Confirmed</h6>
                                <p class="h1 text-center">5</p>
                            </div>
                        </div>
                    </div>
                    <!-- End card -->
                    <!-- Card -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-body text-center">
                                <h6 class="card-title font-weight-bold">Paid</h6>
                                <p class="h1 text-center">5</p>
                            </div>
                        </div>
                    </div>
                    <!-- End card -->
                    <!-- Card -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6">
                        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                            <div class="card-body text-center">
                                <h6 class="card-title font-weight-bold">History</h6>
                                <p class="h1 text-center">5</p>
                            </div>
                        </div>
                    </div>
                    <!-- End card -->
                </div>
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="card  mb-4">
                            <!-- Card Body -->
                            <div class="card-body">
                                <h6 class="card-title font-weight-bold">Most Visited</h6>
                                <br>
                                <div class="chart-pie pb-2"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                    <canvas id="myPieChart" width="300" height="150" class="chartjs-render-monitor" style="display: block; width: 300; height: 150;"></canvas>
                                </div>
                                <div class="mt-4 text-center small">
                                    <span class="mr-2">
                                    <i class="fas fa-circle text-primary"></i> Direct
                                    </span>
                                    <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> Social
                                    </span>
                                    <span class="mr-2">
                                    <i class="fas fa-circle text-info"></i> Referral
                                    </span>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-7" style="height:100%;">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h6 class="card-title font-weight-bold">Monthly Revenue</h6>
                                <br>
                                <h4 class="small font-weight-bold">January <span class="float-right">20%</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">February <span class="float-right">40%</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">March <span class="float-right">60%</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">April <span class="float-right">80%</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">May <span class="float-right">Complete!</span></h4>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                </div>
            </div>
            <div class="col-lg-3 d-none d-lg-block">
                <div class="row">
                    <div class="col" style="height:100%;">
                        <div class="card bg-light mb-3" style="max-width: 18rem;">
                            <div class="card-header">Calendar</div>
                            <div class="card-body">
                                <h5 class="card-title">Here should be calendar</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-12">
                <label for="" class="h5 font-weight-bold">Asset Information</label>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-stripped">
                    <thead class="thead-light">
                        <tr>
                            <th>No.</th>
                            <th>Asset Name</th>
                            <th>Registration No.</th>
                            <th>Location</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Hawker 400XP-1</td>
                            <td>PK-ELX</td>
                            <td>HLP</td>
                            <td>Active</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection