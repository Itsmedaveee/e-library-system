@extends('layouts.app')
@section('content')
<div class="container">
			<h2> Books</h2>
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Edit Book</div>
				<div class="panel-body">
						<form method="POST" action="/books/{{ $book->id }}" enctype="multipart/form-data">
							@csrf
							{{ method_field('PATCH') }}
							<div class="form-group">
								<label>Category</label>
								<select class="form-control" name="category">
									<option >Select Category</option>
									@foreach ($categories as $categoryId => $category)
										<option value="{{ $categoryId }}" {{ $book->category_id == $categoryId ? 'selected' : '' }}>{{ $category }}</option>
									@endforeach
								</select>
							</div>

							<div class="form-group">
								<label>Title</label>
								<input type="text" class="form-control" name="title" value="{{ $book->title }}">
							</div>

						{{-- 	<div class="form-group">
								<label>Body</label>
								<textarea class="form-control"></textarea>
							</div> --}}
							<div class="form-group">
								<label>Body</label>
		                       {{--  <input id="x" value="" type="hidden" name="body" value="{{ $book->body }}">
		                        <trix-editor input="x" placeholder="Body" value="{{ $book->body }}"></trix-editor> --}}
		                        <textarea class="form-control" name="body">{{ $book->body }}</textarea>
		                    </div>

		                    <div class="form-group">
								<label>Author</label>
								<input type="text" class="form-control" name="author" value="{{ $book->author }}">
							</div>

						<div class="form-group{{ $errors->has('upload_photo') ? ' has-error' : '' }}">
								<label>Upload Photo</label>
								<input type="file" name="upload_photo" class="form-control">
								@if ($errors->has('upload_photo'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('upload_photo') }}</strong>
								    </span>
								@endif
							</div>							
							<div class="form-group{{ $errors->has('upload_file') ? ' has-error' : '' }}">
								<label>Upload PDF</label>
								<input type="file" name="upload_file" class="form-control" value="{{ Storage::url($book->upload_file) }}">
								@if ($errors->has('upload_file'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('upload_file') }}</strong>
								    </span>
								@endif
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>







@endsection

@push ('scripts')
<link href="{{ asset('assets/trix-master/dist/trix.css') }}" rel="stylesheet"> 
<script src="{{ asset('assets/trix-master/dist/trix.js') }}"></script>
@endpush