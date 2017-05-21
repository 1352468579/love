<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!--公用尾部 开始-->
<div class="clearfix"></div>
<div class="footer-wrap">
  <div class="footer-top">
    <div class="wrap">
      <dl class="f1">
        <dt>关于我们</dt>
        <dd><a href="<?php echo $CATEGORYS['28']['url'];?>"><?php echo $CATEGORYS['28']['catname'];?></a></dd>
        <dd><a href="<?php echo $CATEGORYS['33']['url'];?>"><?php echo $CATEGORYS['33']['catname'];?></a></dd>
      </dl>
      <dl class="f2">
        <dt>联系我们</dt>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=bec4862cc7e47ff5adf6d8d5a69fc9f1&sql=SELECT+setting+FROM+ailianlove_poster+WHERE+spaceid+%3D+3+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+id+ASC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting FROM ailianlove_poster WHERE spaceid = 3 AND type='images' AND disabled=0 ORDER BY id ASC LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<?php eval("\$narry = $r[setting];");?>
        <dd><?php echo $narry['1']['alt'];?></dd>
        <img src="<?php echo $narry['1']['imageurl'];?>" alt="<?php echo $narry['1']['alt'];?>">
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </dl>
      <dl class="f3">
        <dt>免费幸福热线</dt>
        <dd><?php echo $SITES[$siteid]['my_tel'];?></dd>
      </dl>
    </div>
  </div>
  <div class="footer-copy">Copyright © 2016 <?php echo $SITES[$siteid]['name'];?> 版权所有 <?php echo $SITES[$siteid]['my_icp'];?> 技术支持：<a href="http://www.028fast.com" target="_blank">凡思特科技</a></div>
  <div class="footer-bottom">
    <div class="wrap">地址：<?php echo $SITES[$siteid]['my_address'];?> 电话：<?php echo $SITES[$siteid]['my_tel'];?> 服务项目：婚恋复合 · 婚恋危机处理 · 小三分离 · 长期关系处理 · 情感巩固</div>
  </div>
</div>
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
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?a5ca9caba6ca4371f1e9a596df09bb45";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script type='text/javascript'>
    (function(m, ei, q, i, a, j, s) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        j = ei.createElement(q),
            s = ei.getElementsByTagName(q)[0];
        j.async = true;
        j.charset = 'UTF-8';
        j.src = '//static.meiqia.com/dist/meiqia.js';
        s.parentNode.insertBefore(j, s);
    })(window, document, 'script', '_MEIQIA');
    _MEIQIA('entId', 36303);
</script>

</body>
</html>