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


<style>
html{_overflow-y:scroll}
.swfupload {position: absolute;z-index: 1;}
.mainnav_title {display:none;}
</style>
<link href="__ROOT__/Public/Js/swfupload/swfupload.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__ROOT__/Public/Js/swfupload/swfupload.js"></script>
<script type="text/javascript" src="__ROOT__/Public/Js/swfupload/fileprogress.js"></script>
<script type="text/javascript" src="__ROOT__/Public/Js/swfupload/handlers.js"></script>
<script type="text/javascript">
		$.ajaxSetup ({ cache: false });

		var file_limit = <?php echo ($file_limit); ?>;
		var swfu;
 		window.onload = function() {

			var settings = {
				flash_url : "__ROOT__/Public/Js/swfupload/swfupload.swf?"+Math.random(),
				upload_url: "<?php echo U('Attachment/upload');?>",
				file_post_name : "filedata",
				post_params: {"PHPSESSID" : "<?php echo $sessid;?>", "isadmin" : "<?php echo $isadmin;?>","userid":"<?php echo $userid?>","swf_auth_key": "<?php echo $swf_auth_key;?>","isthumb" : "<?php echo $isthumb;?>","moduleid" : "<?php echo $moduleid?>","addwater":"<?php echo intval($watermark_enable);?>","lang":"<?php echo $lang;?>"},
				file_size_limit : "<?php echo $file_size;?> MB",
				file_types : "<?php echo $file_types;?>",
				file_types_description : "All Files",
				file_upload_limit : "<?php echo $file_limit;?>",
				file_queue_limit : 0,
				custom_settings : {
					progressTarget : "fsUploadProgress",
					cancelButtonId : "btnCancel",
					tdFilesQueued : document.getElementById("tdFilesQueued"),
					tdFilesUploaded : document.getElementById("tdFilesUploaded"),
					tdErrors : document.getElementById("tdErrors")
				},
				debug: false,
				prevent_swf_caching : false,

				button_image_url : "",
				button_placeholder_id: "spanButtonPlaceHolder",
				button_width: 75,
				button_height: 29,
				button_text : '',
				button_text_style : '',
				button_text_top_padding: 0,
				button_text_left_padding: 0,
				button_window_mode: SWFUpload.WINDOW_MODE.TRANSPARENT,
				button_cursor: SWFUpload.CURSOR.HAND,
				swfupload_preload_handler : preLoad,
				swfupload_load_failed_handler : loadFailed,

				file_queued_handler : fileQueued,
				file_queue_error_handler : fileQueueError,
				upload_start_handler : uploadStart,
				upload_progress_handler : uploadProgress,
				upload_error_handler : uploadError,
				upload_success_handler : uploadSuccess,
				upload_complete_handler : uploadComplete,
				file_dialog_complete_handler:fileDialogComplete
			};


			swfu = new SWFUpload(settings);

	     };




function ajaxload(typeid,page,inputid,isadmin)
{
    var data = '';
    var url =  "<?php echo U('Attachment/filelist');?>&typeid="+typeid+"&p="+page+"&inputid="+inputid+"&isadmin="+isadmin;
    $.ajax({
         type: "POST",
         url: url,
         data: data,
         success: function(msg){
			$('#'+inputid).html(msg);
			for(var i=0;i<ids.length;i++){
				$('#on_'+ids[i]).addClass("on");
			}
         }
    });
}

function addwater_enable(){
	if($('#addwater').attr('checked')) {
		swfu.addPostParam('addwater', '1');
	} else {
		swfu.removePostParam('addwater');
	}
}
</script>
<div id="content">
<div id="tabs">
	<div class="title"><ul><li class="on"><a href="javascript:void(0);"><?php echo L('upload_file');?></a></li>
	<li><a href="javascript:void(0);"><?php echo L('upload_url');?></a></li>
	<?php if(!empty($more)): ?><li><a href="javascript:void(0);" onclick="ajaxload(1,1,'filelist',<?php echo $isadmin;?>);"><?php echo L('upload_list_file');?></a></li>
	<li><a href="javascript:void(0);"  onclick="ajaxload(0,1,'nouselist',<?php echo $isadmin;?>);"><?php echo L('upload_unuse_file');?></a></li><?php endif; ?>
	<?php if(!empty($no_use_files)): ?><li style="border:0;background:none;"><a href="<?php echo U('Attachment/cleanfile?isadmin='.$isadmin);?>" style="color:#FB0000;"><?php echo L('no_use_files');?></a></li><?php endif; ?>
	</ul></div>

	<div class="content_1">
		<div class="tabbox" style="display:block;">
				<div id="divMovieContainer">
					<div class="selectbut"><span id="spanButtonPlaceHolder"></span></div>
					<input type="button" value="<?php echo L('start_upload');?>" id="uploadbut" onclick="swfu.startUpload();"/>
					<div style="color:#959595;line-height:24px;height:24px;background:url() no-repeat;padding-left:20px;"><input type="checkbox" id="addwater" name="addwater" value="1" onclick="addwater_enable();" <?php if($watermark_enable==1): ?>checked<?php endif; ?>/> <font color="green"><?php echo L('upload_add_water');?></font> , <?php echo L('upload_say4');?> <font color="red"><?php echo ($file_types); ?></font> <?php echo L('upload_say5');?></div><br>
					<div style="color:#454545;clear:both;line-height:24px;height:24px;"> <?php echo L('upload_say1');?> <font color="red"><?php echo ($small_upfile_limit); ?></font> <?php echo L('upload_say2');?> <font color="red"><?php echo ($file_size); ?></font>	<?php echo L('upload_say3');?></div>
				</div>


				<div id="divStatus"><?php echo L('upload_say6');?><span id="tdFilesQueued">0</span><?php echo L('upload_say7');?><span id="tdErrors">0</span> <?php echo L('upload_say8');?><span id="tdFilesUploaded">0</span> <?php echo L('upload_say9');?></div>
				<fieldset  id="swfupload-box">
					<legend><?php echo L('file_list');?></legend>
					<ul id="fsUploadProgress"></ul>
					<ul class="attachment-list"  id="thumbnails"></ul>
				</fieldset>

		</div>
		<div class="tabbox">
		 <br>
        	<?php echo L('upload_fileurl');?>: <input type="text" id="fileurl" name="fileurl" class="input-text" value=""  style="width:350px;"  onblur="addfileurl(this)">
			<br><br><br>

		</div>
		<div class="tabbox">
			<div id="filelist"></div>
		</div>
		<div class="tabbox">
			<div id="nouselist"></div>
		</div>
	</div>
</div>

<div  id="myuploadform" style="display:none;" ></div>
<script>
new Tabs("#tabs",".title ul li",".content_1",".tabbox","on",1);
function addfileurl(obj) {
	var strs = $(obj).val() ?  $(obj).val() : '';

	if(strs){
		var datas='<div id="uplist_1"><input type="hidden" id="aids" name="aids"  value="0"  /><input type="text"  id="filedata" name="filedata" value="'+strs+'"  /><input type="text"  id="namedata" name="namedata" value=""  /> &nbsp;<a href="javascript:remove_this(\'uplist_1\');"><?php echo L('remove');?></a> </div>';
		$('#myuploadform').html(datas);
		$('#thumbnails   a ').removeClass("on");
		$('.img a ').removeClass("on");
	}else{

		$('#myuploadform').html('');
	}
}

var insert2Xheditor =  insert2Xheditor || function(){
		<?php if($_GET[immediate]==1): ?>var immediate='!';<?php endif; ?>
		var arrMsg=[],img = '',data = '',i=0;
		var num = $('#myuploadform > div').length;
		if(num){
				$('#myuploadform   div').each(function(){
					var status =  $(this).find('#status').val();
					var aid = $(this).find('#aids').val();
					var src = $(this).find('#filedata').val();
					var name = $(this).find('#namedata').val();
					if(status!=0) aid=0;
					arrMsg[i]= { "url":immediate+src,"localfile":name,"id":aid,"editorid":"<?php echo ($_GET[editorid]); ?>" };
					i++;
			   });
			  // $('#<?php echo ($_GET[editorid]); ?>_aid_box').append(data);
		}
		//arrMsg.push({"name":"","url":"!200906030521128703.gif","id":});
		callback(arrMsg);
}
</script>
<?php if(!empty($_GET[editorid])): ?><div id="bootline"></div>
<div id="btnbox" class="btn" style="padding-left:450px;">
		<INPUT TYPE="submit" onclick="insert2Xheditor();" value="<?php echo L(dosubmit);?>" class="button " >
<input TYPE="reset" onclick="unloadme();" value="<?php echo L(cancel);?>" class="button">
</div><?php endif; ?>

</body>
</html>