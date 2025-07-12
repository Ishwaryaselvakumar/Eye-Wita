<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin- Pending Reports</title>
    <style>
        body {
	margin: 0;
	padding: 0;
	font-family: Arial, sans-serif;
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
        input[type="submit"] {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 12px 28px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
        select {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #fff;
            font-size: 16px;
            color: #333;
        }

        select option {
            background-color: #fff;
            color: #333;
        }

    </style>
</head>
<body>
    <div id="topnav">
        <a href="admin_dashboard.php">Home</a>
        <a href="index.php">Log out</a>
      </div>


      <?php
//connect to mysql server with username password and database name
$connect = mysqli_connect("localhost", "root", "", "eye_wita");

// Check connection
if ($connect === false) {
    die("Opps Unable to connect " . mysqli_connect_error());
}

// check if form is submitted
if (isset($_POST['save'])) {
    // loop through all report IDs and update the status in the database
    foreach ($_POST['report_id'] as $key => $report_id) {
        $status = mysqli_real_escape_string($connect, $_POST['status'][$key]);

        // create query to update status in database
        $sql = "UPDATE report_a_crime SET status='$status' WHERE report_id='$report_id'";

        if (mysqli_query($connect, $sql)) {
            echo "Status updated successfully for report ID: " . $report_id . "<br>";
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect) . "<br>";
        }
    }
}

// create query to select data
$sql = "SELECT * FROM report_a_crime";

if ($result = mysqli_query($connect, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        echo '<form method="post">';
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
            echo "<td><select name='status[]'>";
            echo "<option value='pending' " . ($row['status'] == 'pending' ? 'selected' : '') . ">Pending</option>";
            echo "<option value='verified' " . ($row['status'] == 'verified' ? 'selected' : '') . ">Verified</option>";
            echo "<option value='ignore' " . ($row['status'] == 'ignore' ? 'selected' : '') . ">Ignore</option>";
            echo "</select></td>";
            echo "<input type='hidden' name='report_id[]' value='" . $row['report_id'] . "'>";
            echo "</tr>";
        }

        echo "</table>";
        echo '<input type="submit" name="save" value="Save">';
        echo "</form>";
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

<script>
function changeStatus(selectElement, reportId) {
    var status = selectElement.value;
    var btn = document.getElementById("btn_"+reportId);
    btn.style.display = "block";
    btn.onclick = function() {
        // send AJAX request to update status in the database
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // update status in the table
                var td = selectElement.parentNode.previousSibling;
                td.innerHTML = status;
                // hide submit button
                btn.style.display = "none";
            }
        };
        xhttp.open("POST", "update_status.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("report_id="+reportId+"&status="+status);
    }
}

function saveStatus() {
    // get all status values from the table
    var statusValues = [];
    var table = document.getElementsByTagName("table")[0];
    var rows = table.getElementsByTagName("tr");
    for (var i = 1; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName("td");
        var status = cells[6].innerHTML;
        statusValues.push(status);
    }
    // send AJAX request to update all status values in the database
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert("Status values updated successfully");
        }
    };
    xhttp.open("POST", "update_all_status.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("statusValues="+JSON.stringify(statusValues));
}
</script>
