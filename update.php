<?php 
$id = $_POST['id'];

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];

// update user data
$result = mysqli_query($mysqli, "UPDATE register SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");

// Redirect to homepage to display updated user in list
header("Location: view.php");
?>