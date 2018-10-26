<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
$sname=$_SESSION['s_name'];
include("db.php");  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>All Notices</title>
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
  <table width="697" border="0" cellpadding="3">
    <tr style="font-weight: bold; font-size: 18px;">
      <td><u>Sl No</u></td>
      <td><u>Date</u></td>
      <td><u>Notice</u></td>
    </tr>
    
  <?php
$i=1;
$e_load_g = mysql_query("SELECT * FROM `event` WHERE `e_cho`=0 order by `e_date` desc");
if($e_load_g)
while($e_row_load_g = mysql_fetch_array($e_load_g))
	{
		$e_id=$e_row_load_g['e_sl'];
		$e_view=$e_row_load_g['e_view'];
		$e_ename=$e_row_load_g['e_sub'];
		if($e_view==1)
		{
?>		
    
    <tr style="font-size: 18px;">
      <td><?php echo $i; ?></td>
      <td><?php echo $e_row_load_g['e_date']; ?></td>
      <td><a href="a_all_e_d_iii.php?ae_id=<?php echo $e_id; ?>"><?php echo $e_ename; ?></a></td>  

  <?php
$i++;
}}
else
	echo "No Events Set";
?>
    
  </table>
</div>

</body>
</html>

<?php } ?>