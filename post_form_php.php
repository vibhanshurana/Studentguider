<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
$p_content=$_POST["p_content"];
$gn_sl=$_SESSION["gn_sl"];

echo "$uid $p_content $gn_sl";

include("db.php"); 

$query_post = mysql_query("INSERT INTO `sgdbb`.`post` (`p_sl`, `dn`, `g_n`, `content`, `p_c`, `pn`) VALUES (NULL, '$uid', '$gn_sl', '$p_content', '0', NULL)");

if($query_post)
{
	//header("location:post_form.php");
	header("location:a_post_page_1.php");
}
}
?>