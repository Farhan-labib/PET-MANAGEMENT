<?php
include 'loginprocess.php';
$user=$_SESSION['user_name'];
?>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="assets/home.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOSTER HOME</title>
    <style>
        		/* header {
			background-color: #3399FF;
			color: #fff;
			padding: 20px;
			text-align: center;
		}
        		nav {
			background-color: #f2f2f2;
			padding: 10px;
		}
		nav a {
			display: inline-block;
			padding: 10px;
			margin: 10px;
			background-color: #fff;
			color: #333;
			text-decoration: none;
			border-radius: 5px;
			transition: all 0.3s ease;
		}
		nav a:hover {
			background-color: #333;
			color: #fff;
		} */

        </style>
</head>
<body>
<header>
		<h1>PET RESCUE AND ADOPTION</h1>
	</header>
	<nav>
        <a href=home.php>Home</a>
        <a href=post.php>Post</a>
		<a href=medicine.php>Medicine</a>
		<a href=veterinary.php>Veterinary</a>
        <a href=foster.php>Foster Home</a>

	</nav>
    <div class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d116834.47345059107!2d90.37430232754598!3d23.780261715975758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sfoster%20home!5e0!3m2!1sen!2sbd!4v1679952836244!5m2!1sen!2sbd" width="1500" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
</body>
</html>