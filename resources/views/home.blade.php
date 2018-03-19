@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                   <strong style="font-size: 35px; font-weight: 35px; color: green"> Dear {{ Auth::user()->salutations }} {{ Auth::user()->last_name }},</strong> </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in Mega Auto conference website.

                    <p style="font-size: 16px; font-weight: bold;">Here, you can upload abstracts for the conference</p> 

                    <p style="font-size: 16px;">Authors are invited to submit abstracts in English of not more than 300 words for peer review by the scientific and technical committee by not later than 31st March 2018. The abstract should not contain any undefined abbreviations or unspecified references. Each abstract should indicate the theme of the conference the proposed paper will address, and give the name and full contact details of the author to be contacted concerning the paper. Abstracts will be reviewed according to: the relevance to the topics and objectives of the conference; originality of subject matter; likely academic and technical rigour of the proposed paper; and likely contribution to knowledge, or practical relevance, of the proposed paper. Note that papers that are based on actual research that include empirical findings and critical/robust literature review will be accepted upon proof of registration.</p>


                    <div class="panel panel-default">

                <div class="panel-body">
                    
                    <p style="font-size: 25px; font-family: serif; color: green; "><b>Submissions can be made to:</b></p>
                    <p style="font-size: 20px; color: green; "><strong>Engr. Zamani ISHAYA-WAIDUNG, FNSE, FAutoEI, Fnim</strong></p>
                    <p style="font-size: 20px; font-family: times; "> <a href="mailto:zdishaya@gmail.com">zdishaya@gmail.com</a> </p>
                    <p>+2347033505420</p>

                    <div> &nbsp; </div>
                    
                    <p style="font-size: 20px; color: green;"><strong>Engr. Dr. Akin Adeoye, FNSE, FAutoEI, Fnim</strong></p>
                    <p style="font-size: 20px; font-family: times; "> <a href="mailto:akinadeoye9@gmail.com"> akinadeoye9@gmail.com</p></a>
                    <p>+2347035070288</p>
                
                    <div> &nbsp; </div>

                    <p style="font-size: 20px; color: green; "><strong>Engr. Mobolaji Olajide</strong></p>
                    <p style="font-size: 20px; font-family: times; "> <a href="mailto:engr.olajide@gmail.com">engr.olajide@gmail.com</a></p>
                    <p>+2348036464114</p>

                    <div> &nbsp; </div>
                    <p style="font-size: 20px; color: green;"><strong>Engr. G.A Adoga</strong></p>
                    <p style="font-size: 20px; font-family: times; "> <a href="mailto:adogagwina@gmail.com">adogagwina@gmail.com</a> </p>
                    <p>+2348035696296</p>

                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
