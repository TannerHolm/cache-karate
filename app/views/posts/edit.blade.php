@extends('layouts.admin')

@section('content')

<div class="container">
	<div class="row">
      <div class="col-md-10">
        <div class="">
          <form class="form-horizontal" method="post">
          <fieldset>
            <legend class="">Edit Blog Post </legend>   
            
            <div class="form-group">              
              <div class="col-md-8">
                <input id="title" name="title" type="text" placeholder="Title" class="form-control" value="{{ Input::old('title', $post->title) }}">
              </div>
            </div>    
                 
            <div class="form-group">
              <div class="col-md-12">
                <textarea class="form-control summernote" id="content" name="content" placeholder="Content">{{ Input::old('content', $post->content) }}</textarea>
              </div>
            </div>
    
            <div class="form-group">
              <div class="col-md-12">
                <button type="submit" class="btn btn-success btn-lg">Update</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>

<style>
    
</style>
@stop