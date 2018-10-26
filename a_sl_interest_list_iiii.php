<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
$dn_sl=$_REQUEST['dn_sl'];

//echo "uid $uid gn $gn_sl";

$_SESSION["dn_sl"]=$dn_sl;
header("location:a_sl_profile_1.php");
}
?>