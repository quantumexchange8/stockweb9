@extends('master.Master')
@section('content')

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(images/resources/breadcrumb-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="title float-left">
                    <h1>Services</h1>
                    </div>
                <div class="breadcrumb-menu float-right">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">Services</li>
                    </ul>    
                </div>
            </div>
        </div>
	</div>
</section>
<!--End breadcrumb area--> 

<!--Start services area-->
@include('services.partials.ServicesCards')
<!--End services area-->

<!--Start how work area-->
<section class="how-work-area">
    <div class="container">
        <div class="sec-title text-center">
            <div class="title">How it Works</div>
            <div class="dector thm-bg-clr center"></div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <ul class="work-box">
                    <!--Start single box-->
                    <li class="single-box text-center">
                        <div class="icon-holder">
                            <span class="icon-interface"></span>
                            <div class="overlay-title">
                                <h3>Contact for Consultation</h3>
                            </div>    
                        </div>
                        <div class="text-holder">
                            <p>How all this mistaken idea of denouncing pleasure and praising pain was born will give complete account system.</p>
                        </div>    
                    </li>
                    <!--End single box-->
                    <!--Start single box-->
                    <li class="single-box text-center">
                        <div class="icon-holder">
                            <span class="icon-graphic-1"></span>
                            <div class="overlay-title">
                                <h3>Share Company Goal</h3>
                            </div>    
                        </div>
                        <div class="text-holder">
                            <p>Denouncing pleasure and praising pain was born and we will give you a completed expound tactual teachings.</p>
                        </div>    
                    </li>
                    <!--End single box-->
                    <!--Start single box-->
                    <li class="single-box text-center">
                        <div class="icon-holder">
                            <span class="icon-cogwheel-1"></span>
                            <div class="overlay-title">
                                <h3>Find a Challenges</h3>
                            </div>    
                        </div>
                        <div class="text-holder">
                            <p>There anyone who loves  pursues desires to obtain pain of itself, because it is pain, but circumstances occur  toil.</p>
                        </div>    
                    </li>
                    <!--End single box-->
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End how work area-->

@endsection