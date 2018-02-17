@extends('layouts.app')

@section('content')


<div class="container marketing">
<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->



<!-- Three columns of text below the carousel -->
<div class="row">
  <div class="col-lg-4">
    <i class="fa fa-comments-o fa-5x" aria-hidden="true"></i>
    <h2 style=" font-family:  Baloo Tamma; ">AIM</h2>
    <p>The aim of the conference is to bring together and integrate the stakeholders in the application of Automotive Engineering systems in Mass Transportation and Logistics operations. </p> <p>This is to provide opportunity for robust discourse, exposure, industry experience sharing & buy-in, transport systems collaborations and business development opportunities...</p>
    <p><a class="btn btn-default" href=" {{ route('aim') }} " role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
     
    <i class="fa fa-lightbulb-o fa-5x" aria-hidden="true"></i>
    <h2 style=" font-family:  Baloo Tamma; ">OBJECTIVES</h2>
    <p>1. Evaluate the current impact of various Automotive MEdia for an integrated Transportation system on the change Agenda of the Nation</p>
    <p>2. Consider, review and suggest improvement on all critical requirements for comprehensice national Automotive system development.
    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <i class="fa fa-sign-in fa-5x" aria-hidden="true"></i>
    <h2 style=" font-family:  Baloo Tamma; font-weight: 400; " >SUB-THEMES</h2>
    <p>1. Overview of Applications of Automotive Engines in Mass transportation</p>
    <p>2. An Overview of the Logistics systems and the impacts on economic development.</p>
    <p><a class="btn btn-default" href=" {{ route('subThemes') }} " role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->
</div>

@endsection