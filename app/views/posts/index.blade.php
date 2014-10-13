@extends('layouts.admin')
@section('content')
<div class="page-header">
	<h1>
		Blog

		<div class="pull-right">
			<a href="{{ URL::to('admin/posts/create') }}" class="btn btn-small btn-info"><i class="icon-plus-sign icon-white"></i> Create</a>
		</div>
	</h1>
</div>
<div class="row">
	

</div>




<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th>Title</th>
			<th>Content</th>
			<th>Date</th>
			<th></th>


		
		</tr>
	</thead>
	<tbody>
		@foreach($posts as $post)
		<tr>
			<td><a href="posts/{{$post->id}}/edit">{{$post->title}}</a></td>
			<td style="overflow-y:scroll">{{HTML::decode(str_limit($post->content, 500))}}</td>
			<td>{{$post->created_at->diffForHumans()}}</td>
			<td>
				<a href="{{ route('delete/posts', $post->id) }}" class="btn btn-mini btn-danger">@lang('delete')</a>

			</td>
		</tr>	
		@endforeach
	</tbody>
</table>



@stop