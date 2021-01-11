<?php
$sql_get="select * from events_pic order by id desc";
$sql_qry=mysql_query($sql_get);
$chk_whr_num=mysql_num_rows($sql_qry);
$img_path_arr=array();
while($fet_row=mysql_fetch_array($sql_qry)){
	$img_path_arr['img'][$fet_row['img_setting']][] = $fet_row['img_path'];
	$img_path_arr['label'][$fet_row['img_setting']][] = $fet_row['img_label'];
	$img_path_arr['id'][$fet_row['img_label']][] = $fet_row['id'];
}
?>
<table width="320" cellspacing="0" cellpadding="0">
  <tr>
    <td style="height:52px;">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" style="background:url(images/event-right.jpg) no-repeat; height:536px;"><table width="100%" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3" style="height:5px;"></td>
      </tr>
      <tr>
        <td width="33%" align="left" valign="top"><img src="../event/<?php echo $img_path_arr['img']['top_left'][0]; ?>" width="104" height="141" /></td>
        <td width="34%" align="left" valign="top">&nbsp;</td>
        <td width="33%" valign="top"><img src="../event/<?php echo $img_path_arr['img']['top_right'][0]; ?>" width="103" height="141" /></td>
      </tr>
      <tr>
        <td height="32" align="center" style="color:#535353;"><?php echo $img_path_arr['label']['top_left'][0]; ?></td>
        <td height="30" align="left" valign="top">&nbsp;</td>
        <td height="30" align="center" style="color:#535353;"><?php echo $img_path_arr['label']['top_right'][0]; ?></td>
      </tr>
      <tr>
        <td colspan="3" align="center" valign="top"><img src="../event/<?php echo $img_path_arr['img']['center'][0]; ?>" width="100" height="139" /></td>
        </tr>
      <tr>
        <td height="38" colspan="3" align="center" style="color:#535353;"><?php echo $img_path_arr['label']['center'][0]; ?></td>
        </tr>
      <tr>
        <td align="left" valign="top"><img src="../event/<?php echo $img_path_arr['img']['bottom_left'][0]; ?>" width="104" height="141" /></td>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top"><img src="../event/<?php echo $img_path_arr['img']['bottom_right'][0]; ?>" width="103" height="141" /></td>
      </tr>
      <tr>
        <td height="35" align="center" style="color:#535353;"><?php echo $img_path_arr['label']['bottom_left'][0]; ?></td>
        <td height="35" align="left" valign="top">&nbsp;</td>
        <td height="35" align="center" style="color:#535353;"><?php echo $img_path_arr['label']['bottom_right'][0]; ?></td>
      </tr>
      
    </table></td>
  </tr>
  
</table>
