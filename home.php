<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body, html {
    height: 100%;
    margin: 0;
        background-color: #D7BDE2  ;
}

.bg {
    /* The image used */
    background-image: url("burger.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.button
{
	
	background-color: #196F3D     ;
	position : absolute;
	left : 70%;
	top : 15%;
    border: none;
    color: #D35400      ;
    padding: 20px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 5px 5px;
    cursor: pointer;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.buttonlog
{
	
	background-color: #196F3D     ;
	position : absolute;
	left : 80%;
	top : 15%;
    border: none;
    color: #D35400      ;
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
     <h2> <marquee> <font color="blue"> Welcome to <i>Foodlovers.com</i>. Order Food and Enjoy it </marquee> </font></h2>
 
<div class="bg"> </div>
<form method="post" action="home.php">


<button type="button"  class="button" onclick= "document.location='register.php'">Sign Up</button> 
<button type="button"  class="buttonlog" onclick= "document.location='login.php'">Login</button> 
</form>

</body>
</html>