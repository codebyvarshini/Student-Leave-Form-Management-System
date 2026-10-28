<?php
include 'designbasic.html';
?>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<body><center><font color="BLACK"><h1>STUDENT LEAVE FORM SYSTEM</h1></font>

<ul>
 <?php session_start();?>
  <li><a href="adminhome.php?uid=<?php echo $_SESSION['reg_no'];?>">Home</a></li> 
  <li><a href="contactadmin.php">Contact</a></li>
   <li><a href="leave.php">Leave</a></li>
   <li><a href="staffview.php">Staff Profile</a></li>
   <li><a href="studentview.php">Student Profile</a></li>
   <li><a href="staffreg.php">Add Staff</a></li>
   <li><a href="studentreg.php">Add Student</a></li>
  <li><a href="logout2.php">Logout</a></li>
</ul>
</body>
</html>

<html>

<marquee><b><font size="5">WELCOME TO YOU</b></font></marquee>
<center><h1><font color="red">ADMIN PROFILE</h1></font><br>
<img src="images/pic1.png" height=100 width=150 style="float:center;margin-top:-9px"><br><br>
<?php
include 'db.php';
?>
<?php
if(!isset($_SESSION['reg_no']))
  {
    header("location:login2.php");
  }
echo "WELCOME TO THE ADMINISTRATOR PAGE";
?>
