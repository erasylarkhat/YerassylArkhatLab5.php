@extends('main')
@section('title', 'about')
@section('content')

<style>
	*{background-color: #f8f1f1;
	margin: 0 auto;
	padding: 0;
}
.content{	font-family: 'Montserrat', sans-serif;
	height: 700px;
	width: 100%;
	max-width: 1400px;
	display: flex;
	justify-content: space-between;
}.left_content{	margin-top: 50px;}
.right_content{	margin-left: 30px;text-align: left;margin-top: 50px;
}.right_content h1{font-weight: 150;font-size: 50px;word-spacing: 30px;
}.right_content h6{	margin-top: 50px;font-size: 20px;line-height: 1.8;
}	
</style>

	<div class="content">
		<div class="left_content">
			<img src="about-us.png" style="width: 700px; height: 600px;">
		</div>
		<div class="right_content">
			<h1>
	          <p>Let me  
	          Introduce 
	      		myself</p>
			</h1>
			<h6>
				My name is Yerassyl Arkhat. I am 18 years old. I am from Semey, East Kazakhstan Region.
				And now I am studying IT at Suleiman Demirel University second year. My hobbies are playing footbal, watching horror movies.  I have a lot of achieves in sports: Boxing and Football. Lorem ipsum dolor sit amet consectetur adipisicing elit. Error rerum iure obcaecati vel possimus officia maiores perferendis ut! Quos, perspiciatis.
			</h6>
		</div>
	</div>
@endsection
