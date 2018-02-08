<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo C('DEFAULT_CHARSET');?>" />
<title><?php echo L('system_name');?></title>
<style>
*{ font-family:"Open Sans","Microsoft Yahei","arial",sans-serif; margin: 0; padding:0;}
body{background-color: #364150;}
.login_logo{text-align:center; margin-top: 70px; padding: 15px;}
.login_logo_cn{font-weight: 300; font-size: 33px; color: #26A69A;}
.login_logo_en{font-weight: 300; font-size: 18px; color: #26A69A;}
.login_form{width:360px; padding: 30px 30px 35px 30px; margin: 35px auto 0; border-radius: 7px 7px 0 0; background-color: #eceef1; overflow: hidden;}
.login_form_title{text-align: center; font-size: 28px; font-weight: 300; color: #4db3a5;}
.login_formText{margin-top: 20px; position: relative;}
.login_form_txt{width: 340px; height:30px; line-height:30px; display: block; padding: 4px 10px; border: 1px solid #dde3ec; border-radius: 2px; background-color: #dde3ec; font-size: 14px; color: #8290a3; outline: none;
    transition : border-color ease-in-out .15s, box-shadow ease-in-out .15s
}
.login_form_txt:active,.login_form_txt:focus{border:1px solid #c3ccda;}
.login_form_txt::-moz-placeholder {
  color: #8290a3;
  opacity: 1;
}
.login_form_txt:-ms-input-placeholder {
  color: #8290a3;
}
.login_form_txt::-webkit-input-placeholder {
  color: #8290a3;
}
.login_formText .checkcode{height: 28px; position: absolute; top: 6px; right: 6px;}
.login_form_user i{width: 21px; height: 24px; position: absolute; top: 8px; right: 10px; background: url(./Public/Images/icon_user.png) 0 0 no-repeat; overflow: hidden;}
.login_form_pass i{width: 22px; height: 25px; position: absolute; top: 8px; right: 10px; background: url(./Public/Images/icon_lock.png) 0 0 no-repeat; overflow: hidden;}
.login_form_msg{width: 420px; height: 36px; line-height: 36px; margin: 0 auto 20px; text-align: center; font-size: 12px; color: #fff; border-radius: 0 0 7px 7px; background-color: #6c7a8d; font-size:14px;}
.login_form_btn{width: 100%; display: block; padding: 10px 0; margin-top: 20px; border-radius: 2px; cursor: pointer; font-size: 16px; outline: none; color: #fff; border:0; background-color: #26A69A;}
</style>
</head>
<body onLoad="reload()" id="loginbg" >
<form method='post' name="login" id="form1" action="<?php echo U('Login/doLogin');?>">
<div class="login_logo">
    <h4 class="login_logo_cn">网站管理系统</h4>
    <p class="login_logo_en">Manage System</p>
</div>
<div class="login_form">
    <h3 class="login_form_title">登录</h3>
    <div class="login_formText login_form_user">
        <input type="text" class="login_form_txt" placeholder="账 号" id="username" name="username"/>
        <i></i>
    </div>
    <div class="login_formText login_form_pass">
        <input type="password" class="login_form_txt"  placeholder="密 码" name="password"/>
        <i></i>
    </div>
    <div class="login_formText">
        <input type="text" class="login_form_txt"  placeholder="验 证 码" name="verifyCode"  id="verifyCode"  size="6" value="" maxlength="4"/>
        <img src="<?php echo U('Home/Index/verify');?>" onclick="javascript:resetVerifyCode();" class="checkcode" align="absmiddle"  title="<?php echo L('resetVerifyCode');?>" id="verifyImage"/>
    </div>
    <input type="hidden" name="ajax" value="1">
    <input type="submit" value="登 陆" class="login_form_btn">
</div>
<div class="login_form_msg"><div id="result" class="result none"></div></div>
</form>
<script type="text/javascript" src="./Public/Js/jquery.min.js"></script>
<script type="text/javascript" src="./Public/Js/jquery.form.js"></script>
<script type="text/javascript" src="./Public/Js/my.js"></script>
<script language="JavaScript">
jQuery(document).ready(function($){
	$('#form1').ajaxForm({
		beforeSend:function(){
			$('#result').html('<img src="./Public/Images/msg_loading.gif">').show();;
		 },
		success:complete,  // post-submit callback
		dataType: 'json'
	});
});
function complete(data){
        if (data.status==1)
        {
		 $('#result').html(data.info).show();
		 //art.dialog.tips('<?php echo L("logined_ok");?>',2);
		 setTimeout(function(){	window.location.href = '<?php echo U("Index/index");?>';},1000);
        }else{
            $('#result').html(data.info).show();
        }
}
function reload(){
	document.login.username.focus();
	if(self!=top){
	 window.top.location.href = '<?php echo U("Login/index");?>';
	}
	resetVerifyCode();
}

</script>
<!--[if lte IE 9]>
<script type="text/javascript" src="./Public/Js/placeholder.IE.js"></script>
<script type="text/javascript">
$(function(){
	//IE模拟placeholder
	$(".login_form_txt").placeholder({
		labelMode: true,
		 labelStyle: {
            margin: "6px 0 0 0",
            fontSize: "14px"
        }
	});
})
</script>
<![endif]-->
</body>
</html>