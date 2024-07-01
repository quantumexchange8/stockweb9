@extends('master.Master')
@section('content')

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('images/resources/breadcrumb-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="title float-left">
                    <h1>Asset Diversification</h1>
                </div>
                <div class="breadcrumb-menu float-right">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">Asset Diversification</li>
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
                                    Over the years, at XYZ, we have discovered that the key element for successful investment management is diversifying your capital across various asset classes. 
                                </p>
                                <p>
                                    At XYZ, we thoroughly analyze each asset class, considering the current market and global economy, as well as referencing historical market conditions to identify market trends. 
                                </p>
                                <p>
                                    Through this proven process, XYZ is able to pinpoint and prioritize specific asset classes, enabling us to guide our clients towards achieving their financial goals.
                                </p>
                                <a class="btn-one thm-bg-clr" href="#">Start Yours</a>
                            </div>
                        </div>
                    </div>
                    <!--End single ser top content-->
                    <!--Start planning strategies content -->
                    <div class="planning-strategies-content">
                        <div class="sec-title">
                            <h2>Identifying Asset Classes</h2>
                        </div>
                        <div class="inner-content">
                            <div class="text">
                                <p class="pb-3">
                                    It can be quite challenging to determine the appropriate asset class. At XYZ, we thoroughly analyze and emphasize the advantages of each sector in order to offer the most favourable risk-adjusted returns. 
                                </p>
                                <p class="pb-3">
                                    Each investor has unique goals and objectives, which is why XYZ, with its team of experts, is capable of providing clients with access to global markets rather than just private equity options. 
                                </p>
                                <p class="pb-3">
                                    Historical evidence indicates that alternative investments, mutual funds, and ETFs can serve as valuable additions to traditional equity and fixed income investments. They also provide dynamic methods of diversification across various asset classes.
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