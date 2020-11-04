@if (session()->has('swal_msg'))
    <script>
        notification = @json(session()->pull("swal_msg"));
        swal({
                title: notification.title,
                text: notification.message,
                timer: 2500,
                type : notification.type,
                showConfirmButton: false,                
                })  
       @php 
          session()->forget('swal_msg'); 
       @endphp
    </script>
@endif