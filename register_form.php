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
// Check if form is submitted
if (isset($_POST['signup'])) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if passwords match
    if ($password != $confirm_password) {
        echo "Passwords do not match.";
    } else {
        // Insert user data into database
        $sql = "INSERT INTO register (name, email1, password1, cpassword)
        VALUES ('$name', '$email', '$password','$confirm_password')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Registration successful.');</script>";
    header('Location: userdashboard.php');
    exit();
} else {
    echo "<script>alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "');</script>";
}
    }
}

// Close database connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <div class = "container">
        <div class = "form-container sign-up-container">
           <form method="POST" id="form" action="register_form.php">
            <h1>Create Account</h1>
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit" class="signup_button" name="signup" onclick="showPopup()">Sign Up</button>

<script>
function showPopup() {
  alert("Registration successful!");
  
}
</script>
            <div class="login-now">
            <p>Already have an account?</p> 
            <a href="login_form.php">Login now</a>
            </div>
          </form>
        </div>
        <div class = "form-container sign-up-img-container">
            <form action ="#">
                <img src ="tnp.png">
              </form>  
        </div>
    </body>
</html>
