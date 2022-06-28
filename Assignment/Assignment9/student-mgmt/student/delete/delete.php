<?php
$id = $_POST['id'];



include "../../includes/utils/dbconnect.php";




$sql = "DELETE FROM `students` WHERE `students`.`id` = $id;";

if ($conn->query($sql) == TRUE) {
   
    header('Location:../..');
    
} else {
    die("error");
}
?>