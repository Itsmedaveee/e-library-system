@extends('layouts.master')
@inject('stats','App\Stats') 
@section('content') 

<div id="content" class="content">
   <!-- begin breadcrumb -->
   <ol class="breadcrumb float-xl-right">
      <li class="breadcrumb-item"><a href="javascript:;" class="">Home</a></li>
      <li class="breadcrumb-item  active">Home</li>
   </ol>
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Home <small></small></h1>
<div class="row">

<div class="col-xl-3 col-md-6">
<div class="widget widget-stats bg-teal" >
<div class="stats-icon stats-icon-lg"><i class="fa fa-users fa-fw"></i></div>
<div class="stats-content">
<div class="stats-title">TOTAL TEACHERS</div>
<div class="stats-number">{{ $stats->totalFaculties() }}</div>
<div class="stats-progress progress">
<div class="progress-bar" style="width: 70.1%;"></div>
</div>
<div class="stats-desc"><br></div>
</div>
</div>
</div><div class="col-xl-3 col-md-6">
<div class="widget widget-stats bg-teal" >
<div class="stats-icon stats-icon-lg"><i class="fa fa-users fa-fw"></i></div>
<div class="stats-content">
<div class="stats-title">TOTAL TEACHERS</div>
<div class="stats-number">{{ $stats->totalFaculties() }}</div>
<div class="stats-progress progress">
<div class="progress-bar" style="width: 70.1%;"></div>
</div>
<div class="stats-desc"><br></div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6">
<div class="widget widget-stats bg-teal" >
<div class="stats-icon stats-icon-lg"><i class="fa fa-graduation-cap" aria-hidden="true"></i>
</div>
<div class="stats-content">
<div class="stats-title">TOTAL STUDENTS</div>
<div class="stats-number">{{ $stats->totalStudents() }}</div>
<div class="stats-progress progress">
<div class="progress-bar" style="width: 70.1%;"></div>
</div>
<div class="stats-desc"><br></div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6">
<div class="widget widget-stats bg-teal" >
<div class="stats-icon stats-icon-lg"><i class="fa fa-book" aria-hidden="true"></i>
</div>
<div class="stats-content">
<div class="stats-title">TOTAL BOOKS</div>
<div class="stats-number">{{ $stats->totalBooks() }}</div>
<div class="stats-progress progress">
<div class="progress-bar" style="width: 70.1%;"></div>
</div>
<div class="stats-desc"><br></div>
</div>
</div>
</div>

{{-- <div class="col-xl-3 col-md-6">
<div class="widget widget-stats bg-teal" >
<div class="stats-icon stats-icon-lg"><i class="fa fa-building" aria-hidden="true"></i>
</div>
<div class="stats-content">
<div class="stats-title">TOTAL DEPARTMENTS</div>
<div class="stats-number">{{ $stats->totalDepartments() }}</div>
<div class="stats-progress progress">
<div class="progress-bar" style="width: 70.1%;"></div>
</div>
<div class="stats-desc"><br></div>
</div>
</div>
</div>
 --}}


       
@endsection
