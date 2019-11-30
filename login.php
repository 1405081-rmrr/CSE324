<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
.button
{
	
	background-color: #2C3E50  ;
	position : absolute;
	left : 160%;
	bottom : 130%;
    border: none;
    color: #AAB7B8    ;
    padding: 5px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 10px 2px;
    cursor: pointer;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.button1
{
	
	background-color: #2C3E50  ;
	position : absolute;
	right : 120%;
	bottom : 130%;
    border: none;
    color: #AAB7B8    ;
    padding: 5px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 10px 2px;
    cursor: pointer;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
</style>
	
	<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="net.css" type="text/css">
<div class="body-content">
  <div class="module">
</head>
<body>
	<h1><b><pre>                    Welcome to FoodLovers.com </pre></b> </h1>
	<div class="header">
		
	</div>
<div class="body-content">
  <div class="module">
<link rel="stylesheet" href="net.css" type="text/css">
<body>

	
		<h2><b><pre>                 Login</pre></b> </h2>

	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		
		<button type="button" class="button" onclick= "document.location='register.php'">Sign Up</button> 
		<button type="button" class="button1" onclick= "document.location='home.php'">HOME</button>  		
	</form>


</body>
</html>