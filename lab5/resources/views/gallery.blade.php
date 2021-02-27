@extends('main')
@section('title', 'contact')
@section('content')

<style>
	*{background-color: #f8f1f1;margin: 0 auto;padding: 0;}

input[type=text], select, textarea {
  width: 100%;padding: 12px;border: 1px solid #ccc;border-radius: 4px;
  box-sizing: border-box;margin-top: 6px;margin-bottom: 16px;resize: vertical;
}input[type=submit] {background-color: #4CAF50;color: white;padding: 12px 20px;
  border: none;border-radius: 4px;cursor: pointer;}
input[type=submit]:hover {background-color: #45a049;}
.container {border-radius: 5px;background-color: #f2f2f2;padding: 20px;
  width: 100%;max-width: 1200px;}
</style>

	<div class="content">
		<div class="contact">
			<div class="container">
				  <form action="/action_page.php">
				    <label for="fname">First Name</label>
				    <input type="text" id="fname" name="firstname" placeholder="Your name..">

				    <label for="lname">Last Name</label>
				    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

				    <label for="country">Country</label>
				    <select id="country" name="country">
				      <option value="australia">Kazakhstan</option>
				      <option value="canada">Russia</option>
				      <option value="usa">USA</option>
				    </select>

				    <label for="subject">Subject</label>
				    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

				    <input type="submit" value="Submit">
				  </form>
			</div>
		</div>
	</div>
@endsection
