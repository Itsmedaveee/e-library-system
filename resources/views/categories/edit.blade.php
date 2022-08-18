@extends('layouts.master')
@section('content')
 <div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="/categories" class="">Categories</a></li>
      <li class="breadcrumb-item  active">Edit Category</li>
   </ol>
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Edit Category <small></small></h1>
	<div class="row">  
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