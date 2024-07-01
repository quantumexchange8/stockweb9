@extends('master.Master')
@section('content')

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url({{ asset('images/resources/breadcrumb-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="title float-left">
	               <h1>Contact Us</h1>
	            </div>
                <div class="breadcrumb-menu float-right">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">Contact</li>
                    </ul>    
                </div>
            </div>
        </div>
	</div>
</section>
<!--End breadcrumb area--> 

<!--Start contact form area-->
<section class="contact-info-area">
    <div class="container">
        <div class="sec-title text-center">
            <div class="title">Get Touch With Us</div>
            <div class="dector thm-bg-clr center"></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="contact-box-content">
                    <div class="contact-info-box-one">
                        <div class="contact-box1-carousel owl-carousel owl-theme">
                            <!--Start single item-->
                            <div class="single-item">
                                <div class="title"><h3>Corporate Office</h3></div>
                                <ul>
                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-signs thm-clr"></span>
                                        </div>
                                        <div class="text-box">
                                            <p>
                                                <span>Address:</span>
                                                <br> XYZ
                                                <br>xxxx xxxx
                                                <br>xxxx xxxx
                                                <br>xxxx xxxx
                                                <br>Hong Kong
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-technology-1 thm-clr"></span>
                                        </div>
                                        <div class="text-box">
                                            <p><span>Call Us:</span><br> +852 0000 0000</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-multimedia thm-clr"></span>
                                        </div>
                                        <div class="text-box">
                                            <p><span>Mail Us:</span> info@xyz.com</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--End single item-->
                        </div>   
                    </div>    
                </div>    
            </div>
            
        </div>
    </div>
</section>
<!--End contact form area-->

@endsection