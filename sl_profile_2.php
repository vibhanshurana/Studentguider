<?php
include("db.php");  

$select="select * from b_info where dn='$dn_sl'";
$query=mysql_query($select);
$row=mysql_fetch_array($query);
?>
       
	<div align="center">
  <table width="310" border="0">

    <tr>
      <td width="152">Name</td>
      <td width="121"><?php echo ucfirst($row["sname"]) ; ?></td>
      </tr>
    <tr>
      <td>Department</td>
      <td><?php echo $row["depart"] ; ?></td>
      </tr>
  </table>
