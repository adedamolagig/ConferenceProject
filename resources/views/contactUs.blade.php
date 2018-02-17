@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">CONTACT US</div>

                <div class="panel-body">
                    <form method="POST" action="/threads">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="name">Your Name (required)</label>
                            <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}" required>                          
                        </div>


                        <div class="form-group">
                            <label for="title">Your Email (required)</label>
                            <input type="text" class="form-control" id="Email" name="Email"
                                    value="{{ old('Email') }}" required>                          
                        </div>

                        <div class="form-group">
                            <label for="title">Subject</label>
                            <input type="text" class="form-control" id="Subject" name="Subject"
                                    value="{{ old('Subject') }}" required>                          
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            
                            <textarea name="message" id="message" class="form-control" rows="15" required>{{ old('message') }}</textarea>
                        </div>


                        <div class="form-group">
                            <button class="btn btn-primary">SEND MESSAGE</button>
                        </div>
                        

                        @if(count($errors))
                        <ul class="alert alert-danger">
                            
                            @foreach($errors ->all() as $error)
                                <li> {{ $error }} </li>
                            @endforeach
                        </ul>

                        @endif

                    </form>

                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection