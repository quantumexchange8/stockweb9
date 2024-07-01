@extends('master.Master')
@section('content')

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('images/resources/breadcrumb-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="title float-left">
                    <h1>Retirement Planning</h1>
                </div>
                <div class="breadcrumb-menu float-right">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">Retirement Planning</li>
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
                                    XYZ, when combined with your input, will generate a well-defined roadmap to assist you in realizing your retirement aspirations. 
                                </p>
                                <p>
                                    Our aim is to ensure that you can retire with confidence by providing you with comprehensive and results-oriented plans. Retirement planning holds significant importance within your overall financial strategy. This is why we adopt a comprehensive approach, led by financial planning, to develop a personalized retirement plan that aligns with your broader financial goals and helps you achieve them in the long run. 
                                </p>
                                <p>
                                    Keeping your retirement dreams at the forefront, we leverage the expertise of our in-house teams of financial, tax, and legal specialists. 
                                </p>
                                <p>
                                    They work together to create, monitor, and regularly update your retirement plan, ensuring that it caters to your desired lifestyle during retirement.
                                </p>
                                <a class="btn-one thm-bg-clr" href="#">Start Yours</a>
                            </div>
                        </div>
                    </div>
                    <!--End single ser top content-->

                    <!--Start profit improvement box-->
                    <div class="profit-improvement-box">
                        <div class="sec-title">
                            <h2>Processes</h2>
                        </div>
                        <div class="col-12">
                            <div class="text-holder ml-0">
                                <div class="text">
                                    <p>
                                        Our process includes:
                                    </p>
                                </div>
                                <ul>
                                    <li>
                                        <div class="iocn-box"></div>
                                        <div class="text-box">
                                            <p>
                                                Reviewing your financial situation and current retirement plans, tax, life insurance and social security, health care and estate.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iocn-box"></div>
                                        <div class="text-box">
                                            <p>
                                                Determining what retirement account assets are available and how to invest them in a manner that complements your overall investment portfolio.
                                            </p>    
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iocn-box"></div>
                                        <div class="text-box">
                                            <p>
                                                Implementing custom tax planning strategies to help optimise your savings and maximise your retirement income.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iocn-box"></div>
                                        <div class="text-box">
                                            <p>
                                                Developing a tax-efficient withdrawal strategy to achieve your lifestyle goals.
                                            </p>    
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iocn-box"></div>
                                        <div class="text-box">
                                            <p>
                                                Establishing estate planning and gifting strategies to efficiently transfer wealth to your heirs and/or a favourite charity.
                                            </p>    
                                        </div>
                                    </li>
                                    <li>
                                        <div class="iocn-box"></div>
                                        <div class="text-box">
                                            <p>
                                                Regularly reviewing and updating your retirement plan as necessary to keep up with your life goals as they evolve over time.
                                            </p>    
                                        </div>
                                    </li>
                                </ul>
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

                    <!--Start planning strategies content -->
                    <div class="planning-strategies-content">
                        <div class="sec-title">
                            <h2>Turning Your Retirement Dreams Into Reality</h2>
                        </div>
                        <div class="inner-content">
                            <div class="text">
                                <p class="pb-3">
                                    At XYZ, we are dedicated to being your trusted partner in retirement planning. Our first step is to fully understand your aspirations and desires for retirement, as well as your current progress towards achieving them.
                                </p>
                                <p class="pb-3">
                                    With this valuable information, we create personalized retirement planning solutions tailored to your specific goals. Our team of experienced wealth managers takes into consideration various factors such as projected healthcare expenses, income sources, tax rates, social security benefits, and long-term care needs. 
                                </p>
                                <p class="pb-3">
                                    We firmly believe that your retirement plan should be as exceptional as your vision for the future. Whether you envision yourself embarking on a global cruise, starting a business, purchasing a second home, or simply cherishing quality time with loved ones, we possess the necessary resources and expertise to guide you towards realizing your dreams.
                                </p>
                            </div>                 
                        </div>
                    </div>
                </div>
            </div>

            @include('services.partials.Sidebar')
        </div>
    </div>
</section>
<!--End Single service area-->

@endsection