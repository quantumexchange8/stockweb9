@extends('master.Master')
@section('content')

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('images/resources/breadcrumb-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="title float-left">
                    <h1>Alternative Investments</h1>
                </div>
                <div class="breadcrumb-menu float-right">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">Alternative Investments</li>
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
                                    Alternative investments provide individual investors with the opportunity to achieve higher returns while minimizing risk exposure. In today's modern era, accessing alternative investments has become easier, thanks to the availability of mutual funds and exchange-traded funds (ETFs) that focus on alternative strategies in the market. 
                                </p>
                                <p>
                                    These alternative investments typically include real estate, currency, and commodities. They are designed to offer investors a diversified portfolio with reduced overall risk. 
                                </p>
                                <p>
                                    There is a wide range of alternative funds to choose from when it comes to alternative investments. These funds employ various strategies across different asset classes. 
                                </p>
                                <p>
                                    It is crucial to consider how alternative investments fit into your overall portfolio and how they contribute to your financial goals. Additionally, it is important to assess the potential returns and risks associated with these investments. 
                                </p>
                                <p>
                                    Historically, alternative investments, mutual funds, and ETFs have proven to be valuable additions to traditional equity and fixed income investments. They provide dynamic diversification across various asset classes.
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