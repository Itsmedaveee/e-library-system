@extends('layouts.master')
@section('content')
<div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="/home" class="">Home</a></li>
      <li class="breadcrumb-item  active">Pending Students</li>
   </ol>
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Pending Students <small></small></h1>
   <div class="row">
 
	{{-- 		<div class="col-md-12">
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

						<div class="col-md-4">
							<div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
								<label>Department</label>
								<select class="form-control" name="department">
							  <option value="" disabled="" selected="">Select Department</option>

									@foreach ($departments as $departmentId => $department)
										<option value="{{ $departmentId }}">{{ $department }}</option>
									@endforeach
								</select>
								<span class="help-block	">	                          
								@if ($errors->has('department'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('department') }}</strong>
								    </span>
								@endif
							</div>			
							</div>	 
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

								<div class="col-md-4">
							<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
								<label>Username</label>
								<input type="text" class="form-control" name="username">
								<span class="help-block	">	                          
								@if ($errors->has('username'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('username') }}</strong>
								    </span>
								@endif
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<label>Password</label>
								<input type="password" class="form-control" name="password">
								<span class="help-block	">	                          
								@if ($errors->has('password'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('password') }}</strong>
								    </span>
								@endif
							</div>
					 
								<div class="col-md-4">
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
							</div>
						</form>
					</div>
				</div>
			</div> --}}

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
									<td>
						{{-- 				<form method="POST" action="/students/{{ $student->id }}" style="display:inline-block;">
											@csrf
											{{ method_field('DELETE') }}
											<button type="submit" class="btn btn-danger btn-xs">Remove</button>
										</form> --}}

										<a href="/students/{{ $student->id }}/manage" class="btn btn-primary btn-xs"> Manage</a>

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

<script>
   $('.delete-confirm').on('click', function (event) {
     event.preventDefault();
     const url = $(this).attr('href');
     swal({
         title: 'Are you sure?',
         text: 'You want to delete this account?',
         icon: 'warning',
         buttons: ["Cancel", "Yes!"],
     }).then(function(value) {
         if (value) {
             window.location.href = url;
         }
     });
   });
</script>


@endpush
