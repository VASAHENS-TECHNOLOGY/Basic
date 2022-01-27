<?php

// include database connection file
include("config.php"); 

$id = $_POST['id'];

$name=$_POST['username'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$age=$_POST['age'];
$gender=$_POST['gender'];

for($i=0;$i < count($_POST['habit']);$i++)
{
    
$habit .= $_POST['habit'][$i];

}

$password=$_POST['password'];

// update user data
$result = mysqli_query($conn, "UPDATE register SET name='$name',email='$email',phone='$phone',age='$age',gender='$gender',habit='$habit',password='$password' WHERE id=$id");

// Redirect to homepage to display updated user in list
header("Location: view.php");
?>