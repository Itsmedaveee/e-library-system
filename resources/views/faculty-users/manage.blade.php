@extends('layouts.master')
@section('content')
<div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="/faculty-users" class="">Faculties</a></li>
      <li class="breadcrumb-item  active">Manage Faculty</li>
   </ol>
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Manage Faculty <small></small></h1>
   <div class="row">
			<div class="col-md-7">
				<div class="panel panel-default">
				<div class="panel-heading">Faculty Show</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>ID No: {{ $user->faculty->id_number ?? null }}</th>
								<th>Name: {{ $user->faculty->name ?? null }}</th>
								<th>Email: {{ $user->email ?? null }}</th>
							</tr>
							<tr>
								<th>Department: {{ $user->faculty->department->name?? null  }}</th>
								<th colspan="2">Gender: {{ $user->faculty->gender ?? null }}</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
<div class="col-md-4">
				<div class="panel panel-default">
				<div class="panel-heading">Settings</div>
				<div class="panel-body">
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