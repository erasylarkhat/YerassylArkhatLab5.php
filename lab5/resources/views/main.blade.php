<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="galstyle.css"><link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
	<style>
		header{width: 100%;height: 120px;display: flex;flex-wrap: wrap;
	justify-content: space-between;
}.icon{font-family: 'Courgette', cursive;font-size: 30px;
	margin-top: 30px;margin-left: -100px;}
header .header_right{font-family: 'Courgette', cursive;display: flex;
	margin-right: 0;width: 600px;height: 100px;} 
.links{	font-size: 30px;
	margin-top: 30px;
	cursor: pointer;
}.links:hover{
	font-size: 35px;
	</style>
</head>
<body>
	<header>
		<div class="header_left">
			<div class="icon">
				@earkhat
			</div>
		</div>
		<div class="header_right">
			<div class="links"><a href="{{route('home')}}">Home</a></div>
			<div class="links"><a href="{{route('aboutme')}}">About</a></div>
			<div class="links"><a href="">Pages</a></div>
			<div class="links"><a href="{{route('contactme')}}">Contacts</a></div>
		</div>
		@yield('content')
	</header>
</body>
</html>