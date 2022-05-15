@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
			<h2>Manage Faculty</h2>
			<div class="col-md-7">
				<div class="panel panel-default">
				<div class="panel-heading">Faculty Show</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>ID No: {{ $user->faculty->id_number }}</th>
								<th>Name: {{ $user->faculty->name }}</th>
								<th>Email: {{ $user->email }}</th>
							</tr>
							<tr>
								<th>Department: {{ $user->faculty->department->name }}</th>
								<th colspan="2">Gender: {{ $user->faculty->gender }}</th>
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