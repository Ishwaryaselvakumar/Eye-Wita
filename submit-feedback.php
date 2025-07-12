<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eye_wita";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

// Get the values submitted from the form
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Execute the SQL statement
if ($stmt->execute() === TRUE) {
  echo "Thank you for your feedback!";
} else {
  echo "Error: " . $stmt->error;
}

// Add a button to navigate to userdashboard.php
echo "<br><br><button onclick=\"window.location.href='userdashboard.php';\">Go to Dashboard</button>";

// Close the prepared statement and database connection
$stmt->close();
$conn->close();
?>
