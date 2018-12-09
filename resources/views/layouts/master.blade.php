<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<!-- Latest compiled and minified CSS -->
	@yield('styles')
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="/css/shop-homepage.css" rel="stylesheet">

	<link rel="stylesheet" href="{{ URL::to('src/css/apph.css') }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<header>
		@include('layouts.html_header')
	</header>

	<section>
		@yield('content')
	</section>

	<footer>
		@include('layouts.html_footer2')
	</footer>
	
	<script src="/js/jquery.min.js"></script>
  	<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>