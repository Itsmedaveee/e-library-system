@extends('layouts.login')
@section('content')
<!-- Log In page -->
    <div class="container">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box" style="background:#0B297F;">
                                <div class="text-center p-3">
                                    <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18">Let's Get Started to Login</h4>   
                                </div>
                            </div>
                            <div class="card-body p-0">
                                 <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active p-3" id="LogIn_Tab" role="tabpanel">                                        
                                          <form method="POST" action="{{ route('login') }}">
                                             @csrf
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
                                            </div><!--end form-group--> 
                
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
                                            </div><!--end form-group--> 
                
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
                
                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary btn-block waves-effect waves-light" type="button">Log In </button>
                                                </div><!--end col--> 
                                            </div> <!--end form-group-->                           
                                        </form><!--end form-->
                                        <div class="m-3 text-center text-muted">
                                        </div>
                                        <div class="account-social">
                                        </div>
                                      
                                    </div>
                                </div>
                            </div><!--end card-body-->
                            <div class="card-body bg-light-alt text-center">
                                <span class="text-muted d-none d-sm-inline-block">E-Library System </span>                                            
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <!-- End Log In page -->
    
@endsection