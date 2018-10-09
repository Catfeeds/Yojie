var stringStream=function(t){function e(){for(;r==n.length;){i+=n,n="",r=0;try{n=t.next()}catch(e){if(e!=StopIteration)throw e;return!1}}return!0}var n="",r=0,i="";return{peek:function(){return e()?n.charAt(r):null},next:function(){if(!e())throw i.length>0?"End of stringstream reached without emptying buffer ('"+i+"').":StopIteration;return n.charAt(r++)},get:function(){var t=i;return i="",r>0&&(t+=n.slice(0,r),n=n.slice(r),r=0),t},push:function(t){n=n.slice(0,r)+t+n.slice(r)},lookAhead:function(e,o,u,h){function a(t){return h?t.toLowerCase():t}e=a(e);var c=!1,l=i,s=r;for(u&&this.nextWhileMatches(/[\s\u00a0]/);;){var f=r+e.length,p=n.length-r;if(f<=n.length){c=e==a(n.slice(r,f)),r=f;break}if(e.slice(0,p)!=a(n.slice(r)))break;i+=n,n="";try{n=t.next()}catch(k){if(k!=StopIteration)throw k;break}r=0,e=e.slice(p)}return c&&o||(n=i.slice(l.length)+n,r=s,i=l),c},lookAheadRegex:function(e,i){if("^"!=e.source.charAt(0))throw new Error("Regexps passed to lookAheadRegex must start with ^");for(;-1==n.indexOf("\n",r);)try{n+=t.next()}catch(o){if(o!=StopIteration)throw o;break}var u=n.slice(r).match(e);return u&&i&&(r+=u[0].length),u},more:function(){return null!==this.peek()},applies:function(t){var e=this.peek();return null!==e&&t(e)},nextWhile:function(t){for(var e;null!==(e=this.peek())&&t(e);)this.next()},matches:function(t){var e=this.peek();return null!==e&&t.test(e)},nextWhileMatches:function(t){for(var e;null!==(e=this.peek())&&t.test(e);)this.next()},equals:function(t){return t===this.peek()},endOfLine:function(){var t=this.peek();return null==t||"\n"==t}}};