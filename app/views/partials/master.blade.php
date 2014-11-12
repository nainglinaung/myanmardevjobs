<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
	<link rel="stylesheet" type="text/css" href="/assert/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/assert/css/jumbotron-narrow.css">
</head>
<body>
	@include('partials.navigation')

		@yield('content')

	@include('partials.footer')
	<script type="text/javascript" src="/assert/js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="/assert/js/bootstrap.js"></script>
	<script type="text/javascript" src="/assert/js/app.js"></script>
</body>
</html>