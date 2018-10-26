<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
$sname=$_SESSION['s_name'];
include("db.php"); 
$ae_id=$_POST["ae_id"];

$e_cho=$_POST["e_cho"];
$e_date=$_POST["e_date"];
$e_sub=$_POST["e_event"];
$e_disc=$_POST["e_disc"];

//echo "$e_cho";

$e_submit = mysql_query("UPDATE `event` SET `e_date` = '$e_date', `e_sub` = '$e_sub', `e_disc` = '$e_disc', `e_cho` = '$e_cho' WHERE `e_sl` = '$ae_id'");
if($e_submit)
	header("location:a_event_1.php");

}
?>