@extends('layouts.frontend')
@section('content')
<!-- Log In page -->

<div id="app" class="app">

<div class="register register-with-news-feed">

<div class="news-feed">
<div class="news-image" style="background-image: url('img/lib.png');"></div>
<div class="news-caption">
<h4 class="caption-title">ONLINE LIBRARY MANAGEMENT SYSTEM</h4>

 
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

                                    <h4 class="mt-3 mb-1 font-weight-semibold text-yellow font-18">Welcome! Let's get started!</h4>   
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
                                            <div class="form-group mb-1 row">                        
                                                   <div class="col-12">
                                                    <a href="/registration-form">Register here</a>
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
    </div>
    <!--end container-->
    <!-- End Log In page -->
    
@endsection