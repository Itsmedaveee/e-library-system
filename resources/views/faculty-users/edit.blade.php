@extends('layouts.master')
@section('content')
 <div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="/faculty-users" class="">Faculties</a></li>
      <li class="breadcrumb-item  active">Edit Faculty</li>
   </ol>
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Edit Faculty <small></small></h1>
   <div class="row"> 
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Edit Faculy User</div>
				<div class="panel-body">
					<div class="panel-body">
						<form method="POST" action="/faculty-users/{{ $user->id }}">
							@csrf
							{{ method_field('PATCH') }}
						<div class="form-group">
								<label>ID No.</label>
								<input type="text" class="form-control" name="id_number" value="{{ $user->faculty->id_number }}">
							</div>			

							<div class="form-group">
								<label>Fullname</label>
								<input type="text" class="form-control" name="name" value="{{ $user->faculty->name }}">
							</div>	

							<div class="form-group">
								<label>Department</label>
								<select class="form-control" name="department">
									<option >Select Department</option>
									@foreach ($departments as $departmentId => $department)
										<option value="{{ $departmentId }}" {{ $user->department_id == $departmentId ? 'selected' : '' }}>{{ $department }}</option>
									@endforeach
								</select>
							</div>			

							<div class="form-group">
								<label>Gender</label>
								<select class="form-control" name="gender">
									<option disabled>Select Gender</option>
										<option value="Male"{{ $user->faculty->gender == 'Male' ? 'checked' : '' }}>Male</option>
										<option value="Female"{{ $user->faculty->gender == 'Female' ? 'checked' : '' }}>Female</option>
								</select>
							</div>

							<div class="form-group">
								<label>Email</label>
								<input type="text" class="form-control" name="email" value="{{ $user->email }}">
							</div>

							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" name="username" value="{{ $user->username }}">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password">
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary">Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>


@endsection