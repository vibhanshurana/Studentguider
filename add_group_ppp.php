<?php
session_start();
$id_cat = $_REQUEST["id_cat"];
$_SESSION['n_c_id']=$id_cat;
header("location:a_add_group.php");
?>