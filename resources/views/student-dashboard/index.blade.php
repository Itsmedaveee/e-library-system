@extends('layouts.master')
@section('content') 
<!-- end page-header --> 
<div id="content" class="content">
   <!-- begin breadcrumb -->
 
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Library <small></small></h1>



{{--     <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading">Library</div>
            <div class="panel-body">
                      <form method="GET" action="/student/home">
               <div class="form-group">
                  <label>Search</label>
                  <input type="text" name="search" class="form-control">
               </div>
               <div class="form-group">
                  <button type="submit" class="btn btn-primary">Search</button>
               </div>
            </form>
         </div>
      </div>  --}}

 <div class="panel panel-default">
            <div class="panel-heading">Books</div>
            <div class="panel-body">
               <table class="table table-bordered" id="myTable">
                  <thead>
                     <tr>
                        <th>Category</th>
                        <th>Book</th>
                        <th>Author</th>
                        <th>Stocks</th>
                        <th>Status</th>
                        <th>Published At</th>
                        <th>Options</th>
                     </tr>
                  </thead>
                  <tbody> 
                    @forelse  ($books as $book) 
                     <tr>
                        <td>{{ $book->category->title }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->inventories_count }}</td>
                        <td>
                           @if ($book->inventories_count > 0)
                                 Available
                              @else 
                                 No Available
                           @endif
                           </td>
                        <td>{{ $book->created_at->toFormattedDateString() }}</td>  
                        <td> <a href="/books/{{ $book->id }}/view" class="btn btn-primary btn-xs">View Book</a></td>
                     </tr> 
                     @empty
                    <td colspan="5" align="center">Search not found</td>  
                  </tbody> 
                
                  @endforelse
               </table>
{{-- 
@forelse  ($books as $book)

  <div class="well">
      <div class="media">
         <a class="pull-left" href="#">  
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
            <br>
            <div class="form-group">
               <li><a href="/books/{{ $book->id }}/view" class="btn btn-primary">View Book</a></li>
            </div>
            
         </ul>
       </div>

    </div>
  </div>
   @empty
         <p>No Search found</p>
       @endforelse 
</div>
@endsection --}}
@endsection

@push ('scripts')
<script type="text/javascript">
   $(document).ready( function () {
       $('#myTable').DataTable();
   });
</script>

@endpush