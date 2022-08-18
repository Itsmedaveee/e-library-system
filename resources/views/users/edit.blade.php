@extends('layouts.master')
@section('content')
 <div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="/users" class="">Users</a></li>
      <li class="breadcrumb-item  active">Edit User</li>
   </ol>
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Edit User <small></small></h1>
   	<div class="row"> 
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Edit User</div>
				<div class="panel-body">

						<form method="POST" action="/users/{{ $user->id }}">
							@csrf
							{{ method_field('PATCH') }}
						<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" name="name" value="{{ $user->name }}">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="text" class="form-control" name="email" value="{{ $user->email }}">
							</div>
						   <div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" name="username" value="{{ $user->username }}">
							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password">
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary">Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>








@endsection