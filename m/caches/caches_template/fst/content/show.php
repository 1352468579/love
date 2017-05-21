<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="banner"></div>
<div class="wrap">
  <div class="main-wrap">
    <div class="show-left">
      <h3 class="show-left_tit"><?php echo $CATEGORYS[$catid]['catname'];?><span></span></h3>
      <dl class="article_tit"><?php echo $title;?></dl>
      <div class="content">
<?php if($pictureurls) { ?>
<script src="<?php echo siteurl($siteid);?>/statics/fst/js/jquery.SuperSlide.2.1.1.js"></script>
<div class="qiehuantu">
<div class="honor_big">
<div><img src="<?php echo $thumb;?>" alt="<?php echo $title;?>"/></div>
</div>
<div class="honor_list"> <a class="prev"></a> <a class="next"></a>
<div class="bd">
<ul class="ul">
<?php $n=1; if(is_array($pictureurls)) foreach($pictureurls AS $pic_k => $r) { ?>
<li><img src="<?php echo $r['url'];?>" alt="<?php echo $r['alt'];?>"/></li>
<?php $n++;}unset($n); ?>
</ul>
</div>
<script>
  jQuery(".honor_list").slide({mainCell:".bd ul",effect:"left",autoPlay:false,autoPage:true,pnLoop:false,vis:5});
  $(".honor_list li").click(function() {
  var imgUrl=$(this).find("img").attr("src");
  var imgTxt=$(this).find("img").attr("alt");
  $(".honor_big img").attr("src",imgUrl);
  $(".honor_big img").attr("alt",imgTxt);
  });
</script> 
</div>
</div>
<?php } ?>
<?php echo $content;?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=042f524be80c5254a8e9ead6c1f19dc0&sql=SELECT+setting+FROM+ailianlove_poster+WHERE+spaceid+%3D+2+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+id+ASC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting FROM ailianlove_poster WHERE spaceid = 2 AND type='images' AND disabled=0 ORDER BY id ASC LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<?php eval("\$narry = $r[setting];");?>
<?php if($n==4) { ?>
<p><a href="<?php echo $narry['1']['linkurl'];?>" target="_blank"><img src="<?php echo $narry['1']['imageurl'];?>" alt="<?php echo $narry['1']['alt'];?>"/></a></p>
<?php } ?>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <dl class="show-tel"><span><?php echo $SITES[$siteid]['my_tel'];?></span><dd><a href="<?php echo $CATEGORYS['42']['url'];?>">在线提问</a><a href="tencent://message/?uin=<?php echo $SITES[$siteid]['my_qq01'];?>&Site=<?php echo siteurl($siteid);?>&Menu=yes">咨询专家</a></dd></dl>
<!--分享插件-->
<div class="bdsharebuttonbox"><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到QQ好友" href="#" class="bds_sqq" data-cmd="sqq"></a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a><a title="分享到百度贴吧" href="#" class="bds_tieba" data-cmd="tieba"></a><a title="分享到飞信" href="#" class="bds_fx" data-cmd="fx"></a><a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a><a title="分享到天涯社区" href="#" class="bds_ty" data-cmd="ty"></a><a title="分享到豆瓣网" href="#" class="bds_douban" data-cmd="douban"></a><a title="分享到一键分享" href="#" class="bds_mshare" data-cmd="mshare"></a><a title="分享到复制网址" href="#" class="bds_copy" data-cmd="copy"></a><a title="分享到打印" href="#" class="bds_print" data-cmd="print"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
<script>
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"<?php echo $SEO['description'];?>","bdMini":"2","bdMiniList":false,"bdPic":"<?php echo $thumb;?>","bdStyle":"0","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>
<!--分享插件 结束-->
        <dl class="prevnext">
        <dd>上一篇：<a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a></dd>
        <dd>下一篇：<a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a></dd>
        </dl>
<!--心情插件-->
<?php if(module_exists('mood')) { ?><script type="text/javascript" src="<?php echo APP_PATH;?>index.php?m=mood&c=index&a=init&id=<?php echo id_encode($catid,$id,$siteid);?>"></script><?php } ?>
      </div>
    </div>
    <?php include template("content","side"); ?>
  </div>
</div>
<?php include template("content","footer"); ?>