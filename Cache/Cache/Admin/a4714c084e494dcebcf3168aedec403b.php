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



<form  id="myform" name="myform" action="<?php echo U('Type/listorder');?>" method="post">
<div class="table-list">
    <table width="100%" cellspacing="0">
        <thead>
      		<tr>
            <th width="40"><?php echo L('listorder');?></th>
            <th width="20">typeid</th>
            <th align="left"><?php echo L('name');?></th>
			<th width="*" align="left"><?php echo L('description');?></th>
			<th width="40"><?php echo L('status');?></th>
			<th width="270"><?php echo L('manage');?></th>
            </tr>
      	</thead>
      	<tbody>
      		<?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr>
			<td  width="40" align='center'><input name="listorders[<?php echo ($vo['typeid']); ?>]" type='text' size='3' value="<?php echo ($vo['listorder']); ?>"  class='input-text-c'></td>
			<td align='center'><?php echo ($vo['typeid']); ?></td>
			<td ><?php echo ($vo['name']); ?></td>
			<td><?php echo ($vo['description']); ?></td>
 			<td align='center'>
			<?php if($vo[status]==1): ?><a href="<?php echo U('Type/status',array(typeid=>$vo['typeid'],status=>0));?>"><font color="green"><?php echo L('enable');?></font></a>
			<?php else: ?>
				<a href="<?php echo U('Type/status',array(typeid=>$vo['typeid'],status=>1));?>"><font color="red"><?php echo L('disable');?></font></a><?php endif; ?>
			</td>
      		<td align="center">
			<a href="<?php echo U('Type/index',array(keyid=>$vo['keyid'],parentid=>$vo['typeid']));?>"><?php echo L('type_manage');?></a> |
			<a href="<?php echo U('Type/add',array(keyid=>$vo['keyid'],parentid=>$vo['typeid']));?>"><?php echo L('add_type');?></a> |
			<a href="<?php echo U('Type/edit',array(keyid=>$vo['keyid'],typeid=>$vo['typeid']));?>"><?php echo L('edit');?></a> |
			<a href="javascript:confirm_delete('<?php echo U('Type/delete',array(typeid=>$vo['typeid']));?>')"><?php echo L('delete');?></a>
      		</td>
      		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
      	</tbody>
      	</table>
		<div id="pages" class="page">
		<?php echo ($page); ?>
		</div>
</div>

  <div class="btn">  <input  type="button" class="button" name="dosubmit" value="<?php echo L(listorder);?>" onclick="myform.action='<?php echo U($module_name.'/listorder');?>';$('#myform').submit();" /></div>

</form></div>
</body></html>

</body>
</html>