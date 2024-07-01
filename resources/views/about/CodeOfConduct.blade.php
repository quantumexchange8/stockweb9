@extends('master.Master')
@section('content')

<section class="breadcrumb-area" style="background-image: url({{ asset('images/resources/breadcrumb-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="title float-left">
                    <h1>Code of Conduct.</h1>
                </div>
                <div class="breadcrumb-menu float-right">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">Code of Conduct</li>
                    </ul>    
                </div>
            </div>
        </div>
	</div>
</section>

<section class="core-value-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 top">
                <div class="sec-title">
                    <div class="title">Our Core Values</div>
                </div>
                <div class="text">
                    <p>We strictly adhere to a code of conduct that has allowed us to establish and maintain a reputable and successful business model.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="core-value-content clearfix">
                    <div class="core-value-carousel clearfix">
                        <!--Start single item-->
                        <div class="single-item clearfix">
                            <div class="icon-holder float-left">
                                <span class="icon-symbols thm-clr"></span>
                            </div>
                            <div class="text-holder float-right">
                                <h2>Provide High Quality<br> Services.</h2>
                                <p>Our commitment to professionalism and ethics is unwavering, and integrity serves as the cornerstone of our foundation. The XYZ family upholds the highest standards of professionalism and ethics, ensuring that any concerns regarding improper conduct are never a cause for worry. </p>
                            </div>    
                        </div> 
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item martop clearfix">
                            <div class="text-holder right float-left">
                                <h2>Delivering On Our <br> Promises.</h2>
                                <p> When engaging in any financial transactions, it is crucial for XYZ to fully comply with all relevant laws, regulations, and policies. These regulations explicitly prohibit any form of deceptive, manipulative, or fraudulent financial activities, whether directly or indirectly associated with any investment product or vehicle. </p>
                            </div>
                            <div class="icon-holder right float-right">
                                <span class="icon-justice thm-clr"></span>
                            </div>
                        </div> 
                        <!--End single item--> 
                        <!--Start single item-->
                        <div class="single-item clearfix">
                            <div class="icon-holder float-left">
                                <span class="icon-symbols thm-clr"></span>
                            </div>
                            <div class="text-holder float-right">
                                <h2>Comprehensive of<br> Procedures.</h2>
                                <p>To ensure compliance with these regulations and laws, XYZ provides its employees with a comprehensive framework of procedures. This framework serves as a guide for employees to navigate the complexities of these regulations, and we further support their understanding through regular training seminars. </p>
                                <p>These seminars equip our employees with the knowledge to discern when it is necessary to seek advice from XYZ's compliance and legal teams.</p>
                            </div>    
                        </div> 
                        <!--End single item-->     
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection