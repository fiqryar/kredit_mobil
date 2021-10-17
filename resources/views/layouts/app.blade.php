<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
	@if($title != Null)
	<title>MyCar - {{ $title }}</title>
	@else
	<title>MyCar</title>
	@endif
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/components.css">
	<link rel="stylesheet" href="/css/main.css">
</head>
<body>
<x-navbar></x-navbar>
	{{ $slot }}
<x-footer></x-footer>
<script src="/js/bootstrap.bundle.js"></script>
</body>
</html>