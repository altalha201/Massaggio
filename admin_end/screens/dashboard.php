<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/dashboard-style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/icons/short_logo.ico">
    <title>Massaggio Admin Dashboard</title>
</head>
<body>
  <h2>Welcome Admin!</h2>
  <h5>See all the reservations</h5>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Package</th>
        <th>Date & Time</th>
        <th>Status</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
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

    // Fetch data from the database
    $query = "SELECT * FROM bookings";
    $result = mysqli_query($conn, $query);

    // Display data in the table
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['phone_number'] . "</td>";
      echo "<td>" . $row['pack'] . "</td>";
      echo "<td>" . $row['date'] . "</td>";
      echo "<td>" . $row['booked'] . "</td>";
      echo "<td><button class='button' onclick='updateStatus(" . $row['id'] . ")'>Book</button></td>";
      echo "<td><button class='button dt' onclick='deleteRow(" . $row['id'] . ")'>Delete</button></td>";

      echo "</tr>";
    }

    // Close the connection
    mysqli_close($conn);
    ?>
    </tbody>
  </table>

  <script>
    function updateStatus(userId) {
      // Send an AJAX request to update the boolean value in the database
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "../data/update-status.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Handle the response here if needed
          console.log(xhr.responseText);
          location.reload();
        }
      };
      xhr.send("userId=" + userId);
    }

    function deleteRow(userId) {
      // Send an AJAX request to delete the row from the database
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "../data/delete.php", true);
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Handle the response here if needed
          console.log(xhr.responseText);
          // Reload the page
          location.reload();
        }
      };
      xhr.send("userId=" + userId);
    }
  </script>

</body>
</html>
