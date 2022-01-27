<?php
// Create database connection using config file
include("config.php");

// Fetch all users data from database
$result = mysqli_query($conn, "SELECT * FROM register ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link rel="stylesheet" href="design.css">

    <title>ABC Bakery | View User Details</title>
</head>
<body>
    <h1>View User Details</h1>
    <table border="1">

    <tr>
        <th>Name</th> <th>Email</th> <th>Phone</th><th>Age</th><th>Gender</th><th>Habbit</th> <th>Action</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['phone']."</td>";
        echo "<td>".$user_data['age']."</td>";
        echo "<td>".$user_data['gender']."</td>";
        echo "<td>".$user_data['habit']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
   
    </table>
</body>
</html>