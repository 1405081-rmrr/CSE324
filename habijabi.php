<?php
$db=mysqli_connect('localhost','root','',"foodlovers");
// Check connectionroot
 if (isset($_POST['addtocart'])) {
    $id1 = mysqli_real_escape_string($db, $_POST['foodid']);
    $quantity = mysqli_real_escape_string($db, $_POST['quantity']);
  }
    //$areaid = mysqli_real_escape_string($db, $_POST['areaid']);
      $query = "SELECT id,name,price*quantity from menu where cat_id=8 and res_id=27";
      $result = mysqli_query($db, $query);
       echo "<table border='5' width='400' cellpadding=10 align='center'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Price</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['price*quantity'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($db);
    

?>