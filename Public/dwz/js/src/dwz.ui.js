function initEnv(){if($("body").append(DWZ.frag.dwzFrag),$.browser.msie&&/6.0/.test(navigator.userAgent))try{document.execCommand("BackgroundImageCache",!1,!0)}catch(t){}$.browser.msie&&window.setInterval("CollectGarbage();",1e4),$(window).resize(function(){initLayout(),$(this).trigger("resizeGrid")});var e=$("#background,#progressBar");e.hide(),$(document).ajaxStart(function(){e.show()}).ajaxStop(function(){e.hide()}),$("#leftside").jBar({minW:150,maxW:700}),$.taskBar&&$.taskBar.init(),navTab.init(),$.fn.switchEnv&&$("#switchEnvBox").switchEnv(),$.fn.navMenu&&$("#navMenu").navMenu(),setTimeout(function(){initLayout(),initUI();var t=$("div.tabsPageHeader");t.find(".tabsLeft").hoverClass("tabsLeftHover"),t.find(".tabsRight").hoverClass("tabsRightHover"),t.find(".tabsMore").hoverClass("tabsMoreHover")},10)}function initLayout(){var t=$(window).width()-(DWZ.ui.sbar?$("#sidebar").width()+10:34)-5,e=$(window).height()-$("#header").height()-34;$("#container").width(t),$("#container .tabsPageContent").height(e-34).find("[layoutH]").layoutH(),$("#sidebar, #sidebar_s .collapse, #splitBar, #splitBarProxy").height(e-5),$("#taskbar").css({top:e+$("#header").height()+5,width:$(window).width()})}function initUI(_box){var $p=$(_box||document);$("table.table",$p).jTable(),$("table.list",$p).cssTable(),$("div.tabs",$p).each(function(){var t=$(this),e={};e.currentIndex=t.attr("currentIndex")||0,e.eventType=t.attr("eventType")||"click",t.tabs(e)}),$("ul.tree",$p).jTree(),$("div.accordion",$p).each(function(){var t=$(this);t.accordion({fillSpace:t.attr("fillSpace"),alwaysOpen:!0,active:0})}),$(":button.checkboxCtrl, :checkbox.checkboxCtrl",$p).checkboxCtrl($p),$.fn.combox&&$("select.combox",$p).combox(),$.fn.xheditor&&$("textarea.editor",$p).each(function(){var t=$(this),e={html5Upload:!1,skin:"vista",tools:t.attr("tools")||"full"},a=[["upLinkUrl","upLinkExt","zip,rar,txt"],["upImgUrl","upImgExt","jpg,jpeg,gif,png"],["upFlashUrl","upFlashExt","swf"],["upMediaUrl","upMediaExt","avi"]];$(a).each(function(r){var i=a[r][0],o=a[r][1];t.attr(i)&&(e[i]=t.attr(i),e[o]=t.attr(o)||a[r][2])}),t.xheditor(e)}),$.fn.uploadify&&$(":file[uploader]",$p).each(function(){var t=$(this),e={uploader:t.attr("uploader"),script:t.attr("script"),cancelImg:t.attr("cancelImg"),queueID:t.attr("fileQueue")||"fileQueue",fileDesc:t.attr("fileDesc")||"*.jpg;*.jpeg;*.gif;*.png;*.pdf",fileExt:t.attr("fileExt")||"*.jpg;*.jpeg;*.gif;*.png;*.pdf",folder:t.attr("folder"),auto:!0,multi:!0,onError:uploadifyError,onComplete:uploadifyComplete,onAllComplete:uploadifyAllComplete};t.attr("onComplete")&&(e.onComplete=DWZ.jsonEval(t.attr("onComplete"))),t.attr("onAllComplete")&&(e.onAllComplete=DWZ.jsonEval(t.attr("onAllComplete"))),t.attr("scriptData")&&(e.scriptData=DWZ.jsonEval(t.attr("scriptData"))),t.uploadify(e)}),$("input[type=text], input[type=password], textarea",$p).addClass("textInput").focusClass("focus"),$("input[readonly], textarea[readonly]",$p).addClass("readonly"),$("input[disabled=true], textarea[disabled=true]",$p).addClass("disabled"),$("input[type=text]",$p).not("div.tabs input[type=text]",$p).filter("[alt]").inputAlert(),$("div.panelBar li, div.panelBar",$p).hoverClass("hover"),$("div.button",$p).hoverClass("buttonHover"),$("div.buttonActive",$p).hoverClass("buttonActiveHover"),$("div.tabsHeader li, div.tabsPageHeader li, div.accordionHeader, div.accordion",$p).hoverClass("hover"),$("div.panel",$p).jPanel(),$("form.required-validate",$p).each(function(){$(this).validate({focusInvalid:!1,focusCleanup:!0,errorElement:"span",ignore:".ignore",invalidHandler:function(t,e){var a=e.numberOfInvalids();if(a){var r=DWZ.msg("validateFormError",[a]);alertMsg.error(r)}}})}),$.fn.datepicker&&$("input.date",$p).each(function(){var t=$(this),e={};t.attr("format")&&(e.pattern=t.attr("format")),t.attr("yearstart")&&(e.yearstart=t.attr("yearstart")),t.attr("yearend")&&(e.yearend=t.attr("yearend")),t.datepicker(e)}),$("a[target=navTab]",$p).each(function(){$(this).click(function(event){var $this=$(this),title=$this.attr("title")||$this.text(),tabid=$this.attr("rel")||"_blank",fresh=eval($this.attr("fresh")||"true"),external=eval($this.attr("external")||"false"),url=unescape($this.attr("href")).replaceTmById($(event.target).parents(".unitBox:first"));return DWZ.debug(url),url.isFinishedTm()?(navTab.openTab(tabid,url,{title:title,fresh:fresh,external:external}),void event.preventDefault()):(alertMsg.error($this.attr("warn")||DWZ.msg("alertSelectMsg")),!1)})}),$("a[target=dialog]",$p).each(function(){$(this).click(function(event){var $this=$(this),title=$this.attr("title")||$this.text(),rel=$this.attr("rel")||"_blank",options={},w=$this.attr("width"),h=$this.attr("height");w&&(options.width=w),h&&(options.height=h),options.max=eval($this.attr("max")||"false"),options.mask=eval($this.attr("mask")||"false"),options.maxable=eval($this.attr("maxable")||"true"),options.minable=eval($this.attr("minable")||"true"),options.fresh=eval($this.attr("fresh")||"true"),options.resizable=eval($this.attr("resizable")||"true"),options.drawable=eval($this.attr("drawable")||"true"),options.close=eval($this.attr("close")||""),options.param=$this.attr("param")||"";var url=unescape($this.attr("href")).replaceTmById($(event.target).parents(".unitBox:first"));return DWZ.debug(url),url.isFinishedTm()?($.pdialog.open(url,rel,title,options),!1):(alertMsg.error($this.attr("warn")||DWZ.msg("alertSelectMsg")),!1)})}),$("a[target=ajax]",$p).each(function(){$(this).click(function(t){var e=$(this),a=e.attr("rel");if(a){var r=$("#"+a);r.loadUrl(e.attr("href"),{},function(){r.find("[layoutH]").layoutH()})}t.preventDefault()})}),$("div.pagination",$p).each(function(){var t=$(this);t.pagination({targetType:t.attr("targetType"),rel:t.attr("rel"),totalCount:t.attr("totalCount"),numPerPage:t.attr("numPerPage"),pageNumShown:t.attr("pageNumShown"),currentPage:t.attr("currentPage")})}),$.fn.ajaxTodo&&$("a[target=ajaxTodo]",$p).ajaxTodo(),$.fn.dwzExport&&$("a[target=dwzExport]",$p).dwzExport(),$.fn.lookup&&$("a[lookupGroup]",$p).lookup(),$.fn.multLookup&&$("[multLookup]:button",$p).multLookup(),$.fn.suggest&&$("input[suggestFields]",$p).suggest(),$.fn.itemDetail&&$("table.itemDetail",$p).itemDetail(),$.fn.selectedTodo&&$("a[target=selectedTodo]",$p).selectedTodo(),$.fn.pagerForm&&$("form[rel=pagerForm]",$p).pagerForm({parentBox:$p})}