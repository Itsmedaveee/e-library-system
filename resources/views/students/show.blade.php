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
								<th>ID No: {{ $student->id_number }}</th>
								<th>Name: {{ $student->name }}</th>
								<th>Email: {{ $student->user->email }}</th>
								<th>Department: {{ $student->department->name }}</th>
								<th>Course: {{ $student->course->name }}</th>
								<th>Year Level: {{ $student->year_level }}</th>
								<th>Section: {{ $student->section }}</th>
								<th>Gender: {{ $student->gender }}</th>
								<th>Username: {{ $student->user->username }}</th>
							</tr>
							 
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>


 
@endsection