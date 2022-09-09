@extends('layouts.master')
@section('content')
<div id="content" class="content">
   <!-- begin breadcrumb -->
 
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Administrator Show <small></small></h1>
   <div class="row">
 
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Administrator Show</div>
				<div class="panel-body">
					<table class="table table-bordered">
						 <thead>
						 	<tr>
						 		<th>ID</th>
						 		<th>Name</th>
						 		<th>Email</th>
						 		<th>Username</th>
						 		<th>Status</th>
						 	</tr>
						 </thead>
						 <tbody>
						 	<tr>
						 		<td>{{ $user->id }}</td>
						 		<td>{{ $user->name }}</td>
						 		<td>{{ $user->email }}</td>
						 		<td>{{ $user->username }}</td> 
						 		<td>
						 			@if ($user->status == 1) 
						 				<span class="label label-success"> Active</span>
						 			@else 
						 				<span class="label label-danger">Deactivated</span>
						 			@endif
						 		</td>
						 	</tr>
						 </tbody>
					</table>
							<form method="POST" action="/activate-user/{{ $user->id }}" style="display: inline-block;">
						@csrf
						{{ method_field('PATCH') }}
						<div class="form-group">
							 <button type="submit" class="btn btn-primary">Activate Account</button>
						</div>
					</form>					

					<form method="POST" action="/deactivate-user/{{ $user->id }}" style="display: inline-block;">
						@csrf
						{{ method_field('PATCH') }}
						<div class="form-group"> 
							<button type="submit" class="btn btn-danger">Deactivate Account</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

		

 
@endsection