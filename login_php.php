<?php
$uname=$_POST["uname"];
$pass=$_POST["passw"];

include("db.php");
$select="select * from b_info where email='$uname'";
$query=mysql_query($select);
$row=mysql_fetch_array($query);

if($row)
{
   if($pass==$row["pass"])
   {
	   session_start();
	   $_SESSION['uid']=$row["dn"];
	   $_SESSION['s_name']=ucfirst($row["sname"]);
	 header('location:home.php');
   }
   else
   {
	echo "Wrong Username/Password";   
	header('Refresh: 2; URL=index.php');
   }
}
else
{
	header("location:index.php");
}


?>