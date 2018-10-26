<?php
//fetch last/new group id
//include("db.php");
$q_n_gid=mysql_query("SELECT * FROM sgdbb.group ORDER BY g_n DESC");
$row_n_gid=mysql_fetch_array($q_n_gid);
$id_n_gro=$row_n_gid["g_n"];

//fetch all student id
$q_all_stu=mysql_query("SELECT dn FROM sgdbb.b_info");

	while($row_all_stu=mysql_fetch_array($q_all_stu))
	{
		$id_stu=$row_all_stu["dn"];
		
		echo "$id_n_gro/$id_stu ";
		
		$n_cho = mysql_query("INSERT INTO `sgdbb`.`choice` (`ch_n`, `d_n`, `c_n`, `g_n`, `cho`) VALUES (NULL, '$id_stu', '$id_cat', '$id_n_gro', '0')");
	}
	
	if($n_cho)
	header("location:a_add_group.php");


?>