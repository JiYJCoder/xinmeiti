jQuery(document).ready(function(){
/*
	focus("left",".big_focus",".big_focus_btn",".big_focus_btnl",".big_focus_btnr","click",".big_focus_pic",1,"100%",306,3000,500,1)
	focus("up",".top_focus",".top_focus_btn",".top_focus_btnl",".top_focus_btnr","click",".top_focus_pic",1,500,306,3000,500,1)
	focus("left",".left_focus",".left_focus_btn",".left_focus_btnl",".left_focus_btnr","click",".left_focus_pic",1,500,306,3000,500,1)
	focus("fade",".fade_focus",".fade_focus_btn",".fade_focus_btnl",".fade_focus_btnr","click",".fade_focus_pic",1,500,306,3000,500,1)
*/
	// 滑过加class
	hoverA($(".inItem1_lcon"))
	hoverA($(".hoverBox li"))
	hoverA($(".inItem5_l"))
	hoverA($(".yishuList_ritem"))

	$(".headerNav1 li").eq($(".headerNav1 li").length-1).addClass("nobor");

	$(".headerNav1 li").on("mouseenter",function(){
		if($(this).hasClass("hasChild")){
			var index = $(this).index(".hasChild");
			$(".headerNav2").hide()
			$(".headerNav2_w").show();
			$(".headerNav2_w").find(".headerNav2").eq(index).show();
		}else{
			$(".headerNav2_w").hide()
		}
	})

	$(".headerCon_w").on("mouseenter",function(){
		$(".headerNav2_w").hide()
	})

	$(".headerNav2_w").on("mouseleave",function(){
		$(".headerNav2_w").hide()
	})

	$(".inItem7_nav li").on("mouseenter",function(){
		var index = $(this).index();
		$(this).addClass("on").siblings().removeClass("on")
		$(".inItem7_conList").hide();
		$(".inItem7_con").find(".inItem7_conList").eq(index).show()
	})

	$(".goTop").click(function(){
		$("html,body").stop().animate({"scrollTop":0},500)
	})
})

// 财经
$(function(){
	$(".caijingTop_rnav li").on("mouseenter",function(){
		$(this).addClass("on").siblings().removeClass("on")
		$(".caijingTop_rListcon").find(".caijingTop_rList").hide().eq($(this).index()).show()
	})
	$(document).on('mouseenter','.caijingTop_rList li',function () {
        if($(this).find(".caijingTop_rListpic").length != 0){
            var _parent = $(this).parents(".caijingTop_rList");
            _parent.find(".caijingTop_rListpic").hide();
            $(this).find(".caijingTop_rListpic").show();
        }
    })
	// $(".caijingTop_rList li").on("mouseenter",function(){
	// 	if($(this).find(".caijingTop_rListpic").length != 0){
	// 		var _parent = $(this).parents(".caijingTop_rList");
	// 		_parent.find(".caijingTop_rListpic").hide();
	// 		$(this).find(".caijingTop_rListpic").show();
	// 	}
	// })
})

/*
$(function(){
	$(".slide").slide({percent:'1',play:"0"});
	$(".slide2").slide({percent:'1',play:"0"});
	$(".top_slide").slide({type:"top",conHeight:"306",play:"0"});
	$(".left_slide").slide({type:"left",conWidth:"500",play:"0"});
	$(".left_slide2").slide({type:"left",num:"2",conWidth:"1000",play:"0"});
	$(".fade_slide").slide({type:"fade",play:"0"});
})
*/

function nTabs(thisObj,Num){
if(thisObj.className == "active")return;
var tabObj = thisObj.parentNode.id;
var tabList = document.getElementById(tabObj).getElementsByTagName("li");
for(i=0; i <tabList.length; i++)
{
if (i == Num)
{
   thisObj.className = "active";
      document.getElementById(tabObj+"_Content"+i).style.display = "block";
}else{
   tabList[i].className = "normal";
   document.getElementById(tabObj+"_Content"+i).style.display = "none";
}
}
}

function hoverA(obj){
	obj.hover(function(){
		$(this).addClass("on")
	},function(){
		$(this).removeClass("on")
	})
}




$.fn.slide = function(options) {
	var defaults = {
		type:         'left',
		btn:          '.slide_btn',
		leftBtn:      '.slide_left',
		rightBtn:     '.slide_right',
		btnActive:    'click',
		picBox:       '.slide_pic',
		num:          '1',
		conWidth:     '100%',
		conHeidth:    '100%',
		time:         '3000',
		speed:        '500',
		play:         '1',
		percent:      '0'
	};
	var
		obj       =     $.extend(defaults,options),
		self      =     $(this),
		picUl     =     self.find(obj.picBox+">ul"),
		picLi     =     self.find(obj.picBox+">ul>li"),
		btnLi     =     self.find(obj.btn+">ul>li"),
		leftBtn   =     self.find(obj.leftBtn),
		rightBtn  =     self.find(obj.rightBtn),
		type      =     obj.type,
		conWidth  =     obj.conWidth,
		conHeight  =    obj.conHeight,
		speed     =     obj.speed,
		percent   =     obj.percent,
		len       =     Math.ceil(picLi.length/obj.num),
		index     =     0,
		timer;

	if(percent == 1 && type == "left"){
		picUl.css({"width":100*len+"%"});
		picLi.css({"width":100/len+"%"});
		$(this).animate({"opacity":"1"},500);
	}

	btnLi.bind(obj.btnActive,function(){
		if(index != btnLi.index(this)){
			index = btnLi.index(this);
			goanimate(index);
		}
	})

	leftBtn.click(function(){
		if(index==0){index=len-1;}else{index--;}
		goanimate(index);
	})

	rightBtn.click(function(){
		if(index==len-1){index=0;}else{index++;}
		goanimate(index);
	})

	if(obj.play==1){
		self.hover(function(){
			clearInterval(timer);
		},function(){
			clearInterval(timer);
			timer = setInterval(function(){
				if(index==len-1){index=0;}else{index++;}
				goanimate(index);
			},obj.time);
		}).trigger("mouseleave");
	}

	var goanimate = function(index){
		if(percent == "1" && type == "left"){
			picUl.stop().animate({"marginLeft":-index*100 +"%"},speed);
		}
		if(percent == "0" && type == "left"){
			picUl.stop().animate({"marginLeft":-index*conWidth},speed);
		}
		if(percent == "0" && type == "top"){
			picUl.stop().animate({"marginTop":-index*conHeight},speed);
		}
		if(percent == "0" && type == "fade"){
			picLi.stop(false,true).fadeOut();
			picLi.eq(index).stop(false,true).fadeIn();
		}
		btnLi.removeClass("active").eq(index).addClass("active");
	}

}













