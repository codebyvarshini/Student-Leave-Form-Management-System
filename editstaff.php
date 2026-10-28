<?php 
include 'designbasic.html';
?>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<body><center><font color="BLACK"><h1>STUDENT LEAVE FORM SYSTEM</h1></font>

<body>
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
<?php
include 'db.php';
$kid=$_GET['uid'];
$res=mysqli_query($con,"select * from staff where reg_no='$kid'");
while($row=mysqli_fetch_array($res))
{
?>
<html>
<br><center><head><b><u>EDIT DETAILS</u></b></head><br><br>
<body>
<form action="#" method="post" enctype="multipart/form-data">
<table>
<tr><td><b>Name:</b></td><td><input type="text" name="name" value="<?php echo $row['name'];?>"></td></tr>
<tr><td><b>Department:</b></td><td><input type="text" name="dept" value="<?php echo $row['dept'];?>"></td></tr>
<tr><td><b>Phone:</b></td><td><input type="text" name="phone" value="<?php echo $row['phone'];?>"></td></tr>
<tr><td><b>Email:</b></td><td><input type="email" name="email" value="<?php echo $row['email'];?>"></td></tr>
<tr><td><b>Photo:</b></td><td><input type="file" name="img" value="<?php echo $row['image'];?>"></td></tr>
<tr><img src="images/pic1.png"style="padding-left: 364px; margin-bottom: -574px; width: 110px;"></tr></td>
<br>
<tr><td></td><td><input type="submit" name="submit" value="SAVE"/></td></tr>
</table>
</form>
</body>
</html>
<?php
}
if(isset($_POST['submit']))
{
	
	$n=$_POST['name'];
	$a=$_POST['dept'];
	$p=$_POST['phone'];
	$e=$_POST['email'];
	$img=$_FILES['img']['name'];
	if($img==NULL)
	{
		$edit=mysqli_query($con,"UPDATE `staff` SET `name`='$n',`dept`='$a',`phone`='$p',`email`='$e' where reg_no='$kid'");
	}
	else
	{
			move_uploaded_file($_FILES['img']['tmp_name'],"uploads/".$_FILES['img']['name']);
			$edit=mysqli_query($con,"UPDATE `staff` SET `name`='$n',`dept`='$a',`phone`='$p',`email`='$e',`image`='$img' where reg_no='$kid'");
			
	}
	header("location:staffview.php");
}
?>
