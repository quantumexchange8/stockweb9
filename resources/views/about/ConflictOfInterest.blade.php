@extends('master.Master')
@section('content')

<section class="breadcrumb-area" style="background-image: url({{ asset('images/resources/breadcrumb-bg.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="title float-left">
                    <h1>Conflict of Interest.</h1>
                </div>
                <div class="breadcrumb-menu float-right">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        <li class="active">Conflict of Interest</li>
                    </ul>    
                </div>
            </div>
        </div>
	</div>
</section>

<section class="company-overview-area">
    <div class="container">
        <div class="sec-title text-center">
            <div class="title">Conflict of Interest</div>
            <div class="dector thm-bg-clr center"></div>
            <div class="bottom">
                <p>
                    XYZ is required to conduct business activities in a truthful and moral manner, which includes managing any conflicts of interest between personal and business relationships in an ethical manner. 
                </p>
            </div>
        </div>
        <div class="d-flex flex-column">
            <div class="col-12">
                <div class="company-overview-text">
                    <div class="top thm-clr">
                        <h3 class="thm-clr pt-3">Our history of innovation is a source of immense pride, and it has played a crucial role in our success.</h3>
                    </div>
                    <div class="text">
                        <div class="py-2">
                            We are deeply passionate about what we do, and our unwavering focus is on delivering outstanding results in meeting the complex financial needs of our clients. We are dedicated to assisting our clients in realizing the life they envision and creating lasting legacies for future generations.
                        </div>
                        <div class="py-2">
                            In a constantly evolving financial landscape, XYZ ensures that our clients receive top-notch information through continuous innovation. Our dynamic team possesses the ability to navigate any market situation, and we thrive on the challenges we encounter on a daily basis.
                        </div>
                        <div class="py-2">
                            To prevent such conflicts, our stringent code of conduct prohibits any employee from engaging in such activities without obtaining prior approval from XYZ's Ethics Committee. XYZ also adheres to a strict code of conduct regarding harassment and discrimination.
                        </div>
                        <div class="py-2">
                            We ensure equal opportunities for all employees and maintain a zero-tolerance policy towards any form of harassment or discrimination.
                        </div>
                        <div class="py-2">
                            Our workforce comprises individuals from diverse backgrounds, and we do not consider factors such as race, gender, religion, sexual orientation, disability, or any other arbitrary basis that would violate applicable laws when making employment decisions.
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>

@endsection
