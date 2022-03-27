@extends('layouts.app')
@section('content')

         <div class="container">
         <h2>Categories</h2>
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
@forelse  ($category->books as $book)
  <div class="well">
      <div class="media">
         <a class="pull-left" href="#"> 
         <img class="media-object" src="{{ Storage::url($book->upload_photo) }}" style="width: 150px; height: 150px; ">
      </a>
      <div class="media-body">
         <h1 class="media-heading">{{ $book->title }}</h1>
          <p class="text-right"></p>
          <p>   {{ $book->body }}</p>
          <ul class="list-inline list-unstyled">
         <li><span><i class="glyphicon glyphicon-calendar"></i> {{ $book->created_at->toFormattedDateString() }}</span></li>
            
            <li>|</li>
            <li>Author: {{ $book->author }}</li>
            <li>|</li>
             <li><a href="{{ Storage::url($book->upload_file) }}">View PDF</a></li>
            <li>
             <a href="/books/{{ $book->id }}/download" class="btn btn-primary"><i class="fa fa-download"></i> Download PDF</a>
            </li>
            
         </ul>
       </div>

    </div>
  </div>
   @empty
         <p>No Search found</p>
       @endforelse
</div>
@endsection

