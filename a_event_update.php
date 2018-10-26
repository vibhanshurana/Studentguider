<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
$sname=$_SESSION['s_name'];
$ae_id=$_POST['ae_id'];
include("db.php");  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Event/Notice Update</title>
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
<?php
$aed_select=mysql_query("SELECT * FROM `event` WHERE `e_sl` = '$ae_id'");
$aed_row=mysql_fetch_array($aed_select);
$ae_gro=$aed_row["e_group"];
$ae_cho=$aed_row["e_cho"];
?>

<form name="form1" method="post" action="a_event_update_php.php">
<input name="ae_id" type="hidden" value="<?php echo $ae_id; ?>" />
  <div align="center">
    <table width="459" border="0" cellpadding="3">
    <tr>
        <?php if($ae_cho==0)
	{
		?>
        <td><select name="e_cho">
        <option value="0">Notice</option>
        <option value="1">Event</option>
          </select></td>
          <?php 
		  }
		  else
	{
		?>
        <td><select  name="e_cho">
          <option value="1">Event</option>
          <option value="0">Notice</option></select></td>
          <?php } ?>
      </tr>
      <tr>
        <td>Date</td>
      </tr>
      <tr>
        <td><label>
          <input type="date" name="e_date" value="<?php echo $aed_row["e_date"]; ?>">
        </label></td>
      </tr>
      <tr>
        <td>Event</td>
      </tr>
      <tr>
        <td><textarea name="e_event" cols="50" rows="2" ><?php echo $aed_row["e_sub"]; ?></textarea></td>
      </tr>
      <tr>
        <td>Discription</td>
      </tr>
      <tr>
        <td><textarea name="e_disc" cols="50" rows="10"><?php echo $aed_row["e_disc"]; ?></textarea></td>
      </tr>
      <tr>
        <td><input type="submit" name="button" id="button" value="UPDATE"></td>
      </tr>
  </table>
  </div>
</form>

</body>
</html>

<?php } ?>