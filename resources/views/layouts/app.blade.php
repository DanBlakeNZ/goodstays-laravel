<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	@include('includes.head')

	<body>
		<div id="app">
			
			{{-- @include('includes.header')
			@include('includes.nav') --}}

			<main class="page-content-wrapper">
				@yield('content')
			</main>
		</div>
	</body>

	@yield ('header-scripts')
	@yield ('page-scripts')
</html>
