@extends('layouts.master')
@section('content')
 <div id="content" class="content"> 
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="/home" class="">Home</a></li>
      <li class="breadcrumb-item  active">Categories</li>
   </ol> 
   <h1 class="page-header">Categories <small></small></h1>
   <div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
				<div class="panel-heading">Add Category</div>
				<div class="panel-body">
						<form method="POST" action="/categories">
							@csrf
							<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
								<label>Title</label>
								<input class="form-control" name="title">
								@if ($errors->has('title'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('title') }}</strong>
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
				<div class="panel-heading"> Category lists</div>
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
								@foreach ($categories as $category)
								<tr>
									<td>{{ $category->title }}</td>
									<td>{{ $category->created_at }}</td>
									<td><a href="/categories/{{ $category->id }}" class="btn btn-warning btn-xs">Show Collections</a>
										<a href="/categories/{{ $category->id }}/edit" class="btn btn-primary btn-xs">Edit</a>
									{{-- 	<form method="POST" action="/categories/{{ $category->id }}" style="display:inline-block;">
											@csrf
											{{ method_field('DELETE') }}
											<button type="submit" class="btn btn-danger btn-xs">Delete </button>
										</form> --}}
											 <a href="/categories/{{ $category->id }}/remove" class="btn btn-danger btn btn-xs  button delete-confirm">  Delete</a>
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