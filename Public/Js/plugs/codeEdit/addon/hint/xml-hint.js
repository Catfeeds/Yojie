!function(t){"object"==typeof exports&&"object"==typeof module?t(require("../../lib/codemirror")):"function"==typeof define&&define.amd?define(["../../lib/codemirror"],t):t(CodeMirror)}(function(t){"use strict";function e(e,n){var a=n&&n.schemaInfo,i=n&&n.quoteChar||'"';if(a){var s=e.getCursor(),o=e.getTokenAt(s),f=t.innerMode(e.getMode(),o.state);if("xml"==f.mode.name){var l,g=[],c=!1,h="<"==o.string.charAt(0);if(!f.state.tagName||h){h&&(l=o.string.slice(1),c=!0);var p=f.state.context,u=p&&a[p.tagName],d=p?u&&u.children:a["!top"];if(d)for(var m=0;m<d.length;++m)l&&0!=d[m].lastIndexOf(l,0)||g.push("<"+d[m]);else for(var v in a)!a.hasOwnProperty(v)||"!top"==v||l&&0!=v.lastIndexOf(l,0)||g.push("<"+v);!p||l&&0!=("/"+p.tagName).lastIndexOf(l,0)||g.push("</"+p.tagName+">")}else{var u=a[f.state.tagName],y=u&&u.attrs;if(!y)return;if("string"==o.type||"="==o.string){var x,O=e.getRange(r(s.line,Math.max(0,s.ch-60)),r(s.line,"string"==o.type?o.start:o.end)),I=O.match(/([^\s\u00a0=<>\"\']+)=$/);if(!I||!y.hasOwnProperty(I[1])||!(x=y[I[1]]))return;"function"==typeof x&&(x=x.call(this,e)),"string"==o.type&&(l=o.string,/['"]/.test(o.string.charAt(0))&&(i=o.string.charAt(0),l=o.string.slice(1)),c=!0);for(var m=0;m<x.length;++m)l&&0!=x[m].lastIndexOf(l,0)||g.push(i+x[m]+i)}else{"attribute"==o.type&&(l=o.string,c=!0);for(var b in y)!y.hasOwnProperty(b)||l&&0!=b.lastIndexOf(l,0)||g.push(b)}}return{list:g,from:c?r(s.line,o.start):s,to:c?r(s.line,o.end):s}}}}var r=t.Pos;t.registerHelper("hint","xml",e)});