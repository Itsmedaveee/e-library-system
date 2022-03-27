@extends('layouts.app')
@section('content')


<div class="container">
			<h2>Show Department</h2>
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Show Department</div>
				<div class="panel-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Name</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>{{ $department->name }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
				<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Faculty Lists</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>ID No.</th>
								<th>Fullname</th>
								<th>Gender</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($department->faculties as $faculty)
							<tr>
								<td>{{ $faculty->id_number }}</td>
								<td>{{ $faculty->name }}</td>
								<td>{{ $faculty->gender }}</td>
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