var CSSParser=Editor.Parser=function(){function e(e,t,n){return function(s){return!e||/^\}/.test(s)?n:t?n+2*indentUnit:n+indentUnit}}function t(t,s){s=s||0;var r=n(t),c=!1,i=!1,a=!1,u={next:function(){var t=r.next(),n=t.style,u=t.content;return"css-hash"==n&&(n=t.style=i?"css-colorcode":"css-identifier"),"css-identifier"==n&&(i?t.style="css-value":c||a||(t.style="css-selector")),"\n"==u&&(t.indentation=e(c,i,s)),"{"==u&&"@media"==a?a=!1:"{"==u?c=!0:"}"==u?c=i=a=!1:";"==u?i=a=!1:c&&"css-comment"!=n&&"whitespace"!=n?i=!0:c||"css-at"!=n||(a=u),t},copy:function(){var e=c,t=i,s=r.state;return function(a){return r=n(a,s),c=e,i=t,u}}};return u}var n=function(){function e(e,r){var c=e.next();return"@"==c?(e.nextWhileMatches(/\w/),"css-at"):"/"==c&&e.equals("*")?(r(t),null):"<"==c&&e.equals("!")?(r(n),null):"="==c?"css-compare":!e.equals("=")||"~"!=c&&"|"!=c?'"'==c||"'"==c?(r(s(c)),null):"#"==c?(e.nextWhileMatches(/\w/),"css-hash"):"!"==c?(e.nextWhileMatches(/[ \t]/),e.nextWhileMatches(/\w/),"css-important"):/\d/.test(c)?(e.nextWhileMatches(/[\w.%]/),"css-unit"):/[,.+>*\/]/.test(c)?"css-select-op":/[;{}:\[\]]/.test(c)?"css-punctuation":(e.nextWhileMatches(/[\w\\\-_]/),"css-identifier"):(e.next(),"css-compare")}function t(t,n){for(var s=!1;!t.endOfLine();){var r=t.next();if(s&&"/"==r){n(e);break}s="*"==r}return"css-comment"}function n(t,n){for(var s=0;!t.endOfLine();){var r=t.next();if(s>=2&&">"==r){n(e);break}s="-"==r?s+1:0}return"css-comment"}function s(t){return function(n,s){for(var r=!1;!n.endOfLine();){var c=n.next();if(c==t&&!r)break;r=!r&&"\\"==c}return r||s(e),"css-string"}}return function(t,n){return tokenizer(t,n||e)}}();return{make:t,electricChars:"}"}}();