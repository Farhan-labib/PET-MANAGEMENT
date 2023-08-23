<?php
session_start();

require_once 'config.php';

$emailphone = $password = "";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $emailphone = $_POST['emailphone'];
  $password = $_POST['password'];

  $stmt = $conn->prepare("SELECT id, name, email, phone, password FROM users WHERE email = ? OR phone = ?");
  $stmt->bind_param("ss", $emailphone, $emailphone);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
      // password is correct, log in the user
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['user_name'] = $row['name'];
      header('Location: home.php');
      exit();
    } else {
      echo  "Invalid password.";
    }
  } else {
    echo  "Invalid email or phone.";
  }

  $stmt->close();
  $conn->close();
}

?>