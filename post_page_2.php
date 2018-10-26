<?php

//session_start();
//if(isset($_SESSION['uid']))	
//{	
$uid=$_SESSION['uid'];
$gn_sl=$_SESSION["gn_sl"];
//$cho_sl=$_SESSION["cho_sl"];
include("db.php");

//$mysql=mysql_connect("localhost","root","");
//$db=mysql_select_db("sgdb");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div align="center" style="color: #06F;">
<?php

$query_gro=mysql_query("SELECT * FROM `group` WHERE `g_n` = '$gn_sl'");
$row_gro=mysql_fetch_array($query_gro);
		//$id_gro=$row_gro["g_n"];
	   $pf_group=strtoupper($row_gro["g_name"]);
	?>
  <table width="604" height="88" border="0">
  <tr>
      <td><strong><?php echo "This is '$pf_group' Junction";  ?></strong></td></tr>
    <tr>
      <td width="481"><?php include("post_form.php"); ?></td>
    </tr>
    <tr>
      <td><?php include("post_load.php"); ?></td>
    </tr>
    <tr>
      <td></td>
    </tr>
  </table>
</div>
</body>
</html>


<?php //}
?>