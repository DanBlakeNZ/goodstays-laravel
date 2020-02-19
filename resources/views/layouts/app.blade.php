<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Laravel') }}</title>

		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}" defer></script>

		<!-- Fonts -->
		<link rel="dns-prefetch" href="//fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/a92ea2676b.js" crossorigin="anonymous"></script>

		<!-- Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	</head>
	<body>
		<div id="app">

			@include('components.header')

			@include('components.nav')

			<main class="page-content-wrapper">
				@yield('content')
			</main>
		</div>
	</body>

	<script type="text/javascript">
		var navButton = document.getElementById("header-nav-btn");
		var navMenu = document.getElementById("nav-menu");

		navButton.addEventListener("click", toggleMenuNav);

		function toggleMenuNav (){
			navButton.classList.toggle("header__nav-btn--active");
			navMenu.classList.toggle("nav--open");
		}
	</script>
</html>
