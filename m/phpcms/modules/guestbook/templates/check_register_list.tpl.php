<?php
defined('IN_ADMIN') or exit('No permission resources.');
$show_dialog = 1;
include $this->admin_tpl('header', 'admin');
?>
<div class="pad-lr-10">
<form name="myform" id="myform" action="?m=guestbook&c=guestbook&a=check_register" method="post" onsubmit="checkuid();return false;">
<div class="table-list">
 <table width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="35" align="center"><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');">ID</th>
<th align="center">类别</th>
            <th align="center"><?php echo L('name')?></th>
            <th align="center"><?php echo L('qq')?></th>
            <th align="center"><?php echo L('phone')?></th>
            <th align="center"><?php echo L('addtime')?></th>
            <th width="8%" align="center"><?php echo L('status')?></th>
            <th width="12%" align="center"><?php echo L('operations_manage')?></th>
          </tr>
        </thead>
        <tbody>
<?php
if(is_array($infos)){
	foreach($infos as $info){
		?>
    <tr>
            <td align="center" width="35"><input type="checkbox" name="id[]" value="<?php echo $info['id']?>"><?php echo $info['id']?></td>
<td align="center"><?php if($info['leixing']==1){ echo "恋爱专区";}elseif($info['leixing']==2){ echo "婚姻家庭";}elseif($info['leixing']==3){ echo "反小三联盟";}elseif($info['leixing']==4){ echo "智慧妈妈社区";}else{ echo "<font color='#f00'>未分类</font>";}?></td>
            <td align="center"><?php echo $info['name']?></td>
            <td align="center"><?php echo $info['qq'];?></td>
            <td align="center"><?php echo $info['phone'];?></td>
            <td align="center"><?php echo date('Y-m-d H:i',$info['addtime']);?></td>
            <td width="8%" align="center"><a href='?m=guestbook&c=guestbook&a=check&id=<?php echo $info['id']?>'><?php if($info['passed']==1){ echo "已审核";}else{ echo "未审核";}?></a><br />[<?php if($info['replycontent']==""){echo "<font color='#FF0000'>未回复</font>";}else{echo "已回复";} ?>]</td>
            <td align="center" width="12%"><a href="###"
			onclick="show(<?php echo $info['id']?>, '<?php echo new_addslashes($info['name'])?>')"
			title="<?php echo "查看或回复"?>"><?php echo "查看/回复"?></a> | <a href='?m=guestbook&c=guestbook&a=delete&id=<?php echo $info['id']?>'
			onClick="return confirm('<?php echo L('confirm', array('message' => new_addslashes($info['name'])))?>')"><?php echo L('delete')?></a></td>
          </tr>
	<?php
	}
}
?>
</tbody>
</table>
<div class="btn">
<input name="dosubmit" type="submit" class="button" value="批量审核">
&nbsp;&nbsp;<input type="submit" class="button" name="dosubmit" onclick="document.myform.action='?m=guestbook&c=guestbook&a=delete'" value="<?php echo L('delete')?>"/>
&nbsp;&nbsp;
<input type="submit" class="button" name="dosubmit" onClick="document.myform.action='?m=guestbook&c=guestbook&a=leixing0'" value="分类到[未分类]"/>
&nbsp;&nbsp;
<input type="submit" class="button" name="dosubmit" onClick="document.myform.action='?m=guestbook&c=guestbook&a=leixing1'" value="分类到[恋爱专区]"/>
&nbsp;&nbsp;
<input type="submit" class="button" name="dosubmit" onClick="document.myform.action='?m=guestbook&c=guestbook&a=leixing2'" value="分类到[婚姻家庭]"/>
&nbsp;&nbsp;
<input type="submit" class="button" name="dosubmit" onClick="document.myform.action='?m=guestbook&c=guestbook&a=leixing3'" value="分类到[反小三联盟]"/>
&nbsp;&nbsp;
<input type="submit" class="button" name="dosubmit" onClick="document.myform.action='?m=guestbook&c=guestbook&a=leixing4'" value="分类到[智慧妈妈社区]"/>
</div>
<div id="pages"><?php echo $pages?></div>
</form>
</div>
<script type="text/javascript">

function show(id, name) {
	window.top.art.dialog({id:'show'}).close();
	window.top.art.dialog({title:'<?php echo L('show')?> '+name+' ',id:'show',iframe:'?m=guestbook&c=guestbook&a=show&id='+id,width:'700',height:'450'}, function(){var d = window.top.art.dialog({id:'show'}).data.iframe;var form = d.document.getElementById('dosubmit');form.click();return false;}, function(){window.top.art.dialog({id:'show'}).close()});
}

</script>
</body>
</html>

