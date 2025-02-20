<?php

echo "Welcome to the database";

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn){
    die("Connection failed: ". mysqli_connect_error());
    echo "<br/>Failed to connect to database";
}else{
echo "<br/> Connecting to database successfully";
}
?>

