<!DOCTYPE HTML>  
<html>
<head>
<style type="text/css">
.error {color: #EC7063;}
body
{
  background-color: #ECF0F1; 
}
.content {
    max-width: 50px;
    margin-top: 80px;
    margin-bottom: 200px;
    margin-right: 50px;
    margin-left: 120px;
    padding: 150px;
	position : relative;
}
h1.pos_right
{
  position:relative;
  left: 120px;
  bottom : 60px;
}
h1.pos_right1
{
  position : relative;
  left : 750px;
  top : 90px;
  color: #3498DB;
}
.pos
{
  position : relative;
  left : 220px;
}
.resizedTextbox {width: 400px; height: 30px }
</style>
</head>
<body>  
<h1 class="pos_right1"> Welcome to FoodLovers.com </h1>
<?php
// define variables and set to empty values
$usernameErr = $passwordErr = " ";
$username = $password= " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "UserName is required";
  } else {
    $name = test_input($_POST["username"]);
  }
  
  

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="content">
<h1 class="pos_right">LOG IN</h1>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  UserName: <input type="text" name="username"  class="resizedTextbox">
  <span class="error">* <?php echo $usernameErr;?></span>
  <br><br> <br>
  Password: <input type="password" name="password" class="resizedTextbox">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br> <br>
  <input class="pos" type="button" name="submit" value="Sign Up" onclick="window.location='css.php'"> 
  <input type="submit" name="submit" value="Login"> 
  </form> 

</div>

</body>
</html>