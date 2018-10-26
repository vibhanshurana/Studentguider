<?php
	$sname=$_POST["username"];
	$depart=$_POST["department"];
	$mobile=$_POST["mobile"];
	$email=$_POST["email"];
	$pass=$_POST["password"];

include("db.php");

$v_email=mysql_query("SELECT * FROM `b_info` WHERE `email` LIKE '$email'");
	if($v_email)
		{
			echo "<h3>Duplicate Email/Email Already Exist Try Another Mail</h3>";
			header('Refresh: 4; URL=index.php');
		}
	else	
		{
	$table="insert into b_info(sname,depart,email,mobile,pass) 
	values('$sname','$depart','$email','$mobile','$pass')";
	$query=mysql_query($table);
	
	if($query)
	{
		//echo "Registration Successful";
		$select=mysql_query("SELECT * FROM b_info ORDER BY dn DESC");
		
		$row=mysql_fetch_array($select);
		session_start();
		$_SESSION['uid']=$row["dn"];
		$_SESSION['s_name']=ucfirst($row["sname"]);
		header("location:reg_auto.php");
	}
		}
?>
