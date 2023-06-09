<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/styles/login-style.css">
  <title>Massaggio Admin</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/icons/short_logo.ico">
</head>
<body>
  <div class="container">
    <div class='logo'>
      <img src="assets/images/admin_logo.png" alt="Logo">
    </div>
    <h2>Login</h2>
    <form action="data/login.php" method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>