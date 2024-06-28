@extends('master.master')
@section('content')

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{ asset('images/resources/breadcrumb-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="title float-left">
                    <h1>Know About Us.</h1>
                </div>
                <div class="breadcrumb-menu float-right">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">About Company</li>
                    </ul>    
                </div>
            </div>
        </div>
	</div>
</section>
<!--End breadcrumb area-->

<!--Start company overview area-->
<section class="company-overview-area">
    <div class="container">
        <div class="sec-title text-center">
            <div class="title">Our History</div>
            <div class="dector thm-bg-clr center"></div>
            <div class="bottom">
                <p>
                    XYZ is an exclusive independent asset management firm that was established in 20XX in Hong Kong, the financial hub of Asia. 
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="company-overview-text">
                    <div class="top thm-clr">
                        <h3 class="thm-clr">
                            Our top priority is always the best interests of our clients.
                        </h3>
                    </div>
                    <div class="text">
                        <p>Our reputation for excellence in service and performance is a direct result of the success we achieve for our clients. </p>
                        <p>We treat each client equally and fairly, utilizing our extensive capabilities to the best of our abilities. Our main focus is investing on behalf of our clients, regardless of whether they are large institutions, small institutions, families, or individuals.</p>
                        <a href="{{ route('services') }}" class="btn-one thm-bg-clr">Our Services</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-8 col-md-12 col-sm-12">
                <div class="mission-vision-content">
                    <div class="img-holder">
                        <img src="{{ asset('images/resources/mission-vision.jpg') }}" alt="Awesome Image">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--End company overview area-->

<!--Start how work area-->
<section class="how-work-area about-page py-5">
    <div class="container">
        <div class="sec-title text-center pb-3">
            <div class="title">How it Works</div>
            <div class="dector thm-bg-clr center"></div>
        </div>
        <div class="row">
            <div class="col-xl-12 pb-5">
                This has allowed us to establish global partnerships in more than twenty countries, positioning XYZ to provide our clients with the best opportunities to succeed and minimize risk. We are deeply passionate about what we do and are fully committed to delivering outstanding performance in meeting the complex financial needs of our clients.
            </div>

            <div class="col-xl-12">
                <ul class="work-box">
                    <!--Start single box-->
                    <li class="single-box text-center">
                        <div class="icon-holder">
                            <span class="icon-interface"></span>
                            <div class="overlay-title">
                                <h3>XXX</h3>
                            </div>    
                        </div>
                        <div class="text-holder">
                            <p>
                                We are dedicated to serving our clients' interests and providing them with transparent and sound advice. We oversee their financial well-being and offer the most effective strategies and solutions to help them achieve their financial goals. 
                            </p>
                        </div>    
                    </li>
                    <!--End single box-->
                    <!--Start single box-->
                    <li class="single-box text-center">
                        <div class="icon-holder">
                            <span class="icon-graphic-1"></span>
                            <div class="overlay-title">
                                <h3>XXX</h3>
                            </div>    
                        </div>
                        <div class="text-holder">
                            <p>
                                At XYZ, we offer our clients exceptional global capabilities and a wide range of services across various asset classes and global markets. Our team of experienced advisors from around the world brings valuable expertise and networking abilities.
                            </p>
                        </div>    
                    </li>
                    <!--End single box-->
                    <!--Start single box-->
                    <li class="single-box text-center">
                        <div class="icon-holder">
                            <span class="icon-cogwheel-1"></span>
                            <div class="overlay-title">
                                <h3>XXX</h3>
                            </div>    
                        </div>
                        <div class="text-holder">
                            <p>
                                We highly value expertise within our team and are always open to new opportunities, constantly striving for improvement.
                            </p>
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
