@extends('master.Master')
@section('content')

<!--Start breadcrumb area-->
<section class="breadcrumb-area" style="background-image: url({{ asset('images/resources/breadcrumb-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="title float-left">
                    <h1>Privacy Statement</h1>
                </div>
                <div class="breadcrumb-menu float-right">
                    <ul>
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">Privacy Statement</li>
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
                                    XYZ collects the personally identifiable information (“PII”), such as your name, email address, postal address, telephone number, company title, company name, subscription and billing information including credit card details that you voluntarily provide when you complete the registration forms, or when you provide other information through our website or via email, or we receive it indirectly from our Business Partners and other financial institutions. 
                                </p>
                                <p>
                                    We do not accept faux identity or under a pseudonym as it is impractical and, in some circumstances, it is illegal to deal with unidentifiable user. For the PII that we obtain from our Business Partners, that information may be subject to the privacy policy of the Business Partners. 
                                </p>
                                <p>
                                    When we collect the PII directly from you, via our Business Partners or Third Party, it will be kept on the secure servers and be ensured the integrity of the information. In order to help protecting your privacy, your logon username and password should not be disclosed or shared with others. You may opt out on using your personal information covered by this Privacy Policy to provide you with special promotion, offer and information.
                                </p>
                                <p>
                                    When visiting our Site by signing up via other social media sites, we may collect your IP address and may collect the cookies and web beacons, and such allow us to maintain information of site visits, user preferences and to understand browsing activities. If you disable the cookies, you may still able to access our Site; however, the functionality offered by the Site may be limited.
                                </p>
                                <p>
                                    XYZ contains links to third-party websites, and we are not responsible for the contents, advertising, products, or any other links or materials contained in third-party websites. Our privacy policy does not extend to the third-party websites, and we encourage you to read the privacy policy on the third-party website before proceeding to provide your information on the website.
                                </p>
                                <p>
                                    Upon request, we will remove your and your PII from the database and thereby cancelling your registration, or correct the PII that you state is erroneous. Otherwise, we will retain your PII as long as your account is active and to comply with our legal obligations and to enforce our agreements.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--End single ser top content-->
                    <!--Start planning strategies content -->
                    <div class="planning-strategies-content">
                        <div class="sec-title">
                            <h2>Use of Cookies</h2>
                        </div>
                        <div class="inner-content">
                            <div class="text">
                                <p>
                                    In accessing the Our Web Portal, we may also utilise “cookies” to enable Us to monitor traffic patterns and to serve You more efficiently.
                                </p><br />
                                <p>
                                    Cookies are small data files which are placed on Your computer by web servers when You visit certain websites. The Our Web Portal uses cookies to allow us to identify regular visitors and collects information about Your usage of the website. A cookie does not identify You personally, but it does identify Your computer. You can set Your internet browser to notify You when You receive a cookie and this will provide You with an opportunity to either accept or reject it in each instance.
                                </p>
                                <p>
                                    Cookies are small files that are downloaded to the device you use to visit a website. They are generally used to help improve visitors’ experiences on the site, by, for instance, remembering preferences, log in information, or otherwise recognizing that they have visited the site previously (or are the same user during a single visit). They are also used by website owners to make improvements to the site based on visitor behaviour. In some cases, they are used to collect and store information about specific users.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Single service area-->

@endsection