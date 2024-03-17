<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body>

<h2 align="center">Login</h2>

<form action="login.php" method="post">
  <label for="username">Username:</label>
  <input type="text" name="username" id="username" required><br><br>
  <label for="password">Password:</label>
  <input type="password" name="password" id="password" required><br><br>
  <input type="submit" name="submit" value="Login">
</form>

<?php

if(isset($_POST['submit'])) {

  include 'connect.php'; 

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = $_POST['password']; 

 
  $sql = "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result); 
    if (password_verify($password, $row['password'])) { 
      session_start(); 
      $_SESSION['logged_in'] = true; 
      header('Location: index.php'); 
      exit;
    } else {
      echo "Invalid password";
    }
  } else {
    echo "Username not found";
  }

  mysqli_close($con); 
}

?>

</body>
</html>
