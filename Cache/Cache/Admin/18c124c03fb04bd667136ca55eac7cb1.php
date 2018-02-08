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
$('#nav ul a ').removeClass('on');
<?php if(!empty($_GET['type'])): ?>$('#nav ul a ').eq(3).addClass('on');<?php endif; ?>
<?php if($action_name=='add' && empty($_GET['type'])): ?>$('#nav ul a ').eq(1).addClass('on');<?php endif; ?>
</script>

<form name="myform"  id="myform"  action="<?php if($action_name=='add'): echo U('Category/insert'); else: echo U('Category/update'); endif; ?>&iscreatehtml=1" method="post">


<div id="tabs" style="margin-top:10px;">
	<div class="title"><ul class="clearfix" style="margin-left:30px;"><li class="on"><a href="javascript:void(0);"><?php echo L(base_setup);?></a></li>
	<li style="margin-left:10px;"><a href="javascript:void(0);"><?php echo L(seo_setup);?></a></li>
</ul></div>

<div class="content_2">
	<div class="tabbox" style="display:block;">
		<table cellpadding=0 cellspacing=0 class="table_form"width="100%"><tr>
		<td width="15%"><?php echo L('chose_module');?></td>
        <td width="85%" class="box_thumb">

		<script type="text/javascript" src="./Public/Js/swfupload.js"></script>
		<div class="thumb_box" style ="margin-top:-7px;left:340px;"><div id="image_aid_box"></div>
		<a href="javascript:swfupload('image_uploadfile','image','<?php echo L(uploadfiles);?>',1,1,0,1,'jpeg,jpg,png,gif',3,0,'<?php echo ($yourphp_auth); ?>',yesdo,nodo)"><img src="<?php if(!empty($vo['image'])): echo ($vo['image']); else: ?>./Public/Images/admin_upload_thumb.png<?php endif; ?>" id="image_pic" ></a><br> <input type="button" value="<?php echo L('clean_thumb');?>" onclick="javascript:clean_thumb('image');" class="button" /><input type="hidden"  id="image" name="image"  value="<?php echo ($vo['image']); ?>" /></div>
		<?php echo Form::select(array('field'=>'moduleid','options'=>$module+array('0'=>array('id'=>0,'title'=>L('Module_url'))),'options_key'=>'id,title','setup'=>array('onchange'=>'changetemplate(this.value)')),$vo['moduleid']);?>
		</td>
      </tr>
      <tr>
        <td><?php echo L('chose_parentid');?></td>
        <td>

		<select name="parentid">
		<option value=""><?php echo L('select_parentid');?></option>
		<?php echo ($select_categorys); ?>
		</select>
		</td>
      </tr>

      	<tr>
		<td><?php echo L('catname');?></td>
		<td><input type="text" name="catname" class="input-text  required" value="<?php echo ($vo['catname']); ?>"  minlength="1"  maxlength="30"  /></td>
		</tr>

	    <tr>
		<td><?php echo L('catdir');?></td>
		<td><input type="text" id="catdir" name="catdir" class="input-text  required" value="<?php echo ($vo['catdir']); ?>" validate="required:true, english:true,minlength:1, maxlength:30"/></td>
		</tr>




		<tr id="module_url" style="display:none;">
		<td><?php echo L('cat_link_url');?></td>
		<td><input type="text" name="url" class="input-text" value="<?php if($vo['type']==1): echo ($vo['url']); endif; ?>" size='50'  /><input type="hidden" id="type" name="type" value="0" /></td>
		</tr>


		<tr style="background:#EFEFEF;">
		<td><?php echo L('chage_is');?>: </td>
		<td><input type="checkbox"  class="input_checkbox "  id="chage_all" name="chage_all" value="1" /><font color="red"> <?php echo L('chage_all');?></font>
		</td>
		</tr>


		<tr id="urlrule">
		<td><?php echo L('urlrule');?></td>
		<td><?php echo Form::select(array('field'=>'urlruleid','options'=>$Urlrule,'options_key'=>'key,listexample'),$vo['urlruleid']);?></td>
		</tr>


		<tr>
		<td><?php echo L('pagesize');?></td>
		<td><input type="text" name="pagesize" class="input-text" value="<?php if(!empty($vo['pagesize'])): echo ($vo['pagesize']); endif; ?>" size="3" /> <font color="red"><?php echo L('pagesize_desc');?></font></td>
		</tr>

		<tr>
		<td><?php echo L('template_list');?></td>
		<td>
		<select id="template_list" name="template_list"></select>
			</td>
		</tr>

		<tr>
		<td><?php echo L('template_show');?></td>
		<td><select id="template_show" name="template_show"></select>
		</td>
		</tr>
		</table>



	</div>

	<div class="tabbox" style="display:none;">
		<table cellpadding=0 cellspacing=0 class="table_form"width="100%">
		 <tr>
		  <td><?php echo L('seo_title');?></td>
		  <td><input name='title' type='text' id='meta_title' value="<?php echo ($vo['title']); ?>" class="input-text"  size='60' maxlength='150'></td>
		</tr>
		<tr>
		  <td><?php echo L('seo_keywords');?></td>
		  <td><input name='keywords' type='text' id='meta_keywords' value="<?php echo ($vo['keywords']); ?>" class="input-text"  size='60' maxlength='150'></td>
		</tr>
		<tr>
		  <td><?php echo L('seo_description');?></td>
		  <td><textarea name='description' id='meta_description'  rows="5" cols="60" ><?php echo ($vo['description']); ?></textarea></td>
		</tr>
		</table>
	</div>
</div>



		<div class="btn">
		<?php if($vo['id']!=''): ?><input TYPE="hidden" name="id" value="<?php echo ($vo["id"]); ?>"><?php endif; ?>
		<INPUT TYPE="submit"  value="<?php echo L('dosubmit');?>" class="button buttonBtn" >
		<input TYPE="reset"  value="<?php echo L('cancel');?>" class="button">
		</div>

</form></div>

<script>

var modulearr = new Array();
<?php if(is_array($module)): $i = 0; $__LIST__ = $module;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mdate): $mod = ($i % 2 );++$i;?>modulearr[<?php echo ($mdate['id']); ?>] = "<?php echo ($mdate['name']); ?>";<?php endforeach; endif; else: echo "" ;endif; ?>
var templatearr = new Array();
<?php if(is_array($templates)): $i = 0; $__LIST__ = $templates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tem): $mod = ($i % 2 );++$i;?>templatearr[<?php echo ($i); ?>] = "<?php echo ($tem['name']); ?>,<?php echo ($tem['value']); ?>,<?php echo ($tem['filename']); ?>";<?php endforeach; endif; else: echo "" ;endif; ?>


var datas = "<option value=''><?php echo L('please_chose');?></option>";
var moduleid =  $('#moduleid').val();


showtemplist(moduleid,<?php if(empty($vo[listtype])): ?>0<?php else: echo ($vo["listtype"]); endif; ?>);
function showtemplist(m,t){
	var type='_list';
	if(t){type='_index';}
	var mtlist = modulearr[m]+type;
	var mtshow = modulearr[m]+'_show';
	if(modulearr[m]=='Page') mtlist=mtshow ='Page';
	$('#template_list').html(datas);
	$('#template_show').html(datas);
	listdatas = showdatas ='';
	for(i=1;i<templatearr.length;i++){
		data = templatearr[i].split(',');
		if(data[0].indexOf(mtlist)  >= 0){
			listdatas  ="<option value='"+data[1]+"'>"+data[2]+"</option>";
			$('#template_list').append(listdatas);
		}
		if(data[0].indexOf(mtshow)  >= 0){
			showdatas ="<option value='"+data[1]+"'>"+data[2]+"</option>";
			$('#template_show').append(showdatas);
		}
	}
	$("#template_list").attr("value",'<?php echo ($vo["template_list"]); ?>');
	$("#template_show").attr("value",'<?php echo ($vo["template_show"]); ?>');
}
function changetemplate(m){
	if(m==0){
		$('#module_url').show();
		$('#type').val('1');
		$('#catdir').removeClass('required');
	}else{
		$('#module_url').hide();
		$('#type').val('0');
		$('#catdir').addClass('required');
	}
	showtemplist(m,0);
	$("#listtype").removeAttr("checked");
}
function templatetype(){
	var moduleid = $('#moduleid').val();
	if($("#listtype").attr('checked')=='checked'){
		showtemplist(moduleid,1);
	}else{
		showtemplist(moduleid,0);
	}
}
new Tabs("#tabs",".title ul li",".content_2",".tabbox","on",1);


function urlrule(m){

	if(m==1){
		$('#urlrule').show();
	}else{
		$('#urlrule').hide();
	}
}
urlrule(<?php echo ($vo['ishtml']); ?>);


<?php if(!empty($_GET['type'])): ?>$('#moduleid').val(0);
changetemplate(0);<?php endif; ?>


</script>

</body>
</html>