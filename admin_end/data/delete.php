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

// Check if the user ID is passed through POST request
if (isset($_POST['userId'])) {
  $userId = $_POST['userId'];

  // Delete the row from the database
  $query = "DELETE FROM bookings WHERE id = '$userId'";
  $result = mysqli_query($conn, $query);

  if ($result) {
    echo '<script>alert("Booking Deleted");</script>';
  } else {
    echo "Error deleting row: " . mysqli_error($conn);
  }
}

// Close the connection
mysqli_close($conn);
?>
