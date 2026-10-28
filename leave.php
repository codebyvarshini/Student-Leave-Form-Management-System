<?php
include 'db.php';
include 'designbasic.html';
session_start();
?>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center><font color="red"><h1>STUDENT LEAVE FORM SYSTEM</h1></font>

<ul>
  <li><a href="adminhome.php?uid=<?php echo $_SESSION['reg_no'];?>">Home</a></li> 
  <li><a href="contactadmin.php">Contact</a></li>
  <li><a href="leave.php">Leave</a></li>
  <li><a href="staffview.php">Staff Profile</a></li>
  <li><a href="studentview.php">Student Profile</a></li>
  <li><a href="staffreg.php">Add Staff</a></li>
  <li><a href="studentreg.php">Add Student</a></li>
  <li><a href="logout2.php">Logout</a></li>
</ul>

<h1><font color="red">LEAVE REQUESTS</h1>

<!--  Download Excel Button -->
<a href="download_leave.php" style="padding: 10px; background: green; color: white; text-decoration: none; border-radius: 5px; margin-bottom: 10px; display: inline-block;">
    📥 Download Excel
</a>

<!-- Print Button -->
<button onclick="printTable()" style="padding: 10px; background: blue; color: white; text-decoration: none; border-radius: 5px; margin-left: 10px; cursor: pointer;">
    🖨️ Print Leave Requests
</button>

<!--  Leave Requests Table -->
<div id="printableArea">
<table border=3 width=70%>
<tr>
<th>SL.NO</th>
<th>REG_NO</th>
<th>NAME</th>
<th>DATE</th>
<th>ENDDATE</th>
<th>REASON</th>
<th>STATUS</th>
<th>APPROVE</th>
<th>REJECT</th>
</tr>

<?php
$a = $_SESSION['reg_no'];
$res = mysqli_query($con, "SELECT * FROM `leave`");
$i = 1;
while ($row = mysqli_fetch_array($res)) {
?>
<tr>
<td><center><?php echo $i; ?></td>
<td><center><?php echo $row['reg_no']; ?></td>
<td><center><?php echo $row['name']; ?></td>
<td><center><?php echo $row['date']; ?></td>
<td><center><?php echo $row['end_date']; ?></td>
<td><center><?php echo $row['reason']; ?></td>
<td><center><font color="green"><b><?php echo $row['status']; ?></b></td>
<td><center><a href="approve.php?uid=<?php echo $row['id']; ?>">Approve</a></td>
<td><center><a href="reject.php?uid=<?php echo $row['id']; ?>">Reject</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</div>

<!--  JavaScript for Print Function -->
<script>
function printTable() {
    var printContent = document.getElementById("printableArea").innerHTML;
    var originalContent = document.body.innerHTML;

    document.body.innerHTML = "<html><head><title>Print Leave Requests</title></head><body>" + printContent + "</body></html>";
    window.print();
    document.body.innerHTML = originalContent;
}
</script>

</body>
</html>