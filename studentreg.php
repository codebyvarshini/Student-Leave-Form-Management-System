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
<?php
include 'db.php';
?>
<html>
<center><h1><font color="green">STUDENT REGISTRATION</h1></font>
<body>
<body background="">
<form action="#" method="post" enctype="multipart/form-data">
<table border="0" width="53%" align="center" cellpadding="10"><tr>
<tr><td width="50%"><b><i>ENTER THE NAME:</td><td><input type="text" name="name" required/></td></tr>
<tr><td><b><i>            ENTER THE REGISTER NUMBER:</td><td><input type="text" name="reg_no" required/></td></tr>
<tr><td><b><i>            ENTER THE BATCH:</td><td><input type="text" name="batch" required/></td></tr>
<tr><td><b><i>            ENTER THE PHONE:</td><td><input type="text" name="phone" required/></td></tr>
<tr><td><b><i>            ENTER THE EMAIL:</td><td><input type="email" name="email" required/></td></tr>
<tr><td><b><i>            ENTER YOUR PASSWORD:</td><td><input type="password" name="password" required/></td></tr>
<tr><td><b><i>            UPLOAD YOUR PHOTO   :</td><td><input type="file" name="img" accept="image/*" required></td></tr>
<td><td><input type="checkbox" name="terms" checked="checked"> <b><i>I accept all Terms and Conditions</td></td></tr>
<tr><td><td><input type="submit" name="submit" value="SUBMIT"/>  
<input type="reset" name="reset" value="RESET"/></td></td><br></tr>
</form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
	$n=$_POST["name"];
	$r=$_POST["reg_no"];
	$b=$_POST["batch"];
	$p=$_POST["phone"];
	$e=$_POST["email"];
	$pwd=$_POST['password'];
	$img=$_FILES['img']['name'];
	move_uploaded_file($_FILES["img"]["tmp_name"],"uploads/".$_FILES["img"]["name"]);
	$sql="INSERT INTO `register`(`name`, `reg_no`, `batch`, `phone`,`email`,`image`) VALUES ('$n','$r','$b','$p','$e','$img')";
	$result=mysqli_query($con,$sql);
	$result=mysqli_query($con,"INSERT INTO `admin`(`reg_no`, `password`,`role`) VALUES ('$r','$pwd','1')");
	header("location:studentview.php");
}
?>