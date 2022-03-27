@extends('layouts.app')
@section('content')

{{-- <div id="content" class="content"> 
				<ol class="breadcrumb float-xl-right">
					<li class="breadcrumb-item"><a href="/home">Home</a></li>
					<li class="breadcrumb-item"><a href="/students">Students</a></li>
				</ol> 
				<h1 class="page-header">Student lists </h1>
			 
				<div class="row">
				<div class="col-md-4">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">Add Student </h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div> --}}
	 <div class="container">
			<h2>Students</h2>
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Add Student</div>
				<div class="panel-body"> 
						<form method="POST" action="/students">
							@csrf
							<div class="col-md-4">
						<div class="form-group{{ $errors->has('id_number') ? ' has-error' : '' }}">
								<label>ID No.</label>
								<input type="text" class="form-control" name="id_number">
								<span class="help-block	">	                          
								@if ($errors->has('id_number'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('id_number') }}</strong>
								    </span>
								@endif
							</div>	
							</div>	
							<div class="col-md-4">
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label>Fullname</label>
							<input type="text" class="form-control" name="name">
							<span class="help-block	">	                          
								@if ($errors->has('name'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('name') }}</strong>
								    </span>
								@endif
						</div>	
						</div>	
						<div class="col-md-4">
								<div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
								<label>Gender</label>
								<select class="form-control" name="gender">
									 <option value="" disabled="" selected="">Select Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
								</select>
								<span class="help-block	">	                          
								@if ($errors->has('gender'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('gender') }}</strong>
								    </span>
								@endif
							</div>
							</div>
							<div class="col-md-4">

							<div class="form-group{{ $errors->has('yea_level') ? ' has-error' : '' }}">
								<label>Year Level</label>
								<select class="form-control" name="year_level">
									 <option value="" disabled="" selected="">Select Grade/Year Level</option>

										<option value="Grade 7">Grade 7</option>
										<option value="Grade 8">Grade 8</option>
										<option value="Grade 9">Grade 9</option>
										<option value="Grade 10">Grade 10</option>
										<option value="Grade 11">Grade 11</option>
										<option value="Grade 12">Grade 12</option>
										<option value="1st Year">1st Year</option>
										<option value="2nd Year">2nd Year</option>
										<option value="3rd Year">3rd Year</option>
										<option value="4th Year">4th Year</option>
										<option value="5th Year">5th Year</option>
								</select>
								<span class="help-block	">	                          
								@if ($errors->has('gender'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('gender') }}</strong>
								    </span>
								@endif
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group{{ $errors->has('section') ? ' has-error' : '' }}">
								<label>Course/Section</label>
								<input type="text" class="form-control" name="section">
								<span class="help-block	">	                          
								@if ($errors->has('section'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('section') }}</strong>
								    </span>
								@endif
							</div>
							</div>
						{{-- 	<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" name="username">
							</div>	 --}}	
								<div class="col-md-4">	
							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<label>Email</label>
								<input type="text" class="form-control" name="email">
								<span class="help-block	">	                          
								@if ($errors->has('email'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('email') }}</strong>
								    </span>
								@endif
							</div>
							</div>

						{{-- 	<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password">
							</div> --}}
								<div class="col-md-4">
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Student list</div>
				<div class="panel-body">
					<div class="panel-body">  
						<table class="table table-bordered table-hover" id="myTable">
							<thead>
								<tr>
									<th>ID No.</th>
									<th>Name</th>
									<th>Options</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($students as $student)
								<tr>
									<td>{{ $student->id_number }}</td>
									<td>{{ $student->name }}</td>
									<td><a href="/students/{{ $student->id }}/edit" class="btn btn-primary btn-xs">Edit</a>
										<a href="/students/{{ $student->id }}" class="btn btn-info btn-xs">Show</a>
										<form method="POST" action="/students/{{ $student->id }}" style="display:inline-block;">
											@csrf
											{{ method_field('PATCH') }}
											<button type="submit" class="btn btn-danger btn-xs">Remove</button>
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>


@endsection


@push ('scripts')
<script type="text/javascript">
   $(document).ready( function () {
       $('#myTable').DataTable();
   });
</script>

@endpush
