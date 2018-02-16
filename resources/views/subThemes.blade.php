@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p style="text-align: justify; ">
                        The following sub-themes, among others, in each of the main areas, Airlines, Land Transport, Locomotive and Marines services, among others shall be addressed;
                         
                        <p> i. Overview of Applications of Automotive Engines in Mass transportation</p> 
                        
                        <p>ii. An Overview of the Logistics Systems and  the  impacts on  economic development</p>
                        
                        <p>iii. Overview of current practices in Automotive industries, and business  models , challenges  and opportunities.</p>
                        
                        <p>iv. Fleet Acquisitions, Operations Planning and Maintenance.</p>

                        <p>v. Opportunities for Research, Development  and Domestication of manufacturing  Industries</p> 
                        
                        <p>vi. Standard and uniform Regulations of operations </p>
                        
                        <p>vii. Challenges for sustainability of successful Business Models in Mass Transit and Logistics Operations</p>
                        
                        <p>viii. Case studies on successful and Failed Business Models in Mass Transportation and Logistics Industries.</p>

                        <p>ix. Economic Analysis of an integrated Automotive Project, Cost Analysis in Automotive Process Engineering, Automotive systems impact for SDG’s Development.</p>

                        <p>x. Recreational Use of Automotive Technology including Tourism, Health, Safety &Environment (HSE), International Trade, Human Capacity building & Development.</p>

                        <p>xi. Cooperation with Academic Institution on Curriculum and Career developments for the Automotive Industry.</p>

                        <p>xii. Automotive Engines for Agricultural Development.</p>

                        <p>xiii. Automotive Policy Planning, Mechanical & Electrical Equipment Manufacturing -Local Content  Development. Procurement for Operations or Maintenance).</p>


                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection