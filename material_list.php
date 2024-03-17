<?php
include("connect.php");

$sql = "SELECT * FROM materials";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<table align=center>
  <link rel=stylesheet href=style.css>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Unit</th>
    <th>Stock Level</th>
    <th>Action</th>
  </tr>";
  while($row = mysqli_fetch_assoc($result)) {
    
    echo "<tr >
      <td>" . $row["id"] . "</td>
      <td>" . $row["name"] . "</td>
      <td>" . $row["description"] . "</td>
      <td>" . $row["unit"] . "</td>
      <td>" . $row["stock_level"] . "</td>
      <td>
        <a href='materialedit.php?id=" . $row["id"] . "'><button>Edit</button></a>
        <a href='material_delete.php?id=" . $row["id"] . "'><button>Delete</button></a></td>
        <td><button><a href=index.php>Back</a></button></td>
    </tr>"
    
    ;
  }
  echo "</table>";
} else {
  echo "No materials found.";
}

mysqli_close($conn);
?>
