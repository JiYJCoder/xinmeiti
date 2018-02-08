var win = {};

var Menu = document.getElementById("leftMenu");
var TabNav = document.getElementById("TabNav");
var $iframe = $("#iframe");
var $navList = $("#TabNav");
var ev = null;

win.open = function(e) {
    var name = null,
        url = null,
        addurl = null;

    if(navigator.userAgent.indexOf("MSIE 8.0")>0 && !window.innerWidth || navigator.userAgent.indexOf("MSIE 7.0")>0){
        ev = e.srcElement;
    } else {
        ev = e.target;
    }
    if(e || ev) {
        var $a = ev.tagName != 'A' ? $(ev).find("a") : $(ev);
        var $tabId = ev.tagName != 'A' ? $a.attr("data-id") : $a.parents("li").attr("data-id");
        if(!ev) {
            $a = $(e);
            $tabId = $a.parents("li").attr("data-id");
        }
        url =  $a.attr("data-href");
        addurl = $a.hasClass("add") ? $a.siblings(".name").attr("data-href") : $a.attr("data-href");
        name = $a.text();

        var $nav = $navList.find('a[data-id="'+ $tabId +'"]');
        var $tab = $iframe.find('iframe[data-id="'+ $tabId +'"]');

        if(typeof url == 'string' && url.match(/\?/)) {

            if($a.hasClass("add")) {
                name = $a.siblings(".name").text();
                $tab.attr("src", url);
            }

            if($nav.size() == 0 && $tab.size() == 0) {


                var tab_menu = '<a href="javascript:;" data-href="' + addurl + '" data-id="' + $tabId + '" class="current N_Tab" onclick="menutype(' + $tabId + ');" >' + name + '<i class="Refresh"></i><i class="close"></i></a>';
                var tab_iframe = '<iframe name="main'+ $tabId +'" id="Main' + $tabId + '" data-id="' + $tabId + '" src="' + url + '" frameborder="false" scrolling="auto"  width="100%" height="auto" allowtransparency="true" onload="win.SetWinHeight(this);"></iframe>';

                $iframe.find("iframe").hide();
                $navList.find("a").removeClass("current");
                $navList.append(tab_menu);
                $iframe.append(tab_iframe);
            }

            $nav.addClass("current").siblings().removeClass("current");
            $("#Main" + $tabId).show().siblings().hide();
            $("#Main" + $tabId).attr("src", url);
        }
    }
};

win.close = function(e) {
    if(navigator.userAgent.indexOf("MSIE 8.0")>0 && !window.innerWidth || navigator.userAgent.indexOf("MSIE 7.0")>0){
        ev = e.srcElement;
    } else {
        ev = e.target;
    }
    var $c = $(ev);
    var $tab = $c.parents("a").attr("data-id");
    var $win = $iframe.find('iframe[data-id="'+ $tab +'"]');

    var remove = function() {
        $c.parents("a").remove();
        $win.fadeOut(200, function(){
            $win.remove();
        });
    };

    if(ev.tagName == 'I') {
        if($c.hasClass("close")) {
            remove();
            if($c.parents("a").hasClass("current")) {
                $navList.find("a").last().addClass("current");
                setTimeout(function(){
                    $iframe.find("iframe").last().fadeIn(200);
                    menutype($navList.find("a").last().attr("data-id"));
                }, 250);
            }
        }
    }
};

win.Refresh = function(e) {
    if(navigator.userAgent.indexOf("MSIE 8.0")>0 && !window.innerWidth || navigator.userAgent.indexOf("MSIE 7.0")>0){
        ev = e.srcElement;
    } else {
        ev = e.target;
    }
    var $r = $(ev);
    var $tab = $r.parents("a").attr("data-id");
    if(ev.tagName == 'I') {
        if($r.hasClass("Refresh")) {
            $iframe.find('iframe[data-id="'+ $tab +'"]').attr("src", $r.parents("a").attr("data-href"));
        }
    }
};

win.Switching = function(e) {
    if(navigator.userAgent.indexOf("MSIE 8.0")>0 && !window.innerWidth || navigator.userAgent.indexOf("MSIE 7.0")>0){
        ev = e.srcElement;
    } else {
        ev = e.target;
    }
    var $obj = $(ev);
    if(ev.tagName == "A") {
        $obj.addClass("current").siblings().removeClass("current");
        $iframe.find("iframe").fadeOut(200);
        setTimeout(function() {
            $iframe.find("iframe").eq($obj.index()).fadeIn(200);
        }, 250);
    }
};

win.SetWinHeight = function(obj)
{
    var win=obj;
    if (document.getElementById)
    {
        if (win && !window.opera)
        {
            if (win.contentDocument && win.contentDocument.body.offsetHeight)
            {
                win.height = win.contentDocument.body.offsetHeight+86;
            }
            else if(win.Document && win.Document.body.scrollHeight)
            {
                win.height = win.contentDocument.body.offsetHeight+86;
            }
        }
    }
};


function menutype(leftmenuid){
    $(window.parent.$("#leftMenu ul li").removeClass("on"));
    $(window.parent.$("#li_"+leftmenuid).addClass("on"));
    $(window.parent.$("#li_"+leftmenuid).parents("dl").siblings().removeClass("on"));
    $(window.parent.$("#li_"+leftmenuid).parents("dl").addClass("on"));
    $(window.parent.$("#li_"+leftmenuid).parents("dl").siblings().find("dd").slideUp(300));
    $(window.parent.$("#li_"+leftmenuid).parents("dd").slideDown(300));
}

function iframeValue(e) {
    win.open(e);
}



if(navigator.userAgent.indexOf("MSIE 8.0")>0 && !window.innerWidth || navigator.userAgent.indexOf("MSIE 7.0")>0){
    Menu.attachEvent("onclick",win.open);
    TabNav.attachEvent("onclick",win.Switching);
    TabNav.attachEvent("onclick",win.close);
    TabNav.attachEvent("onclick",win.Refresh);
} else {
    Menu.addEventListener("click",win.open);
    TabNav.addEventListener("click",win.Switching);
    TabNav.addEventListener("click",win.close);
    TabNav.addEventListener("click",win.Refresh);
}
