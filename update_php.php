<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
$sname=$_SESSION['s_name'];
	$sname=$_POST["username"];
	$depart=$_POST["department"];
	$mobile=$_POST["mobile"];
	$email=$_POST["email"];
	$pass=$_POST["password"];

include("db.php");
    
	$table="UPDATE `b_info` SET `sname`='$sname',`depart`='$depart',`mobile`='$mobile',`email`='$email',`pass`='$pass' WHERE `dn`='$uid'";
	$query=mysql_query($table);
	
	if($query)
	{
		$select=mysql_query("SELECT * FROM b_info WHERE `dn`='$uid'");
		$row=mysql_fetch_array($select);
		//session_start();
		//$_SESSION['uid']=$row["dn"];
		$_SESSION['s_name']=ucfirst($row["sname"]);
		
		header("location:home.php");
		//echo "YES";
	}}
?>
