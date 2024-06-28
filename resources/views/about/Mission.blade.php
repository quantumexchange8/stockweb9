@extends('master.Master')
@section('content')

<section class="breadcrumb-area" style="background-image: url({{ asset('images/resources/breadcrumb-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="title float-left">
                    <h1>Our Mission.</h1>
                </div>
                <div class="breadcrumb-menu float-right">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">Mission</li>
                    </ul>    
                </div>
            </div>
        </div>
	</div>
</section>

<section class="company-overview-area">
    <div class="container">
        <div class="sec-title text-center">
            <div class="title">Mission Statement</div>
            <div class="dector thm-bg-clr center"></div>
            <div class="bottom">
                <p>
                    Our philosophy revolves around prioritizing the financial well-being of our clients, which has been the foundation of our success. Our business model has allowed us to establish enduring relationships with our clients, and we have earned a reputation for excellence in both service and performance. 
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="company-overview-text">
                    <div class="top thm-clr">
                        <h3 class="thm-clr">Our history of innovation is a source of immense pride, and it has played a crucial role in our success.</h3>
                    </div>
                    <div class="text">
                        <p>We are deeply passionate about what we do, and our unwavering focus is on delivering outstanding results in meeting the complex financial needs of our clients. We are dedicated to assisting our clients in realizing the life they envision and creating lasting legacies for future generations.</p>
                        <p>In a constantly evolving financial landscape, XYZ ensures that our clients receive top-notch information through continuous innovation. Our dynamic team possesses the ability to navigate any market situation, and we thrive on the challenges we encounter on a daily basis. </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-8 col-md-12 col-sm-12">
                <div class="mission-vision-content">
                    <div class="img-holder">
                        <img src="{{ asset('images/resources/mission-vision.jpg') }}" alt="Awesome Image">
                    </div>
                    <div class="text-holder">
                        <ul>
                            <li>
                                <p>At XYZ, we begin each individual's financial plan with a thorough analysis of their aspirations, dreams, desires, and even fears.</p>
                            </li>
                            <li>
                                <p>At XYZ, our utmost commitment is to help our clients achieve their financial goals by delivering exceptional service and offering superior investment products and advice.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

@endsection