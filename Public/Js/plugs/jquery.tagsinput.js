!function(t){t.fn.tagsinput=function(){function e(e,r){_this=r||_this,e.stopPropagation();var o=e.keyCode||e.which||e.charCode,i=t("#checkfor tbody tr.current");switch(o){case 38:i.prev().length&&(i.removeClass("current"),i.prev().addClass("current"),s(i.prev(),this));break;case 40:i.next().length&&(i.removeClass("current"),i.next().addClass("current"),s(i.next(),this));break;case 13:e.preventDefault(),i.log("this is the enter get value").trigger("click");break;case 27:a();break;case 8:if(""==_this.val()){var n=_this.closest("ul").find("li:not(.addresseeText)");n.last("li").remove(),a()}break;case 27:a()}}function r(e,r){var i=r.attr("checkfor"),s=r.attr("litmit"),c=r.attr("order"),l=r.attr("map"),h=r.attr("fields"),d=r.attr("other"),u=r.attr("m"),f=r.attr("appendurl"),g=TP_APP+"/CheckFor/check",p=r.attr("callback"),b=""==r.attr("iswrite")?!1:!0;f&&(g=g+"/"+f+"/accesstype/plugs"),t.ajax({type:"POST",url:g,data:{m:u,other:d,fields:h,map:l,order:c,limit:s,checkfor:i,con:e},async:!0,success:function(e){var i=t(e);t("#"+n).remove(),t("body").append(i).log("append the eval html");var s=18,c=r.offset(),l=t(window),h=t("#"+n),d=h.outerHeight(!0)+s,u=h.outerWidth(!0),f=c.left+u-l.width(),g=c.top+d-l.height(),v=f>0?c.left-u+r.outerWidth():c.left,k=g>0?c.top-d:c.top+r.outerHeight();i.css({left:v,top:k}),t("table",i).height()+s>200&&i.css({overflow:"scroll",height:233}),t.log("自动清除功能:"+t("#"+n+" table",i).length+"__iswrite:"+b),1==b&&0==t("#"+n+" table").length&&r.val(""),t.log(typeof p+"__"+p),""!=p&&void 0!=p&&r.one("callback",function(t,e){window[p](e,r)}),t("tbody tr").mouseover(function(){tr=t(this),tr.addClass("current").siblings(".current").removeClass("current")}),t("tbody > tr").click(function(){o(!0,r),a()})},global:!1})}function o(e,r){_this=r||_this;var o=(""==_this.attr("iswrite")?!1:!0,""==_this.attr("insert")?"id":_this.attr("insert")),a=""==_this.attr("show")?"name":_this.attr("show"),s=_this.attr("other"),c=_this.attr("callback"),l=t("#"+n+" tbody tr.current"),h=l.children("."+o).text(),d=l.children("."+a).text(),u=_this.siblings('input[type="hidden"]');if(_this.prev('[auto="1"]').val(d),_this.val(d).focus().log("set val:"+d),u.val(h).log("resout "+h),e&&(s&&setOther(),c)){t.log(c);for(var f,g,p,b=l.children(),v=b.length,k={show:d,insert:h,theInput:_this,callbacktype:"checkfor"},y=0;v>y;y++)f=t(b[y]),g=f.attr("class"),p=f.text(),k[g]=p,v==y+1&&i(k)}}function i(e){t.log("common on"+e);try{t.log("go to func"),_this.trigger("callback",[e]),_this.unbind("callback")}catch(r){t.log(r.toString())}}function a(){t("#"+n).remove()}function s(e,r){tagsObj=t("#"+n);var o=tagsObj.scrollTop(),i=e.position().top,a=tagsObj.outerHeight(!0);i+27>a?tagsObj.scrollTop(o+54):0>i-27&&tagsObj.scrollTop(o-27)}var n="checkfor";t.each(t(this),function(){var o=t(this);o.attr("autocomplete","off");o.attr("iswrite"),""==o.attr("insert")?"id":o.attr("insert"),""==o.attr("show")?"name":o.attr("show"),o.attr("callback"),o.siblings('input[type="hidden"]'),o.find("tbody tr.current");o.parent().css("zIndex","10"),o.bind("keyup",function(e){t.log("绑定事件地方"),37!=e.keyCode&&38!=e.keyCode&&39!=e.keyCode&&40!=e.keyCode&&13!=e.keyCode&&27!=e.keyCode&&r(o.val(),o)}),t.browser.mozilla?o.bind("keypress",function(t){e(t,o)}).log("the event is binds"):o.bind("keydown",function(t){e(t,o)})}),t("body").bind("click",function(){a()})}}(jQuery);