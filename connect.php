<?php


$servername = "localhost";
$username = "root";
$password = "Aba4333250";
$dbname = "exam_hall";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?>