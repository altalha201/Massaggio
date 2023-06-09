<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "apoinment_system";

// Establish a connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Perform a query to check if the username and password match a record in the database
  $query = "SELECT * FROM admin WHERE user_name = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    // Login successful
    // Redirect to a different page
    header("Location: ../screens/dashboard.php");
    exit(); // Make sure to exit after redirecting
  } else {
    // Login failed
    echo '<script>alert("Invalid username or password."); window.location.href = "../index.php";</script>';
  }
}

// Close the connection
mysqli_close($conn);
?>
