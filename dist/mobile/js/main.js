'use strict';

$(function () {

	$(".caijingTab_nav li").on("click",function(){
		var index = $(this).index();
		$(this).addClass("on").siblings().removeClass("on")
		$(".caijingTab_item").hide();
		$(".caijingTab_con").find(".caijingTab_item").eq(index).show()
	})


});
