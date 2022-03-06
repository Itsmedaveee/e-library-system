@extends('layouts.master')
@section('content')

<div id="content" class="content">
				<!-- begin breadcrumb -->
				<ol class="breadcrumb float-xl-right">
					<li class="breadcrumb-item"><a href="/home">Home</a></li>
					<li class="breadcrumb-item"><a href="/categories">Categories</a></li>
				</ol>
				<!-- end breadcrumb -->
				<!-- begin page-header -->
				<h1 class="page-header">Categories</h1>
				<!-- end page-header -->
				<!-- begin panel -->
				<div class="row">
				<div class="col-md-4">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">Add Category</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="panel-body">
						<form method="POST" action="/categories">
							@csrf
							<div class="form-group">
								<label>Title</label>
								<input class="form-control" name="title">
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
								@foreach ($categories as $category)
								<tr>
									<td>{{ $category->title }}</td>
									<td>{{ $category->created_at }}</td>
									<td><a href="/categories/{{ $category->id }}" class="btn btn-info btn-xs">Show details</a>
										<a href="/categories/{{ $category->id }}/edit" class="btn btn-primary btn-xs">Edit</a>
										<form method="POST" action="/categories/{{ $category->id }}" style="display:inline-block;">
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