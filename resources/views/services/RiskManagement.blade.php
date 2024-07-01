@extends('master.Master')
@section('content')

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('images/resources/breadcrumb-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="title float-left">
                    <h1>Risk Management</h1>
                </div>
                <div class="breadcrumb-menu float-right">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">Risk Management</li>
                    </ul>    
                </div>
            </div>
        </div>
	</div>
</section>
<!--End breadcrumb area-->

<!--Start Single service area-->
<section id="single-service-area">
    <div class="pattern-box"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                <div class="content-box">
                    <!--Start single ser top content-->
                    <div class="single-ser-top-content">
                        <div class="sec-title">
                            <h2>Introduction</h2>
                        </div>
                        <div class="inner-content">
                            <div class="img-holder">
                                <img src="{{ asset('images/services/service-single/introduction.jpg') }}" alt="Awesome Image">
                            </div>
                            <div class="text-holder">
                                <p>
                                    At XYZ, we offer comprehensive risk analysis capabilities that are built upon our proven and reliable risk management methods.
                                </p>
                                <p>
                                    Throughout the years, numerous financial institutions, organizations, independent advisors, and high-net worth individual traders have greatly benefited from our wide range of investment services. These services encompass a thorough examination of the capital markets, meticulous development of investment strategies, and access to our exclusive trading and investment platforms. 
                                </p>
                                <p>
                                    Our team of professional advisors at XYZ provides highly personalized and reliable guidance to our institutional clients worldwide. We assist them in valuing, managing, and overseeing intricate portfolios, while carefully evaluating all associated risks. 
                                </p>
                                <p>
                                    This includes navigating the divestiture of stressed and distressed assets, as well as addressing various complex financial challenges.
                                </p>
                                <a class="btn-one thm-bg-clr" href="#">Start Yours</a>
                            </div>
                        </div>
                    </div>
                    <!--End single ser top content-->
                </div>
            </div>

            @include('services.partials.Sidebar')
        </div>
    </div>
</section>
<!--End Single service area-->

@endsection