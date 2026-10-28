<?php
include 'db.php';

$kid = $_GET['uid'];

// Get leave details
$res1 = mysqli_query($con, "SELECT * FROM `leave` WHERE id='$kid'");
$row = mysqli_fetch_assoc($res1);
$reg_no = $row['reg_no'];
$start_date = new DateTime($row['date']);
$end_date = new DateTime($row['end_date']);
$leave_days = $start_date->diff($end_date)->days + 1; // Calculate number of leave days

// Calculate total approved leave taken
$checkQuery = "SELECT SUM(DATEDIFF(end_date, date) + 1) AS total_leave FROM `leave` WHERE reg_no='$reg_no' AND status='APPROVED'";
$result = mysqli_query($con, $checkQuery);
$existingLeave = mysqli_fetch_assoc($result);
$totalLeaveTaken = $existingLeave['total_leave'] ?? 0;

$max_leave_limit = 15; // Maximum leave limit

if (($totalLeaveTaken + $leave_days) > $max_leave_limit) {
    echo "<script>alert('Cannot approve leave! Maximum $max_leave_limit days exceeded.'); window.location.href='leave.php';</script>";
} else {
    // Approve Leave
    mysqli_query($con, "UPDATE `leave` SET `status`='APPROVED' WHERE id='$kid'");
    header("location:leave.php");

}

    // Send WhatsApp Notification
   
?>

