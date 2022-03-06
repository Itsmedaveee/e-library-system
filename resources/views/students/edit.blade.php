@extends('layouts.master')
@section('content')

<div id="content" class="content">
				<!-- begin breadcrumb -->
				<ol class="breadcrumb float-xl-right">
					<li class="breadcrumb-item"><a href="/home">Home</a></li>
					<li class="breadcrumb-item"><a href="/students">Students</a></li>
				</ol>
				<!-- end breadcrumb -->
				<!-- begin page-header -->
				<h1 class="page-header">Update Student </h1>
				<!-- end page-header -->
				<!-- begin panel -->
				<div class="row">
				<div class="col-md-12">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">Update Student</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="panel-body">
						<form method="POST" action="/students/{{ $student->id }}">
							@csrf
						<div class="form-group">
								<label>ID No.</label>
								<input type="text" class="form-control" name="id_number" value="{{ $student->id_number }}">
							</div>	
						<div class="form-group">
							<label>Fullname</label>
							<input type="text" class="form-control" name="name" value="{{ $student->name }}">
						</div>	

								<div class="form-group">
								<label>Gender</label>
								<select class="form-control" name="gender">
									<option >Select Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
								</select>
							</div>

							<div class="form-group">
								<label>Year Level</label>
								<select class="form-control" name="year_level">
									<option >Select Year Level</option>
										<option value="1st Year">1st Year</option>
										<option value="2nd Year">2nd Year</option>
										<option value="3rd Year">3rd Year</option>
										<option value="4th Year">4th Year</option>
										<option value="5th Year">5th Year</option>
								</select>
							</div>

							<div class="form-group">
								<label>Section</label>
								<input type="text" class="form-control" name="section" value="{{ $student->section }}">
							</div>
						{{-- 	<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" name="username">
							</div>	 --}}		
							<div class="form-group">
								<label>Email</label>
								<input type="text" class="form-control" name="email" value="{{ $student->email }}">
							</div>

						{{-- 	<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password">
							</div> --}}

							<div class="form-group">
								<button type="submit" class="btn btn-primary">Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>


@endsection