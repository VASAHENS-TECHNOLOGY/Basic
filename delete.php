<?php
// include database connection file
include("config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM register WHERE id=$id");

// Redirect to viewpage to display updated user in list
if ($result>0)
{
echo "<script>alert('Deleted User Details Successfully...');window.location='view.php';</script>";
}
else
{
echo "<script>alert('Something Went Wrong...');window.location='view.php';</script>";
}
?>
