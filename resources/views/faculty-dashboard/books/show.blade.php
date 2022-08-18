@extends('layouts.master')
@section('content')
<div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="javascript:;" class="">Home</a></li>
      <li class="breadcrumb-item  active"></li>
   </ol>

   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Books <small></small></h1>
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
            <div class="panel-heading">Category</div>
            <div class="panel-body">
                      <form method="GET" action="/categories/{{ $category->id }}/show">
               <div class="form-group">
                  <label>Search</label>
                  <input type="text" name="search" class="form-control">
               </div>
               <div class="form-group">
                  <button type="submit" class="btn btn-primary">Search</button>
               </div>
            </form>
         </div>
      </div> 

 <div class="panel panel-default">
            <div class="panel-heading">Category</div>
            <div class="panel-body">

@forelse  ($category->books as $book)

  <div class="well">
      <div class="media">
         <a class="pull-left" href="#"> 
             <div class="form-group">
               <input type="checkbox" name="">
            </div>
         <img class="media-object" src="{{ Storage::url($book->upload_photo) }}" style="width: 150px; height: 150px; ">

      </a>
      <div class="media-body">

         <h1 class="media-heading">{{ $book->title }}</h1>
          <p class="text-right"></p>
          <p>  Body: {{ $book->body }}</p>
          <p>   Stocks :{{ $book->inventories->count() }}</p>
          <ul class="list-inline list-unstyled">
         <li><span><i class="glyphicon glyphicon-calendar"></i> Published: {{ $book->published->toFormattedDateString() }}</span></li> 
            <li>Author: {{ $book->author }}</li> 
           
            
         </ul>
       </div>

    </div>
  </div>
   @empty
         <p>No Search found</p>
       @endforelse
       <div class="form-group">
       <button type="submit" class="btn btn-primary">Reserve</button>
      </div>
</div>
@endsection

