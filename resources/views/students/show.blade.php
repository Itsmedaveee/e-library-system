@extends('layouts.master')
@section('content')
<div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="/students" class="">Students</a></li>
      <li class="breadcrumb-item  active">Students Show</li>
   </ol>
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Student Show <small></small></h1>
   <div class="row">
 
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Student Show</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr> 
							{{-- 	<th>ID No: {{ $student->id_number }}</th>
								<th>Name: {{ $student->name }}</th>
								<th></th>
								<th>Department: {{ $student->department->name }}</th>
								<th>Course: {{ $student->course->name }}</th>
								<th>Year Level: {{ $student->year_level }}</th>
								<th>Section: {{ $student->section }}</th>
								<th>Gender: {{ $student->gender }}</th>
								<th>Username: {{ $student->user->username }}</th> --}}
							</tr>
							 <tbody>
							 	<tr>
							 		<td>ID No. {{ $student->id_number }}</td>
							 		<td>Name : {{ $student->name }}</td>
							 		<td>Email: {{ $student->user->email }}</td>
							 	</tr>
							 	<tr>
							 		<td>Department: {{ $student->department->name }}</td>
							 		<td>Course: {{ $student->course->name }}</td>
							 		<td>Year Level: {{ $student->year_level }}</td>
							 	</tr>
							 	<tr>
							 		<td>Section: {{ $student->section }}</td>
							 		<td>Gender: {{ $student->gender }}</td>
							 		<td>Username: {{ $student->user->username }}</td>
							 	</tr>
							 </tbody>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>


 
@endsection