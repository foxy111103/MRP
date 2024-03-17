<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body>

<h2>Signup</h2>

<form action="signup.php" method="post">
  <label for="username">Username:</label>
  <input type="text" name="username" id="username" required><br><br>
  <label for="password">Password:</label>
  <input type="password" name="password" id="password" required><br><br>
  <button type="submit" name="submit" value="Signup">Submit</button>
</form>

<?php

// Process form submission (if any)
if(isset($_POST['submit'])) {

  include 'connect.php';

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = hashPassword($_POST['password']); // Hash password securely

  // Check if username already exists
  $sql = "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo "Username already exists";
  } else {
   
    $sql = "INSERT INTO users (username, password)
       VALUES ('$username', '$password')";

    if (mysqli_query($conn, $sql)) {
     
      header('Location: login.php');
      exit;
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  mysqli_close($conn);
}

?>

</body>
</html>