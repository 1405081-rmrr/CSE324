<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    
<style type="text/css">
.padding {
    margin-top: 5%;
}
table, th, td {
    border: 1px solid black;
}
div {
    margin-top: 3%;
    margin-left: 40%;
}

body, html {
    height: 100%;
    margin: 0;
    background-color: #ABEBC6;
}





 .content {

      position: absolute;
      top: 100%;

      width: 50%;

      height: 100px;
}

</style>
</head>
<body> 
<h1>       <pre>     <font color="#7D3C98" size="8"  >               <i><u>Turkish Food from Pizza King</u></i></font></h1>
<div class="content"> </div> 
<div class="padding"> </div> 
<?php
$db=mysqli_connect('localhost','root','',"foodlovers");
// Check connectionroot
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($db,"SELECT id,name,price FROM menu where cat_id=7 and res_id=34");

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
echo "<td>" . $row['price'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($db);

?>

<div>
<form method="post"  action="banglakhazana.php">
 <select name="order">
  <option>Select Food ID</option>
  <option value="36">36</option>
  <option value="37">37</option>
    <option value="37">37</option>
	  <option value="37">37</option>
	    <option value="37">37</option>
 </select>
   <select name="quantity">
  <option>Quantity</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
   <option value="4">4</option>
    <option value="5">5</option>
 <option value="6">6</option>
  <option value="7">7</option>
   <option value="8">8</option>
    <option value="9">9</option>
	 <option value="10">10</option>
	  <option value="11">11</option>
	   <option value="12">12</option>
	    <option value="13">13</option>
		 <option value="14">14</option>
		  <option value="15">15</option>
		   <option value="16">16</option>
		    <option value="17">17</option>
	 <option value="18">18</option><option value="19">19</option></select>
  <button type="submit" name="addtocart">Add to Cart</button>
</form> 
</div>
</body>
</html>


