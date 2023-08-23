<?php

// Database configuration
$dbHost = 'localhost';  // Replace with your database host
$dbName = 'pet';  // Replace with your database name
$dbUsername = 'root';  // Replace with your database username
$dbPassword = '';  // Replace with your database password

// Create database connection
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
