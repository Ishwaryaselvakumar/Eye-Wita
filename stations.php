<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stations</title>
    <link rel ="stylesheet" href="stationstyle.css">
</head>
<body>
    <header>
    <div class="container">
            <nav>
                <a href="userdashboard.php" class="logo">EYE WITA</a>
                <ul>
                  <li><a href="userdashboard.php">Dashboard</a></li>
                  <li><a href="report_the_violation.php">Report a Violations</a></li>
                  <li><a href="view_reports.php">View Reports</a></li>
                  <li><a href="stations.php">Station Details</a></li>
                  <li><a href="index.php">Log Out</a></li>
                </ul>
            </nav>
        </div>
    </header>
	<section class="banner">
  <div class="container">
    <div class="banner-content">
      <h1>Select the city</h1>
      <select id="citySelect">
        <option value="">-- Select a city --</option>
        <option value="City_Chennai">Chennai</option>
        <option value="City_Coimbatore">Coimbatore</option>
        <option value="City_Dindigul">Dindigul</option>
        <option value="City_Erode">Erode</option>
        <option value="City_Hosur">Hosur</option>
        <option value="City_Karur">Karur</option>
        <option value="City_Madurai">Madurai</option>
        <option value="City_Namakkal">Namakkal</option>
        <option value="City_Salem">Salem</option>
        <option value="City_Sivakasi">Sivakasi</option>
        <option value="City_Vellore">Vellore</option>
        <option value="City_Thoothukudi">Thoothukudi</option>
        <!--<option value="City_Tiruchirappalli">Tiruchirappalli</option>
        <option value="City_Villupuram">Villupuram</option>-->
      </select>
      <button onclick="submitCity()">Submit</button>
    </div>
  </div>
</section>
	<script>
		function submitCity() {
			// Get the selected city value
			var city = document.getElementById("citySelect").value;

			// Redirect to the selected city page
			if (city !== "") {
				window.location.href = city.toLowerCase() + ".html";
			}
		}
	</script>
</body>
</html>