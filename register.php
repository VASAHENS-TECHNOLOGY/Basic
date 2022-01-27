<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="stylesheet" href="design.css">

    <title>ABC Bakery | Register</title>
</head>
<body>
<?php 
    include "pagelink.php";
    ?>
    <h1>Register Form</h1>
    <form action="dashboard.php" method="POST">
        <br><br>
     <fieldset>
         <legend>Personal Details</legend>
<label>Name</label>
<input type="text" name="username" required> <br><br>
<label>Email</label>
<input type="email" name="email"  required> <br><br>
<label>Phone no</label>
<input type="text" name="phone" required > <br><br>
<label>Age</label>
<input type="number" name="age" required > <br><br>
<label>Gender</label><br><br>
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female

<input type="radio" name="gender" value="Others">Others  <br><br>
<label>Habits</label>
<input type="checkbox" name="habit[]" value="Read_Book ">Read Book 
<input type="checkbox" name="habit[]" value="Play_Cricket ">Play Cricket
<input type="checkbox" name="habit[]" value="Drawing">Drawing <br><br>
<label>Password</label>
<input type="password"  name="password" required> <br><br>

<input type="submit" value="Register"> 
</fieldset>
    </form>
    
</body>
</html>