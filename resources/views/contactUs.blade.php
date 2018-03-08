@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong style="font-size: 35px; font-weight: 35px; color: green">
                CONTACT US</strong></div>

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

        <div class="col-md-6">
            <div class="panel panel-default">

                <div class="panel-body">
                    
                    <p style="font-size: 25px; font-family: serif; color: green; "><b>You can also contact us via:</b></p>
                    <p style="font-size: 20px; color: green; "><strong>Engr. Zamani ISHAYA-WAIDUNG, FNSE, FAutoEI, Fnim</strong></p>
                    <p style="font-size: 20px"> <a href="mailto:zdishaya@gmail.com">zdishaya@gmail.com</a> </p>
                    <p>+2347033505420</p>

                    <div> &nbsp; </div>
                    
                    <p style="font-size: 20px; color: green;"><strong>Engr. Dr. Akin Adeoye, FNSE, FAutoEI, Fnim</strong></p>
                    <p style="font-size: 20px"> <a href="mailto:akinadeoye9@gmail.com"> akinadeoye9@gmail.com</p></a>
                    <p>+2347035070288</p>
                
                    <div> &nbsp; </div>

                    <p style="font-size: 20px; color: green; "><strong>Engr. Mobolaji Olajide</strong></p>
                    <p style="font-size: 20px"> <a href="mailto:engr.olajide@gmail.com">engr.olajide@gmail.com</a></p>
                    <p>+2348036464114</p>

                    <div> &nbsp; </div>
                    <p style="font-size: 20px; color: green;"><strong>Engr. G.A Adoga</strong></p>
                    <p style="font-size: 20px"> <a href="mailto:adogagwina@gmail.com">adogagwina@gmail.com</a> </p>
                    <p>+2348035696296</p>

                    <div> &nbsp; </div>
                    <p style="font-size: 20px; color: green;"><strong>Engr. G.A Adoga</strong></p>
                    <p style="font-size: 20px"> <a href="mailto:adedamolagig@gmail.com">adogagwina@gmail.com</a> </p>
                    <p>+2348035696296</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
