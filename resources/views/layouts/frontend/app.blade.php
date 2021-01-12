<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ Setting('title')->content }}</title>
        <meta name="description" content="Admin | {!! Setting('sejarah')->content !!}">
        <meta name="keywords" content="{{ Setting('title')->content }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon Icon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset(Setting('favicon')->file) }}">
		
		<!-- All css here -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/jquery.circliful.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
        <script src="{{ asset('frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
        
        
		<!-- Header Area Start -->
		    @include('layouts.frontend.partials.app.header')                           
		<!-- Header Area End -->
        <!-- Sidebar Start -->
            @include('layouts.frontend.partials.app.sidebar')
        <!-- Sidebar Start -->

        <!-- Content Start -->
            @yield('content')
        <!-- Content Start -->
		
        <!-- Footer start -->
            @include('layouts.frontend.partials.app.footer')
        <!-- Footer end -->
        <!-- Map Area Start -->
        <div class="google-map-area three">
        <!--  Map Section -->
            <div id="contacts" class="map-area">
                {{-- <div id="googleMap" style="width:100%;height:205px;"></div> --}}
            </div>
        </div>
        <!-- Map Area End -->
       
		<!-- All js here -->
        <script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/js/ajax-mail.js') }}"></script>  
        <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script> 
        <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>  
        <script src="{{ asset('frontend/js/jquery.magnific-popup.js') }}"></script>  
        <script src="{{ asset('frontend/js/plugins.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsT3oo7hsDHBypdmwtfy_dkhWAKb2fb8I "></script> 
        <script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', init);
            function init() {
                var mapOptions = {
                    zoom: 11,
                    center: new google.maps.LatLng(-6.982369679981906, 110.41326196353191), // New York
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };
                var mapElement = document.getElementById('googleMap');
                var map = new google.maps.Map(mapElement, mapOptions);
                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation:google.maps.Animation.BOUNCE,
                    icon: '{{ asset('frontend/img/map-marker-two.png') }}',
                    map: map
                });
            }
        </script>
        <script src="{{ asset('frontend/js/main.js') }}"></script>
    </body>
</html>
