@extends('master.Master')
@section('content')

<section class="breadcrumb-area" style="background-image: url({{ asset('images/resources/breadcrumb-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="title float-left">
                    <h1>The Team Behind.</h1>
                </div>
                <div class="breadcrumb-menu float-right">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">Executive Management</li>
                    </ul>    
                </div>
            </div>
        </div>
	</div>
</section>

<section class="team-area">
    <div class="container">
        <div class="sec-title text-center">
            <div class="title">Executive Management</div>
            <div class="dector thm-bg-clr center"></div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <!--Start single item member-->
                <div class="single-team-member">
                    <div class="img-holder">
                        <img src="{{ asset('images/team/1.jpg') }}" alt="Awesome Image">
                    </div>
                    <div class="text-holder">
                        <h3>Richard<br> Hastings</h3>
                        <span class="thm-clr">Chief Executive Officer</span>
                        <div class="text">
                            <p>
                                Richard Hastings has acted as XYZ's Chief Executive Officer since its founding in 2002, keeping innovation and client focused solutions central to his leadership. 
                            </p>
                            <p>
                                Prior to founding XYZ in 2002, Mr. Hastings worked for Goldman Sachs in New York for 18 years, holding a number of senior positions across their retail investment arm, particularly in their fixed income division, and contributing to several management committees. 
                            </p>
                            <p>
                                Mr. Hastings earned a BA with a finance major from Pennsylvania State University and an MBA from Columbia University, City of New York.
                            </p>
                        </div>
                    </div>
                </div>
                <!--End single item member-->
            </div>     
        </div>
    </div>
</section>

@endsection