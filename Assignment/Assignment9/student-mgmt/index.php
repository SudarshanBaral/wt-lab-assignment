<?php


require_once "./includes/utils/dbconnect.php";

$sql ="SELECT * FROM students";

$result = $conn ->query($sql);

// dd($result);
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
   <h2>List of Students</h2>

<table border="2">
    <thead>
        <tr>
           <th>I.D.</th>
            <th>Proile</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date of birth</th>
            <th>Favourite color</th>
            <th>Weight (KG)</th>
            <th>Gender</th>
            <th>Hobbies</th>
            <th>Nationality</th>
            <th>Action</th>
           
        </tr>
    </thead>
    <tbody>
            <?php
         if ($result->num_rows > 0) {
            while($student = $result->fetch_assoc())
            {
            ?>
            <tr>
                <td><?= $student['id']?></td>
                <td><img src="" alt="image"></td>
                <td><?= $student['name']?></td>
                <td><?= $student['email']?></td>
                <td><?= $student['dob']?></td>
                <td><?= $student['favorite_color']?></td>
                <td><?= $student['weight']?></td>
                <td><?= $student['gender']?></td>
                <td><?= $student['hobbies']?></td>
                <td><?= $student['nationality']?></td>
                <td>
                    <a href="#" data-id="<?= $student['id'] ?>" class='edit'>Edit</a>
                    <a href="#" data-id="<?= $student['id'] ?>" class='delete'>Delete</a>
                </td>
            </tr>
            <?php
            } } else {
            ?>
            <tr>
                <td colspan= "11">No records found</td>
            </tr>
            <?php
            }
            ?>
        </tbody>
   
</table>

<script type="text/javascript">
	const deleteEl = document.querySelectorAll(".delete");
	for(el of deleteEl) {
		el.addEventListener("click", deleteStudent);
	}
	function deleteStudent(event)
	{
		const id = event.target.getAttribute('data-id');
		let formEl = document.createElement("form");
		formEl.setAttribute("method", "POST");
		formEl.setAttribute("action", "./student/delete/delete.php");
		let idEl = document.createElement("input");
		idEl.setAttribute("type", "hidden");
		idEl.setAttribute("name", "id");
		idEl.setAttribute("value", id);
		formEl.appendChild(idEl);
		document.body.appendChild(formEl);
		formEl.submit();
	}

    const editEl = document.querySelectorAll(".edit");
	for(el of editEl) {
		el.addEventListener("click", editStudent);
	}
	function editStudent(event)
	{
		const id = event.target.getAttribute('data-id');
		let formEl = document.createElement("form");
		formEl.setAttribute("method", "POST");
		formEl.setAttribute("action", "./student/edit/edit.php");
		let idEl = document.createElement("input");
		// idEl.setAttribute("type", "hidden");
		idEl.setAttribute("name", "id");
		idEl.setAttribute("value", id);
		formEl.appendChild(idEl);
		document.body.appendChild(formEl);
		formEl.submit();
	}
</script>

</body>
</html>

