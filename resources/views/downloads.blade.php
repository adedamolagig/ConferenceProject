@extends('layouts.app')

@section('content')
	<p>Click on the flyers to download the image:<p>

	<a href="/images/outside.jpg" download>
	  <img border="0" src="/images/outside.jpg" alt="flyer_outside" width="200" height="150">
	</a>

	<a href="/images/inside1.jpg" download>
	  <img border="0" src="/images/inside1.jpg" alt="flyer_inside" width="200" height="150">
	</a>
@endsection