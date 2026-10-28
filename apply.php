<?php 
include 'designbasic.html';
include 'db.php';
?>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<center><font color="BLACK"><h1>STUDENT LEAVE FORM SYSTEM</h1></font>

<ul>
    <?php session_start(); ?>
    <li><a href="home.php?uid=<?php echo $_SESSION['reg_no']; ?>">Home</a></li> 
    <li class="dropdown">
        <a href="#" class="dropbtn">Leave</a>
        <div class="dropdown-content">
            <a href="apply.php">Apply Leave</a>
            <a href="status.php?uid=<?php echo $_SESSION['reg_no']; ?>">Leave Status</a>
        </div>
    </li>
    <li><a href="editstudent.php?uid=<?php echo $_SESSION['reg_no']; ?>">Edit Profile</a></li>
    <li><a href="logout1.php">Logout</a></li>
</ul>

<h1><marquee>LEAVE APPLICATION</marquee></h1>
<center>
<form action="#" method="post">
    <table>
        <tr><td>NAME:</td><td><input type="text" name="name" required/></td></tr>
        <tr><td>DATE:</td><td><input type="date" name="date" id="date" required/></td></tr>
        <tr><td>ENDING DATE:</td><td><input type="date" name="end_date" required/></td></tr>
        <tr><td>REASON:</td><td><textarea name="reason" required></textarea></td></tr>
        <tr><td></td><td><input type="submit" value="APPLY" name="submit"/></td></tr>
    </table>
</form>

<?php
if (isset($_POST['submit'])) {
    $a = $_SESSION["reg_no"];
    $b = $_POST["name"];
    $c = $_POST["date"]; // Start Date
    $f = $_POST["end_date"]; // End Date
    $e = $_POST["reason"];

    // Calculate the number of leave days
    $start = new DateTime($c);
    $end = new DateTime($f);
    $interval = $start->diff($end);
    $leave_days = $interval->days + 1;

    // Check if student exceeds leave limit
    $checkQuery = "SELECT SUM(DATEDIFF(end_date, date) + 1) AS total_leave FROM `leave` WHERE reg_no='$a' AND status='APPROVED'";
    $result = mysqli_query($con, $checkQuery);
    $row = mysqli_fetch_assoc($result);
    $totalLeaveTaken = $row['total_leave'] ?? 0;

    // Maximum leave limit
    $max_leave_limit = 15;
    $remainingLeave = $max_leave_limit - $totalLeaveTaken;

    // Check if leave request exceeds the limit
    if (($totalLeaveTaken + $leave_days) > $max_leave_limit) {
        echo "<script>alert('Leave limit exceeded! Maximum $max_leave_limit days allowed.'); window.location.href='apply.php';</script>";
    } else {
        // Insert leave request into the database
        $sql = "INSERT INTO `leave`(`reg_no`, `name`, `date`, `end_date`, `reason`, `status`) 
                VALUES ('$a', '$b', '$c', '$f', '$e', 'Requested')";
        mysqli_query($con, $sql);

        // Redirect to view.php with remaining leave days as a URL parameter
        header("Location: view.php?remainingLeave=$remainingLeave&leaveStatus=success");
    }
}
?>
</body>
</html>

