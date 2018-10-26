<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];

$c_id=$_REQUEST['c_id'];
$_SESSION["c_id"]=$c_id;

echo $c_id;

if(isset($_SESSION["c_id"]))
	header("location:selection_list.php");
}
?>