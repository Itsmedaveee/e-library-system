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
					</div>
				</div>
			</div>
		</div>
	</div>






@endsection