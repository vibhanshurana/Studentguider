<?php
//session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
$sname=$_SESSION['s_name'];
include("db.php"); 
$c_id=$_SESSION["c_id"];
?>

<div align="center">
  <table width="697" border="0" cellpadding="3">
    <tr style="text-decoration: underline;">
      <td>Sl No</td>
      <td>E/N</td>
      <td>Date</td>
      <td>Event/Notices</td>
    </tr>
    
  <?php
$i=1;
$e_load_g = mysql_query("SELECT * FROM `event` WHERE `e_group` LIKE '$c_id' order by `e_date` desc");
while($e_row_load_g = mysql_fetch_array($e_load_g))
	{
		$e_id=$e_row_load_g['e_sl'];
		$e_view=$e_row_load_g['e_view'];
		$e_ename=$e_row_load_g['e_sub'];
		$e_echo=$e_row_load_g['e_cho'];
?>		
    
    <tr>
      <td><?php echo $i; ?></td>
      <?php
	  if($e_echo==0)
      echo "<td>Notice</td>";
	  else
	  echo "<td>Event</td>";
	  ?>
      <td><?php echo $e_row_load_g['e_date']; ?></td>
      <td><a href="a_event_display_iii.php?ae_id=<?php echo $e_id; ?>"><?php echo $e_ename; ?></a></td>
      
      <?php if($e_view==1) 
   			{
  ?>
      <td>Displayed</td>
      <td><form action="a_event_load_r.php" method="post">
        <input name="e_id" type="hidden" value="<?php echo $e_id; ?>">
        <input name="e_view" type="hidden" value="0">
        <input name="" type="submit" value="Remove">
      </form></td>
      <?php 
			}
			?>
      <?php if($e_view==0) 
   			{
  ?>
      <td><form action="a_event_load_r.php" method="post">
        <input name="e_id" type="hidden" value="<?php echo $e_id; ?>">
        <input name="e_view" type="hidden" value="1">
        <input name="" type="submit" value="Display">
      </form></td>
      <td>Removed</td>
      <?php 
			}
			?>
      <td><form action="a_event_load_d.php" method="post">
        <input name="e_id" type="hidden" value="<?php echo $e_id; ?>">
        <input name="" type="submit" value="Delete">
      </form></td>
    </tr>
  <?php
$i++;
}
?>
    
  </table>
</div>

<?php
}
?>