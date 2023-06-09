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

  // Update the boolean value in the database
  $query = "UPDATE bookings SET booked = 'Booked' WHERE id = '$userId'";
  $result = mysqli_query($conn, $query);

  if ($result) {
    echo "Status updated successfully.";
  } else {
    echo "Error updating status: " . mysqli_error($conn);
  }
}

// Close the connection
mysqli_close($conn);
?>
