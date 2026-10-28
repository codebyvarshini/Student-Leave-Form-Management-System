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
  <li><a href="home.php?uid=<?php echo $_SESSION['reg_no'];?>">Home</a></li> 
 
  <li class="dropdown">
    <a href="#" class="dropbtn">Leave</a>
    <div class="dropdown-content">
      <a href="apply.php">Apply Leave</a>
      <a href="status.php">Leave Status</a>
    </div>
  </li>
  
  <li><a href="editstudent.php?uid=<?php echo $_SESSION['reg_no'];?>">Edit Profile</a></li>
  <li><a href="logout1.php">Logout</a></li>
</ul>
</body>
</html>

<body background="images/student-interns1.jpg">
<h1 style="color:#000000"><b><center>Contact Details</center></b></h1>
<div align="center">
<p><b>Address :</b> City Engineering College,ABCD Nagar,New Delhi.
<p><b>Phone :</b> 04828-852369<br>
<b>Mobile :</b> +91 98 21 00 87 10
</p>
<p><b>Email :</b> Cityeng@gmail.com</p>
</p>
</div>
