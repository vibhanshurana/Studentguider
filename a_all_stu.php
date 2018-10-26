<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
$sname=$_SESSION['s_name'];
//$gn_sl=$_SESSION["gn_ml"];
include("db.php");  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>All Users</title>
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
<table width="331" border="0">
    <tr style="font-weight: bold; font-size: 18px;">
      <td><u>SL</u></td>
      <td><u>List of Users</u></td>
    </tr>
    <tr >
<?php
	$li=1;
	   $s_stu_ml=mysql_query("SELECT * FROM b_info WHERE `dn` != 100 order by `dn` desc");
		while($r_stu_ml=mysql_fetch_array($s_stu_ml))
		{
		$dn_sl=$r_stu_ml["dn"];
		?>

      <td width="89" style="font-size: 18px;"><?php echo "$li" ; ?></td>
      <td width="192" style="font-size: 18px;"><a href="a_sl_interest_list_iiii.php?dn_sl=<?php echo $dn_sl;?>"><?php echo ucfirst($r_stu_ml["sname"]); ?></a></td>
    </tr>
    <?php
  $li++;
}	
?>
  </table>
</div>
</body>
</html>

<?php } ?>