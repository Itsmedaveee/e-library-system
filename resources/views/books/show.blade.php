@extends('layouts.master')
@section('content')<div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="/books" class="">Books</a></li>
      <li class="breadcrumb-item  active">Show Books</li>
   </ol>
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Show Books <small></small></h1>
 
  <div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Show Book</div>
				<div class="panel-body">

 <div class="well">
      <div class="media">
      	<a class="pull-left" href="#"> 
    	
  		</a>
  		<div class="media-body">
    		<h1 class="media-heading">{{ $book->title }}</h1>
          <p class="text-right"></p>
          <p>   {{ $book->body }}</p>
          <ul class="list-inline list-unstyled">
  			<li><span><i class="glyphicon glyphicon-calendar"></i> {{ $book->published->toFormattedDateString() }}</span></li>
             
            <li>Author: {{ $book->author }}</li>
            <li>Stocks: {{ $book->inventories_count }}</li>
          
			</ul>
       </div>
    </div>
  </div>
  </div>
  </div>
@endsection