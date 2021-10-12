<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
        <title>NCR HOUSING | ADMIN</title>
		
		<!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->

		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin=""/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
  
		<!-- Custom CSS -->
        <link href="{{asset('assets/site/css/styles.css') }}" rel="stylesheet">
		<link href="{{asset('assets/site/css/plugins/slick.css') }}">
		<link href="{{asset('assets/site/css/plugins/slick-theme.css') }}">
		<link href="{{asset('assets/site/css/loader.css')}}" rel="stylesheet">

		<input id="url" type="hidden" value="{{env('API_URL')}}">
		<input id="cookie" type="hidden" value="<?php echo $_COOKIE["token"];?>">

        @yield('custom_css')
</head>
<body>
    @include('front.layout.admin.header')

    @yield('content')

    @include('front.layout.admin.footer')

    <!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
		<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
	integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
	crossorigin=""></script>


		<script src="{{asset('assets/site/js/jquery.min.js') }}"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<!-- <script src="assets/js/owl.carousel.min.js"></script> -->
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="{{asset('assets/site/js/popper.min.js') }}"></script>
		<script src="{{asset('assets/site/js/bootstrap.min.js') }}"></script>
		<script src="{{asset('assets/site/js/rangeslider.js') }}"></script>
		<script src="{{asset('assets/site/js/select2.min.js') }}"></script>
		<script src="{{asset('assets/site/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{asset('assets/site/js/slick.js') }}"></script>
		<script src="{{asset('assets/site/js/slider-bg.js') }}"></script>
		<script src="{{asset('assets/site/js/lightbox.js') }}"></script> 
		<script src="{{asset('assets/site/js/imagesloaded.js') }}"></script>
		 
		<script src="{{asset('assets/site/js/custom.js') }}"></script>
		<!-- <script src="{{asset('assets/site/js/cl-switch.js')}}"></script> -->

	@yield('custom_js')
			
</body>
</html>