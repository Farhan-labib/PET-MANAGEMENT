<?php
error_reporting(E_ALL);
require_once 'loginprocess.php';
$user=$_SESSION['user_name'];

?>
<?php
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $breed = $_POST['breed'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];
    $uploc = 'images/' . $image;

    // Database connection
    $conn = new mysqli('localhost','root','','pet');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {
        // Insert pet information into the database
        $stmt = $conn->prepare("INSERT INTO pets(uploader,name, age, gender, breed, image, description) VALUES (?,?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss",$user, $name, $age, $gender, $breed, $image, $description);
        $stmt->execute();
        $stmt->close();

        // Upload image
        move_uploaded_file($tmpname, $uploc);
        header('Location:home.php');
    }

    $conn->close();
?>
