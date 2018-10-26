
<?php

/*
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];

$file=$_SESSION["postn"];


$mysql=mysql_connect("localhost","root","");
$db=mysql_select_db("sgdb");
*/

$q_post_load=mysql_query("select * from post where p_c=0 and g_n='$gn_sl' order by p_sl desc");
if($q_post_load)
{
while($r_post_load=mysql_fetch_array($q_post_load))
{
	//$pgroup=$r_post_load["g_n"];

	$pn=$r_post_load["p_sl"];
	$ppost=$r_post_load["content"];
	$ps=$r_post_load["dn"];
	$sname=mysql_query("select * from b_info where dn='$ps'");
	$ssname=mysql_fetch_array($sname);
	$sssname=ucfirst($ssname["sname"]);
	$sssuid=ucfirst($ssname["dn"]);
	
	?>

<table width="426" height="46" border="0">
  <tr>
    <td style="font-weight: bold; font-style: normal; text-decoration: underline; font-size: 18px; color: #000;"  ><a href="sl_interest_list_iiii.php?dn_sl=<?php echo $sssuid;?>"><?php echo ucfirst($sssname); ?></a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" style="color: #000;" ><?php echo "$ppost"; ?></td>
  </tr>
  <tr>
    <td width="323" height="34">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td width="184"><?php include("comment_load.php"); ?></td>
  </tr>
  <tr>
    <td height="34">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><?php include("comment_form.php"); ?></td>
  </tr>
  
</table>

<?php 

	}}
?>