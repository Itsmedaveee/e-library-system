@extends('layouts.app')
@section('content')

{{-- 	<div class="container">
			<h2>Users</h2>
			<div class="col-md-4">
				<div class="panel panel-default">
				<div class="panel-heading">Panel Heading</div>
				<div class="panel-body"> --}}
	<div class="container">
			<h2>Departments</h2>
			<div class="col-md-4">
				<div class="panel panel-default">
				<div class="panel-heading">Add Department</div>
				<div class="panel-body">
						<form method="POST" action="/departments">
							@csrf
							<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
								<label>Name</label>
								<input class="form-control" name="name">
								<span class="help-block	">	                          
								@if ($errors->has('name'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('name') }}</strong>
								    </span>
								@endif
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>

				<div class="col-md-8">
				<div class="panel panel-default">
				<div class="panel-heading">Department lists</div>
				<div class="panel-body">
								
						<table class="table table-bordered table-hover" id="myTable">
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
							{{-- 			<form method="POST" action="/departments/{{ $department->id }}" style="display:inline-block;">
											@csrf
											{{ method_field('DELETE') }}
											<button type="submit" class="btn btn-danger btn-xs">Delete </button>
										</form> --}}

										 <a href="/departments/{{ $department->id }}/remove" class="btn btn-danger btn btn-xs m-b-10 button delete-confirm">  Delete</a>

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

@push ('scripts')
<script type="text/javascript">
   $(document).ready( function () {
       $('#myTable').DataTable();
   });
</script>


<script>
   $('.delete-confirm').on('click', function (event) {
     event.preventDefault();
     const url = $(this).attr('href');
     swal({
         title: 'Are you sure?',
         text: 'You want to delete this file?',
         icon: 'warning',
         buttons: ["Cancel", "Yes!"],
     }).then(function(value) {
         if (value) {
             window.location.href = url;
         }
     });
   });
</script>


@endpush