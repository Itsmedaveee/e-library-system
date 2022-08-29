@extends('layouts.master')
@section('content')
<div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="/courses" class="">Courses</a></li>
      <li class="breadcrumb-item  active">Edit Course</li>
   </ol>
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Edit Course <small></small></h1>
   	<div class="row"> 
				<div class="col-md-12">
					<div class="panel panel-default">
					<div class="panel-heading">Edit Course</div>
					<div class="panel-body">
						<form method="POST" action="/courses/{{ $course->id }}">
								@csrf 
								{{ method_field('PATCH') }}
								<div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
								<label>Department</label>
									<select class="form-control" name="department">
									 <option value="" disabled="" selected="">Select Department</option>
										@foreach ($departments as $departmentId => $department)
											<option value="{{ $departmentId }}" {{ $course->department_id == $departmentId ? 'selected' : '' }}>{{ $department }}</option>
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
									<input type="text" class="form-control" name="code" value="{{ $course->code }}">
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
									<input type="text" class="form-control" name="name" value="{{ $course->name }}">
									<span class="help-block	">	                          
									@if ($errors->has('name'))
									    <span class="help-block">
									        <strong style="color:red;">{{ $errors->first('name') }}</strong>
									    </span>
									@endif
								</div> 

								<div class="form-group">
									<button type="submit" class="btn btn-primary">Update</button>
								</div>
							</form>
					</div>
				</div>
		</div> 


@endsection