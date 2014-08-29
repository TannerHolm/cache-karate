@extends('layouts.admin')
@section('content')
<div class="page-header">
	<h1>
		Edit Student

		<div class="pull-right">
			<a href="{{ route('students') }}" class="btn btn-small btn-inverse"><i class="icon-circle-arrow-left icon-white"></i> Back</a>
		</div>
	</h1>
</div>

<!-- Tabs -->
<form class="form-horizontal" method="post" action="" autocomplete="off">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<!-- Tabs Content -->
	<div class="tab-content">
		<!-- General tab -->
		<div class="tab-pane active" id="tab-general">
			<div class="form-body">
				<div class="row">
					<div class="col-md-6">
						<!-- First Name -->
						<div class="form-group control-group {{ $errors->has('first_name') ? 'error' : '' }} ">
							<label class="control-label col-md-3">First Name</label>
							<div class="col-md-9">
								<input class="form-control" type="text" name="first_name" id="first_name" value="{{ Input::old('first_name') }} " />
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group control-group {{ $errors->has('last_name') ? 'error' : '' }}  ">
							<label class="control-label col-md-3">Last Name</label>
							<div class="col-md-9">
								<input type="text" class="form-control"  name="last_name" id="last_name" value="{{ Input::old('last_name') }}" >
							</div>
						</div>
					</div>             
				</div><!--/row-->
				<div class="row">
					
					<div class="col-md-6">
						<div class="form-group control-group {{ $errors->has('email') ? 'error' : '' }}">
							<label class="control-label col-md-3">Email</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="email" id="email" value="{{ Input::old('email') }}">
							</div>
						</div>
					</div>



				</div><!--/row-->
				<div class="row">
					<div class="col-md-6">
						<div class="form-group control-group {{ $errors->has('password') ? 'error' : '' }}">
							<label class="control-label col-md-3">Password</label>
							<div class="col-md-9">
								<input type="password" name="password" id="password" value="" class="form-control" >
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group control-group {{ $errors->has('password_confirm') ? 'error' : '' }}">
							<label class="control-label col-md-3">Confirm Password</label>
							<div class="col-md-9">
								<input class="form-control" type="password" name="password_confirm" id="password_confirm" value="">
							</div>
						</div>
					</div>
				</div><!--/row-->
			</div><!--/form-body-->
			<div class="row">
				<div class="control-group col-md-6 {{ $errors->has('groups') ? 'error' : '' }}">
					<legend>Belt</legend>
					<div class="controls">
						<select name="groups[]" id="groups[]">
							
						</select>

						<span class="help-block" style="margin-bottom:100px;">
							Select a group to assign to the user, remember that a user takes on the permissions of the group they are assigned.
						</span>
					</div>
				</div>

				<div class="control-group col-md-6 {{ $errors->has('groups') ? 'error' : '' }}">
					<legend>Class</legend>
					<div class="controls">
						<select name="groups[]" id="groups[]">
							
						</select>

						<span class="help-block" style="margin-bottom:100px;">
							Select a group to assign to the user, remember that a user takes on the permissions of the group they are assigned.
						</span>
					</div>
				</div>
			</div>
		</div>


	</div>

	<!-- Form Actions -->
	<div class="control-group">
		<div class="controls">


			<button type="submit" class="btn btn-success">Create User</button>
			<a class="btn btn-link" href="{{ route('students') }}">Cancel</a>
		</div>
	</div>
</form>
@stop
