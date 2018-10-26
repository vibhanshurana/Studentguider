<?php
//session_start();
$id_cat=$_SESSION['n_c_id'];
echo "<h2><center><u>Groups</u></center></h2>";

include("db.php"); 
	$query_cat_l=mysql_query("SELECT * FROM `group` WHERE `c_n` = '$id_cat'");

	while($row_cat_l=mysql_fetch_array($query_cat_l))
	{
		$id_gro=$row_cat_l["g_n"];
	   $name_gro=$row_cat_l["g_name"];
	   $name_gro = strtoupper($name_gro);
	   
?>	  

    <h3><center><a href="a_list_iii.php?c_id=<?php echo "$id_gro"; ?>"><?php echo "$name_gro"; ?></a></center></h3>

<?php
} 
?>
<center>
<h3>Add New Group</h3>
<form action="add_group_php.php" method="post">
<input name="id_cat" type="hidden" value="<?php echo "$id_cat" ; ?>">
<input name="n_group" type="text">
<input name="" type="submit" value="Add">

</form>
</center>

