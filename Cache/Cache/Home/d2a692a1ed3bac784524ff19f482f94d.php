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
<div class="incontain w1000">
    <div class="inItem1 clearfix">
        <div class="inItem1_l fl">
            <h3 class="inTitle"><a href="">重要新聞</a></h3>
            <div class="inItem1_lcon">
                <a href="" class="block"></a>
                <div class="inItem1_lPic"><img src="images/in4.jpg" width="640" height="420" alt=""></div>
                <div class="inItem1_ltitle ms300">习近平在视察陆军某师时强调:大抓实战化军事训练</div>
                <div class="inItem1_lword">央视网消息：中共中央总书记、国家主席、中央军委主席习近平3日视察中部战区陆军某师，强调要认真贯彻党的十九大精神，贯彻新时代党的强军思想，大抓实战化军事训练，深入推进数字化部队建设管理和作战运用创新，聚力打造精锐作战力量。</div>
            </div>
        </div>
        <div class="inItem1_r fr">
            <h3 class="inTitle"><a href="">专题报道</a></h3>
            <div class="inItem1_rCon hoverBox">
                <ul>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem1_rPic"><img src="images/in5.jpg" width="300" height="200" alt=""></div>
                        <div class="inItem1_rTitle">秦淮花灯 “走出去”的非遗手艺</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem1_rPic"><img src="images/in6.jpg" width="300" height="200" alt=""></div>
                        <div class="inItem1_rTitle">秦淮花灯 “走出去”的非遗手艺</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="inItem2">
        <h3 class="inTitle"><a href="">精选</a></h3>
        <div class="inItem2_con hoverBox">
            <ul class="clearfix">
                <li>
                    <a href="" class="block"></a>
                    <div class="inItem2_pic"><img src="images/in7.jpg" width="215" height="128" alt=""><span>重要新闻</span></div>
                    <div class="inItem2_title ms300">人民日报:一以贯之坚持和发展中国特色社会主义</div>
                </li>
                <li>
                    <a href="" class="block"></a>
                    <div class="inItem2_pic"><img src="images/in8.jpg" width="215" height="128" alt=""></div>
                    <div class="inItem2_title ms300">人民日报:一以贯之坚持和发展中国特色社会主义</div>
                </li>
                <li>
                    <a href="" class="block"></a>
                    <div class="inItem2_pic"><img src="images/in9.jpg" width="215" height="128" alt=""></div>
                    <div class="inItem2_title ms300">人民日报:一以贯之坚持和发展中国特色社会主义</div>
                </li>
                <li>
                    <a href="" class="block"></a>
                    <div class="inItem2_pic"><img src="images/in10.jpg" width="215" height="128" alt=""></div>
                    <div class="inItem2_title ms300">人民日报:一以贯之坚持和发展中国特色社会主义</div>
                </li>
            </ul>
        </div>
    </div>
    <div class="inItem3 clearfix">
        <div class="inItem3_l fl">
            <h3 class="inTitle"><a href="">文化·艺术</a></h3>
            <div class="inItem3_lcon hoverBox">
                <ul class="clearfix">
                    <li class="inItem3_big">
                        <a href="" class="block"></a>
                        <div class="inItem3_lpic"><img src="images/in11.jpg" width="640" height="330" alt=""></div>
                        <div class="inItem3_ltitleW"><div class="inItem3_ltitle ms300">河南博物院金缕玉衣、彩绘陶仓楼、武则天金简亮相福州</div></div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem3_lpic"><img src="images/in12.jpg" width="315" height="200" alt=""></div>
                        <div class="inItem3_ltitleW"><div class="inItem3_ltitle ms300">國際燈光藝術節即將啟幕</div></div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem3_lpic"><img src="images/in13.jpg" width="315" height="200" alt=""></div>
                        <div class="inItem3_ltitleW"><div class="inItem3_ltitle ms300">白瓷時代的“一带一路”</div></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="inItem3_r fr">
            <h3 class="inTitle"><a href="">视频</a></h3>
            <div class="inItem3_rcon hoverBox">
                <ul>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem3_rpic">
                            <img src="images/in14.jpg" width="160" height="100" alt="">
                            <span class="inItem3_ricon"><img src="images/in19.png" width="38" height="38" alt=""></span>
                        </div>
                        <div class="inItem3_rtitle ms300">兰州对部分区域取消住房限购 1月8日起正式实施</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem3_rpic">
                            <img src="images/in15.jpg" width="160" height="100" alt="">
                            <span class="inItem3_ricon"><img src="images/in19.png" width="38" height="38" alt=""></span>
                        </div>
                        <div class="inItem3_rtitle ms300">这名厅官诈骗"高铁一姐"</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem3_rpic">
                            <img src="images/in16.jpg" width="160" height="100" alt="">
                            <span class="inItem3_ricon"><img src="images/in19.png" width="38" height="38" alt=""></span>
                        </div>
                        <div class="inItem3_rtitle ms300">国内跑马跑得最快的"颜值女王"被检出兴奋剂违规</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem3_rpic">
                            <img src="images/in17.jpg" width="160" height="100" alt="">
                            <span class="inItem3_ricon"><img src="images/in19.png" width="38" height="38" alt=""></span>
                        </div>
                        <div class="inItem3_rtitle ms300">兰州对部分区域取消住房限购 1月8日起正式实施</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem3_rpic">
                            <img src="images/in18.jpg" width="160" height="100" alt="">
                            <span class="inItem3_ricon"><img src="images/in19.png" width="38" height="38" alt=""></span>
                        </div>
                        <div class="inItem3_rtitle ms300">花旗：“一带一路”對東盟增長很重要</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="inAD"><a href=""><img src="/Uploads/201802/5a72c53bb46b8.jpg" width="1000" alt=""></a></div>
    <div class="inItem4 clearfix">
        <div class="inItem4_l fl">
            <h3 class="inTitle"><a href="">舆情</a></h3>
            <div class="inItem4_lcon hoverBox">
                <ul class="clearfix">
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem4_lpic"><img src="images/in7.jpg" width="215" height="128" alt=""></div>
                        <div class="inItem4_ltitle ms300">人民日报:一以贯之坚持和发展中国特色社会主义</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem4_lpic"><img src="images/in8.jpg" width="215" height="128" alt=""></div>
                        <div class="inItem4_ltitle ms300">人民日报:一以贯之坚持和发展中国特色社会主义</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem4_lpic"><img src="images/in9.jpg" width="215" height="128" alt=""></div>
                        <div class="inItem4_ltitle ms300">人民日报:一以贯之坚持和发展中国特色社会主义</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem4_lpic"><img src="images/in21.jpg" width="215" height="128" alt=""></div>
                        <div class="inItem4_ltitle ms300">人民日报:一以贯之坚持和发展中国特色社会主义</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem4_lpic"><img src="images/in22.jpg" width="215" height="128" alt=""></div>
                        <div class="inItem4_ltitle ms300">人民日报:一以贯之坚持和发展中国特色社会主义</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem4_lpic"><img src="images/in23.jpg" width="215" height="128" alt=""></div>
                        <div class="inItem4_ltitle ms300">人民日报:一以贯之坚持和发展中国特色社会主义</div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="inItem4_r fr">
            <h3 class="inTitle"><a href="">热门资讯</a></h3>
            <div class="inItem4_rcon hoverBox">
                <ul>
                    <li class="inItem4_rcon1">
                        <a href="" class="block"></a>
                        <div class="inItem4_rtitle ms300">商户挂无厘头横幅互相响应</div>
                    </li>
                    <li class="inItem4_rcon2">
                        <a href="" class="block"></a>
                        <div class="inItem4_rtitle ms300">北大"渐冻症女博士"去世</div>
                    </li>
                    <li class="inItem4_rcon3">
                        <a href="" class="block"></a>
                        <div class="inItem4_rtitle ms300">商户挂无厘头横幅互相响应</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem4_rtitle ms300">医院副主任长期往主任水杯</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem4_rtitle ms300">旅客突然发病呕吐 乘务长跪</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem4_rtitle ms300">男子挪用4千万公款买彩票</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem4_rtitle ms300">男子奥迪车着火维修费22万</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem4_rtitle ms300">胡歌私信白血病粉丝：真正</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem4_rtitle ms300">国内跑马跑得最快的"颜值</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem4_rtitle ms300">偶像只能看一年，声优可以</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem4_rtitle ms300">专坑老年人的6大健康误区</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="inItem5">
        <div class="inItem5_titleW">
            <div class="inItem5_title"><h3 class="inTitle"><a href="">财经</a></h3></div>
        </div>
        <div class="inItem5_con clearfix">
            <div class="inItem5_l fl">
                <a href="" class="block"></a>
                <div class="inItem5_lpic"><img src="images/in29.jpg" width="320" height="200" alt=""></div>
                <div class="inItem5_ltitle ms300">北京动批大红门三千商户入驻天津</div>
            </div>
            <div class="inItem5_m fl">
                <ul>
                    <li><a href="" class="ms300">贾跃亭减持酷派18%股权亏12亿</a></li>
                    <li><a href="" class="ms300">英特尔芯片漏洞震惊全球 上海网信</a></li>
                    <li><a href="" class="ms300">揭秘贾乃亮和李小璐夫妇的商业版图</a></li>
                    <li><a href="" class="ms300">美股指连续3天创新高 黄金连涨11天</a></li>
                    <li><a href="" class="ms300">互金整治办发文：各地引导辖内企业</a></li>
                    <li><a href="" class="ms300">360市值一天内相差773亿 江南</a></li>
                    <li><a href="" class="ms300">土地市场平淡开局 “地王”将很难出</a></li>
                </ul>
            </div>
            <div class="inItem5_r fr">
                <a href=""><img src="/Uploads/201802/5a72c5aa91438.jpg" width="320" height="240" alt=""></a>
            </div>
        </div>
    </div>
    <div class="inItem6 clearfix">
        <div class="inItem6_l fl">
            <h3 class="inTitle"><a href="">时尚</a></h3>
            <div class="inItem6_lcon hoverBox">
                <ul>
                    <li class="inItem6_lhaspic">
                        <a href="" class="block"></a>
                        <div class="inItem6_lpic"><img src="images/in31.jpg" width="320" height="120" alt=""></div>
                        <div class="inItem6_ltitle ms300">北京动批大红门三千商户入驻天津</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem6_ltitle1 ms300">贾跃亭减持酷派18%股权亏12亿</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem6_ltitle1 ms300">英特尔芯片漏洞震惊全球 上海网信</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem6_ltitle1 ms300">揭秘贾乃亮和李小璐夫妇的商业版图</div>
                    </li>
                </ul>
            </div>
            <div class="inAD"><a href=""><img src="/Uploads/201802/5a72c5cba6810.jpg" width="320" height="100" alt=""></a></div>
        </div>
        <div class="inItem6_m fl">
            <h3 class="inTitle"><a href="">娱乐</a></h3>
            <div class="inItem6_mcon hoverBox">
                <ul>
                    <li class="inItem6_mconli1">
                        <a href="" class="block"></a>
                        <div class="inItem6_mpic"><img src="images/in32.jpg" width="155" height="120" alt=""></div>
                        <div class="inItem6_mtitles ms300">新年第一发 冬日莫斯科如梦如幻宛如童话</div>
                    </li>
                    <li class="inItem6_mconli2">
                        <a href="" class="block"></a>
                        <div class="inItem6_mpic"><img src="images/in33.jpg" width="155" height="120" alt=""></div>
                        <div class="inItem6_mtitles ms300">新年第一发 冬日莫斯科如梦如幻宛如童话</div>
                    </li>
                    <div class="clear" style="height: 8px;"></div>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem6_mtitleb ms300">贾跃亭减持酷派18%股权亏12亿</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem6_mtitleb ms300">英特尔芯片漏洞震惊全球 上海网信</div>
                    </li>
                    <li>
                        <a href="" class="block"></a>
                        <div class="inItem6_mtitleb ms300">揭秘贾乃亮和李小璐夫妇的商业版图</div>
                    </li>
                </ul>
            </div>
            <div class="inAD"><a href=""><img src="/Uploads/201802/5a72c5d72ab98.jpg" width="320" height="100" alt=""></a></div>
        </div>
        <div class="inItem6_r fr">
            <h3 class="inTitle"><a href="">农业</a></h3>
            <div class="inItem6_rcon hoverBox">
                <ul>
                    <li><a href="" class="ms300">贾跃亭减持酷派18%股权亏12亿</a></li>
                    <li><a href="" class="ms300">留学妹子打俩月工挣钱改造租房</a></li>
                    <li><a href="" class="ms300">地毯谁还花钱买?旧衣服剪剪缝缝就能轻</a></li>
                    <li><a href="" class="ms300">李玉刚私人工作室首曝光，室内装修古</a></li>
                    <li><a href="" class="ms300">玄关改书房,次卧改浴室 他家的改造</a></li>
                    <li><a href="" class="ms300">黎贝卡的200平高颜值复古家 超大衣帽</a></li>
                    <li><a href="" class="ms300">英特尔芯片漏洞震惊全球 上海网信</a></li>
                    <li><a href="" class="ms300">揭秘贾乃亮和李小璐夫妇的商业版图</a></li>
                </ul>
            </div>
            <div class="inAD"><a href=""><img src="/Uploads/201802/5a72c5e1d07f0.jpg" width="320" height="100" alt=""></a></div>
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