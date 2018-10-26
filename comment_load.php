
<?php
//echo $pn;
/*
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];

$file=$_SESSION["postn"];


$mysql=mysql_connect("localhost","root","");
$db=mysql_select_db("sgdb");
*/

$q_comment_l=mysql_query("select * from post where p_c=1 and pn='$pn'");
if($q_comment_l)
{
	
while($row_comment_l=mysql_fetch_array($q_comment_l))
{
	$cppost=$row_comment_l["content"];
	$cps=$row_comment_l["dn"];
	$csname=mysql_query("select * from b_info where dn='$cps'");
	$cssname=mysql_fetch_array($csname);
	$csssname=$cssname["sname"];
	$csssuid=$cssname["dn"];   
	?>

<table width="200" border="0">
  <tr>
    <td  style="font-weight: bold; font-style: normal; text-decoration: underline; font-size: 18px; color: #000;"><a href="sl_interest_list_iiii.php?dn_sl=<?php echo $csssuid;?>"><?php echo ucfirst($csssname); ?></a></td>
  </tr>
  <tr>
    <td  style="color: #000;" ><?php echo "$cppost"; ?></td>
  </tr>

</table>

<?php 

	}}
?>