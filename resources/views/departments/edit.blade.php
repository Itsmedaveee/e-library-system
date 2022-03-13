@extends('layouts.app')
@section('content')
<div class="container">
			<h2>Edit Department</h2>
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