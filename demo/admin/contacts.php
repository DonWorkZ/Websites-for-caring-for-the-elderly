<?php
include "common/session.php";
include_once 'common/conn.php';
require('common/header.php'); 
if($_REQUEST['del_id']>0){
	$del_id=$_REQUEST['del_id'];
	mysql_query("delete from contacts where id='$del_id'");
}
?>
<?php

if($_REQUEST['move']){
$id=$_REQUEST['move'];

$qre="select * from contacts where id='$id' ";
$sql=mysql_query($qre);
$row=mysql_fetch_array($sql);

$fname=$row['first_name'];
$lname=$row['last_name'];
$email=$row['email'];
$phone_number=$row['phone_number'];
$message=$row['message'];

@mysql_query("insert into  testimonials set f_name='$fname',l_name='$lname',email='$email',phone_no='$phone_number',msg='$message'");

@mysql_query("delete from contacts where id='$id' ");


echo"<script>location.href='contacts.php?done=yes'</script>";



}

 ?>
 

<script type="text/javascript">
function checkdel()
    {
	  var checkdel=confirm("Are you sure to delete?");
	 if(!checkdel)
	 {
	  return false;
	 }
  }
  
  
  function move_sure()
    {
	  var move_sure=confirm("Are you sure want to move this ?");
	 if(!move_sure)
	 {
	  return false;
	 }
  }
</script>
<table id="container_table" cellpadding='0' cellspacing='0' align="center">
<tr>
<td id="contents" valign="top">
<table id="contents_table" cellpadding='0' cellspacing='0'>
<tr><td height="25px">&nbsp;</td></tr>
<?php if($_REQUEST['msg']!=""){?>
<tr>
	<td class="font_11_black">
		The contact has been saved.
	</td>
</tr>
<?php } ?>
<?php if($_REQUEST['done']!=""){?>
<tr>
	<td class="font_11_black">
		The Record has been moved.
	</td>
</tr>
<?php } ?>
<tr>
<td>
<div class="staticPages index">
<table cellspacing='0px' cellpadding='0px' id="content_heading_table">
	<tr>
		<td class="content_heading">
			Contact Manager
		</td>
	</tr>
</table>	
<form controller="referFriends" id="ReferFriendIndexForm" method="post" action="contacts.php" accept-charset="utf-8">	
	<table class="search_option_table" border="0">
		<tr>
			<th colspan="3" class="font_11_black">
				Search
			</th>
		</tr>
	
		<tr>
			<td class="font_11_black">
				First Name :
			</td>
			<td class="font_11_black" style="text-align:left;">
				<input name="first_name" type="text" maxlength="150" id="ReferFriendFirstName" style="width:110px;" />			
				&nbsp;&nbsp;Last Name :&nbsp;&nbsp;<input name="last_name" type="text" maxlength="150" style="width:110px;"  id="ReferFriendLastName" />	
			</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td class="font_11_black">
				Email Address :
			</td>
			<td>
				<div class="input text"><input name="email" type="text" maxlength="255" id="ReferFriendEmail" style="width:310px;" /></div>			
			</td>
			<td>
				<div class="submit"><input class="admin_button" type="submit" value="Search" /></div>			
			</td>
		</tr>
	</table>
</form>
<table cellpadding="0" cellspacing="0" class="index_table centered_table all_borders">
	<tr>
		<th class="font_11_black">ID</th>
		<th class="font_11_black">Name</th>
		<th class="font_11_black">Email Address</th>
		<!-- <th class="font_11_black">Is Agree</th> -->
		<th class="font_11_black">Move To Testimonials</th>
		<th class="font_11_black">Edit</th>
		<th class="font_11_black">Delete</th>
	</tr>
	<?php
		if($_POST['first_name']!=""){
			$srh_fname=$_POST['first_name'];
			$fname_whr=" and first_name like'$srh_fname%'";
		}
		if($_POST['last_name']!=""){
			$srh_lname=$_POST['last_name'];
			$lname_whr=" and last_name like'$srh_lname%'";
		}
		if($_POST['email']!=""){
			$srh_email=$_POST['email'];
			$email_whr=" and email like'$srh_email%'";
		}
		$sql_get="select * from contacts where id>0 $fname_whr $lname_whr $email_whr";
		$result_get=mysql_query($sql_get);
		$link_nam="contacts.php?p=";
		$recordsPerPage = 30;
		require_once "paging.php";
		if(mysql_num_rows($result_get)>0){
		$i=0;
		while($row=mysql_fetch_array($result_get)){
		$i++;
	?>
	<tr>
		<td class="font_10_black"><?php echo $row['id'];?></td>
		<td class="font_10_black"><?php echo $row['first_name'].' '.$row['last_name'];?></td>
		<td class="font_10_black"><?php echo $row['email'];?></td>
		<!-- <td class="font_10_black"><?php if($row['is_agree']=="1"){echo "Yes";}else{ echo "No";}?></td> -->
		<td class="font_10_black"><a href="contacts.php?move=<?php echo $row['id']; ?>" onClick="return move_sure();"><img src="images/move.png" alt="" /></a>	</td>
		<td class="font_10_black">
		<a href="contacts_edit.php?action=edit&edit_id=<?php echo $row['id']; ?>"><img src="images/edit_link.png" alt="" /></a>			
		</td>
		<td class="font_10_black">
		 <a  href='contacts.php?action=del&del_id=<?php echo $row['id']; ?>' onClick="return checkdel();"> <img src="images/deleteIcon.png" border="0" alt="delete"> </a>	
		</td>
	</tr>
	<?php }} ?>
</td>
</tr>
</table>
</div>		
<div align="center" style="padding:10 0px 0 0;">
     <?php if ($maxPage > 1) { echo $first.$prev.$nav.$next.$last;} ?>
</div>				
</td>
</tr>
</table>			
</td>
</tr>
</table>		
<?php
include "common/footer.php";
?>			