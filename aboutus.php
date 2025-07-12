<!DOCTYPE html>
<html>
<head>
	<title>About Us - EYE WITA</title>
	<style>
	/* General styles */
	body {
		margin: 0;
		font-family: 'Times New Roman', Times, serif;
		font-size: 16px;
		line-height: 1.6;
	}
	
	.container {
		max-width: 1000px;
		margin: 0 auto;
		padding: 0 20px;
	}
	
	/* Header styles */
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
	/* Main content styles */
	h1, h2 {
		margin-top: 40px;
	}
	
	h1 {
		font-size: 36px;
		line-height: 1.2;
	}
	
	h2 {
		font-size: 24px;
		line-height: 1.2;
	}
	
	p {
		margin-top: 20px;
	}
	
	.motto {
		margin-top: 40px;
		padding: 20px;
		background-color: #f0f0f0;
		border-radius: 5px;
	}
	
	/* Responsive styles */
	@media screen and (max-width: 768px) {
		header {
			padding: 10px;
		}
		
		nav ul {
			flex-direction: column;
		}
		
		nav ul li {
			margin: 10px 0;
		}
	}
	</style>
</head>
<body>
<header>
        <div class="container">
        <nav>
            <a href="#" class="logo">EYE WITA</a>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="aboutus.php">About Us</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="login_form.php" target="_blank">Log In</a></li>
            </ul>
        </nav>
    </div>
    </header>
	<div class="container">
		<pre>
		
	</pre>
		<h1>About Us</h1>
		<p>Welcome to EYE WITA - a web application designed to enhance public safety and security. Our goal is to provide citizens with an easy and convenient way to report crimes and other suspicious activities to the police, as well as access useful information to stay informed and prepared.</p>
		<p>At EYE WITA, we believe that everyone has the right to live in a safe and secure environment, and we are committed to creating a platform that empowers individuals to take an active role in crime prevention. By leveraging the power of technology, we aim to bridge the gap between law enforcement agencies and citizens, creating a more connected and responsive community.</p>
		<h2>Our Features</h2>
		<p>Our web application allows users to take a photo or video of an incident, add a description and location, and submit the report to the police in real-time. This enables law enforcement agencies to respond quickly and effectively to any emergency, ultimately reducing crime rates and increasing public safety.</p>
		<p>In addition to our reporting and emergency features, EYE WITA provides users with useful information such as emergency contact numbers, safety tips, and alerts about any criminal activities in the area. We believe that knowledge is power, and by keeping users informed and prepared, we can help create safer and more resilient communities.</p>
		<h2>Our Team</h2>
		<p>Our team is made up of dedicated individuals who are passionate about using technology for the greater good. We work tirelessly to ensure that our platform is user-friendly and accessible to all members of the community, and we are committed to continuously improving our services to meet the evolving needs of our users.</p>
		<div class="motto">
			<p>The motto of EYE WITA is "Empowering individuals, enhancing communities". This motto reflects our belief that by providing individuals with the tools and information they need to report crimes and suspicious activities, we can create more connected, resilient, and safer communities. At EYE WITA, we are committed to empowering individuals to take an active role in crime prevention and creating a world where everyone has the right to live in a safe and secure environment.</p>
		</div>
		<p>Thank you for choosing EYE WITA as your partner in crime prevention. Together, we can build safer communities and create a brighter future for all.</p>
	</div>
</body>
</html>


