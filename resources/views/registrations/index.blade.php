@extends('layouts.login')
@section('content')
<!-- Log In page -->
    <div class="container">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box" style="background:#000;">
                                <div class="text-center p-3">
                                    <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18">Registration Form</h4>   
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
                                                    <input type="text" class="form-control" name="id_number" placeholder="Enter ID No.">
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
                                                <label for="password">Fullname</label>                                            
                                                <div class="input-group {{ $errors->has('password') ? 'has-error' : '' }}">                                 
                                                    <input type="text" class="form-control" name="name" placeholder="Enter Fullname">
                                                </div>
                                                 @if ($errors->has('password'))
                                                        <span class="help-block">
                                                        <strong style="color: red;">{{ $errors->first('password') }}</strong>
                                                        </span>
                                                 @endif                                 
                                            </div><!--end form-group--> 
                                        </div>
                                              
                                            <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label for="password">Gender</label>                                            
                                                <div class="input-group {{ $errors->has('password') ? 'has-error' : '' }}">                                 
                                                    <select class="form-control" name="gender">
                                                    <option value="" disabled="" selected="">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    </select>
                                                </div>

                                                 @if ($errors->has('password'))
                                                        <span class="help-block">
                                                        <strong style="color: red;">{{ $errors->first('password') }}</strong>
                                                        </span>
                                                 @endif                                 
                                            </div>     
                                            </div>     
                                                 <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label for="year_level">Year Level</label>                                            
                                                <div class="input-group {{ $errors->has('year_level') ? 'has-error' : '' }}">                                 
                                                  <select class="form-control" name="year_level">
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
                                            <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label for="section">Section</label>                                            
                                                <div class="input-group {{ $errors->has('section') ? 'has-error' : '' }}">                                 
                                                 <input type="text" class="form-control" name="section" placeholder="Enter Course/Section">
                                                </div>
                                                
                                                 @if ($errors->has('section'))
                                                        <span class="help-block">
                                                        <strong style="color: red;">{{ $errors->first('section') }}</strong>
                                                        </span>
                                                 @endif                                 
                                            </div> 
                                            </div> 
                                            <div class="col-md-6">
                                            <div class="form-group mb-2">
                                            <label for="department">Department</label>                                            
                                            <div class="input-group {{ $errors->has('department') ? 'has-error' : '' }}">                              
                                                <select class="form-control" name="department">
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
                                            <div class="form-group mb-2">
                                                <label for="password">Password</label>                                            
                                                <div class="input-group {{ $errors->has('password') ? 'has-error' : '' }}">                                  
                                                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                                                </div>
                                                 @if ($errors->has('password'))
                                                        <span class="help-block">
                                                        <strong style="color: red;">{{ $errors->first('password') }}</strong>
                                                        </span>
                                                 @endif                                 
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
                                                   <div class="col-12">
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
                                <span class="text-muted d-none d-sm-inline-block">E-Library Management System </span>                                            
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <!-- End Log In page -->
    
@endsection