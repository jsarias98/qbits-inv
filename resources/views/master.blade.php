<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	{!! Html::style('assets/css/bootstrap-theme.min.css') !!}
	{!! Html::style('assets/css/bootstrap.min.css') !!}
	{!! Html::style('assets/css/style.css') !!}
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	@yield('content')

	{!! Html::script('assets/js/jquery-1.12.0.min.js') !!}
	{!! Html::script('assets/js/bootstrap.min.js') !!}
</body>
</html>