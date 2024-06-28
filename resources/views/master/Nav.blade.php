<!-- Top bar area -->
<section class="top-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="top-bar clearfix">
                    <!--Start top left content-->
                    <div class="top-left-content clearfix float-left">
                        <p><span class="icon-mountain thm-clr"></span>For any service business you can trust Fulton... <a href="#">Get a Quote.</a></p>
                    </div>
                    <!--End top left content-->
                    <!--Start top right content-->
                    <div class="top-right-content clearfix float-right">
                        <div class="top-social-box">
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="language-switcher float-right">
                            <div id="polyglotLanguageSwitcher">
                                <form action="#">
                                    <select id="polyglot-language-options">
                                        <option id="en" value="en" selected>English</option>
                                        <option id="fr" value="fr">French</option>
                                        <option id="de" value="de">German</option>
                                        <option id="it" value="it">Italian</option>
                                        <option id="es" value="es">Spanish</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End top right content-->  
                </div>    
            </div>
        </div>
    </div>
</section>
<!--End Top bar area --> 

<header class="header-area stricky">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="inner-content clearfix px-4">
                    <div class="header-left float-left pl-4">
                        <div class="logo">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('images/resources/logo.png') }}" alt="Awesome Logo">
                            </a>
                        </div>
                    </div>
                    <div class="header-middle clearfix float-left">
                        <!--Start mainmenu-->
                        <nav class="main-menu clearfix float-left">
                            <div class="navbar-header clearfix">   	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="{{ route('index') }}">Home</a></li>
                                    <li class="dropdown"><a href="{{ route('about') }}">About Us</a>
                                        <ul>
                                            <li><a href="{{ route('about') }}">Our History</a></li>
                                            <li><a href="{{ route('mission') }}">Mission Statement</a></li>
                                            <li><a href="{{ route('code_of_conduct') }}">Code of Conduct</a></li>
                                            <li><a href="{{ route('conflict_of_interest') }}">Conflict of Interests</a></li>
                                            <li><a href="{{ route('executive_management') }}">Executive Management</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="{{ route('services') }}">Services</a>
                                        <ul>
                                            <li><a href="">Investment Management Philosophy</a></li>
                                            <li><a href="">Bespoke Financial Planning</a></li>
                                            <li><a href="">Retirement Planning</a></li>
                                            <li><a href="">Corporate Solutions</a></li>
                                            <li><a href="">Risk Management</a></li>
                                            <li><a href="">Alternative Investments</a></li>
                                            <li><a href="">Asset Diversification</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('corporate_governance') }}">Corporate Governance</a></li>
                                    <li><a href="{{ route('environmental_policy') }}">Environmental Policy</a></li>
                                    <li><a href="{{ route('privacy_statement') }}">Privacy Statement</a></li>
                                    <li><a href="{{ route('careers') }}">Careers</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!--End mainmenu-->    
                    </div>
                    <div class="header-right float-right">
                        <div class="outer-search-box">
                            <div class="seach-toggle"><i class="fa fa-search"></i></div>
                            <ul class="search-box">
                                <li>
                                    <form method="post" action="index.html">
                                        <div class="form-group">
                                            <input type="search" name="search" placeholder="Search Here" required>
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="contact-us">
                            <span>Need Help? Talk to an Expert</span>
                            <a href="#">+645-789-0123</a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
</header>