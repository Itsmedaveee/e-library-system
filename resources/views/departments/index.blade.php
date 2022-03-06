@extends('layouts.master')
@section('content')



<div id="content" class="content">
				<!-- begin breadcrumb -->
				<ol class="breadcrumb float-xl-right">
					<li class="breadcrumb-item"><a href="/home">Home</a></li>
					<li class="breadcrumb-item"><a href="/departments">Departments</a></li>
				</ol>
				<!-- end breadcrumb -->
				<!-- begin page-header -->
				<h1 class="page-header">Departments</h1>
				<!-- end page-header -->
				<!-- begin panel -->
				<div class="row">
				<div class="col-md-4">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">Add Department</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="panel-body">
						<form method="POST" action="/departments">
							@csrf
							<div class="form-group">
								<label>Name</label>
								<input class="form-control" name="name">
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
						<h4 class="panel-title">Category lists</h4>
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
								<tr>
									<th>Title</th>
									<th>Created At</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($departments as $department)
								<tr>
									<td>{{ $department->name }}</td>
									<td>{{ $department->created_at }}</td>
									<td><a href="/departments/{{ $department->id }}" class="btn btn-info btn-xs">Show details</a>
										<a href="/departments/{{ $department->id }}/edit" class="btn btn-primary btn-xs">Edit</a>
										<form method="POST" action="/departments/{{ $department->id }}" style="display:inline-block;">
											@csrf
											{{ method_field('DELETE') }}
											<button type="submit" class="btn btn-danger btn-xs">Delete </button>
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
	</div>


		</div>
	</div>









@endsection