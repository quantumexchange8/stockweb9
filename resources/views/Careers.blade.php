@extends('master.Master')
@section('content')

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('images/resources/breadcrumb-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="title float-left">
                    <h1>Careers</h1>
                </div>
                <div class="breadcrumb-menu float-right">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">Careers</li>
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
            <div class="col-12">
                <div class="content-box">
                    <!--Start single ser top content-->
                    <div class="single-ser-top-content">
                        <div class="sec-title">
                            <h2>Introduction</h2>
                        </div>
                        <div class="inner-content">
                            <div class="text-holder">
                                <p>
                                    The wide array of talent and experience present in XYZ is crucial for us to provide a range of services with a high level of expertise. 
                                </p>
                                <p>
                                    We hire exceptional individuals who consistently enhance and broaden the skills we use daily to create tailored strategies for client success. Ever since our inception, we have been committed to assisting clients worldwide in reaching their objectives. 
                                </p>
                                <p>
                                    As the global financial landscape evolves, we must also adapt, which is why we are constantly seeking motivated, skilled professionals with fresh perspectives and innovative ideas. XYZ has established a strong reputation by upholding our fundamental values and engaging in responsible investment practices. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--End single ser top content-->

                    <!--Start profit improvement box-->
                    <div class="profit-improvement-box mt-5">
                        <div class="sec-title">
                            <h2>Criteria</h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-10">
                                <div class="img-holder">
                                    <img src="{{ asset('images/services/service-single/introduction.jpg') }}" alt="Awesome Image">
                                </div>     
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="text-holder">
                                    <div class="text">
                                        <p>
                                            Prospective employees must exhibit a dedication to these values, which serve as the cornerstone of our business:
                                        </p>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="iocn-box"></div>
                                            <div class="text-box">
                                                <p>Collaboration</p>    
                                                <p>
                                                    Our culture revolves around collaboration. We collaborate as a cohesive team to accomplish our clients' goals. 
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="iocn-box"></div>
                                            <div class="text-box">
                                                <p>Responsibility</p>
                                                <p>
                                                    Our actions carry weight. We are responsible for engaging in responsible investments and upholding the highest standards of professionalism. 
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="iocn-box"></div>
                                            <div class="text-box">
                                                <p>Integrity</p>
                                                <p>
                                                    Our exceptional reputation is founded on integrity. We must act with transparency and never compromise our principles.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="iocn-box"></div>
                                            <div class="text-box">
                                                <p>Equality</p>
                                                <p>
                                                    Every individual is equally valued. We embrace diversity at XYZ and advocate for equality throughout the organization. If you believe you possess the qualities to enhance our team, please reach out to us.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <!--End profit improvement box-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Single service area-->

@endsection