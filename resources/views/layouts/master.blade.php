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
  {{--   <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/switchery.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/daterangepicker.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-datepicker3.css') }}" rel="stylesheet" />
    <script src="{{ asset('css/sweetalert2/sweetalert2.min.js') }}"></script>
    <link href="{{ asset('css/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.gritter.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/plugins/datatable/DataTables-1.10.18/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" >
     
</head>

<style>
    
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
        <main class="py">
            @yield('content')
        </main>


{{--      <script src="{{ asset('/js/app.js') }}"></script> --}}
    <script src="{{ asset('/js/app.min.js') }}"></script>
    <script src="{{ asset('/js/apple.min.js') }}"></script>
    <script src="{{ asset('/js/theme/default.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('/js/toastr.min.js') }}"></script>
{{--     <script src="{{ asset('/js/select2.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('/js/switchery.min.js') }}"></script>
    <script src="{{ asset('/js/particles.js') }}"></script>
    <script src="{{ asset('/js/stats.js') }}"></script>
    <script src="{{ asset('/js/app-js.js') }}"></script>
    <script src="{{ asset('/js/moment.js') }}"></script>
    <script src="{{ asset('/js/jquery.gritter.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-datetimepicker.min.js') }}"></script> --}}
    @stack ('scripts')


</body>
</html>