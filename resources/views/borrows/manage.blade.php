@extends('layouts.master')
@section('content')


<div id="content" class="content"> 

   <h1 class="page-header">Request Borrow <small></small></h1>
   <div class="form-group">
		<form method="POST" action="/request-borrow/{{ $inventory->id }}" style="display:inline-block;">
			@csrf
			{{ method_field('PATCH') }}
			<button class="btn btn-primary">Approve</button>
		</form>   		
		<form method="POST" action="/request-borrow/{{ $inventory->id }}/cancel" style="display:inline-block;">
			@csrf
			{{ method_field('PATCH') }}
			<button class="btn btn-danger">Cancel</button>
		</form>   	
   </div>
   <div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Student</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<td>ID No.</td>
								<td>Name</td>
								<td>Gender</td>
								<td>Year Level</td>
								<td>Section</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>{{ $inventory->user->student->id_number }}</td>
								<td>{{ $inventory->user->student->name }}</td>
								<td>{{ $inventory->user->student->gender }}</td>
								<td>{{ $inventory->user->student->year_level }}</td>
								<td>{{ $inventory->user->student->section }}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Book</div>
				<div class="panel-body">

					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Serial No.</th>
								<th>Title</th>
								<th>Author</th>
								<th>Published At</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>{{ $inventory->serial_no }}</td>
								<td>{{ $inventory->book->title }}</td>
								<td>{{ $inventory->book->author }}</td>
								<td>{{ $inventory->book->published->toFormattedDateString() }}</td>
							</tr>
						</tbody>
					</table>

				</div>
			</div>
	</div>
</div>







@endsection