@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong style="font-size: 35px; font-weight: 35px; color: green">Aim</strong></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div style="text-align: justify; font-size: 18px; ">
                        <p >The aim of the conference is to bring together and integrate the stakeholders in the application of Automotive Engineering systems in Mass Transportation and Logistics operations. This will offer robust discourse, exposure, industry experience sharing & buy-in, transport systems collaborations and business integration, optimization of logistics and transportation system, stakeholders networking amongst others. </p> 
                        <p>
                            Among these stakeholders include;
                               Airline, Road Transport, Locomotive and Shipping industries

                        </p>
                    
                    <p>The conference will consist of; </p>

                    <ul>
                        <li> Technical Tour/Visits,</li>
                        <li> Plenary Sessions</li>
                        <li> Case Studies based Work-groups, and </li>
                        <li>    networks.</li>
                    </ul>
                    </div>
                    
                 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection