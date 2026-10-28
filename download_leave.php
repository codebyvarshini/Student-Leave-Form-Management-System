<?php
include 'db.php';

// Set headers to indicate file download
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=leave_requests.xls");
header("Pragma: no-cache");
header("Expires: 0");

// Output column headers
echo "SL.NO\tREG_NO\tNAME\tDATE\tENDDATE\tSECTION\tREASON\tSTATUS\n";

// Fetch data from database
$res = mysqli_query($con, "SELECT * FROM `leave`");
$i = 1;
while ($row = mysqli_fetch_array($res)) {
    echo "$i\t{$row['reg_no']}\t{$row['name']}\t{$row['date']}\t{$row['end_date']}\t{$row['day']}\t{$row['reason']}\t{$row['status']}\n";
    $i++;
}
?>
