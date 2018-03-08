

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading"><strong style="font-size: 35px; font-weight: 35px; color: green">Download Conference Flyer</strong></div>

                <div class="panel-body">
                	<p>Click on image to download</p>
                   	<a href="/images/outside.jpg" download>
					  <img border="0" src="/images/outside.jpg" alt="flyer_outside" width="200" height="150">
					</a>

					<a href="/images/inside.jpg" download>
					  <img border="0" src="/images/inside.jpg" alt="flyer_inside" width="200" height="150">
					</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
