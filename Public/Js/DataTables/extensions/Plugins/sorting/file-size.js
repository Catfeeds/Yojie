jQuery.extend(jQuery.fn.dataTableExt.oSort,{"file-size-pre":function(e){var n=e.substring(0,e.length-2),t="MB"==e.substring(e.length-2,e.length)?1e3:"GB"==e.substring(e.length-2,e.length)?1e6:1;return parseInt(n*t,10)},"file-size-asc":function(e,n){return n>e?-1:e>n?1:0},"file-size-desc":function(e,n){return n>e?1:e>n?-1:0}});