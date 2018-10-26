<?php
$ch_n=$_REQUEST['ch_n'];
include("db.php");
$select_r=mysql_query("update choice set cho=0 where ch_n='$ch_n'");
if($select_r)
	header("location:selection_list.php");
	
?>