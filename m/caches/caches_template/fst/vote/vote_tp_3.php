<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><form name="myform" id="myform"  action="<?php echo APP_PATH;?>index.php?m=vote&c=index&a=post&subjectid=<?php echo $subjectid;?>" method="post">
<dl>
  <dt><?php echo $subject;?></dt>
  <input type="hidden" name="subjectid" value="<?php echo $subjectid;?>">
<?php $n=1;if(is_array($options)) foreach($options AS $r) { ?>
<?php $i++; ?>
<?php if($vote_data['total']==0 ) { ?>
<?php $per=0;?>
<?php } else { ?>
<?php $per=intval($vote_data[$r['optionid']]/$vote_data['total']*100);?>
<?php } ?>
<li><input type=<?php if($ischeckbox=='0') { ?>"radio"<?php } else { ?>"checkbox"<?php } ?> name="radio[]" id="radio" value="<?php echo $r['optionid'];?>" <?php echo $check_status;?>/><?php echo $r['option'];?></li>
<?php $n++;}unset($n); ?>
  <dd><input type="submit" value="投一票"><a class="a1" href="<?php echo APP_PATH;?>index.php?m=vote&c=index&a=result&subjectid=<?php echo $subjectid;?>&siteid=<?php echo $siteid;?>">查看</a></dd>
</dl>
</form>