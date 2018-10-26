<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];

$gn_sl=$_REQUEST['gn_sl'];
$_SESSION["gn_sl"]=$gn_sl;

//echo $gn_sl;

if(isset($_SESSION["gn_sl"]))
	header("location:a_member_list.php");
}
?>