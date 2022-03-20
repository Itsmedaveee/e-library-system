@extends('layouts.app')
@section('content') 
<!-- end page-header --> 
   <div class="container">
         <h2>Settings</h2>
         <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading">Settings</div>
            <div class="panel-body">
               <form method="POST" action="/settings" id="myTable">
                     @csrf
                     {{ method_field('PATCH') }}
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}">
                        <span class="help-block ">                           
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong style="color:red;">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                     </div>   
                     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="{{ auth()->user()->email }}">
                        <span class="help-block ">                           
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong style="color:red;">{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                     </div>

                     <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" value="{{ auth()->user()->username }}">
                        <span class="help-block ">                           
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong style="color:red;">{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                     </div>
                     <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong style="color:red;">{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                     </div>

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

 