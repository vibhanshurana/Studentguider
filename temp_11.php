<?php
//include("db.php");
$mysql=mysql_connect("localhost","root","");
$db=mysql_select_db("sgdbb");
$sql = "SELECT * FROM `group` WHERE `c_n` = 1";
$query_gro=mysql_query($sql);
//$query_cat=mysql_query("select * from category");
while($row_gro=mysql_fetch_array($query_gro))
	{
		$id_gro=$row_gro["g_n"];
	   $name_gro=$row_gro["g_name"];
	   
	   echo "$id_gro $name_gro ";
	}
if($query_gro)
echo "YES";
?>