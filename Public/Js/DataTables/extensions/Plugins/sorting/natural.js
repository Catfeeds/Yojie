!function(){function e(e,a){var t=/(^-?[0-9]+(\.?[0-9]*)[df]?e?[0-9]?$|^0x[0-9a-f]+$|[0-9]+)/gi,r=/(^[ ]*|[ ]*$)/g,n=/(^([\w ]+,?[\w ]+)?[\w ]+,?[\w ]+\d+:\d+(:\d+)?[\w ]?|^\d{1,4}[\/\-]\d{1,4}[\/\-]\d{1,4}|^\w+, \w+ \d+, \d{4})/,c=/^0x[0-9a-f]+$/i,l=/^0/,i=e.toString().replace(r,"")||"",p=a.toString().replace(r,"")||"",f=i.replace(t,"\x00$1\x00").replace(/\0$/,"").replace(/^\0/,"").split("\x00"),u=p.replace(t,"\x00$1\x00").replace(/\0$/,"").replace(/^\0/,"").split("\x00"),o=parseInt(i.match(c),10)||1!==f.length&&i.match(n)&&Date.parse(i),s=parseInt(p.match(c),10)||o&&p.match(n)&&Date.parse(p)||null;if(s){if(s>o)return-1;if(o>s)return 1}for(var d=0,x=Math.max(f.length,u.length);x>d;d++){var h=!(f[d]||"").match(l)&&parseFloat(f[d],10)||f[d]||0,$=!(u[d]||"").match(l)&&parseFloat(u[d],10)||u[d]||0;if(isNaN(h)!==isNaN($))return isNaN(h)?1:-1;if(typeof h!=typeof $&&(h+="",$+=""),$>h)return-1;if(h>$)return 1}return 0}jQuery.extend(jQuery.fn.dataTableExt.oSort,{"natural-asc":function(a,t){return e(a,t)},"natural-desc":function(a,t){return-1*e(a,t)}})}();