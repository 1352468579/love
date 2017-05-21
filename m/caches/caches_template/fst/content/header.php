<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!--
作者:成都凡思特网络科技有限公司技术部 Url:www.028fast.com Tel:4000-903-923
设计:SongJiaLi
程序:JiangGle Url:jiangdesheng.com
-->
<?php $SITES = getcache('sitelist','commons'); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-transform"/>
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link rel="shortcut icon" href="<?php echo siteurl($siteid);?>/favicon.ico"/>
<link rel="bookmark" href="<?php echo siteurl($siteid);?>/favicon.ico"/>
<link rel="stylesheet" href="<?php echo siteurl($siteid);?>/statics/fst/css/reset.css"/>
<link rel="stylesheet" href="<?php echo siteurl($siteid);?>/statics/fst/css/style.css"/>
<script type="text/javascript" src="<?php echo siteurl($siteid);?>/statics/fst/js/jquery-1.7.2.min.js"></script>
<!-- 兼容IE6-IE9的html5、CSS3和兼容IE6 png不正常的js -->
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo siteurl($siteid);?>/statics/fst/js/css3-mediaqueries.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo siteurl($siteid);?>/statics/fst/js/html5.js"></script>
<![endif]-->
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo siteurl($siteid);?>/statics/fst/js/fixPNG.js"></script>
<script>
DD_belatedPNG.fix('*');
</script>
<script type="text/javascript" src="<?php echo siteurl($siteid);?>/statics/fst/js/iefix.js"></script>
<![endif]-->
<script language="javascript" type="text/javascript" src="loca_domain.js"></script>
<!-- ailianlove.com Baidu tongji analytics -->
<script>
var _hmt = _hmt || [];
(function() {
var hm = document.createElement("script");
hm.src = "https://hm.baidu.com/hm.js?15d8350ba7ebaf4fb1a67a5e08fe209e";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hm, s);
})();
</script>
</head>

<body>
<div class="wrap header">
  <div class="logo"><a href="<?php echo siteurl($siteid);?>" title="<?php echo $SITES[$siteid]['name'];?>"></a></div>
  <div class="tel"><span><?php echo $SITES[$siteid]['my_tel'];?></span></div>
</div>
<div class="nav">
  <ul class="wrap">
    <li<?php if($catid==2 || $top_parentid==2) { ?> class="current"<?php } ?>> <a href="<?php echo $CATEGORYS['2']['url'];?>"><?php echo $CATEGORYS['1']['catname'];?></a>
      <ul class="sub-nav">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=82f366b59bbb2f685487e05f287e88ac&action=category&catid=1&num=9&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'9',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<dd><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></dd>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </ul>
    </li>
    <li<?php if(!$catid) { ?> class="current"<?php } ?>> <a href="<?php echo siteurl($siteid);?>">首页</a> </li>
    <li<?php if($catid==9 || $top_parentid==9) { ?> class="current"<?php } ?>> <a href="<?php echo $CATEGORYS['9']['url'];?>"><?php echo $CATEGORYS['9']['catname'];?></a> </li>
    <li<?php if($catid==10 || $top_parentid==10) { ?> class="current"<?php } ?>> <a href="<?php echo $CATEGORYS['10']['url'];?>"><?php echo $CATEGORYS['10']['catname'];?></a> </li>
    <li<?php if($catid==11 || $top_parentid==11) { ?> class="current"<?php } ?>> <a href="<?php echo $CATEGORYS['11']['url'];?>"><?php echo $CATEGORYS['11']['catname'];?></a> </li>
    <li<?php if($catid==12 || $top_parentid==12) { ?> class="current"<?php } ?>> <a href="<?php echo $CATEGORYS['12']['url'];?>"><?php echo $CATEGORYS['12']['catname'];?></a> </li>
    <li<?php if($catid==17 || $top_parentid==17) { ?> class="current"<?php } ?>> <a href="<?php echo $CATEGORYS['17']['url'];?>"><?php echo $CATEGORYS['17']['catname'];?></a> </li>
    <li<?php if($catid==21 || $top_parentid==21) { ?> class="current"<?php } ?>> <a href="<?php echo $CATEGORYS['21']['url'];?>"><?php echo $CATEGORYS['21']['catname'];?></a> </li>
    <li<?php if($catid==28 || $top_parentid==28) { ?> class="current"<?php } ?>> <a href="<?php echo $CATEGORYS['28']['url'];?>"><?php echo $CATEGORYS['28']['catname'];?></a> </li>
    <li class="last"> <a href="index.php?m=member">会员专区</a> </li>
  </ul>
</div>
<!--公用头部 结束-->
