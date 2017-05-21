<?php
defined('IN_ADMIN') or exit('No permission resources.'); 
include $this->admin_tpl('header', 'admin');
?>
<script type="text/javascript">
<!--
	$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	 $("#dirname").formValidator({onshow:"请填写类型生成目录，英文数字组合，提交后不可更改",onfocus:"请填写类型生成目录，英文数字组合，提交后不可更改"}).inputValidator({min:1,onerror:"请填写类型生成目录，英文数字组合，提交后不可更改"}).ajaxValidator({type : "get",url : "",data :"m=mobile&c=mobile&a=public_check_dirname",datatype : "html",async:'false',success : function(data){	if( data == "1" ){return true;}else{return false;}},buttons: $("#dosubmit"),onerror : "生成目录已存在或格式不正确",onwait : "正在连接..."});
    
	 
	})
//-->
</script>
<div class="pad-10">
<form action="?m=mobile&c=mobile&a=add" name="myform" method="post" id="myform">
<input type="hidden" value='<?php echo $siteid?>' name="siteid">
<fieldset>
	<legend><?php echo L('basic_config')?></legend>
	<table width="100%"  class="table_form">
    <tr>
    <th width="120"><?php echo L('mobile_sel_site')?></th>
    <td class="y-bg"><?php echo form::select($sitelist,self::get_siteid(),'name="siteid"')?></td>
    </tr>
    <tr>
    <th width="120"><?php echo L('mobile_sitename')?></th>
    <td class="y-bg"><input type="text" class="input-text" name="sitename" id="sitename" size="30" value=""/></td>
    </tr>
   
    <tr>
    <th width="120"><?php echo L('mobile_logo')?></th>
    <td class="y-bg"><?php echo form::images('logo', 'logo', '', 'mobile')?></td>
    </tr>
    <tr>
    <th width="120"><?php echo L('mobile_domain')?></th>
    <td class="y-bg"><input type="text" class="input-text" name="domain" id="domain" size="30" value=""/> </td>
    </tr>
     <tr>
    <th width="120"><?php echo L('mobile_keywords')?></th>
    <td class="y-bg"><input type="text" class="input-text" name="keywords" id="keywords" size="60" value=""/></td>
    </tr>
     <tr>
    <th width="120"><?php echo L('mobile_description')?></th>
    <td class="y-bg">
    <textarea style="height: 100px; width: 430px; resize:none;"  cols="20" rows="2" name="description"></textarea>
    </td>
    </tr>      
    </table> 
  </fieldset>
 
<input type="submit" id="dosubmit" name="dosubmit" class="dialog" value="<?php echo L('submit')?>" />

</form>
</div>
</body>
</html>