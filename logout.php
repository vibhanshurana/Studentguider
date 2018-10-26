<?php
session_start();

if(isset($_SESSION['uid']))
{			   				 
$id=$_SESSION['uid'];
$file=$_SESSION["postn"];
//echo $id;
unset($_SESSION['uid']);
unset($_SESSION['postn']);
session_destroy();
}
header('location:index.php');
?>