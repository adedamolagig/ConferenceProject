
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong style="font-size: 35px; font-weight: 35px; color: green"> Objectives </strong> </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p style="text-align: justify; font-size: 20px; ">
                        The following are the objectives of the conference</p>

                    <div style="font-size: 18px; ">
                        <ul >  
                        <li> i. Evaluate the current impact of various Automotive Media for an integrated Transportation system on the Change Agenda of the Nation.</li> 
                        
                        <li>ii. Consider, review and suggest improvement on all critical requirements for comprehensive national Automotive system development.</li>
                        
                        <li>iii. Develop a robust policy for the efficient integration, planning and management of the Automotive sector of the Nigerian Economy through constitutional, legal & Institutional frameworks.</li>
                        
                        <li>iv.Any other action for the promotion of the above and related specific objectives.</li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection