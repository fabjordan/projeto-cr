<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Cartórios Roraima') }}</title>

	@include('base.head')

</head>
<body>

	@include('base.navbar')
	
	<div class="wrapper">
		<main class="default-transition">
			@include('base.sidebar')
			@yield('content')
		</main>
	</div>

	@include('base.footer')
	@include('base.scripts')
	@yield('js-init')

</body>
</html>