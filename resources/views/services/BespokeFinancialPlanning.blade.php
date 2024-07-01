@extends('master.Master')
@section('content')

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('images/resources/breadcrumb-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="title float-left">
                    <h1>Bespoke Financial Planning</h1>
                </div>
                <div class="breadcrumb-menu float-right">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">Bespoke Financial Planning</li>
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
                                    At XYZ, we are a group of experts committed to ensuring your prosperity. We understand that a strong financial strategy serves as the bedrock for achieving financial success.
                                </p>
                                <p>
                                    To achieve this, our devoted team invests time in understanding you, your family, your aspirations, and any obstacles you may encounter along the way to attaining those aspirations. With this valuable information, along with the expertise of our in-house financial professionals, analysts, legal office, and more, we create a personalized financial plan tailored to maximize your wealth.
                                </p>
                                <p>
                                    This comprehensive plan encompasses all facets of your financial journey, providing guidance and support every step of the way.
                                </p>
                                <a class="btn-one thm-bg-clr" href="#">Start Yours</a>
                            </div>
                        </div>
                    </div>
                    <!--End single ser top content-->

                    <!--Start profit improvement box-->
                    <div class="profit-improvement-box">
                        <div class="sec-title">
                            <h2>Financial Plan</h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-12">
                                <div class="text-holder ml-0">
                                    <div class="text">
                                        <p>
                                            Your personalized financial plan incorporates all the following:
                                        </p>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="iocn-box"></div>
                                            <div class="text-box">
                                                <p>Trust & Estate Planning</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="iocn-box"></div>
                                            <div class="text-box">
                                                <p>Tax Planning & Preparation</p>    
                                            </div>
                                        </li>
                                        <li>
                                            <div class="iocn-box"></div>
                                            <div class="text-box">
                                                <p>Investment Management</p>    
                                            </div>
                                        </li>
                                        <li>
                                            <div class="iocn-box"></div>
                                            <div class="text-box">
                                                <p>Retirement Planning</p>    
                                            </div>
                                        </li>
                                        <li>
                                            <div class="iocn-box"></div>
                                            <div class="text-box">
                                                <p>Higher-Education Financial Planning</p>    
                                            </div>
                                        </li>
                                        <li>
                                            <div class="iocn-box"></div>
                                            <div class="text-box">
                                                <p>Insurance Planning</p>    
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="text-holder">
                                    <div class="text">
                                        <p>This bespoke financial planning-led approach allows you to:</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="iocn-box"></div>
                                            <div class="text-box">
                                                <p>Make decisions across your entire financial life that are in line with your goals.</p>    
                                            </div>
                                        </li>
                                        <li>
                                            <div class="iocn-box"></div>
                                            <div class="text-box">
                                                <p>Help keep more of your wealth by minimising taxes.</p>    
                                            </div>
                                        </li>
                                        <li>
                                            <div class="iocn-box"></div>
                                            <div class="text-box">
                                                <p>Help you identify and avoid risks that could erode your wealth.</p>    
                                            </div>
                                        </li>
                                        <li>
                                            <div class="iocn-box"></div>
                                            <div class="text-box">
                                                <p>Guide your risk tolerance and how to invest.</p>    
                                            </div>
                                        </li>
                                        <li>
                                            <div class="iocn-box"></div>
                                            <div class="text-box">
                                                <p>Help you budget, save and invest appropriately to achieve your goals.</p>    
                                            </div>
                                        </li>
                                        <li>
                                            <div class="iocn-box"></div>
                                            <div class="text-box">
                                                <p>Assess your progress on a regular basis.</p>    
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="py-5">
                            <div class="text">
                                <p>
                                    After implementing your financial plan, we continuously oversee and modify it as needed to align with your dynamic life and objectives.
                                </p>
                                <p>
                                    We regularly communicate with you to address the potential effects of new regulations, economic factors, and changes in your personal financial circumstances on your plans. 
                                </p>
                                <p>
                                    Recognizing the various demands that life presents, we acknowledge the challenge of finding time to prepare for the future. Hence, our team of skilled experts ensures that the financial planning process remains uncomplicated and efficient. 
                                </p>
                                <p>
                                    We will handle the complex tasks, allowing you to savour life's pleasures both in the present and for years to come.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--End profit improvement box-->
                </div>
            </div>

            @include('services.partials.Sidebar')
        </div>
    </div>
</section>
<!--End Single service area-->

@endsection