<?php
/* echo $_POST['username']."<br>";
echo $_POST['email']."<br>";
echo $_POST['phone']."<br>";
echo $_POST['age']."<br>";


for($i=0;$i < count($_POST['habit']);$i++)
{
    echo $_POST['habit'][$i]."<br>";
}

 
//$habbit=$_POST["habbit"];,habbit,'$habbit'
$habit='';
$habits='';

for($i=0;$i < count($_POST['habit']);$i++)
{
    
$habit .= $_POST['habit'][$i].",";

}

$habits=substr($habit, 0, -1);

echo $_POST['gender']."<br>";
echo $_POST['password']."<br>"; */


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
$conn = mysqli_connect("localhost", 'root','',"abcbakery");

$query = "INSERT INTO register (name,email,phone,age,gender,password,habbit) VALUES('$name','$email','$phone','$age','$gender','$password','$habit')";
$result = mysqli_query ($conn,$query);


?>