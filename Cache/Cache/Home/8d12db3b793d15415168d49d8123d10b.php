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
<?php
 $implist = M('Article')->where('catid=6 and posid=1')->limit(3)->order('createtime')->select(); $implist1 = M('Article')->where('catid=6 and posid=10')->limit(5)->order('createtime')->select(); $implist2 = M('Article')->where('catid=6 and posid=11')->limit(4)->order('createtime')->select(); $rightlist1 = M('Article')->where('catid=6 and posid=2')->limit(10)->order('createtime')->select(); $rightlist2 = M('Article')->where('catid=6 and posid=3')->limit(10)->order('createtime')->select(); $rightlist3 = M('Article')->where('catid=6 and posid=4')->limit(10)->order('createtime')->select(); ?>
<div class="contain w1000">
    <div class="articleListTop clearfix">
        <div class="articleListTop_l fl">
            <a class="shishang-left" href="#"></a>
            <a class="shishang-right" href="#"></a>
            <div class="swiper-container shishang-container">
                <div class="swiper-wrapper">
                    <?php if(is_array($implist)): $i = 0; $__LIST__ = $implist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><div class="swiper-slide">
                            <a href="<?php echo ($r["url"]); ?>" class="block"></a>
                            <div class="shishangTop_lpic"><img src="<?php echo ($r["thumb"]); ?>" width="695" height="350" alt=""></div>
                            <div class="shishangTop_ltitle"><?php echo ($r["title"]); ?></div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>
        <div class="articleListTop_r fr">
            <div class="shishangTop_rcatname"><a href="">时尚视频</a></div>
            <div class="shishangTop_rlist hoverBox">
                <ul>
                    <?php if(is_array($implist1)): $i = 0; $__LIST__ = $implist1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><li class="<?php if($i==1) : ?>shishangTop_rli1<?php endif;?>">
                            <a href="<?php echo ($r["url"]); ?>" class="block"></a>
                            <?php if($i==1) : ?><div class="shishangTop_rpic"><img src="<?php echo ($r["thumb"]); ?>" width="280" height="170" alt=""></div><?php endif;?>
                            <div class="shishangTop_rtitle ms300"><?php echo ($r["title"]); ?></div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <div class="shishangTop_list">
            <ul class="clearfix">
                <?php if(is_array($implist2)): $i = 0; $__LIST__ = $implist2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><li>
                        <a href="" class="block"></a>
                        <div class="shishangTop_pic"><img src="<?php echo ($r["thumb"]); ?>" width="490" height="230" alt=""></div>
                        <div class="shishangTop_titleW col-<?php echo ($i); ?>"><div class="shishangTop_title"><?php echo ($r["title"]); ?></div></div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <div class="articleList clearfix">
        <div class="articleList_l fl">
            <div class="articleList_lcon hoverBox">
                <ul id="ajax_list_ul">
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><li>
                            <div class="articleList_lBox">
                                <a href="" class="block"></a>
                                <div class="articleList_lpic"><img src="<?php echo ($r["thumb"]); ?>" width="220" height="130" alt=""></div>
                                <div class="articleList_lword">
                                    <div class="articleList_ltitle ms300"><?php echo ($r["title"]); ?></div>
                                    <div class="articleList_labout"><?php echo ($r["description"]); ?></div>
                                </div>
                            </div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <?php if($pages) : ?>
            <div class="ajax-page">
                <div class="ajax_tips">
                    加载中....
                </div>
                <div class="ajaxpage">
                    <?php echo ($pages); ?>
                </div>
                <div class="fixedloading">
                    <div class="loader"></div>
                </div>
                <div class="fixedloadingbg"></div>
            </div>
            <?php endif;?>
            <div class="articleList_lload"><a href="javaScript:void(0);">加载更多+</a></div>
        </div>
        <div class="articleList_r fr">
            <div class="articleList_rbox">
                <div class="articleList_rcatname"><a href="">时尚圈中事</a></div>
                <div class="articleList_ritem hoverBox">
                    <ul>
                        <?php if(is_array($rightlist1)): $i = 0; $__LIST__ = $rightlist1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><li class="<?php if($i==1) : ?>articleList_rli1<?php endif;?>">
                                <a href="<?php echo ($r["url"]); ?>" class="block"></a>
                                <?php if($i==1) : ?>
                                <div class="articleList_rpic"><img src="<?php echo ($r["thumb"]); ?>" width="280" height="160" alt=""></div>
                                <div class="articleList_rtitleW"><div class="articleList_rtitle ms300"><?php echo ($r["title"]); ?></div></div>
                                <?php else :?>
                                <div class="articleList_rtitle ms300"><?php echo ($r["title"]); ?></div>
                                <?php endif;?>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
            <div class="inAD"><a href=""><img src="/Uploads/201802/5a7bec3f50797.jpg" alt=""></a></div>
            <div class="articleList_rbox">
                <div class="articleList_rcatname"><a href="">明星造型室</a></div>
                <div class="articleList_ritem hoverBox">
                    <ul>
                        <?php if(is_array($rightlist2)): $i = 0; $__LIST__ = $rightlist2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><li class="<?php if($i==1) : ?>articleList_rli1<?php endif;?>">
                                <a href="<?php echo ($r["url"]); ?>" class="block"></a>
                                <?php if($i==1) : ?>
                                <div class="articleList_rpic"><img src="<?php echo ($r["thumb"]); ?>" width="280" height="160" alt=""></div>
                                <div class="articleList_rtitleW"><div class="articleList_rtitle ms300"><?php echo ($r["title"]); ?></div></div>
                                <?php else :?>
                                <div class="articleList_rtitle ms300"><?php echo ($r["title"]); ?></div>
                                <?php endif;?>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
            <div class="articleList_rbox">
                <div class="articleList_rcatname"><a href="">摩登派</a></div>
                <div class="articleList_ritem hoverBox">
                    <ul>
                        <?php if(is_array($rightlist3)): $i = 0; $__LIST__ = $rightlist3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><li class="<?php if($i==1) : ?>articleList_rli1<?php endif;?>">
                                <a href="<?php echo ($r["url"]); ?>" class="block"></a>
                                <?php if($i==1) : ?>
                                <div class="articleList_rpic"><img src="<?php echo ($r["thumb"]); ?>" width="280" height="160" alt=""></div>
                                <div class="articleList_rtitleW"><div class="articleList_rtitle ms300"><?php echo ($r["title"]); ?></div></div>
                                <?php else :?>
                                <div class="articleList_rtitle ms300"><?php echo ($r["title"]); ?></div>
                                <?php endif;?>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var shishangSwiper = new Swiper('.shishang-container',{
        loop:true,
        grabCursor: true,
        calculateHeight : true
    })
    $('.shishang-left').on('click', function(e){
        e.preventDefault()
        shishangSwiper.swipePrev()
    })
    $('.shishang-right').on('click', function(e){
        e.preventDefault()
        shishangSwiper.swipeNext()
    })
</script>
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