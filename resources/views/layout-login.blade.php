<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	{!! Html::style('assets/css/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome.css') !!}
	{!! Html::style('assets/css/bootstrap.min.css') !!}
	{!! Html::script('assets/js/jquery-3.2.1.min.js') !!}
	{!! Html::script('assets/js/popper.min.js') !!}
	{!! Html::script('assets/js/bootstrap.min.js') !!}
	{!! Html::script('assets/js/all.js') !!}
	{!! Html::style('css/login.css') !!}
</head>
<body>
	<div class="container">
		<div class="col-md-12">
			@yield('content')
		</div>
	</div>
</body>
</html>
