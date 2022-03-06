@extends('layouts.master')
@section('content')


<div id="content" class="content">
		
				<!-- end breadcrumb -->
				<!-- begin page-header -->
				<h1 class="page-header">Edit Librarian User </h1>
				<!-- end page-header -->
				<!-- begin panel -->
				<div class="row">
				<div class="col-md-12">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">Edit Librarian User</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="panel-body">
						<form method="POST" action="/librarian-users/{{ $librarianUser->id }}">
							@csrf
							{{ method_field('PATCH') }}
						<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" name="name" value="{{ $librarianUser->name }}">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="text" class="form-control" name="email" value="{{ $librarianUser->email }}">
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