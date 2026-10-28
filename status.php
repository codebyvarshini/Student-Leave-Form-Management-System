<?php
include 'designbasic.html';
include 'db.php';
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
      <a href="status.php?uid=<?php echo $_SESSION['reg_no'];?>">Leave Status</a>
    </div>
  </li>
  
  <li><a href="editstudent.php?uid=<?php echo $_SESSION['reg_no'];?>">Edit Profile</a></li>
  <li><a href="logout1.php">Logout</a></li>
</ul>
</body>
</html>
<html>
<body background="">
<h1><marquee>LEAVE APPLICATION</marquee></h1>
<table>
<table border=2 width=70%>
<tr>
<th>SL.NO</th>
<th>REG_NO</th>
<th>NAME</th>
<th>DATE</th>
<th>EDATE</th>

<th>REASON</th>
<th>STATUS</th>
<th>DELETE</th>
<th></th></tr>
<?php

  $res=mysqli_query($con,"SELECT * FROM `leave` WHERE `reg_no`='$_SESSION[reg_no]'");
  $i=1;
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr><td><center><?php echo $i?></td>
<td><center><?php echo $row['reg_no'];?></td>
<td><center><?php echo $row['name'];?></td>
<td><center><?php echo $row['date'];?></td>
<td><center><?php echo $row['end_date'];?></td>


<td><center><?php echo $row['reason'];?></td>
<td><center><font color="green"><b><?php echo $row['status'];?></b></td>
<td><center><a href="delete.php?uid=<?php echo $row['id'];?>">Delete</a></td>
<?php
$i++;
  }
?>
