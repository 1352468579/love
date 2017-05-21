<?php
include $this->admin_tpl('header','admin');
?>

<div class="pad_10">
<form action="?m=guestbook&c=guestbook&a=show&id=<?php echo $id; ?>" method="post" name="myform" id="myform">
<table cellpadding="2" cellspacing="1" class="table_form" width="100%">
	<tr>
		<th width="20%"><?php echo L('addtime')?>：</th>
		<td><?php echo date('Y-m-d H:i:s',$addtime);?></td>
	</tr>
	<tr>
		<th width="20%"><?php echo L('name')?>：</th>
		<td><?php echo $name;?></td>
	</tr>
	<tr>
		<th width="20%"><?php echo L('qq')?>：</th>
		<td><?php echo $qq;?></td>
	</tr>
<!--	<tr>
		<th width="20%"><?php echo L('email')?>：</th>
		<td><?php echo $email;?></td>
	</tr>  -->  
	<tr>
		<th width="20%"><?php echo L('phone')?>：</th>
		<td><?php echo $phone;?></td>
	</tr>
	<tr>
		<th><?php echo L('content')?>：</th>
		<td><?php echo $content;?></td>
	</tr>
	<tr>
	  <th><?php echo L('replycontent')?>：</th>
	  <td> 
	    <textarea name="guestbook[replycontent]" id="reply" cols="65" rows="8"><?php echo $replycontent;?></textarea></td>
	  </tr>
    <tr>
		<th><?php echo L('status')?>：</th>
		<td><input name="guestbook[passed]" type="radio" value="1" <?php if($passed==1){echo "checked";}?>>&nbsp;<?php echo '已审核'?>&nbsp;&nbsp;<input
			name="guestbook[passed]" type="radio" value="0" <?php if($passed==0){echo "checked";}?>>&nbsp;<?php echo '未审核'?></td>
	</tr>
<tr>
<th>分类：</th>
<td><input name="guestbook[leixing]" type="radio" value="0" <?php if($leixing==0){echo "checked";}?>>&nbsp;<?php echo '未分类'?>&nbsp;&nbsp;<input
    name="guestbook[leixing]" type="radio" value="1" <?php if($leixing==1){echo "checked";}?>>&nbsp;<?php echo '恋爱专区'?>&nbsp;&nbsp;<input
    name="guestbook[leixing]" type="radio" value="2" <?php if($leixing==2){echo "checked";}?>>&nbsp;<?php echo '婚姻家庭'?>&nbsp;&nbsp;<input
    name="guestbook[leixing]" type="radio" value="3" <?php if($leixing==3){echo "checked";}?>>&nbsp;<?php echo '反小三联盟'?>&nbsp;&nbsp;<input
    name="guestbook[leixing]" type="radio" value="4" <?php if($leixing==4){echo "checked";}?>>&nbsp;<?php echo '智慧妈妈社区'?></td>
</tr>
    <tr>
		<th></th>
		<td><input
		type="submit" name="dosubmit" id="dosubmit" class="dialog"
		value=" <?php echo L('submit')?> "></td>
	</tr>

</table>
</form>
</div>
</body>
</html>

