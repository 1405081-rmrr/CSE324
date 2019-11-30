<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>areamanager</title>
  
  
  
      <link rel="stylesheet" href="css1/style.css">

  
</head>

<body>
<h1>       <pre>     <font color="#7D3C98" size="6" face="Comic Sans MS" >                                           <i>Foodlovers.com</i></font></h1>
<h1>       <pre>     <font color="#7D3C98" size="6" face="Comic Sans MS" >                                            <i><u>Area Manager</u></i></font></h1>
  <html lang="en-US">
<head>
  <meta charset="utf-8">
    <title>Login</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">

</head>
    <div id="login">
      <form action="areamanager.php" method="post">
	  <?php include('errors.php'); ?>
        <span class="fontawesome-user"></span>
          <input type="text" name="man" placeholder="EmailID">
       
        <span class="fontawesome-lock"></span>
          <input type="password" name="pas" placeholder="Password">
		  <span class="fontawesome-user"></span>
          <input type="text" name="area" placeholder="AreaID">
        
        <input type="submit" name="managerlogin" value="Login">

</form>
  
  
</body>
</html>
