@extends('layouts.frontend')
@section('content')
<!-- Log In page -->

<div id="app" class="app">

<div class="register register-with-news-feed">

<div class="news-feed">
<div class="news-image" style="background-image: url('img/lib.png');"></div>
<div class="news-caption">
<h4 class="caption-title">ONLINE LIBRARY MANAGEMENT SYSTEM</h4>

<p>

</p>
</div>
</div>

<div class="register-container" style="width: 700px;"> 
<div>  
        <div class="row vh-1 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box" style="background: #007bff;">
                                <div class="text-center p-3">
                                         <img src="{{ asset('img/src.png') }}" height="70" alt="logo" class="auth-logo">
                                    <h4 class="mt-3 mb-1 font-weight-semibold text-yellow font-18" >Registration Form</h4>   
                                </div>
                            </div>
                            <div class="card-body p-0">
                                 <!-- Tab panes -->
                                <div class="tab-content">

                                    <div class="tab-pane active p-3" id="LogIn_Tab" role="tabpanel">                     
                                          <form method="POST" action="/students">
                                             @csrf
                                             <div class="row">
                                         <div class="col-md-6">
                                            <div class="form-group mb-2 {{ $errors->has('id_number') ? 'has-error' : '' }}">
                                                <label for="id_number">ID No.</label>
                                                <div class="input-group">                                                      
                                                    <input type="text" class="form-control" name="id_number" placeholder="E.g 19-xxxxxxx">
                                                 </div>       
                                                     @if ($errors->has('id_number'))
                                                        <span class="help-block">
                                                        <strong style="color: red;">{{ $errors->first('id_number') }}</strong>
                                                        </span>
                                                    @endif                             
                                                </div> 
                                            </div><!--end form-group--> 
                                         <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label for="name">Fullname</label>                                     
                                                <div class="input-group {{ $errors->has('name') ? 'has-error' : '' }}"> 
                                                    <input type="text" class="form-control" name="name" placeholder="Surname, Firstname, MI">
                                                </div>
                                                 @if ($errors->has('name'))
                                                        <span class="help-block">
                                                        <strong style="color: red;">{{ $errors->first('name') }}</strong>
                                                        </span>
                                                 @endif                                 
                                            </div><!--end form-group--> 
                                        </div>
                                              
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label for="gender">Gender</label>                                            
                                                <div class="input-group {{ $errors->has('gender') ? 'has-error' : '' }}">         
                                                    <select class="form-control" name="gender">
                                                    <option value="" disabled="" selected="">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                                 @if ($errors->has('gender'))
                                                        <span class="help-block">
                                                        <strong style="color: red;">{{ $errors->first('gender') }}</strong>
                                                        </span>
                                                 @endif                                 
                                            </div>     
                                            </div>     
                                             <div class="col-md-6">
                                            <div class="form-group mb-2">
                                            <label for="department">Department</label>            
                                            <div class="input-group {{ $errors->has('department') ? 'has-error' : '' }}"> 
                                                <select class="form-control" name="department" id="department">
                                                    <option value="" disabled="" selected="">Select Department</option>
                                                    @foreach ($departments as $departmentId => $department)
                                                        <option value="{{ $departmentId }}">{{ $department }}</option>
                                                    @endforeach
                                                </select>
                                            </div> 
                                             @if ($errors->has('department'))
                                                    <span class="help-block">
                                                    <strong style="color: red;">{{ $errors->first('department') }}</strong>
                                                    </span>
                                             @endif                                 
                                            </div> 
                                            </div>  


                                           <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label for="course">Course</label>                      
                                                <div class="input-group {{ $errors->has('course') ? 'has-error' : '' }}">           
                                                 <select class="form-control" name="course" id="course">
                                                    <option value="" disabled="" selected="">Select Course</option>
                                                   
                                                </select>
                                                </div> 
                                                 @if ($errors->has('course'))
                                                        <span class="help-block">
                                                        <strong style="color: red;">{{ $errors->first('course') }}</strong>
                                                        </span>
                                                 @endif                                 
                                            </div> 
                                            </div> 

                                          <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label for="year_level">Year Level</label>                                 
                                                <div class="input-group {{ $errors->has('year_level') ? 'has-error' : '' }}">    <select class="form-control" name="year_level">
                                                         <option value="" disabled="" selected="">Select Grade/Year Level</option> 
                                                            <option value="Grade 1">Grade 1</option>
                                                            <option value="Grade 2">Grade 2</option>
                                                            <option value="Grade 3">Grade 3</option>
                                                            <option value="Grade 4">Grade 4</option>
                                                            <option value="Grade 5">Grade 5</option>
                                                            <option value="Grade 6">Grade 6</option>
                                                            <option value="Grade 7">Grade 7</option>
                                                            <option value="Grade 8">Grade 8</option>
                                                            <option value="Grade 9">Grade 9</option>
                                                            <option value="Grade 10">Grade 10</option>
                                                            <option value="Grade 11">Grade 11</option>
                                                            <option value="Grade 12">Grade 12</option>
                                                            <option value="1st Year">1st Year</option>
                                                            <option value="2nd Year">2nd Year</option>
                                                            <option value="3rd Year">3rd Year</option>
                                                            <option value="4th Year">4th Year</option>
                                                            <option value="5th Year">5th Year</option>
                                                    </select>
                                                </div>
                                               
                                                 @if ($errors->has('year_level'))
                                                        <span class="help-block">
                                                        <strong style="color: red;">{{ $errors->first('year_level') }}</strong>
                                                        </span>
                                                 @endif                                 
                                            </div>    
                                            </div>    

                                           

                                            <div class="col-md-12">
                                            <div class="form-group mb-2">
                                                <label for="section">Section</label>                      
                                                <div class="input-group {{ $errors->has('section') ? 'has-error' : '' }}">                        
                                                 <input type="text" class="form-control" name="section" placeholder="Enter Section">
                                                </div> 
                                                 @if ($errors->has('section'))
                                                        <span class="help-block">
                                                        <strong style="color: red;">{{ $errors->first('section') }}</strong>
                                                        </span>
                                                 @endif                                 
                                            </div> 
                                            </div> 
                                           
                                         <div class="col-md-12">  
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label>Email</label>
                                                <input type="text" class="form-control" name="email">
                                                <span class="help-block ">                            
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong style="color:red;">{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            </div>

                                            <div class="col-md-6">
                                              <div class="form-group mb-2 {{ $errors->has('username') ? 'has-error' : '' }}">
                                                <label for="username">Username</label>
                                                <div class="input-group">                                                                  
                                                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                                                 </div>       
                                                     @if ($errors->has('username'))
                                                        <span class="help-block">
                                                        <strong style="color: red;">{{ $errors->first('username') }}</strong>
                                                        </span>
                                                    @endif                             
                                            </div>
                                            </div><!--end form-group--> 
                                        
                                        <div class="col-md-6">    
                                       <div class="form-group">
                                         <label class="">Password</label>
                                         <div class="col-md-12">
                                            <input id="password-field" type="password" class="form-control" name="password" >
                                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                         </div>
                                      </div>

                                            <div class="form-group row my-3">
                                                <div class="col-sm-6">
                                                    <div class="custom-control custom-switch switch-success">
                                           {{--              <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                                        <label class="custom-control-label text-muted" for="customSwitchSuccess">Remember me</label> --}}
                                                    </div>
                                                </div><!--end col--> 
                                                <div class="col-sm-6 text-right">                          
                                                </div><!--end col--> 
                                            </div><!--end form-group-->  
                                            </div><!--end form-group-->  
                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary btn-block waves-effect waves-light" type="button">Submit </button>
                                                </div><!--end col--> 
                                            </div>  
                                            
                                        </form><!--end form-->

                                        <div class="m-3 text-center text-muted">
                                            <div class="form-group mb-1 row">                        
                                                   <div class="col-11">
                                                    <a href="{{ route('login') }}">Log In here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="account-social">
                                        </div>
                                      
                                    </div>
                                </div>
                            </div><!--end card-body-->
                            <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block"> Santa Rita College of Pampanga</span>  
                                    <span class="text-muted d-none d-sm-inline-block"> San Jose, Santa Rita, Pampanga</span>  <br>
                                   <span class="text-muted d-none d-sm-inline-block">Contact Us: srclibrary@gmail.com</span>                                        
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <!-- End Log In page -->
    
@push ('scripts')
<script type="text/javascript">
        $("select[name='department']").change(function () {
            let department = $(this).val();

            $.ajax({
                url: "{!! url('/select-course') !!}",
                method: 'GET',
                data: { department: department },
                success: function(data) {
                    $("select[name='course']").html('');
                    // $("select[name='program']").html('');
                     $("select[name='course']").html(data.options);
                    // $("select[name='program']").html(data.options);
                    console.log(data)
                }
            }); 
        });


 
    </script>


  <script>
$(".toggle-password").click(function() {
 
  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});    
</script>

  
@endpush
    
@endsection
