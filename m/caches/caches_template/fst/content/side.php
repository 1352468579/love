<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!--详情页专用 右侧 开始-->
<div class="show-right">
  <div class="show-right_tel"><span><?php echo $SITES[$siteid]['my_tel'];?></span></div>
  <div class="show-right_zj">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c502c480eaf1198c83a99ab6f27a3601&action=position&posid=2&order=id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'id DESC','limit'=>'1',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <dl><a href="<?php echo $r['url'];?>">
      <img src="<?php if($r[thumb]) { ?><?php echo $r['thumb'];?><?php } else { ?><?php echo siteurl($siteid);?>/statics/fst/images/nopic.jpg<?php } ?>" alt="<?php echo $r['title'];?>"/>
      <dt><?php echo str_cut($r[description],70);?></dt></a>
      <dd><a class="a1" href="<?php echo $CATEGORYS['42']['url'];?>">在线提问</a><a class="a2" href="tencent://message/?uin=<?php echo $SITES[$siteid]['my_qq01'];?>&Site=<?php echo siteurl($siteid);?>&Menu=yes">免费咨询</a></dd>
    </dl>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  </div>
  <div class="hot-faq">
    <h3>热门提问</h3>
    <ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2f438d406d51dcc472d5e52f6676c919&sql=select+%2A+from+ailianlove_guestbook+where+passed%3D1+order+by+id+desc&return=data&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from ailianlove_guestbook where passed=1 order by id desc LIMIT 7");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li> <a href="<?php if($r[leixing]==1) { ?><?php echo $CATEGORYS['36']['url'];?><?php } elseif ($r[leixing]==2) { ?><?php echo $CATEGORYS['37']['url'];?><?php } elseif ($r[leixing]==3) { ?><?php echo $CATEGORYS['38']['url'];?><?php } elseif ($r[leixing]==4) { ?><?php echo $CATEGORYS['39']['url'];?><?php } ?>#faq-<?php echo $r['id'];?>">· <?php echo $r['content'];?></a> </li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
  </div>
  <div class="hot-faq hot-case">
    <h3>经典案例</h3>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ad0fbe324133144f0bf95a6439e45d2c&action=lists&catid=21&num=1&thumb=1&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'21','thumb'=>'1','order'=>'listorder DESC','limit'=>'1',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <dl>
      <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"> <img src="<?php if($r[thumb]) { ?><?php echo $r['thumb'];?><?php } else { ?><?php echo siteurl($siteid);?>/statics/fst/images/nopic.jpg<?php } ?>" alt="<?php echo $r['title'];?>"/>
      <dt><?php echo $r['title'];?></dt>
      <dd><?php echo str_cut($r[description],80);?></dd>
      </a>
    </dl>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    <ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=181c600a94245ddcb5dfb5f8bf72c492&action=lists&catid=21&num=8&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'21','order'=>'listorder DESC','limit'=>'8',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>">· <?php echo $r['title'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
  </div>
  <div class="hot-pic">
    <h3>热点图片</h3>
    <ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9e1d5f7175b1fb1ec32865942e8b8360&action=lists&catid=41&num=6&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'41','order'=>'listorder DESC','limit'=>'6',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li> <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php if($r[thumb]) { ?><?php echo $r['thumb'];?><?php } else { ?><?php echo siteurl($siteid);?>/statics/fst/images/nopic.jpg<?php } ?>" alt="<?php echo $r['title'];?>"/><?php echo $r['title'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
  </div>
  <div class="hot-pic hot-video">
    <h3>热门视频</h3>
    <ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=de4fa78ee41c278817189fc7669e554a&action=lists&catid=46&num=4&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'46','order'=>'listorder DESC','limit'=>'4',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li> <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php if($r[thumb]) { ?><?php echo $r['thumb'];?><?php } else { ?><?php echo siteurl($siteid);?>/statics/fst/images/nopic.jpg<?php } ?>" alt="<?php echo $r['title'];?>"/><?php echo $r['title'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
  </div>
</div>
<!--详情页专用 右侧 结束-->
