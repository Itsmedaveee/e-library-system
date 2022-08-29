@extends('layouts.master')
@section('content')

<div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="/departments" class="">Departments</a></li>
      <li class="breadcrumb-item  active">Show Department</li>
   </ol>
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Show Department <small></small></h1>
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Show Department</div>
				<div class="panel-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Name</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>{{ $department->name }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
				<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Courses Lists</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Code</th>
								<th>Name</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($department->courses as $course)
							<tr>
								<td>{{ $course->code }}</td>
								<td>{{ $course->name }}</td> 
							</tr>
							@endforeach
						</tbody>
					</table>
					</div>
				</div>
			</div>

		 






@endsection