<?php
include "connection.php";

$sql = "SELECT * FROM comment";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Username</th><th>Message</th><th>Actions</th></tr>";

    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["message"] . "</td>";
        echo "<td><a href='edit.php?user=". $row["username"]. "'>Edit</a> <a href='delete.php?username=" . $row["username"] . "'>Delete</a></td>";

        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No data.";
}

$conn->close();
?>
<a href="index.html">Back</a>