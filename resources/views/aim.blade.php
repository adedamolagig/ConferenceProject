@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Aim</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p style="text-align: justify; ">The aim of the conference is to integrate stakeholders for robust discourse, exposure, industry experience sharing & buy-in, transport systems collaborations and business integration, optimization of logistics and transportation system, stakeholders networking amongst others.  
                    The conference will consist of Technical Tour/Visits, Plenary Sessions; Case Studies based Work-groups, and networks. </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection