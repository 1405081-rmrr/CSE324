<?php include('server.php') ?>
<!DOCTYPE html>
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
    margin-left: 350px;
    padding: 150px;
	position : relative;
}
#wgtmsr{
 width:150px;
height : 200 px; 
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
<div class ="content">
<form method="POST" >
<label for="Manufacturer"> Manufacturer : </label>
<div style="width: 180px; overflow: hidden;">
  <select id="cmdbox" name="Wgtmsr"     onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
     <option value="0">Select Manufacturer</option>
     <option value="1">--Any--</option>
     <option value="2">Toyota</option>
     <option value="3">Nissan</option>
</select>
<input type="hidden" name="selected_text" id="selected_text" value="" />
<input type="submit" name="search" value="Search"/>
</form>


 <?php
if(isset($_POST['search']))
{

    $makerValue = $_POST['Wgtmsr']; // make value

    $maker = mysql_real_escape_string($_POST['selected_text']); // get the selected text
	if($maker=='Toyota')
	{header('location: index.php');}
    
}
 ?>
 </div>