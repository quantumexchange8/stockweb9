@extends('master.Master')
@section('content')

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('images/resources/breadcrumb-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="title float-left">
                    <h1>Environmental Policy</h1>
                </div>
                <div class="breadcrumb-menu float-right">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">Environmental Policy</li>
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
                            <h2>Environmental Policy</h2>
                        </div>
                        <div class="inner-content">
                            <div class="text-holder">
                                <p>
                                    At XYZ, we have a profound understanding of our environmental responsibility. As the world grapples with the challenges of climate change, there is a growing demand for companies to minimize their impact and drive positive change in resource consumption. 
                                </p>
                                <p>
                                    We continuously make adjustments to align ourselves with the interests of our clients and the global community, striving to become more sustainable. To consistently strive for improvement, we conduct an annual energy review to assess our energy efficiency and internal practices. 
                                </p>
                                <p>
                                    Based on the findings of these reviews, we have transitioned to renewable energy sources whenever possible, implemented energy-saving policies in our offices, and utilized technologies to reduce our overall consumption. In recent years, we have embraced paperless communications, increased our recycling efforts throughout the company, and offset our carbon footprint by investing in and supporting projects that reduce carbon emissions.
                                </p>
                                <p>
                                    Additionally, we have introduced a green transportation program that encourages our employees to utilize public transport. In addition to making internal changes, we actively involve our partners and stakeholders in this journey.
                                </p>
                                <p>
                                    Through various awareness campaigns and partnerships with organizations dedicated to addressing climate change, we are highlighting the challenges we face and actively contributing to finding solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--End single ser top content-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Single service area-->

@endsection