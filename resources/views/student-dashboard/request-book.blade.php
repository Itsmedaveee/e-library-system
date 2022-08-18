@extends('layouts.master')
@section('content')

<div id="content" class="content"> 
 
   <h1 class="page-header">Request Borrows <small></small></h1>
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
								<th>Author</th> 
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($inventories as $inventory)
							<tr>
								<td>{{ $inventory->id }}</td>
								<td>{{ $inventory->book->title ?? null }}</td> 
								<td>{{ $inventory->book->author ?? null }}</td>  								
								<td>
									<form method="POST" action="/request-books/{{ $inventory->id }}/cancel">
										@csrf
										{{ method_field('PATCH') }}
										<button type="submit" class="btn btn-danger btn-xs">Cancel</button>
									</form>
									{{-- <a href="/request-books/{{ $inventory->id }}/manage" class="btn btn-primary btn-xs">Cancel</a> --}}
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