<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
$sname=$_SESSION['s_name'];
$del_gro=$_POST["del_gro"];
include("db.php"); 
echo $del_gro; 

$d_g_p=mysql_query("DELETE FROM `post` WHERE `g_n` = '$del_gro'");

$d_g_e=mysql_query("DELETE FROM `event` WHERE `e_group` = '$del_gro'");

$d_g_cho=mysql_query("DELETE FROM `choice` WHERE `g_n` = '$del_gro'");

$d_g_g=mysql_query("DELETE FROM `group` WHERE `g_n` = '$del_gro'");

header("location:a_add_group.php");

}
?>