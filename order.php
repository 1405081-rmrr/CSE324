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
    height: 200%;
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
	top : 15%;
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
<h1>       <pre>     <font color="#7D3C98" size="8"  >                       <i><u>Your Orders</u></i></font></h1>
<div class="content"> </div> 
<div class="padding"> </div> 
<form method="post" action="home.php";>
 <button type="submit"  class="buttonlog" name="logout" >Logout</button> 
</form> 
<?php 
	
	if (isset($_POST['confirm'])){

		$qua=0;
		$emailid= $_SESSION['email'] ;
		//$menuid= $_SESSION['menuid']  ;
		$menuid= $_SESSION['order']  ;
	    $quantity =$_SESSION['quantity'];
		 /*$result = mysqli_query($db,"select p.id as Pad,m.id as Ma,r.id as Re,o.quantity,m.price from persons p inner join orders o on p.id=o.persons_id 
		 inner join menu m on m.id=o.menu_id inner join restaurants r on r.id=o.res_id"); */
		 $result = mysqli_query($db,"select p.email as Ea,m.name as Ma,r.name as Re,o.quantity,m.price from persons p inner join orders o on p.id=o.persons_id
		 inner join menu m on m.id=o.menu_id inner join restaurants r on r.id=o.res_id where m.name=(select name from
		 menu where id=m.id) and r.name=(select name from restaurants where id=r.id) and  p.email=(select email from persons where email='$emailid')"); 
		
echo "<table id='t' border='5' width='400' cellpadding=10 align='center'>
<tr>
<th>Email ID</th>
<th>Menu Name</th>
<th>Restaurant Name</th>
<th>Quantity</th>
<th>Price</th>
</tr>";    
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Ea'] . "</td>";
echo "<td>" . $row['Ma'] . "</td>";
echo "<td>" . $row['Re'] . "</td>";
echo "<td>" . $row['quantity'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "</tr>";
$qua=$qua+($row['quantity']*$row['price']);
}
$qua=$qua+50;
echo "</table>";
echo "<br> <br>";
echo "<pre>                                                                      <font color='#17202A' size='5'                 <i>Your total Payable amount is </i> <u>$qua</u> taka only<br>
                                         Your Order will be approved by admin as soon as possible <br>
					          Thank You from <i>Foodlovers.com</i></font></pre>";
}

?>
</html>
