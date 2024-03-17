<?php
include("connect.php");

// Get materials list for product association
$sql = "SELECT * FROM products";
$materials_result = mysqli_query($conn, $sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $description = $_POST["description"];

  $sql = "INSERT INTO products (name, description) VALUES ('$name', '$description')";

  if (mysqli_query($conn, $sql)) {
    $product_id = mysqli_insert_id($conn); // Get newly inserted product ID
  }
}?>



<form  method="post" action="">
<link rel="stylesheet" href="style.css">
        <table align="center">
            <tr><td>Material Name:</td><td><input type="text" name="name"></td></tr>
            <tr><td>Material Quantity:</td><td><input type="text" name="description"></td></tr>
            <tr><td><button type="submit" name="submit">Submit</button></td>
            <td><button><a href="index.php">Back</a></button></td>
            </table>
</form>