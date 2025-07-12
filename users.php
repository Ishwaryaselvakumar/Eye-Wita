<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Users</title>
    <style>
    .container {
    width: 80%;
    margin: 0 auto;
    text-align: center;
}

h1 {
    font-size: 2.5rem;
    margin-top: 3rem;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 2rem;
}

th, td {
    border: 1px solid #ddd;
    padding: 0.5rem;
}

th {
    background-color: #f2f2f2;
}

td {
    text-align: left;
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

    <div class="container">
        <h1>Registered Users</h1>
        <button class="home-button" onclick="window.location.href='admin_dashboard.php';">Home</button>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('connect.php');
                // Set up database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "eye_wita";

                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Select all registered users from the database
                $sql = "SELECT * FROM register";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>" . $row['name'] . "</td><td>" . $row['email1'] . "</td><td><a href='mailto:" . $row['email1'] . "'>Contact</a></td></tr>";
                    }
                } else {
                    echo "0 results";
                }

                // Close database connection
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
