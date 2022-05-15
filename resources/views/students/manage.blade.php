@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
			<h2>Manage Student</h2>
			<div class="col-md-7">
				<div class="panel panel-default">
				<div class="panel-heading">Student Show</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>ID No: {{ $student->id_number }}</th>
								<th>Name: {{ $student->name }}</th>
								<th>Email: {{ $student->user->email }}</th>
							</tr>
							<tr>
								<th>Department: {{ $student->department->name }}</th>
								<th>Year Level: {{ $student->year_level }}</th>
								<th>Section/Course: {{ $student->section }}</th>
							</tr>
							<tr>
								<th>Gender: {{ $student->gender }}</th>
								<th colspan="3">Username: {{ $student->user->username }}</th>
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
					<form method="POST" action="/activate-user/{{ $student->user->id }}" style="display: inline-block;">
						@csrf
						{{ method_field('PATCH') }}
						<div class="form-group">
							 <button type="submit" class="btn btn-primary">Activate Account</button>
						</div>
					</form>					

					<form method="POST" action="/deactivate-user/{{ $student->user->id }}" style="display: inline-block;">
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