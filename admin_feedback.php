<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<style>
		body {
			font-family: 'Times New Roman', Times, serif;
			background-color: #f5f5f5;
		}

		h1 {
			text-align: center;
			color: #333;
			margin-top: 50px;
		}

		.feedback-container {
			width: 80%;
			margin: 0 auto;
			background-color: #fff;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
			border-radius: 10px;
			overflow: hidden;
		}

		.feedback {
			display: flex;
			flex-direction: column;
			padding: 20px;
			border-bottom: 1px solid #ccc;
			transition: background-color 0.3s ease;
		}

		.feedback:last-of-type {
			border-bottom: none;
		}

		.feedback:hover {
			background-color: #f8f8f8;
		}

		.feedback h3 {
			font-size: 24px;
			font-weight: bold;
			color: #333;
			text-transform: capitalize;
			margin: 0;
		}

		.feedback p {
			font-size: 18px;
			line-height: 1.5;
			color: #666;
			margin: 10px 0;
		}

		.feedback p:first-of-type {
			font-weight: bold;
			color: #333;
		}

		.home-button {
			display: block;
			margin: 20px auto;
			padding: 10px 20px;
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			text-align: center;
			font-size: 16px;
		}

		.home-button:hover {
			background-color: #555;
		}
	</style>
</head>
<body>
	<h1>Feedback</h1>
	<button class="home-button" onclick="window.location.href='admin_dashboard.php';">Home</button>
	<div class="feedback-container">
		<?php
		// PHP code to retrieve and display feedback
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "eye_wita";
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}

		// Retrieve feedback from database
		$sql = "SELECT * FROM feedback";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		  // Output data of each row
		  while($row = $result->fetch_assoc()) {
		    echo "<div class='feedback'>
					<h3>Name: " . $row['name'] . "</h3>
					<p>Email: " . $row['email'] . "</p>
					<p>Message: " . $row['message'] . "</p>
				</div>";
		  }
		} else {
		  echo "<p>No feedback found.</p>";
		}

		// Close connection
		$conn->close();
		?>
	</div>
</body>
</html>
