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
					<li class="<?php if(MODULE_NAME == 'Index') : ?>on<?php endif;?>"><a href="">首页</a></li>
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
 $implist = M('Article')->where('catid=2 and posid=1')->limit(3)->order('createtime')->select(); $rightlist1 = M('Article')->where('catid=2 and posid=2')->limit(10)->order('createtime')->select(); $rightlist2 = M('Article')->where('catid=2 and posid=3')->limit(10)->order('createtime')->select(); $rightlist3 = M('Article')->where('catid=2 and posid=4')->limit(10)->order('createtime')->select(); ?>
<div class="contain w1000">
    <div class="articleListTop clearfix">
        <div class="articleListTop_l fl">
            <div class="swiper-container caijing-container">
                <div class="swiper-wrapper">
                    <?php if(is_array($implist)): $i = 0; $__LIST__ = $implist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><div class="swiper-slide">
                            <a href="<?php echo ($r["url"]); ?>" class="block"></a>
                            <div class="caijingTop_lpic"><img src="<?php echo ($r["thumb"]); ?>" width="695" height="350" alt=""></div>
                            <div class="caijingTop_ltitle"><?php echo ($r["title"]); ?></div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="pagination caijing-pagination"></div>
        </div>
        <div class="articleListTop_r fr">
            <div class="caijingTop_rcon"><img src="/dist/pc/images/in40.jpg" width="280" alt=""></div>
            <div class="caijingTop_rnav">
                <ul class="clearfix">
                    <li class="on"><a href="javaScript:void(0);">沪深</a></li>
                    <li><a href="javaScript:void(0);">北美</a></li>
                    <li><a href="javaScript:void(0);">欧洲</a></li>
                    <li><a href="javaScript:void(0);">期货</a></li>
                    <li><a href="javaScript:void(0);">外汇</a></li>
                </ul>
            </div>
            <div class="caijingTop_rListcon">
                <div class="caijingTop_rList" style="display: block;">
                    <ul id="china">

                        <!--<li id="sz399001">-->
                            <!--<span class="one">深证成指</span><span class="two"></span><span class="three"></span>-->
                            <!--<div class="caijingTop_rListpic"><img src="//image.sinajs.cn/newchart/small/nsz399001.gif" alt="" ></div>-->
                        <!--</li>-->
                        <!--<li id="int_hangseng">-->
                            <!--<span class="one">恒生指数</span><span class="two"></span><span class="three"></span>-->
                            <!--<div class="caijingTop_rListpic"><img src="//image.sinajs.cn/newchart/hk_stock/realtime_min_small/HSI.gif" alt="" ></div>-->
                        <!--</li>-->
                        <!--<li id="sz399006">-->
                            <!--<span class="one">创业板</span><span class="two"></span><span class="three col-g"></span>-->
                            <!--<div class="caijingTop_rListpic"><img src="http://image.sinajs.cn/newchart/hollow/small/nsz399006.gif" alt="" ></div>-->
                        <!--</li>-->
                    </ul>
                </div>
                <div class="caijingTop_rList">
                    <ul>
                        <li id="int_dji">
                            <span class="one">道 琼 斯</span><span class="two"></span><span class="three"></span>
                            <div class="caijingTop_rListpic" style="display: block;"><img src="http://image.sinajs.cn/newchart/usstock/min_idx_py/dji.gif" alt=""></div>
                        </li>
                        <li id="int_nasdaq">
                            <span class="one">纳斯达克</span><span class="two"></span><span class="three"></span>
                            <div class="caijingTop_rListpic"><img src="http://image.sinajs.cn/newchart/usstock/min_idx_py/ixic.gif" alt=""></div>
                        </li>
                        <li id="gb_inx">
                            <span class="one">标普</span><span class="two"></span><span class="three"></span>
                            <div class="caijingTop_rListpic"><img src="http://image.sinajs.cn/newchart/usstock/min_idx_py/inx.gif" alt=""></div>
                        </li>
                        <!--<li>-->
                            <!--<span class="one">标普多伦多</span><span class="two col-r">16357.55</span><span class="three col-r">+9.57</span>-->
                        <!--</li>-->
                    </ul>
                </div>
                <div class="caijingTop_rList">
                    <ul>
                        <li><span class="one">英国富时100</span><span class="two col-g">1.1940</span><span class="three col-g">-0.0027</span></li>
                        <li><span class="one">英镑美元</span><span class="two col-g">1.3527</span><span class="three col-g">-0.0039</span></li>
                        <li><span class="one">美元日元</span><span class="two col-g">112.9200</span><span class="three col-g">-0.1600</span></li>
                        <li><span class="one">澳元美元</span><span class="two col-g">0.7823</span><span class="three col-g">-0.0017</span></li>
                        <li><span class="one">美元瑞郎</span><span class="two col-r">0.9820</span><span class="three col-r">+0.0052</span></li>
                        <li><span class="one">美元加元</span><span class="two col-r">1.2440</span><span class="three col-r">+0.0022</span></li>
                        <li><span class="one">美元港币</span><span class="two col-r">7.8213</span><span class="three col-r">+0.0010</span></li>
                        <li><span class="one">美元人民币</span><span class="two col-r">6.5260</span><span class="three col-r">+0.0291</span></li>
                        <li><span class="one">美元新加坡元</span><span class="two col-r">--</span><span class="three col-r">--</span></li>
                    </ul>
                </div>
                <div class="caijingTop_rList">
                    <ul>
                        <li><span class="one">原油</span><span class="two col-g">1.1940</span><span class="three col-g">-0.0027</span></li>
                        <li><span class="one">英镑美元</span><span class="two col-g">1.3527</span><span class="three col-g">-0.0039</span></li>
                        <li><span class="one">美元日元</span><span class="two col-g">112.9200</span><span class="three col-g">-0.1600</span></li>
                        <li><span class="one">澳元美元</span><span class="two col-g">0.7823</span><span class="three col-g">-0.0017</span></li>
                        <li><span class="one">美元瑞郎</span><span class="two col-r">0.9820</span><span class="three col-r">+0.0052</span></li>
                        <li><span class="one">美元加元</span><span class="two col-r">1.2440</span><span class="three col-r">+0.0022</span></li>
                        <li><span class="one">美元港币</span><span class="two col-r">7.8213</span><span class="three col-r">+0.0010</span></li>
                        <li><span class="one">美元人民币</span><span class="two col-r">6.5260</span><span class="three col-r">+0.0291</span></li>
                        <li><span class="one">美元新加坡元</span><span class="two col-r">--</span><span class="three col-r">--</span></li>
                    </ul>
                </div>
                <div class="caijingTop_rList">
                    <ul>
                        <li><span class="one">欧元美元</span><span class="two col-g">1.1940</span><span class="three col-g">-0.0027</span></li>
                        <li><span class="one">英镑美元</span><span class="two col-g">1.3527</span><span class="three col-g">-0.0039</span></li>
                        <li><span class="one">美元日元</span><span class="two col-g">112.9200</span><span class="three col-g">-0.1600</span></li>
                        <li><span class="one">澳元美元</span><span class="two col-g">0.7823</span><span class="three col-g">-0.0017</span></li>
                        <li><span class="one">美元瑞郎</span><span class="two col-r">0.9820</span><span class="three col-r">+0.0052</span></li>
                        <li><span class="one">美元加元</span><span class="two col-r">1.2440</span><span class="three col-r">+0.0022</span></li>
                        <li><span class="one">美元港币</span><span class="two col-r">7.8213</span><span class="three col-r">+0.0010</span></li>
                        <li><span class="one">美元人民币</span><span class="two col-r">6.5260</span><span class="three col-r">+0.0291</span></li>
                        <li><span class="one">美元新加坡元</span><span class="two col-r">--</span><span class="three col-r">--</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="articleList clearfix">
        <div class="articleList_l fl">
            <div class="articleList_lcon hoverBox">
                <ul id="ajax_list_ul">
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><li>
                            <div class="articleList_lBox">
                                <a href="<?php echo ($r["url"]); ?>" class="block"></a>
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
                <div class="articleList_rcatname"><a href="">财经要闻</a></div>
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
            <div class="inAD"><a href=""><img src="/Uploads/201802/5a74194eee9f8.jpg" alt=""></a></div>
            <div class="articleList_rbox">
                <div class="articleList_rcatname"><a href="">股票</a></div>
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
                <div class="articleList_rcatname"><a href="">专题</a></div>
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
    var caijingSwiper = new Swiper('.caijing-container',{
        pagination: '.caijing-pagination',
        loop:true,
        grabCursor: true,
        calculateHeight : true
    });
    function stock(code,type) {
        $.ajax({
            type : "GET",
            url : "http://hq.sinajs.cn/list="+code,
            dataType : "script",
            cache : "false",
            timeout : 2000,
            success : function(data, textStatus, jqXHR) {
                var arr = code.split(",");
                for (var i =0;i<arr.length;i++){
                    var str = eval("hq_str_"+arr[i]).split(",");
                    if(type ==1){
                        var imgcode = 'n'+arr[i].split("_")[1];
                        $('#china').append("<li>" +
                            "<span class='one'>"+str[0]+"</span>" +
                            "<span class='two'>"+Number(str[1]).toFixed(2)+"</span>" +
                            "<span class='three'>"+Number(str[2]).toFixed(2)+"</span>" +
                            "<div class='caijingTop_rListpic'><img src='//image.sinajs.cn/newchart/small/"+imgcode+".gif'></div>" +
                            "</li>");
                        if(Number(str[2])<0){
                            $('#china li').eq(i).find('.two').addClass('col-g');
                            $('#china li').find('.three').addClass('col-g');
                        }else {
                            $('#china li').eq(i).find('.two').addClass('col-r');
                            $('#china li').eq(i).find('.three').addClass('col-r');
                        }
                    }
                }
                $('.caijingTop_rList ul li .caijingTop_rListpic').eq(0).show();

//                var arr = "hq_str_"+code.split(",");
//                console.log(arr);
//                var str = eval().split(",");
//                var zs =  Number(str[3]).toFixed(2);
//                var cj = zs-str[2];
//                cj = cj.toFixed(2);
//                console.log(str);
//                //恒生指数比较特别
//                if(type==1){
//                    zs= str[1];
//                    cj=str[2];
//                }
//                if(type==2){
//                    zs = Number(str[1]).toFixed(2);
//                    cj = Number(str[4]).toFixed(2);
//                }
//                //变绿
//                if(cj<0){
//                    $('#'+code).find('span').eq(1).text(zs).addClass('col-g');
//                    $('#'+code).find('span').eq(2).text(cj).addClass('col-g');
//                }else {
//                    $('#'+code).find('span').eq(1).text(zs).addClass('col-r');
//                    $('#'+code).find('span').eq(2).text(cj).addClass('col-r');
//                }
            },
            error : function() {
                alert("出错了！");
            }});
    }
    stock("s_sh000001,s_sz399001,s_sh000300,s_sz399415,s_sz399006",1);    //上证指数,深圳,I100,创业板
//    stock("int_dji",1)   //道琼斯
//    stock("int_nasdaq",1)   //纳斯达克
//    stock("gb_inx",2)   //标普指数


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