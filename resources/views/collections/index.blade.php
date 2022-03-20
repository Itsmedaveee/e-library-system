@extends('layouts.app')
@section('content')
 
<<div class="container">
			<h2>Reports</h2>
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading"> Reports</div>
				<div class="panel-body"> 
						<div class="form-group">
							<a href="/pdf-collections" class="btn btn-primary btn-md">PDF</a>
						</div>
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Category</th>
									<th>Book Collect</th>
									<th>Created At</th>
								</tr>
							</thead>
							<tbody>
								
								@foreach ($collections as $collect)
								<tr>
									<td>{{ $collect->id }}</td>
									<td>{{ $collect->title }}</td>
									<td>{{ $collect->books_count }}</td>
									<td>{{ $collect->created_at }}</td>
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