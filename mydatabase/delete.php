<?php
include "connection.php";

$username = $_GET["username"];
$sql = "DELETE FROM comment WHERE username='$username'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
<a href="showdata.php">Back</a>