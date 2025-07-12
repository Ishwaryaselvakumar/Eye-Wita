<?php
//connect to mysql server with username password and database name
$connect = mysqli_connect("localhost", "root", "", "eye_wita");
// Check connection
if ($connect === false) {
    die("Opps Unable to connect " . mysqli_connect_error());
}

// get report_id and status from POST data
$report_id = mysqli_real_escape_string($connect, $_POST['report_id']);
$status = mysqli_real_escape_string($connect, $_POST['status']);

// create query to update status in database
$sql = "UPDATE report_a_crime SET status='$status' WHERE report_id='$report_id'";

if (mysqli_query($connect, $sql)) {
    echo "Status updated successfully";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}

// Close connection
mysqli_close($connect);
?>
