function getLodop(e,t){var n,o="<br><font color='#FF00FF'>打印控件未安装1!点击这里<a href='../../../Public/lodop/install_lodop32.exe' target='_self'>执行安装</a>,安装后请刷新页面或重新进入。</font>",r="<br><font color='#FF00FF'>打印控件需要升级2!点击这里<a href='../../../Public/lodop/install_lodop32.exe' target='_self'>执行升级</a>,升级后请重新进入。</font>",d="<br><font color='#FF00FF'>打印控件未安装3!点击这里<a href='../../../Public/lodop/install_lodop64.exe' target='_self'>执行安装</a>,安装后请刷新页面或重新进入。</font>",i="<br><font color='#FF00FF'>打印控件需要升级4!点击这里<a href='../../../Public/lodop/install_lodop64.exe' target='_self'>执行升级</a>,升级后请重新进入。</font>",l="<br><br><font color='#FF00FF'>（注意：如曾安装过Lodop旧版附件npActiveXPLugin,请在【工具】->【附加组件】->【扩展】中先卸它）</font>",u="<br><br><font color='#FF00FF'>(如果此前正常，仅因浏览器升级或重安装而出问题，需重新执行以上安装）</font>";try{var c=navigator.userAgent.indexOf("MSIE")>=0||navigator.userAgent.indexOf("Trident")>=0,a=c&&navigator.userAgent.indexOf("x64")>=0;return void 0!=e||void 0!=t?n=c?e:t:null==CreatedOKLodop7766?(n=document.createElement("object"),n.setAttribute("width",0),n.setAttribute("height",0),n.setAttribute("style","position:absolute;left:0px;top:-100px;width:0px;height:0px;"),c?n.setAttribute("classid","clsid:2105C259-1E0C-4534-8141-A753534CB4CA"):n.setAttribute("type","application/x-print-lodop"),document.documentElement.appendChild(n),CreatedOKLodop7766=n):n=CreatedOKLodop7766,null==n||"undefined"==typeof n.VERSION?($("#background,#progressBar").hide(),navigator.userAgent.indexOf("Chrome")>=0&&(document.documentElement.innerHTML=u+document.documentElement.innerHTML),navigator.userAgent.indexOf("Firefox")>=0&&(document.documentElement.innerHTML=l+document.documentElement.innerHTML),a?document.write(d):c?document.write(o):document.documentElement.innerHTML=o+document.documentElement.innerHTML,n):n.VERSION<"6.1.7.5"?($("#background,#progressBar").hide(),a?document.write(i):c?document.write(r):document.documentElement.innerHTML=r+document.documentElement.innerHTML,n):n}catch(m){return $("#background,#progressBar").hide(),a?document.documentElement.innerHTML="Error:"+d+document.documentElement.innerHTML:document.documentElement.innerHTML="Error:"+o+document.documentElement.innerHTML,n}}var CreatedOKLodop7766=null;