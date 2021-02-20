@extends('main')
@section('title', 'contact')
@section('content')
<!-- <!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="galstyle.css"><link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet"> -->
<style>
	*{background-color: #f8f1f1;margin: 0 auto;padding: 0;}
/*header{	width: 100%;height: 120px;display: flex;flex-wrap: wrap;
	justify-content: space-between;border: 1px solid black;
}.icon{font-family: 'Courgette', cursive;font-size: 30px;margin-top: 30px;
	margin-left: -100px;}header .header_right{font-family: 'Courgette', cursive;
	display: flex;margin-right: 0;width: 600px;height: 100px;} 
.links{font-size: 30px;margin-top: 30px;cursor: pointer;}
.links:hover{font-size: 35px;}*/
input[type=text], select, textarea {
  width: 100%;padding: 12px;border: 1px solid #ccc;border-radius: 4px;
  box-sizing: border-box;margin-top: 6px;margin-bottom: 16px;resize: vertical;
}input[type=submit] {background-color: #4CAF50;color: white;padding: 12px 20px;
  border: none;border-radius: 4px;cursor: pointer;}
input[type=submit]:hover {background-color: #45a049;}
.container {border-radius: 5px;background-color: #f2f2f2;padding: 20px;
  width: 100%;max-width: 1200px;}
</style>
<!-- </head>
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
	</header> -->

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
<!-- </body>
</html> -->