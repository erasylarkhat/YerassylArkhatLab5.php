
<table border="1">
	<tr>
		<td style="padding: 10px;">ID</td>
		<td style="padding: 10px;">Post's title</td>
		<td style="padding: 10px;">Post's body</td>
	</tr>
	@foreach($posts as $post)
	<tr>
		<td style="padding: 10px;">{{$post['id']}}</td>
		<td style="padding: 10px;">{{$post['title']}}</td>
		<td style="padding: 10px;">{{$post['body']}}</td>
	</tr>
	@endforeach
</table>

<button style="margin-top: 20px; margin-left: 5px; padding: 10px 20px;">
	<a style="text-decoration: none;" href="{{ route('blogCreate') }}">
		ADD POST
	</a>
</button>

