@extends('layouts.master')
@section('content')
<div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="/home" class="">Home</a></li>
      <li class="breadcrumb-item  active">Books</li>
   </ol>
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Books <small></small></h1>
 
	<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Add Book</div>
				<div class="panel-body">
						<form method="POST" action="/books" enctype="multipart/form-data">
							@csrf
							<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
								<label>Category</label>
								<select class="form-control" name="category">
								 <option value="" disabled="" selected="">Select Category</option>
									@foreach ($categories as $categoryId => $category)
										<option value="{{ $categoryId }}">{{ $category }}</option>
									@endforeach
								</select>
								<span class="help-block	">	                          
								@if ($errors->has('category'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('category') }}</strong>
								    </span>
								@endif
							</div>

						<div class="form-group{{ $errors->has('serial_no') ? ' has-error' : '' }}">
							<label>Serial No</label>
							<select class="multiple-select2 form-control" multiple name="serial_no[]" >
							</select>
							<span class="help-block	">	                          
								@if ($errors->has('serial_no'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('serial_no') }}</strong>
								    </span>
								@endif
						</div>
				<div class="form-group{{ $errors->has('upload_photo') ? ' has-error' : '' }}">
										<label>Upload Photo</label>
										<input class="form-control" type="file" name="upload_photo">
										<span class="help-block	">	                          
											@if ($errors->has('upload_photo'))
											    <span class="help-block">
											        <strong style="color:red;">{{ $errors->first('upload_photo') }}</strong>
											    </span>
											@endif
									</div>

							<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
								<label>Title</label>
								<input type="text" class="form-control" name="title">
								<span class="help-block	">	                          
								@if ($errors->has('title'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('title') }}</strong>
								    </span>
								@endif
							</div> 


							<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
								<label>Overview</label> 
		                        <textarea class="form-control" name="body"></textarea>
		                        <span class="help-block">	                          
								@if ($errors->has('body'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('body') }}</strong>
								    </span>
								@endif
		                    </div>
 

		                    <div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
								<label>Author</label>
								<input type="text" class="form-control" name="author">
								 <span class="help-block">	                          
								@if ($errors->has('author'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('author') }}</strong>
								    </span>
								@endif
							</div>           
							<div class="form-group{{ $errors->has('person_published') ? ' has-error' : '' }}">
								<label>Publisher</label>
								<input type="text" class="form-control" name="person_published">
								 <span class="help-block">	                          
								@if ($errors->has('person_published'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('person_published') }}</strong>
								    </span>
								@endif
							</div>

							<div class="form-group{{ $errors->has('author') ? ' has-error' : '' }}">
								<label>Year of Publication</label>
								<input type="text" class="form-control" name="author">
								 <span class="help-block">	                          
								@if ($errors->has('author'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('author') }}</strong>
								    </span>
								@endif
							</div>   

						{{-- 	<div class="form-group{{ $errors->has('upload_photo') ? ' has-error' : '' }}">
								<label>Upload Photo</label>
								<input type="file" name="upload_photo" class="form-control">
								 <span class="help-block">	                          
								@if ($errors->has('upload_photo'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('upload_photo') }}</strong>
								    </span>
								@endif
							</div>			 --}}				
						{{-- 	<div class="form-group{{ $errors->has('upload_file') ? ' has-error' : '' }}">
								<label>Upload PDF</label>
								<input type="file" name="upload_file" class="form-control">
								 <span class="help-block">	                          
								@if ($errors->has('upload_file'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('upload_file') }}</strong>
								    </span>
								@endif
							</div> --}}
						{{-- 	<div class="form-group{{ $errors->has('published') ? ' has-error' : '' }}">
								<label>Date Published</label>
								<input type="date" name="published" class="form-control">
								 <span class="help-block">	                          
								@if ($errors->has('published'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('published') }}</strong>
								    </span>
								@endif
							</div>	 --}}
							
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			{{-- <div class="col-md-12">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">Book lists</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="panel-body"> --}}
			 <div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading"> Book lists</div>
				<div class="panel-body">
						<table class="table table-bordered table-hover" id="myTable">
							<thead>
								<th>ID</th>
								<th>Category</th>
								<th>Title</th> 
								<th>Stocks</th>
								<th>Status</th>
								<th>Actions</th>
							</thead>
							<tbody>
								@foreach ($books as $book)
								<tr>
									<td>{{ $book->id }}</td>
									<td>{{ $book->category->title ?? null}}</td>
									<td>{{ $book->title }}</td>
									<td>
										{{ $book->inventories_count }}
									</td>
									<td>
										@if ($book->inventories_count > 0)
											Available
										@else 
											Not Available
										@endif
									</td>

									<td><a href="/books/{{ $book->id }}/edit" class="btn btn-primary btn-xs">Edit</a>
										<a href="/books/{{ $book->id }}" class="btn btn-warning btn-xs">View</a>
										<a href="/books/{{ $book->id }}/manage" class="btn btn-info btn-xs">Manage</a>
									{{-- 	<form method="POST" action="/books/{{ $book->id }}" style="display:inline-block;">
											@csrf
											{{ method_field('DELETE') }}
											<button type="submit" class="btn btn-danger btn-xs">Delete</button>
										</form> --}}
										<a href="/books/{{ $book->id }}/remove" class="btn btn-danger btn btn-xs button delete-confirm">  Delete</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>


@endsection
@push ('scripts')

<link href="{{ asset('assets/trix-master/dist/trix.css') }}" rel="stylesheet"> 
<script src="{{ asset('assets/trix-master/dist/trix.js') }}"></script>
 
<script type="text/javascript">
   $(document).ready( function () {
       $('#myTable').DataTable();
   });
</script>
 
<script> 
  $(".multiple-select2").select2({ tags: true });
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