<?php
error_reporting(E_ALL);
require_once 'loginprocess.php';
$user=$_SESSION['user_name'];

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/home.css">

	<title>My Homepage</title>
	<style>
		/* body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}
		header {
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
		}
		section {
			padding: 20px;
			margin: 20px;
			background-color: #f2f2f2;
			border-radius: 5px;
			box-shadow: 0 0 5px #ccc;
			text-align: left;
		}
		h1 {
			margin-top: 0;
		}
		img {
  width: 100%;
  max-width: 500px; 
  height: auto;
  display: block;
  margin: 0 auto; 
  border-radius: 5px;
  box-shadow: 0 0 5px #ccc;
  align:center
} */
	</style>
</head>
<body>
<?php


  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "pet";
  
  // CREATE CONNECTION
  $conn = new mysqli($servername,
    $username, $password, $databasename);
  
  // GET CONNECTION ERRORS
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  ?>
	<header>
		<h1>PET RESCUE AND ADOPTION</h1>
		<?php echo "<h1>Welcome ".$user."</h1>"; ?>
	</header>
	<nav>
        <a href=home.php>Home</a>
        <a href=post.php>Post</a>
		<a href=medicine.php>Medicine</a>
		<a href=veterinary.php>Veterinary</a>
        <a href=foster.php>Foster Home</a>

	</nav>
<?php
 // SQL QUERY
 $query = "SELECT uploader,name,age,gender,breed,description,image FROM pets;";
  
 // FETCHING DATA FROM DATABASE
 $result = $conn->query($query);
 
   if ($result->num_rows > 0) 
   {
     $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
   } 

   ?>
   <section>
    <?php
  if(isset($options)){
  foreach ($options as $option) {


    echo "Uploader: ". $option['uploader']."<br>";
    echo "Name: ". $option['name']."<br>";
    echo "Age: ". $option['age']."<br>";
    echo "Breed: ".$option['breed']."<br>";
    echo "Description: ". $option['description']."<br>";
	echo "<img src='images/" . $option['image'] . "'>"."<br>";
	echo "<button>Adopt</button>";
	echo "<button>Share</button>";
	echo "<hr><br><br><br>";

    }
}?>

		
	</section>


</body>
</html>