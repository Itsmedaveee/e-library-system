@extends('layouts.app')
@section('content')
 
				<!-- end page-header -->
				<!-- begin panel -->
			{{-- 	<div class="row">
				<div class="col-md-12">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">Edit Category</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="panel-body"> --}}
	<div class="container">
			<h2>Edit Category</h2>
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Edit Category</div>
				<div class="panel-body">
						<form method="POST" action="/categories/{{ $category->id }}">
							@csrf
							{{ method_field('PATCH') }}
							<div class="form-group">
								<label>Title</label>
								<input class="form-control" name="title" value="{{ $category->title }}">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>


@endsection