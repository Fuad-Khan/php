<?php

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
    echo "Connected to database successfully<br/>";
}


$sql = "SELECT * FROM `form`"; 
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);

echo "Total records: ". $num;


if ($num>0){
    // $row = mysqli_fetch_array($result);
    // echo var_dump($row);
    // echo "<br/>";

    // $row = mysqli_fetch_array($result);
    // echo var_dump($row);
    // echo "<br/>";

    // $row = mysqli_fetch_array($result);
    // echo var_dump($row);
    // echo "<br/>";

    while ($row = mysqli_fetch_array($result)){
        // echo var_dump($row);

        echo "ID: ". $row['sno']. " - Name: ". $row['name']. " - Email: ". $row['email']. " - Concern: ". $row['concern']. " - Timestamp: ". $row['dt'];  // Displaying the result in table format
        echo "<br/>";

    }
    

}

?>