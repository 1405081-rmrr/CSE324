<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "foodlovers";

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'foodlovers');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, name, price FROM menu where id=25";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
        //echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["price"]. "<br>";
        <table width="400" cellpadding=10 align="center">
  <tr>
    <th>Food ID</th>
    <th>Food Name</th>
    <th> Price </th>

  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>

    }
 else {
    echo "0 results";
}

mysqli_close($conn);
?> 

</body>
</html>