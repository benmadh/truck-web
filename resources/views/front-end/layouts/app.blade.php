<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" href="favicon.ico">
    <!-- JqueryUI -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/jquery-ui.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/boostrap/bootstrap.min.css') }}">
    <!-- Awesome font icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/font-awesome.min.css') }}">
    <!--magnific popup-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/magnific-popup/magnific-popup.css') }}"
        media="screen" />
    <!-- Owlcoursel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/owl-coursel/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/owl-coursel/owl.theme.css') }}">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/style.css') }}">
    <!-- Padding / Margin -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/padd-mr.css') }}">
    <!-- light version-->
	<link id="vers" rel="stylesheet" type="text/css" href="{{ asset('front-end/css/light-version.css') }}">
	<!-- Boxed-->
	<link id="boxed" rel="stylesheet" type="text/css" href="{{ asset('front-end/css/boxed.css') }}">

    <link id="boxed" rel="stylesheet" type="text/css" href="{{ asset('front-end/css/custom.css') }}">
</head>

<body class="bg-1">
    <div class="preloader">
        <p></p>
    </div>
    <div id="wrap" class="color1-inher">
        <header id="wrap-header" class="color-inher h-500 h-box-auto h-xs-auto">
            @include('front-end.inc.navbar')
        </header>

        <div id="wrap-body" class="p-t-lg-30">
			<div class="container">
				<div class="wrap-body-inner">
					@yield('content')
				</div>
			</div>
        </div>

        <footer id="wrap-footer" class="bg-gray-1 color-inher">
            @include('front-end.inc.footer')
        </footer>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('front-end/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- JqueryUI -->
    <script src="{{ asset('front-end/js/jquery/jquery-ui.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('front-end/js/bootstrap/bootstrap.min.js') }}"></script>
    <!--magnific popup-->
    <script src="{{ asset('front-end/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!-- Jquery.counterup -->
    <script src="{{ asset('front-end/js/jquery.counterup/waypoints.min.js') }}"></script>
    <script src="{{ asset('front-end/js/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <!-- Owl-coursel -->
    <script src="{{ asset('front-end/js/owl-coursel/owl.carousel.js') }}"></script>
    <!-- Script -->
    <script src="{{ asset('front-end/js/script.js') }}"></script>
</body>

</html>
