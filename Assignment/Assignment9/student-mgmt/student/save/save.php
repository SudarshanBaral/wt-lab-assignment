<?php

require_once "../../includes/utils/dbconnect.php";


if (isset($_POST['submit'])) {

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
    $date = $_POST['date'] ?? '';
    $favorite_color = $_POST['color'] ?? '';
    $weight = $_POST['weight'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $hobby = implode(",", $_POST['hobby'] ?? []);
    $nationality = $_POST['nationality'] ?? 'NP';
    
    $sql = "INSERT INTO students (name, email, password, dob, favorite_color, weight, gender, hobbies, nationality)
    VALUES ('$name', '$email', '$password', '$date', '$favorite_color', $weight, '$gender', '$hobby', '$nationality')";
    
    if($conn->query($sql) == TRUE) {
        header("location:../../");
    } else {
        header("location:../../");
    }

} 

if (isset($_POST['update'])) {





    $id = $_POST['id'] ?? ' ';


    $name = $_POST['name'] ?? ' ';
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $date = $_POST['date'];
    $color = $_POST['color'];
    $weight = $_POST['weight'];
    $gender = $_POST['gender'];
    $hobby = implode(",", $_POST['hobby']);
    $nation = $_POST['nation'];



    $sql = "UPDATE students SET name='$name',email='$email',password='$password',dob='$date',favorite_color='$color',weight=$weight,gender='$gender',hobbies='$hobby',nationality='$nation' WHERE id='$id'";









    if ($conn->query($sql) == TRUE) {
        // die("SUCESS");
        header('Location:../../');
        // echo "<p>Sucess</p>";
    } else {
        header('Location:../../');
    }
}



