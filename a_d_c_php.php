<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
$sname=$_SESSION['s_name'];
$del_cat=$_POST["del_cat"];
include("db.php"); 
//echo $del_cat; 

$s_d_cat=mysql_query("SELECT * FROM `group` WHERE `c_n` = '$del_cat'");

	while($row_d_cat=mysql_fetch_array($s_d_cat))
		{
			$del_gro=$row_d_cat["g_n"];
			//echo "$d_gro ";
			
		
$d_g_p=mysql_query("DELETE FROM `post` WHERE `g_n` = '$del_gro'");

$d_g_e=mysql_query("DELETE FROM `event` WHERE `e_group` = '$del_gro'");

$d_g_cho=mysql_query("DELETE FROM `choice` WHERE `g_n` = '$del_gro'");

$d_g_g=mysql_query("DELETE FROM `group` WHERE `g_n` = '$del_gro'");

		}
		
		$d_g_g=mysql_query("DELETE FROM `category` WHERE `c_n` = '$del_cat'");
		header("location:a_add_category.php");

}
?>