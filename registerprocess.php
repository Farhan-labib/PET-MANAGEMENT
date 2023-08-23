<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // Check if email already exists
    $email_query = "SELECT * FROM users WHERE email = '$email'";
    $email_result = mysqli_query($conn, $email_query);
    if (mysqli_num_rows($email_result) > 0) {
        die("Error: Email already exists");
    }

    // Check if phone already exists
    $phone_query = "SELECT * FROM users WHERE phone = '$phone'";
    $phone_result = mysqli_query($conn, $phone_query);
    if (mysqli_num_rows($phone_result) > 0) {
        die("Error: Phone number already exists");
    }

    // Validate password
    if ($password !== $confirm_password) {
        die("Error: Passwords do not match");
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into database
    $insert_query = "INSERT INTO users (name, age, email, phone, password) 
                     VALUES ('$name', '$age', '$email', '$phone', '$hashed_password')";
    $insert_result = mysqli_query($conn, $insert_query);
    if (!$insert_result) {
        die("Error: " . mysqli_error($conn));
    }

    // Redirect to login page
    header("Location: login.php");
    exit();
}
?>

