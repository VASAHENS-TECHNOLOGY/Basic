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

// Redirect to viewpage to display updated user in list
if ($result>0)
{
echo "<script>alert('Update User Details Successfully...');window.location='view.php';</script>";
}
else
{
echo "<script>alert('Something Went Wrong...');window.location='view.php';</script>";
}

?>