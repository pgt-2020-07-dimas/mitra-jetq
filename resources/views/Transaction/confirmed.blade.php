@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <table class="table table-hover">
                    <thead>
                        <tr scope="col">
                            <th>ID</th>
                            <th>Customer</th>
                            <th>Aircraft</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody> 
                    @if($data <> null)
                        @foreach ($data as $d)
                            <tr class="invoice-row" data-id="{{ $d['invoice_id'] }}" id="{{ $d['invoice_id'] }}">
                                <td scope="row">{{ $d['invoice_id'] }}</td>
                                <td>{{ $d['customer_name'] }}</td>
                                <td>{{ $d['aircraft_data']['aircraft_name'] }} / {{ $d['aircraft_data']['registration_number'] }}</td>
                                <td>
                                    @if ($d['payment_status'] == 1) 
                                        Waiting For Payment
                                    @elseif($d['payment_status'] == 2)
                                        Waiting For Payment Confirmation
                                    @else 
                                        Waiting For Payment Proof
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        @else

                    @endif
                    </tbody>
                </table>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                    <b>Invoice Detail</b>
                    </div>
                    <div class="card-body">
                        <!-- ROW 1 -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h6 class="card-subtitle">Name</h6>
                                <h5 class="card-title invoice-name text-dark font-weight-bold"> - </h5>
                            </div>
                            <div class="col-md-6">
                                <h6 class="card-subtitle">Email</h6>
                                <h5 class="card-title invoice-email text-dark font-weight-bold"> - </h5>
                            </div>
                        </div>
                        <!-- END ROW 1 -->
                        <!-- ROW 2 -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h6 class="card-subtitle">Flight Type</h6>
                                <h5 class="card-title invoice-type text-dark font-weight-bold"> - </h5>
                            </div>
                            <div class="col-md-6">
                                <h6 class="card-subtitle small text-muted">Service Type</h6>
                                <h5 class="card-title invoice-service-type text-dark font-weight-bold"> - </h5>
                            </div>
                        </div>
                        <!-- END ROW 2 -->
                        <!-- ROW 3 -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h6 class="card-subtitle">From</h6>
                                <h5 class="mt-1 card-subtitle invoice-departure-city text-dark font-weight-bold"> - </h5>
                                <h4 class="card-title invoice-departure-iata text-dark font-weight-bold"> - </h4>
                            </div>
                            <div class="col-md-6">
                                <h6 class="card-subtitle">To</h6>
                                <h5 class="mt-1 card-subtitle invoice-arrival-city text-dark font-weight-bold"> - </h5>
                                <h4 class="card-title invoice-arrival-iata text-dark font-weight-bold"> - </h4>
                            </div>
                        </div>
                        <!-- END ROW 3 -->
                        <!-- ROW 4 -->
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <h6 class="card-subtitle">Aircraft Name</h6>
                                <h5 class="card-title invoice-aircraft-name text-dark font-weight-bold"> - </h5>
                            </div>
                            <div class="col-md-4">
                                <h6 class="card-subtitle small text-muted">Aircraft Number</h6>
                                <h5 class="card-title invoice-aircraft-number text-dark font-weight-bold"> - </h5>
                            </div>
                            <div class="col-md-4">
                                <h6 class="card-subtitle small text-muted">Travel Route</h6>
                                <h5 class="card-title invoice-aircraft-route text-dark font-weight-bold"> - </h5>
                            </div>
                        </div>
                        <!-- END ROW 4 -->
                        <!-- ROW 5 -->
                        <div class="row mb-3">
                            <div class="col">
                                <h6 class="card-subtitle">Departure Time</h6>
                                <h5 class="card-title invoice-datetime text-dark font-weight-bold"> - </h5>
                            </div>
                        </div>
                        <!-- END ROW 5 -->
                        <!-- ROW 6 -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h6 class="card-subtitle">Pax</h6>
                                <h5 class="card-title invoice-pax text-dark font-weight-bold"> - </h5>
                            </div>
                            <div class="col-md-6">
                                <h6 class="card-subtitle small text-muted">Est. Flight Duration</h6>
                                <h5 class="card-title invoice-flight-time text-dark font-weight-bold"> - </h5>
                            </div>
                        </div>
                        <!-- END ROW 6 -->
                        <!-- ROW 7 -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h6 class="card-subtitle small text-muted">Flight Price</h6>
                                <h3 class="card-title invoice-flight-price text-dark font-weight-bold"> - </h3>
                            </div>
                        </div>
                        <!-- END ROW 7 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection