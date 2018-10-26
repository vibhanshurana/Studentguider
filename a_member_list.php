<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
$sname=$_SESSION['s_name'];
$gn_sl=$_SESSION["gn_sl"];
include("db.php");  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Group Members</title>
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

$query_gro=mysql_query("SELECT * FROM `group` WHERE `g_n` = '$gn_sl'");
$row_gro=mysql_fetch_array($query_gro);
		//$id_gro=$row_gro["g_n"];
	   $pf_group=strtoupper($row_gro["g_name"]);
	?>
  <table width="322" height="87" border="0" cellpadding="3">
   <tr style="font-size: 18px;">
      <td colspan="2"><strong><?php echo "These are '$pf_group' Group Members";  ?></strong></td>
      </tr>
      
    <tr>
      <td width="47" style="font-weight: bold; font-size: 18px;"><u>SL</u></td>
      <td width="221" style="font-weight: bold; font-size: 18px;"><u>Members</u></td>
    </tr>
    
    <?php
  //list sl no
  $li=1;
$query_ml=mysql_query("SELECT * FROM `choice` WHERE `g_n` = '$gn_sl' AND `cho`=1");
if($query_ml)
	while($row_ml=mysql_fetch_array($query_ml))
	{
	   $gro_ml=$row_ml["d_n"];
	   //echo "g $gro_ml ";
	   $s_stu_ml=mysql_query("SELECT * FROM b_info where `dn`='$gro_ml'");
		$r_stu_ml=mysql_fetch_array($s_stu_ml);
		$dn_sl=$r_stu_ml["dn"];
		//$_SESSION['uid']=$row["dn"];
		?>
    <tr>
      <td style="font-size: 18px;"><?php echo "$li" ; ?></td>
      <td style="font-size: 18px;"><a href="a_sl_interest_list_iiii.php?dn_sl=<?php echo $dn_sl;?>"><?php echo ucfirst($r_stu_ml["sname"]); ?></a></td>
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