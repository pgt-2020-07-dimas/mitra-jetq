<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" sizes="192x192" href="https://mitra.jet-q.com/assets/img/icon/android-icon-192x192.png">
  <title>{{$page}}</title>

  <!-- Custom fonts for this template-->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- FONT AWESOME -->
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <!-- ICONFY -->
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

  <!-- Custom styles for this template-->
  <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
  
  <!-- Jquery UI -->
  <link href="{{ asset('assets/css/jquery-ui.min.css') }}" rel="stylesheet">

  <!-- CSS Manual-->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  
  <!-- SweetAlert2 CSS-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- DHTMLX SCHEDULER -->
  <script src="https://cdn.dhtmlx.com/scheduler/edge/dhtmlxscheduler.js"></script>
  <link href="https://cdn.dhtmlx.com/scheduler/edge/dhtmlxscheduler.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
        @include('layouts.navbars.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

            <!-- Topbar -->
                @include('layouts.navbars.navs')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{$page}}</h1>
                    
                </div>

                    @yield('content')   

            </div>
                <!-- /.container-fluid -->
              
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
        @include('layouts.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
    <!-- Modal Invoice -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Offer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{config('app.url')}}/transaction/newoffer" method="post">
                @csrf
                @method('put')
                <div class="modal-body">
                    <input class="invoice-id" type="hidden" id="id" name="invoice_id" value="invoice-id">
                    <input type="hidden" id="status" name="status" value="Pay">
                    <div class="form-group">
                        <label for="price" class="col-form-label">New Price ($) :</label>
                        <input type="text" class="form-control invoice-flight-price" id="price" name="price">
                    </div>
                    <div class="form-group">
                        <label for="note" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="note" name="note"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Modal Invoice -->
    <!-- Modal Logout-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="/logout" method="post">@csrf<button class="btn btn-primary" type="submit">Logout</button></form>
                </div>
            </div>
        </div>    
    </div>
    <!-- End Logout Modal -->    
    <!-- Modal Add Services -->
    <div class="modal fade" id="addService" tabindex="-1" aria-labelledby="addServiceLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addServiceLabel">Add Aircraft Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ config('app.url') }}/asset/addservice" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="text" hidden="" value="" id="aircraft" name="aircraft">
                        <input type="text" hidden="" value="0" id="value" name="value">
                        <div class="form-group">
                            <label for="title" class="col-form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label">Description</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                        <div class="form-group">
                            <label for="price" class="col-form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal Add Services -->
    
    <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>  
  <script src="{{ asset('assets/js/jquery/jquery-ui.min.js') }}"></script>

  <!-- SweetAlert2 Js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>

  
  <!-- Javascript manual-->
  <script src="{{ asset('assets/js/script.js') }}"></script>

  <!-- Moment JS -->
  <script src="{{ asset('assets/js/moment.min.js') }}"></script>

  <!-- Curency -->
  <!-- Currency -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>

  @include('_Partials.flash-swal')

  <script>
    $(".btn-delete").on("click", function(e) {
        e.preventDefault();
        var button = $(this).data('button');
        Swal.fire({
                        title: "Are you sure want to delete "+button+" data?",
                        text: "You won't be able to revert this",
                        type: 'warning',
                        showCancelButton: true,
                        cancelButtonColor: "#3085d6",
                        confirmButtonColor: "#d33",
                        confirmButtonText: "Yes, Delete it",
                    }).then((result) => {
                        if (result.value) {
                            $('.btn-delete').closest('form').submit();
                        }
                    });
    });
  </script>
  <script>
    $(".btn-status").on("click", function(e) {
        e.preventDefault();
        var status = $(this).data('status');
        Swal.fire({
                        title: "Are you sure want to "+status+" asset?",
                        type: 'warning',
                        showCancelButton: true,
                        cancelButtonColor: "#3085d6",
                        confirmButtonColor: "#d33",
                        confirmButtonText: "Yes, "+status+" it",
                    }).then((result) => {
                        if (result.value) {
                            $('.btn-status').closest('form').submit();
                        }
                    });
    });
  </script>
  <script>
                $('.custom-file-input').on('change', function() {
                    let fileName = $(this).val().split('\\').pop();
                    $(this).next('.custom-file-label').addClass("selected").html(fileName);
                });


                // $('.check-input-role').on('click', function() {
                //     const menuId = $(this).data('menu');
                //     const roleId = $(this).data('role');

                //     $.ajax({
                //         url: "https://mitra.jet-q.com/admin/changeaccess",
                //         type: 'post',
                //         data: {
                //             menuId: menuId,
                //             roleId: roleId
                //         },
                //         success: function() {
                //             document.location.href = "https://mitra.jet-q.com/admin/roleaccess/" + roleId;
                //         }
                //     });
                // })
    </script>
  <script>
                $('.aircraft-row').on('click', function() {
                    const id = $(this).data('id')
                    $('tr').removeClass('active-row')
                    $.ajax({
                        url: "{{ config('app.url') . '/asset/detail/' }}" + id,
                        type: "GET",

                        success: function(result) {
                          $('.row-button').show()
                          $('.add-button').show()
                          var data = JSON.parse(result)
                          var aircraft = data['data']['aircraft']
                          var service = data['data']['service']
                          $('#' + aircraft['aircraft_id']).addClass('active-row')
                          $('.aircraft-name').text(aircraft['aircraft_name'])
                          $('.registration-number').text(aircraft['registration_number'])
                          $('.aircraft-base').text(aircraft['aircraft_base'])
                          $('.aircraft-cost').text("USD " + aircraft['aircraft_cost'] + "/hr")
                          $('.aircraft-range').text(aircraft['aircraft_range'] + " nmi")
                          $('.aircraft-speed').text(aircraft['aircraft_speed'] + " Kn")
                          $('.aircraft-year').text(aircraft['manufactured_year'])
                          $('.aircraft-takeoff').text(aircraft['takeoff_distance'] + " ft")
                          $('.aircraft-landing').text(aircraft['landing_distance'] + " ft")
                          $('.aircraft-height').text(aircraft['cabin_height'] + " ft")
                          $('.aircraft-width').text(aircraft['cabin_width'] + " ft")
                          $('.aircraft-length').text(aircraft['cabin_length'] + " ft")
                          $('.aircraft-seats').text(aircraft['max_seats'])
                          $('.aircraft-luggage').text(aircraft['max_luggage'] + " Kg")
                          $('.btn-edit').attr('href', "{{ config('app.url') . '/asset/edit/' }}" + aircraft['aircraft_id']);
                          $('.clicked').val(aircraft['aircraft_id']);                            
                            
                            (aircraft['isMedevac'] == '0' && aircraft['isVIP'] == '1') ?
                            $('.aircraft-service').text("VIP Charter"):
                                (aircraft['isMedevac'] == '1' && aircraft['isVIP'] == '0') ?
                                $('.aircraft-service').text("Medevac") : (aircraft['isMedevac'] == '1' && aircraft['isVIP'] == '1') ?
                                $('.aircraft-service').text("VIP Charter & Medevac") : $('.aircraft-service').text(" - ")

                          $('.aircraft-image').attr('src', "{{ config('app.base_uri') . 'assets/img/aircraft/' }}"  + aircraft['main_image'])
                          $('.image-2').attr('src', "{{ config('app.base_uri') . 'assets/img/aircraft/' }}"  + aircraft['second_image'])
                          $('.image-3').attr('src', "{{ config('app.base_uri') . 'assets/img/aircraft/' }}"  + aircraft['third_image'])
                          $('.image-4').attr('src', "{{ config('app.base_uri') . 'assets/img/aircraft/' }}"  + aircraft['fourth_image'])
                          $('.image-5').attr('src', "{{ config('app.base_uri') . 'assets/img/aircraft/' }}"  + aircraft['fifth_image'])
                        
                        $('#aircraft').attr('value', aircraft['aircraft_id'])
                            $("#list-service").empty()
                            $.each(service, function() {
                                $("#list-service").append('<li class="list-group-item d-flex justify-content-between align-items-center">' + this.service_title + '<span><a href="{{ config("app.url")}}/asset/deleteservice/' + this.service_id + '"  class="badge badge-danger badge-pill btn-delete" data-button="Service">Delete<a></span></li>');
                            })

                        },error: function(result) {
                            console.log("error")
                            console.log(result)
                        }
                    })
                });
  </script>
  <script>
            $('.invoice-row').on('click', function() {
                const id = $(this).data('id')
                $('tr').removeClass('active-row')
                $.ajax({
                    url: "{{ config('app.url') }}/transaction/detail/" + id,
                    type: "GET",

                    success: function(result) {

                        var data = JSON.parse(result)
                        var data = data['data']
                        $('#' + data['invoice_id']).addClass('active-row')
                        $('.invoice-name').text(data['customer_name'])
                        $('.invoice-email').text(data['customer_email'])
                        $('.invoice-type').text(data['flight_type'])
                        
                        var flightList = data['flight_list'][0]
                        $('.invoice-departure-iata').text(flightList['departure']['airport_iata'])
                        $('.invoice-arrival-iata').text(flightList['arrival']['airport_iata'])
                        $('.invoice-departure-city').text(flightList['departure']['airport_city'] + ' - ' + flightList['departure']['airport_state'])
                        $('.invoice-arrival-city').text(flightList['arrival']['airport_city'] + ' - ' + flightList['arrival']['airport_state'])

                        $('.invoice-aircraft-name').text(data['aircraft_data']['aircraft_name'])
                        $('.invoice-aircraft-number').text(data['aircraft_data']['registration_number'])
                        $('.invoice-aircraft-route').text(data['flight_route'])
                        const date = new Date(data['date_time_departure'])
                        const now = Date.now()
                        var newDate = moment(date).format('dddd D MMMM YYYY, h:mm a')
                        $('.invoice-datetime').text(newDate + ' GMT +' + flightList['departure']['airport_timezone'])
                        $('.invoice-pax').text(data['pax'])
                        $('.invoice-flight-time').text(time(data['total_time']))
                        $('.invoice-service-type').text(data['service_type'])
                        $('.invoice-flight-price').text(numeral(data['total_price']).format('$ 0,0'))

                        $('.clicked').val(data['invoice_id'])
                        $('.btn-confirm-payment').attr('href', "https://mitra.jet-q.com/transaction/status/" + data['invoice_id'] + '/' + 'Pay' + '/' + '4')
                        $('.btn-reject').attr('href', "https://mitra.jet-q.com/transaction/status/" + data['invoice_id'] + '/' + 'Cancel' + '/' + '0')
                        $('.btn-complete').attr('href', "https://mitra.jet-q.com/transaction/status/" + data['invoice_id'] + '/' + 'Complete' + '/' + '4')

                        $('#price').attr('value', data['total_price'])
                        $('#id').attr('value', data['invoice_id'])
                        // $('.btn-complete').attr('href', "https://mitra.jet-q.com/transaction/status/" + data['invoice_id'] + '/' + 'New Offer' + '/' + '2')


                        $('.row-button').show()
                        if (data['payment_status'] == '2' || data['payment_status'] == '3') {
                            $('.btn-confirm-payment').show()
                        } else {
                            $('.btn-confirm-payment').hide()
                        }
                        if (now >= date) {
                            $('.btn-complete').show()
                        } else {
                            $('.btn-complete').hide()
                        }

                    },
                    error: function(result) {
                        console.log("error")
                        console.log(result)
                    }
                })
            });



            function time(x) {
                var hour = Math.floor(x)
                var minute = Math.floor(60 * (x - hour))
                return `${hour}h${minute}`;
            }
    </script>

  <script>
                $(document).ready(function() {
                    $("#aircraft_base").autocomplete({
                        // source: "{{ config('app.url') }}/asset/baselist"
                        source: function( request, response ) {
                          $.ajax({
                              type:"GET",
                              url : '{{ config("app.url") }}/asset/baselist?term='+$("#aircraft_base").val(),
                              dataType: "json",
                              success: function( list ) {
                                        response(list);
                              }, error: function () {
                                console.log('error')
                              }
                          });
          },

                    });
                });
    </script>
  
</body>

</html>
