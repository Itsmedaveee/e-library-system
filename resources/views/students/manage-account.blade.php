@extends('layouts.master')
@section('content')

<div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="javascript:;" class="">Home</a></li>
      <li class="breadcrumb-item  active">Settings</li>
   </ol>
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Settings <small></small></h1>
   <div class="row">
         <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading">Settings</div>
            <div class="panel-body">
               <form method="POST" action="/student/{{ $student->id }}/manage" id="myTable">
                     @csrf
                     {{ method_field('PATCH') }}


             <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" hidden>
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $student->name }}">
                        <span class="help-block ">                           
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong style="color:red;">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                     </div>   
                     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" hidden>
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $student->email }}">
                        <span class="help-block ">                           
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong style="color:red;">{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                     </div> 
 
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $student->name }}">
                        <span class="help-block ">                           
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong style="color:red;">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                     </div>   
                     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $student->email }}">
                        <span class="help-block ">                           
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong style="color:red;">{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                     </div>

                     <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" value="{{ $student->user->username }}">
                        <span class="help-block ">                           
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong style="color:red;">{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                     </div> 
                     <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label>  Password</label>
                        <input type="password" class="form-control" name="password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong style="color:red;">{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                     </div>               
 

                     <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label>  Password Confirmed</label>
                              <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" autocomplete="current-password">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong style="color:red;">{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                     </div>
 

                     {{-- <div class="form-group{{ $errors->has('new_confirm_password') ? ' has-error' : '' }}">
                        <label>New Confirm Password</label>
                              <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                        @if ($errors->has('new_confirm_password'))
                            <span class="help-block">
                                <strong style="color:red;">{{ $errors->first('new_confirm_password') }}</strong>
                            </span>
                        @endif
                     </div> --}}



                     <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                     </div>
                  </form>

            
         </div>
      </div>
   </div>
 
            </div>
         </div>
      </div>
   </div>
</div>







@endsection