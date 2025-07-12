<!DOCTYPE html>
<html>
<head>
	<title>admin dashboard</title>
<STYLE>
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

      /* styles for left navigation bar */
      #sidenav {
        background-color: #f5f5f5;
        border-right: 1px solid #ddd;
        width: 200px;
        height: 100%;
        position: fixed;
        top: 50px;
        left: 0;
        overflow-y: auto;
        padding: 10px;
      }

      #sidenav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
      }

      #sidenav li {
        margin: 10px 0;
      }

      #sidenav a {
        color: #333;
        text-decoration: none;
      }

      #sidenav a:hover {
        color: #555;
      }

      /* styles for main content area */
      #main {
        margin-left: 200px;
        padding: 20px;
      }
#main {
  margin-left: 160px; /* same as the width of the left navigation bar */
  padding: 0 20px;
}

/* style for the image */
img {
  display: block;
  margin: 0 auto;
  max-width: 100%;
  height: auto;
}
p {
  font-size: 18px;
    margin-bottom: 30px;
    text-align: justify;
}
.footer{
  text-align: center;
}
</STYLE>

</head>
<body>
	<div class="header">
		<h1>Control Centre Home Page</h1>
	</div>
	<!--<div class="content">
		<h2>Recent Activity</h2>
		<p>You have no recent activity.</p>
	</div>-->
      <div id="topnav">
      <a href="admin_dashboard.php">Home</a>
      <a href="index.php">Log out</a>
    </div>
	</div>
  <div class="sidebar">
		<h2><b>Options<b></h2><br><br>
      <li> <a href="pending_reports.php" class="btn">Pending Reports</a></li><br>
      <li><a href="verified_reports.php" class="btn">Verified Reports</a></li><br>
      <li><a href="admin_feedback.php" class="btn">View Feedback</a></li><br>
      <li><a href="users.php" class="btn">Registered Users</a></li><br>
	</div>
<div id="main">
      <h1>Welcome Admin!</h1>
      <p>You are now logged in to the EYE WITA control centre. From here, you can manage and monitor all aspects of the crime reporting system. You have access to all reports submitted by citizens, and you can assign those reports to police officers for further investigation.</p>
	<div class="footer">
		<p><center>&copy;2023 EYE WITA</center></p>
	</div>
</body>
</html>
