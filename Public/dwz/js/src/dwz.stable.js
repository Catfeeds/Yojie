!function(e){e.fn.jTable=function(t){return this.each(function(){function r(){e("div.j-resizeGrid").each(function(){var t=e(this).innerWidth();t&&e("div.gridScroller",this).width(t+"px")})}for(var i=e(this),o=i.attr("nowrapTD"),s=i.width(),a=[],l=i.parent().addClass("j-resizeGrid"),n=e(this).attr("layoutH"),d=i.find("thead>tr:last-child").find("th"),f=0,h=d.size();h>f;f++){var c=e(d[f]),v=[],u=c.innerWidth()-100*c.innerWidth()/s-2;v[0]=parseInt(u),v[1]=c.attr("align"),a[a.length]=v}e(this).wrap("<div class='grid'></div>");var p=i.parent().html(i.html()),g=p.find("thead");g.wrap("<div class='gridHeader'><div class='gridThead'><table style='width:"+(s-20)+"px;'></table></div></div>");var T=e(">tr:last-child",g),w=e(">th",T);e("th",g).each(function(){var t=e(this);t.html("<div class='gridCol' title='"+t.text()+"'>"+t.html()+"</div>")}),w.each(function(t){var r=e(this),i=a[t];r.addClass(i[1]).hoverClass("hover").removeAttr("align").removeAttr("width").width(i[0])}).filter("[orderField]").orderBy({targetType:i.attr("targetType"),asc:i.attr("asc")||"asc",desc:i.attr("desc")||"desc"});var y=p.find(">tbody"),x=n?" layoutH='"+n+"'":"";y.wrap("<div class='gridScroller'"+x+" style='width:"+l.width()+"px;'><div class='gridTbody'><table style='width:"+(s-20)+"px;'></table></div></div>");var b=e(">tr:first-child",y),z=y.find(">tr");z.hoverClass().each(function(){for(var t=e(this),r=e(">td",this),i=0;i<r.size();i++){var s=e(r[i]);"false"!=o&&s.html("<div>"+s.html()+"</div>"),i<a.length&&s.addClass(a[i][1])}t.click(function(){z.filter(".selected").removeClass("selected"),t.addClass("selected");var r=t.attr("target");r&&(0==e("#"+r,p).size()&&p.prepend('<input id="'+r+'" type="hidden" />'),e("#"+r,p).val(t.attr("rel")))})}),e(">td",b).each(function(t){t<a.length&&e(this).width(a[t][0])}),p.append("<div class='resizeMarker' style='height:300px; left:57px;display:none;'></div><div class='resizeProxy' style='height:300px; left:377px;display:none;'></div>");var j=e(".gridScroller",p);j.scroll(function(t){var r=e(".gridThead",p);if(j.scrollLeft()>0){r.css("position","relative");var i=j.scrollLeft();r.css("left",j.cssv("left")-i)}return 0==j.scrollLeft()&&(r.css("position","relative"),r.css("left","0px")),!1}),e(">tr",g).each(function(){e(">th",this).each(function(r){var i=this,o=e(this);o.mouseover(function(r){var s=e.jTableTool.getOffset(i,r).offsetX;return o.outerWidth()-s<5?o.css("cursor","col-resize").mousedown(function(r){e(".resizeProxy",p).show().css({left:e.jTableTool.getRight(i)-e(".gridScroller",p).scrollLeft(),top:e.jTableTool.getTop(i),height:e.jTableTool.getHeight(i,p),cursor:"col-resize"}),e(".resizeMarker",p).show().css({left:e.jTableTool.getLeft(i)+1-e(".gridScroller",p).scrollLeft(),top:e.jTableTool.getTop(i),height:e.jTableTool.getHeight(i,p)}),e(".resizeProxy",p).jDrag(e.extend(t,{scop:!0,cellMinW:20,relObj:e(".resizeMarker",p)[0],move:"horizontal",event:r,stop:function(){var t=e(".resizeProxy",p).position().left,r=e(".resizeMarker",p).position().left,i=t-r-o.outerWidth()-9,s=(e.jTableTool.getColspan(o),e.jTableTool.getCellNum(o)),a=o.width(),l=o.width()+i,n=e(">td",b).eq(s-1);o.width(l+"px"),n.width(l+"px");var d=e(g).parent();d.width(d.width()-a+l+"px");var f=e(y).parent();f.width(f.width()-a+l+"px"),e(".resizeMarker,.resizeProxy",p).hide()}}))}):(o.css("cursor",o.attr("orderField")?"pointer":"default"),o.unbind("mousedown")),!1})})}),e(window).unbind("resizeGrid").bind("resizeGrid",r)})},e.jTableTool={getLeft:function(t){var r=0;return e(t).prevAll().each(function(){r+=e(this).outerWidth()}),r-1},getRight:function(t){var r=0;return e(t).prevAll().andSelf().each(function(){r+=e(this).outerWidth()}),r-1},getTop:function(t){var r=0;return e(t).parent().prevAll().each(function(){r+=e(this).outerHeight()}),r},getHeight:function(t,r){var i=0,o=e(t).parent();return o.nextAll().andSelf().each(function(){i+=e(this).outerHeight()}),e(".gridTbody",r).children().each(function(){i+=e(this).outerHeight()}),i},getCellNum:function(t){return e(t).prevAll().andSelf().size()},getColspan:function(t){return e(t).attr("colspan")||1},getStart:function(t){var r=1;return e(t).prevAll().each(function(){r+=parseInt(e(this).attr("colspan")||1)}),r},getPageCoord:function(e){for(var t={x:0,y:0};e;)t.x+=e.offsetLeft,t.y+=e.offsetTop,e=e.offsetParent;return t},getOffset:function(t,r){if(e.browser.msie){var i=e(t).offset(),o={offsetX:r.pageX||r.screenX,offsetY:r.pageY||r.screenY},s={offsetX:o.offsetX-i.left,offsetY:o.offsetY-i.top};return s}var a=r.target;void 0==a.offsetLeft&&(a=a.parentNode);var l=e.jTableTool.getPageCoord(a),n={x:window.pageXOffset+r.clientX,y:window.pageYOffset+r.clientY},s={offsetX:n.x-l.x,offsetY:n.y-l.y};return s}}}(jQuery);