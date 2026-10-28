<?php 
include 'db.php';
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
<body background="">
<center><h1><font color="green">STUDENT PROFILE</h1></font>
<form action="#" method="post" enctype="multipart/form-data">
<table border=2 width=50%>
<tr><th>Sl.No</th>
<th>Register No</th>
<th>Name</th>
<th>Batch</th>
<th>Phone</th>
<th>Email</th>
<th>Photo</th>
<th>Delete</th></tr>
<?php
$result=mysqli_query($con,"select * from register");
$i=1;
while($row=mysqli_fetch_array($result))
{
?>
<tr><td><?php echo $i;?></td>
<td><?php echo $row['reg_no'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['batch'];?></td>
<td><?php echo $row['phone'];?></td>
<td><?php echo $row['email'];?></td>
<td><img src="images\pic1.png" alt="" height="100" width="150"/></td>
<?php echo "<td><a href='deletestudent.php?uid=$row[reg_no]'>Delete</a></td>";
            $i++;
?>
<?php
}
?>
