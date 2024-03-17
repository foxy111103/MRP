<?php
include("connect.php");

$id = $_GET["id"];

$sql = "DELETE FROM products WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "Product deleted successfully!";
  
} else {
  echo "Error deleting material: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<link rel=stylesheet href=style.css>
<td>
        <a href='product_list.php?'><button>Show Updated List</button></a>
        <button><a href="index.php">Back</a></button>
</td>