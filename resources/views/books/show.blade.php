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
        <div class="pull-left" href="#"> 
            <img class="media-object" src="{{ Storage::url($book->upload_photo) }}" style="width: 150px; height: 150px; ">
            <br>
            <br>
               <p>Category : {{ $book->category->title }}</p>
               <p> Publisher: {{ $book->person_published }}</p>
               <p>Date Published: {{ $book->published->toFormattedDateString() }}</p>
        </div>

        <div class="media-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td><h2>Title: {{ $book->title }}</h2></td>
                    </tr>
                    <tr>
                        <td>by : {{ $book->author }}</td>
                    </tr>
                    <tr>
                        <td>{{ $book->body }}</td>
                    </tr>
                  
                </tbody>
            </table>
            {{-- <h1 class="media-heading">{{ $book->title }}</h1>
          <p class="text-right"></p>
          <p>   {{ $book->body }}</p>
          <ul class="list-inline list-unstyled">
            <li><span><i class="glyphicon glyphicon-calendar"></i> {{ $book->published->toFormattedDateString() }}</span></li>
            
            <li>|</li>
            <li>Author: {{ $book->author }}</li>
            <li>|</li>
            <li><a href="{{ Storage::url($book->upload_file) }}">View PDF</a></li>
            <li>
             <a href="/books/{{ $book->id }}/download" class="btn btn-primary"><i class="fa fa-download"></i> Download PDF</a>
            </li>
            
            </ul> --}}
       </div>
{{-- 
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
    </div> --}}
  </div>
  </div>
  </div>
@endsection