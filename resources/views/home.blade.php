@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                    Dear {{ Auth::user()->salutations }} {{ Auth::user()->last_name }}, </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in Mega Auto conference website

                    <p>Here, you can upload abstracts for the conference</p> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
