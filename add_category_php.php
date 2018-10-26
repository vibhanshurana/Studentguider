<?php
$n_category = $_POST["n_category"];

include("db.php");
$q_n_category=mysql_query("INSERT INTO `category`(`c_n`, `c_name`) VALUES (NULL,'$n_category')");

if($q_n_category)
	header("location:a_add_category.php");

?>