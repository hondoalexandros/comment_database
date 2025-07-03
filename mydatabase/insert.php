<?php 
include "connection.php";


if(isset($_POST["username"]) && isset($_POST["message"])){
  $username = $_POST["username"];
  $message = $_POST["message"];
  
  $sql = "INSERT INTO comment (username,message)
VALUES ('$username','$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
<a href="index.html">Back</a>