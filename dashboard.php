<?php

// Create database connection using config file
include("config.php");

$name=$_POST["username"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$habit='';
$habits='';

for($i=0;$i < count($_POST['habit']);$i++)
{
    
$habit .= $_POST['habit'][$i]."";

}

$password=$_POST["password"];

//Insert Form Data in table
$query = "INSERT INTO register (name,email,phone,age,gender,password,habbit) VALUES('$name','$email','$phone','$age','$gender','$password','$habit')";
$result = mysqli_query ($conn,$query);


?>