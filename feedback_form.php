<!DOCTYPE html>
<html>
  <head>
    <title>Eye WITA Feedback Form</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }
    h1 {
      text-align: center;
      color: #008CBA;
    }
      form {
      max-width: 500px;
      margin: 0 auto;
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    label {
      display: block;
      font-weight: bold;
      margin-bottom: 10px;
      color: #555;
    }
    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 20px;
    }
    input[type="submit"] {
      background-color: #008CBA;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #006080;
    }
</style>
  </head>
  <body>
    <h1>Eye WITA Feedback Form</h1>
    <form action="submit-feedback.php" method="POST" onsubmit="return validateForm()">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="5" required></textarea>
      <input type="submit" value="Submit">
    </form>
    <script>
    function validateForm() {
  var name = document.forms["feedbackForm"]["name"].value;
  var email = document.forms["feedbackForm"]["email"].value;
  var message = document.forms["feedbackForm"]["message"].value;
  if (name == "" || email == "" || message == "") {
    alert("Please fill out all fields.");
    return false;
  }
}
</script>
</body>
</html>
