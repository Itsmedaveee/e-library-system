@extends('layouts.master')
@section('content')
<div id="content" class="content">
				<!-- begin breadcrumb -->
				<ol class="breadcrumb float-xl-right">
					<li class="breadcrumb-item"><a href="/home">Home</a></li>
					<li class="breadcrumb-item"><a href="/books">Books</a></li>
				</ol>
				<!-- end breadcrumb -->
				<!-- begin page-header -->
				<h1 class="page-header">Books</h1>
				<!-- end page-header -->
				<!-- begin panel -->
				<div class="row">
				<div class="col-md-12">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">Add Book</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="panel-body">
						<form method="POST" action="/books" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label>Category</label>
								<select class="form-control" name="category">
									<option >Select Category</option>
									@foreach ($categories as $categoryId => $category)
										<option value="{{ $categoryId }}">{{ $category }}</option>
									@endforeach
								</select>
							</div>

							<div class="form-group">
								<label>Title</label>
								<input type="text" class="form-control" name="title">
							</div>

						{{-- 	<div class="form-group">
								<label>Body</label>
								<textarea class="form-control"></textarea>
							</div> --}}
							<div class="form-group">
								<label>Body</label>
		                        <textarea class="form-control" name="body"></textarea>
		                       {{--  <trix-editor input="x" placeholder="Body"></trix-editor> --}}
		                    </div>

		                    <div class="form-group">
								<label>Author</label>
								<input type="text" class="form-control" name="author">
							</div>

							<div class="form-group">
								<label>Upload Photo</label>
								<input type="file" name="upload_photo" class="form-control">
							</div>							
							<div class="form-group">
								<label>Upload PDF</label>
								<input type="file" name="upload_file" class="form-control">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="col-md-12">
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
					<div class="panel-body">
						<table class="table table-bordered table-hover">
							<thead>
								<th>ID</th>
								<th>Category</th>
								<th>Title</th>
								<th>Actions</th>
							</thead>
							<tbody>
								@foreach ($books as $book)
								<tr>
									<td>{{ $book->id }}</td>
									<td>{{ $book->category->title }}</td>
									<td>{{ $book->title }}</td>
									<td><a href="/books/{{ $book->id }}/edit" class="btn btn-primary btn-xs">Edit</a>
										<a href="/books/{{ $book->id }}" class="btn btn-warning btn-xs">View</a>
										<form method="POST" action="/books/{{ $book->id }}" style="display:inline-block;">
											@csrf
											{{ method_field('DELETE') }}
											<button type="submit" class="btn btn-danger btn-xs">Delete</button>
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

@endsection
@push ('scripts')
<link href="{{ asset('assets/trix-master/dist/trix.css') }}" rel="stylesheet"> 
<script src="{{ asset('assets/trix-master/dist/trix.js') }}"></script>
@endpush