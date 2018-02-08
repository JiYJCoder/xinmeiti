<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo C('DEFAULT_CHARSET');?>" />
<title><?php echo L('welcome'); echo L('system_name');?></title>
<link rel="stylesheet" type="text/css" href="__ROOT__/Public/Css/style.css" />
<script type="text/javascript" src="__ROOT__/Public/Js/jquery.min.js"></script>
<script type="text/javascript" src="__ROOT__/Public/Js/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript" src="__ROOT__/Public/Js/iframeTools.js"></script>
<script type="text/javascript" src="__ROOT__/Public/Js/jquery.form.js"></script>
<script type="text/javascript" src="__ROOT__/Public/Js/jquery.validate.js"></script>
<script type="text/javascript" src="__ROOT__/Public/Js/MyDate/WdatePicker.js"></script>
<script type="text/javascript" src="__ROOT__/Public/Js/jquery.colorpicker.js"></script>
<script type="text/javascript" src="__ROOT__/Public/Js/my.js"></script>
<script type="text/javascript" src="__ROOT__/Public/Js/swfupload.js"></script>
<script type="text/javascript" src="/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/ueditor/ueditor.all.min.js"></script>

<script language="JavaScript">
<!--
var ROOT =	 '__ROOT__';
var URL = '__URL__';
var APP	 =	 '__APP__';
var PUBLIC = '__PUBLIC__';
function confirm_delete(url){
	art.dialog.confirm("<?php echo L('real_delete');?>", function(){location.href = url;});
}
$(window.parent.$("#main_loading").hide());
//-->
</script>
</head>
<body width="100%">
<div id="result" class="result none"></div>
<div class="mainbox">

<?php if(empty($_GET['isajax'])): ?><div id="nav" class="mainnav_title">

	<div id="lang">
	<?php if(APP_LANG): parse_str($_SERVER['QUERY_STRING'],$urlarr); unset($urlarr[l]); $url='index.php?'.http_build_query($urlarr); ?>
		<?php if(is_array($Lang)): $i = 0; $__LIST__ = $Lang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$langvo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($url); ?>&l=<?php echo ($langvo["mark"]); ?>" <?php if($langvo[mark]==$_SESSION['YP_lang']): ?>class="on"<?php endif; ?>><?php echo ($langvo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; endif; ?>
	</div>
	<ul><a href="<?php echo U($nav[bnav][model].'/'.$nav[bnav][action],$nav[bnav][data]);?>"><?php echo ($nav["bnav"]["name"]); ?></a>|
	<?php if(is_array($nav["nav"])): $n = 0; $__LIST__ = $nav["nav"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vonav): $mod = ($n % 2 );++$n; if($vonav[data][isajax]): if($n>1) : ?>|<?php endif;?><a href="javascript:void(0);" onclick="openwin('<?php echo ($vonav[action]); ?>','<?php echo U($vonav[model].'/'.$vonav[action],$vonav[data]);?>','<?php echo ($vonav["name"]); ?>',600,440)"><?php echo ($vonav["name"]); ?></a>
	<?php else: ?>
	    <?php if($n>1) : ?>|<?php endif;?><a href="<?php echo U($vonav[model].'/'.$vonav[action],$vonav[data]);?>"><?php echo ($vonav["name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?></ul>
	</div>
    <script>
	var onurl ='?<?php echo ($_SERVER["QUERY_STRING"]); ?>';
	jQuery(document).ready(function(){
		$('#nav ul a ').each(function(i){
		if($('#nav ul a').length>1){
			var thisurl= $(this).attr('href');
			thisurl = thisurl.replace('&menuid=<?php echo cookie("menuid");?>','');
			if(onurl.indexOf(thisurl) == 0 ) $(this).addClass('on').siblings().removeClass('on');
		}else{
			$('#nav').hide();
		}
		});
		if($('#nav ul a ').hasClass('on')==false){
		$('#nav ul a ').eq(0).addClass('on');
		}
	});
	</script><?php endif; ?>


<script>
if(self==top){
	window.top.location.href = '<?php echo U("Login/index");?>';
}

function menutype(leftmenuid){
    $(window.parent.$("#leftMenu ul li").removeClass("on"));
    $(window.parent.$("#li_"+leftmenuid).addClass("on"));
    $(window.parent.$("#li_"+leftmenuid).parents("dl").siblings().removeClass("on"));
    $(window.parent.$("#li_"+leftmenuid).parents("dl").addClass("on"));
    $(window.parent.$("#li_"+leftmenuid).parents("dl").siblings().find("dd").slideUp(300));
    $(window.parent.$("#li_"+leftmenuid).parents("dd").slideDown(300));
}
</script>

<style>

.mainnav_title{ display:none;}
h1 { height:30px;line-height:30px;font-size:14px; margin-bottom: 10px; overflow:hidden;zoom:1;}
h1 b {font-size: 16px;color:#E26A6A ;}
h1 span {color:#ccc;font-size:10px;margin-left:10px; font-weight: normal;}
.mainBox{padding: 20px 10px;}
.listBox{padding:12px 20px 15px 20px; margin-bottom: 25px; border-radius: 3px; overflow: hidden; box-shadow:0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.22);}
.listBox ul li {width: 50%; float: left; margin-bottom: 15px;}
.listBox ul li span{ display:block; float:left; color:#777;width:100px;}
.listItem{padding: 10px 15px; margin-right: 20px; border: 1px solid #ddd; border-radius: 4px;}

#tabs {margin:0px auto;overflow:hidden;border:1px solid #ccc; height:214px;}
#tabs .title {overflow:hidden;background:url(./Public/Images/tab_bottom_line_1.jpg) repeat-x 0 26px;height:27px;}
#tabs .title ul li {float:left;margin-left:-1px;height:26px;line-height:26px;background:#EAEEF4;padding:0px 10px;border:1px solid #ccc;border-top:0;border-bottom:0;}
#tabs .title ul li.on {background:#FFF;height:27px;}
#tabs .content_1 { overflow:hidden;border-top:none;}
#tabs .tabbox {display:none;padding:10px;}

#tabs .tabbox ul li {background:url(./Public/Images/ico_1.gif) no-repeat 4px 11px;padding-left:13px;border-bottom:1px #ddd dashed; height:27px;  line-height:26px;color:#333 }
#tabs .tabbox ul li a {color:#333}
#tabs .tabbox ul li a:hover {color:#FB0000;}
#tabs .tabbox ul li span.date {float:right;color:#777}
.linkBtn{margin: 15px 0 5px 0;}
.linkBtn ul li{width: 20%; float: left; text-align: center;}
.linkBtn ul li a{display: block; margin: 0 10px; padding: 20px 0; border-radius: 2px; overflow: hidden; font-size: 14px; color: #fff;}
.linkBtn ul li.li1 a{background-color: #89C4F4;}
.linkBtn ul li.li2 a{background-color: #E35B5A;}
.linkBtn ul li.li3 a{background-color: #44B6AE;}
.linkBtn ul li.li4 a{background-color: #8775A7;}
.linkBtn ul li.li5 a{background-color: #578ebe;}
.linkBtn ul li a:hover{opacity: .9;}
</style>


<div class="linkBtn">
    <ul class="clearfix">
        <li class="li1" data-id="84"><a href="javascript:;" data-href="?g=Admin&m=Config&a=index&menuid=84" onclick="menutype('84'); window.parent.iframeValue(this);  return false;">站点配置</a></li>
        <li class="li2" data-id="17"><a href="javascript:;" data-href="?g=Admin&m=Category&a=index&menuid=17" onclick="menutype('17'); window.parent.iframeValue(this); return false;">栏目管理</a></li>
        <li class="li3" data-id="74"><a href="javascript:;" data-href="?g=Admin&m=Block&a=index&menuid=74" onclick="menutype('74'); window.parent.iframeValue(this); return false;">碎片管理</a></li>
        <li class="li4" data-id="77"><a href="javascript:;" data-href="?g=Admin&m=Slide&a=index&menuid=77" onclick="menutype('77'); window.parent.iframeValue(this); return false;">幻灯片管理</a></li>
        <li class="li5" data-id="53"><a href="javascript:;" data-href="?g=Admin&m=Link&a=index&menuid=53" onclick="menutype('53'); window.parent.iframeValue(this); return false;">友情链接</a></li>
    </ul>
</div>
<div class="mainBox">
	<div id="Profile" class="listBox">
		<h1><b><?php echo L(Profile_info);?></b><span>Profile&nbsp; Info</span></h1>
		<ul>
		<?php if(is_array($userinfo)): $i = 0; $__LIST__ = $userinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><div class="listItem"><span><?php echo L($key);?> :</span><?php echo ($v); ?></div></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
    <div id="sitestats" class="listBox">
		<h1><b><?php echo L(Site_Stats);?></b><span>Site&nbsp; Stats</span></h1>
		<ul>
		<?php if(is_array($moduledata)): $i = 0; $__LIST__ = $moduledata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><div class="listItem"><span><?php echo ($v[title]); ?> :</span><?php echo ($v[counts]); ?></div></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>





</body>
</html>