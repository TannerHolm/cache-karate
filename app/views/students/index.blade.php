@extends('layouts.admin')
@section('content')
<div class="page-header">
	<h1>
		Student Management

		<div class="pull-right">
			<!-- <a href="{{ URL::to('admin/students/create') }}" class="btn btn-small btn-info"><i class="icon-plus-sign icon-white"></i> Create</a> -->
		</div>
	</h1>
</div>

<div ng-controller="StudentsController">
	
<div class="row">
	
<div class="col-xs-2">
	<label for="class">Filter</label>
    <input type="text" placeholder="search name, class or belt" ng-model="search" style="margin-bottom:10px;">
</div>
</div>

<!-- <a class="btn btn-medium" href="{{ URL::to('admin/users?withTrashed=true') }}">Include Deleted Users</a> -->
<!-- <a class="btn btn-medium" href="{{ URL::to('admin/users?onlyTrashed=true') }}">Include Only Deleted Users</a> -->




<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Belt</th>
			<th>Class</th>

		
		</tr>
	</thead>
	<tbody>
		<tr ng-repeat="student in students | filter:search">
			<th>{{student.first_name}}</th>
			<th>{{student.last_name}}</th>
			<th>{{student.class_id}}</th>
			<th>{{student.belt_rank}}</th>
		</tr>
	</tbody>
</table>

<form ng-submit="addStudent()">
        <input type="text" placeholder="First Name" ng-model="studentFirstName">
        <input type="text" placeholder="Last Name" ng-model="studentLastName">
        <input type="text" placeholder="Class" ng-model="studentClass">
        <input type="text" placeholder="Belt" ng-model="studentBeltRank">
        <button type="submit">Add Student</button>
    </form>
</div>


@stop
