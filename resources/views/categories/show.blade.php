@extends('layouts.master')
@section('content')
 <div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="/categories" class="">Categories</a></li>
      <li class="breadcrumb-item  active">Show Categories</li>
   </ol>
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Show Categories <small></small></h1>
			<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Category</div>
				<div class="panel-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Title</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>{{ $category->title }}</td>
								</tr>
							</tbody>
						</table>
					</div> 
				</div> 
			</div>
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Books</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Title</th> 
								<th>Author</th>
								<th>Published</th> 
							</tr>
						</thead>
						<tbody>
							@foreach ($category->books as $book)
							<tr>
								<td>{{ $book->title }}</td>
								<td>{{ $book->author }}</td>
								<td>{{ $book->published->toFormattedDateString() }}</td>
		 
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
 	

@endsection