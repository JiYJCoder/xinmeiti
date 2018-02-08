<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); ?>-<?php endif; echo ($site_name); ?></title>
	<link href="/dist/pc/css/style.css" rel="stylesheet" type="text/css" />
	<link href="/dist/pc/swiper/idangerous.swiper.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/dist/pc/js/jquery.min.js"></script>
	<script type="text/javascript" src="/dist/pc/js/ainatec.js"></script>
	<script src="/dist/pc/js/ajax.js" type="text/javascript"></script>
	<script src="/dist/pc/swiper/idangerous.swiper.min.js" type="text/javascript"></script>
	<!--[if lte IE 6]>
	<script src="/dist/pc/js/png.js" type="text/javascript"></script>
	<script type="text/javascript">
		DD_belatedPNG.fix('.png');
	</script>
	<![endif]-->
</head>
<body>
<div class="header">
	<div class="headerTop_w">
		<div class="w1000 clearfix">
			<div class="headerWelcome fl">欢迎访问中国新媒体信息网！</div>
			<div class="headerTop_r fr">
				<ul class="clearfix">
					<!--<li><a href="">设为首页</a></li><span>|</span>-->
					<!--<li><a href="">手机版</a></li><span>|</span>-->
					<li><a href="">网站地图</a></li><span>|</span>
					<li><a href="" class="headerCity">切换城市</a></li><span>|</span>
					<li><a href="">新闻热线：020-89883111</a></li><span>|</span>
					<li><a href="">投稿邮箱：398574784@qq.com</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="headerCon_w">
		<div class="w1000">
			<div class="headerPic"><img src="/Uploads/201802/5a72bec20ee48.jpg" alt=""></div>
			<div class="headerCon clearfix">
				<div class="headerLogo fl"><img src="/Uploads/201802/5a72c080c0a08.jpg" alt=""></div>
				<div class="headerSearch fr">
					<div class="headerSearch_box"><input type="text" placeholder="徐若父亲病逝"></div>
					<div class="headerSearch_btn"><input type="submit" value=""></div>
				</div>
			</div>
		</div>
	</div>
	<div class="headerNav1_w">
		<div class="w1000">
			<div class="headerNav1">
				<ul class="clearfix">
					<li class="<?php if(MODULE_NAME == 'Index') : ?>on<?php endif;?>"><a href="/">首页</a></li>
					<?php $n=0;foreach($Categorys as $key=>$r):if($n<99) :if( intval(0)==$r["parentid"] ) :++$n; $arrCount = count(explode(",",$r['arrchildid'])); ?>
					<li class="<?php if($arrCount>1) : ?>hasChild<?php endif; if($catid == $r[id] || $parentid == $r[id]) : ?>current<?php endif;?>"><a href="<?php echo ($r["url"]); ?>"><?php echo ($r["catname"]); ?></a></li>
							<?php
 if($arrCount>1) { $childStr .= '<div class="headerNav2"><ul class="clearfix">'; $childRs = M('category')->where('parentid = '.$r[id])->select(); foreach($childRs as $val){ $childStr .= '<li><a href='.$val[url].'>'.$val['catname'].'</a></li>'; } $childStr .= '</ul></div>'; } endif; endif; endforeach;?>
				</ul>
			</div>
		</div>
	</div>
	<div class="headerNav2_w">
		<div class="w1000">
			<?php echo ($childStr); ?>
		</div>
	</div>
</div>







<div class="w1000">
    <?php
 $typelink = M('Type')->where('parentid = 1')->select(); $link = array(); foreach($typelink as $val){ $link[] = M('Link')->where('typeid='.$val['typeid'])->select(); } ?>
    <div class="inItem7">
        <div class="inItem7_top">
            <h3 class="inItem7_title">友情链接</h3>
            <div class="inItem7_nav">
                <ul class="clearfix">
                    <?php if(is_array($typelink)): $i = 0; $__LIST__ = $typelink;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><li class="<?php if($i==1) : ?>on<?php endif;?>"><?php echo ($r["name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <div class="inItem7_con">
            <?php if(is_array($link)): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><div class="inItem7_conList" <?php if($i==1) : ?>style='display:block;'<?php endif;?>>
                    <ul class="clearfix">
                        <?php if(is_array($r)): $i = 0; $__LIST__ = $r;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rr): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($rr["siteurl"]); ?>"><?php echo ($rr["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>

    </div>
</div>
<div class="footer">
    <div class="w1000">
        <div class="footerNav">
            <ul class="clearfix">
                <?php $n=0;foreach($Categorys as $key=>$r):if($n<99) :if( intval(0)==$r["parentid"] ) :++$n; $arrCount = count(explode(",",$r['arrchildid'])); ?>
                    <li class="<?php if($arrCount>1) : ?>hasChild<?php endif; if($catid == $r[id] || $parentid == $r[id]) : ?>current<?php endif;?>"><a href="<?php echo ($r["url"]); ?>"><?php echo ($r["catname"]); ?></a></li><?php endif; endif; endforeach;?>
            </ul>
        </div>
        <div class="footerNav2">
            <a href="">协会介绍</a>|
            <a href="">关于我们</a>|
            <a href="">联系我们</a>|
            <a href="">招聘英才</a>|
            <a href="">人员查询</a>|
            <a href="">投稿来信</a>|
            <a href="">网站声明</a>
        </div>
        <div class="footerContact">投稿邮箱：398574784@qq.com  总监电话：18319929076</div>
        <div class="footerBeian"><pre>Copyright &copy; 2017 All Rights Reserved   京ICP备11000545号-4</pre></div>
        <div class="footerpic"><img src="/dist/pc/images/in37.jpg" alt=""></div>
    </div>
</div>
<div class="aiderBox">
    <div class="ewm"><img src="/Uploads/201802/5a72c48188798.jpg" width="60" height="60" alt=""></div>
    <div class="goTop"><img src="/dist/pc/images/in38.png" alt=""></div>
</div>
</body>
</html>