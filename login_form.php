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
if (isset($_POST['subbnt'])) {
    $loginType = $_POST['loginType'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query database for user with matching email and password
    if ($loginType === 'admin') {
        $sql = "SELECT * FROM admin WHERE admin_email='$email' AND admin_password='$password'";
    } else {
        $sql = "SELECT * FROM register WHERE email1='$email' AND password1='$password'";
    }

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Login successful
        if ($loginType === 'admin') {
            header("Location: admin_dashboard.php");
        } else {
            header("Location: userdashboard.php");
        }
        exit();
    } else {
        // Login failed
        echo "<script>alert('Invalid username and password');</script>";
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
    <title>EYE WITA - Login</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div class = "container">
    <div class = "form-container sign-in-container">
        <form method="POST"  >
            <h1> Sign in</h1>
            <select name="loginType">
                <option value="citizen">Citizen</option>
                <option value="admin">Admin</option>
            </select>
            <input type ="email" placeholder="Email" name="email">
            <input type ="password" placeholder="Password" name="password">
            <button class ="signin_button" name="subbnt"> Sign in </button>
            <div class="register-now">
                <p>Don't have an account?</p>
                <a href="register_form.php">Register now</a>
            </div>
        </form> 
    </div>
    <div class = "form-container sign-in-img-container">
        <form action ="#">
            <img src ="tnp.png">
        </form>  
    </div>
</div>
</body>
</html>
