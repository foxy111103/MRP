<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $description = $_POST["description"];
  $sql = "INSERT INTO products (name, description) VALUES ('$name', '$description')";

  if (mysqli_query($conn,$sql)) {
    echo "New material created successfully!";
    header("Location: product_list.php"); // Redirect to list page
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>
<form  method="post" action="">
<link rel="stylesheet" href="style.css">
        <table align="center">
            <tr><td>Material Name:</td><td><input type="text" name="name"></td></tr>
            <tr><td>Material Description:</td><td><input type="text" name="description"></td></tr>
            <tr><td><button input type="submit" name="submit">Submit</button></td>
            <td><button><a href="index.php">Back</a></button></td></tr>
</table>
</form>
