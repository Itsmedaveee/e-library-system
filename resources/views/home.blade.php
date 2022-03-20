@extends('layouts.app')
@inject('stats','App\Stats') 
@section('content') 

	<div class="container">

	<h1>Dashboard</h1>

	<div class="row">
	<div class="col-md-4">
	<div class="widget widget-stats bg-teal" style="background: #FACE23;">
	<div class="stats-icon stats-icon-lg">&nbsp;<i class="fa fa-user fa-fw"></i></div>
	<div class="stats-content">
	<div class="stats-title text-white"> &nbsp; Total Faculties</div>
	<div class="stats-number text-white">&nbsp; {{ $stats->totalFaculties() }}</div> 
	<div class="progress-bar" style="width: 70.1%;"></div>
	</div>
	<div class="stats-desc"><br></div>
	</div>
	</div>	

	<div class="col-md-4">
	<div class="widget widget-stats bg-teal" style="background: #FACE23">
	<div class="stats-icon stats-icon-lg">&nbsp;<i class="fa fa-users fa-fw"></i></div>
	<div class="stats-content">
	<div class="stats-title text-white"> &nbsp; Total Students</div>
	<div class="stats-number text-white">&nbsp; {{ $stats->totalStudents() }}</div> 
	<div class="progress-bar" style="width: 70.1%;"></div>
	</div>
	<div class="stats-desc"><br></div>
	</div>
	</div>	

	<div class="col-md-4">
	<div class="widget widget-stats bg-teal" style="background: #FACE23">
	<div class="stats-icon stats-icon-lg">&nbsp;<i class="fa fa-book fa-fw"></i></div>
	<div class="stats-content">
	<div class="stats-title text-white"> &nbsp; Total Books</div>
	<div class="stats-number text-white">&nbsp; {{ $stats->totalBooks() }}</div> 
	<div class="progress-bar" style="width: 70.1%;"></div>
	</div>
	<div class="stats-desc"><br></div>
	</div>
	</div>



</div>



       
@endsection
