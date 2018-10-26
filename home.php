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

.menu
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

.edit
{	font-size:15px;
	margin-bottom:7px;
	}
	
.wrapper
{
	width:98%;
	height:auto;
	border:1px solid green;
	padding:10px;
	}
.innerwrapper
{
	top:200px;
	width:100%;
	height:300px;
	border:1px solid blue;
	}
.div1
{
	top:200px;
	width:25%;
	float:left;
	height:auto;
	margin-left:5px;
	margin-top:5px;
	border-radius:10px;
	border:3px dotted #060;
	
	}
.div2
{
	top:200px;
	width:70%;
	float:right;
	height:auto;
	margin-left:5px;
	margin-top:5px;
	border-radius:10px;

	
	}
.div3
{
	top:200px;
	width:32%;
	float:left;
	height:auto;
	margin-left:5px;
	margin-top:5px;
	border-radius:10px;
	border:3px dotted #060;
	
	}
.heading
	{
	color:#F30;
	font-size:20px;
	padding-left:20px;
	}
</style>
</head>

<body bgcolor="#99FFCC">
<div class="wrapper">
<h1>STUDENT GUIDER</h1>
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
<div class="innerwrapper">
<div class="div1">
<p align="center" class="heading"><strong>LATEST NEWS</strong></p>
<marquee scrollamount="1" behavior="scroll" direction="down" height="auto">
<p align="center" style="font-size: 18px;" ><a href="all_events.php">All Current Events</a></p>
<p align="center" style="font-size: 18px;" ><a href="all_notices.php">All Current Notices</a></p>

</marquee>
</ul>
</div>
<div class="div2">
<center>
<?php include("category_load.php"); ?>
</center>
</div>

</div>
</div>

</body>
</html>
<?php } ?>