@extends('layouts.app')
@section('content')

<div id="content" class="content"> 
				<!-- end page-header -->
				<!-- begin panel -->
		{{-- 		<div class="row">
				<div class="col-md-4">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">Add Administrator</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="panel-body">
						<form method="POST" action="/users" id="myTable">
							@csrf
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
								<label>Name</label>
								<input type="text" class="form-control" name="name">
								<span class="help-block	">	                          
								@if ($errors->has('name'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('name') }}</strong>
								    </span>
								@endif
							</div>	
							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<label>Email</label>
								<input type="text" class="form-control" name="email">
								<span class="help-block	">	                          
								@if ($errors->has('email'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('email') }}</strong>
								    </span>
								@endif
							</div>

							<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
								<label>Username</label>
								<input type="text" class="form-control" name="username">
								<span class="help-block	">	                          
								@if ($errors->has('email'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('email') }}</strong>
								    </span>
								@endif
							</div>
							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<label>Password</label>
								<input type="password" class="form-control" name="password">
								@if ($errors->has('password'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('password') }}</strong>
								    </span>
								@endif
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div> --}}
			<div class="container">
			<h2>Users</h2>
			<div class="col-md-4">
				<div class="panel panel-default">
				<div class="panel-heading">Add User</div>
				<div class="panel-body">
					<form method="POST" action="/users" id="myTable">
							@csrf
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
								<label>Name</label>
								<input type="text" class="form-control" name="name">
								<span class="help-block	">	                          
								@if ($errors->has('name'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('name') }}</strong>
								    </span>
								@endif
							</div>	
							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								<label>Email</label>
								<input type="text" class="form-control" name="email">
								<span class="help-block	">	                          
								@if ($errors->has('email'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('email') }}</strong>
								    </span>
								@endif
							</div>

							<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
								<label>Username</label>
								<input type="text" class="form-control" name="username">
								<span class="help-block	">	                          
								@if ($errors->has('email'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('email') }}</strong>
								    </span>
								@endif
							</div>
							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<label>Password</label>
								<input type="password" class="form-control" name="password">
								@if ($errors->has('password'))
								    <span class="help-block">
								        <strong style="color:red;">{{ $errors->first('password') }}</strong>
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
				<div class="col-md-8">

				  <div class="panel panel-default">
				    <div class="panel-heading">User lists</div>
				    <div class="panel-body">
				    	<table class="table table-hover" id="myTable">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Email</th>
									<th>Username</th>
									<th>Created At</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($users as $user)
								<tr>
									<td>{{ $user->id }}</td>
									<td>{{ $user->name }}</td>
									<td>{{ $user->email }}</td>
									<td>{{ $user->username }}</td>
									<td>{{ $user->created_at }}</td>
									<td>
										<a href="/users/{{ $user->id }}/edit" class="btn btn-primary btn-xs">Edit</a>
										<form method="POST" action="/users/{{ $user->id }}" style="display: inline-block;">
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
				{{-- <div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title"> Administrator lists</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="panel-body">
						<table class="table table-hover" id="myTable">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Email</th>
									<th>Username</th>
									<th>Created At</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($users as $user)
								<tr>
									<td>{{ $user->id }}</td>
									<td>{{ $user->name }}</td>
									<td>{{ $user->email }}</td>
									<td>{{ $user->username }}</td>
									<td>{{ $user->created_at }}</td>
									<td><a href="/users/{{ $user->id }}/edit" class="btn btn-primary btn-xs">Edit</a>
										<form method="POST" action="/users/{{ $user->id }}" style="display: inline-block;">
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
				</div> --}}
			</div>
		</div>
	</div>



@endsection

{{-- @push ('scripts')
<script type="text/javascript">
   $(document).ready( function () {
       $('#myTable').DataTable();
   });
</script>

@endpush --}}