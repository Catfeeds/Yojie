!function(t){t.fn.cssv=function(i){var e=t(this).css(i);return 1*e.substring(0,e.indexOf("px"))},t.fn.jBar=function(i){var e=t.extend({container:"#container",collapse:".collapse",toggleBut:".toggleCollapse div",sideBar:"#sidebar",sideBar2:"#sidebar_s",splitBar:"#splitBar",splitBar2:"#splitBarProxy"},i);return this.each(function(){var n=this,s=t(e.sideBar2,n),r=t(e.sideBar,n);t(e.toggleBut,r).click(function(){DWZ.ui.sbar=!1,t(e.splitBar).hide();var i=s.cssv("left")+s.outerWidth(),n=i-r.outerWidth(),o=t(e.container).cssv("left")-(r.outerWidth()-s.outerWidth()),a=r.outerWidth()-s.outerWidth()+t(e.container).outerWidth();return t(e.container).animate({left:o,width:a},50,function(){r.animate({left:n},500,function(){r.hide(),s.show().css("left",-50).animate({left:5},200),t(window).trigger("resizeGrid")})}),t(e.collapse,s).click(function(){function i(){t(e.container).unbind("click",i),DWZ.ui.sbar||r.animate({left:n},500,function(){r.hide()})}var o=s.cssv("left")+s.outerWidth();return r.is(":hidden")?(t(e.toggleBut,r).hide(),r.show().animate({left:o},500),t(e.container).click(i)):r.animate({left:n},500,function(){r.hide()}),!1}),!1}),t(e.toggleBut,s).click(function(){return DWZ.ui.sbar=!0,s.animate({left:-25},200,function(){r.show()}),r.animate({left:5},800,function(){t(e.splitBar).show(),t(e.toggleBut,r).show();var i=5+r.outerWidth()+t(e.splitBar).outerWidth(),n=t(e.container).outerWidth()-(i-t(e.container).cssv("left"));t(e.container).css({left:i,width:n}),t(e.collapse,s).unbind("click"),t(window).trigger("resizeGrid")}),!1}),t(e.splitBar).mousedown(function(n){t(e.splitBar2).each(function(){var s=t(this);return setTimeout(function(){s.show()},100),s.css({visibility:"visible",left:t(e.splitBar).css("left")}),s.jDrag(t.extend(i,{obj:t("#sidebar"),move:"horizontal",event:n,stop:function(){t(this).css("visibility","hidden");var i=t(this).cssv("left")-t(e.splitBar).cssv("left"),n=r.outerWidth()+i,s=t(e.container).cssv("left")+i,o=t(e.container).outerWidth()-i;r.css("width",n),t(e.splitBar).css("left",t(this).css("left")),t(e.container).css({left:s,width:o})}})),!1})})})}}(jQuery);