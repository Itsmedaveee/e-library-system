@extends('layouts.master')
@section('content')
<div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="/faculty-users" class="">Faculties</a></li>
      <li class="breadcrumb-item  active">Show Faculty</li>
   </ol>
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Show Faculty <small></small></h1>
   <div class="row">
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