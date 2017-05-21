<?php defined('IN_ADMIN') or exit('No permission resources.'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title><?php echo L('phpcms_logon')?></title>
<style type="text/css">
body { margin: 0; padding: 0; background: url(<?php echo IMG_PATH?>admin_img/fst_bg_login.jpg) no-repeat top center; }
.adm_bg { margin-top: 200px; }
.div_center { width: 520px; margin: 0 auto; background: url(<?php echo IMG_PATH?>admin_img/fst_logbgs.png) no-repeat top center; height: 280px; }
.adm_con_qu { width: 320px; height: 240px; padding: 20px 100px; }
.logo { background: url(<?php echo IMG_PATH?>admin_img/fst_logo.png) no-repeat left center; margin-left: 10px; padding-left: 70px; height: 50px; line-height: 50px; color: #0f4389; font-size: 24px; font-weight: bold; font-family: "微软雅黑" }
.adm_dl { margin: 10px 0px; }
.adm_dl_left { float: left; width: 80px; text-align: right; line-height: 30px; color: #0f4389; }
.adm_dl_right { float: left; width: 220px; text-align: left; }
.adm_dl_right2 { float: left; width: 100px; }
.adm_dl_right_btn { float: left; margin-left: 80px; margin-top: 10px; }
.ad_txt { width: 220px; height: 25px; line-height: 25px; }
.ad_txt2 { width: 100px; height: 25px; line-height: 25px; }
.div_clear { clear: both; }
#yzm { float: right; width: 120px; }
</style>
<script language="JavaScript">
<!--
	if(top!=self)
	if(self!=top) top.location=self.location;
//-->
</script>
</head>

<body onload="javascript:document.myform.username.focus();">
<div class="adm_bg">
  <div class="div_center">
    <form action="index.php?m=admin&c=index&a=login&dosubmit=1" method="post" name="myform">
      <div class="adm_con_qu">
        <div class="logo">网站管理后台</div>
        <div class="adm_dl">
          <div class="adm_dl_left"><?php echo L('username')?>：</div>
          <div class="adm_dl_right"><input type="text" name="username" class="ad_txt"></div>
          <div class="div_clear"></div>
        </div>
        <div class="adm_dl">
          <div class="adm_dl_left"><?php echo L('password')?>：</div>
          <div class="adm_dl_right"><input type="password" name="password" class="ad_txt"></div>
          <div class="div_clear"></div>
        </div>
        <div class="adm_dl">
          <div class="adm_dl_left"><?php echo L('security_code')?>：</div>
          <div class="adm_dl_right2"><input type="text" name="code" class="ad_txt2"></div>
          <div id="yzm"><?php echo form::checkcode('code_img')?></div>
          <div class="div_clear"></div>
        </div>
        <div class="adm_dl">
          <div class="adm_dl_left"></div>
          <div class="adm_dl_right_btn"><input type="image" src="<?php echo IMG_PATH?>admin_img/fst_loginbtn.png" ></div>
          <div class="div_clear"></div>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>