@extends('layouts.master')
@section('content') 
<!-- end page-header --> 
<div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="/home" class="">Home</a></li>
      <li class="breadcrumb-item  active">Report Logs</li>
   </ol>
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Report Logs <small></small></h1>

   <div class="row">
         <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading">Report logs</div>
            <div class="panel-body">
            	<table class="table table-bordered">
            		<thead>
            			<tr>
            				<th>ID</th>
            				<th>Category</th>
            				<th>Book</th>
            				<th>Status</th>
            				<th>Student</th>
            				<th>Date</th>
            			</tr>
            		</thead>
            		<tbody>
            			@foreach ($reports as $report)
            			<tr>
            				<td>{{ $report->id }}</td>
            				<td>{{ $report->book->category->title ?? null }}</td>
            				<td>{{ $report->book->title ?? null }}</td>
            				<td>{{ $report->status }}</td>
            				<td>{{ $report->user->student->name ?? null }}</td>
            				<td>{{ $report->created_at->toFormattedDateString() }}</td>
            			</tr>
            			@endforeach
            		</tbody>
            	</table>
            </div>
        </div>
    </div>




 





@endsection