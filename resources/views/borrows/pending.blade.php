@extends('layouts.master')
@section('content')

<div id="content" class="content"> 
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="/pending-borrows" class="">Pending Book</a></li>
      <li class="breadcrumb-item  active">Request Lists</li>
   </ol> 
   <h1 class="page-header">Request Lists <small></small></h1>
   <div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Request lists</div>
				<div class="panel-body">
					<table class="table table-bordered" id="myTable">
						<thead>
							<tr>
								<th>ID</th>
								<th>Book</th>
								<th>Student Name</th>
								<th>Department</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($inventories as $inventory)
							<tr>
								<td>{{ $inventory->id }}</td>
								<td>{{ $inventory->book->title }}</td>
								<td>{{ $inventory->user->student->name ?? null }}</td> 
								<td>{{ $inventory->user->student->department->name ?? null  }}</td> 
								<td>
									<a href="/book/{{ $inventory->id }}/manage" class="btn btn-primary btn-xs">Manage</a>
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


@push('scripts')
<script type="text/javascript">
   $(document).ready( function () {
       $('#myTable').DataTable();
   });
</script> 
@endpush 


@endsection