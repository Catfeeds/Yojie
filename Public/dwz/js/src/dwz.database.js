!function($){var _lookup={currentGroup:"",suffix:"",$target:null,pk:"id"},_util={_lookupPrefix:function(t){var e=_lookup.currentGroup?".":"";return _lookup.currentGroup+e+t+_lookup.suffix},lookupPk:function(t){return this._lookupPrefix(t)},lookupField:function(t){return"dwz."+this.lookupPk(t)}};$.extend({bringBackSuggest:function(t){var e=_lookup.$target.parents(".unitBox:first");e.find(":input").each(function(){var e=$(this),a=e.attr("name");for(var r in t){var i=_lookup.pk==r?_util.lookupPk(r):_util.lookupField(r);if(i==a){e.val(t[r]);break}}})},bringBack:function(t){$.bringBackSuggest(t),$.pdialog.closeCurrent()}}),$.fn.extend({lookup:function(){return this.each(function(){var $this=$(this),options={mask:!0,width:$this.attr("width")||820,height:$this.attr("height")||400,maxable:eval($this.attr("maxable")||"true"),resizable:eval($this.attr("resizable")||"true")};$this.click(function(t){_lookup=$.extend(_lookup,{currentGroup:$this.attr("lookupGroup")||"",suffix:$this.attr("suffix")||"",$target:$this,pk:$this.attr("lookupPk")||"id"});var e=unescape($this.attr("href")).replaceTmById($(t.target).parents(".unitBox:first"));return e.isFinishedTm()?($.pdialog.open(e,"_blank",$this.attr("title")||$this.text(),options),!1):(alertMsg.error($this.attr("warn")||DWZ.msg("alertSelectMsg")),!1)})})},multLookup:function(){return this.each(function(){var t=$(this),e={};t.click(function(a){var r=t.parents(".unitBox:first");return r.find("[name='"+t.attr("multLookup")+"']").filter(":checked").each(function(){var t=DWZ.jsonEval($(this).val());for(var a in t){var r=e[a]?e[a]+",":"";e[a]=r+t[a]}}),$.isEmptyObject(e)?(alertMsg.error(t.attr("warn")||DWZ.msg("alertSelectMsg")),!1):void $.bringBack(e)})})},suggest:function(){var t={suggest$:"#suggest",suggestShadow$:"#suggestShadow"},e=-1;return this.each(function(){function a(e){var a=n.offset(),s=a.top+this.offsetHeight,u=$(t.suggest$);0==u.size()&&(u=$('<div id="suggest"></div>').appendTo($("body"))),u.css({left:a.left+"px",top:s+"px"}).show(),_lookup=$.extend(_lookup,{currentGroup:n.attr("lookupGroup")||"",suffix:n.attr("suffix")||"",$target:n,pk:n.attr("lookupPk")||"id"});var l=unescape(n.attr("suggestUrl")).replaceTmById($(e.target).parents(".unitBox:first"));return l.isFinishedTm()?($.ajax({type:"POST",dataType:"json",url:l,cache:!1,data:{inputValue:n.val()},success:function(t){if(t){var e="";$.each(t,function(t){for(var a="",r="",t=0;t<o.length;t++){var i=this[o[t]];i&&(r&&(r+="-"),r+=i,a&&(a+=","),a+=o[t]+":'"+i+"'")}e+='<li lookupId="'+this.id+'" lookupAttrs="'+a+'">'+r+"</li>"}),u.html("<ul>"+e+"</ul>").find("li").hoverClass("selected").click(function(){r($(this))})}},error:function(){u.html("")}}),$(document).bind("click",i),!1):(alertMsg.error(n.attr("warn")||DWZ.msg("alertSelectMsg")),!1)}function r(t){var e="{id:'"+t.attr("lookupId")+"',"+t.attr("lookupAttrs")+"}";$.bringBackSuggest(DWZ.jsonEval(e))}function i(){$(t.suggest$).html("").hide(),e=-1,$(document).unbind("click",i)}var n=$(this).attr("autocomplete","off").keydown(function(t){return t.keyCode==DWZ.keyCode.ENTER?!1:void 0}),o=n.attr("suggestFields").split(",");n.focus(a).click(!1).keyup(function(n){var o=$(t.suggest$).find("li");switch(n.keyCode){case DWZ.keyCode.ESC:case DWZ.keyCode.TAB:case DWZ.keyCode.SHIFT:case DWZ.keyCode.HOME:case DWZ.keyCode.END:case DWZ.keyCode.LEFT:case DWZ.keyCode.RIGHT:break;case DWZ.keyCode.ENTER:i();break;case DWZ.keyCode.DOWN:e>=o.size()-1?e=-1:e++;break;case DWZ.keyCode.UP:0>e?e=o.size()-1:e--;break;default:a(n)}if(o.removeClass("selected"),e>=0){var s=o.eq(e).addClass("selected");r(s)}})})},itemDetail:function(){function t(t){t.find(">tr").each(function(t){$(":input, a.btnLook",this).each(function(){var e=$(this);e.attr("name",e.attr("name").replaceSuffix(t));var a=e.attr("lookupGroup");a&&e.attr("lookupGroup",a.replaceSuffix(t));var r=e.attr("suffix");r&&e.attr("suffix",r.replaceSuffix(t))})})}function e(t){var e="",a="";t.name.endsWith("[#index#]")?a="[#index#]":t.name.endsWith("[]")&&(a="[]");var r=a?' suffix="'+a+'" ':"";switch(t.type){case"del":e='<a href="javascript:void(0)" class="btnDel '+t.fieldClass+'">删除</a>';break;case"lookup":var i="";t.suggestFields&&(i='autocomplete="off" lookupGroup="'+t.lookupGroup+'"'+r+' suggestUrl="'+t.suggestUrl+'" suggestFields="'+t.suggestFields+'"'),e='<input type="hidden" name="'+t.lookupGroup+".id"+a+'"/><input type="text" name="'+t.name+'"'+i+' size="'+t.size+'" class="'+t.fieldClass+'"/><a class="btnLook" href="'+t.lookupUrl+'" lookupGroup="'+t.lookupGroup+'" '+i+' title="查找带回">查找带回</a>';break;case"attach":e='<input type="hidden" name="'+t.lookupGroup+".id"+a+'"/><input type="text" name="'+t.name+'" size="'+t.size+'" readonly="readonly" class="'+t.fieldClass+'"/><a class="btnAttach" href="'+t.lookupUrl+'" lookupGroup="'+t.lookupGroup+'" '+i+' width="560" height="300" title="查找带回">查找带回</a>';break;case"enum":$.ajax({type:"POST",dataType:"html",async:!1,url:t.enumUrl,data:{inputName:t.name},success:function(t){e=t}});break;case"date":e='<input type="text" name="'+t.name+'" class="date '+t.fieldClass+'" format="'+t.patternDate+'" size="'+t.size+'"/><a class="inputDateButton" href="javascript:void(0)">选择</a>';break;default:e='<input type="text" name="'+t.name+'" size="'+t.size+'" class="'+t.fieldClass+'"/>'}return"<td>"+e+"</td>"}function a(t){var a="";return $(t).each(function(){a+=e(this)}),'<tr class="unitBox">'+a+"</tr>"}return this.each(function(){var e=$(this).css("clear","both"),r=e.find("tbody"),i=[];e.find("tr:first th[type]").each(function(){var t=$(this),e={type:t.attr("type")||"text",patternDate:t.attr("format")||"yyyy-MM-dd",name:t.attr("name")||"",size:t.attr("size")||"12",enumUrl:t.attr("enumUrl")||"",lookupGroup:t.attr("lookupGroup")||"",lookupUrl:t.attr("lookupUrl")||"",suggestUrl:t.attr("suggestUrl"),suggestFields:t.attr("suggestFields"),fieldClass:t.attr("fieldClass")||""};i.push(e)}),r.find("a.btnDel").click(function(){function e(){$.ajax({type:"POST",dataType:"json",url:a.attr("href"),cache:!1,success:function(){a.parents("tr:first").remove(),t(r)},error:DWZ.ajaxError})}var a=$(this);return a.attr("title")?alertMsg.confirm(a.attr("title"),{okCall:e}):e(),!1});var n=e.attr("addButton")||"Add New";if(n){var o=$('<div class="button"><div class="buttonContent"><button type="button">'+n+"</button></div></div>").insertBefore(e).find("button"),s=$('<input type="text" name="dwz_rowNum" class="textInput" style="margin:2px;" value="1" size="2"/>').insertBefore(e),u="";o.click(function(){u||(u=a(i));var e=1;try{e=parseInt(s.val())}catch(n){}for(var o=0;e>o;o++){var l=$(u);l.appendTo(r).initUI().find("a.btnDel").click(function(){return $(this).parents("tr:first").remove(),t(r),!1})}t(r)})}})},selectedTodo:function(){function t(t,e){var a="",r="dialog"==e?$.pdialog.getCurrent():navTab.getCurrentPanel();return r.find("input:checked").filter("[name='"+t+"']").each(function(t){var e=$(this).val();a+=0==t?e:","+e}),a}return this.each(function(){var e=$(this),a=e.attr("rel")||"ids",r=e.attr("postType")||"map";e.click(function(){function i(){$.ajax({type:"POST",url:e.attr("href"),dataType:"json",cache:!1,data:function(){if("map"==r)return $.map(n.split(","),function(t,e){return{name:a,value:t}});var t={};return t[a]=n,t}(),success:navTabAjaxDone,error:DWZ.ajaxError})}var n=t(a,e.attr("targetType"));if(!n)return alertMsg.error(e.attr("warn")||DWZ.msg("alertSelectMsg")),!1;var o=e.attr("title");return o?alertMsg.confirm(o,{okCall:i}):i(),!1})})}})}(jQuery);