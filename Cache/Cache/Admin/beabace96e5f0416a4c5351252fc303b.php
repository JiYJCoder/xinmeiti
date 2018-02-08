<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="./Public/Js/jquery.min.js"></script>
<script type="text/javascript" src="./Public/Js/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript" src="./Public/Js/iframeTools.js"></script>
<link rel='stylesheet' type='text/css' href='./Public/Css/style.css'>
<link rel='stylesheet' type='text/css' href='./Public/fonts/iconfont.css'>
<title><?php echo L('welcome'); echo L('system_name');?></title>
</head>
<body>
<div id="header" class="header">
	<div class="logo"><span class="logo_cn">网站管理系统</span><span class="logo_en">Manage System</span></div>
	<div class="nav">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo L('welcome_user'); echo (session('username')); ?>  <i>|</i> [<?php echo ($usergroup); ?>]  <i>|</i> [<a href="<?php echo U('Login/logout');?>" target="_top"><?php echo L('logout');?></a>]  <i>|</i> <a href="<?php echo ($site_url); ?>" target="_blank"><?php echo L('home_index');?></a>  <i>|</i> <a href="javascript:void(0);" onclick="gocacheurl();" ><?php echo L('UPDATE_CACHE');?></a></div>
</div>


<div id="Main_content">

	<div id="MainBox" >
	    <div class="main_box">
            <div class="navList" id="TabNav">
                <a href="javascript:;" class="home current N_Tab" data-href="?g=Admin&m=Index&a=main&menuid=42" data-id="42" onclick=" menutype(42);">后台首页<i class="Refresh"></i></a>
            </div>
	        <div id="main_loading"><img src="./Public/Images/loading.gif" width="28" height="28" alt=""> <?php echo L('load_page');?></div>
            <div class="ifranme" id="iframe">
			    <iframe name="main" id="Main42" src='<?php echo U("Index/main");?>' data-id="42" frameborder="false" scrolling="auto"  width="100%" height="auto" allowtransparency="true" ></iframe>
            </div>
		</div>
    </div>

	<div id="leftMenuBox">
    	<div id="leftMenu">
            <?php if(is_array($menu)): $n = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($n % 2 );++$n;?><dl id="nav_<?php echo ($r['bnav']['id']); ?>" <?php if($n==1) : ?>class="on"<?php endif;?>>
                    <dt><a href="javascript:void(0);"><span class="iconfont icon-<?php echo ($n); ?>"></span><?php echo ($r['bnav']['name']); ?><i></i></a></dt>
                    <dd <?php if($n==1) : ?>style="display:block;"<?php endif;?>>
                        <ul>
                        <?php if(is_array($r[nav])): $i = 0; $__LIST__ = $r[nav];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li id="li_<?php echo ($item['id']); ?>" data-id="<?php echo ($item[id]); ?>"><span><a href="javascript:;" data-href="<?php echo U($item['model'].'/'.$item['action'],$item['data']);?>" class="name"  onclick="menutype('<?php echo ($item['id']); ?>')"><i></i><?php echo ($item['name']); ?></a><?php if($r[bnav]['model']=='Category') : ?><a href="javascript:;" data-href="<?php echo U($item['model'].'/add',$item['data']);?>" id="<?php echo ($i); ?>" class="add" ><?php echo L(add);?></a><?php endif;?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </dd>
                </dl><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
    </div>

</div>
<script language="JavaScript">
if(!Array.prototype.map)
Array.prototype.map = function(fn,scope) {
  var result = [],ri = 0;
  for (var i = 0,n = this.length; i < n; i++){
	if(i in this){
	  result[ri++]  = fn.call(scope ,this[i],i,this);
	}
  }
return result;
};
var getWindowWH = function(){
	  return ["Height","Width"].map(function(name){
	  return window["inner"+name] ||
		document.compatMode === "CSS1Compat" && document.documentElement[ "client" + name ] || document.body[ "client" + name ]
	});
}
window.onload = function (){
	if(!+"\v1" && !document.querySelector) { //IE6 IE7
	 document.body.onresize = resize;
	} else {
	  window.onresize = resize;
	}
	function resize() {
		wSize();
		return false;
	}
}
function wSize(){
	var str=getWindowWH();
	var strs= new Array();
	strs=str.toString().split(","); //字符串分割
	var h = strs[0];
	$('#Main42').height(h);
}
wSize();

//function gourl(n,url){
//    $('/images').removeClass('on');
//	$('#li_'+n).addClass('on');
//	window.main.location.href=url;
//    var main = $('#Main');
//    main.hide();
//    $("#main_loading").show();
//    var isOnLoad = true;
//    main.attr("src", url);
//    main.load(function() {
//        isOnLoad = false;
//        main.show();
//    });
//}
function leftMenu(){
    $("#leftMenu>dl>dt").click(function(){
        var taht = $(this);
        var parentObj = taht.parent("dl");
        if(parentObj.hasClass("on")){
            taht.siblings("dd").slideUp(300);
            parentObj.removeClass("on");
        }else{
            taht.siblings("dd").slideDown(300);
            parentObj.addClass("on").siblings().removeClass("on").find("dd").slideUp(300)
        }
    })
}
leftMenu();
function gocacheurl(){
	var mainurl = window.location.href;
	window.location.href= "<?php echo U('Admin/Index/cache');?>&forward="+encodeURIComponent(mainurl);
}

//
//function toggleMenu(doit){
//	if(doit==1){
//		$('#Main_drop a.on').hide();
//		$('#Main_drop a.off').show();
//		$('#MainBox .main_box').css('margin-left','24px');
//		$('#leftMenu').hide();
//	}else{
//		$('#Main_drop a.off').hide();
//		$('#Main_drop a.on').show();
//		$('#leftMenu').show();
//		$('#MainBox .main_box').css('margin-left','224px');
//	}
//}




</script>
<script src="/Public/Js/WindowTab.js"></script>
</body>
</html>