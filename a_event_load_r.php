<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
$sname=$_SESSION['s_name'];
include("db.php"); 
$c_id=$_SESSION["c_id"];

$e_id=$_POST["e_id"];
$e_view=$_POST["e_view"];

echo "$e_id $e_view";

$update_e_view=mysql_query("UPDATE `event` SET `e_view` = '$e_view' WHERE `e_sl` = '$e_id'");

if($update_e_view)
	header("location:a_event_1.php");

}
?>