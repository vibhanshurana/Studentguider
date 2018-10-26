<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
$sname=$_SESSION['s_name'];
include("db.php");  
$del=$_POST["del"];

if($del)
{
	$del_cho=mysql_query("DELETE FROM `choice` WHERE `d_n` = '$uid'");
	$del_po=mysql_query("DELETE FROM `post` WHERE `dn` = '$uid'");
	$del_user=mysql_query("DELETE FROM `b_info` WHERE `dn` = '$uid'");
	header("location:logout.php");
}
else
header("location:logout.php");
	
}
?>