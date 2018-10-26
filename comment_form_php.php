<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
$gn_sl=$_SESSION["gn_sl"];
$p_content=$_POST["p_content"];
$pn_c=$_POST["pn_c"];

include("db.php");

echo "$uid $p_content $gn_sl $pn_c";

$q_comment=mysql_query("INSERT INTO `sgdbb`.`post` (`p_sl`, `dn`, `g_n`, `content`, `p_c`, `pn`) VALUES (NULL, '$uid', '$gn_sl', '$p_content', '1', '$pn_c')");

if($q_comment)
{
	//header("location:post_form.php");
	header("location:a_post_page_1.php");
}
}
?>