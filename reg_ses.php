<?php
$query=mysql_query("select * from b_info order by dn desc");
$row=mysql_fetch_array($query);

	   $id=$row["dn"];

	   session_start();
	   $_SESSION['uid']=$row["dn"];
	   $_SESSION['s_name']=ucfirst($row["sname"]);
	 header('location:home.php');
?>