
<table width='200' border='0' cellpadding='3'>

<?php
include("db.php");
$query_cat=mysql_query('select * from category');

	while($row_cat=mysql_fetch_array($query_cat))
	{
		$id_cat=$row_cat['c_n'];
	   $name_cat=ucfirst($row_cat['c_name']);
	   ?>
	   
	   <tr>
    <td><h2><?php echo $name_cat;  ?></h2></td>
  </tr>
 
 <?php
	   $query_gro=mysql_query("SELECT * FROM `group` WHERE `c_n` = '$id_cat'");
		while($row_gro=mysql_fetch_array($query_gro))
		{
		$id_gro=$row_gro['g_n'];
	   $name_gro=$row_gro['g_name'];
	   
	   $query_s_l = mysql_query("SELECT * FROM `choice` WHERE `d_n` = '$uid' AND `g_n` = '$id_gro'");
		while($row_s_l=mysql_fetch_array($query_s_l))
		{
		$g_n=$row_s_l['g_n'];
		$cho=$row_s_l['cho'];
		//echo "sel $cho";
		if($cho==1)
		{
			?>
		
		 <tr>
    <td><?php echo $name_gro;  ?></td>
  </tr>
		
	<?php	
		}
		}
		}
	   }

	?>
	
	</table>