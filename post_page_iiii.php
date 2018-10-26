<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
$gn_sl=$_REQUEST['gn_sl'];

//echo "uid $uid gn $gn_sl";

$_SESSION["gn_sl"]=$gn_sl;
/*
include("db.php");
$query_s_l = mysql_query("SELECT * FROM `choice` WHERE `d_n` = '$uid' AND `g_n` = '$gn_sl' ");
$row_s_l=mysql_fetch_array($query_s_l);
		//$g_n=$row_s_l["g_n"];
		$cho_sl=$row_s_l["cho"];
		$_SESSION["cho_sl"]=$cho_sl;

echo "sel$cho_sl";
*/
if(isset($_SESSION["gn_sl"]))
	header("location:post_page_1.php");
}
?>