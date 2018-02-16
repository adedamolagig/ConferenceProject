@extends('layouts.app')

@section('content')
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/mega_landing_picture_1.png" alt="First slide" width="100%" height="">
      <div class="container">
        <div class="carousel-caption">
          <!-- <h1>Example headline.</h1>
          <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p> -->
          <!-- <p><a class="btn btn-lg btn-primary" href=" {{ asset('register') }} " role="button">Sign up today</a></p> -->
        </div>
      </div>
    </div>
    <div class="item">
      <img src="images/road.png" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
         <!--  <h1>Another example headline.</h1> -->
          <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
          <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
        </div>
      </div>
    </div>
    <div class="item">
      <img src="images/pjimage.png" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">
         <!--  <h1>One more for good measure.</h1> -->
          <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
          <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->

<div class="container marketing">
<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->



<!-- Three columns of text below the carousel -->
<div class="row">
  <div class="col-lg-4">
    <i class="fa fa-comments-o fa-5x" aria-hidden="true"></i>
    <h2>AIMS</h2>
    <p>The aim of the conference is to integrate stakeholders for robust discourse, exposure, industry experience sharing & buy-in, transport systems collaborations and business integration, optimization of...</p>
    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
     
    <i class="fa fa-lightbulb-o fa-5x" aria-hidden="true"></i>
    <h2>OBJECTIVES</h2>
    <p>1. Evaluate the current impact of various Automotive MEdia for an integrated Transportation system on the change Agenda of the Nation</p>
    <p>2. Consider, review and suggest improvement on all critical requirements for comprehensice national Automotive system development.
    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <i class="fa fa-sign-in fa-5x" aria-hidden="true"></i>
    <h2>SUB-THEMES</h2>
    <p>1. Overview of Applications of Automotive Engines in Mass transportation</p>
    <p>2. An Overview of the Logistics systems and the impacts on economic development.</p>
    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->
</div>

@endsection