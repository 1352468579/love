<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="banner"></div>
<div class="wrap">
  <div class="main-wrap">
    <div class="main-left">
      <h3><?php if($parentid) { ?><?php echo $CATEGORYS[$parentid]['catname'];?><?php } else { ?><?php echo $CATEGORYS[$catid]['catname'];?><?php } ?></h3>
      <ul>
<?php if($parentid) { ?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3b84faf08fcedde6b2e1747d94089a84&action=category&catid=%24parentid&num=6&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'6',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li<?php if($catid==$r[catid] || $parentid==$r[catid]) { ?> class="current"<?php } ?>><a href="<?php echo $r['url'];?>" title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php } else { ?>
<li class="current"><a href="<?php echo $CATEGORYS[$catid]['url'];?>" title="<?php echo $CATEGORYS[$catid]['catname'];?>"><?php echo $CATEGORYS[$catid]['catname'];?></a></li>
<?php } ?>
      </ul>
    </div>
    <div class="main-right">
      <h3 class="main-right_tit"><?php echo $CATEGORYS[$catid]['catname'];?><span></span></h3>
      <ul class="list-news">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9733eab3122e8e0faff630f4acd96fc6&action=lists&catid=%24catid&num=9&order=listorder+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 9;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php if($r[thumb]) { ?><?php echo $r['thumb'];?><?php } else { ?><?php echo siteurl($siteid);?>/statics/fst/images/nopic.jpg<?php } ?>" alt="<?php echo $r['title'];?>"/>
  <dl>
    <dt><?php echo $r['title'];?><span class="inputtime"><?php echo date('Y年m月d日',$r[inputtime]);?></span></dt>
    <dd><?php echo $r['description'];?>...</dd>
  </dl>
  </a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </ul>
      <div class="clearfix"></div>
      <?php if($pages) { ?><div class="pagenav"><?php echo $pages;?></div><?php } ?>
    </div>
  </div>
</div>
<?php include template("content","footer"); ?>