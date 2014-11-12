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
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "833f5848-c6a3-4673-8061-d41e6e2a9371", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</body>
</html>