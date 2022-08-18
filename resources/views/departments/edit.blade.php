@extends('layouts.master')
@section('content')
<div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="/departments" class="">Departments</a></li>
      <li class="breadcrumb-item  active">Edit Department</li>
   </ol>
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Edit Department <small></small></h1>
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Edit Department</div>
				<div class="panel-body">
						<form method="POST" action="/departments/{{ $department->id }}">
							@csrf
							{{ method_field('PATCH') }}
							<div class="form-group">
								<label>Name</label>
								<input class="form-control" name="name" value="{{ $department->name }}">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>


@endsection