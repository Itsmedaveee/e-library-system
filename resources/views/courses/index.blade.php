@extends('layouts.master')
@section('content')
<div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="/home" class="">Home</a></li>
      <li class="breadcrumb-item  active">Course</li>
   </ol>
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Course <small></small></h1>
   	<div class="row"> 
				<div class="col-md-4">
					<div class="panel panel-default">
					<div class="panel-heading">Add Course</div>
					<div class="panel-body">
						<form method="POST" action="/courses">
								@csrf 
								<div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
								<label>Department</label>
									<select class="form-control" name="department">
									 <option value="" disabled="" selected="">Select Department</option>
										@foreach ($departments as $departmentId => $department)
											<option value="{{ $departmentId }}">{{ $department }}</option>
										@endforeach
									</select>
									<span class="help-block	">	                          
									@if ($errors->has('department'))
									    <span class="help-block">
									        <strong style="color:red;">{{ $errors->first('department') }}</strong>
									    </span>
									@endif 
								</span> 

								<div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
									<label>Code</label>
									<input type="text" class="form-control" name="code">
									<span class="help-block	">	                          
									@if ($errors->has('code'))
									    <span class="help-block">
									        <strong style="color:red;">{{ $errors->first('code') }}</strong>
									    </span>
									@endif
								</div>	
								</div>	
							 

								<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
									<label>Title</label>
									<input type="text" class="form-control" name="name">
									<span class="help-block	">	                          
									@if ($errors->has('name'))
									    <span class="help-block">
									        <strong style="color:red;">{{ $errors->first('name') }}</strong>
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
				    <div class="panel-heading">Course lists</div>
				    <div class="panel-body">
				    	<table class="table table-hover" id="myTable">
							<thead>
								<tr>
									<th>ID</th>
									<th>Code</th>
									<th>Title</th> 
									<th>Options</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($courses as $course)
								<tr>
									<td>{{ $course->id }}</td>
									<td>{{ $course->code }}</td>
									<td>{{ $course->name }}</td> 
									<td>
										<a href="/courses/{{ $course->id }}/edit" class="btn btn-primary btn-xs">Edit</a>
										<form method="POST" action="/courses/{{ $course->id }}" style="display: inline-block;">
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