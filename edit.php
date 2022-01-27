<?php

// include database connection file
include("config.php");



// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM register WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$email = $user_data['email'];
	$age = $user_data['age'];
	$gender = $user_data['gender'];
	$phone = $user_data['phone'];
	//$mobile = $user_data['phone'];
	$password = $user_data['password'];
}
?>
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
    <h1>Update Profile</h1>
    <form action="update.php" method="POST">
        <br><br>
     <fieldset>
         <legend>Personal Details</legend>
<label>Name</label>
<input type="text" name="username" value="<?php echo $name; ?>" required> <br><br>
<label>Email</label>
<input type="email" name="email" value="<?php echo $email; ?>"  required> <br><br>
<label>Phone no</label>
<input type="text" name="phone" value="<?php echo $phone; ?>" required > <br><br>
<label>Age</label>
<input type="number" name="age" value="<?php echo $age; ?>" required > <br><br>
<label>Gender</label><br><br>
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female

<input type="radio" name="gender" value="Others">Others  <br><br>
<label>Habits</label>
<input type="checkbox" name="habit[]" value="Read_Book">Read Book 
<input type="checkbox" name="habit[]" value="Play_Cricket">Play Cricket
<input type="checkbox" name="habit[]" value="Drawing">Drawing <br><br>
<label>Password</label>
<input type="password"  name="password" value="<?php echo $password; ?>" required> <br><br>

<input type="submit" value="Update"> 
</fieldset>
    </form>
</body>
</html>