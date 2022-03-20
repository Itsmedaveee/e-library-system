<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <title>SRC</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <link href="{{ asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

   <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-paper.css') }}" media="screen">
   <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" media="screen">
   <link rel="stylesheet" href="{{ asset('frontend/css/index.css') }}" media="screen">
   <link rel="stylesheet" href="{{ asset('frontend/css/papers.css') }}" media="screen">
   <link rel="stylesheet" href="{{ asset('frontend/css/wow.js') }}" media="screen">
   <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
   <link rel="stylesheet" href="{{ asset('frontend/css/headers.css') }}" media="screen">
   <link rel="stylesheet" href="{{ asset('frontend/css/mains.css') }}" media="screen">
   <link rel="stylesheet" href="{{ asset('frontend/css/link.css') }}" media="screen"> 
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet" />
       <link href="{{ asset('assets/plugins/datatable/DataTables-1.10.18/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" >

 
</head>
<body>
 @if (optional(auth()->user())->isAdmin())
         @include('layouts._nav')
   @elseif (optional(auth()->user())->isFaculty())
            @include('faculty-dashboard.sidebar.index')   
  @elseif (optional(auth()->user())->isStudent())
            @include('student-dashboard.sidebar.sidebar')
  @endif      
  
    @yield ('content')

  </div>
  </div>
 @if (optional(auth()->user())->isAdmin())
   @auth

   <div id="more-links" style="margin-top: 25%;">
      <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <!--CONTACT-->
                <div class="page-header text-red">
                    <h3><i class="fa fa-envelope fa-fw"></i> CONTACT US</h3>
                    
                </div>
                <address class="text-muted">
                    <span class="fa-stack fa-lg text-primary">
                        <i class="fa fa-square fa-stack-2x text-red"></i>
                        <i class="fa fa-map-marker fa-stack-1x" style="color:#333333;"></i>
                    </span> &nbsp; Santa Rita Pampanga
                    <span class="clearfix"></span>
                    <span class="fa-stack fa-lg text-primary">
                        <i class="fa fa-square fa-stack-2x text-red"></i>
                        <i class="fa fa-phone fa-stack-1x" style="color:#333333;"></i>
                    </span> &nbsp;  (045) 900-5007
                    <span class="clearfix"></span>
                    <span class="fa-stack fa-lg text-primary">
                        <i class="fa fa-square fa-stack-2x text-red"></i>
                        <i class="fa fa-at fa-stack-1x" style="color:#333333;"></i>
                    </span> &nbsp; <a href="mailto:officeofthepresident@bulsu.edu.ph" class="footer-links">src.edu.ph</a>
                </address>
            </div>
                <!--QUICK LINKS-->
            <div class="col-md-4 col-xs-12">
                <div class="page-header text-red">
                    <h3><i class="fa fa-external-link fa-fw"></i> QUICK LINKS</h3>
                </div>
               
                <ul class="list-unstyled quick-links col-xs-6">
                    <li><a class="footer-links" href="/home">HOME</a></li>
                    <li><a class="footer-links" href="/users">USERS</a></li>
                    <li><a class="footer-links" href="/faculty-users">FACULTIES</a></li>
                    <li><a class="footer-links" href="/students">STUDENTS</a></li>
                    
                </ul>
                <ul class="list-unstyled quick-links col-xs-6">
                   
                    <li><a class="footer-links" href="/departments">DEPARTMENTS</a></li>
                    <li><a class="footer-links" href="/categories">CATEGORIES</a></li>
                    <li><a class="footer-links" href="/books">BOOK</a></li>
                    <li><a class="footer-links" href="/collections">COLLECTIONS</a></li>
                   
                </ul>
            </div>
{{-- 
            <div class="col-md-4 col-xs-12">
                <!--ACADEMICS-->
                <div class="page-header text-red">
                    <h3><i class="fa fa-graduation-cap fa-fw"></i> FACULTIES</h3>
                </div>

                <ul class="list-unstyled quick-links col-xs-6">
                   <li><a class="footer-links" href="/administration">STUDENTS</a></li>
                
                    
                </ul>
                <ul class="list-unstyled quick-links col-xs-6">
                 <li><a class="footer-links" href="/academics">CATEGORIES</a></li>             
                </ul>
            </div> --}}
        </div>
      </div>
   </div>
   @endauth
@endif
 {{--  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> --}}
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