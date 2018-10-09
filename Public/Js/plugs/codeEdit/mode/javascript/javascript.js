!function(e){"object"==typeof exports&&"object"==typeof module?e(require("../../lib/codemirror")):"function"==typeof define&&define.amd?define(["../../lib/codemirror"],e):e(CodeMirror)}(function(e){"use strict";e.defineMode("javascript",function(t,r){function n(e){for(var t,r=!1,n=!1;null!=(t=e.next());){if(!r){if("/"==t&&!n)return;"["==t?n=!0:n&&"]"==t&&(n=!1)}r=!r&&"\\"==t}}function a(e,t,r){return pe=e,ve=r,t}function i(e,t){var r=e.next();if('"'==r||"'"==r)return t.tokenize=o(r),t.tokenize(e,t);if("."==r&&e.match(/^\d+(?:[eE][+\-]?\d+)?/))return a("number","number");if("."==r&&e.match(".."))return a("spread","meta");if(/[\[\]{}\(\),;\:\.]/.test(r))return a(r);if("="==r&&e.eat(">"))return a("=>","operator");if("0"==r&&e.eat(/x/i))return e.eatWhile(/[\da-f]/i),a("number","number");if(/\d/.test(r))return e.match(/^\d*(?:\.\d*)?(?:[eE][+\-]?\d+)?/),a("number","number");if("/"==r)return e.eat("*")?(t.tokenize=u,u(e,t)):e.eat("/")?(e.skipToEnd(),a("comment","comment")):"operator"==t.lastType||"keyword c"==t.lastType||"sof"==t.lastType||/^[\[{}\(,;:]$/.test(t.lastType)?(n(e),e.eatWhile(/[gimy]/),a("regexp","string-2")):(e.eatWhile(ge),a("operator","operator",e.current()));if("`"==r)return t.tokenize=c,c(e,t);if("#"==r)return e.skipToEnd(),a("error","error");if(ge.test(r))return e.eatWhile(ge),a("operator","operator",e.current());e.eatWhile(/[\w\$_]/);var i=e.current(),l=he.propertyIsEnumerable(i)&&he[i];return l&&"."!=t.lastType?a(l.type,l.style,i):a("variable","variable",i)}function o(e){return function(t,r){var n,o=!1;if(be&&"@"==t.peek()&&t.match(we))return r.tokenize=i,a("jsonld-keyword","meta");for(;null!=(n=t.next())&&(n!=e||o);)o=!o&&"\\"==n;return o||(r.tokenize=i),a("string","string")}}function u(e,t){for(var r,n=!1;r=e.next();){if("/"==r&&n){t.tokenize=i;break}n="*"==r}return a("comment","comment")}function c(e,t){for(var r,n=!1;null!=(r=e.next());){if(!n&&("`"==r||"$"==r&&e.eat("{"))){t.tokenize=i;break}n=!n&&"\\"==r}return a("quasi","string-2",e.current())}function l(e,t){t.fatArrowAt&&(t.fatArrowAt=null);var r=e.string.indexOf("=>",e.start);if(!(0>r)){for(var n=0,a=!1,i=r-1;i>=0;--i){var o=e.string.charAt(i),u=je.indexOf(o);if(u>=0&&3>u){if(!n){++i;break}if(0==--n)break}else if(u>=3&&6>u)++n;else if(/[$\w]/.test(o))a=!0;else if(a&&!n){++i;break}}a&&!n&&(t.fatArrowAt=i)}}function f(e,t,r,n,a,i){this.indented=e,this.column=t,this.type=r,this.prev=a,this.info=i,null!=n&&(this.align=n)}function s(e,t){for(var r=e.localVars;r;r=r.next)if(r.name==t)return!0;for(var n=e.context;n;n=n.prev)for(var r=n.vars;r;r=r.next)if(r.name==t)return!0}function d(e,t,r,n,a){var i=e.cc;for(Ve.state=e,Ve.stream=a,Ve.marked=null,Ve.cc=i,e.lexical.hasOwnProperty("align")||(e.lexical.align=!0);;){var o=i.length?i.pop():ke?w:g;if(o(r,n)){for(;i.length&&i[i.length-1].lex;)i.pop()();return Ve.marked?Ve.marked:"variable"==r&&s(e,n)?"variable-2":t}}}function p(){for(var e=arguments.length-1;e>=0;e--)Ve.cc.push(arguments[e])}function v(){return p.apply(null,arguments),!0}function m(e){function t(t){for(var r=t;r;r=r.next)if(r.name==e)return!0;return!1}var n=Ve.state;if(n.context){if(Ve.marked="def",t(n.localVars))return;n.localVars={name:e,next:n.localVars}}else{if(t(n.globalVars))return;r.globalVars&&(n.globalVars={name:e,next:n.globalVars})}}function y(){Ve.state.context={prev:Ve.state.context,vars:Ve.state.localVars},Ve.state.localVars=Ee}function b(){Ve.state.localVars=Ve.state.context.vars,Ve.state.context=Ve.state.context.prev}function k(e,t){var r=function(){var r=Ve.state,n=r.indented;"stat"==r.lexical.type&&(n=r.lexical.indented),r.lexical=new f(n,Ve.stream.column(),e,null,r.lexical,t)};return r.lex=!0,r}function x(){var e=Ve.state;e.lexical.prev&&(")"==e.lexical.type&&(e.indented=e.lexical.indented),e.lexical=e.lexical.prev)}function h(e){function t(r){return r==e?v():";"==e?p():v(t)}return t}function g(e,t){return"var"==e?v(k("vardef",t.length),F,h(";"),x):"keyword a"==e?v(k("form"),w,g,x):"keyword b"==e?v(k("form"),g,x):"{"==e?v(k("}"),_,x):";"==e?v():"if"==e?v(k("form"),w,g,x,L):"function"==e?v(ee):"for"==e?v(k("form"),Q,g,x):"variable"==e?v(k("stat"),P):"switch"==e?v(k("form"),w,k("}","switch"),h("{"),_,x,x):"case"==e?v(w,h(":")):"default"==e?v(h(":")):"catch"==e?v(k("form"),y,h("("),te,h(")"),g,x,b):"module"==e?v(k("form"),y,ie,b,x):"class"==e?v(k("form"),re,ae,x):"export"==e?v(k("form"),oe,x):"import"==e?v(k("form"),ue,x):p(k("stat"),w,h(";"),x)}function w(e){return M(e,!1)}function j(e){return M(e,!0)}function M(e,t){if(Ve.state.fatArrowAt==Ve.stream.start){var r=t?C:O;if("("==e)return v(y,k(")"),N(G,")"),x,h("=>"),r,b);if("variable"==e)return p(y,G,h("=>"),r,b)}var n=t?T:z;return Me.hasOwnProperty(e)?v(n):"function"==e?v(ee):"keyword c"==e?v(t?E:V):"("==e?v(k(")"),V,de,h(")"),x,n):"operator"==e||"spread"==e?v(t?j:w):"["==e?v(k("]"),fe,x,n):"{"==e?U($,"}",null,n):v()}function V(e){return e.match(/[;\}\)\],]/)?p():p(w)}function E(e){return e.match(/[;\}\)\],]/)?p():p(j)}function z(e,t){return","==e?v(w):T(e,t,!1)}function T(e,t,r){var n=0==r?z:T,a=0==r?w:j;return"=>"==t?v(y,r?C:O,b):"operator"==e?/\+\+|--/.test(t)?v(n):"?"==t?v(w,h(":"),a):v(a):"quasi"==e?(Ve.cc.push(n),I(t)):";"!=e?"("==e?U(j,")","call",n):"."==e?v(W,n):"["==e?v(k("]"),V,h("]"),x,n):void 0:void 0}function I(e){return"${"!=e.slice(e.length-2)?v():v(w,A)}function A(e){return"}"==e?(Ve.marked="string-2",Ve.state.tokenize=c,v()):void 0}function O(e){return l(Ve.stream,Ve.state),p("{"==e?g:w)}function C(e){return l(Ve.stream,Ve.state),p("{"==e?g:j)}function P(e){return":"==e?v(x,g):p(z,h(";"),x)}function W(e){return"variable"==e?(Ve.marked="property",v()):void 0}function $(e,t){if("variable"==e){if(Ve.marked="property","get"==t||"set"==t)return v(S)}else if("number"==e||"string"==e)Ve.marked=be?"property":e+" property";else if("["==e)return v(w,h("]"),q);return Me.hasOwnProperty(e)?v(q):void 0}function S(e){return"variable"!=e?p(q):(Ve.marked="property",v(ee))}function q(e){return":"==e?v(j):"("==e?p(ee):void 0}function N(e,t){function r(n){if(","==n){var a=Ve.state.lexical;return"call"==a.info&&(a.pos=(a.pos||0)+1),v(e,r)}return n==t?v():v(h(t))}return function(n){return n==t?v():p(e,r)}}function U(e,t,r){for(var n=3;n<arguments.length;n++)Ve.cc.push(arguments[n]);return v(k(t,r),N(e,t),x)}function _(e){return"}"==e?v():p(g,_)}function B(e){return xe&&":"==e?v(D):void 0}function D(e){return"variable"==e?(Ve.marked="variable-3",v()):void 0}function F(){return p(G,B,J,K)}function G(e,t){return"variable"==e?(m(t),v()):"["==e?U(G,"]"):"{"==e?U(H,"}"):void 0}function H(e,t){return"variable"!=e||Ve.stream.match(/^\s*:/,!1)?("variable"==e&&(Ve.marked="property"),v(h(":"),G,J)):(m(t),v(J))}function J(e,t){return"="==t?v(j):void 0}function K(e){return","==e?v(F):void 0}function L(e,t){return"keyword b"==e&&"else"==t?v(k("form"),g,x):void 0}function Q(e){return"("==e?v(k(")"),R,h(")"),x):void 0}function R(e){return"var"==e?v(F,h(";"),Y):";"==e?v(Y):"variable"==e?v(X):p(w,h(";"),Y)}function X(e,t){return"in"==t||"of"==t?(Ve.marked="keyword",v(w)):v(z,Y)}function Y(e,t){return";"==e?v(Z):"in"==t||"of"==t?(Ve.marked="keyword",v(w)):p(w,h(";"),Z)}function Z(e){")"!=e&&v(w)}function ee(e,t){return"*"==t?(Ve.marked="keyword",v(ee)):"variable"==e?(m(t),v(ee)):"("==e?v(y,k(")"),N(te,")"),x,g,b):void 0}function te(e){return"spread"==e?v(te):p(G,B)}function re(e,t){return"variable"==e?(m(t),v(ne)):void 0}function ne(e,t){return"extends"==t?v(w):void 0}function ae(e){return"{"==e?U($,"}"):void 0}function ie(e,t){return"string"==e?v(g):"variable"==e?(m(t),v(le)):void 0}function oe(e,t){return"*"==t?(Ve.marked="keyword",v(le,h(";"))):"default"==t?(Ve.marked="keyword",v(w,h(";"))):p(g)}function ue(e){return"string"==e?v():p(ce,le)}function ce(e,t){return"{"==e?U(ce,"}"):("variable"==e&&m(t),v())}function le(e,t){return"from"==t?(Ve.marked="keyword",v(w)):void 0}function fe(e){return"]"==e?v():p(j,se)}function se(e){return"for"==e?p(de,h("]")):","==e?v(N(j,"]")):p(N(j,"]"))}function de(e){return"for"==e?v(Q,de):"if"==e?v(w,de):void 0}var pe,ve,me=t.indentUnit,ye=r.statementIndent,be=r.jsonld,ke=r.json||be,xe=r.typescript,he=function(){function e(e){return{type:e,style:"keyword"}}var t=e("keyword a"),r=e("keyword b"),n=e("keyword c"),a=e("operator"),i={type:"atom",style:"atom"},o={"if":e("if"),"while":t,"with":t,"else":r,"do":r,"try":r,"finally":r,"return":n,"break":n,"continue":n,"new":n,"delete":n,"throw":n,"debugger":n,"var":e("var"),"const":e("var"),let:e("var"),"function":e("function"),"catch":e("catch"),"for":e("for"),"switch":e("switch"),"case":e("case"),"default":e("default"),"in":a,"typeof":a,"instanceof":a,"true":i,"false":i,"null":i,undefined:i,NaN:i,Infinity:i,"this":e("this"),module:e("module"),"class":e("class"),"super":e("atom"),"yield":n,"export":e("export"),"import":e("import"),"extends":n};if(xe){var u={type:"variable",style:"variable-3"},c={"interface":e("interface"),"extends":e("extends"),constructor:e("constructor"),"public":e("public"),"private":e("private"),"protected":e("protected"),"static":e("static"),string:u,number:u,bool:u,any:u};for(var l in c)o[l]=c[l]}return o}(),ge=/[+\-*&%=<>!?|~^]/,we=/^@(context|id|value|language|type|container|list|set|reverse|index|base|vocab|graph)"/,je="([{}])",Me={atom:!0,number:!0,variable:!0,string:!0,regexp:!0,"this":!0,"jsonld-keyword":!0},Ve={state:null,column:null,marked:null,cc:null},Ee={name:"this",next:{name:"arguments"}};return x.lex=!0,{startState:function(e){var t={tokenize:i,lastType:"sof",cc:[],lexical:new f((e||0)-me,0,"block",!1),localVars:r.localVars,context:r.localVars&&{vars:r.localVars},indented:0};return r.globalVars&&"object"==typeof r.globalVars&&(t.globalVars=r.globalVars),t},token:function(e,t){if(e.sol()&&(t.lexical.hasOwnProperty("align")||(t.lexical.align=!1),t.indented=e.indentation(),l(e,t)),t.tokenize!=u&&e.eatSpace())return null;var r=t.tokenize(e,t);return"comment"==pe?r:(t.lastType="operator"!=pe||"++"!=ve&&"--"!=ve?pe:"incdec",d(t,r,pe,ve,e))},indent:function(t,n){if(t.tokenize==u)return e.Pass;if(t.tokenize!=i)return 0;for(var a=n&&n.charAt(0),o=t.lexical,c=t.cc.length-1;c>=0;--c){var l=t.cc[c];if(l==x)o=o.prev;else if(l!=L)break}"stat"==o.type&&"}"==a&&(o=o.prev),ye&&")"==o.type&&"stat"==o.prev.type&&(o=o.prev);var f=o.type,s=a==f;return"vardef"==f?o.indented+("operator"==t.lastType||","==t.lastType?o.info+1:0):"form"==f&&"{"==a?o.indented:"form"==f?o.indented+me:"stat"==f?o.indented+("operator"==t.lastType||","==t.lastType?ye||me:0):"switch"!=o.info||s||0==r.doubleIndentSwitch?o.align?o.column+(s?0:1):o.indented+(s?0:me):o.indented+(/^(?:case|default)\b/.test(n)?me:2*me)},electricChars:":{}",blockCommentStart:ke?null:"/*",blockCommentEnd:ke?null:"*/",lineComment:ke?null:"//",fold:"brace",helperType:ke?"json":"javascript",jsonldMode:be,jsonMode:ke}}),e.defineMIME("text/javascript","javascript"),e.defineMIME("text/ecmascript","javascript"),e.defineMIME("application/javascript","javascript"),e.defineMIME("application/ecmascript","javascript"),e.defineMIME("application/json",{name:"javascript",json:!0}),e.defineMIME("application/x-json",{name:"javascript",json:!0}),e.defineMIME("application/ld+json",{name:"javascript",jsonld:!0}),e.defineMIME("text/typescript",{name:"javascript",typescript:!0}),e.defineMIME("application/typescript",{name:"javascript",typescript:!0})});