<?php
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];


mysql_connect("localhost","root","");
mysql_select_db("sgdb");
$select="select * from 	e_select where e_student='$uid'";
$query=mysql_query($select);
?>
<table width="200" border="0">

<?php
while($row=mysql_fetch_array($query))
{
	$edu=$row["education"];
	$sel=$row["e_sel"];
?>

  <tr>
    <td><a href="post_form_iiii.php?filename=<?php echo $edu;?>"><?php echo "$edu" ;?></a></td>
	
    <?php
	if($sel==1)
	{		
	?>
    <td>Select</td>
    <td><a href="eselect_r.php?filename=<?php echo $edu;?>"><?php echo "Remove" ;?></a></td>
    
    <?php 
	}
	else
	{		
	?>
    
    <td><a href="eselect_s.php?filename=<?php echo $edu;?>"><?php echo "Select" ;?></a></td>
    <td>Remove</td>
    
    <?php } ?>
    
    <td><a href="post_load_iiii.php?filename=<?php echo $edu;?>"><?php echo "POST" ;?></a></td>
    
  </tr>	
	
<?php	
}}
?>

</table>
