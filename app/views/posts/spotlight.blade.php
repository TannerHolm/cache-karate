@extends('layouts.admin')

@section('content')


<div class="container">
	<div class="row">
      <div class="col-md-10">
        <div class="">
          <form class="form-horizontal" method="post">
          <fieldset>
            <legend class="">Student Spotlight</legend>   
            
            <div class="form-group">              
              <div class="col-md-8">
                <input id="name" name="name" type="text" placeholder="Student" class="form-control">
              </div>
            </div>  
            <form action="../upload.php"
      class="dropzone"
      id="my-awesome-dropzone">
      <input type="file" name="image" id="image
      ">
      </form>
      <!-- <form action="../upload.php"
      class="dropzone"
      id="my-awesome-dropzone"></form> -->

<!-- 
            <div class="form-group">              
              <div class="col-md-8">
                <input id="image" name="image" type="text" placeholder="Image" class="form-control">
              </div>
            </div>     -->
                 
            <div class="form-group">
              <div class="col-md-12">
                <textarea class="form-control summernote" id="content" name="content" placeholder="Content" rows="7"></textarea>
              </div>
            </div>
    
            <div class="form-group">
              <div class="col-md-12">
                <button type="submit" class="btn btn-success btn-lg">Publish</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>

@stop