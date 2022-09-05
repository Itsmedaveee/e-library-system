<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ asset('default/vendor.css') }}" rel="stylesheet" />
	<link href="{{ asset('default/app.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/toastr.css') }}" rel="stylesheet" />
      <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
        .container{
  padding-top:50px;
  margin: auto;
}
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
    </style>
</head>
<body>

	@yield ('content')


	


    <script src="{{ asset('/js/toastr.min.js') }}"></script>
        <script src="{{ asset('/js/app.min.js') }}"></script>
     <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
    });
    </script>

    @stack ('scripts')



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