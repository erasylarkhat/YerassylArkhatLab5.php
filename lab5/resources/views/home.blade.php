@extends('main')
@section('title', 'Главная')

@section('content')

<style>
	*{background-color: #f8f1f1;margin: 0 auto;padding: 0;font-family: 'Courgette', cursive;}
.content{height: 700px;width: 100%;max-width: 1400px;}.top_content{margin-top: 50px;display: flex;justify-content: space-between;}.left_content{font-size: 40px;margin-top: 100px;}.btns{margin-top: 20px;width: 450px;
	display: flex;margin-left: -20px;}.aboutbtn, .gallerybtn{padding: 14px 38px;background-color: #fff3e6;color: #0d335d;
  font-size: 20px;border-radius: 5px;}.aboutbtn:hover, .gallerybtn:hover{background-color: transparent;transition: 300ms;
	padding: 11px 32px;font-size: 23px; 
} a{text-decoration: none;}
</style>


	<div class="content">
		<div class="top_content">
			<div class="left_content">
				<h3>Hello</h3>
				<h1>I am Yerassyl</h1>
				<h4>Second year student SDU</h4>
				<div class="btns">
					<button class="aboutbtn"><a href="{{route('aboutme')}}">About me</a></button>
				<button class="gallerybtn"><a href="{{route('contactme')}}">Contact me</a></button>
				</div>
			</div>
			<div class="right_content">
				<img src="banner-image.png" style="width: 600px; height: 600px;">
			</div>
		</div>
	</div>

@endsection