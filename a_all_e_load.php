<?php
//session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
$sname=$_SESSION['s_name'];
include("db.php"); 
//$c_id=$_SESSION["c_id"];
?>

<div align="center">
  <table width="697" border="0" cellpadding="3">
    <tr style="font-weight: bold; font-size: 18px;">
      <td><u>Sl No</u></td>
      <td><u>Date</u></td>
      <td><u>Event</u></td>
    </tr>
    
  <?php
$i=1;
$e_load_g = mysql_query("SELECT * FROM `event` WHERE `e_cho`=1 order by `e_date` desc");
if($e_load_g)
while($e_row_load_g = mysql_fetch_array($e_load_g))
	{
		$e_id=$e_row_load_g['e_sl'];
		$e_view=$e_row_load_g['e_view'];
		$e_ename=$e_row_load_g['e_sub'];
		if($e_view==1)
		{
?>		
    
    <tr style="font-size: 18px;">
      <td><?php echo $i; ?></td>
      <td><?php echo $e_row_load_g['e_date']; ?></td>
      <td><a href="a_all_e_d_iii.php?ae_id=<?php echo $e_id; ?>"><?php echo $e_ename; ?></a></td>  

  <?php
$i++;
}}
else
	echo "No Events Set";
?>
    
  </table>
</div>

<?php
}
?>