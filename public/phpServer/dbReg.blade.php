<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "muzonas";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$firstName = $_GET['firstName'];
$email = $_GET['email'];
$password = $_GET['password'];

$check = "SELECT email FROM accounts WHERE email='$email'";
$resultCheck = mysqli_query($conn, $check);

mysqli_close($conn);

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

function insertData($firstName, $email, $password) {
    $insert = "INSERT INTO accounts (firstName, email, password) VALUES ($firstName, $email, $password)";
    $resultInsert = mysqli_query($conn, $insert);
}


if(mysqli_num_rows($resultCheck) <= 0){
     insertData();
 }



?>