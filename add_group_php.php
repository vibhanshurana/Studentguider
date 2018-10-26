<?php
$id_cat = $_POST["id_cat"];
$n_group = $_POST["n_group"];
include("db.php");
$q_n_category=mysql_query("INSERT INTO `sgdbb`.`group` (`g_n`, `g_name`, `c_n`) VALUES (NULL, '$n_group', '$id_cat')");

include("add_choice_php.php");
?>