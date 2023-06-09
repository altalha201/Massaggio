<?php
// Assuming you have already established a database connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "apoinment_system";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Check the connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$package = implode(', ', $_POST['package']); // Convert the array to a comma-separated string

// Create and execute the SQL query to insert the data
$sql = "INSERT INTO `bookings` (`id`, `name`, `email`, `phone_number`, `date`, `pack`, `booked`) VALUES (NULL, '$name', '$email', '$phone', '$date', '$package', 'Not Booked')";

if (mysqli_query($conn, $sql)) {
  echo '<script>alert("Booking appoinment successful. Our reciptionist will call you to confirm"); window.location.href = "../index.php";</script>';
} else {
  echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
