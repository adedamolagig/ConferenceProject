@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong style="font-size: 35px; font-weight: 35px; color: green"> Sub Themes </strong> </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p style="text-align: justify; font-size: 20px; ">
                        The following sub-themes, among others, in each of the main areas, Airlines, Land Transport, Locomotive and Marines services, among others shall be addressed;</p>

                    <div style="font-size: 18px; ">
                        <ul >  
                        <li> i. Overview of Applications of Automotive Engines in Mass transportation</li> 
                        
                        <li>ii. An Overview of the Logistics Systems and  the  impacts on  economic development</li>
                        
                        <li>iii. Overview of current practices in Automotive industries, and business  models , challenges  and opportunities.</li>
                        
                        <li>iv. Fleet Acquisitions, Operations Planning and Maintenance.</li>

                        <li>v. Opportunities for Research, Development  and Domestication of manufacturing  Industries</li> 
                        
                        <li>vi. Standard and uniform Regulations of operations </li>
                        
                        <li>vii. Challenges for sustainability of successful Business Models in Mass Transit and Logistics Operations</li>
                        
                        <li>viii. Case studies on successful and Failed Business Models in Mass Transportation and Logistics Industries.</li>

                        <li>ix. Economic Analysis of an integrated Automotive Project, Cost Analysis in Automotive Process Engineering, Automotive systems impact for SDG’s Development.</li>

                        <li>x. Recreational Use of Automotive Technology including Tourism, Health, Safety &Environment (HSE), International Trade, Human Capacity building & Development.</li>

                        <li>xi. Cooperation with Academic Institution on Curriculum and Career developments for the Automotive Industry.</li>

                        <li>xii. Automotive Engines for Agricultural Development.</li>

                        <li>xiii. Automotive Policy Planning, Mechanical & Electrical Equipment Manufacturing -Local Content  Development. Procurement for Operations or Maintenance).</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection