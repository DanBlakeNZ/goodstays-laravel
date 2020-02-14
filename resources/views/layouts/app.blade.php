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
			<header class="header header--light header--scrolled">
				<div class="header__wrap">
					<!-- Header Logo -->
					<div class="header__logo">
						<a class="header__logo__wrap" href="/">
							<img class="header__logo__image" src="https://res.cloudinary.com/dblakenzcloud/image/upload/v1581653006/Goodstays/logo-white.svg" alt="Goodstays">
						</a>
					</div>

					<!-- Header icons -->
					<ul class="header__icons">
						<li class="header__icons__item">
							<a class="header__icons__icon" href="https://www.facebook.com/goodstays/" target="_blank">
								<i class="fab fa-facebook-f"></i>
							</a>
						</li>
						<li class="header__icons__item">
							<a class="header__icons__icon" href="https://www.instagram.com/goodstays/" target="_blank">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
						<li class="header__icons__item">
							<span class="header__icons__icon">
								<i class="fas fa-phone-square"></i>
							</span>
						</li>
						<li class="header__icons__item">
							<a class="header__icons__icon" href="/contact-us/" target="_blank">
								<i class="fas fa-map-marker-alt"></i>
							</a>
						</li>
					</ul>

					<!-- Header Menu Button -->
					<button class="header__nav-btn">
            <span class="header__nav-btn__line header__nav-btn__line--first"></span>
            <span class="header__nav-btn__line header__nav-btn__line--second"></span>
            <span class="header__nav-btn__line header__nav-btn__line--third"></span>
            <span class="header__nav-btn__text"></span>
        	</button>
				</div>
			</header>

			<main class="page-content-wrapper">
				@yield('content')
			</main>
		</div>
	</body>
</html>
