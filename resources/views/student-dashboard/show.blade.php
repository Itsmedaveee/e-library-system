@extends('layouts.master')
@section('content') 



<!-- end page-header --> 
<div id="content" class="content">
   <!-- begin breadcrumb -->
 
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Book <small></small></h1>



<div class="col-md-12">
   <div class="panel panel-default">
        <div class="panel-heading">Book</div>
            <div class="panel-body">

  <div class="well">
      <div class="media">
         <a class="pull-left" href="#">  
      </a>
      <div class="media-body"> 
        {{--  <h1 class="media-heading">{{ $book->title }}</h1>
          <p class="text-right"></p> 
          <p>   Stocks :{{ $book->inventories->count() }}</p>
          <ul class="list-inline list-unstyled">
         <li><span><i class="glyphicon glyphicon-calendar"></i> Published: {{ $book->published->toFormattedDateString() }}</span></li> 
            <li>Author: {{ $book->author }}</li> 
            <br> 
         </ul> --}}
         <table class="table table-bordered">
             <thead>
                 <tr>
                     <th>Book Title</th>
                     <th>Book Author</th>
                     <th>Stocks</th>
                     <th>Published Date</th>
                 </tr> 
             </thead>
             <tbody>
                 <tr>
                     <td>{{ $book->title }}</td>
                     <td>{{ $book->author }}</td>
                     <td>{{ $book->inventories->count() }}</td>
                     <td>{{ $book->published->toFormattedDateString() }}</td>
                 </tr>
             </tbody>
         </table>
       </div> 
    </div>
  </div>  
</div>
</div>
</div>


<div class="col-md-12">
<div class="panel panel-default">
    <div class="panel-heading">Request Borrow Book</div>
    <form method="POST" action="/borrow/{{ $book->id }}">
      
@include('student-dashboard.modal.add-request-borrow-book')
    	@csrf
      {{ method_field('PATCH') }}
        <div class="panel-body">
        
   {{--      	<div class="form-group">
	        	<label>Date</label>
	        	<input type="date" name="borrow_dates" class="form-control">
        	</div>  --}}
      
        	<div class="form-group">
    {{--     		<button type="submit" class="btn btn-primary">Borrow Book</button> --}}
                <button type="button" class="btn btn-sm btn-primary swal-overlay swal-overlay--show-modal"  data-toggle="modal" data-target="#exampleModalCenter" onclick="handleSubmit()">Request  Book</button>
        	</div>
        </form>
        </div>
    </div>
</div>
</div>

@push ('scripts')

<script>
function handleSubmit () {
    document.getElementById('form').submit();
}
 
</script>

@endpush

@endsection

