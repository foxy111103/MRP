<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $description = $_POST["description"];
  $unit = $_POST["unit"];
  $stock_level = $_POST["stock_level"];

  $sql = "INSERT INTO materials (name, description, unit, stock_level) VALUES ('$name', '$description', '$unit', $stock_level)";

  if (mysqli_query($conn,$sql)) {
    echo "New material created successfully!";
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
            <tr><td>Material Unit:</td><td><input type="text" name="unit"></td></tr>
            <tr><td>Material Stock:</td><td><input type="text" name="stock_level"></td></tr>
            <tr><td><button type="submit" name="submit">Submit</button></td>
            <td><button><a href="index.php">Back</a></button></td>
          </tr>
           
</table>
</form>
