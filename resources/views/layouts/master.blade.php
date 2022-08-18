 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>E-Librarian</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
 <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
{{--     <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet" /> --}}
{{--     <link href="{{ asset('css/vendor.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/red.min.css') }}" rel="stylesheet" /> --}}
    <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/switchery.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/daterangepicker.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-datepicker3.css') }}" rel="stylesheet" />
    <script src="{{ asset('css/sweetalert2/sweetalert2.min.js') }}"></script>
    <link href="{{ asset('css/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.gritter.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.tagit.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatable/DataTables-1.10.18/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" >
     
</head>

  <style type="text/css">
      
      .h-30px {

        height: 30px!important;
      }
      .rounded {
        border-radius: 4px!important;
      }
  </style>
   <style>
 .swal-icon--warning {
    border-color: #f59c1a;
}
.swal-icon--warning__body, .swal-icon--warning__dot {
    position: absolute;
    left: 50%;
    background-color: #f8bb86;
}
.swal-icon--warning__dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    margin-left: -4px;
    bottom: -11px;
}
.swal-icon--warning__body {
    width: 5px;
    height: 47px;
    top: 10px;
    border-radius: 2px;
    margin-left: -2px;
}
.swal-icon--warning:after {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    margin-left: -3px;
    top: 19px;
}

info:before {
    content: "";
    position: absolute;
    left: 50%;
    background-color: #c9dae1;
}

.swal-icon {
    width: 80px;
    height: 80px;
    border-width: 4px;
    border-style: solid;
    border-radius: 50%;
    padding: 0;
    position: relative;
    box-sizing: content-box;
    margin: 20px auto;
}
 </style>
<body>
    

         <!-- begin #page-loader -->
    <div id="page-loader" class="fade show">
        <span class="spinner"></span>
    </div>
    <!-- end #page-loader -->
    <!-- begin #page-container -->
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
        @include('layouts.header')
        @if (auth()->user()->isAdmin())
         @include('layouts.sidebar')
        @endif        
        @if (auth()->user()->isFaculty())
            @include('faculty-dashboard.sidebar.index')
        @endif        
        @if (auth()->user()->isStudent())
            @include('student-dashboard.sidebar.sidebar')
        @endif
        <main class="py">
            @yield('content')
        </main>


{{--      <script src="{{ asset('/js/app.js') }}"></script> --}}
    <script src="{{ asset('/js/app.min.js') }}"></script>
    <script src="{{ asset('/js/apple.min.js') }}"></script>
    <script src="{{ asset('/js/theme/default.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('/js/toastr.min.js') }}"></script> 
    <script src="{{ asset('/js/select2.min.js') }}"></script> 
    <script src="{{ asset('/js/tag-it.min.js') }}"></script> 
    <script src="{{ asset('/js/jquery-migrate.min.js') }}"></script> 
    @stack ('scripts')

       <script src="{{ asset('assets/plugins/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/DataTables-1.10.18/js/dataTables.bootstrap.min.js') }}"></script>


    <script>
   
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
            {{ session()->forget('success') }}
        @endif

        @if(Session::has('info'))
        toastr.info("{{ Session::get('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.warning("{{ Session::get('warning') }}");
        @endif

        @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif
     
    </script>



</body>
</html>