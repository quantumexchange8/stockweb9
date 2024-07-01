<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home || Brighton || Responsive HTML 5 Template</title>

	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
	<!-- master stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!--Color Switcher Mockup-->
    <link rel="stylesheet" href="{{ asset('css/color-switcher-design.css') }}">
    <!--Color Themes-->
    <link rel="stylesheet" href="{{ asset('css/color-themes/default-theme.css') }}" id="theme-color-file">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-16x16.png') }}" sizes="16x16">
    
</head>
<body>
<div class="boxed_wrapper">

    {{-- <div class="preloader"></div>  --}}

    <!--Start header area-->
    @include('master.Nav')
    <!--End header area-->

    @yield('content')

    <!--Start footer area--> 
    @include('master.Footer')
    <!--End footer area-->           
</div>  

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target thm-bg-clr" data-target="html"><span class="fa fa-angle-up"></span></div>
<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-gear"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="{{ asset('css/color-themes/default-theme.css') }}"></span>
            <span class="palate teal-color" data-theme-file="{{ asset('css/color-themes/default-theme.css') }}"></span>
            <span class="palate navy-color" data-theme-file="{{ asset('css/color-themes/default-theme.css') }}"></span>
            <span class="palate yellow-color" data-theme-file="{{ asset('css/color-themes/default-theme.css') }}"></span>
            <span class="palate blue-color" data-theme-file="{{ asset('css/color-themes/default-theme.css') }}"></span>
            <span class="palate purple-color" data-theme-file="{{ asset('css/color-themes/default-theme.css') }}"></span>
            <span class="palate olive-color" data-theme-file="{{ asset('css/color-themes/default-theme.css') }}"></span>
            <span class="palate red-color" data-theme-file="{{ asset('css/color-themes/default-theme.css') }}"></span>
        </div>
    </div>

    <div class="palate-foo">
        <span>You can easily change and switch the colors.</span>
    </div>

</div>
<!-- /.End Of Color Palate -->

<!-- main jQuery -->
<script src="{{ asset('js/jquery.js') }}"></script>
<!-- Wow Script -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- bx slider -->
<script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
<!-- count to -->
<script src="{{ asset('js/jquery.countTo.js') }}"></script>
<script src="{{ asset('js/jquery.appear.js') }}"></script>
<!-- owl carousel -->
<script src="{{ asset('js/owl.js') }}"></script>
<!-- validate -->
<script src="{{ asset('js/validation.js') }}"></script>
<!-- mixit up -->
<script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
<!-- isotope script-->
<script src="{{ asset('js/isotope.js') }}"></script>
<!-- Easing -->
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
<!-- Gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--Gmap script-->
<script src="{{ asset('js/gmaps.js') }}"></script>
<script src="{{ asset('js/map-helper.js') }}"></script>
<!-- video responsive script -->
<script src="{{ asset('js/jquery.fitvids.js') }}"></script>
<!-- jQuery ui js -->
<script src="{{ asset('assets/jquery-ui-1.11.4/jquery-ui.js') }}"></script>
<!-- Language Switche  -->
<script src="{{ asset('assets/language-switcher/jquery.polyglot.language.switcher.js') }}"></script>
<!-- jQuery PrettyPhoto js -->
<script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script> 
<!-- jQuery timepicker js -->
<script src="{{ asset('assets/timepicker/timePicker.js') }}"></script>
<!-- Bootstrap select picker js -->
<script src="{{ asset('assets/bootstrap-sl-1.12.1/bootstrap-select.js') }}"></script> 
<!-- html5lightbox js -->                              
<script src="{{ asset('assets/html5lightbox/html5lightbox.js') }}"></script>
<!--Color Switcher-->
<script src="{{ asset('js/color-settings.js') }}"></script>
<!--Particles -->
<script src="{{ asset('js/particles.min.js') }}"></script>

<!--revolution slider js -->
<script src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js')}} "></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}} "></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

<!-- thm custom script -->
<script src="{{ asset('js/particles-config.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>



</body>
</html>