<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Shop Homepage - Start Bootstrap Template</title>

	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="/css/shop-homepage.css" rel="stylesheet">
</head>
<body>
	<header>
		@include('layouts.html_header')
	</header>

	<section>
		@yield('content')
	</section>

	<footer>
		@include('layouts.html_footer')
	</footer>
	

	
	<script src="/js/jquery.min.js"></script>
  	<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>