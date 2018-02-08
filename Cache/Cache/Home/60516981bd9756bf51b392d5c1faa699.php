<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html>
<head>
<title><?php echo L('message_title');?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo C('DEFAULT_CHARSET');?>">
<meta http-equiv='Refresh' content='<?php echo ($waitSecond); ?>;URL=<?php echo ($jumpUrl); ?>'>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/style.css" />
</head>
<body>
<!--<?php echo ($msgTitle); ?> -->
<div class="showMsg" style="text-align:center">
	<h5><?php echo L('message_title');?></h5>
    <div class="content guery" style="display:inline-block;display:-moz-inline-stack;zoom:1;*display:inline; max-width:280px"><?php echo ($message); ?> <?php echo ($error); ?></div>
    <div class="bottom">
	<?php if(isset($closeWin)): echo L('msg_system_1');?> <span style="color:blue;font-weight:bold"><?php echo ($waitSecond); ?></span> <?php echo L('msg_system_2');?> <a href="<?php echo ($jumpUrl); ?>"><?php echo L('close');?></a> <?php echo L('click_this'); endif; ?>
	<?php if(!isset($closeWin)): echo L('msg_system_1');?> <span style="color:blue;font-weight:bold"><?php echo ($waitSecond); ?></span> <?php echo L('msg_system_2');?> <a href="<?php echo ($jumpUrl); ?>"><?php echo L('click_this');?></a> <?php echo L('jump'); endif; ?>
	</div>
	
<?php if ($dialog || $error):?>
<script type="text/javascript" src="./Public/Js/jquery.min.js"></script> 
<script type="text/javascript" src="./Public/Js/jquery.artDialog.js?skin=default"></script> 
<script type="text/javascript" src="./Public/Js/iframeTools.js"></script> 
<script type="text/javascript" src="./Public/Js/my.js"></script> 
<script type="text/javascript" src="./Public/Js/swfupload.js"></script> 
<script style="text/javascript"> 
 setTimeout(function(){ 
 <?php if ($jumpUrl!=1):?>art.dialog.open.origin.location.href='<?php echo ($jumpUrl); ?>';<?php endif;?>
 art.dialog.close(); 
 },<?php echo $waitSecond*1000;?>); 
</script>
<?php endif;?>

<?php if ($script):?>
<script style="text/javascript"><?php echo ($script); ?></script>
<?php endif;?>

</div>
</body>
</html>