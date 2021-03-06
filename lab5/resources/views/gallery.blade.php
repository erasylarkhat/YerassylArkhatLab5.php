@extends('main')
@section('title', 'contact')
@section('content')

<style>
	.content{
		max-width: 1200px;
		width: 100%;
		border: 1px solid black;
	}
	form{
		display: flex;
		flex-direction: column;
	}
	.formgroup{
		display: flex;
		flex-direction: column;
		align-items: left;
	}.formgroup input{
		width: 300px;
		height: 40px;
		border-radius: 10px;
	} .formgroup label{
		font-size: 20px;
	} .formgroup textarea{
		width: 400px;
		height: 200px;
		border-radius: 5px;
	} button{
		margin-top: 10px;
		font-size: 22px;
		padding: 10px 30px;
		border-radius: 10px;
	}


</style>

	<div class="content">
		<form action="submit" method="post">
			@csrf
			<div class="formgroup">
				<label for="title">Post title</label>
				<input type="text" name="title" placeholder="" id="title">
			</div>
			<div class="formgroup">
				<label for="body">Post body</label>
				<textarea name="body" id="body" placeholder="Write your post body..."></textarea>
			</div>

			<button>Submit</button>
		</form>
	</div>
@endsection
