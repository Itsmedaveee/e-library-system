@extends('layouts.master')
@section('content')
<div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="/pending-students" class="">Pending Students</a></li>
      <li class="breadcrumb-item  active">Manage Student </li>
   </ol>
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Manage Student  <small></small></h1>
      	<div class="form-group">
   		<form method="POST" action="/student/manage/{{ $student->id }}/approved" style="display: inline-block;">
			@csrf
			{{ method_field('PATCH') }}
			<div class="form-group">
				 <button type="submit" class="btn btn-primary">Approved</button>
			</div>
		</form>		
		<form method="POST" action="/student/manage/{{ $student->id }}/declined" style="display: inline-block;">
			@csrf
			{{ method_field('DELETE') }}
			<div class="form-group">
				 <button type="submit" class="btn btn-danger">Declined</button>
			</div>
		</form>			 
   	</div>
   <div class="row">  

			<div class="col-md-12">
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
		{{-- <div class="col-md-4">
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
		</div> --}}
	</div>









@endsection