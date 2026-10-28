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
  <li><a href="index.php">Home</a></li>
  <li><a href="about.php">About Us</a></li>
  <li><a href="courses.php">Courses</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">LOGIN</a>
    <div class="dropdown-content">
      <a href="login2.php">Admin Login</a>
      <a href="login1.php">Student Login</a>
    </div>
  </li>
</ul>
</body>
</html>
<html>
<img src="images/slogin.png" height="150" width="350">
<body background="">
<form action="#" method="post"/>
<table>
<tr><tr><td><b>Username:</b></td><td><input type="text" name="reg_no" placeholder="Enter Username" required/></td></tr>
<tr><td><b>Password:</b></td><td><input type="password" name="password" placeholder="Enter Password" required/></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="Login"/>
				 <input type="submit" name="reset" value="Reset"/></td></tr>
</table>

</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
 session_start();
$reg_no = $_POST['reg_no'];
$password = $_POST['password'];
$password1 = md5($password);
$sql = "SELECT * FROM admin WHERE reg_no = '$reg_no' and role=1";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$_SESSION['reg_no']=$row['reg_no'];
$p=$row['password'];
if($password==$p)
{	
    header("Location:home.php?uid=$row[reg_no]");  
} 
else 
	echo "<script>alert('Username/Password Incorrect')</script>"; 
}
?>

 