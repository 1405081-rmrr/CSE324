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

      height: 300px;
}
.buttonlog
{
	
	background-color:  #ABB2B9    ;
	position : absolute;
	right : 70%;
	top : 80%;
    border: none;
    color: #2C3E50        ;
    padding: 20px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 5px 5px;
    cursor: pointer;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.button
{
	
	background-color:  #EAF2F8      ;
	position : absolute;
	left : 70%;
	top : 80%;
    border: none;
    color: #A569BD      ;
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
<form method="post" action="category.php";>
 <button type="submit"  class="buttonlog" name="confirmshop" >Continue to shopping</button> 
 </form>
 <form method="post" action="order.php">
 <button type="submit" class="button" name="confirm" >Confirm Order</button> 
</form> 
<?php 
	

		$qua=0;
		$emailid= $_SESSION['email'] ;
		//$menuid= $_SESSION['menuid']  ;
		$menuid= $_SESSION['order'];
	    $quantity =$_SESSION['quantity'];
		$result = mysqli_query($db,"select p.email as PID,m.id as MID,m.name as Mname,o.quantity as Qua from orders o inner
		join persons p on p.id=o.persons_id	 inner join menu m on m.id=o.menu_id where m.name=(select name
		from menu where id=m.id) and p.email=(select email from persons where email='$emailid')");
echo "<table id='t' border='5' width='400' cellpadding=10 align='center'>
<tr>
<th> Email </th>
<th>Menu ID</th>
<th>Menu Name</th>
<th>Quantity</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['PID'] . "</td>";
echo "<td>" . $row['MID'] . "</td>";
echo "<td>" . $row['Mname'] . "</td>";
echo "<td>" . $row['Qua'] . "</td>";
echo "</tr>";
}
$qua=$qua+50;
echo "</table>";
echo "<br> <br>";



?>
</html>
