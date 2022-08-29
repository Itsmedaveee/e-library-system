@extends('layouts.master')
@section('content')

<div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="/home" class="">Home</a></li>
      <li class="breadcrumb-item  active">Manage Serial</li>
   </ol>
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Manage Serial <small></small></h1>
 
	<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Manage Serial </div>
				<div class="panel-body">
					<form method="POST" action="/books/{{ $book->id }}"> 
							@csrf 
						<div class="form-group{{ $errors->has('serial_no') ? ' has-error' : '' }}">
							<label>Serial No</label>
							<select class="multiple-select2 form-control" multiple name="serial_no[]" >
							</select>
							<span class="help-block	">	                          
								@if ($errors->has('serial_no'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('serial_no') }}</strong>
								    </span>
								@endif
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Serial Books</div>
				<div class="panel-body">
					<table class="table table-bordered" id="myTable">
						<thead>
							<tr>
								<th>ID</th>
								<th>Serial No</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($book->inventories as $inventory)
							<tr>
								<td>{{ $inventory->id }}</td>
								<td>{{ $inventory->serial_no }}</td>
								<td>
									<form method="POST" action="/books/{{ $inventory->id }}/delete">
										@csrf 
										{{ method_field('DELETE') }}
										<button type="submit" class="btn btn-danger btn-xs">Delete</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
 

 

@endsection
@push ('scripts')
<script type="text/javascript">
   $(document).ready( function () {
       $('#myTable').DataTable();
   });
</script>
 
<script> 
  $(".multiple-select2").select2({ tags: true });
</script>

 
@endpush