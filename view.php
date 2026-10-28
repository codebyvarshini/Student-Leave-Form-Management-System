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

<h2>Your Leave Request Has Been Successfully Applied!</h2>

<?php
// Retrieve the remaining leave days from the URL query parameter
$remainingLeave = isset($_GET['remainingLeave']) ? $_GET['remainingLeave'] : 'N/A';

// Display the remaining leave days
echo "<p><strong>Remaining Leave Days: $remainingLeave</strong></p>";
?>
</body>
</html>
