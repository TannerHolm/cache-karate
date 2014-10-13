@extends('layouts.admin')
@section('content')
<div class="page-header">
	<h1>
		{{$user->first_name}} {{$user->last_name}} 

		<div class="pull-right">
			<a href="{{ route('students') }}" class="btn btn-small btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> Back</a>
		</div>
	</h1>
<div class="row">
	
<div class="col-md-3">
	<img class="profile-image" src="http://intranet.atomos.com/Marketing/Image%20Library/atomos-manga-characters/ninja/ninja-shadow.png/at_download/image" width="200px;" alt="">
	<!-- <img class="profile-image" src="{{$user->profile_image}}" alt=""> -->
<h3><em>{{$user->belt_rank}} Belt</em></h3>
</div>
</div>
</div>

@stop
