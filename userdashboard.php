<!DOCTYPE html>
<html>
<head>
    <title>Eye Wita - Welcome User</title>
	<style>
    header{
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    position: fixed;
    width: 100%;
    z-index: 1000;
    top: 0;
    left: 0;
    right: 0;
}
nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 80px;
} 
nav .logo {
    font-size: 24px;
    font-weight: 700;
    color: #333;
    text-transform: uppercase;
    letter-spacing: 2px;
}
  
nav ul{
    display: flex;
    list-style: none;
}
nav ul li{
    margin-left: 40px;
}
  
nav ul li:first-child{
    margin-left: 0;
}
nav ul li a{
    font-size: 16px;
    font-weight: 600;
    color: #333;
    text-decoration: none;
    text-transform: uppercase;
    transition: all 0.2s ease-in-out;
}
nav ul li a:hover{
    color: #007bff;
}

		@keyframes slide-in {
			from { opacity: 0; transform: translateY(-10px); }
			to { opacity: 1; transform: translateY(0); }
		}
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        main {
            padding-top: 230px; 
            padding-left: 50px;
            padding-right: 50px;
            text-align: center;
            margin-top: 80px;
        }
        /* Target the main element */
main {
  background-color: #f5f5f5; /* Set a background color */
  border: 1px solid #ccc; /* Add a border */
  padding: 20px; /* Add some padding */
}

/* Target the h2 element */
h2 {
  font-size: 24px; /* Set the font size */
  margin-bottom: 10px; /* Add some margin below the heading */
}

/* Target the .username span element */
.username {
  color: blue; /* Set the text color */
  font-weight: bold; /* Make the text bold */
}

/* Target the p element */
p {
  font-size: 18px; /* Set the font size */
  line-height: 1.5; /* Set the line height */
}
.slideshow img {
  width: 100%;
  height: calc(100vw * 9 / 16);
  object-fit: cover;
}
	</style>
</head>
<body>
	<header>
        <div class="container">
            <nav>
                <a href="userdashboard.php" class="logo">EYE WITA</a>
                <ul>
                  <li><a href="userdashboard.php">Dashboard</a></li>
                  <li><a href="report_the_violation.php">Report a Violations</a></li>
                  <li><a href="verified_reports.php">View Reports</a></li>
                  <li><a href="stations.php">Station Details</a></li>
                  <li><a href="feedback_form.php">Feed Back</a></li>
                  <li><a href="index.php">Log Out</a></li>
                  
                </ul>
            </nav>
        </div>
        </header>
        <main>
  <h2>Hey <span class="username">Citizen</span></h2>
  <p>You are now logged in to the EYE WITA. Here, you can report any crimes you have witnessed or experienced and view reports submitted by others.</p>

  <div class="slideshow-container">
    <div class="mySlides fade">
      <img src="home1.jpg" style="height: 300px; object-fit: cover;">
      <div class="text">Dont speak phone calls while driving.</div>
    </div>

    <div class="mySlides fade">
      <img src="home2.jpg" style="height: 300px; object-fit: cover;">
      <div class="text">Dont text while driving</div>
    </div>

    <div class="mySlides fade">
      <img src="home3.jpg" style="height: 300px; object-fit: cover;">
      <div class="text">Dont do drunk and drive</div>
    </div>
  </div>
  
  <br>
  
  <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
  </div>
</main>
<script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 5 seconds
  }
</script>
