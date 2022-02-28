<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>CV</title>
	<meta name="description" content="">
	<meta name="AAB" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="{{ asset('front/css/default.css') }}">
	<link rel="stylesheet" href="{{ asset('front/css/layout.css') }}">
   <link rel="stylesheet" href="{{ asset('front/css/media-queries.css') }}">
   <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">

   <!-- Script
   ================================================== -->
	<script src="{{ asset('front/js/modernizr.js') }}"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="{{ asset('front/favicon.png') }}" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="home">

      {{-- Navbar --}}
      @include('front.layouts.navbar')
      {{-- End Navbar --}}

     {{-- Banner --}}
     @include('front.layouts.banner')
     {{-- End Banner --}}

   </header> <!-- Header End -->


   <!-- About Section
   ================================================== -->
   @include('front.about')
   
   <!-- About Section End-->


   <!-- Resume Section
   ================================================== -->
   @include('front.resume')
   
   <!-- Resume Section End-->


   <!-- Portfolio Section
   ================================================== -->
   @include('front.portfolio') 
   
   <!-- Portfolio Section End-->


   <!-- Contact Section
   ================================================== -->
   @include('front.contact') 
   
   <!-- Contact Section End-->


   <!-- footer
   ================================================== -->
   @include('front.layouts.footer') 
   
   <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="{{ asset('front/js/jquery-migrate-1.2.1.min.js') }}"></script>

   <script src="{{ asset('front/js/jquery.flexslider.js') }}"></script>
   <script src="{{ asset('front/js/waypoints.js') }}"></script>
   <script src="{{ asset('front/js/jquery.fittext.js') }}"></script>
   <script src="{{ asset('front/js/magnific-popup.js') }}"></script>
   <script src="{{ asset('front/js/init.js') }}"></script>

</body>

</html>