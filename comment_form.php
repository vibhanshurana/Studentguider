<?php
/*
session_start();
if(isset($_SESSION['uid']))	
{	
$uid=$_SESSION['uid'];
$file=$_SESSION["group"];
echo $file;
*/
//echo "co $pn ";
?>
<form id="form1" name="form1" method="post" action="comment_form_php.php">
<input name="pn_c" type="hidden" value=<?php echo $pn ; ?> />

  <table width="236" height="69" border="0">
    <tr>
      <td width="230"><textarea name="p_content" cols="50" rows="2"></textarea></td>
    </tr>
    <tr>
      <td height="26"><div align="right">
        <input name="post" type="submit" value="COMMENT" />
      </div></td>
    </tr>
  </table>

</form>
<hr />

<?php// } 
?>