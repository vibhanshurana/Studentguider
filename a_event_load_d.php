<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
include("db.php"); 
$e_id=$_POST["e_id"];

echo "$e_id";

$delete_e_view=mysql_query("DELETE FROM `event` WHERE `e_sl`='$e_id'");

if($delete_e_view)
	header("location:a_event_1.php");

}
?>