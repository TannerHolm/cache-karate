@extends('layouts.admin')
@section('content')
<div class="page-header">
	<h1>
		Student Management

		<div class="pull-right">
			<a href="{{ URL::to('admin/students/create') }}" class="btn btn-small btn-info"><i class="icon-plus-sign icon-white"></i> Create</a>
		</div>
	</h1>
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
		@foreach($users as $user)
		<tr>
			<td>{{$user->first_name}}</td>
			<td>{{$user->last_name}}</td>
			<td>{{$user->belt}}</td>
			<td>{{$user->class}}</td>
		</tr>
		@endforeach
	</tbody>
</table>

@stop