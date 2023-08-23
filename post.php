<?php
error_reporting(E_ALL);
require_once 'loginprocess.php';
$user = $_SESSION['user_name'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Animal Details Form</title>
	<link rel="stylesheet" type="text/css" href="assets/post.css">
</head>
<body>
	<header>
		<h1>PET RESCUE AND ADOPTION</h1>
	</header>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "pet";
  
	// CREATE CONNECTION
	$conn = new mysqli($servername, $username, $password, $databasename);
  
	// GET CONNECTION ERRORS
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	?>
	<nav>
		<a href=home.php>Home</a>
		<a href=post.php>Post</a>
		<a href=medicine.php>Medicine</a>
		<a href=veterinary.php>Veterinary</a>
		<a href=foster.php>Foster Home</a>
	</nav>
	<?php $_SESSION['user'] = $user;?>
	<div class="container">
		<h1>Animal Details Form</h1>
		<form method="post" action="connect.php" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" name="name" id="name" required>
			</div>
			<div class="form-group">
				<label for="age">Age:</label>
				<input type="number" name="age" id="age" required>
			</div>
			<div class="form-group">
				<label for="gender">Gender:</label>
				<select name="gender" id="gender" required>
					<option value="">-- Select Gender --</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="other">Other</option>
				</select>
			</div>
			<div class="form-group">
				<label for="breed">Breed:</label>
				<input type="text" name="breed" id="breed" required>
			</div>
			<div class="form-group">
				<label for="image">Image:</label>
				<input type="file" name="image" id="image" required>
			</div>
			<div class="form-group">
				<label for="description">Description:</label>
				<textarea name="description" id="description" required></textarea>
			</div>
			<button type="submit">Submit</button>
		</form>
	</div>
</body>
</html>
