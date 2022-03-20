@extends('layouts.app')
@section('content')


<div class="container">
			<h2>Student Show</h2>
			<div class="col-md-12">
				<div class="panel panel-default">
				<div class="panel-heading">Student Show</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>ID No: {{ $student->id_number }}</th>
								<th>Name: {{ $student->name }}</th>
								<th>Email: {{ $student->user->email }}</th>
								<th>Gender: {{ $student->gender }}</th>
								<th>Username: {{ $student->user->username }}</th>
							</tr>
							 
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>


 
@endsection