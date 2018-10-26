<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
$c_id=$_SESSION["c_id"];
$sname=$_SESSION['s_name'];
include("db.php");  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Selection List</title>
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
a {
	color: #903;
	text-decoration: underline;
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
<li><a href="home.php">HOME</a></li>
<li><a href="profile_1.php">PROFILE</a></li>
<li><a href="update_info.php">MODIFY</a></li>
<li><a href="contactus.php">ContactUs</a></li>
</ul>

<div align="center">
  <?php
$query_cat=mysql_query("SELECT * FROM `category` WHERE `c_n` = '$c_id'");
	$row_cat=mysql_fetch_array($query_cat);
	   $my_group=ucfirst($row_cat["c_name"]);
	?>
  
</div>


  <div align="center">
    <table width="574" border="0">
      <tr>
        <td colspan="7" bgcolor="#9999FF" ><h2 align="center">This is Category of <?php echo " $my_group"; ?> </h2></td>
      </tr>
      
      <?php
  $query_s_l = mysql_query("SELECT * FROM `choice` WHERE `d_n` = '$uid' AND `c_n` = '$c_id'");
while($row_s_l =mysql_fetch_array($query_s_l ))
{
	$gn_sl=$row_s_l["g_n"];
	$cho=$row_s_l["cho"];
	$ch_n=$row_s_l["ch_n"];
	//fetch groupe name
	$query_gro=mysql_query("SELECT * FROM `group` WHERE `g_n` = '$gn_sl'");
	$row_gro=mysql_fetch_array($query_gro);
	   $name_gro=$row_gro["g_name"];
	   
?>
      
      <tr>
        <td width="35" bgcolor="#9999FF" ><h3 align="center"><?php echo "$name_gro" ;?></h3></td>
        
        <?php
	if($cho==1)
	{		
	?>
        <td width="64"><div align="center">
          <h3>Selected</h3>
        </div></td>
        <td width="59"  bgcolor="#CC66FF"><h3 align="center"><a href="select_r.php?ch_n=<?php echo $ch_n;?>"><?php echo "Remove" ;?></a></h3></td>
        
        <?php 
	}
	else
	{		
	?>
        
        <td width="68" bgcolor="#CC66FF"><div align="center">
          <h3><a href="select_s.php?ch_n=<?php echo $ch_n;?>"><?php echo "Select" ;?></a></h3>
        </div></td>
        <td width="81"><div align="center">
          <h3>Removed</h3>
        </div></td>
        
        <?php } ?>
        
        <td width="112"><h3 align="center" style="background-color: #9C3;"><a href="post_page_iiii.php?gn_sl=<?php echo $gn_sl;?>"><?php echo "POST" ;?></a></h3></td>
        <td width="125"><div align="center"><a href="member_list_iiii.php?gn_sl=<?php echo $gn_sl;?>"> Members</a></div></td>
        
      </tr>	
      
      <?php	
}
?>
      </table>
  </div>
<div class="div2"></div>

</body>
</html>

<?php } ?>