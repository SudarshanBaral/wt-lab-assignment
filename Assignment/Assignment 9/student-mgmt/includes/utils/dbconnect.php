<?php
// $conn = mysqli_connect("localhost", "root", "") 
// or die("Connection failed : " . mysqli_connect_error());


$conn = new mysqli("localhost", "root", "" , "studentmgmt");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>