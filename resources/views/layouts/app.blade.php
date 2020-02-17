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
					<button class="header__nav-btn" id="header-nav-btn">
            <span class="header__nav-btn__line header__nav-btn__line--first"></span>
            <span class="header__nav-btn__line header__nav-btn__line--second"></span>
            <span class="header__nav-btn__line header__nav-btn__line--third"></span>
            <span class="header__nav-btn__text"></span>
        	</button>
				</div>
			</header>

			<nav class="nav" id="nav-menu">
				<div class="nav__wrap">
					<ul class="nav__items">
						<li class="nav__item">
							<a class="nav__link nav__link--current HomePage" href="/">Home</a>
						</li>
						<li class="nav__item">
							<a class="nav__link nav__link--link AccommodationListingsPage" href="/accommodation/">Accommodation</a>
						</li>
						<li class="nav__item">
							<a class="nav__link nav__link--link ServiceListingsPage" href="/good-services/">Good Services</a>
						</li>
						<li class="nav__item">
							<a class="nav__link nav__link--link BusinessListingsPage" href="/we-recommend/">We Recommend</a>
						</li>
						<li class="nav__item">
							<a class="nav__link nav__link--link FAQsPage" href="/faq/">FAQ</a>
						</li>
						<li class="nav__item">
							<a class="nav__link nav__link--link AboutPage" href="/about-us/">About Us</a>
						</li>
						<li class="nav__item">
							<a class="nav__link nav__link--link ReviewsPage" href="/reviews/">Guest Reviews</a>
						</li>
						<li class="nav__item">
							<a class="nav__link nav__link--link SilverStripe\Blog\Model\Blog" href="/good-news/">Good News</a>
						</li>
						<li class="nav__item">
							<a class="nav__link nav__link--link InstagramPage" href="/instagram/">Instagram</a>
						</li>
						<li class="nav__item">
							<a class="nav__link nav__link--link EventsPage" href="/events/">Events</a>
						</li>
						<li class="nav__item">
							<a class="nav__link nav__link--link ContactPage" href="/contact-us/">Contact Us</a>
						</li>
						<li class="nav__item">
							<a class="nav__link nav__link--link HomeOwnersPage" href="/home-owners/">Home Owners</a>
						</li>
						<li class="nav__item">
							<a class="nav__link nav__link--link OwnerSupportPage" href="/home-owner-support/">Home Owner Support</a>
						</li>
						<li class="nav__item">
							<a class="nav__link nav__link--link SilverStripe\CMS\Model\RedirectorPage" href="https://owner.escapia.com/1491" target="_blank">Owner Log-in (Queenstown)</a>
						</li>
						<li class="nav__item">
							<a class="nav__link nav__link--link SilverStripe\CMS\Model\RedirectorPage" href="https://owner.escapia.com/2140" target="_blank">Owner Log-in (Wanaka)</a>
						</li>
						<li class="nav__item">
							<a class="nav__link nav__link--link Page" href="/terms-and-conditions/">Terms &amp; Conditions</a>
						</li>
					</ul>
				</div>
			</nav>

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
