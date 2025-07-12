<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin- Pending Reports</title>
    <style>
        body {
	margin: 0;
	padding: 0;
	font-family: 'Times New Roman', Times, serif;
}

.header {
	background-color: #007bff;
	color: white;
	padding: 20px;
	text-align: center;
}

.content {
	margin: 20px;
}

.sidebar {
	float: left;
	width: 200px;
	margin: 10px;
	background-color: #f1f1f1;
	padding: 10px;
}

.footer {
	background-color: #007bff;
	color: white;
	text-align: center;
	position: absolute;
	bottom: 0;
	width: 100%;
}

h1, h2 {
	margin: 0;
	padding: 0;
}

ul {
	list-style-type: none;
	padding: 0;
	margin: 0;
}

li {
	margin: 5px 0;
}

a {
	color: black;
	text-decoration: none;
}

a:hover {
	color: #007bff;
}
 nav {
        background-color: #f5f5f5;
        border: 1px solid #ddd;
        padding: 10px;
        margin-bottom: 20px;
      }

      nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      nav ul li {
        position: relative;
      }

      nav ul li:hover ul {
        display: block;
      }

      nav ul li a {
        display: block;
        padding: 10px;
        color: #333;
        text-decoration: none;
      }

      nav ul li ul {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 200px;
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 10px;
        margin-top: 5px;
      }

      nav ul li ul li {
        margin: 0;
      }

      nav ul li ul li a {
        display: block;
        padding: 5px 10px;
        color: #333;
        text-decoration: none;
      }

      nav ul li ul li a:hover {
        background-color: #eee;
      }
#topnav {
        background-color: #333;
        color: #fff;
        height: 50px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
      }

      #topnav a {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.2em;
        margin: 0 10px;
      }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            color: #444;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        img {
            height: 50px;
            cursor: pointer;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.9);
        }
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }
        .modal-content img {
            width: 100%;
            height: auto;
        }
        .close {
            color: #ccc;
            float: right;
            font-size: 28px;
            font-weight: bold;
            padding-right: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="topnav">
   
        <a href="index.php">Log out</a>
      </div>


<?php
//connect to mysql server with username password and database name
$connect = mysqli_connect("localhost", "root", "", "eye_wita");
// Check connection
if ($connect === false) {
    die("Opps Unable to connect " . mysqli_connect_error());
}

// create query to select verified data
$sql = "SELECT * FROM report_a_crime WHERE status='verified'";
if ($result = mysqli_query($connect, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo '<table border="1px">';
        echo "<tr>";
        echo "<th>Report ID</th>";
        echo "<th>Violation</th>";
        echo "<th>Image</th>";
        echo "<th>Location</th>";
        echo "<th>Date of violation</th>";
        echo "<th>Description</th>";
        echo "<th>Status</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['report_id'] . "</td>";
            echo "<td>" . $row['violation'] . "</td>";
            echo "<td>" . "<a href='" . $row['file'] . "' target='_blank'><img src='" . $row['file'] . "' width='100px' height='100px'></a>" . "</td>";
            echo "<td>" . $row['location'] . "</td>";
            echo "<td>" . $row['date2'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else {
        echo "No records found";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}

// Close connection
mysqli_close($connect);
?>
