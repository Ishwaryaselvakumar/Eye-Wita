<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eye_wita";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the image ID from a form or URL parameter
$report_id = $_GET['report_id'];

// Retrieve the image data from the database
$sql = "SELECT report_a_crime FROM images WHERE report_id = $report_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output the image
  $row = $result->fetch_assoc();
  header("Content-type: image/jpeg");
  echo $row['image_data'];
} else {
  echo "Image not found";
}

$conn->close();
?>
