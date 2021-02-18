<!DOCTYPE html>
<html>
<head>
	<title>lab5</title>
	<link rel="stylesheet" type="text/css" href="style.css"><link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
<style>
	*{background-color: #f8f1f1;margin: 0 auto;padding: 0;font-family: 'Courgette', cursive;}header{width: 100%;
	height: 120px;display: flex;flex-wrap: wrap;justify-content: space-between;}.icon{font-size: 30px;
	margin-top: 30px;margin-left: -100px;}header .header_right{display: flex;margin-right: 0;width: 600px;
	height: 100px;} .links{font-size: 30px;margin-top: 30px;cursor: pointer;}.links:hover{font-size: 35px;}
.content{height: 700px;width: 100%;max-width: 1400px;}.top_content{margin-top: 50px;display: flex;justify-content: space-between;}.left_content{font-size: 40px;margin-top: 100px;}.btns{margin-top: 20px;width: 450px;
	display: flex;margin-left: -20px;}.aboutbtn, .gallerybtn{padding: 14px 38px;background-color: #fff3e6;color: #0d335d;
  font-size: 20px;border-radius: 5px;}.aboutbtn:hover, .gallerybtn:hover{background-color: transparent;transition: 300ms;
	padding: 11px 32px;font-size: 23px;
}
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
			<div class="links">Home</div>
			<div class="links">About</div>
			<div class="links">Pages</div>
			<div class="links">Contacts</div>
		</div>
	</header>

	<div class="content">
		<div class="top_content">
			<div class="left_content">
				<h3>Hello</h3>
				<h1>I am Yerassyl</h1>
				<h4>Second year student SDU</h4>
				<div class="btns">
					<button class="aboutbtn">About me</button>
				<button class="gallerybtn">My gallery</button>
				</div>
			</div>
			<div class="right_content">
				<img src="banner-image.png" style="width: 600px; height: 600px;">
			</div>
		</div>
	</div>
</body>
</html>