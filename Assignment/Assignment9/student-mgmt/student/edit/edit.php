

<?php

include_once "../../includes/utils/dbconnect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>

<body>
    <style>
        .form-group {
            margin-top: 10px;
        }

        
    </style>
        <?php
                    $sql = "SELECT * FROM students";

                    $id = $_POST['id'];

                    $sql = "SELECT * FROM students WHERE students.id = '$id'";

                    $result = $conn->query($sql);



                    $result = $conn->query($sql);


                    if ($result->num_rows > 0) {
                        $students = $result->fetch_assoc();



                    ?>


    <form action="../save/save.php" method="POST" enctype="multipart/form-data">
    <input type="hidden"  name="id"  value="<?= $students['id']; ?>" >

        <div class="form-group">
            <label for="name">Name :</label>
            <input type="text" id="name" placeholder="name" name="name"  value="<?= $students['name']; ?>" >
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" placeholder="email@email.com" name="email" value="<?= $students['email']; ?>" >
        </div>
        <div class="form-group">
            <label for="password">Password :</label>
            <input type="password" id="password" placeholder="********" name="password" >
        </div>
        <div class="form-group">
            <label for="date">Date :</label>
            <input type="date" id="date" placeholder="date" value="date" name="date" value="<?= $students['dob']; ?>">
        </div>
        <div class="form-group">
            <label for="color">Color :</label>
            <input type="color" id="color" name="color" value="<?= $students['favorite_color']; ?>">
        </div>
        <div class="form-group">
            <label for="weight">Weight kg :</label>
            <input type="number" id="weight"  name="weight" value="<?= $students['weight']; ?>">
        </div>
        <div class="form-group">
            <label for="gender">Gender :</label>
            <div>
                <label for="male">Male</label>
                <input type="radio" id="male" name="gender" value="male" <?php if ($students['gender'] == 'male') {
                                                    echo "checked";
                                                } ?>>
                <label for="female">Female</label>
                <input type="radio" id="female" name="gender" value="female"  <?php if ($students['gender'] == 'female') {
                                                    echo "checked";
                                                } ?>>
                <label for="other">other</label>
                <input type="radio" id="other" name="gender" value="other" <?php if ($students['gender'] == 'other') {
                                                    echo "checked";
                                                } ?>>
            </div>

        </div>
        <div class="form-group">
            <label>Hobbies :</label>
            <input type="checkbox" id="travelling" value="travelling" name="hobby[]"><label for="travelling">Travelling</label>
            <input type="checkbox" id="reading" value="reading" name="hobby[]"><label for="reading">Reading</label>
            <input type="checkbox" id="singing" value="singing" name="hobby[]"><label for="singing">Singing</label>
            <input type="checkbox" id="coding" value="coding" name="hobby[]"><label for="coding">Coding</label>
        </div>
        <div class="form-group">
            <label for="nationality">Nationality :</label>
            <select name="nation" id="">
                <option value="NP" <?php if ($students['nationality'] == 'NP') {
                                                                echo "selected";
                                                            } ?>>Nepal</option>
                <option value="IN" <?php if ($students['nationality'] == 'IN') {
                                                                echo "selected";
                                                            } ?>>India</option>
                <option value="CH" <?php if ($students['nationality'] == 'CH') {
                                                                echo "selected";
                                                            } ?>>China</option>
                <option value="UK" <?php if ($students['nationality'] == 'UK') {
                                                                echo "selected";
                                                            } ?>>United Kingdom</option>
            </select>
        </div>

        <div class="form-group">
            <label id="profile">Profile</label>
            <input type="file" name="profile" id="profile" accept=".png">
        </div>
        <div class="form-group">
<button type="submit" name="update">update</button>
        
            <input type="reset" value="Cancel">
        </div>
    </form>

    <?php


} else {
}
?>

</body>

</html>

