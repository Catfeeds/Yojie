var swfobject=function(){function e(){if(!B){try{var e=k.getElementsByTagName("body")[0].appendChild(v("span"));e.parentNode.removeChild(e)}catch(t){return}B=!0;for(var a=W.length,i=0;a>i;i++)W[i]()}}function t(e){B?e():W[W.length]=e}function a(e){if(typeof N.addEventListener!=w)N.addEventListener("load",e,!1);else if(typeof k.addEventListener!=w)k.addEventListener("load",e,!1);else if(typeof N.attachEvent!=w)g(N,"onload",e);else if("function"==typeof N.onload){var t=N.onload;N.onload=function(){t(),e()}}else N.onload=e}function i(){P?s():o()}function s(){var e=k.getElementsByTagName("body")[0],t=v(C);t.setAttribute("type",I);var a=e.appendChild(t);if(a){var i=0;!function(){if(typeof a.GetVariable!=w){var s=a.GetVariable("$version");s&&(s=s.split(" ")[1].split(","),V.pv=[parseInt(s[0],10),parseInt(s[1],10),parseInt(s[2],10)])}else if(10>i)return i++,void setTimeout(arguments.callee,10);e.removeChild(t),a=null,o()}()}else o()}function o(){var e=z.length;if(e>0)for(var t=0;e>t;t++){var a=z[t].id,i=z[t].callbackFn,s={success:!1,id:a};if(V.pv[0]>0){var o=m(a);if(o)if(!y(z[t].swfVersion)||V.wk&&V.wk<312)if(z[t].expressInstall&&l()){var d={};d.data=z[t].expressInstall,d.width=o.getAttribute("width")||"0",d.height=o.getAttribute("height")||"0",o.getAttribute("class")&&(d.styleclass=o.getAttribute("class")),o.getAttribute("align")&&(d.align=o.getAttribute("align"));for(var p={},c=o.getElementsByTagName("param"),f=c.length,h=0;f>h;h++)"movie"!=c[h].getAttribute("name").toLowerCase()&&(p[c[h].getAttribute("name")]=c[h].getAttribute("value"));r(d,p,a,i)}else u(o),i&&i(s);else D(a,!0),i&&(s.success=!0,s.ref=n(a),i(s))}else if(D(a,!0),i){var v=n(a);v&&typeof v.SetVariable!=w&&(s.success=!0,s.ref=v),i(s)}}}function n(e){var t=null,a=m(e);if(a&&"OBJECT"==a.nodeName)if(typeof a.SetVariable!=w)t=a;else{var i=a.getElementsByTagName(C)[0];i&&(t=i)}return t}function l(){return!$&&y("6.0.65")&&(V.win||V.mac)&&!(V.wk&&V.wk<312)}function r(e,t,a,i){$=!0,U=i||null,q={success:!1,id:a};var s=m(a);if(s){"OBJECT"==s.nodeName?(b=d(s),_=null):(b=s,_=a),e.id=F,(typeof e.width==w||!/%$/.test(e.width)&&parseInt(e.width,10)<310)&&(e.width="310"),(typeof e.height==w||!/%$/.test(e.height)&&parseInt(e.height,10)<137)&&(e.height="137"),k.title=k.title.slice(0,47)+" - Flash Player Installation";var o=V.ie&&V.win?"ActiveX":"PlugIn",n="MMredirectURL="+N.location.toString().replace(/&/g,"%26")+"&MMplayerType="+o+"&MMdoctitle="+k.title;if(typeof t.flashvars!=w?t.flashvars+="&"+n:t.flashvars=n,V.ie&&V.win&&4!=s.readyState){var l=v("div");a+="SWFObjectNew",l.setAttribute("id",a),s.parentNode.insertBefore(l,s),s.style.display="none",function(){4==s.readyState?s.parentNode.removeChild(s):setTimeout(arguments.callee,10)}()}p(e,t,a)}}function u(e){if(V.ie&&V.win&&4!=e.readyState){var t=v("div");e.parentNode.insertBefore(t,e),t.parentNode.replaceChild(d(e),t),e.style.display="none",function(){4==e.readyState?e.parentNode.removeChild(e):setTimeout(arguments.callee,10)}()}else e.parentNode.replaceChild(d(e),e)}function d(e){var t=v("div");if(V.win&&V.ie)t.innerHTML=e.innerHTML;else{var a=e.getElementsByTagName(C)[0];if(a){var i=a.childNodes;if(i)for(var s=i.length,o=0;s>o;o++)1==i[o].nodeType&&"PARAM"==i[o].nodeName||8==i[o].nodeType||t.appendChild(i[o].cloneNode(!0))}}return t}function p(e,t,a){var i,s=m(a);if(V.wk&&V.wk<312)return i;if(s)if(typeof e.id==w&&(e.id=a),V.ie&&V.win){var o="";for(var n in e)e[n]!=Object.prototype[n]&&("data"==n.toLowerCase()?t.movie=e[n]:"styleclass"==n.toLowerCase()?o+=' class="'+e[n]+'"':"classid"!=n.toLowerCase()&&(o+=" "+n+'="'+e[n]+'"'));var l="";for(var r in t)t[r]!=Object.prototype[r]&&(l+='<param name="'+r+'" value="'+t[r]+'" />');s.outerHTML='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"'+o+">"+l+"</object>",M[M.length]=e.id,i=m(e.id)}else{var u=v(C);u.setAttribute("type",I);for(var d in e)e[d]!=Object.prototype[d]&&("styleclass"==d.toLowerCase()?u.setAttribute("class",e[d]):"classid"!=d.toLowerCase()&&u.setAttribute(d,e[d]));for(var p in t)t[p]!=Object.prototype[p]&&"movie"!=p.toLowerCase()&&c(u,p,t[p]);s.parentNode.replaceChild(u,s),i=u}return i}function c(e,t,a){var i=v("param");i.setAttribute("name",t),i.setAttribute("value",a),e.appendChild(i)}function f(e){var t=m(e);t&&"OBJECT"==t.nodeName&&(V.ie&&V.win?(t.style.display="none",function(){4==t.readyState?h(e):setTimeout(arguments.callee,10)}()):t.parentNode.removeChild(t))}function h(e){var t=m(e);if(t){for(var a in t)"function"==typeof t[a]&&(t[a]=null);t.parentNode.removeChild(t)}}function m(e){var t=null;try{t=k.getElementById(e)}catch(a){}return t}function v(e){return k.createElement(e)}function g(e,t,a){e.attachEvent(t,a),Q[Q.length]=[e,t,a]}function y(e){var t=V.pv,a=e.split(".");return a[0]=parseInt(a[0],10),a[1]=parseInt(a[1],10)||0,a[2]=parseInt(a[2],10)||0,t[0]>a[0]||t[0]==a[0]&&t[1]>a[1]||t[0]==a[0]&&t[1]==a[1]&&t[2]>=a[2]?!0:!1}function E(e,t,a,i){if(!V.ie||!V.mac){var s=k.getElementsByTagName("head")[0];if(s){var o=a&&"string"==typeof a?a:"screen";if(i&&(T=null,L=null),!T||L!=o){var n=v("style");n.setAttribute("type","text/css"),n.setAttribute("media",o),T=s.appendChild(n),V.ie&&V.win&&typeof k.styleSheets!=w&&k.styleSheets.length>0&&(T=k.styleSheets[k.styleSheets.length-1]),L=o}V.ie&&V.win?T&&typeof T.addRule==C&&T.addRule(e,t):T&&typeof k.createTextNode!=w&&T.appendChild(k.createTextNode(e+" {"+t+"}"))}}}function D(e,t){if(j){var a=t?"visible":"hidden";B&&m(e)?m(e).style.visibility=a:E("#"+e,"visibility:"+a)}}function S(e){var t=/[\\\"<>\.;]/,a=null!=t.exec(e);return a&&typeof encodeURIComponent!=w?encodeURIComponent(e):e}var b,_,U,q,T,L,w="undefined",C="object",O="Shockwave Flash",R="ShockwaveFlash.ShockwaveFlash",I="application/x-shockwave-flash",F="SWFObjectExprInst",A="onreadystatechange",N=window,k=document,x=navigator,P=!1,W=[i],z=[],M=[],Q=[],B=!1,$=!1,j=!0,V=function(){var e=typeof k.getElementById!=w&&typeof k.getElementsByTagName!=w&&typeof k.createElement!=w,t=x.userAgent.toLowerCase(),a=x.platform.toLowerCase(),i=a?/win/.test(a):/win/.test(t),s=a?/mac/.test(a):/mac/.test(t),o=/webkit/.test(t)?parseFloat(t.replace(/^.*webkit\/(\d+(\.\d+)?).*$/,"$1")):!1,n=!1,l=[0,0,0],r=null;if(typeof x.plugins!=w&&typeof x.plugins[O]==C)r=x.plugins[O].description,!r||typeof x.mimeTypes!=w&&x.mimeTypes[I]&&!x.mimeTypes[I].enabledPlugin||(P=!0,n=!1,r=r.replace(/^.*\s+(\S+\s+\S+$)/,"$1"),l[0]=parseInt(r.replace(/^(.*)\..*$/,"$1"),10),l[1]=parseInt(r.replace(/^.*\.(.*)\s.*$/,"$1"),10),l[2]=/[a-zA-Z]/.test(r)?parseInt(r.replace(/^.*[a-zA-Z]+(.*)$/,"$1"),10):0);else if(typeof N.ActiveXObject!=w)try{var u=new ActiveXObject(R);u&&(r=u.GetVariable("$version"),r&&(n=!0,r=r.split(" ")[1].split(","),l=[parseInt(r[0],10),parseInt(r[1],10),parseInt(r[2],10)]))}catch(d){}return{w3:e,pv:l,wk:o,ie:n,win:i,mac:s}}();(function(){V.w3&&((typeof k.readyState!=w&&"complete"==k.readyState||typeof k.readyState==w&&(k.getElementsByTagName("body")[0]||k.body))&&e(),B||(typeof k.addEventListener!=w&&k.addEventListener("DOMContentLoaded",e,!1),V.ie&&V.win&&(k.attachEvent(A,function(){"complete"==k.readyState&&(k.detachEvent(A,arguments.callee),e())}),N==top&&!function(){if(!B){try{k.documentElement.doScroll("left")}catch(t){return void setTimeout(arguments.callee,0)}e()}}()),V.wk&&!function(){return B?void 0:/loaded|complete/.test(k.readyState)?void e():void setTimeout(arguments.callee,0)}(),a(e)))})(),function(){V.ie&&V.win&&window.attachEvent("onunload",function(){for(var e=Q.length,t=0;e>t;t++)Q[t][0].detachEvent(Q[t][1],Q[t][2]);for(var a=M.length,i=0;a>i;i++)f(M[i]);for(var s in V)V[s]=null;V=null;for(var o in swfobject)swfobject[o]=null;swfobject=null})}();return{registerObject:function(e,t,a,i){if(V.w3&&e&&t){var s={};s.id=e,s.swfVersion=t,s.expressInstall=a,s.callbackFn=i,z[z.length]=s,D(e,!1)}else i&&i({success:!1,id:e})},getObjectById:function(e){return V.w3?n(e):void 0},embedSWF:function(e,a,i,s,o,n,u,d,c,f){var h={success:!1,id:a};V.w3&&!(V.wk&&V.wk<312)&&e&&a&&i&&s&&o?(D(a,!1),t(function(){i+="",s+="";var t={};if(c&&typeof c===C)for(var m in c)t[m]=c[m];t.data=e,t.width=i,t.height=s;var v={};if(d&&typeof d===C)for(var g in d)v[g]=d[g];if(u&&typeof u===C)for(var E in u)typeof v.flashvars!=w?v.flashvars+="&"+E+"="+u[E]:v.flashvars=E+"="+u[E];if(y(o)){var S=p(t,v,a);t.id==a&&D(a,!0),h.success=!0,h.ref=S}else{if(n&&l())return t.data=n,void r(t,v,a,f);D(a,!0)}f&&f(h)})):f&&f(h)},switchOffAutoHideShow:function(){j=!1},ua:V,getFlashPlayerVersion:function(){return{major:V.pv[0],minor:V.pv[1],release:V.pv[2]}},hasFlashPlayerVersion:y,createSWF:function(e,t,a){return V.w3?p(e,t,a):void 0},showExpressInstall:function(e,t,a,i){V.w3&&l()&&r(e,t,a,i)},removeSWF:function(e){V.w3&&f(e)},createCSS:function(e,t,a,i){V.w3&&E(e,t,a,i)},addDomLoadEvent:t,addLoadEvent:a,getQueryParamValue:function(e){var t=k.location.search||k.location.hash;if(t){if(/\?/.test(t)&&(t=t.split("?")[1]),null==e)return S(t);for(var a=t.split("&"),i=0;i<a.length;i++)if(a[i].substring(0,a[i].indexOf("="))==e)return S(a[i].substring(a[i].indexOf("=")+1))}return""},expressInstallCallback:function(){if($){var e=m(F);e&&b&&(e.parentNode.replaceChild(b,e),_&&(D(_,!0),V.ie&&V.win&&(b.style.display="block")),U&&U(q)),$=!1}}}}();!function(e){var t={init:function(t,i){return this.each(function(){var s=e(this),o=s.clone(),n=e.extend({id:s.attr("id"),swf:"uploadify.swf",uploader:"uploadify.php",auto:!0,buttonClass:"",buttonCursor:"hand",buttonImage:null,buttonText:"SELECT FILES",checkExisting:!1,debug:!1,fileObjName:"Filedata",fileSizeLimit:0,fileTypeDesc:"All Files",fileTypeExts:"*.*",height:30,itemTemplate:!1,method:"post",multi:!0,formData:{},preventCaching:!0,progressData:"percentage",queueID:!1,queueSizeLimit:999,removeCompleted:!0,removeTimeout:3,requeueErrors:!1,successTimeout:30,uploadLimit:0,width:120,overrideEvents:[]},t),l={assume_success_timeout:n.successTimeout,button_placeholder_id:n.id,button_width:n.width,button_height:n.height,button_text:null,button_text_style:null,button_text_top_padding:0,button_text_left_padding:0,button_action:n.multi?SWFUpload.BUTTON_ACTION.SELECT_FILES:SWFUpload.BUTTON_ACTION.SELECT_FILE,button_disabled:!1,button_cursor:"arrow"==n.buttonCursor?SWFUpload.CURSOR.ARROW:SWFUpload.CURSOR.HAND,button_window_mode:SWFUpload.WINDOW_MODE.TRANSPARENT,debug:n.debug,requeue_on_error:n.requeueErrors,file_post_name:n.fileObjName,file_size_limit:n.fileSizeLimit,file_types:n.fileTypeExts,file_types_description:n.fileTypeDesc,file_queue_limit:n.queueSizeLimit,file_upload_limit:n.uploadLimit,flash_url:n.swf,prevent_swf_caching:n.preventCaching,post_params:n.formData,upload_url:n.uploader,use_query_string:"get"==n.method,file_dialog_complete_handler:a.onDialogClose,file_dialog_start_handler:a.onDialogOpen,file_queued_handler:a.onSelect,file_queue_error_handler:a.onSelectError,swfupload_loaded_handler:n.onSWFReady,upload_complete_handler:a.onUploadComplete,upload_error_handler:a.onUploadError,upload_progress_handler:a.onUploadProgress,upload_start_handler:a.onUploadStart,upload_success_handler:a.onUploadSuccess};i&&(l=e.extend(l,i)),l=e.extend(l,n);var r=swfobject.getFlashPlayerVersion(),u=r.major>=9;if(u){window["uploadify_"+n.id]=new SWFUpload(l);var d=window["uploadify_"+n.id];s.data("uploadify",d);var p=e("<div />",{id:n.id,"class":"uploadify",css:{height:n.height+"px",width:n.width+"px"}});e("#"+d.movieName).wrap(p),p=e("#"+n.id),p.data("uploadify",d);var c=e("<div />",{id:n.id+"-button","class":"uploadify-button "+n.buttonClass});if(n.buttonImage&&c.css({"background-image":"url('"+n.buttonImage+"')","text-indent":"-9999px"}),c.html('<span class="uploadify-button-text">'+n.buttonText+"</span>").css({height:n.height+"px","line-height":n.height+"px",width:n.width+"px"}),p.append(c),e("#"+d.movieName).css({position:"absolute","z-index":1}),!n.queueID){var f=e("<div />",{id:n.id+"-queue","class":"uploadify-queue"});p.after(f),d.settings.queueID=n.id+"-queue",d.settings.defaultQueue=!0}d.queueData={files:{},filesSelected:0,filesQueued:0,filesReplaced:0,filesCancelled:0,filesErrored:0,uploadsSuccessful:0,uploadsErrored:0,averageSpeed:0,queueLength:0,queueSize:0,uploadSize:0,queueBytesUploaded:0,uploadQueue:[],errorMsg:"Some files were not added to the queue:"},d.original=o,d.wrapper=p,d.button=c,d.queue=f,n.onInit&&n.onInit.call(s,d)}else n.onFallback&&n.onFallback.call(s)})},cancel:function(t,a){var i=arguments;this.each(function(){var t=e(this),a=t.data("uploadify"),s=a.settings,o=-1;if(i[0])if("*"==i[0]){var n=a.queueData.queueLength;e("#"+s.queueID).find(".uploadify-queue-item").each(function(){o++,i[1]===!0?a.cancelUpload(e(this).attr("id"),!1):a.cancelUpload(e(this).attr("id")),e(this).find(".data").removeClass("data").html(" - Cancelled"),e(this).find(".uploadify-progress-bar").remove(),e(this).delay(1e3+100*o).fadeOut(500,function(){e(this).remove()})}),a.queueData.queueSize=0,a.queueData.queueLength=0,s.onClearQueue&&s.onClearQueue.call(t,n)}else for(var l=0;l<i.length;l++)a.cancelUpload(i[l]),e("#"+i[l]).find(".data").removeClass("data").html(" - Cancelled"),e("#"+i[l]).find(".uploadify-progress-bar").remove(),e("#"+i[l]).delay(1e3+100*l).fadeOut(500,function(){e(this).remove()});else{var r=e("#"+s.queueID).find(".uploadify-queue-item").get(0);$item=e(r),a.cancelUpload($item.attr("id")),$item.find(".data").removeClass("data").html(" - Cancelled"),$item.find(".uploadify-progress-bar").remove(),$item.delay(1e3).fadeOut(500,function(){e(this).remove()})}})},destroy:function(){this.each(function(){var t=e(this),a=t.data("uploadify"),i=a.settings;a.destroy(),i.defaultQueue&&e("#"+i.queueID).remove(),e("#"+i.id).replaceWith(a.original),i.onDestroy&&i.onDestroy.call(this),delete a})},disable:function(t){this.each(function(){var a=e(this),i=a.data("uploadify"),s=i.settings;t?(i.button.addClass("disabled"),s.onDisable&&s.onDisable.call(this)):(i.button.removeClass("disabled"),s.onEnable&&s.onEnable.call(this)),i.setButtonDisabled(t)})},settings:function(t,a,i){var s=arguments,o=a;return this.each(function(){var n=e(this),l=n.data("uploadify"),r=l.settings;if("object"==typeof s[0])for(var u in a)setData(u,a[u]);if(1===s.length)o=r[t];else{switch(t){case"uploader":l.setUploadURL(a);break;case"formData":i||(a=e.extend(r.formData,a)),l.setPostParams(r.formData);break;case"method":"get"==a?l.setUseQueryString(!0):l.setUseQueryString(!1);break;case"fileObjName":l.setFilePostName(a);break;case"fileTypeExts":l.setFileTypes(a,r.fileTypeDesc);break;case"fileTypeDesc":l.setFileTypes(r.fileTypeExts,a);break;case"fileSizeLimit":l.setFileSizeLimit(a);break;case"uploadLimit":l.setFileUploadLimit(a);break;case"queueSizeLimit":l.setFileQueueLimit(a);break;case"buttonImage":l.button.css("background-image",settingValue);break;case"buttonCursor":"arrow"==a?l.setButtonCursor(SWFUpload.CURSOR.ARROW):l.setButtonCursor(SWFUpload.CURSOR.HAND);break;case"buttonText":e("#"+r.id+"-button").find(".uploadify-button-text").html(a);break;case"width":l.setButtonDimensions(a,r.height);break;case"height":l.setButtonDimensions(r.width,a);break;case"multi":a?l.setButtonAction(SWFUpload.BUTTON_ACTION.SELECT_FILES):l.setButtonAction(SWFUpload.BUTTON_ACTION.SELECT_FILE)}r[t]=a}}),1===s.length?o:void 0},stop:function(){this.each(function(){var t=e(this),a=t.data("uploadify");a.queueData.averageSpeed=0,a.queueData.uploadSize=0,a.queueData.bytesUploaded=0,a.queueData.uploadQueue=[],a.stopUpload()})},upload:function(){var t=arguments;this.each(function(){var a=e(this),i=a.data("uploadify");if(i.queueData.averageSpeed=0,i.queueData.uploadSize=0,i.queueData.bytesUploaded=0,i.queueData.uploadQueue=[],t[0])if("*"==t[0])i.queueData.uploadSize=i.queueData.queueSize,i.queueData.uploadQueue.push("*"),i.startUpload();else{for(var s=0;s<t.length;s++)i.queueData.uploadSize+=i.queueData.files[t[s]].size,i.queueData.uploadQueue.push(t[s]);i.startUpload(i.queueData.uploadQueue.shift())}else i.startUpload()})}},a={onDialogOpen:function(){var e=this.settings;this.queueData.errorMsg="Some files were not added to the queue:",this.queueData.filesReplaced=0,this.queueData.filesCancelled=0,e.onDialogOpen&&e.onDialogOpen.call(this)},onDialogClose:function(t,a,i){var s=this.settings;this.queueData.filesErrored=t-a,this.queueData.filesSelected=t,this.queueData.filesQueued=a-this.queueData.filesCancelled,this.queueData.queueLength=i,e.inArray("onDialogClose",s.overrideEvents)<0&&this.queueData.filesErrored>0&&alert(this.queueData.errorMsg),s.onDialogClose&&s.onDialogClose.call(this,this.queueData),s.auto&&e("#"+s.id).uploadify("upload","*")},onSelect:function(t){var a=this.settings,i={};for(var s in this.queueData.files)if(i=this.queueData.files[s],1!=i.uploaded&&i.name==t.name){var o=confirm('The file named "'+t.name+'" is already in the queue.\nDo you want to replace the existing item in the queue?');if(!o)return this.cancelUpload(t.id),this.queueData.filesCancelled++,!1;e("#"+i.id).remove(),this.cancelUpload(i.id),this.queueData.filesReplaced++}var n=Math.round(t.size/1024),l="KB";n>1e3&&(n=Math.round(n/1e3),l="MB");var r=n.toString().split(".");n=r[0],r.length>1&&(n+="."+r[1].substr(0,2)),n+=l;var u=t.name;if(u.length>25&&(u=u.substr(0,25)+"..."),itemData={fileID:t.id,instanceID:a.id,fileName:u,fileSize:n},0==a.itemTemplate&&(a.itemTemplate='<div id="${fileID}" class="uploadify-queue-item">					<div class="cancel">						<a href="javascript:$(\'#${instanceID}\').uploadify(\'cancel\', \'${fileID}\')">X</a>					</div>					<span class="fileName">${fileName} (${fileSize})</span><span class="data"></span>					<span style="display:none;" class="swf_upload_save_name"></span>					<div class="uploadify-progress">						<div class="uploadify-progress-bar"><!--Progress Bar--></div>					</div>				</div>'),e.inArray("onSelect",a.overrideEvents)<0){itemHTML=a.itemTemplate;for(var d in itemData)itemHTML=itemHTML.replace(new RegExp("\\$\\{"+d+"\\}","g"),itemData[d]);e("#"+a.queueID).append(itemHTML)}this.queueData.queueSize+=t.size,this.queueData.files[t.id]=t,a.onSelect&&a.onSelect.apply(this,arguments)},onSelectError:function(t,a,i){var s=this.settings;if(e.inArray("onSelectError",s.overrideEvents)<0)switch(a){case SWFUpload.QUEUE_ERROR.QUEUE_LIMIT_EXCEEDED:s.queueSizeLimit>i?this.queueData.errorMsg+="\nThe number of files selected exceeds the remaining upload limit ("+i+").":this.queueData.errorMsg+="\nThe number of files selected exceeds the queue size limit ("+s.queueSizeLimit+").";break;case SWFUpload.QUEUE_ERROR.FILE_EXCEEDS_SIZE_LIMIT:this.queueData.errorMsg+='\nThe file "'+t.name+'" exceeds the size limit ('+s.fileSizeLimit+").";break;case SWFUpload.QUEUE_ERROR.ZERO_BYTE_FILE:this.queueData.errorMsg+='\nThe file "'+t.name+'" is empty.';break;case SWFUpload.QUEUE_ERROR.FILE_EXCEEDS_SIZE_LIMIT:this.queueData.errorMsg+='\nThe file "'+t.name+'" is not an accepted file type ('+s.fileTypeDesc+")."}a!=SWFUpload.QUEUE_ERROR.QUEUE_LIMIT_EXCEEDED&&delete this.queueData.files[t.id],s.onSelectError&&s.onSelectError.apply(this,arguments)},onQueueComplete:function(){this.settings.onQueueComplete&&this.settings.onQueueComplete.call(this,this.settings.queueData)},onUploadComplete:function(t){var a=this.settings,i=this,s=this.getStats();if(this.queueData.queueLength=s.files_queued,"*"==this.queueData.uploadQueue[0]?this.queueData.queueLength>0?this.startUpload():(this.queueData.uploadQueue=[],a.onQueueComplete&&a.onQueueComplete.call(this,this.queueData)):this.queueData.uploadQueue.length>0?this.startUpload(this.queueData.uploadQueue.shift()):(this.queueData.uploadQueue=[],a.onQueueComplete&&a.onQueueComplete.call(this,this.queueData)),e.inArray("onUploadComplete",a.overrideEvents)<0)if(a.removeCompleted)switch(t.filestatus){case SWFUpload.FILE_STATUS.COMPLETE:setTimeout(function(){e("#"+t.id)&&(i.queueData.queueSize-=t.size,i.queueData.queueLength-=1,delete i.queueData.files[t.id],e("#"+t.id).fadeOut(500,function(){e(this).remove()}))},1e3*a.removeTimeout);break;case SWFUpload.FILE_STATUS.ERROR:a.requeueErrors||setTimeout(function(){e("#"+t.id)&&(i.queueData.queueSize-=t.size,i.queueData.queueLength-=1,delete i.queueData.files[t.id],e("#"+t.id).fadeOut(500,function(){e(this).remove()}))},1e3*a.removeTimeout)}else t.uploaded=!0;a.onUploadComplete&&a.onUploadComplete.call(this,t)},onUploadError:function(t,a,i){var s=this.settings,o="Error";switch(a){case SWFUpload.UPLOAD_ERROR.HTTP_ERROR:o="HTTP Error ("+i+")";break;case SWFUpload.UPLOAD_ERROR.MISSING_UPLOAD_URL:o="Missing Upload URL";break;case SWFUpload.UPLOAD_ERROR.IO_ERROR:o="IO Error";break;case SWFUpload.UPLOAD_ERROR.SECURITY_ERROR:o="Security Error";break;case SWFUpload.UPLOAD_ERROR.UPLOAD_LIMIT_EXCEEDED:alert("The upload limit has been reached ("+i+")."),o="Exceeds Upload Limit";break;case SWFUpload.UPLOAD_ERROR.UPLOAD_FAILED:o="Failed";break;case SWFUpload.UPLOAD_ERROR.SPECIFIED_FILE_ID_NOT_FOUND:break;case SWFUpload.UPLOAD_ERROR.FILE_VALIDATION_FAILED:o="Validation Error";break;case SWFUpload.UPLOAD_ERROR.FILE_CANCELLED:o="Cancelled",this.queueData.queueSize-=t.size,this.queueData.queueLength-=1,(t.status==SWFUpload.FILE_STATUS.IN_PROGRESS||e.inArray(t.id,this.queueData.uploadQueue)>=0)&&(this.queueData.uploadSize-=t.size),s.onCancel&&s.onCancel.call(this,t),delete this.queueData.files[t.id];break;case SWFUpload.UPLOAD_ERROR.UPLOAD_STOPPED:o="Stopped"}e.inArray("onUploadError",s.overrideEvents)<0&&(a!=SWFUpload.UPLOAD_ERROR.FILE_CANCELLED&&a!=SWFUpload.UPLOAD_ERROR.UPLOAD_STOPPED&&e("#"+t.id).addClass("uploadify-error"),e("#"+t.id).find(".uploadify-progress-bar").css("width","1px"),a!=SWFUpload.UPLOAD_ERROR.SPECIFIED_FILE_ID_NOT_FOUND&&t.status!=SWFUpload.FILE_STATUS.COMPLETE&&e("#"+t.id).find(".data").html(" - "+o));var n=this.getStats();this.queueData.uploadsErrored=n.upload_errors,s.onUploadError&&s.onUploadError.call(this,t,a,i,o)},onUploadProgress:function(t,a,i){var s=this.settings,o=new Date,n=o.getTime(),l=n-this.timer;l>500&&(this.timer=n);var r=a-this.bytesLoaded;this.bytesLoaded=a;var u=this.queueData.queueBytesUploaded+a,d=Math.round(a/i*100),p="KB/s",c=0,f=r/1024/(l/1e3);f=Math.floor(10*f)/10,this.queueData.averageSpeed>0?this.queueData.averageSpeed=Math.floor((this.queueData.averageSpeed+f)/2):this.queueData.averageSpeed=Math.floor(f),f>1e3&&(c=.001*f,this.queueData.averageSpeed=Math.floor(c),p="MB/s"),e.inArray("onUploadProgress",s.overrideEvents)<0&&("percentage"==s.progressData?e("#"+t.id).find(".data").html(" - "+d+"%"):"speed"==s.progressData&&l>500&&e("#"+t.id).find(".data").html(" - "+this.queueData.averageSpeed+p),e("#"+t.id).find(".uploadify-progress-bar").css("width",d+"%")),s.onUploadProgress&&s.onUploadProgress.call(this,t,a,i,u,this.queueData.uploadSize)},onUploadStart:function(t){var a=this.settings,i=new Date;this.timer=i.getTime(),this.bytesLoaded=0,0==this.queueData.uploadQueue.length&&(this.queueData.uploadSize=t.size),a.checkExisting&&e.ajax({type:"POST",async:!1,url:a.checkExisting,data:{filename:t.name},success:function(a){if(1==a){var i=confirm('A file with the name "'+t.name+'" already exists on the server.\nWould you like to replace the existing file?');i||(this.cancelUpload(t.id),e("#"+t.id).remove(),this.queueData.uploadQueue.length>0&&this.queueData.queueLength>0&&("*"==this.queueData.uploadQueue[0]?this.startUpload():this.startUpload(this.queueData.uploadQueue.shift())))}}}),a.onUploadStart&&a.onUploadStart.call(this,t)},onUploadSuccess:function(t,a,i){var s=this.settings,o=this.getStats();this.queueData.uploadsSuccessful=o.successful_uploads,this.queueData.queueBytesUploaded+=t.size,e.inArray("onUploadSuccess",s.overrideEvents)<0&&e("#"+t.id).find(".data").html(" - Complete"),s.onUploadSuccess&&s.onUploadSuccess.call(this,t,a,i)}};e.fn.uploadify=function(a){return t[a]?t[a].apply(this,Array.prototype.slice.call(arguments,1)):"object"!=typeof a&&a?void e.error("The method "+a+" does not exist in $.uploadify"):t.init.apply(this,arguments)}}($);