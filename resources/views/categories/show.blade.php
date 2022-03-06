@extends('layouts.master')
@section('content')


<div id="content" class="content">
		
				<h1 class="page-header">Show Category</h1>
				<!-- end page-header -->
				<!-- begin panel -->
				<div class="row">
				<div class="col-md-12">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">Show Category</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="panel-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Title</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>{{ $category->title }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
				<div class="col-md-12">
				<div class="panel panel-inverse">
					<div class="panel-heading">
						<h4 class="panel-title">Books</h4>
						<div class="panel-heading-btn">
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
							<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="panel-body">
					</div>
				</div>
			</div>
		</div>
	</div>






@endsection