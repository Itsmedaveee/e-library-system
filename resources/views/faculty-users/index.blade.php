@extends('layouts.master')
@section('content')

<div id="content" class="content">
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
					<div class="panel-body">
						<form method="POST" action="/faculty-users">
							@csrf
						<div class="form-group">
								<label>ID No.</label>
								<input type="text" class="form-control" name="id_number">
							</div>			

							<div class="form-group">
								<label>Fullname</label>
								<input type="text" class="form-control" name="name">
							</div>	
							<div class="form-group">
								<label>Department</label>
								<select class="form-control" name="department">
											<option >Select Department</option>
									@foreach ($departments as $departmentId => $department)
										<option value="{{ $departmentId }}">{{ $department }}</option>
									@endforeach
								</select>
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
								<label>Email</label>
								<input type="text" class="form-control" name="email">
							</div>

							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" name="username">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password">
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="col-md-8">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">Faculty lists</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="panel-body">
						<table class="table table-bordered table-hover">
							<thead>
								<th>ID</th>
								<th>ID No.</th>
								<th>Name</th>
								<th>Department</th>
								<th>Gender</th>
								<th>Email</th>
								<th>Username</th>
								<th>Actions</th>
							</thead>
							<tbody>
								@foreach ($faculties as $user)
								<tr>
									<td>{{ $user->id }}</td>
									<td>{{ $user->faculty->id_number }}</td>
									<td>{{ $user->name }}</td>
									<td>{{ $user->faculty->department->name ?? null }}</td>
									<td>{{ $user->faculty->gender }}</td>
									<td>{{ $user->email }}</td>
									<td>{{ $user->username }}</td>
									<td><a href="/faculty-users/{{ $user->id }}/edit" class="btn btn-primary btn-xs">Edit</a>
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