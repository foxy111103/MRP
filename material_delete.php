<?php
include("connect.php");

$id = $_GET["id"];

$sql = "DELETE FROM materials WHERE id=$id";

if (mysqli_query($conn, $sql)) {
  echo "Material deleted successfully!";
  
} else {
  echo "Error deleting material: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<link rel=stylesheet href=style.css>
<td>
        <a href='material_list.php?'><button>Show Updated List</button></a>
        <button><a href="index.php">Back</a></button>
</td>