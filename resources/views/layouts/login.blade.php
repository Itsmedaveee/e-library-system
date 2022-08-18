<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/apps.css') }}" rel="stylesheet" type="text/css" />
          <link href="{{ asset('css/toastr.css') }}" rel="stylesheet" />
     <title>LOGIN</title>
</head>
<body style="background:#BDC3C7;">
   @yield ('content')




    <script src="{{ asset('/js/toastr.min.js') }}"></script>
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