<?php
$con=mysqli_connect('localhost','root','',"foodlovers");
// Check connectionroot
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT name,price FROM menu where id=25");

echo "<table border='5' width='400' cellpadding=10 align='center'>
<tr>
<th>Name</th>
<th>Price</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>