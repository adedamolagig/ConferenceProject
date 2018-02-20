@extends('layouts.app')

@section('content')


<div class="container marketing">
<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->



<!-- Three columns of text below the carousel -->
<div class="row">
  <div class="col-lg-4">
    
    <h2 style=" font-family:  Baloo Tamma; color: green; ">AIM</h2>
    <p>The aim of the conference is to bring together and integrate the stakeholders in the application of Automotive Engineering systems in Mass Transportation and Logistics operations. </p> <p>This is to provide opportunity for robust discourse, exposure, industry experience sharing & buy-in, transport systems collaborations and business development opportunities...</p>
    <p><a class="btn btn-default" href=" {{ route('aim') }} " role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
     
    
    <h2 style=" font-family:  Baloo Tamma; color: green; ">OBJECTIVES</h2>
    <p>1. Evaluate the current impact of various Automotive MEdia for an integrated Transportation system on the change Agenda of the Nation</p>
    <p>2. Consider, review and suggest improvement on all critical requirements for comprehensice national Automotive system development.
    <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->



  <div class="col-lg-4">
    
    <h2 style=" font-family:  Baloo Tamma; font-weight: 400; color: green; " >CONFERENCE ORGANIZERS</h2>
    <p>The conference is being organized by the Automotive and Locomotive Engines Division of the Nigerina Society of Engineers, in partnership with the Aeronautical Engineering and the Marine Engineering Dividions of the Society</p>
    <p><a class="btn btn-default" href=" {{ route('subThemes') }} " role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->

    <div class="col-lg-6">
    
    <h2 style=" font-family:  Baloo Tamma; font-weight: 400; color: green;" >SUB-THEMES</h2>
    <p>1. Overview of Applications of Automotive Engines in Mass transportation</p>
    <p>2. An Overview of the Logistics systems and the impacts on economic development.</p>
    <p><a class="btn btn-default" href=" {{ route('subThemes') }} " role="button">View details &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->
</div>

@endsection