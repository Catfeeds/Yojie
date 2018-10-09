!function(e){"object"==typeof exports&&"object"==typeof module?e(require("../../lib/codemirror")):"function"==typeof define&&define.amd?define(["../../lib/codemirror"],e):e(CodeMirror)}(function(e){"use strict";e.defineMode("octave",function(){function e(e){return new RegExp("^(("+e.join(")|(")+"))\\b")}function n(e,n){return e.sol()||"'"!==e.peek()?(n.tokenize=r,r(e,n)):(e.next(),n.tokenize=r,"operator")}function t(e,n){return e.match(/^.*%}/)?(n.tokenize=r,"comment"):(e.skipToEnd(),"comment")}function r(d,p){if(d.eatSpace())return null;if(d.match("%{"))return p.tokenize=t,d.skipToEnd(),"comment";if(d.match(/^[%#]/))return d.skipToEnd(),"comment";if(d.match(/^[0-9\.+-]/,!1)){if(d.match(/^[+-]?0x[0-9a-fA-F]+[ij]?/))return d.tokenize=r,"number";if(d.match(/^[+-]?\d*\.\d+([EeDd][+-]?\d+)?[ij]?/))return"number";if(d.match(/^[+-]?\d+([EeDd][+-]?\d+)?[ij]?/))return"number"}return d.match(e(["nan","NaN","inf","Inf"]))?"number":d.match(/^"([^"]|(""))*"/)?"string":d.match(/^'([^']|(''))*'/)?"string":d.match(l)?"keyword":d.match(s)?"builtin":d.match(u)?"variable":d.match(i)||d.match(a)?"operator":d.match(o)||d.match(c)||d.match(m)?null:d.match(f)?(p.tokenize=n,null):(d.next(),"error")}var i=new RegExp("^[\\+\\-\\*/&|\\^~<>!@'\\\\]"),o=new RegExp("^[\\(\\[\\{\\},:=;]"),a=new RegExp("^((==)|(~=)|(<=)|(>=)|(<<)|(>>)|(\\.[\\+\\-\\*/\\^\\\\]))"),c=new RegExp("^((!=)|(\\+=)|(\\-=)|(\\*=)|(/=)|(&=)|(\\|=)|(\\^=))"),m=new RegExp("^((>>=)|(<<=))"),f=new RegExp("^[\\]\\)]"),u=new RegExp("^[_A-Za-z][_A-Za-z0-9]*"),s=e(["error","eval","function","abs","acos","atan","asin","cos","cosh","exp","log","prod","sum","log10","max","min","sign","sin","sinh","sqrt","tan","reshape","break","zeros","default","margin","round","ones","rand","syn","ceil","floor","size","clear","zeros","eye","mean","std","cov","det","eig","inv","norm","rank","trace","expm","logm","sqrtm","linspace","plot","title","xlabel","ylabel","legend","text","grid","meshgrid","mesh","num2str","fft","ifft","arrayfun","cellfun","input","fliplr","flipud","ismember"]),l=e(["return","case","switch","else","elseif","end","endif","endfunction","if","otherwise","do","for","while","try","catch","classdef","properties","events","methods","global","persistent","endfor","endwhile","printf","sprintf","disp","until","continue","pkg"]);return{startState:function(){return{tokenize:r}},token:function(e,t){var r=t.tokenize(e,t);return("number"===r||"variable"===r)&&(t.tokenize=n),r}}}),e.defineMIME("text/x-octave","octave")});