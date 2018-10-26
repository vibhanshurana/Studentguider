<?php

echo "<center><h2><u>Categories</u></h2></center>";

include("db.php"); 
	$query_cat_l=mysql_query("select * from category");

	while($row_cat_l=mysql_fetch_array($query_cat_l))
	{
		$id_cat=$row_cat_l["c_n"];
	   $name_cat=$row_cat_l["c_name"];
	   $name_cat = strtoupper($name_cat);
	   
?>	  

    <h3 align="center"><a href="add_group_ppp.php?id_cat=<?php echo "$id_cat"; ?>"><?php echo "$name_cat"; ?></a></h3>

<div align="center">
  <?php
} 
?>
</div>
<h3 align="center">Add New Category</h3>
<form action="add_category_php.php" method="post">

  <div align="center">
  <input name="n_category" type="text">
  <input name="" type="submit" value="Add">
    
  </div>
</form>


