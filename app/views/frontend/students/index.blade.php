@extends('layouts.master')
@section('content')

<div class="container page-container" style="margin-top: 50px;">
    
<div class="row">
    

 <div class="col-xs-12">
<h1>Student Resources</h1>

</div>
</div> <!-- end row -->

<div class="row" style="border-bottom: 1px solid black; padding-bottom: 50px;">
    <div class="col-xs-3 student-spotlight"><h3>Student Spotlight</h3>
    <h4>    
    {{HTML::decode($spotlight->name)}}
    </h4>
        <span>
        <!-- {{HTML::image($spotlight->image)}} -->
        </span>
    {{HTML::decode($spotlight->content)}}
    </div>
    <div class="col-xs-9 blog">
    <h2 style="margin-top: 0;">{{$post->title}} <em class="pull-right">{{$post->created_at}}</em></h2>
        <p>
            {{HTML::decode($post->content)}}
        </p>
        

    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="calendar">
            <h2>Calendar</h2>
            <iframe src="https://www.google.com/calendar/embed?src=holm.tanner%40gmail.com&ctz=America/Denver" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>
</div>
</div> <!-- end container -->







    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

@stop
