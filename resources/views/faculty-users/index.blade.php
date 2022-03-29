@extends('layouts.app')
@section('content')

{{-- <div id="content" class="content">
				<!-- begin breadcrumb -->
				<ol class="breadcrumb float-xl-right">
					<li class="breadcrumb-item"><a href="/home">Home</a></li>
					<li class="breadcrumb-item"><a href="/faculty-users">Faculties</a></li>
				</ol>
				<!-- end breadcrumb -->
				<!-- begin page-header -->
				<h1 class="page-header">Faculties </h1>
				<!-- end page-header -->
				<!-- begin panel -->
				<div class="row">
				<div class="col-md-4">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">Add Faculty</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="panel-body"> --}}
	<div class="container">
			<h2>Faculty Users</h2>
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Faculy Users</div>
				<div class="panel-body">
						<form method="POST" action="/faculty-users">
							@csrf
						<div class="form-group{{ $errors->has('id_number') ? ' has-error' : '' }}">
								<div class="col-md-4">
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

							<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
								<div class="col-md-4">
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
							<div class="col-md-12">
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
							</div>
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
				<div class="panel-heading">Faculty Lists</div>
				<div class="panel-body">
						<table class="table table-bordered table-hover" id="myTable">
							<thead>
								<th>ID No.</th>
								<th>Name</th>
								<th>Department</th>
								<th>Actions</th>
							</thead>
							<tbody>
								@foreach ($faculties as $user)
								<tr>
									<td>{{ $user->faculty->id_number }}</td>
									<td>{{ $user->name }}</td>
									<td>{{ $user->faculty->department->name ?? null }}</td>
								 
									<td><a href="/faculty-users/{{ $user->id }}/edit" class="btn btn-primary btn-xs">Edit</a>
										<a href="/faculty-users/{{ $user->id }}/show" class="btn btn-warning btn-xs">Show </a>
										<form method="POST" action="/faculty-users/{{ $user->id }}" style="display:inline-block">
												{{ method_field('DELETE') }}
												@csrf
											<button type="sumbit" class="btn btn-danger btn-xs">Delete</button>
										</form>

									</td>
								</tr>
								@endforeach
							</tbody>
						</table>

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