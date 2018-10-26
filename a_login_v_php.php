<?php
$pass1=$_POST["pass1"];
$pass10=$_POST["pass10"];

include("db.php");
$select="select * from b_info where `dn`=102";
$query=mysql_query($select);
$row=mysql_fetch_array($query);

if($row)
{
   if($pass1==$row["email"]&&$pass10==$row["pass"])
   {
	   session_start();
	   $_SESSION['uid']=$row["dn"];
	   $_SESSION['s_name']=ucfirst($row["sname"]);
	 header('location:a_home_1.php');
   }
   else
   {
	echo "Wrong Password/Unauthorize accessing";   
	header('Refresh: 2; URL=index.php');
   }
}
else
{
	header("location:index.php");
}


?>