<?php
include 'designbasic.html';
?>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
        </head>
<html>

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
<html>

<?php
include 'db.php';

$kid=$_GET['uid'];
$res=mysqli_query($con,"select * from register where reg_no='$kid'");
while($row=mysqli_fetch_array($res))
{
?>
<html>
<style>
div {
    background-color: lightgrey;
    width: 250px;
    border: 25px;
    padding: 25px;
    margin: 5px;
}

</style>
<br>
<div><br><center><head><b><u>EDIT DETAILS</u></b></head><br><br>
<body>
<form action="#" method="post" enctype="multipart/form-data">
<table>
<tr><td>Name:</td><td><input type="text" name="name" value="<?php echo $row['name'];?>"></td></tr>
<tr><td>Batch:</td><td><input type="text" name="batch" value="<?php echo $row['batch'];?>"></td></tr>
<tr><td>Phone:</td><td><input type="text" name="phone" value="<?php echo $row['phone'];?>"></td></tr>
<tr><td>Email:</td><td><input type="email" name="email" value="<?php echo $row['email'];?>"></td></tr>
<tr><td>Photo:</td><td><input type="file" name="img" value="<?php echo $row['image'];?>"></td></tr>
<tr><img src="images/pic1.png"style="padding-left: 364px; margin-bottom: -574px; width: 110px;"></tr></td>
<tr><td></td><td><input type="submit" name="submit" value="SAVE"/></td></tr>
</table></div>
</form>
</body>
</html>
<?php
}
if(isset($_POST['submit']))
{
	
	$n=$_POST['name'];
	$a=$_POST['batch'];
	$p=$_POST['phone'];
	$e=$_POST['email'];
	$img=$_FILES['img']['name'];
	if($img==NULL)
	{
		$edit=mysqli_query($con,"UPDATE `register` SET `name`='$n',`batch`='$a',`phone`='$p',`email`='$e' where reg_no='$kid'");
	}
	else
	{
			move_uploaded_file($_FILES['img']['tmp_name'],"uploads/".$_FILES['img']['name']);
			$edit=mysqli_query($con,"UPDATE `register` SET `name`='$n',`batch`='$a',`phone`='$p',`email`='$e',`image`='$img' where reg_no='$kid'");
			
	}
	header("location:home.php?uid=$_SESSION[reg_no]");
}
?>
