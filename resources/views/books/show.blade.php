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
				<h1 class="page-header">Show Book</h1>
				<!-- end page-header -->
				<!-- begin panel -->


				<div class="row">
				<div class="col-md-12">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">Show Book</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="panel-body">

{{-- 
		<div class="col-sm-7">
		<div class="news-content">
		<div class="news-label"><span class="bg-indigo-200 text-indigo-800"></span></div>
		<div class="news-title mb-2">{{ $book->title }}</div>
		<div class="mb-4 fw-bold text-gray-600">
	 		{{ $book->body }}
		</div>
		<div class="news-date text-gray-400">{{ $book->created_at->toFormattedDateString() }}</div>
		</div>
		<a href="news_detail.html" class="stretched-link"></a>
		</div>

		</div> --}}
		<div class="col-lg-9">

<div class="news">

<div class="row align-items-center">

<div class="col-sm-5 mb-3 mb-sm-0">
<div class="news-media mb-0">
<div class="" ><img src="{{ Storage::url($book->upload_photo) }}" width="100%"></div>
</div>
</div>



<div class="col-sm-7">
<div class="news-content">
{{-- <div class="news-label"><span class="bg-indigo-200 text-indigo-800">Bootstrap</span></div> --}}
<div class="news-title mb-2"><h1>{{ $book->title }}</h1></div>
<div class="mb-4 fw-bold text-gray-600">
	{{ $book->body }}
</div>
<div class="mb-4 fw-bold text-gray-600">
	Author: {{ $book->author }}
</div>
<div class="news-date text-gray-400">{{ $book->created_at->toFormattedDateString() }}</div>
</div>
<br>
<a href="/books/{{ $book->id }}/download" class="btn btn-primary"><i class="fa fa-download"></i> Download</a>
</div>

</div>

</div>

</div>

@endsection