a = 1;
$(window.document).on("scroll",function(){
if( $(document).scrollTop() + $(window).height() > $(document).height() - 20 && a==1) {
	a = 0;
	$(".loaderBox").show();
	$(".ajax_tips").hide();
		$.ajax( {
			url: $("#page_ajax").attr("href"),
			success:function(data){
				setTimeout(function(){
					var nowHref = $("#page_ajax_now").attr("href"),
						nextHref = $("#page_ajax").attr("href"),
						datanextHref = jQuery(data).find("#page_ajax").attr("href"),
						datanowHref = jQuery(data).find("#page_ajax_now").attr("href");
					if(nowHref != nextHref){
						$("#page_ajax").attr("href",datanextHref);
						$("#page_ajax_now").attr("href",datanowHref);
						html = $(data).find("#ajax_list_ul").html();
						$("#ajax_list_ul").append(html);
						$(".ajax_tips").show();
						a = 1;
					}else{
						$(".ajax_tips").html("没有更多内容了！").addClass("nomore").show();
					} 
					$(".loaderBox").hide();
				},1000)
			}
		});
	}
});
