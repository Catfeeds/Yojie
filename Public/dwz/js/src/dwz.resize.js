!function(e){e.fn.extend({jresize:function(t){return"string"==typeof t&&"destroy"==t?this.each(function(){var t=this;e("div[class^='resizable']",t).each(function(){e(this).hide()})}):this.each(function(){var t=e(this),r=e(".resizable");e("div[class^='resizable']",t).each(function(){var a=this;e(a).mousedown(function(n){return e.pdialog.switchDialog(t),e.resizeTool.start(r,t,n,e(a).attr("tar")),!1}).show()})})}}),e.resizeTool={start:function(t,r,a,n){e.pdialog.initResize(t,r,n),e.data(t[0],"layer-drag",{options:e.extend(e.pdialog._op,{target:n,dialog:r,stop:e.resizeTool.stop})}),e.layerdrag.start(t[0],a,e.pdialog._op)},stop:function(){var t=e.data(arguments[0],"layer-drag");e.pdialog.resizeDialog(arguments[0],t.options.dialog,t.options.target),e("body").css("cursor",""),e(arguments[0]).hide()}},e.layerdrag={start:function(t,r,a){return e.layerdrag.current||(e.layerdrag.current={el:t,oleft:parseInt(t.style.left)||0,owidth:parseInt(t.style.width)||0,otop:parseInt(t.style.top)||0,oheight:parseInt(t.style.height)||0,ox:r.pageX||r.screenX,oy:r.pageY||r.clientY},e(document).bind("mouseup",e.layerdrag.stop),e(document).bind("mousemove",e.layerdrag.drag)),e.layerdrag.preventEvent(r)},drag:function(t){if(!t)var t=window.event;var r=e.layerdrag.current,a=e.data(r.el,"layer-drag"),n=(t.pageX||t.screenX)-r.ox,o=(t.pageY||t.clientY)-r.oy;if((t.pageY||t.clientY)<=0||(t.pageY||t.clientY)>=e(window).height()-e(".dialogHeader",e(a.options.dialog)).outerHeight())return!1;var i=a.options.target,s=r.owidth,l=r.oheight;return"n"!=i&&"s"!=i&&(s+=i.indexOf("w")>=0?-n:n),s>=e.pdialog._op.minW&&(i.indexOf("w")>=0&&(r.el.style.left=r.oleft+n+"px"),"n"!=i&&"s"!=i&&(r.el.style.width=s+"px")),"w"!=i&&"e"!=i&&(l+=i.indexOf("n")>=0?-o:o),l>=e.pdialog._op.minH&&(i.indexOf("n")>=0&&(r.el.style.top=r.otop+o+"px"),"w"!=i&&"e"!=i&&(r.el.style.height=l+"px")),e.layerdrag.preventEvent(t)},stop:function(t){var r=e.layerdrag.current,a=e.data(r.el,"layer-drag");return e(document).unbind("mousemove",e.layerdrag.drag),e(document).unbind("mouseup",e.layerdrag.stop),a.options.stop&&a.options.stop.apply(r.el,[r.el]),e.layerdrag.current=null,e.layerdrag.preventEvent(t)},preventEvent:function(e){return e.stopPropagation&&e.stopPropagation(),e.preventDefault&&e.preventDefault(),!1}}}(jQuery);