<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];

$ae_id=$_REQUEST['ae_id'];
$_SESSION["ae_id"]=$ae_id;

//echo $c_id;

if(isset($_SESSION["ae_id"]))
	header("location:a_all_e_d.php");
}
?>