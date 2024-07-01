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
                        <li><a href="{{ route('index') }}">Home</a></li>
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
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex align-items-stretch">
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

                <!--Start single item member-->
                <div class="single-team-member">
                    <div class="img-holder">
                        <img src="{{ asset('images/team/1.jpg') }}" alt="Awesome Image">
                    </div>
                    <div class="text-holder">
                        <h3>Gregory<br> Lewis</h3>
                        <span class="thm-clr">Chief Operating Officer</span>
                        <div class="text">
                            <p>
                                Gregory Lewis is XYZ's Chief Operating Officer, a role he has held since 20XX. Mr. Lewis is responsible for overseeing the key operating units of XYZ, including investment, risk analysis, research, client services and technology.
                            </p>
                            <p>
                                Mr. Lewis joined XYZ in 20XX to head up the team responsible for the development of XYZ's proprietary trading and investment platform.  He became Chief Operating Officer in 20XX and has since been responsible for many innovative reforms of XYZ’s business processes. Prior to joining XYZ, Mr. Lewis worked for Coutts & Co. of London for 10 years.
                            </p>
                            <p>
                                Mr. Lewis earned a BSc in Computer Science and Statistics from the University of Glasgow and an MSc in Economics from the London School of Economics.
                            </p>
                        </div>
                    </div>
                </div>
                <!--End single item member-->

                <!--Start single item member-->
                <div class="single-team-member">
                    <div class="img-holder">
                        <img src="{{ asset('images/team/1.jpg') }}" alt="Awesome Image">
                    </div>
                    <div class="text-holder">
                        <h3>Jessica<br> Lau</h3>
                        <span class="thm-clr">Chief Risk Officer</span>
                        <div class="text">
                            <p>
                                Jessica Lau has served as XYZ's Chief Risk Officer since 20XX. She is responsible for the operational and investment risk relating to all of XYZ's managed assets and leads the Risk & Analysis Group of XYZ.
                            </p>
                            <p>
                                Prior to becoming Chief Risk Officer, Ms. Lau was a member of XYZ's risk advisory unit since the company's founding in 20XX and lead it from 20XX until she took up her current role in 20XX.
                            </p>
                            <p>
                                Ms. Lau holds a BSc in Quantitative Finance in Risk Management from the Chinese University of Hong Kong and an MSc in Financial Mathematics from the Hong Kong University of Science and Technology.
                            </p>
                        </div>
                    </div>
                </div>
                <!--End single item member-->

                <!--Start single item member-->
                <div class="single-team-member">
                    <div class="img-holder">
                        <img src="{{ asset('images/team/1.jpg') }}" alt="Awesome Image">
                    </div>
                    <div class="text-holder">
                        <h3>Vivian<br> Chen</h3>
                        <span class="thm-clr">Director of Operations</span>
                        <div class="text">
                            <p>
                                Vivian joined XYZ in 20XX and her responsibilities include the management of all our operations, especially our non-investment related operations.
                            </p>
                            <p>
                                Vivian has spent sixteen years since graduation working her way from back-office administration positions, to compliance officer and business development manager.
                            </p>
                            <p>
                                Vivian has a strong focus on the integration of IT systems and her responsibilities include ensuring our investment team has all the necessary support and infrastructure required.
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