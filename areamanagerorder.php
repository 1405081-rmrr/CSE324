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
.buttonlog
{
	
	background-color: #EAF2F8       ;
	position : absolute;
	left : 80%;
	top : 25%;
    border: none;
    color: #A569BD        ;
    padding: 20px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 5px 5px;
    cursor: pointer;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}


</style>
</head>
<body> 
<h1>       <pre>     <font color="#7D3C98" size="8"  >                      <i><u>Your Orders</u></i></font></h1>

<div class="content"> </div> 
<div class="padding"> </div> 
 <form method="post" action="areamanagerorder.php">
 <button type="submit" class="buttonlog" name="lg">Confirm</button> 
</form>
<?php 
	
	
		$q=0;
		$area_id=$_SESSION['area'];
		 /*$result = mysqli_query($db,"select p.id as Pad,m.id as Ma,r.id as Re,o.quantity,m.price from persons p inner join orders o on p.id=o.persons_id 
		 inner join menu m on m.id=o.menu_id inner join restaurants r on r.id=o.res_id"); */
		 $result = mysqli_query($db,"select * from orders where area_id='$area_id' "); 
		
echo "<table id='t' border='5' width='400' cellpadding=10 align='center'>
<tr>
<th>Order ID</th>
<th>Persons ID</th>
<th>Menu ID</th>
<th>Area ID</th>
<th>Restaurant ID</th>
<th>Quantity</th>
<th>Menu Price</th>
<th>Time of Order</th>
</tr>";    
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['order_id'] . "</td>";
echo "<td>" . $row['persons_id'] . "</td>";
echo "<td>" . $row['menu_id'] . "</td>";
echo "<td>" . $row['area_id'] . "</td>";
echo "<td>" . $row['res_id'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "<td>" . $row['menu_price'] . "</td>";
echo "<td>" . $row['time_of_order'] . "</td>";
echo "</tr>";

}


	
?>
</html>
