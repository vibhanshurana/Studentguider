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
<title>Home Page</title>
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
  <table width="691" height="233" border="0" cellpadding="3">
    <tr>
      <td width="358" height="118" style="background-position: left; background-image: url(image/Events111122.jpg);"><h2 align="center"><a href="a_all_events.php">All Current Events</a></h2></td>
      <td width="309" style="background-image: url(image/misc-bag-notice-board-enzXc7-clipart2.png);"><h2 align="center"><a href="a_all_notices.php">All Current Notices</a></h2></td>
    </tr>
    <tr>
      <td style="background-image: url(image/better-blog-categoriesff.jpg);"><h2 align="center"><a href="a_add_category.php">Categories/Groups(Events/Notice Manager)</a></h2>
     </td>
      <td style="background-image: url(image/1sasas.jpg);"><h2 align="center"><a href="a_all_stu.php">All Members List</a></h2></td>
    </tr>
  </table>
</div>




</body>
</html>

<?php } ?>