<!DOCTYPE html>

<html>

<head>
	<title>CSS Contact Form</title>

	<meta charset="utf-8" />

	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
</head>

<body>

	<h2>Contact Form</h2>

	<form class="form" action="" method="POST">

		<p class="name"><label for="name">Name</label>
			<input type="text" name="name" id="name" placeholder="John Doe" />

		</p>

		<p class="email">
			<label for="email">Email</label>
			<input type="text" name="email" id="email" placeholder="mail@example.com" />

		</p>

		<p class="web">
			<label for="web">Website</label>
			<input type="text" name="web" id="web" placeholder="www.example.com" />

		</p>

		<p class="text">
			<textarea name="text" placeholder="Write something to us"></textarea>
		</p>

		<p class="submit">
			<input type="submit" value="Send" name="submit" />
		</p>
	</form>










</body>




</html>
<?php

include "../dbconnect.php";

if (isset($_POST["submit"])) {



	$name =$_POST['name'];
	$email = $_POST['email'];
	$web = $_POST['web'];
	$info = $_POST['text'];
	

	$query = "INSERT INTO contact_us VALUES('$name','$email','$web','$info')";
	$result = mysqli_query($con, $query) ;
	if ($result) {
		echo "your massege is send ";
	}
	else{
		echo "sorry failed to send ";
	}
}


?>