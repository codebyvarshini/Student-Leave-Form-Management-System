<?php
include 'designbasic.html';
?>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<body><center><font color="BLACK"><h1>STUDENT LEAVE FORM SYSTEM</h1></font>

<body background="">
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

<h1 style="color:#000000"><b><center>Contact Details</center></b></h1>
<div align="center">
<p><b>Address :</b>Near New Appaneri
     Kovilpatti-628502.
     Tamil Nadu.
<br><br>
<b>Mobile :</b>  +91 04632 - 225389.
</p>
<p><b>Email :</b> gvncollegeoffice@gvncollege.edu.in</p>
</p>
</div>
