<?php
include 'db.php';

$kid = $_GET['uid'];

// Sanitize input to prevent SQL injection
$kid = mysqli_real_escape_string($con, $kid);

// Fetch the leave request (optional: for verification)
$res1 = mysqli_query($con, "SELECT * FROM `leave` WHERE id='$kid'");
if (!$res1 || mysqli_num_rows($res1) == 0) {
    die("Error: Leave request not found.");
}

// Delete the leave request
$res = mysqli_query($con, "DELETE FROM `leave` WHERE id='$kid'");
if (!$res) {
    die("Error deleting leave: " . mysqli_error($con));
}

// Redirect after deletion
header("Location: leave.php");
exit();
?>