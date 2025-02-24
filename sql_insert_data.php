<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phptesting";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "<br/>Connected to database successfully";
}

// SQL query to insert data
$id = 7; // Make sure this ID is not duplicated
$name = "hhhh";

// Corrected SQL Query
$sql = "INSERT INTO testing (id, name) VALUES ($id, '$name')";
$result = mysqli_query($conn, $sql);

// Check if the insertion was successful
if ($result) {
    echo "<br/>Successfully inserted";
} else {
    echo "<br/>Error inserting: " . mysqli_error($conn); // Show MySQL error for debugging
}

// Close the connection
mysqli_close($conn);
?>
