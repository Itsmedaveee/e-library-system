@extends('layouts.app')
@section('content')


<div class="container">
			<h2>Faculty Show</h2>
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Faculy Show</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>ID No: {{ $user->faculty->id_number }}</th>
								<th>Name: {{ $user->name }}</th>
								<th>Email: {{ $user->email }}</th>
								<th>Gender: {{ $user->faculty->gender }}</th>
								<th>Username: {{ $user->username }}</th>
							</tr>
							 
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>


 
@endsection