<h2 style="color: #009">Popular Categories of Talents !</h2>

<?php
include("db.php"); 
	$query_cat_l=mysql_query("select * from category");

	while($row_cat_l=mysql_fetch_array($query_cat_l))
	{
		$id_cat=$row_cat_l["c_n"];
	   $name_cat=$row_cat_l["c_name"];
	   $name_cat = strtoupper($name_cat);
	   
?>	  

<h3><a href="selection_list_iii.php?c_id=<?php echo "$id_cat"; ?>" style="color: #903"><?php echo "$name_cat"; ?></a></h3>

<?php } ?>