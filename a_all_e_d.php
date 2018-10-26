<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
$sname=$_SESSION['s_name'];
include("db.php");
$ae_id=$_SESSION["ae_id"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sghomepage</title>
<style>
*
{
	margin=0px;
}
ul
{
	height:60px;
	list-style:none;
}
h1
{
	color:#033;
	font-family:"Arial Black", Gadget, sans-serif;
	text-align:center;
}
a
{
	color:#333333;
	text-decoration:none;
}
li
{
border:1px red solid; 
text-align:center; 
background-color:#009999;
margin-up:1px;
border-radius:4px;
float:left;
margin-left:5px;
padding:5px;
}
li:over
{
	
	background-color:#FCC;
	curser:pointer;
	
}

.wrapper
{
	width:700px;
	height:100px;
	border:1pxsolid green;
	}
</style>
</head>

<body bgcolor="#99FFCC">
<h1 align="center" style="font-size: 36px" color="#333333">STUDENT GUIDER</h1>
<form action="logout.php" method="post">
  <div align="right"><?php echo " $sname "; ?>
    <input name="Logout" type="submit" value="Logout" />
  </div>
</form>
<hr color="#333333" size="3" />
<div> 
<p>
<marquee scrollamount="9" behavior="scroll" direction="left" height="25" bgcolor="#00CCFF">
<span style="font-size: 24px"><b>The Platform for ENHANCEMENT Talent</b></span>
</marquee>
</p>
<hr color="#333333" size="3" />
</div> 
<ul>
<li><a href="a_home_1.php">HOME</a></li>
<li><a href="a_all_events.php">EVENTS</a></li>
<li><a href="a_all_notices.php">NOTICES</a></li>
<li><a href="a_all_stu.php">USERS</a></li>
</ul>

<div align="center">
  <?php 

$aed_select=mysql_query("SELECT * FROM `event` WHERE `e_sl` = '$ae_id'");
$aed_row=mysql_fetch_array($aed_select);
$ae_gro=$aed_row["e_group"];

$query_gro=mysql_query("SELECT * FROM `group` WHERE `g_n` = '$ae_gro'");
$row_gro=mysql_fetch_array($query_gro);
	   $name_gro=$row_gro["g_name"];
	   $id_cat=$row_gro["c_n"];

$query_cat=mysql_query("select * from category where `c_n`='$id_cat'");
$row_cat=mysql_fetch_array($query_cat);
	   $name_cat=$row_cat["c_name"];

//<?php echo $aed_row[""];
?>
  
  <table width="428" height="143" border="0" cellpadding="3" style="font-weight: normal; font-size: 18px;">
    <tr>
      <td width="148">Category</td>
      <td width="262"><?php echo ucfirst($name_cat); ?></td>
    </tr>
    <tr>
      <td>Group</td>
      <td><?php echo ucfirst($name_gro); ?></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><?php echo $aed_row["e_date"]; ?></td>
    </tr>
    <tr>
      <td>Event</td>
      <td><?php echo ucfirst($aed_row["e_sub"]); ?></td>
    </tr>
    <tr>
      <td>Discreption</td>
      <td><?php echo ucfirst($aed_row["e_disc"]); ?></td>
    </tr>
  </table>
</div>
</body>
</html>

<?php } ?>