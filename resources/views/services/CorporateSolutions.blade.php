@extends('master.Master')
@section('content')

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('images/resources/breadcrumb-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="title float-left">
                    <h1>Corporate Solutions</h1>
                </div>
                <div class="breadcrumb-menu float-right">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">Corporate Solutions</li>
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
                                    Our team is dedicated to assisting you in maximizing your business potential. We provide a variety of services tailored to enhance the financial stability of your business. We specialize in managing corporate re
                                </p>
                                <a class="btn-one thm-bg-clr" href="#">Start Yours</a>
                            </div>
                        </div>
                    </div>
                    <!--End single ser top content-->

                    <!--Start planning strategies content -->
                    <div class="planning-strategies-content">
                        <div class="sec-title">
                            <h2>Business Valuation Services</h2>
                        </div>
                        <div class="inner-content">
                            <div class="text">
                                <p class="pb-3">
                                    Our business advisory and valuation teams are here to assist business owners in making the crucial decision to sell their firm. We understand the importance of making an informed decision, and that's why we provide the necessary resources to support you. 
                                </p>
                                <p class="pb-3">
                                    With this valuable information, we create personalized retirement planning solutions tailored to your specific goals. Our team of experienced wealth managers takes into consideration various factors such as projected healthcare expenses, income sources, ax rates, social security benefits, and long-term care needs. 
                                </p>
                                <p class="pb-3">
                                    Similar to our comprehensive wealth management offering, our business advisory services offer all the advice you need under one roof, enabling you to make confident decisions about the future of your business.
                                </p>
                            </div>                 
                        </div>
                    </div>

                    <!--Start planning strategies content -->
                    <div class="planning-strategies-content">
                        <div class="sec-title">
                            <h2>For Institutions</h2>
                        </div>
                        <div class="inner-content">
                            <div class="text">
                                <p class="pb-3">
                                    At XYZ, our primary goal is to assist you in accomplishing your mission. We comprehend the significance of your portfolio in bolstering your organization's objectives. 
                                </p>
                                <p class="pb-3">
                                    Our approach to portfolio management is tailored to your specific needs, emphasizing the preservation of value against inflation, addressing your organization's liquidity requirements, and safeguarding the long-term sustainability of your portfolio. 
                                </p>
                                <p class="pb-3">
                                    By consistently prioritizing cost reduction, we endeavour to implement efficient and impactful solutions that enable you to attain your organization's goals.
                                </p>
                            </div>                 
                        </div>
                    </div>

                    <!--Start profit improvement box-->
                    <div class="profit-improvement-box mt-5">
                        <div class="sec-title">
                            <h2>Experienced Professionals</h2>
                        </div>
                        <div class="col-12 pl-0">
                            <div class="text-holder ml-0">
                                <div class="text">
                                    <p>
                                        Our team of seasoned experts possesses extensive knowledge and the required resources to cater to the distinct requirements of institutional clients. By offering comprehensive research and impartial analysis, we deliver tailored solutions to fulfil your organization's needs, both presently and in the foreseeable future.
                                    </p>
                                    <p>
                                        Our services include:
                                    </p>
                                </div>
                                <ul>
                                    <li>
                                        <div class="iocn-box"></div>
                                        <div class="text-box">
                                            <p>
                                                Investment policy statement development and/or review
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iocn-box"></div>
                                        <div class="text-box">
                                            <p>
                                                Grant operations assistance
                                            </p>    
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iocn-box"></div>
                                        <div class="text-box">
                                            <p>
                                                Tax minimisation strategies
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iocn-box"></div>
                                        <div class="text-box">
                                            <p>
                                                Portfolio liquidity management
                                            </p>    
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iocn-box"></div>
                                        <div class="text-box">
                                            <p>
                                                Manager evaluation and selection
                                            </p>    
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iocn-box"></div>
                                        <div class="text-box">
                                            <p>
                                                Research and trustee education
                                            </p>    
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iocn-box"></div>
                                        <div class="text-box">
                                            <p>
                                                Risk management
                                            </p>    
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iocn-box"></div>
                                        <div class="text-box">
                                            <p>
                                                Asset allocation and spending policy analysis
                                            </p>    
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="py-5">
                            <div class="text">
                                <p>
                                    To learn more about how we can assist in reaching your organization's objectives, arrange a free consultation with one of our experienced professionals.
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