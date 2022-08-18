@extends('layouts.master')
@section('content')
<div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="javascript:;" class="">Home</a></li>
      <li class="breadcrumb-item  active">Add Book</li>
   </ol>
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Add Book <small></small></h1>
   <div class="row">
  
         <div class="col-md-4">
            <div class="panel panel-default">
            <div class="panel-heading">Add Book</div>
            <div class="panel-body">
               <form method="POST" action="/users" id="myTable">
                     @csrf
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label>Books</label>
                        <select class="form-control" name="books">
                           @foreach ($books as $bookId => $book)
                              <option value="{{ $bookId }}">{{ $book }}</option>
                           @endforeach
                        </select>
                    </div>

                   <div class="form-group">
                        	<label>Serial No</label>
							<select class="multiple-select2 form-control" multiple>
							</select>
                      </div>
                        <span class="help-block ">                           
                        @if ($errors->has('serial_no'))
                            <span class="help-block">
                                <strong style="color:red;">{{ $errors->first('serial_no') }}</strong>
                            </span>
                        @endif
                     </div>   
                 </span>
             </div>
         </form>
     </div>



@endsection

@push ('scripts')
<script>
 
  $(".multiple-select2").select2({ tags: true });
</script>
@endpush