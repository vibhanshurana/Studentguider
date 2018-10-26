<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
$sname=$_SESSION['s_name'];
include("db.php"); 
$c_id=$_SESSION["c_id"];

$e_cho=$_POST["e_cho"];
$e_date=$_POST["e_date"];
$e_sub=$_POST["e_event"];
$e_disc=$_POST["e_disc"];

//echo "$e_date $e_sub $e_disc";

$e_submit = mysql_query("INSERT INTO `event` (`e_sl`, `e_sub`, `e_disc`, `e_view`, `e_date`, `e_group`, `e_cho`) VALUES (NULL, '$e_sub', '$e_disc', '0', '$e_date', '$c_id', '$e_cho')");

if($e_submit)
 header("location:a_event_1.php");

}
?>