function startCheckOrder(){checkOrder(),window.setInterval("checkOrder()",NEW_ORDER_INTERVAL)}function checkOrder(){var e=new Date(document.getCookie("ECS_LastCheckOrder")),t=new Date;if(null==e||t-e>=NEW_ORDER_INTERVAL){document.setCookie("ECS_LastCheckOrder",t.toGMTString());try{Ajax.call("index.php?is_ajax=1&act=check_order","",checkOrderResponse,"GET","JSON")}catch(n){}}}function checkOrderResponse(e){if(0==e.error&&(0!=e.new_orders||0!=e.new_paid))try{document.getElementById("spanNewOrder").innerHTML=e.new_orders,document.getElementById("spanNewPaid").innerHTML=e.new_paid,Message.show()}catch(t){}}function confirm_redirect(e,t){confirm(e)&&(location.href=t)}function set_size(e){var t=document.body.clientWidth,n=(screen.width,navigator.userAgent.toLowerCase());e>t&&(-1!=n.indexOf("msie")?document.body.style.width=e+"px":document.getElementById("bd").style.width=e-10+"px")}function showImg(e,t){"show"==t?document.getElementById(e).style.visibility="visible":document.getElementById(e).style.visibility="hidden"}function $import(e,t,n){var s,o;if("js"==t){var r=document.getElementsByTagName("script");for(o=0;o<r.length;o++)if(r[o].src&&-1!=r[o].src.indexOf(e))return r[o];s=document.createElement("script"),s.type="text/javascript",s.src=e}else{if("css"!=t)return;var a=document.getElementsByTagName("link");for(o=0;o<a.length;o++)if(a[o].href&&-1!=a[o].href.indexOf(e))return a[o];s=document.createElement("link"),s.rel="alternate stylesheet",s.type="text/css",s.href=e,s.title=n,s.disabled=!1}var i=document.getElementsByTagName("head")[0];return i.appendChild(s),s}function rand_str(e){var t=new Date,n=t.getTime();n=e+n;var s=Math.random();return s=Math.floor(100*s),n+s}var NEW_ORDER_INTERVAL=18e4,Message=Object();Message.bottom=0,Message.count=0,Message.elem="popMsg",Message.mvTimer=null,Message.show=function(){try{Message.controlSound("msgBeep"),document.getElementById(Message.elem).style.visibility="visible",document.getElementById(Message.elem).style.display="block",Message.bottom=0-parseInt(document.getElementById(Message.elem).offsetHeight),Message.mvTimer=window.setInterval("Message.move()",10),document.getElementById(Message.elem).style.bottom=Message.bottom+"px"}catch(e){alert(e)}},Message.move=function(){try{0==Message.bottom&&(window.clearInterval(Message.mvTimer),Message.mvTimer=window.setInterval("Message.close()",1e4)),Message.bottom++,document.getElementById(Message.elem).style.bottom=Message.bottom+"px"}catch(e){alert(e)}},Message.close=function(){document.getElementById(Message.elem).style.visibility="hidden",document.getElementById(Message.elem).style.display="none",Message.mvTimer&&window.clearInterval(Message.mvTimer)},Message.controlSound=function(e){sndObj=document.getElementById(e);try{sndObj.Play()}catch(t){}};var listZone=new Object;listZone.showLoader=function(){listZone.toggleLoader(!0)},listZone.hideLoader=function(){listZone.toggleLoader(!1)},listZone.toggleLoader=function(e){document.getElementsByTagName("body").item(0).style.cursor=e?"wait":"auto";try{var t=top.frames["header-frame"].document,n=t.getElementById("load-div");"object"==typeof n&&(n.style.display=e?"block":"none")}catch(s){}};