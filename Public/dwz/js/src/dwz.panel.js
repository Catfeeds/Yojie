!function(e){e.extend(e.fn,{jPanel:function(a){var s=e.extend({header:"panelHeader",headerC:"panelHeaderContent",content:"panelContent",coll:"collapsable",exp:"expandable",footer:"panelFooter",footerC:"panelFooterContent"},a);return this.each(function(){var a=e(this),t=a.hasClass("close"),n=a.hasClass("collapse"),d=e(">div",a).addClass(s.content),l=e(">h1",a).wrap("<div><div></div></div>");n&&e('<a href=""></a>').addClass(t?s.exp:s.coll).insertAfter(l);var i=e(">div:first",a).addClass(s.header);e(">div",i).addClass(s.headerC);var o=e("<div><div></div></div>").appendTo(a).addClass(s.footer);e(">div",o).addClass(s.footerC);var r=a.attr("defH")?a.attr("defH"):0,c=a.attr("minH")?a.attr("minH"):0;if(t?d.css({height:"0px",display:"none"}):(d.css("height","auto"),r>0?d.height(r+"px"):c>0&&d.css("minHeight",c+"px")),n){var h=e("a",i),p=d.innerHeight()-6;r=c>0&&c>=p?c:p,h.click(function(){return h.hasClass(s.exp)?d.jBlindDown({to:r,call:function(){h.removeClass(s.exp).addClass(s.coll),c>0&&d.css("minHeight",c+"px")}}):(c>0&&d.css("minHeight",""),c>=p&&d.css("height",c+"px"),d.jBlindUp({call:function(){h.removeClass(s.coll).addClass(s.exp)}})),!1})}})}})}(jQuery);