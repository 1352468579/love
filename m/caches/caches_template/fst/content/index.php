<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="flexslider">
  <ul class="slides">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2580b58af214072e5e9903332096c753&sql=SELECT+setting+FROM+ailianlove_poster+WHERE+spaceid+%3D+1+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+listorder+ASC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting FROM ailianlove_poster WHERE spaceid = 1 AND type='images' AND disabled=0 ORDER BY listorder ASC LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<?php eval("$narry = $r[setting];");?>
<li style="background:url(<?php echo $narry['1']['imageurl'];?>) 50% 0 no-repeat;"></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  </ul>
</div>
<script type="text/javascript" src="<?php echo siteurl($siteid);?>/statics/fst/js/jquery.flexslider-min.js"></script> 
<script type="text/javascript">
$(document).ready(function(){
	$('.flexslider').flexslider({
		//slideshowSpeed: 5000, //展示时间间隔ms
		//animationSpeed: 400, //滚动时间ms
		directionNav: true,
		pauseOnAction: false
	});
});
</script>
<!--三个类&今日专家&会员中心-->
<div class="wrap floor1">
  <div class="floor1-left">
<?php $n=1;if(is_array(subcat(8))) foreach(subcat(8) AS $v) { ?>
<?php if($v[catid]==11 || $v[catid]==12 || $v[catid]==13) continue;?>
<ul>
<dt><span><a href="<?php echo $CATEGORYS[$v['catid']]['url'];?>" title="查看更多"><?php echo $CATEGORYS[$v['catid']]['catname'];?></a></span></dt>
<dl>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=54b467cef39d54370b452dd69f6c3bf5&action=lists&catid=%24v%5Bcatid%5D&num=7&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$v[catid],'order'=>'listorder DESC','limit'=>'7',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</dl>
</ul>
<?php $n++;}unset($n); ?>
<ul class="last">
<dt><span><a href="<?php echo $CATEGORYS['13']['url'];?>" title="查看更多"><?php echo $CATEGORYS['13']['catname'];?></a></span></dt>
<dl>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1cf38b46b4c763f3ef388cd023bf5759&action=lists&catid=13&num=7&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'13','order'=>'listorder DESC','limit'=>'7',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</dl>
</ul>
  </div>
  <div class="floor1-right">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c502c480eaf1198c83a99ab6f27a3601&action=position&posid=2&order=id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'id DESC','limit'=>'1',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
    <dl><a href="<?php echo $r['url'];?>">
      <img src="<?php if($r[thumb]) { ?><?php echo $r['thumb'];?><?php } else { ?><?php echo siteurl($siteid);?>/statics/fst/images/nopic.jpg<?php } ?>" alt="<?php echo $r['title'];?>"/>
      <dt><?php echo str_cut($r[description],70);?></dt></a>
      <dd><a class="a1" href="<?php echo $CATEGORYS['42']['url'];?>">在线提问</a><a class="a2" href="tencent://message/?uin=<?php echo $SITES[$siteid]['my_qq01'];?>&Site=<?php echo siteurl($siteid);?>&Menu=yes">免费咨询</a></dd>
    </dl>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    <a class="huiyuan" href="index.php?m=member"></a> </div>
</div>
<!--专业团队&公司资质-->
<div class="floor2">
  <div class="wrap"> 
    <script type="text/javascript" src="<?php echo siteurl($siteid);?>/statics/fst/js/jquery.SuperSlide.2.1.1.js"></script>
    <div class="floor2-left">
      <div style="height:26px"></div>
      <h3><a href="<?php echo $CATEGORYS['17']['url'];?>" title="查看更多">专业团队</a></h3>
      <div class="hd">
        <ul>
          <li>首席</li><li>资深</li><li>顾问</li><li class="last">律师</li>
        </ul>
      </div>
      <div class="bd">
<?php $n=1;if(is_array(subcat(17))) foreach(subcat(17) AS $v) { ?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=64d60650e9a19871299b817dc4bfa3e5&action=lists&catid=%24v%5Bcatid%5D&num=3&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$v[catid],'order'=>'listorder DESC','limit'=>'3',));}?>
<ul>
<table width="" border="0">
  <tr>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
   <td width="202"><li>
  <dt><a href="<?php echo $r['url'];?>"><img src="<?php if($r[thumb]) { ?><?php echo $r['thumb'];?><?php } else { ?><?php echo siteurl($siteid);?>/statics/fst/images/nopic.jpg<?php } ?>" alt="<?php echo $r['title'];?>"/></a></dt>
  <dd><a class="a1" href="<?php echo $r['url'];?>"><?php echo $CATEGORYS[$v['catid']]['catname'];?></a><a class="a2" href="tencent://message/?uin=<?php echo $SITES[$siteid]['my_qq01'];?>&Site=<?php echo siteurl($siteid);?>&Menu=yes">在线咨询</a></dd>
</li></td>
<?php $n++;}unset($n); ?>
  </tr>
</table>
</ul>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php $n++;}unset($n); ?>
      </div>
    </div>
    <script type="text/javascript">jQuery(".floor2-left").slide({effect:"leftLoop",autoPlay:false,delayTime:1000});</script>
<!--公司资质-->
  <div class="floor2-right">
    <div class="hd">
      <ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8f4049d6fc74e94b03ba78380c3409f7&action=lists&catid=51&num=6&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'51','order'=>'listorder DESC','limit'=>'6',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><?php echo $n;?></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </ul>
    </div>
    <div class="bd">
      <ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8f4049d6fc74e94b03ba78380c3409f7&action=lists&catid=51&num=6&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'51','order'=>'listorder DESC','limit'=>'6',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $r['url'];?>"><img src="<?php if($r[thumb]) { ?><?php echo $r['thumb'];?><?php } else { ?><?php echo siteurl($siteid);?>/statics/fst/images/nopic.jpg<?php } ?>" alt="<?php echo $r['title'];?>" /></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </ul>
    </div>
  </div>
  <script type="text/javascript">jQuery(".floor2-right").slide({mainCell:".bd ul",autoPlay:true});</script>
  </div>
</div>
<!--首页广告01-->
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=042f524be80c5254a8e9ead6c1f19dc0&sql=SELECT+setting+FROM+ailianlove_poster+WHERE+spaceid+%3D+2+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+id+ASC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting FROM ailianlove_poster WHERE spaceid = 2 AND type='images' AND disabled=0 ORDER BY id ASC LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<?php eval("\$narry = $r[setting];");?>
<?php if($n==1) { ?>
<div class="floor-ads"><a href="<?php echo $narry['1']['linkurl'];?>" target="_blank"><img src="<?php echo $narry['1']['imageurl'];?>" alt="<?php echo $narry['1']['alt'];?>"/></a></div>
<?php } ?>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<!--成功案例&资质荣誉-->
<div class="floor3 wrap">
  <div class="floor3-left">
    <h3><span><a href="<?php echo $CATEGORYS['21']['url'];?>" title="查看更多">成功案例</a></span></h3>
    <div class="hd">
      <ul>
        <li><?php echo $CATEGORYS['22']['catname'];?></li><li><?php echo $CATEGORYS['23']['catname'];?></li><li><?php echo $CATEGORYS['24']['catname'];?></li><li><?php echo $CATEGORYS['25']['catname'];?></li><li class="last"><?php echo $CATEGORYS['26']['catname'];?></li><a class="morecase" href="<?php echo $CATEGORYS['21']['url'];?>">更多>></a>
      </ul>
    </div>
    <div class="bd">
<?php $n=1;if(is_array(subcat(21))) foreach(subcat(21) AS $v) { ?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=64d60650e9a19871299b817dc4bfa3e5&action=lists&catid=%24v%5Bcatid%5D&num=3&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$v[catid],'order'=>'listorder DESC','limit'=>'3',));}?>
<ul>
<table width="" border="0">
  <tr>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<td width="216"><li><a href="<?php echo $r['url'];?>"><img src="<?php if($r[thumb]) { ?><?php echo $r['thumb'];?><?php } else { ?><?php echo siteurl($siteid);?>/statics/fst/images/nopic.jpg<?php } ?>" alt="<?php echo $r['title'];?>" /></a></li></td>
<?php $n++;}unset($n); ?>
</tr>
</table>
</ul>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php $n++;}unset($n); ?>
    </div>
  </div>
  <script type="text/javascript">jQuery(".floor3-left").slide({effect:"leftLoop",autoPlay:false,delayTime:1000});</script>
  <div class="floor3-right">
    <div class="hd">
      <ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bd83108423db871b98a0357c5a4dbc7a&action=lists&catid=33&num=6&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'33','order'=>'listorder DESC','limit'=>'6',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><?php echo $n;?></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </ul>
    </div>
    <div class="bd">
      <ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bd83108423db871b98a0357c5a4dbc7a&action=lists&catid=33&num=6&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'33','order'=>'listorder DESC','limit'=>'6',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $r['url'];?>"><img src="<?php if($r[thumb]) { ?><?php echo $r['thumb'];?><?php } else { ?><?php echo siteurl($siteid);?>/statics/fst/images/nopic.jpg<?php } ?>" alt="<?php echo $r['title'];?>" /></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </ul>
    </div>
  </div>
  <script type="text/javascript">jQuery(".floor3-right").slide({mainCell:".bd ul",autoPlay:true});</script>
</div>
<!--首页广告02-->
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=042f524be80c5254a8e9ead6c1f19dc0&sql=SELECT+setting+FROM+ailianlove_poster+WHERE+spaceid+%3D+2+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+id+ASC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting FROM ailianlove_poster WHERE spaceid = 2 AND type='images' AND disabled=0 ORDER BY id ASC LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<?php eval("\$narry = $r[setting];");?>
<?php if($n==2) { ?>
<div class="floor-ads"><a href="<?php echo $narry['1']['linkurl'];?>" target="_blank"><img src="<?php echo $narry['1']['imageurl'];?>" alt="<?php echo $narry['1']['alt'];?>"/></a></div>
<?php } ?>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<!--解决方案&投票&统计-->
<div class="floor4 wrap">
  <dt class="floor4-left_tit"><span><a href="<?php echo $CATEGORYS['47']['url'];?>" title="查看更多">解决方案</a></span></dt>
  <div class="floor4-left">
<table width="647" border="0">
  <tr>
    <td width="216"><ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2d832c991d4f71d6a7ef3a450c5d54f8&action=lists&catid=48&num=7&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'48','order'=>'listorder DESC','limit'=>'7',));}?>
<h3><a style="color:#2b1aa9" href="<?php echo $CATEGORYS['48']['url'];?>" title="查看更多"><?php echo $CATEGORYS['48']['catname'];?></a></h3>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $r['url'];?>">· <?php echo $r['title'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul></td>
    <td width="216"><ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1c2a3001787821a90978555db8b977a8&action=lists&catid=49&num=7&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'49','order'=>'listorder DESC','limit'=>'7',));}?>
<h3><a style="color:#46cbe8" href="<?php echo $CATEGORYS['49']['url'];?>" title="查看更多"><?php echo $CATEGORYS['49']['catname'];?></a></h3>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $r['url'];?>">· <?php echo $r['title'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul></td>
    <td width="216"><ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c12a0e454dac2ede8cc78a4f4e9d74ca&action=lists&catid=50&num=7&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'50','order'=>'listorder DESC','limit'=>'7',));}?>
<h3><a style="color:#868a29" href="<?php echo $CATEGORYS['50']['url'];?>" title="查看更多"><?php echo $CATEGORYS['50']['catname'];?></a></h3>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $r['url'];?>">· <?php echo $r['title'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul></td>
  </tr>
  <tr>
    <td width="216"><ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e916edd2a2fe10ed33b0db1ca16fe82b&action=lists&catid=14&num=7&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'14','order'=>'listorder DESC','limit'=>'7',));}?>
<h3><a style="color:#221abc" href="<?php echo $CATEGORYS['14']['url'];?>" title="查看更多"><?php echo $CATEGORYS['14']['catname'];?></a></h3>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $r['url'];?>">· <?php echo $r['title'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul></td>
    <td width="216"><ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=957c5759965a563125c685b1789d872a&action=lists&catid=15&num=7&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'15','order'=>'listorder DESC','limit'=>'7',));}?>
<h3><a style="color:#af5bc8" href="<?php echo $CATEGORYS['15']['url'];?>" title="查看更多"><?php echo $CATEGORYS['15']['catname'];?></a></h3>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $r['url'];?>">· <?php echo $r['title'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul></td>
    <td width="216"><ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3bdc7c6057ed95b2a613dd72ccc0f09f&action=lists&catid=16&num=7&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','order'=>'listorder DESC','limit'=>'7',));}?>
<h3><a style="color:#cc6c97" href="<?php echo $CATEGORYS['16']['url'];?>" title="查看更多"><?php echo $CATEGORYS['16']['catname'];?></a></h3>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $r['url'];?>">· <?php echo $r['title'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul></td>
  </tr>
</table>
  </div>
  <div class="floor4-right">
    <div class="floor4-right_top">
      <h3>婚姻情感调查</h3>
      <script language="javascript" src="index.php?m=vote&c=index&a=show&action=js&subjectid=1&type=3"></script>
    </div>
<div class="floor4-right_bottom">
<dt>截止
<script>
var day="";
var month="";
var ampm="";
var ampmhour="";
var myweekday="";
var year="";
mydate=new Date();
myweekday=mydate.getDay();
mymonth=mydate.getMonth()+1;
myday= mydate.getDate();
myyear= mydate.getYear();
year=(myyear > 200) ? myyear : 1900 + myyear;
if(myweekday == 0)
weekday=" 星期日 ";
else if(myweekday == 1)
weekday=" 星期一 ";
else if(myweekday == 2)
weekday=" 星期二 ";
else if(myweekday == 3)
weekday=" 星期三 ";
else if(myweekday == 4)
weekday=" 星期四 ";
else if(myweekday == 5)
weekday=" 星期五 ";
else if(myweekday == 6)
weekday=" 星期六 ";
document.write("<em>"+year+"</em>年<em>"+mymonth+"</em>月<em>"+myday+"</em>日");
</script> 
<script language=Javascript1.2> 
<!--
//以下是顯示時間
var tags_before_clock = ""
var tags_after_clock = ""
if(navigator.appName == "Netscape") {
document.write('<layer id="clock"></layer>');
}
if (navigator.appVersion.indexOf("MSIE") != -1){
document.write('<span id="clock"></span>');
}
function showclock()
{ 
var date = new Date();
var hour = date.getHours();
var min = date.getMinutes(); 
var sec = date.getSeconds();
var col = ":";
var spc = " ";
var apm;
if ( hour >12 ) 
{ 
apm="P.M.";
hour=hour-12;
}
else 
{
apm="A.M.";
}
if (hour == 0) hour=12;
if (min<=9) min="0"+min;
if (sec<=9) sec="0"+sec;
if(navigator.appName == "Netscape") 
{
document.clock.document.write(tags_before_clock
+hour+col+min+col+sec+spc+tags_after_clock);
document.clock.document.close();
}
if (navigator.appVersion.indexOf("MSIE") != -1)
{
clock.innerHTML = tags_before_clock+hour
+col+min+col+sec;
}
}
setInterval("showclock()",1000);
//-->
function clock(){
   var nowtime=new Date();
   var flag="";
   var hours=nowtime.getHours();
   if(hours>12){
	   hours-=12;
	   flag="";
   }
   hours=hours>9?hours:"0"+hours;
   var minutes=nowtime.getMinutes();
   minutes=minutes>9?minutes:"0"+minutes;
   var seconds=nowtime.getSeconds();
   seconds=seconds>9?seconds:"0"+seconds;
   var disptime="<em>"+hours+"</em>时<em>"+minutes+"</em>分"+flag;
   document.getElementById("clock").innerHTML=disptime;
   setTimeout("clock()",1000);
}
clock();
</script>
</dt>
      <h4>已成功挽回</h4>
      <dd>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=9edcc5946ab4ff61481cbb47308c090f&sql=SELECT+count%28%2A%29+as+count+FROM+ailianlove_picture+WHERE+catid+in+%2822%2C23%2C24%2C25%2C26%29&cache=3600&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'SELECT count(*) as count FROM ailianlove_picture WHERE catid in (22,23,24,25,26)',)).'9edcc5946ab4ff61481cbb47308c090f');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT count(*) as count FROM ailianlove_picture WHERE catid in (22,23,24,25,26) LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
<?php
$i=7666;
$zongshu=$v[count]+$i;
$sum_arr = array();
(int)$number = $zongshu;
for($i=strlen($number);$i>0;$i--){
        $sum_arr[] = substr($number,$i-1,1);
}
if ($number < 10) echo "<em>0</em><em>0</em><em>0</em><em>0</em><em>$sum_arr[0]</em>";
elseif ($number < 100) echo "<em>0</em><em>0</em><em>0</em><em>$sum_arr[1]</em><em>$sum_arr[0]</em>";
elseif ($number < 1000) echo "<em>0</em><em>0</em><em>$sum_arr[2]</em><em>$sum_arr[1]</em><em>$sum_arr[0]</em>";
elseif ($number < 10000) echo "<em>0</em><em>$sum_arr[3]</em><em>$sum_arr[2]</em><em>$sum_arr[1]</em><em>$sum_arr[0]</em>";
elseif ($number < 100000) echo "<em>$sum_arr[4]</em><em>$sum_arr[3]</em><em>$sum_arr[2]</em><em>$sum_arr[1]</em><em>$sum_arr[0]</em>";
?>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
例</dd>
    </div>
  </div>
</div>
<!--首页广告03-->
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=042f524be80c5254a8e9ead6c1f19dc0&sql=SELECT+setting+FROM+ailianlove_poster+WHERE+spaceid+%3D+2+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+id+ASC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting FROM ailianlove_poster WHERE spaceid = 2 AND type='images' AND disabled=0 ORDER BY id ASC LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<?php eval("\$narry = $r[setting];");?>
<?php if($n==3) { ?>
<div class="floor-ads"><a href="<?php echo $narry['1']['linkurl'];?>" target="_blank"><img src="<?php echo $narry['1']['imageurl'];?>" alt="<?php echo $narry['1']['alt'];?>"/></a></div>
<?php } ?>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<!--情感部落&情感测试-->
<div class="floor5 wrap">
  <!--情感部落-->
  <div class="floor5-left">
    <h3><?php echo $CATEGORYS['35']['catname'];?></h3>
<div class="hd">
<ul>
<?php $n=1;if(is_array(subcat(35))) foreach(subcat(35) AS $v) { ?>
<?php if($v[catid]==41) continue;?>
<li><?php echo $CATEGORYS[$v['catid']]['catname'];?></li>
<?php $n++;}unset($n); ?>
</ul>
</div>
<div class="bd">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=593fc8bd8ce5ac25263452a8f1b476a6&sql=select+%2A+from+ailianlove_guestbook+where+passed%3D1+and+leixing%3D1+order+by+id+desc&return=data&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from ailianlove_guestbook where passed=1 and leixing=1 order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<ul>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $CATEGORYS['36']['url'];?>#faq-<?php echo $r['id'];?>"><?php echo $r['content'];?></a></li>
<?php $n++;}unset($n); ?>
</ul>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=a2d4eafe43774f1addbb00dce2aff858&sql=select+%2A+from+ailianlove_guestbook+where+passed%3D1+and+leixing%3D2+order+by+id+desc&return=data&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from ailianlove_guestbook where passed=1 and leixing=2 order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<ul>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $CATEGORYS['37']['url'];?>#faq-<?php echo $r['id'];?>"><?php echo $r['content'];?></a></li>
<?php $n++;}unset($n); ?>
</ul>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=a0bca9e1109c4ad9b48804ba8e63db79&sql=select+%2A+from+ailianlove_guestbook+where+passed%3D1+and+leixing%3D3+order+by+id+desc&return=data&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from ailianlove_guestbook where passed=1 and leixing=3 order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<ul>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $CATEGORYS['38']['url'];?>#faq-<?php echo $r['id'];?>"><?php echo $r['content'];?></a></li>
<?php $n++;}unset($n); ?>
</ul>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=78c398147d0f7f26ee3091c43c782e4c&sql=select+%2A+from+ailianlove_guestbook+where+passed%3D1+and+leixing%3D4+order+by+id+desc&return=data&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from ailianlove_guestbook where passed=1 and leixing=4 order by id desc LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<ul>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $CATEGORYS['39']['url'];?>#faq-<?php echo $r['id'];?>"><?php echo $r['content'];?></a></li>
<?php $n++;}unset($n); ?>
</ul>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
  </div>
  <!--情感测试-->
  <div class="floor5-right">
    <h3><?php echo $CATEGORYS['40']['catname'];?></h3>
    <ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7075de6c24a9378747fee036e8ad4d81&action=lists&catid=40&num=7&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'40','order'=>'listorder DESC','limit'=>'7',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $CATEGORYS['40']['url'];?>">· <?php echo $r['title'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
  </div>
</div>
<script type="text/javascript">jQuery(".floor5").slide({effect:"topLoop",autoPlay:true,delayTime:1000});</script>
<!--爱恋图库-->
<div class="floor6 wrap">
  <h3><?php echo $CATEGORYS['41']['catname'];?></h3>
<div class="kinMaxShow1-wrap1">
<a id="prev"></a>
<a id="next"></a>
<div class="kinMaxShow1-wrap">
<div id="kinMaxShow1">
  <ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6bfb0500f850d18edd2cf6b79eabd685&action=lists&catid=41&num=12&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'41','order'=>'listorder DESC','limit'=>'12',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php if($r[thumb]) { ?><?php echo $r['thumb'];?><?php } else { ?><?php echo siteurl($siteid);?>/statics/fst/images/nopic.jpg<?php } ?>" alt="<?php echo $r['title'];?>" /><?php echo $r['title'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  </ul>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="<?php echo siteurl($siteid);?>/statics/fst/js/jcarousellite.js"></script> 
<script type="text/javascript">
$(function(){
	$('#kinMaxShow1').jCarouselLite({
		btnPrev: '#prev',
		btnNext: '#next',
		visible: 6,
		vertical: false,
		auto:false,
   		speed: 800
	});
})
</script>
<!--媒体报道&合作单位-->
<div class="floor7 wrap">
  <div class="hd">
    <ul>
      <li style="border-right:2px solid #999">媒体报道</li><li>合作单位</li>
    </ul>
  </div>
  <div class="bd">
    <ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=b688576764ee4e94205530945dc87fbe&action=type_list&siteid=%24siteid&typeid=54&linktype=1&order=listorder+DESC&num=8&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'typeid'=>'54','linktype'=>'1','order'=>'listorder DESC','limit'=>'8',));}?>
<?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
<li class="link-1<?php echo $n;?>"><a href="<?php echo $v['url'];?>" rel="nofollow" target="_blank"><img src="<?php echo $v['logo'];?>" alt="<?php echo $v['name'];?>"/></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
    <ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=c56fb15011677076bc05c919f3312d02&action=type_list&siteid=%24siteid&typeid=55&linktype=1&order=listorder+DESC&num=8&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'typeid'=>'55','linktype'=>'1','order'=>'listorder DESC','limit'=>'8',));}?>
<?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
<li class="link-2<?php echo $n;?>"><a href="<?php echo $v['url'];?>" rel="nofollow" target="_blank"><img src="<?php echo $v['logo'];?>" alt="<?php echo $v['name'];?>"/></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
  </div>
</div>
<script type="text/javascript">jQuery(".floor7").slide({effect:"leftLoop",autoPlay:false,delayTime:1000});</script>
<?php include template("content","footer"); ?>