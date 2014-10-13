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
<div class="row">
	
<div class="col-xs-2">
	<label for="class">Class</label>
<select>
  <option value="">Nano Ninjas</option>
  <option value="">Little Ninjas</option>
  <option value="">Beginner</option>
  <option value="">Teen</option>
  <option value="">Womens</option>
</select>

</div>
<div class="col-xs-2">
	<label for="class">Belt</label>
<select id="filterbelt">
@foreach ($belts as $belt)
  <option value="{{$belt->id}}">{{$belt}}</option>
@endforeach
</select>

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
		@foreach($users as $user)
		<tr>
			<td><a href="students/{{$user->id}}/show">{{$user->first_name}}</a></td>
			<td>{{$user->last_name}}</td>
			<td>{{$user->belt_rank}}</td>
			<td>{{$user->class_id}}</td>
			<!-- <td>{{$user->class}}</td> -->
		@endforeach
		</tr>
	</tbody>
</table>



@stop