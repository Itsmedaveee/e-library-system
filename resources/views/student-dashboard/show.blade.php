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
       </div>  
    </div> 
  </div> 
  <div class="row">
     <div class="form-group">
                 <form method="POST" action="/borrow/{{ $book->id }}">
      
@include('student-dashboard.modal.add-request-borrow-book')
        @csrf
      {{ method_field('PATCH') }}
        <div class="panel-body">
        
   {{--         <div class="form-group">
                <label>Date</label>
                <input type="date" name="borrow_dates" class="form-control">
            </div>  --}}
      
            <div class="form-group">
    {{--            <button type="submit" class="btn btn-primary">Borrow Book</button> --}}
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

