 <?php
include "connection.php";

if(isset($_GET["user"])){
$user = $_GET["user"];
$sql = "SELECT * FROM comment WHERE username = '$user'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
}
?>
<form action="" method="post">
      Username:<input type="text" name="username" value="<?php echo $row["username"];?>"><br><br>
      Message:<textarea name="message"><?php echo $row["message"];?></textarea><br><br>
      <input type="submit">
</form>
<?php
if(isset($_POST["username"]) && isset($_POST["message"])){
  
$username = $_POST["username"];
$message = $_POST["message"];
$user = $_GET["user"];


$sql = "UPDATE comment SET username='$username', message='$message' WHERE username='$user'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
}
?>
<a href="showdata.php">Back</a>