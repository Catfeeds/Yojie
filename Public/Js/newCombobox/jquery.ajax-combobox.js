!function(e){function t(e,t,o){this._setOption(t,o),this._setMessage(),this._setCssClass(),this._setProp(),this._setElem(e),this._setButtonAttrDefault(),this._setButtonPosition(),this._setInitRecord(),this._ehButton(),this._ehComboInput(),this._ehWhole(),this._ehTextArea(),this.option.shorten_btn&&this._findUrlToShorten(this)}e.fn.ajaxComboBox=function(o,s){var i=[];return this.each(function(){i.push(new t(this,o,s))}),void 0!=s&&void 0!=s.instance&&s.instance?e(i):this},e.extend(t.prototype,{_setOption:function(e,t){t=this._setOption1st(e,t),t=this._setOption2nd(t),this.option=t},_setOption1st:function(t,o){return e.extend({source:t,lang:"ch",plugin_type:"combobox",init_record:!1,db_table:"tbl",field:"name",and_or:"AND",per_page:10,navi_num:5,primary_key:"id",button_img:TP_PUBLIC+"/js/newCombobox/btn.png",bind_to:!1,navi_simple:!1,sub_info:!1,sub_as:{},show_field:"",hide_field:"",select_only:!1,tags:!1,shorten_btn:!1,shorten_src:"lib/bitly.php",shorten_min:20,shorten_reg:!1},o)},_setOption2nd:function(e){e.search_field=void 0==e.search_field?e.field:e.search_field,e.and_or=e.and_or.toUpperCase();for(var t=["hide_field","show_field","search_field"],o=0;o<t.length;o++)e[t[o]]=this._strToArray(e[t[o]]);return e.order_by=void 0==e.order_by?e.search_field:e.order_by,e.order_by=this._setOrderbyOption(e.order_by,e.field),"textarea"==e.plugin_type&&(e.shorten_reg=this._setRegExpShort(e.shorten_reg,e.shorten_min)),e.tags&&(e.tags=this._setTagPattern(e)),e},_strToArray:function(e){return e.replace(/[\s　]+/g,"").split(",")},_setRegExpShort:function(e,t){if(e)return e;var o="(?:^|[\\s|　\\[(<「『（【［＜〈《]+)";return o+="(",o+="https:\\/\\/[^\\s|　\\])>」』）】］＞〉》]{"+(t-7)+",}",o+="|",o+="http:\\/\\/[^\\s|　\\])>」』）】］＞〉》]{"+(t-6)+",}",o+="|",o+="ftp:\\/\\/[^\\s|　\\])>」』）】］＞〉》]{"+(t-5)+",}",o+=")",new RegExp(o,"g")},_setTagPattern:function(e){for(var t=0;t<e.tags.length;t++)e.tags[t]=this._setTagOptions(e,t),e.tags[t].pattern=this._setRegExpTag(e.tags[t].pattern,e.tags[t].space);return e.tags},_setTagOptions:function(t,o){t.tags[o]=e.extend({space:[!0,!0],db_table:t.db_table,field:t.field,search_field:t.search_field,primary_key:t.primary_key,sub_info:t.sub_info,sub_as:t.sub_as,show_field:t.show_field,hide_field:t.hide_field},t.tags[o]);for(var s=["hide_field","show_field","search_field"],i=0;i<s.length;i++)"object"!=typeof t.tags[o][s[i]]&&(t.tags[o][s[i]]=this._strToArray(t.tags[o][s[i]]));return t.tags[o].order_by=void 0==t.tags[o].order_by?t.order_by:this._setOrderbyOption(t.tags[o].order_by,t.tags[o].field),t.tags[o]},_setRegExpTag:function(e,t){var o=e[0].replace(/[\s\S]*/,this._escapeForReg),s=e[1].replace(/[\s\S]*/,this._escapeForReg);return{left:e[0],right:e[1],reg_left:new RegExp(o+"((?:(?!"+o+"|"+s+")[^\\s　])*)$"),reg_right:new RegExp("^((?:(?!"+o+"|"+s+")[^\\s　])+)"),space_left:new RegExp("^"+o+"$|[\\s　]+"+o+"$"),space_right:new RegExp("^$|^[\\s　]+"),comp_right:new RegExp("^"+s)}},_escapeForReg:function(e){return"\\u"+(65536+e.charCodeAt(0)).toString(16).slice(1)},_setOrderbyOption:function(t,o){var s=[];if("object"==typeof t)for(var i=0;i<t.length;i++){var n=e.trim(t[i]).split(" ");s[i]=2==n.length?n:[n[0],"ASC"]}else{var n=e.trim(t).split(" ");s[0]=2==n.length?n:n[0].match(/^(ASC|DESC)$/i)?[o,n[0]]:[n[0],"ASC"]}return s},_setMessage:function(){var e;switch(this.option.lang){case"de":e={add_btn:"Hinzufügen-Button",add_title:"Box hinzufügen",del_btn:"Löschen-Button",del_title:"Box löschen",next:"Nächsten",next_title:"Nächsten"+this.option.per_page+" (Pfeil-rechts)",prev:"Vorherigen",prev_title:"Vorherigen"+this.option.per_page+" (Pfeil-links)",first_title:"Ersten (Umschalt + Pfeil-links)",last_title:"Letzten (Umschalt + Pfeil-rechts)",get_all_btn:"alle (Pfeil-runter)",get_all_alt:"(Button)",close_btn:"Schließen (Tab)",close_alt:"(Button)",loading:"lade...",loading_alt:"(lade)",page_info:"num_page_top - num_page_end von cnt_whole",select_ng:"Achtung: Bitte wählen Sie aus der Liste aus.",select_ok:"OK : Richtig ausgewählt.",not_found:"nicht gefunden",ajax_error:"Bei der Verbindung zum Server ist ein Fehler aufgetreten. (ajax-combobox)"};break;case"en":e={add_btn:"Add button",add_title:"add a box",del_btn:"Del button",del_title:"delete a box",next:"Next",next_title:"Next"+this.option.per_page+" (Right key)",prev:"Prev",prev_title:"Prev"+this.option.per_page+" (Left key)",first_title:"First (Shift + Left key)",last_title:"Last (Shift + Right key)",get_all_btn:"Get All (Down key)",get_all_alt:"(button)",close_btn:"Close (Tab key)",close_alt:"(button)",loading:"loading...",loading_alt:"(loading)",page_info:"num_page_top - num_page_end of cnt_whole",select_ng:"Attention : Please choose from among the list.",select_ok:"OK : Correctly selected.",not_found:"not found",ajax_error:"An error occurred while connecting to server. (ajax-combobox)"};break;case"es":e={add_btn:"Agregar boton",add_title:"Agregar una opcion",del_btn:"Borrar boton",del_title:"Borrar una opcion",next:"Siguiente",next_title:"Proximas "+this.option.per_page+" (tecla derecha)",prev:"Anterior",prev_title:"Anteriores "+this.option.per_page+" (tecla izquierda)",first_title:"Primera (Shift + Left)",last_title:"Ultima (Shift + Right)",get_all_btn:"Ver todos (tecla abajo)",get_all_alt:"(boton)",close_btn:"Cerrar (tecla TAB)",close_alt:"(boton)",loading:"Cargando...",loading_alt:"(Cargando)",page_info:"num_page_top - num_page_end de cnt_whole",select_ng:"Atencion: Elija una opcion de la lista.",select_ok:"OK: Correctamente seleccionado.",not_found:"no encuentre",ajax_error:"Un error ocurrió mientras conectando al servidor. (ajax-combobox)"};break;case"pt-br":e={add_btn:"Adicionar botão",add_title:"Adicionar uma caixa",del_btn:"Apagar botão",del_title:"Apagar uma caixa",next:"Próxima",next_title:"Próxima "+this.option.per_page+" (tecla direita)",prev:"Anterior",prev_title:"Anterior "+this.option.per_page+" (tecla esquerda)",first_title:"Primeira (Shift + Left)",last_title:"Última (Shift + Right)",get_all_btn:"Ver todos (Seta para baixo)",get_all_alt:"(botão)",close_btn:"Fechar (tecla TAB)",close_alt:"(botão)",loading:"Carregando...",loading_alt:"(Carregando)",page_info:"num_page_top - num_page_end de cnt_whole",select_ng:"Atenção: Escolha uma opção da lista.",select_ok:"OK: Selecionado Corretamente.",not_found:"não encontrado",ajax_error:"Um erro aconteceu enquanto conectando a servidor. (ajax-combobox)"};break;case"ja":e={add_btn:"追加ボタン",add_title:"入力ボックスを追加します",del_btn:"削除ボタン",del_title:"入力ボックスを削除します",next:"次へ",next_title:"次の"+this.option.per_page+"件 (右キー)",prev:"前へ",prev_title:"前の"+this.option.per_page+"件 (左キー)",first_title:"最初のページへ (Shift + 左キー)",last_title:"最後のページへ (Shift + 右キー)",get_all_btn:"全件取得 (下キー)",get_all_alt:"画像:ボタン",close_btn:"閉じる (Tabキー)",close_alt:"画像:ボタン",loading:"読み込み中...",loading_alt:"画像:読み込み中...",page_info:"num_page_top - num_page_end 件 (全 cnt_whole 件)",select_ng:"注意 : リストの中から選択してください",select_ok:"OK : 正しく選択されました。",not_found:"(0 件)",ajax_error:"サーバとの通信でエラーが発生しました。(ajax-combobox)"};default:e={add_btn:"Add button",add_title:"add a box",del_btn:"Del button",del_title:"delete a box",next:"下一页",next_title:"",prev:"上一页",prev_title:"",first_title:"首页",last_title:"尾页",get_all_btn:"",get_all_alt:"(button)",close_btn:"",close_alt:"(button)",loading:"loading...",loading_alt:"(loading)",page_info:"num_page_top - num_page_end of cnt_whole",select_ng:"注意:请从列表中选择。",select_ok:"",not_found:"没有找到",ajax_error:"连接到服务器时发生一个错误。"}}this.message=e},_setCssClass:function(){var t={container:"ac_container",container_open:"ac_container_open",selected:"ac_selected",re_area:"ac_result_area",navi:"ac_navi",results:"ac_results",re_off:"ac_results_off",select:"ac_over",sub_info:"ac_subinfo",select_ok:"ac_select_ok",select_ng:"ac_select_ng",input_off:"ac_input_off"};switch(this.option.plugin_type){case"combobox":t=e.extend(t,{button:"ac_button",btn_on:"ac_btn_on",btn_out:"ac_btn_out",input:"ac_input"});break;case"simple":t=e.extend(t,{input:"ac_s_input"});break;case"textarea":t=e.extend(t,{input:"ac_textarea",btn_short_off:"ac_btn_short_off"})}this.css_class=t},_setProp:function(){this.prop={timer_valchange:!1,is_suggest:!1,page_all:1,page_suggest:1,max_all:1,max_suggest:1,is_paging:!1,is_loading:!1,reserve_btn:!1,reserve_click:!1,xhr:!1,key_paging:!1,key_select:!1,prev_value:"",size_navi:null,size_results:null,size_li:null,size_left:null,tag:null}},_setElem:function(t){var o={};if(o.combo_input=e(t).attr("autocomplete","off").addClass(this.css_class.input).wrap("<div>"),o.container=e(o.combo_input).parent().addClass(this.css_class.container),"combobox"==this.option.plugin_type?(o.button=e("<div>").addClass(this.css_class.button),o.img=e("<img>").attr("src",this.option.button_img)):(o.button=!1,o.img=!1),o.result_area=e("<div>").addClass(this.css_class.re_area),o.navi=e("<div>").addClass(this.css_class.navi),o.navi_info=e("<div>").addClass("info"),o.navi_p=e("<p>"),o.results=e("<ul>").addClass(this.css_class.results),o.sub_info=e("<div>").addClass(this.css_class.sub_info),"textarea"==this.option.plugin_type)o.hidden=!1;else{var s=void 0!=e(o.combo_input).attr("name")?e(o.combo_input).attr("name"):e(o.combo_input).attr("id");e(o.combo_input).removeAttr("name"),o.hidden=e('<input type="hidden" />').attr({name:s,id:s}).val("")}switch(this.option.plugin_type){case"combobox":e(o.container).append(o.button).append(o.result_area).append(o.hidden),e(o.button).append(o.img);break;case"simple":e(o.container).append(o.result_area).append(o.hidden);break;case"textarea":e(o.container).append(o.result_area)}e(o.result_area).append(o.navi).append(o.results).append(o.sub_info),e(o.navi).append(o.navi_info).append(o.navi_p),"combobox"==this.option.plugin_type?(e(o.container).width(e(o.combo_input).outerWidth()+e(o.button).outerWidth()),e(o.button).height(e(o.combo_input).innerHeight())):e(o.container).width(e(o.combo_input).outerWidth()),this.elem=o},_setButtonAttrDefault:function(){this.option.select_only&&(""!=e(this.elem.combo_input).val()?"textarea"!=this.option.plugin_type&&(""!=e(this.elem.hidden).val()?e(this.elem.combo_input).attr("title",this.message.select_ok).removeClass(this.css_class.select_ng).addClass(this.css_class.select_ok):e(this.elem.combo_input).attr("title",this.message.select_ng).removeClass(this.css_class.select_ok).addClass(this.css_class.select_ng)):("textarea"!=this.option.plugin_type&&e(this.elem.hidden).val(""),e(this.elem.combo_input).removeAttr("title").removeClass(this.css_class.select_ng))),"combobox"==this.option.plugin_type&&(e(this.elem.button).attr("title",this.message.get_all_btn),e(this.elem.img).attr("src",this.option.button_img))},_setButtonPosition:function(){if("combobox"==this.option.plugin_type){var t=e(this.elem.button).innerWidth(),o=e(this.elem.button).innerHeight(),s=e(this.elem.img).width(),i=e(this.elem.img).height(),n=t/2-s/2,a=o/2-i/2;e(this.elem.img).css({top:a,left:n})}},_setInitRecord:function(){if(void 0!=e(this.elem.combo_input).attr("init_record")&&(this.option.init_record=e(this.elem.combo_input).attr("init_record")),this.option.init_record!==!1)if("textarea"!=this.option.plugin_type&&e(this.elem.hidden).val(this.option.init_record),"object"==typeof this.option.source){for(var t=0;t<this.option.source.length;t++)if(this.option.source[t][this.option.primary_key]==this.option.init_record){var o=this.option.source[t];break}this._afterInit(this,o)}else{var s=this;e.ajax({dataType:"json",url:s.option.source,data:{db_table:this.option.db_table,pkey_name:this.option.primary_key,pkey_val:this.option.init_record},success:function(e){s._afterInit(s,e)},error:function(e,t,o){s._ajaxErrorNotify(s,o)}})}},_afterInit:function(t,o){e(t.elem.combo_input).val(o[t.option.field]),"textarea"!=t.option.plugin_type&&e(t.elem.hidden).val(o[t.option.primary_key]),t.prop.prev_value=o[t.option.field],t.option.select_only&&e(t.elem.combo_input).attr("title",t.message.select_ok).removeClass(t.css_class.select_ng).addClass(t.css_class.select_ok)},_ehButton:function(){if("combobox"==this.option.plugin_type){var t=this;e(t.elem.button).mouseup(function(o){e(t.elem.result_area).is(":hidden")?(clearInterval(t.prop.timer_valchange),t.prop.is_suggest=!1,t._suggest(t),e(t.elem.combo_input).focus()):t._hideResults(t),o.stopPropagation()}).mouseover(function(){e(t.elem.button).addClass(t.css_class.btn_on).removeClass(t.css_class.btn_out)}).mouseout(function(){e(t.elem.button).addClass(t.css_class.btn_out).removeClass(t.css_class.btn_on)}).mouseout()}},_ehComboInput:function(){var t=this;e(t.elem.combo_input).keydown(function(e){t._processKey(t,e)}),e(t.elem.combo_input).focus(function(){t._setTimerCheckValue(t)}).click(function(){t._setCssFocusedInput(t),e(t.elem.results).children("li").removeClass(t.css_class.select)})},_ehWhole:function(){var t=this,o=!1;e(t.elem.container).mousedown(function(){o=!0}),e("html").mousedown(function(){o?o=!1:t._hideResults(t)})},_ehResults:function(){var t=this;e(t.elem.results).children("li").mouseover(function(){return t.prop.key_select?void(t.prop.key_select=!1):(t._setSubInfo(t,this),e(t.elem.results).children("li").removeClass(t.css_class.select),e(this).addClass(t.css_class.select),void t._setCssFocusedResults(t))}).click(function(e){return t.prop.key_select?void(t.prop.key_select=!1):(e.preventDefault(),e.stopPropagation(),void t._selectCurrentLine(t,!1))})},_ehNaviPaging:function(t){e(t.elem.navi).find(".navi_first").mouseup(function(o){e(t.elem.combo_input).focus(),o.preventDefault(),t._firstPage(t)}),e(t.elem.navi).find(".navi_prev").mouseup(function(o){e(t.elem.combo_input).focus(),o.preventDefault(),t._prevPage(t)}),e(t.elem.navi).find(".navi_page").mouseup(function(o){e(t.elem.combo_input).focus(),o.preventDefault(),t.prop.is_suggest?t.prop.page_suggest=parseInt(e(this).text(),10):t.prop.page_all=parseInt(e(this).text(),10),t.prop.is_paging=!0,t._suggest(t)}),e(t.elem.navi).find(".navi_next").mouseup(function(o){e(t.elem.combo_input).focus(),o.preventDefault(),t._nextPage(t)}),e(t.elem.navi).find(".navi_last").mouseup(function(o){e(t.elem.combo_input).focus(),o.preventDefault(),t._lastPage(t)})},_ehTextArea:function(){var t=this;t.option.shorten_btn&&e(t.option.shorten_btn).click(function(){t._getShortURL(t)})},_getShortURL:function(t){e(t.elem.combo_input).attr("disabled","disabled");for(var o=e(t.elem.combo_input).val(),s=[],i=null;null!=(i=t.option.shorten_reg.exec(o));)s[s.length]=i[1];if(s.length<1)return void e(t.elem.combo_input).removeAttr("disabled");for(var n={},a=0;a<s.length;a++)n["p_"+a]=s[a];e.ajax({dataType:"json",url:t.option.shorten_src,data:n,success:function(s){var i=0,n=o.replace(t.option.shorten_reg,function(){var e=arguments[0].replace(arguments[1],s[i]);return i++,e});e(t.elem.combo_input).val(n),t.prop.prev_value=n,t._disableButtonShort(t)},error:function(e,o,s){t._ajaxErrorNotify(t,s)},complete:function(){e(t.elem.combo_input).removeAttr("disabled").focus()}})},_ajaxErrorNotify:function(e,t){alert(e.message.ajax_error)},_scrollWindow:function(t,o){var s,i=t._getCurrentLine(t),n=i&&!o?i.offset().top:e(t.elem.container).offset().top;if(t.option.sub_info){var a=e(t.elem.sub_info).children("dl:visible");s=e(a).height()+parseInt(e(a).css("border-top-width"))+parseInt(e(a).css("border-bottom-width"))}else t.prop.size_li=e(t.elem.results).children("li:first").outerHeight(),s=t.prop.size_li;var r,l=e(window).height(),p=e(window).scrollTop(),_=p+l-s;if(e(i).length)if(p>n||s>l)r=n-p;else{if(!(n>_))return;r=n-_}else p>n&&(r=n-p);window.scrollBy(0,r)},_setCssFocusedInput:function(t){e(t.elem.results).addClass(t.css_class.re_off),e(t.elem.combo_input).removeClass(t.css_class.input_off),e(t.elem.sub_info).children("dl").hide()},_setCssFocusedResults:function(t){e(t.elem.results).removeClass(t.css_class.re_off),e(t.elem.combo_input).addClass(t.css_class.input_off)},_enableButtonShort:function(t){e(t.option.shorten_btn).removeClass(t.css_class.btn_short_off).removeAttr("disabled")},_disableButtonShort:function(t){e(t.option.shorten_btn).addClass(t.css_class.btn_short_off).attr("disabled","disabled")},_setTimerCheckValue:function(e){e.prop.timer_valchange=setTimeout(function(){e._checkValue(e)},500)},_checkValue:function(t){var o=e(t.elem.combo_input).val();if(o!=t.prop.prev_value)if(t.prop.prev_value=o,"textarea"==t.option.plugin_type){t._findUrlToShorten(t);var s=t._findTag(t,o);s&&(t._setTextAreaNewSearch(t,s),t._suggest(t))}else e(t.elem.combo_input).removeAttr("sub_info"),"textarea"!=t.option.plugin_type&&e(t.elem.hidden).val(""),t.option.select_only&&t._setButtonAttrDefault(),t.prop.page_suggest=1,t.prop.is_suggest=!0,t._suggest(t);else if("textarea"==t.option.plugin_type&&e(t.elem.result_area).is(":visible")){var i=t._findTag(t,o);i?(i.str!=t.prop.tag.str||i.pos_left!=t.prop.tag.pos_left)&&(t._setTextAreaNewSearch(t,i),t._suggest(t)):t._hideResults(t)}t._setTimerCheckValue(t)},_setTextAreaNewSearch:function(e,t){e.prop.tag=t,e.prop.page_suggest=1,e.option.search_field=e.option.tags[e.prop.tag.type].search_field,e.option.order_by=e.option.tags[e.prop.tag.type].order_by,e.option.primary_key=e.option.tags[e.prop.tag.type].primary_key,e.option.db_table=e.option.tags[e.prop.tag.type].db_table,e.option.field=e.option.tags[e.prop.tag.type].field,e.option.sub_info=e.option.tags[e.prop.tag.type].sub_info,e.option.sub_as=e.option.tags[e.prop.tag.type].sub_as,e.option.show_field=e.option.tags[e.prop.tag.type].show_field,e.option.hide_field=e.option.tags[e.prop.tag.type].hide_field},_findUrlToShorten:function(t){for(var o=null,s=null;null!=(s=t.option.shorten_reg.exec(e(t.elem.combo_input).val()));){o=!0,t.option.shorten_reg.lastIndex=0;break}o?t._enableButtonShort(t):t._disableButtonShort(t)},_findTag:function(t,o){for(var s=t._getCaretPosition(e(t.elem.combo_input).get(0)),i=0;i<t.option.tags.length;i++){var n=o.substring(0,s);if(n=n.match(t.option.tags[i].pattern.reg_left)){n=n[1];var a=s-n.length;0>a&&(a=0);var r=o.substring(s,o.length);if(r=r.match(t.option.tags[i].pattern.reg_right)){r=r[1];var l=s+r.length}else{r="";var l=s}var p=n+""+r;return t.prop.is_suggest=""==p?!1:!0,{type:i,str:p,pos_left:a,pos_right:l}}}return!1},_getCaretPosition:function(e){var t=0;if(document.selection){e.focus();var o=document.selection.createRange();o.moveStart("character",-e.value.length),t=o.text.length}else(e.selectionStart||"0"==e.selectionStart)&&(t=e.selectionStart);return t},_setCaretPosition:function(t,o){var s=e(t.elem.combo_input).get(0);if(s.setSelectionRange)s.focus(),s.setSelectionRange(o,o);else if(s.createTextRange){var i=s.createTextRange();i.collapse(!0),i.moveEnd("character",o),i.moveStart("character",o),i.select()}},_processKey:function(t,o){if(e.inArray(o.keyCode,[27,38,40,9])>-1&&e(t.elem.result_area).is(":visible")||e.inArray(o.keyCode,[37,39,13,9])>-1&&t._getCurrentLine(t)||40==o.keyCode&&"textarea"!=t.option.plugin_type)switch(o.preventDefault(),o.stopPropagation(),o.cancelBubble=!0,o.returnValue=!1,o.keyCode){case 37:o.shiftKey?t._firstPage(t):t._prevPage(t);break;case 38:t.prop.key_select=!0,t._prevLine(t);break;case 39:o.shiftKey?t._lastPage(t):t._nextPage(t);break;case 40:e(t.elem.results).children("li").length?(t.prop.key_select=!0,t._nextLine(t)):(t.prop.is_suggest=!1,t._suggest(t));break;case 9:t.prop.key_paging=!0,t._hideResults(t);break;case 13:t._selectCurrentLine(t,!0);break;case 27:t.prop.key_paging=!0,t._hideResults(t)}else 16!=o.keyCode&&t._setCssFocusedInput(t),t._checkValue(t)},_abortAjax:function(e){e.prop.xhr&&(e.prop.xhr.abort(),e.prop.xhr=!1)},_suggest:function(t){if("textarea"!=t.option.plugin_type){var o=t.prop.is_suggest?e.trim(e(t.elem.combo_input).val()):"";if(o.length<1&&t.prop.is_suggest)return void t._hideResults(t);o=o.split(/[\s　]+/)}else var o=[t.prop.tag.str];if(t._abortAjax(t),t._setLoading(t),e(t.elem.sub_info).children("dl").hide(),t.prop.is_paging){var s=t._getCurrentLine(t);t.prop.is_paging=s?e(t.elem.results).children("li").index(s):-1}else t.prop.is_suggest||(t.prop.is_paging=0);var i=t.prop.is_suggest?t.prop.page_suggest:t.prop.page_all;"object"==typeof t.option.source?t._searchForJson(t,o,i):t._searchForDb(t,o,i)},_setLoading:function(t){e(t.elem.navi_info).text(t.message.loading),""==e(t.elem.results).html()&&(e(t.elem.navi).children("p").empty(),t._calcWidthResults(t),e(t.elem.container).addClass(t.css_class.container_open))},_searchForDb:function(t,o,s){t.prop.xhr=e.ajax({dataType:"json",url:t.option.source,data:{q_word:o,page_num:s,per_page:t.option.per_page,search_field:t.option.search_field,and_or:t.option.and_or,order_by:t.option.order_by,db_table:t.option.db_table},success:function(n){if(n.candidate=[],n.primary_key=[],n.subinfo=[],"object"!=typeof n.result)return t.prop.xhr=null,void t._notFoundSearch(t);for(n.cnt_page=n.result.length,i=0;i<n.cnt_page;i++){n.subinfo[i]=[];for(key in n.result[i])if(key==t.option.primary_key&&n.primary_key.push(n.result[i][key]),key==t.option.field)n.candidate.push(n.result[i][key]);else if(-1==e.inArray(key,t.option.hide_field)){if(""!=t.option.show_field&&-1==e.inArray("*",t.option.show_field)&&-1==e.inArray(key,t.option.show_field))continue;n.subinfo[i][key]=n.result[i][key]}}delete n.result,t._prepareResults(t,n,o,s)},error:function(e,o,s){"abort"!=o&&(t._hideResults(t),t._ajaxErrorNotify(t,s))},complete:function(){t.prop.xhr=null}})},_searchForJson:function(t,o,s){var i=[],n=[],a=[],r={},l=0,p=[];do n[l]=o[l].replace(/\W/g,"\\$&").toString(),p[l]=new RegExp(n[l],"gi"),l++;while(l<o.length);for(var l=0;l<t.option.source.length;l++){for(var _=!1,c=0;c<p.length;c++)if(t.option.source[l][t.option.field].match(p[c])){if(_=!0,"OR"==t.option.and_or)break}else if(_=!1,"AND"==t.option.and_or)break;_&&i.push(t.option.source[l])}if(void 0==i.length)return void t._notFoundSearch(t);r.cnt_whole=i.length;for(var u=new RegExp("^"+n[0]+"$","gi"),d=new RegExp("^"+n[0],"gi"),g=[],h=[],f=[],l=0;l<i.length;l++)i[l][t.option.order_by[0][0]].match(u)?g.push(i[l]):i[l][t.option.order_by[0][0]].match(d)?h.push(i[l]):f.push(i[l]);t.option.order_by[0][1].match(/^asc$/i)?(g=t._sortAsc(t,g),h=t._sortAsc(t,h),f=t._sortAsc(t,f)):(g=t._sortDesc(t,g),h=t._sortDesc(t,h),f=t._sortDesc(t,f)),a=a.concat(g).concat(h).concat(f);for(var m=(s-1)*t.option.per_page,b=m+t.option.per_page,l=m,v=0;b>l&&void 0!=a[l];l++,v++)for(var y in a[l])if(y==t.option.primary_key&&(void 0==r.primary_key&&(r.primary_key=[]),r.primary_key.push(a[l][y])),y==t.option.field)void 0==r.candidate&&(r.candidate=[]),r.candidate.push(a[l][y]);else if(-1==e.inArray(y,t.option.hide_field)){if(""!=t.option.show_field&&-1==e.inArray("*",t.option.show_field)&&-1==e.inArray(y,t.option.show_field))continue;void 0==r.subinfo&&(r.subinfo=[]),void 0==r.subinfo[v]&&(r.subinfo[v]=[]),r.subinfo[v][y]=a[l][y]}void 0==r.candidate&&(r.candidate=[]),r.cnt_page=r.candidate.length,t._prepareResults(t,r,o,s)},_sortAsc:function(e,t){return t.sort(function(t,o){return t[e.option.order_by[0][0]].localeCompare(o[e.option.order_by[0][0]])}),t},_sortDesc:function(e,t){return t.sort(function(t,o){return o[e.option.order_by[0][0]].localeCompare(t[e.option.order_by[0][0]])}),t},_notFoundSearch:function(t){e(t.elem.navi_info).text(t.message.not_found),e(t.elem.navi_p).hide(),e(t.elem.results).empty(),e(t.elem.sub_info).empty(),t._calcWidthResults(t),e(t.elem.container).addClass(t.css_class.container_open),t._setCssFocusedInput(t)},_prepareResults:function(t,o,s,i){if(t._setNavi(t,o.cnt_whole,o.cnt_page,i),o.subinfo&&t.option.sub_info||(o.subinfo=!1),o.primary_key||(o.primary_key=!1),t.option.select_only&&1===o.candidate.length&&o.candidate[0]==s[0]&&("textarea"!=t.option.plugin_type&&e(t.elem.hidden).val(o.primary_key[0]),this._setButtonAttrDefault()),t._displayResults(t,o.candidate,o.subinfo,o.primary_key),t.prop.is_paging===!1)t._setCssFocusedInput(t);else{var n=t.prop.is_paging,a=e(t.elem.results).children("li").length-1;n>a&&(n=a);var r=e(t.elem.results).children("li").eq(n);e(r).addClass(t.css_class.select),t._setSubInfo(t,r),t.prop.is_paging=!1,t._setCssFocusedResults(t)}},_setNavi:function(t,o,s,i){var n=t.option.per_page*(i-1)+1,a=n+s-1,r=t.message.page_info.replace("cnt_whole",o).replace("num_page_top",n).replace("num_page_end",a);e(t.elem.navi_info).text(r);var l=Math.ceil(o/t.option.per_page);if(l>1){e(t.elem.navi_p).empty(),t.prop.is_suggest?t.prop.max_suggest=l:t.prop.max_all=l;for(var p=i-Math.ceil((t.option.navi_num-1)/2),_=i+Math.floor((t.option.navi_num-1)/2);1>p;)p++,_++;for(;_>l;)_--;for(;_-p<t.option.navi_num-1&&p>1;)p--;1==i?(t.option.navi_simple||e("<span>").text("<< 1").addClass("page_end").appendTo(t.elem.navi_p),e("<span>").text(t.message.prev).addClass("page_end").appendTo(t.elem.navi_p)):(t.option.navi_simple||e("<a>").attr({href:"javascript:void(0)","class":"navi_first"}).text("<< 1").attr("title",t.message.first_title).appendTo(t.elem.navi_p),e("<a>").attr({href:"javascript:void(0)","class":"navi_prev",title:t.message.prev_title}).text(t.message.prev).appendTo(t.elem.navi_p));for(var c=p;_>=c;c++){var u=c==i?'<span class="current">'+c+"</span>":c;e("<a>").attr({href:"javascript:void(0)","class":"navi_page"}).html(u).appendTo(t.elem.navi_p)}i==l?(e("<span>").text(t.message.next).addClass("page_end").appendTo(t.elem.navi_p),t.option.navi_simple||e("<span>").text(l+" >>").addClass("page_end").appendTo(t.elem.navi_p)):(e("<a>").attr({href:"javascript:void(0)","class":"navi_next"}).text(t.message.next).attr("title",t.message.next_title).appendTo(t.elem.navi_p),t.option.navi_simple||e("<a>").attr({href:"javascript:void(0)","class":"navi_last"}).text(l+" >>").attr("title",t.message.last_title).appendTo(t.elem.navi_p)),e(t.elem.navi_p).show(),t._ehNaviPaging(t)}else e(t.elem.navi_p).hide()},_setSubInfo:function(t,o){if(t.option.sub_info){t.prop.size_results=(e(t.elem.results).outerHeight()-e(t.elem.results).height())/2,t.prop.size_navi=e(t.elem.navi).outerHeight(),t.prop.size_li=e(t.elem.results).children("li:first").outerHeight(),t.prop.size_left=e(t.elem.results).outerWidth();var s=e(t.elem.results).children("li").index(o);e(t.elem.sub_info).children("dl").hide();var i=0;"none"!=e(t.elem.navi).css("display")&&(i+=t.prop.size_navi),i+=t.prop.size_results+t.prop.size_li*s;var n=t.prop.size_left;i+="px",n+="px",e(t.elem.sub_info).children("dl").eq(s).css({position:"absolute",top:i,left:n,display:"block"})}},_displayResults:function(t,o,s,i){e(t.elem.results).empty(),e(t.elem.sub_info).empty();for(var n=0;n<o.length;n++){var a=e("<li>").text(o[n]).attr({pkey:i[n],title:o[n]});if("textarea"!=t.option.plugin_type&&i[n]==e(t.elem.hidden).val()&&e(a).addClass(t.css_class.selected),e(t.elem.results).append(a),s){var r=[],l=e("<dl>");for(key in s[n]){var p=key.replace("'","\\'");null==s[n][key]?s[n][key]="":s[n][key]+="";var _=s[n][key].replace("'","\\'");if(r.push("'"+p+"':'"+_+"'"),null!=t.option.sub_as[key])var c=t.option.sub_as[key];else var c=key;c=e("<dt>").text(c),"simple"==t.option.sub_info&&e(c).addClass("hide"),l.append(c);var u=e("<dd>").text(s[n][key]);l.append(u)}r="{"+r.join(",")+"}",e(a).attr("sub_info",r),e(t.elem.sub_info).append(l),"simple"==t.option.sub_info&&""==l.children("dd").text()&&l.addClass("ac_dl_empty")}}t._calcWidthResults(t),e(t.elem.container).addClass(t.css_class.container_open),t._ehResults(),"combobox"==t.option.plugin_type&&e(t.elem.button).attr("title",t.message.close_btn)},_calcWidthResults:function(t){if("combobox"==t.option.plugin_type)var o=e(t.elem.combo_input).outerWidth()+e(t.elem.button).outerWidth();else var o=e(t.elem.combo_input).outerWidth();if(e(t.elem.container).width(o),"static"==e(t.elem.container).css("position")){var s=e(t.elem.combo_input).offset();e(t.elem.result_area).css({top:s.top+e(t.elem.combo_input).outerHeight()+"px",left:s.left+"px"})}else e(t.elem.result_area).css({top:e(t.elem.combo_input).outerHeight()+"px",left:"0px"});e(t.elem.result_area).width(e(t.elem.container).width()-(e(t.elem.result_area).outerWidth()-e(t.elem.result_area).innerWidth())).show()},_hideResults:function(t){t.prop.key_paging&&(t._scrollWindow(t,!0),t.prop.key_paging=!1),t._setCssFocusedInput(t),e(t.elem.results).empty(),e(t.elem.sub_info).empty(),e(t.elem.result_area).hide(),e(t.elem.container).removeClass(t.css_class.container_open),t._abortAjax(t),t._setButtonAttrDefault()},_firstPage:function(e){e.prop.is_suggest?e.prop.page_suggest>1&&(e.prop.page_suggest=1,e.prop.is_paging=!0,e._suggest(e)):e.prop.page_all>1&&(e.prop.page_all=1,e.prop.is_paging=!0,e._suggest(e))},_prevPage:function(e){e.prop.is_suggest?e.prop.page_suggest>1&&(e.prop.page_suggest--,e.prop.is_paging=!0,e._suggest(e)):e.prop.page_all>1&&(e.prop.page_all--,e.prop.is_paging=!0,e._suggest(e))},_nextPage:function(e){e.prop.is_suggest?e.prop.page_suggest<e.prop.max_suggest&&(e.prop.page_suggest++,e.prop.is_paging=!0,e._suggest(e)):e.prop.page_all<e.prop.max_all&&(e.prop.page_all++,e.prop.is_paging=!0,e._suggest(e))},_lastPage:function(e){e.prop.is_suggest?e.prop.page_suggest<e.prop.max_suggest&&(e.prop.page_suggest=e.prop.max_suggest,e.prop.is_paging=!0,e._suggest(e)):e.prop.page_all<e.prop.max_all&&(e.prop.page_all=e.prop.max_all,e.prop.is_paging=!0,e._suggest(e))},_selectCurrentLine:function(t,o){t._scrollWindow(t,!0);var s=t._getCurrentLine(t);if(s){if("textarea"!=t.option.plugin_type)e(t.elem.combo_input).val(e(s).text()),t.option.sub_info&&e(t.elem.combo_input).attr("sub_info",e(s).attr("sub_info")),t.option.select_only&&t._setButtonAttrDefault(),e(t.elem.hidden).val(e(s).attr("pkey"));else{var i=t.prop.prev_value.substring(0,t.prop.tag.pos_left),n=t.prop.prev_value.substring(t.prop.tag.pos_right),a=e(s).text();if(t.option.tags[t.prop.tag.type].space[0]&&!i.match(t.option.tags[t.prop.tag.type].pattern.space_left)){var r=t.option.tags[t.prop.tag.type].pattern.left.length,l=i.length;i=i.substring(0,l-r)+" "+i.substring(l-r)}if(n.match(t.option.tags[t.prop.tag.type].pattern.comp_right)||(n=t.option.tags[t.prop.tag.type].pattern.right+n),t.option.tags[t.prop.tag.type].space[1]&&!n.match(t.option.tags[t.prop.tag.type].pattern.space_right)){var r=t.option.tags[t.prop.tag.type].pattern.right.length;n=n.substring(0,r)+" "+n.substring(r)}e(t.elem.combo_input).val(i+""+a+n);var p=i.length+a.length;t._setCaretPosition(t,p)}t.prop.prev_value=e(t.elem.combo_input).val(),t._hideResults(t)}t.option.bind_to&&e(t.elem.combo_input).trigger(t.option.bind_to,o),e(t.elem.combo_input).focus(),e(t.elem.combo_input).change(),t._setCssFocusedInput(t)},_getCurrentLine:function(t){if(e(t.elem.result_area).is(":hidden"))return!1;var o=e(t.elem.results).children("li."+t.css_class.select);return e(o).length?o:!1},_nextLine:function(t){var o=t._getCurrentLine(t);if(o){var s=e(t.elem.results).children("li").index(o);e(o).removeClass(t.css_class.select)}else var s=-1;if(s++,s<e(t.elem.results).children("li").length){var i=e(t.elem.results).children("li").eq(s);t._setSubInfo(t,i),e(i).addClass(t.css_class.select),t._setCssFocusedResults(t)}else t._setCssFocusedInput(t);t._scrollWindow(t,!1)},_prevLine:function(t){var o=t._getCurrentLine(t);if(o){var s=e(t.elem.results).children("li").index(o);e(o).removeClass(t.css_class.select)}else var s=e(t.elem.results).children("li").length;if(s--,s>-1){var i=e(t.elem.results).children("li").eq(s);t._setSubInfo(t,i),e(i).addClass(t.css_class.select),t._setCssFocusedResults(t)}else t._setCssFocusedInput(t);t._scrollWindow(t,!1)}})}(jQuery);