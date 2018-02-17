@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong style="font-size: 35px; font-weight: 35px">Aim</strong></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p style="text-align: justify; font-size: 18px; ">The aim of the conference is to integrate stakeholders for robust discourse, exposure, industry experience sharing & buy-in, transport systems collaborations and business integration, optimization of logistics and transportation system, stakeholders networking amongst others.  
                    The conference will consist of Technical Tour/Visits, Plenary Sessions; Case Studies based Work-groups, and networks. </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection