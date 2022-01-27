<?php
// include database connection file
include("config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM register WHERE id=$id");

// After delete redirect to View, so that latest user list will be displayed.
header("Location:view.php");
?>
