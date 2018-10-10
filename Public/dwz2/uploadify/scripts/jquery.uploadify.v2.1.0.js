jQuery&&function(t){jQuery.extend(jQuery.fn,{uploadify:function(e){t(this).each(function(){settings=t.extend({id:t(this).attr("id"),uploader:"uploadify.swf",script:"uploadify.php",expressInstall:null,folder:"",height:30,width:110,cancelImg:"cancel.png",wmode:"opaque",scriptAccess:"sameDomain",fileDataName:"Filedata",method:"POST",queueSizeLimit:999,simUploadLimit:1,queueID:!1,displayData:"percentage",onInit:function(){},onSelect:function(){},onQueueFull:function(){},onCheck:function(){},onCancel:function(){},onError:function(){},onProgress:function(){},onComplete:function(){},onAllComplete:function(){}},e);var i=location.pathname;i=i.split("/"),i.pop(),i=i.join("/")+"/";var s={};if(s.uploadifyID=settings.id,s.pagepath=i,settings.buttonImg&&(s.buttonImg=escape(settings.buttonImg)),settings.buttonText&&(s.buttonText=escape(settings.buttonText)),settings.rollover&&(s.rollover=!0),s.script=settings.script,s.folder=escape(settings.folder),settings.scriptData){var a="";for(var n in settings.scriptData)a+="&"+n+"="+settings.scriptData[n];s.scriptData=escape(a.substr(1))}s.width=settings.width,s.height=settings.height,s.wmode=settings.wmode,s.method=settings.method,s.queueSizeLimit=settings.queueSizeLimit,s.simUploadLimit=settings.simUploadLimit,settings.hideButton&&(s.hideButton=!0),settings.fileDesc&&(s.fileDesc=settings.fileDesc),settings.fileExt&&(s.fileExt=settings.fileExt),settings.multi&&(s.multi=!0),settings.auto&&(s.auto=!0),settings.sizeLimit&&(s.sizeLimit=settings.sizeLimit),settings.checkScript&&(s.checkScript=settings.checkScript),settings.fileDataName&&(s.fileDataName=settings.fileDataName),settings.queueID&&(s.queueID=settings.queueID),settings.onInit()!==!1&&(t(this).css("display","none"),t(this).after('<div id="'+t(this).attr("id")+'Uploader"></div>'),swfobject.embedSWF(settings.uploader,settings.id+"Uploader",settings.width,settings.height,"9.0.24",settings.expressInstall,s,{quality:"high",wmode:settings.wmode,allowScriptAccess:settings.scriptAccess}),0==settings.queueID&&t("#"+t(this).attr("id")+"Uploader").after('<div id="'+t(this).attr("id")+'Queue" class="uploadifyQueue"></div>')),"function"==typeof settings.onOpen&&t(this).bind("uploadifyOpen",settings.onOpen),t(this).bind("uploadifySelect",{action:settings.onSelect,queueID:settings.queueID},function(e,i,s){if(e.data.action(e,i,s)!==!1){var a=.01*Math.round(s.size/1024*100),n="KB";a>1e3&&(a=.01*Math.round(.001*a*100),n="MB");var o=a.toString().split(".");a=o.length>1?o[0]+"."+o[1].substr(0,2):o[0],s.name.length>20?fileName=s.name.substr(0,20)+"...":fileName=s.name,queue="#"+t(this).attr("id")+"Queue",e.data.queueID&&(queue="#"+e.data.queueID),t(queue).append('<div id="'+t(this).attr("id")+i+'" class="uploadifyQueueItem">								<div class="cancel">									<a href="javascript:jQuery(\'#'+jQuery(this).attr("id")+"').uploadifyCancel('"+i+'\')"><img src="'+settings.cancelImg+'" border="0" /></a>								</div>								<span class="fileName">'+fileName+" ("+a+n+')</span><span class="percentage"></span>								<div class="uploadifyProgress">									<div id="'+jQuery(this).attr("id")+i+'ProgressBar" class="uploadifyProgressBar"><!--Progress Bar--></div>								</div>							</div>')}}),"function"==typeof settings.onSelectOnce&&t(this).bind("uploadifySelectOnce",settings.onSelectOnce),t(this).bind("uploadifyQueueFull",{action:settings.onQueueFull},function(t,e){t.data.action(t,e)!==!1&&alert("The queue is full.  The max size is "+e+".")}),t(this).bind("uploadifyCheckExist",{action:settings.onCheck},function(e,s,a,n,o){var l=new Object;if(l=a,l.folder=i+n,o)for(var r in a)var d=r;t.post(s,l,function(i){for(var l in i)if(e.data.action(e,s,a,n,o)!==!1){var r=confirm("Do you want to replace the file "+i[l]+"?");r||document.getElementById(t(e.target).attr("id")+"Uploader").cancelFileUpload(l,!0,!0)}o?document.getElementById(t(e.target).attr("id")+"Uploader").startFileUpload(d,!0):document.getElementById(t(e.target).attr("id")+"Uploader").startFileUpload(null,!0)},"json")}),t(this).bind("uploadifyCancel",{action:settings.onCancel},function(e,i,s,a,n){if(e.data.action(e,i,s,a,n)!==!1){var o=1==n?0:250;t("#"+t(this).attr("id")+i).fadeOut(o,function(){t(this).remove()})}}),"function"==typeof settings.onClearQueue&&t(this).bind("uploadifyClearQueue",settings.onClearQueue);var o=[];t(this).bind("uploadifyError",{action:settings.onError},function(e,i,s,a){if(e.data.action(e,i,s,a)!==!1){var n=new Array(i,s,a);o.push(n),t("#"+t(this).attr("id")+i+" .percentage").text(" - "+a.type+" Error"),t("#"+t(this).attr("id")+i).addClass("uploadifyError")}}),t(this).bind("uploadifyProgress",{action:settings.onProgress,toDisplay:settings.displayData},function(e,i,s,a){e.data.action(e,i,s,a)!==!1&&(t("#"+t(this).attr("id")+i+"ProgressBar").css("width",a.percentage+"%"),"percentage"==e.data.toDisplay&&(displayData=" - "+a.percentage+"%"),"speed"==e.data.toDisplay&&(displayData=" - "+a.speed+"KB/s"),null==e.data.toDisplay&&(displayData=" "),t("#"+t(this).attr("id")+i+" .percentage").text(displayData))}),t(this).bind("uploadifyComplete",{action:settings.onComplete},function(e,i,s,a,n){e.data.action(e,i,s,unescape(a),n)!==!1&&(t("#"+t(this).attr("id")+i+" .percentage").text(" - Completed"),t("#"+t(this).attr("id")+i).fadeOut(250,function(){t(this).remove()}))}),"function"==typeof settings.onAllComplete&&t(this).bind("uploadifyAllComplete",{action:settings.onAllComplete},function(t,e){t.data.action(t,e)!==!1&&(o=[])})})},uploadifySettings:function(e,i,s){var a=!1;if(t(this).each(function(){if("scriptData"==e&&null!=i){if(s)var n=i;else var n=t.extend(settings.scriptData,i);var o="";for(var l in n)o+="&"+l+"="+escape(n[l]);i=o.substr(1)}a=document.getElementById(t(this).attr("id")+"Uploader").updateSettings(e,i)}),null==i){if("scriptData"==e){for(var n=unescape(a).split("&"),o=new Object,l=0;l<n.length;l++){var r=n[l].split("=");o[r[0]]=r[1]}a=o}return a}},uploadifyUpload:function(e){t(this).each(function(){document.getElementById(t(this).attr("id")+"Uploader").startFileUpload(e,!1)})},uploadifyCancel:function(e){t(this).each(function(){document.getElementById(t(this).attr("id")+"Uploader").cancelFileUpload(e,!0,!1)})},uploadifyClearQueue:function(){t(this).each(function(){document.getElementById(t(this).attr("id")+"Uploader").clearFileUploadQueue(!1)})}})}(jQuery);