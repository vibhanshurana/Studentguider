<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
//echo "$uid";

include("db.php");

	$query_cat=mysql_query("select * from category");
	if($query_cat)
	{
	while($row_cat=mysql_fetch_array($query_cat))
	{
		$id_cat=$row_cat["c_n"];
	   $name_cat=$row_cat["c_name"];
	   
	   //echo " $id_cat $name_cat ";
	   
	   $query_gro=mysql_query("SELECT * FROM `group` WHERE `c_n` = '$id_cat'");
	   //echo "YES";
	if($query_gro)
	{
		//echo "YES";
	while($row_gro=mysql_fetch_array($query_gro))
	{
		$id_gro=$row_gro["g_n"];
	   $name_gro=$row_gro["g_name"];
	   
	   //echo "$id_gro $name_gro ";
	   
	 $query_cho=mysql_query("INSERT INTO `sgdbb`.`choice` (`ch_n`, `d_n`, `c_n`, `g_n`, `cho`) VALUES (NULL, '$uid', '$id_cat', '$id_gro', '0')");
	}}
	}}
	if($query_cho)
	include("reg_ses.php");
}
?>