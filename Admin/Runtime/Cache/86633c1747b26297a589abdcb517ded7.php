<?php if (!defined('THINK_PATH')) exit();?><!-- 导入带搜索功能的下拉框组件 -->

<!-- ********************开始代码**************************  -->
<style>
    .dragItemsContainer{background: #fff;padding: 10px 10px 10px 0px; height: 100%; border-radius:4px;box-shadow: 0 2px 3px 0 rgba(0,0,0,0.048);font-size: 14px;}
    .dragItemsContainer .dragItems{cursor: move; margin: 5px ; width:130px; height:30px; background:#ECF0F1;border-radius: 4px;text-align: center;line-height: 30px;box-shadow: inset 5px 0px 0px #E74C3C;}
    .dragItemsContainer .dragItems:hover{text-shadow: 0px 0px 1px rgba(0,0,0,0.5);background: #e3eef1;box-shadow: inset -5px 0px 0px #E74C3C;}
    .dragItems:after{ content: attr(title) }
    .dragItems div {display: none;}
    #nbmDroppable .nbmmove:hover {background-color: #8bc5ff;border-radius: 4px;color: #fff;}
    #nbmDroppable .nbmmove:hover label{color: #fff;}
    #nbmDroppable .nbmmove:hover *{cursor: move;}
    #nbmDroppable li.nbmmove a.nnbm_delete_plain_ctl{position: absolute;top:8px;right:8px;color: #f00;cursor: pointer;font-size: 18px;}
    .curnode{ background:#e1455e;}
    #nbmDroppable{height: 5000px; margin-left:0px; }
    #nbmDroppable li{position: relative;border-radius: 4px;padding: 8px 0px;}
    .icon-eye-close{color: #333;}
    .icon-lock{color: #333;}
    #nbmDroppable .divider-content{height: 25px;}
    .nbm_highlight{
        outline: 1px #8bc5ff dashed;
        background: #8bc5ff;
        padding-top: 15px;
        height: 40px!important;
    }
    .nbm_textarea {
        padding-top: 5px;
        height: 70px!important;
    }
    .nbm_datatable {
        padding-top: 5px;
        height: 102px!important;
    }
    .nbm_address {
        padding-top: 8px;
        height: 70px!important;
    }
    .rightToggleCollapse{background-color: #e7eff0; border-style: solid;border-width: 1px 1px 0;display: block;height: 32px;overflow: hidden;}
    .pageFormContent #nbmDroppable select{line-height: 28px; padding-bottom: 7px;}
    #nbmDroppable li.liscur{background-color: #8bc5ff;border-radius: 4px;}
    #nbmDroppable li.liscur div label{ color: #363636;}
    #nbmDroppable li.removed div.nbmshadow,#nbmDroppable li.locked div.nbmshadow,#nbmDroppable li.required div.nbmshadow{border-radius:4px;background: rgba(0,0,0,0.2);}
    #nbmDroppable li div.short-element{width: 100%;height: 30px;}
    #nbmDroppable li div.select-element{width: 100%;height: 30px;}
    #nbmDroppable li div.texteara-element{width: 100%;height: 60px;}
    #nbmDroppable li div.upload-element{width: 100%;height: 45px;}
    #nbmDroppable li div.table-element{width: 100%;height: 92px;}
    #nbmDroppable li div.select_per_element{width: 100%;height: 49px;}
    #nbmDroppable li div.adds_element{width: 100%;height: 65px;}
    #nbmDroppable li div.nbm_controll{width: 100%;}
    #nbmDroppable li div.tml_line_break{width: 98%}
    .header_edit_btn{color: #999;}
    .header_edit_btn:hover{color: #e1455e;}
    /*.nbm_right_panel tr{line-height: 25px; width: 100%}*/
    /*.nbm_right_panel tr *{border-radius: 4px;}*/
    /*.nbm_right_panel tr input{border: 1px solid #d8d8d8;padding-left: 5px;}*/
     /*.nbm_right_panel tr td{position: relative;}*/
    /*.nbm_right_panel tr td:nth-child(odd){padding: 0px 8px; color: #333;line-height:35px;}*/
    
    .accordion .accordionHeader{background: #fff;box-shadow: inset 5px 0px 0px #E74C3C;padding-left: 5px;margin-bottom: 3px;height: 30px;line-height: 30px;}
    .accordion .accordionHeader h2{color: #333;font-weight: 400;text-shadow: 0px 0px 1px rgba(0,0,0,0.5);line-height: 30px;background: none;}
    .accordion .accordionContent{border: none;padding: 0px 3px;border-radius: 0px 0px 4px 4px;}
    .form_trr_element{padding: 6px 0px;color: #333;}
    .form_trr_element input{border: 1px solid #d8d8d8;padding-left: 5px;}
    #nbmDroppable li .tml-table-w{margin-left: 10px;float: left;width: calc(100% - 10px);}
    #nbmDroppable li .tml_line_break{margin: 1px 0px 5px 1%;padding-left: 8px;box-shadow: inset 5px 0px 0px  #F39C12;width: 90.2%;background: #f5f5f5;border-radius: 0px 4px 4px 0px;line-height: 25px;height: 25px;text-shadow: 0px 0px 1px rgba(0,0,0,0.5);}
    #nbmDroppable .table_into thead tr th{color: #363636;text-align: center;background: #f2f2f2;}
    #nbmDroppable .table_into tbody tr td{color: #363636;text-align: center;}
    #nbmDroppable li[data="datatable"] .label_new{text-align:center;}
    .pageFormContent #nbmDroppable select.multistage_select{
        width: 155px;
        margin-right: 9px;
    }
    #nbmDroppable .icon-unlink{
        display: inline-block;
        width: 100px;
        position: absolute;
        right: 10px;
        top: 10px;
        font-size: 18px;
        color: #cc3048;
    }
    #nbmDroppable .fieldset_legend_toggle {
        background: none;
        color: #484848;
        font-size: 15px;
        line-height: 25px;
        padding: 0;
        text-align: left;
        width: 100%;
    }
    #nbmDroppable .fieldset_legend_toggle b{
        font-weight: 400;
    }
	.icon_stort_lay {
		width: auto;
		height: 30px;
		position: absolute;
		top: 8px;
		left: 0;
	}
	.icon_stort_lay span {
		margin-left: 3px;
	}
	.propertyItem {
		padding: 8px 0;
	}
	.propertyTitle {
		margin-right: 8px;
		width: 115px;
		text-align: right;
		display: block;
		float: left;
		line-height: 25px;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
		word-wrap: normal;
	}
	.propertyContent input {
		border: 1px solid #d8d8d8;
		padding-left: 5px;
		border-radius: 4px;
		height: 25px;
	}
</style>

<script>
function delControll(obj){
	var catalog = $(obj).closest('li').find("input[name^='catalog[']").val();
	var id = $(obj).closest('li').find("input[name^='id[']").val();
	var tablename = $(obj).closest('li').find("input[name^='tablename[']").val();;
	var zujianname = $(obj).closest('li').find("input[name^='fields[']").val();;
	var url = '__URL__/delzujian';
	$.post(url,{catalog:catalog,id:id,tablename:tablename,zujianname:zujianname});

	$(obj).closest('li').remove();
}


function deleteCntroll(obj , event){
    event.stopPropagation();
        if($(obj).attr('isforeignfield')){
            var message = '复用表单的组件只能来源表单中进行删除!';
            alertMsg.error(message);
            return ;
        }
      	var container =  $(obj).closest('li');
        var catalog = getTag(container , 'hidden' , 'catalog' ).val();
        var id = getTag(container , 'hidden' , 'id' ).val();
        var tablename = getTag(container , 'hidden' , 'tablename' ).val();
        var zujianname =getTag(container , 'hidden' , 'fields' ).val();
        var url = '__URL__/delzujian';
        $.post(url,{catalog:catalog,id:id,tablename:tablename,zujianname:zujianname});
        $(obj).closest('li').remove();
}
$(function(){
    $('#nbmDroppable a.nnbm_delete_plain_ctl').click(function(e){
        deleteCntroll(this , e);
    });
     $('#nbmDroppable li').click(function(e){
          e.stopPropagation();
          console.log('我要开始属性的生成');
          setProp(this);
     });
});

var publicProperty = <?php if($NBM_COMMON_PROPERTY_JSON): echo ($NBM_COMMON_PROPERTY_JSON); else: ?>''<?php endif; ?>;
var privateProperty =<?php if($NBM_PRIVATE_PROPERTY_JSON): echo ($NBM_PRIVATE_PROPERTY_JSON); else: ?>''<?php endif; ?>;
var lookupConfig = <?php if($lookupConfig): echo ($lookupConfig); else: ?>''<?php endif; ?>; // lookup默认配置
var checkforConfig = <?php if($checkforConfig): echo ($checkforConfig); else: ?>''<?php endif; ?>; // checkfor默认配置 
var querytablesCaches = new Dictionary(); // 做数据缓存。存储方式为：[请求地址_参数] => data
var reservedField='<?php echo ($reserved); ?>';//系统保留字段名称
var choiseformid = <?php if($vo["choiseformid"] ): echo ($vo["choiseformid"]); else: ?>0<?php endif; ?>;

var choiseaction = <?php if($vo["choiseaction"] ): ?>'<?php echo ($vo["choiseaction"]); ?>'<?php else: ?>''<?php endif; ?>;
 var isopenforeign = true;              
/**
*	初始化带搜索功能的下拉框
*/
function initsearchselect(){
	//$(this).logs('我在生成搜索功能的下拉框');
	//var curPanel = $('#nbm_right_toolbar');
	//$('select' , curPanel).attr('data-placeholder','没有可用数据');
	//.not('.combox').not($(this).closest('.combox').length>0)
	//$('select.chonsen' , curPanel).select2({no_results_text:'没有找到选择',height:'20px' , search_contains:true});
}

/**
*	初始化带搜索功能的下拉框
*/
function destroysearchselect(){
	//var curPanel = $('#nbm_right_toolbar');
	//$('select' , curPanel).attr('data-placeholder','没有可用数据');
	//$('select.chonsen' , curPanel).select2('destroy');
}


/**
 * 生成属性面板
 */
function createPropertyyPanel(property,tagCategory){
	var rightPanelObj = '';
	if(typeof(property)!= 'object' || property.length ==0 ){
		$(this).logs(' 参数为空 ');
		return false;
	}
	var tagCategoryKey='';
	if(isNullorEmpty(tagCategory)){
		tagCategoryKey="key=\""+tagCategory+"\"";
	}
	// 遍历属性 
	for(var val in property){
		// displayright属性为1时才生成右侧菜单 
		if(property[val]['displayright'] == 1){
		    var readOnlyCls = '';
		    var readOnlyProp = '';
		   if(  property[val]['isforeignfield'] && isopenforeign==true ){
		       readOnlyCls = 'disabled';
		       readOnlyProp = 'readonly="readonly"';
		   } 
		    
			var titleCharacter = property[val]['title'];
			var nameCharacter = property[val]['name'];
			var idCharacter = property[val]['id'];
			var descCharacter = isNullorEmpty(property[val]['desc']) ? property[val]['desc'] :'';
			var group = property[val]['group'];
			var itemclass = 'class="propertyItem"';
			var titleClass = ' class="propertyTitle"';
			var contentClass = ' class="propertyContent"';
			var groupStr = '';
			if(isNullorEmpty(group)){
				groupStr = ' group="'+group+'"';
			}
			switch(property[val]['type']){
				case 'text':
					rightPanelObj +='<div title="'+descCharacter+'" '+itemclass+'><span '+titleClass+' title="'+titleCharacter+'">'+titleCharacter+'</span><span '+contentClass+'><input type="text" '+groupStr+' id="'+idCharacter+'" '+readOnlyProp+' '+tagCategoryKey+'/></span></div>';
					break;
				case 'select':
					// 生成 select 当默认数据 data 存在 时直接生成option,否则就需要在面板被触发时动态获取dataAdd的返回值 
					// data 与 dataAdd同时存在时data的 优先级最高
					var option ='';
					if( property[val]['data']){ //!isNullorEmpty(property[val]['dataAdd']) &&
						var tempData = (property[val]['data']).split('#');
						for(var optindex=0;optindex<tempData.length ; optindex++){
							var tempOpt = (tempData[optindex]).split('|');
							option +='<option value="'+tempOpt[0]+'">'+tempOpt[1]+'</option>';
						}
					}
					// class="combox"
					rightPanelObj +='<div title="'+descCharacter+'" '+itemclass+'><span '+titleClass+' title="'+titleCharacter+'">'+titleCharacter+'</span><span  '+contentClass+'><select id="'+idCharacter+'" '+groupStr+' style="width:150px;" '+tagCategoryKey+' class="chonsen '+readOnlyCls+' ">'+option+'</select></span></div>';
					break;
				case 'checkbox':
					var cked='';
					if(property[val]['defaultval']==true){
						cked= 'checked="checked"';
					}
					rightPanelObj +='<div title="'+descCharacter+'" '+itemclass+'><span '+titleClass+' title="'+titleCharacter+'">'+titleCharacter+'</span><span '+contentClass+'><input type="checkbox" id="'+idCharacter+'" '+groupStr+' '+cked+' '+tagCategoryKey+' /></span></div>';
					break;
				case 'hr':
					rightPanelObj +='<div title="'+descCharacter+'" '+itemclass+'><span '+titleClass+' title="'+titleCharacter+'"><hr/></span></div>';
					break;
				case 'fieldsetstart':
					rightPanelObj +='<fieldset><legend>'+titleCharacter+'</legend>';
					break;
				case 'fieldsetend':
					rightPanelObj +='</fieldset>';
					break;
					
				case 'dialog':
					rightPanelObj +='<div title="'+descCharacter+'" '+itemclass+'><span '+titleClass+' title="'+titleCharacter+'">'+titleCharacter+'</span><span '+contentClass+'><a id="'+idCharacter+'" href="javascript:void(0)" '+tagCategoryKey+'>编辑</a></span></div>';
					break;
					
			}
		}
	}
	return rightPanelObj;
}

function DynamicnavTabDone(json){
    DWZ.ajaxDone(json);
    if(json.statusCode==DWZ.statusCode.ok){
        navTabAjaxDone(json);
        navTab.closeCurrentTab(this);
    }
}
function DynamicProcessnavTabDone(json){
	 DWZ.ajaxDone(json);
	  if(json.statusCode==DWZ.statusCode.ok){
	        navTabAjaxDone(json);
	        //navTab.closeCurrentTab();
	    	var tabids = "__MODULE__addprocess";
			var titles = "添加流程";
			var nodename = json.data.nodename;
			var tablename = json.data.tablename;
			var urls = "__URL__/addprocess/nodename/"+nodename;
			var params = [{
				name : 'tablename',
				value : tablename
			}];
			var postdata =DWZ.jsonEval(refreshtabs.data);
			navTab.openTab(tabids, urls, {title : titles,fresh : true,data:params});
	    }
}
var tagIndetity = 'checkorder';
var containerIndetity = 'nbmDroppable';
var tagIndex=0;
var allowType=['select','radio','checkbox'];//允许配置默认选项数据标签 
var containerObj = '';
/**
 * 获取组件属性值对象  
 */
 function getTag(container , type , name ){
	return $(container).find('input[type="'+type+'"][name^="'+name+'["]');
}

 /**
  * 获取组件属性值对象  
  */
  function getTagAppend(container , type , name , $parames){
 	//return $(container).find('input[type="'+type+'"][name^="'+name+'"]'+$parames);
	var str = 'input[type="'+type+'"][name^="'+name+'"]'+$parames;
	//$(this).logs('find str:'+str);
	//$(this).logs(str);
 	return $(str ,container);
 }
  
/**
* 获取容器
*/
function getContainer(orderObj){
	return $('#' + containerIndetity + ' li[' + tagIndetity + '="' + orderObj + '"]');
}
/**
 * 为生成右侧prop属性并赋值 
 */
function setProp(obj){
	$(this).logs('开始处理页面数据');
	var orderItem = $(obj).closest('ul').find('li[saveitem="1"]');
	var tempHtml = orderItem.html();
	
	if(tempHtml){
		var curnode = $('input[name="curnode"]').val();
		tempHtml+='<input type="hidden" name="curnode" value="'+curnode+'" />';
		var curaformid = $('input[name="dynamicformid"]').val();
		tempHtml+='<input type="hidden" name="formid" value="'+curaformid+'" />';
		var choiseformid = $('input[name="choiseformid"]').val();
		var choiseaction =  $('input[name="choiseaction"]').val();
		if(choiseformid && choiseaction){
			tempHtml+='<input type="hidden" name="choiseformid" value="'+choiseformid+'" />';
			tempHtml+='<input type="hidden" name="choiseaction" value="'+choiseaction+'" />';
		}
	}
	$('#nbmAjaxEditForm').html(tempHtml);
	var formData = $('#nbmAjaxEditForm').formSerialize();
	if(formData){
		 $('#nbmAjaxEditForm').ajaxSubmit(function(data){
		     console.log('点击新属性时提交上一次的操作数据');
		      console.log(typeof(data) );
		      console.log(data.length );
			 if(data.length && data!=1){
				 data = $.parseJSON(data);
				 if(data.code==0){
					 alert(data.msg);
				 }/*else{
		         	// 将新加数据的ID值反写回页面中 
		         	$(this).logs(data.ids);
		         	saveobj.find('input[type="hidden"][name^="ids["]').val(data.ids);
		         	saveobj.find('input[type="hidden"][name^="id["]').val(data.id);
				 }*/
			 }
         });
	}
	orderItem.removeAttr('saveitem');
	$(obj).attr('saveitem','1');
	//console.log($(obj)[0].tagName);
	// 将当前项设置为选中状态、
	if($(obj)[0].tagName='LI'){
    	$(obj).addClass('liscur').siblings('li').removeClass('liscur');
	}
	$('#hidObj').val($(obj).attr(tagIndetity));
	// 生成右侧面板 
	//var rightPanel = createPropertyyPanel(publicProperty);
	var tagCategory = $(obj).attr('data');
	var rightPanelPrivate = createPropertyyPanel(privateProperty[tagCategory],tagCategory);
	$('#nbm_right_panel').html(rightPanelPrivate);
	
	var container = obj; //设置搜索域 
	 var isforeignfieldType = getTag(container, 'hidden', 'isforeignfield').val();
	 console.log(' 是否重用 '+isforeignfieldType);
	// 遍历么有属性 
	for(var val in privateProperty[tagCategory]){
		var idCharacter = privateProperty[tagCategory][val]['id'];
		var nameCharacter = privateProperty[tagCategory][val]['name'];
		var displayrightPrivateCharacter = privateProperty[tagCategory][val]['displayright'];
		var typePrivateCharacter = privateProperty[tagCategory][val]['type'];
		if(displayrightPrivateCharacter ==1){
			setTagValue(container , privateProperty[tagCategory][val], tagCategory , isforeignfieldType);
		}
	}
	setTag();
	
	initsearchselect();
}

function moreConditinGetDataByArray(parenttoArr , configProperty , tagCategory){
	//console.log('this is array');
	//console.log(parenttoArr);
	//return;
	$.each(parenttoArr , function(key , val){
		var param = $('#'+val).val();
		var cachesKey = configProperty['dataAdd']+param;
		if(querytablesCaches.get(cachesKey)){
			var opt = '<option value="">请选择</option>';
			$.each(querytablesCaches.get(cachesKey) ,function(k,v){
				opt += '<option value="'+k+'">'+v+'</option>';
			});
			option = opt;
		}else{
			var nodename = '<?php echo ($vo["actionname"]); ?>';
			 $.ajax({
				url:'__URL__/'+configProperty['dataAdd'],
				type:'post',
				dataType:'json',
				data:{'table':param,'nodename':nodename},
				async:false,
				success:function(data){
					if(data){
						querytablesCaches.set(cachesKey , data);
						var opt = '<option value="">请选择</option>';
						$.each(data ,function(k,v){
							opt += '<option value="'+k+'">'+v+'</option>';
						});
						option = opt;
					}
				}
			});
		}
	});
}
function moreConditinGetDataByJson(parenttoJSON , configProperty , tagCategory){
	console.log('this is json');
	$.each(parenttoJSON , function(key , item){
		console.log('key is :'+key);
		console.log(item.length);
		if(item.length ==1){
			// 这是取selectList的数据
		}else if(item.length==4){
			// 这是表查询的数据
			var tableName = item[0]['key'];
			var tableCheck = item[0]['require'];
			var showFieldName = item[1]['key'];
			var showFieldCheck = item[1]['require'];
			var valueFieldName = item[2]['key'];
			var valueFieldCheck = item[2]['require'];
			var conditionName = item[3]['key'];
			var conditionCheck = item[3]['require'];
			
			var tableForID = getIdInConfig(tableName , tagCategory);
			var showFieldForID = getIdInConfig(showFieldName , tagCategory);
			var valueFieldForID = getIdInConfig(valueFieldName , tagCategory);
			var conditionForID = getIdInConfig(conditionName , tagCategory);
			
			var table = $('#'+tableForID).val();
			var showField = $('#'+showFieldForID).val();
			var valueField = $('#'+valueFieldForID).val();
			var condition = $('#'+conditionForID).val();
			
			var checkRet = true;
			if(tableCheck){
				if(!isNullorEmpty(table))
					checkRet=false;	
			}
			if(showFieldCheck){
				if(!isNullorEmpty(showField))
					checkRet=false;	
			}
			if(valueFieldCheck){
				if(!isNullorEmpty(valueField))
					checkRet=false;	
			}
			if(conditionCheck){
				if(!isNullorEmpty(condition))
					checkRet=false;	
			}
			if(checkRet){
				var cachesKey = configProperty['dataAdd']+table+showField+valueField;
				console.log(' 缓存标识： '+cachesKey);
				if(querytablesCaches.get(cachesKey)){
					var opt = '<option value="">请选择</option>';
					$.each(querytablesCaches.get(cachesKey) ,function(k,v){
						opt += '<option value="'+k+'">'+v+'</option>';
					});
					option = opt;
				}else{
					var nodename = '<?php echo ($vo["actionname"]); ?>';
					 $.ajax({
						url:'__URL__/'+configProperty['dataAdd'],
						type:'post',
						dataType:'json',
						data:{'table':table,'fieldtext':showField,'fieldvalue':valueField,'condition':condition,'nodename':nodename},
						async:false,
						success:function(data){
							if(data){
								querytablesCaches.set(cachesKey , data);
								var opt = '<option value="">请选择</option>';
								$.each(data ,function(k,v){
									opt += '<option value="'+k+'">'+v+'</option>';
								});
								option = opt;
							}
						}
					});
				}
			}
		
			//var cachesKey = configProperty['dataAdd']+param;
		
		
		
		}else{
			// 暂时未定义操作，报错
			console.log('默认选中项值获取方式 暂时定义该类型操作！！');
		}
		
	});
}
/**
*	获取配置文件中指定的ID值
*	@param	key			属性key值
*	@param	tagCategory	当前组件的类型
*/
function getIdInConfig(key , tagCategory){
	var tableFor = '';
	if(!publicProperty[key]){
		tableFor = privateProperty[tagCategory][key]['id'];
	}else{
		tableFor = publicProperty[key]['id'];
	}
	return tableFor;
}
/**
* 处理关联select事件
*/
function bindEvent(configProperty){
	var category = $('#catalog').val();
	//configProperty = privateProperty[category];
	//configProperty = privateProperty[category]
	var idCharacter = configProperty['id'];
	var nameCharacter = configProperty['name'];
	var childrenTo = configProperty['linkto'];
	var parentTo = configProperty['parentto'];
	var typeCharacter = configProperty['type'];
	
	//privateProperty= eval(privateProperty);
	switch(typeCharacter){
		case 'select':
			var option='';
			$('#'+idCharacter).unbind('');
			$('#'+idCharacter).bind('change',function(){
				if(isNullorEmpty(childrenTo)){
					var container = getContainer($('#hidObj').val());
					//getTag(container, 'hidden', nameCharacter).val($(this).val());
					var tempChildren = childrenTo.split(',');
					for(var val in tempChildren){
						if(isNullorEmpty(val)){
							$('#'+val).html('');
							var parame = $(this).val();
							//console.log(privateProperty[category][tempChildren[val]]);
							var cachesKey = privateProperty[category][tempChildren[val]]['dataAdd']+parame;
							if(querytablesCaches.get(cachesKey)){
								var opt = '<option value="">请选择映射表</option>';
								$.each(querytablesCaches.get(cachesKey) ,function(k,v){
									opt += '<option value="'+k+'">'+v+'</option>';
								});
								option = opt;
							}else{
								var nodename = '<?php echo ($vo["actionname"]); ?>';
								 $.ajax({
									url:'__URL__/'+privateProperty[category][tempChildren[val]]['dataAdd'],
									type:'post',
									dataType:'json',
									data:{table:parame,'nodename':nodename},
									async:false,
									success:function(data){
										if(data){
											querytablesCaches.set(cachesKey , data);
											var opt = '<option value="">请选择映射表</option>';
											$.each(data ,function(k,v){
												opt += '<option value="'+k+'">'+v+'</option>';
											});
											option = opt;
										}
									}
								});
							}
							$('#'+privateProperty[category][tempChildren[val]]['id']).html(option);
							getTag(container, 'hidden', privateProperty[category][tempChildren[val]]['name']).val('');
							$('#'+privateProperty[category][tempChildren[val]]['id']).select2().change();
						}
					}
				}
			});
			break;
	}
}
/**
 * 为右侧菜单绑定隐藏域中的值。 下拉框数据为ajax获取时需要在这里处理 
 */
function setTagValue(container , configProperty , tagCategory , isreadonly){
	var type='hidden';
	var idCharacter = configProperty['id'];
	var nameCharacter = configProperty['name'];
	var datafuncCharacter = configProperty['datafunc'];
	var toggleCharacter = configProperty['toggle'];
	var checkvaluetovisable = configProperty['checkvaluetovisable']; // 当前标签可用状态的依赖设置
	var afterCharacter = configProperty['afterfunc']; // 后置数据处理
	var isforeignoprate = configProperty['isforeignoprate'];
	isreadonly = parseInt(isreadonly);
	//$(this).logs(' 接收到的 组件类型： '+ configProperty['type']);
	/**
	*	根据依赖项 的值改变当前对象的可用状态。
	*	依赖项只能存在于当前组件的私有属性或 公有属性中。 
	*/
	switch(configProperty['type']){
		case 'text':
			$('#'+idCharacter).val(getTag(container, type, nameCharacter).val());
			toggleOprate(configProperty ,$('#'+idCharacter) , getTag(container, type, nameCharacter).val());
			//visableByOrderTag();
			if(isNullorEmpty(checkvaluetovisable)){
				//$(this).logs(idCharacter);
				visableByOrderTag(container ,  $('#'+idCharacter) , getReferItem(container,configProperty,checkvaluetovisable));
			}
			if(isreadonly && !isforeignoprate && isopenforeign == true){
                 setControllProperty(idCharacter ,'text' );
            }
			break;
		case 'select':
			var option='';
			if(!isNullorEmpty(configProperty['data']) && isNullorEmpty(configProperty['dataAdd'])){
				if( !isNullorEmpty(configProperty['parentto'])){
					if(querytablesCaches.get(configProperty['dataAdd'])){
						var opt = '<option value="">请选择映射表</option>';
						var tempData = querytablesCaches.get(configProperty['dataAdd']);
						$.each(tempData ,function(k,v){
							// 实现主表为外部选择表时 不可往里面添加字段 @nbmxkj 20141031 19 35
							if(typeof(v) == 'object'){
								var dis = '';
								if(v['nextEnd'] == 0){
									// 不可选择
									dis = 'disabled="dsiabled"';
								}
								opt += '<option '+dis+' value="'+v['name']+'">'+v['title']+'</option>';
							}else{
								opt += '<option value="'+k+'">'+v+'</option>';
							}
							//opt += '<option value="'+k+'">'+v+'</option>';
						});
						option = opt;
					}else{
						var nodename = '<?php echo ($vo["actionname"]); ?>';
						 $.ajax({
							url:'__URL__/'+configProperty['dataAdd'],
							data:{'nodename':nodename},
							type:'post',
							dataType:'json',
							async:false,
							success:function(data){
								if(data){
									querytablesCaches.set(configProperty['dataAdd'] , data);
									var opt = '<option value="">请选择映射表</option>';
									$.each(data ,function(k,v){
										//opt += '<option value="'+k+'">'+v+'</option>';
										// 实现主表为外部选择表时 不可往里面添加字段 @nbmxkj 20141031 19 35
										if(typeof(v) == 'object'){
											var dis = '';
											if(v['nextEnd'] == 0){
												// 不可选择
												dis = 'disabled="dsiabled"';
											}
											opt += '<option '+dis+' value="'+v['name']+'">'+v['title']+'</option>';
										}else{
											opt += '<option value="'+k+'">'+v+'</option>';
										}
									});
									
									$('#'+idCharacter).html(opt);
									
									option = opt;
								}
							}
						});
					}
					bindEvent(configProperty);
				}else{
					var param = $('#'+configProperty['parentto']).val();
					var cachesKey = configProperty['dataAdd']+param;
					if(querytablesCaches.get(cachesKey)){
						var opt = '<option value="">请选择</option>';
						$.each(querytablesCaches.get(cachesKey) ,function(k,v){
							opt += '<option value="'+k+'">'+v+'</option>';
						});
						option = opt;
					}else{
						var nodename = '<?php echo ($vo["actionname"]); ?>';
						 $.ajax({
							url:'__URL__/'+configProperty['dataAdd'],
							type:'post',
							dataType:'json',
							data:{'table':param,'nodename':nodename},
							async:false,
							success:function(data){
								if(data){
									querytablesCaches.set(cachesKey , data);
									var opt = '<option value="">请选择</option>';
									$.each(data ,function(k,v){
										opt += '<option value="'+k+'">'+v+'</option>';
									});
									option = opt;
								}
							}
						});
					}
				}
				$('#'+idCharacter).html(option);
			}
			if(datafuncCharacter){
				nbm_doCallback(eval(datafuncCharacter),[$(container).attr(tagIndetity),$($('#'+idCharacter))]);//追加用户自定义数据处理函数
			}
			if(isNullorEmpty(checkvaluetovisable)){
				//$(this).logs(idCharacter);
				visableByOrderTag(container ,  $('#'+idCharacter) , getReferItem(container,configProperty,checkvaluetovisable));
			}
			
			 $('#'+idCharacter).val(getTag(container, type, nameCharacter).val());//changeitem // 原版设置当前选中项 @20141222 1328
			// 先将指定项选中，再次初始化select2组件 
			//$('#'+idCharacter+' option[value="'+getTag(container, type, nameCharacter).val()+'"]').attr('selected',true);
			if(isreadonly && !isforeignoprate && isopenforeign == true){
                 setControllProperty(idCharacter ,'select' );
            }
            
			$('#'+idCharacter).select2('destroy');
			$('#'+idCharacter).select2();
	          
			toggleOprate(configProperty ,$('#'+idCharacter) , getTag(container, type, nameCharacter).val());
			
			break;
		case 'checkbox':
			$('#'+idCharacter).attr('checked', (getTag(container, type, nameCharacter).val() > 0 ? true: false));
			toggleOprate(configProperty ,$('#'+idCharacter) , getTag(container, type, nameCharacter).val());
			if(isNullorEmpty(checkvaluetovisable)){
				//$(this).logs(idCharacter);
				visableByOrderTag(container ,  $('#'+idCharacter) , getReferItem(container,configProperty,checkvaluetovisable));
			}
			if(isreadonly && !isforeignoprate && isopenforeign == true ){
                 setControllProperty(idCharacter ,'checkbox' );
            }
			break;
		case 'dialog':
		  if(isreadonly && !isforeignoprate && isopenforeign == true){
                 setControllProperty(idCharacter ,'dialog' );
            }
	}
	
	if(afterCharacter){ // 后置数据处理
		nbm_doCallback(eval(afterCharacter),[$(container).attr(tagIndetity),$('#'+idCharacter),'set']);  
	}
}

function setControllProperty(obj , type){
    if( !isNullorEmpty( obj ) || !isNullorEmpty( type ) ){
        return;
    }
    var readOnlyCls = 'disabled';
    var readOnlyProp = 'readonly';
    var readOnlyProp1 = 'disabled';
            
    switch(type){
        case 'text':
            $('#'+obj).attr(readOnlyProp,true);
            $('#'+obj).addClass(readOnlyCls);
            break;
       case 'select':
            $('#'+obj).attr(readOnlyProp1,true);
            $('#'+obj).addClass(readOnlyCls);
            break;
        case 'checkbox':
            $('#'+obj).attr(readOnlyProp1,true);
            $('#'+obj).addClass(readOnlyCls);
            break;
        case 'dialog':
            $('#'+obj).before('<div class="not_view"></div>');
            break;
    }
}
/**
 * 给组件属性赋值 
 */
function setTag(){
	var orderObj = $('#hidObj').val();
	if (orderObj) {
		var container = getContainer(orderObj);
		tagCategory = container.attr('data');
		// 遍历么有属性 
		for(var val in privateProperty[tagCategory]){
			var idCharacter = privateProperty[tagCategory][val]['id'];
			var nameCharacter = privateProperty[tagCategory][val]['name'];
			var displayrightPrivateCharacter = privateProperty[tagCategory][val]['displayright'];
			var typePrivateCharacter = privateProperty[tagCategory][val]['type'];
			if(displayrightPrivateCharacter ==1){
				tagEvent(container , privateProperty[tagCategory][val] , tagCategory);
			}
		}
	}
}

function toggleOprate1(toggle , tagCategory , val){
	//$(this).logs(tagCategory+'__'+val+'__'+toggle);
	if(isNullorEmpty(toggle)){
		if(isNullorEmpty(val)){ // 当前操作有值操作  将关系对象全禁用 
			var arr = toggle.split(',');
			for(var i in arr){
				$('#'+privateProperty[tagCategory][arr[i]]['id']).attr('disabled',true);
			}
		}else{
			var arr = toggle.split(',');
			for(var i in arr){
				$('#'+privateProperty[tagCategory][arr[i]]['id']).attr('disabled',false);
			}
		}
	}
}
/**
 * 给右侧组件标签绑定事件及处理
 */
function tagEvent(container , configProperty , tagCategory){
	var idCharacter = configProperty['id'];
	var nameCharacter = configProperty['name'];
	var childrenTo = configProperty['linkto'];
	var parentTo = configProperty['parentto'];
	var typeCharacter = configProperty['type'];
	var funcCharacter = configProperty['function'];
	var afterCharacter = configProperty['afterfunc'];
	var check = $('#hidObj').val();
	var toggleCharacter = configProperty['toggle'];
	var changeTagCategoryCharacter = configProperty['changeTagCategory']; // 换组件
	
	switch(typeCharacter){
		case "text":
			$('#'+idCharacter).unbind('blur');
			$('#'+idCharacter).blur(function() {
				toggleOprate(configProperty , $(this) , $(this).val());
				if(idCharacter == 'title'){
					container.find('label:first').text($(this).val());
					container.find('b:first').text($(this).val());
				}
				if(idCharacter == 'fields'){
					var curObj = getContainer(check);
					var curAllNames = new Array();
					$('input[type="hidden"][name^="'+idCharacter+'"]', curObj).each(function(k, v) {
						if (check != $(this).parent().attr(tagIndetity)) {
							curAllNames.push($(this).val());
						}
					});
					if ($.inArray($(this).val(), reservedField) > -1) {
						alert('当前输入：' + $(this).val() + ' 为系统保留使用 ！请更换');
						$(this).focus();
						$(this).val(check);
						return
					}
					if ($.inArray($(this).val(), curAllNames) > -1) {
						alert('当前输入：' + $(this).val() + ' 已存在，请更换');
						$(this).focus();
						$(this).val(check);
						return
					}
					if (isNullorEmpty(check)) {
						container.attr('names', $(this).val());
						var tagName = $(this).val();
						$('input[type="hidden"]', container).each(function(k, v) {
							var cname = $(this).attr('name');
							var temp = cname.split('[');
							$(this).attr('name',temp[0]+'['+tagName+']');
							if($(this).attr('name').indexOf('fields') > -1){
								$(this).val(tagName);
							}
						});
					}
				}
				getTag(container, 'hidden', nameCharacter).val($(this).val());
				if(funcCharacter){
					nbm_doCallback(eval(funcCharacter),[check,this]);  
				}
				if(afterCharacter){
					nbm_doCallback(eval(afterCharacter),[check,this,'bind']);  
				}
			});
			break;
		case "select":
			//$('#'+idCharacter).unbind('change');//这里开启导致页面编辑时无法在表更改后自动获取其字段列表@20141017
			$('#'+idCharacter).change(function() {
				toggleOprate(configProperty , $(this) , $(this).val());
				getTag(container, 'hidden', nameCharacter).val($(this).val());
				if(funcCharacter){
					nbm_doCallback(eval(funcCharacter),[check,this]);  
				}
				if(afterCharacter){
					nbm_doCallback(eval(afterCharacter),[check,this,'bind']);  
				}
				if(changeTagCategoryCharacter){
					_changeTagCategory(check , this); // 换组件事件
				}
			});
			break;
		case "checkbox":
			$('#'+idCharacter).unbind('click');
			$('#'+idCharacter).click(function() {
				toggleOprate(configProperty , $(this) , $(this).val());
				getTag(container, 'hidden', idCharacter).val($(this).attr('checked') ? '1': '0')
				if(funcCharacter){
					nbm_doCallback(eval(funcCharacter),[check,this]);  
				}
				if(afterCharacter){
					nbm_doCallback(eval(afterCharacter),[check,this,'bind']);  
				}
			});
			break;
		case "dialog":
			$('#'+idCharacter).unbind('click');
			var box = navTab.getCurrentPanel();
			var formid = $("div.contentTitle ",box).find("input[name='dynamicformid']").val();
			var propertyid = $("#nbmDroppable li.liscur ",box).find("input[name^='id[']").val();
			$('#'+idCharacter).click(function() {
				var tagName = getTag(container,'hidden',publicProperty['fields']['name']).val();//nbm
				var curAtion = '<?php echo ($action); ?>';
				// 当前组件在property表中的ID 
				var curPropertyId = getTag(getContainer(check) , 'hidden' , 'id').val();
				// formid 
				var formid = $('input[type="hidden"][name="dynamicformid"]').val();
				// curnode 
				var curnode = $('input[type="hidden"][name="curnode"]').val();
				
				
				var func = configProperty['dialogcontroll']?configProperty['dialogcontroll']:'datatablecontroll';
				var url = "__URL__/"+func
				+"/id/"+idCharacter
				+"/name/"+tagName
				+"/check/"+check
				+"/container/"+containerIndetity
				+"/tagIndetity/"+tagIndetity
				+"/action/"+curAtion
				+"/propertyid/"+curPropertyId
				+"/formid/"+formid
				+"/curnode/"+curnode
				;
				var title = configProperty['dialogtitle']?configProperty['dialogtitle']:'内嵌表字段设置_对现在字段的删除与修改都会清空数据，添加字段不影响';
				$.pdialog.open(url,'__MODULE__conments',title,{mask:true,width:1000,height:500});
			});
			break;
	}
	
	
}
/**********************************************************************************************************/
/**									配置文件中使用的配置函数 												 **/ 
/**********************************************************************************************************/
function changetagsortanddisplay(obj , th){
	var curContainer = getContainer(obj);
	
	if(curContainer.attr('class').indexOf('removed')>-1){
		curContainer.removeClass('removed');
        curContainer.find('span.icon-eye-close').remove();
	}else{
		curContainer.addClass('removed');
        curContainer.find('div.nbmshadow>div.icon_stort_lay').append('<span class="icon-eye-close" title="不显示"></span>');
	}
}

function changetagsortandlock(obj , th){
	var curContainer = getContainer(obj);
	if(curContainer.attr('class').indexOf('locked')>-1){
		curContainer.removeClass('locked');
        curContainer.find('span.icon-lock').remove();
	}else{
		curContainer.addClass('locked');
        curContainer.find('div.nbmshadow>div.icon_stort_lay').append('<span class="icon-lock" title="不可编辑"></span>');
	}
}
function changetagsortandrequired(obj , th){
	var curContainer = getContainer(obj);
	
	if(curContainer.attr('class').indexOf('required')>-1){
		curContainer.removeClass('required');
        curContainer.find('span.icon-asterisk').remove();
	}else{
		curContainer.addClass('required');
        curContainer.find('div.nbmshadow>div.icon_stort_lay').append('<span class="icon-asterisk" title="必填" style="color:red;"></span>');
	}
}
///////////////////////////
// 更改文本框所在比例
function contentpercentchange(obj , th){
	
	var titleVal = $('#titlepercent').val();
	var contentVal =$(th).val();
    if(contentVal==undefined ||　contentVal==''){
        contentVal=0;
    }
    if(titleVal==undefined ||　titleVal==''){
        titleVal=1;
    }
	
	var curcls = 'col_'+titleVal+'_'+contentVal;
	var curContainer = getContainer(obj);
	var cls = curContainer.attr('class');
	var clsArr = cls.split(' ');
	var orderClsArr=Array();
	$.each(clsArr , function(i, v ){
		if(v.indexOf('col_') == -1 && v!=''){
			orderClsArr.push(v);
		}
	});
	orderClsArr.push(curcls);
	var classStr = orderClsArr.join(' ');
	curContainer.removeClass();
	curContainer.addClass(classStr);
}
//更改标题所在比例
function titlepercentchange(obj , th){
	
	var contentVal =$('#contentpercent').val();
	var titleVal = $(th).val();
    if(contentVal==undefined ||　contentVal == ''){
        contentVal=0;
    }
    if(titleVal==undefined ||　titleVal==''){
        titleVal=1;
    }


	var curcls = 'col_'+titleVal+'_'+contentVal;
	var curContainer = getContainer(obj);
	var cls = curContainer.attr('class');
	var clsArr = cls.split(' ');
	var orderClsArr=Array();
	$.each(clsArr , function(i, v ){
		if(v.indexOf('col_') == -1  && v!=''){
			orderClsArr.push(v);
		}
	});
	orderClsArr.push(curcls);
	var classStr = orderClsArr.join(' ');
	curContainer.removeClass();
	curContainer.addClass(classStr);
	
}
///////////////////////
function changeTextareaRow(obj,th){
	var curContainer = getContainer(obj);
	$('textarea' , curContainer).attr('rows' ,$(th).val());
}
function changeTextareaCol(obj, th){
	var curContainer = getContainer(obj);
	$('textarea' , curContainer).attr('cols',$(th).val());
}
/**
*	文件框ORG属性的处理函数
**/
function getLookupinfo(obj,th){
	var curObj = getContainer(obj);
	var curContainer = $('#nbmDroppable');
	var option='';
	option ='<option value="">请选择</option>';
	// 排除当前项
	var obj = $('li[data="lookup"] , li[data="lookupsuper"]' , curContainer).not(curObj);
	if(obj.length){
		obj.each(function(){
			// option+='<optgroup label="'+getTag(getContainer($(this).attr(tagIndetity)),'hidden',publicProperty['title']['name']).val()+'"></optgroup>';
			var curCategoryName = getTag(getContainer($(this).attr(tagIndetity)),'hidden',publicProperty['title']['name']).val();
			option +='<option disabled="disabled">'+curCategoryName+'</option>';
			var vals = getTag(getContainer($(this).attr(tagIndetity)),'hidden',privateProperty['lookup']['filedback']['name']).val();
			var china = getTag(getContainer($(this).attr(tagIndetity)),'hidden',privateProperty['lookup']['filedbackchina']['name']).val();
			var orgname = getTag(getContainer($(this).attr(tagIndetity)),'hidden',privateProperty['lookup']['lookupgroup']['name']).val();
			var chinaarr=new Array();
			if(isNullorEmpty(china)){
				chinaarr = china.split(',');
			}
			if(isNullorEmpty(vals)){
			var parames = vals.split(',');
				for(var i=0 ;i<parames.length;i++){
					chinaarr[i] = chinaarr[i]?parames[i]+'【'+chinaarr[i]+'】':parames[i];
					chinaarr[i] += '【'+curCategoryName+'】';
					option +='<option class="level2" value="'+orgname+'.'+parames[i]+'">'+chinaarr[i]+'</option>';
				}
			}
		});
	}
	$(th).html(option);
}
/**
*	下拉框dropback属性的处理函数
**/
function getDropbackinfo(obj,th){
	var curObj = getContainer(obj);
	var curContainer = $('#nbmDroppable');
	var option='';
	option ='<option value="">请选择</option>';
	// 排除当前项
	var obj = $('li[data="select"]' , curContainer).not(curObj);
	if(obj.length){
		obj.each(function(){
			// option+='<optgroup label="'+getTag(getContainer($(this).attr(tagIndetity)),'hidden',publicProperty['title']['name']).val()+'"></optgroup>';
			var curCategoryName = getTag(getContainer($(this).attr(tagIndetity)),'hidden',publicProperty['title']['name']).val();
			option +='<option disabled="disabled">'+curCategoryName+'</option>';
			var vals ="value"; getTag(getContainer($(this).attr(tagIndetity)),'hidden',privateProperty['select']['fields']['name']).val();
			var china = "<选中值>";getTag(getContainer($(this).attr(tagIndetity)),'hidden',privateProperty['lookup']['filedbackchina']['name']).val();
			var orgname = getTag(getContainer($(this).attr(tagIndetity)),'hidden',privateProperty['select']['dropbackkey']['name']).val();
			if(isNullorEmpty(vals)){
				option +='<option class="level2" value="'+orgname+'.'+vals+'">'+china+'</option>';
			}
		});
	}
	$(th).html(option);
}
/**
*	日期组件，格式类型更改后的相关操作
*/
function explainDateFormat(obj,th){
	console.log(obj);
	console.log($(th).val());
	// 当前指定格式
	var formatStr = $(th).val();
	// 格式分解，写入相应属性中
	if(formatStr){
		// 0:js
		// 1:php
		var arr = formatStr.split('@');
		getTag(getContainer(obj),'hidden',privateProperty['date']['formatphp']['name']).val(arr[1]);
		getTag(getContainer(obj),'hidden',privateProperty['date']['formatjs']['name']).val(arr[0]);
	}
	
}
/**
 * lookup设置默认值  , 默认为第一项
 */
function setDefaultChoices(obj , th){
	return;
	var curContainer = typeof(obj)=='string'?getContainer(obj):obj;
	// $(this).logs('setDefaultChoices：'+$(th).val());
	// 取得数据列表 
	var rel = privateProperty['lookup']['lookupchoice']['rel']; // 关联
	try{
		if(isNullorEmpty(rel)){
			var relArr = rel.split(';');
			for(var j in lookupConfig){
				var curObjConfig = lookupConfig[j];
				for(var i in relArr){
					if(!relArr[i])return;
					var curObjRel = relArr[i].split(':');
					if(curObjRel[0] && curObjRel[1]){
						$('input[type="hidden"][name^="'+curObjRel[0]+'"]' , curContainer).val(curObjConfig[curObjRel[1]]);
					}
				}
				$(th).val(j);
				return;
			}
		}
	}catch(e){
		$(this).logs('数据异常'+e.message);
		alert(e.message);
	}
}
function categorylist(obj , th){
	var option = '';
	var a = privateProperty[0];
	var t = a['title'];
	$.each(privateProperty ,function(i , v){
		//$(this).logs('生成组件列表:'+i+'__'+v['title']);
	});
}

function _changeTagCategory(obj , th){
// obj 获取容器
// 获取当前选中值 
var curCategory = $(th).val();
// 获取指定组件的html代码
var html='';
$('#toolBarPanel li.dragItems').each(function(){
	if(curCategory == $(this).find('div:first').attr('data')){
		html = $(this).closest('li').children().eq(0);
		//html = $('div>:first-child' , p);
	}
});
var isline = $(html).attr('isline');

// 临时存储容器
var order = $('<div class="add"></div>');
var curContainer = getContainer(obj);

var cruCss = isline==1?'line':'noline';

curContainer.attr('data', curCategory);
curContainer.removeClass('noline').removeClass('line');
curContainer.addClass(cruCss);
var names = curContainer.attr('names');
for(var val in privateProperty[curCategory]){
	var nameCharacter = privateProperty[curCategory][val]['name'];
	if(isNullorEmpty(nameCharacter)){
		// 得到当前Name属性值
		var nameVal = getTag(curContainer, 'hidden', nameCharacter).val();
		if(typeof(nameVal) == 'undefined'){
			nameVal ='';
		}
		var obj;
		if(nameCharacter == 'catalog'){
			obj = $('<input type="hidden" name="'+nameCharacter+'['+names+']" value="'+curCategory+'" />');
		}else{
			obj = $('<input type="hidden" name="'+nameCharacter+'['+names+']" value="'+nameVal+'" />');
		}
		order.append(obj);
	}
}

html = $(html);
html.append(order.html());
curContainer.html('');
curContainer.append(html);
curContainer.trigger('click');
}

/**
 *	设置默认值，默认值获取条件及设置项配置文件设置。
 */
function setdefault(obj , th){
	$(this).logs('我要设定默认值。'+obj);
	var curContainer = typeof(obj)=='string'?getContainer(obj):obj;
	// 得到当前容器
	var cobj = $(th).closest('li.nbmmove');
	// 得到组件类型
	var tagCategory =cobj.attr('data'); 
	// 取得当前项的标识
	var checkorder = cobj.attr('checkorder'); 
	
	// 当前组件name
	var curName  = $(th).attr('name');
	// 获取默认数据
	
	// 当前项的默认数据
	var defaultVal = privateProperty[tagCategory][curName]['default'];
$(this).logs('配置的默认值。'+defaultVal);
	
	// 获取默认数据来源
	// 1.配置中的默认数据
	// 2.需要ajax获取的数据
	if(defaultVal.indexOf(':')>-1 && !isNullorEmpty($(th).val())){
		var tempIndex = defaultVal.substr(defaultVal.indexOf(':')+1);
		var valIndex = 0;
		try{
			valIndex = parseInt(tempIndex.trim());
		}catch(e){
			valIndex = 0;
			console.log(e.message);
		}
		if(choiseformid){
		    valIndex ++;
		}
		if(isNullorEmpty(privateProperty[tagCategory][curName]['data'])){
			//$(this).logs('我需要设置默认值 ,来源为构造字符');
			var defaultVal = privateProperty[tagCategory][curName]['data'];
			var tempData = defaultVal.split("#");
			$.each(tempData , function(i , v){
				if(i == valIndex){
					$(th).val((v.split("|"))[0]);
				}
			});
			//valIndex
		}else{
			var nodename = '<?php echo ($vo["actionname"]); ?>';
			$.ajax({
				url:'__URL__/'+privateProperty[tagCategory][curName]['dataAdd'],
				type:'post',
				data:{'nodename':nodename},
				dataType:'json',
				success:function(data){
					if(data){
						var index = 0;
						$.each(data , function(i , v){
							if(index == valIndex){
								$(th).val(v.name);
							}
							index ++;
						});
					}
				}
			});
		}
	}
	//privateProperty[tagCategory]['tablename']['name']
	// 取得数据列表
	//privateProperty[tagCategory]['tablename']['name'];
}

function createORGName(obj , th){
	var tagCategory = $(th).attr('key');
	if(!isNullorEmpty(tagCategory)){
		tagCategory = 'lookup';
	}
	var defaultVal = th.val();
	var numbers = 1;//Math.random()*(100-1)+1;
	//defaultVal = defaultVal+numbers;
	if(tagCategory){
		while(getTagAppend(obj , 'hidden' , privateProperty[tagCategory]['lookupgroup']['name']+'[' , '[value="'+defaultVal+numbers+'"]').length){
			
			numbers ++;
		}
	}
	th.val(defaultVal+numbers);
}
/**
* lookup前置属性的处理
* @parame	obj	当前操作类型作用域
* @parame	th	属性选择触发对象
* @parame 	type	当前操作类型 [bind:属性选择, set:组件点击]
*/
function lookupchoice(obj, th , type){
	var curContainer = getContainer(obj);
	//$('textarea' , curContainer).attr('cols',$(th).val());
	var tagCategory = $(th).attr('key');
	// 获取关联字段列表 
	var prip = privateProperty[tagCategory];
	var rellist = prip['lookupchoice']['rel'];
	$(th).closest('td').find('a.nbm_lookup_edit').remove(); // nbmxkj modify chonse
	if($(th).val()){
		var val = $(th).val();
		$(th).closest('td').append('<a class="nbm_lookup_edit" href="javascript:void(0);" onclick="_open(\''+tagCategory+'\',\''+rellist+'\',\''+val+'\')">属性 </a>');
	}
	if(type=='bind'){
		if(rellist){
			var relArr = rellist.split(';');
			//console.log(relArr);
			// 隐藏属性值设定。
			var val = $(th).val();
			//$(this).logs('开始做值处理'+val);
			if(!val){
				//$(this).logs('清空现有');
				for(var i in relArr){
					//$(this).logs('每个对应项: '+relArr[i]+" |end");
					if(!relArr[i])return;
					var curObjRel = relArr[i].split(':');
					if(curObjRel[0] && curObjRel[1] && prip[curObjRel[0]]){
						getTag(curContainer, 'hidden', prip[curObjRel[0]]['name']).val(' ');
					}
					var showControllObj = $('#'+prip[curObjRel[0]]['id']);
					if(showControllObj.length>0){
						showControllObj.val('');
					}
				}
				
			}else{
				//$(this).logs('设置用户选择'+tagCategory);
				var curObjConfig = lookupConfig[val]; // 当前项的llokup配置项
				for(var i in relArr){
					//$(this).logs('每个对应项: '+relArr[i]+" |end ");
					if(!relArr[i])return;
					var curObjRel = relArr[i].split(':');
					if(curObjRel[0] && curObjRel[1] && prip[curObjRel[0]]){
						var tempHiddenVal = prip[curObjRel[0]]['name']=='methods' ? 'view' : curObjConfig[curObjRel[1]];
						getTag(curContainer, 'hidden', prip[curObjRel[0]]['name']).val(tempHiddenVal);
						var showControllObj = $('#'+prip[curObjRel[0]]['id']);
						if(showControllObj.length>0){
							var tempVal = prip[curObjRel[0]]['name']=='methods' ? 'view' : curObjConfig[curObjRel[1]];
							showControllObj.val(tempVal);
						}
					}
				}
			}
		}
	}
}


/**
* checkfor前置属性的处理
* @parame	obj	当前操作类型作用域
* @parame	th	属性选择触发对象
* @parame 	type	当前操作类型 [bind:属性选择, set:组件点击]
*/
function checkforchoice(obj, th , type){
	var curContainer = getContainer(obj);
	//$('textarea' , curContainer).attr('cols',$(th).val());
	var tagCategory = $(th).attr('key');
	// 获取关联字段列表 
	var prip = privateProperty[tagCategory];
	var rellist = prip['checkforchoice']['rel'];
	//$(this).logs('obj:'+obj);
	//$(this).logs(th.html()+'____'+rellist);
	// $(th).next('a').remove();
	$(th).closest('td').find('a.nbm_checkfor_edit').remove(); // nbmxkj modify chonse
	if($(th).val()){
		var val = $(th).val();
		$(th).closest('td').append('<a class="nbm_checkfor_edit" href="javascript:void(0);" onclick="_checkforopen(\''+tagCategory+'\',\''+rellist+'\',\''+val+'\')">编辑 </a>');
	}
	if(type=='bind'){
		if(rellist){
			var relArr = rellist.split(';');
			// 隐藏属性值设定。
			var val = $(th).val();
			//$(this).logs('开始做值处理'+val);
			if(!val){
				//$(this).logs('清空现有');
				for(var i in relArr){
					//$(this).logs('每个对应项: '+relArr[i]+" |end");
					if(!relArr[i])return;
					var curObjRel = relArr[i].split(':');
					//$(this).logs('具体的对应关系_p: '+curObjRel[0]+' _c: '+curObjRel[1]);
					if(curObjRel[0] && curObjRel[1] && prip[curObjRel[0]]){
						getTag(curContainer, 'hidden', prip[curObjRel[0]]['name']).val('');
						
					}
				}
			}else{
				//$(this).logs('设置用户选择'+tagCategory);
				var curObjConfig = checkforConfig[val]; // 当前项的llokup配置项
				//$(this).logs('用户选择项的配置文件内容'+curObjConfig);
				for(var i in relArr){
					//$(this).logs('每个对应项: '+relArr[i]+" |end");
					if(!relArr[i])return;
					var curObjRel = relArr[i].split(':');
					$(this).logs(getTag(curContainer, 'hidden', prip[curObjRel[0]]['name']).val()+'__具体的对应关系_ property:'+curObjRel[0]+' _conf:'+curObjRel[1]+' _val:'+curObjConfig[curObjRel[1]]);
					if(curObjRel[0] && curObjRel[1] && prip[curObjRel[0]]){
						getTag(curContainer, 'hidden', prip[curObjRel[0]]['name']).val(curObjConfig[curObjRel[1]]);
						
					}
				}
			}
		}
	}
}

/**
 * 打开checkfor属性编辑页
 * @parame tagCategory 组件类型
 * @parame rellist	对应关系 
 * @parame val		当前选中值 
 */
function _checkforopen(tagCategory,rellist , val){
	var check = $('#hidObj').val(); // 组件唯一标识 
	// tagIndetity 属性查找标识
	// containerIndetity	操作容器ID
	//$.pdialog.open("__URL__/lookupconfigcontroll/category/"+tagCategory+"/rellist/"+rellist);
	var url = "__URL__/checkforconfigcontroll/category/"+tagCategory+"/check/"+check+"/container/"+containerIndetity+"/tagIndetity/"+tagIndetity+"/rellist/"+rellist+"/val/"+val;
	$.pdialog.open(url,'__MODULE__conments','CheckFor属性查看及修改',{mask:true,width:800,height:500});
}

/**
 * 打开lookup属性编辑页
 * @parame tagCategory 组件类型
 * @parame rellist	对应关系 
 * @parame val		当前选中值 
 */
function _open(tagCategory,rellist , val){
	var check = $('#hidObj').val(); // 组件唯一标识 
	// tagIndetity 属性查找标识
	// containerIndetity	操作容器ID
	//$.pdialog.open("__URL__/lookupconfigcontroll/category/"+tagCategory+"/rellist/"+rellist);
	var url = "__URL__/lookupconfigcontroll/category/"+tagCategory+"/check/"+check+"/container/"+containerIndetity+"/tagIndetity/"+tagIndetity+"/rellist/"+rellist+"/val/"+val;
	$.pdialog.open(url,'__MODULE__conments','Lookup属性查看',{mask:true,width:800,height:500});
}

/**********************************************************************************/
//1.得到当前对象的group。 然后取得所有当前分组的对象，遍历查看是否有任意一项有值
//2.当检查结果为true是就将目标分组所有对象全设为不可用.
//3.当手动传入组对象值是，直接将目标组对象全设为不可用.

/**
* 启用、禁用对应分分组对象 
* @parame tagProperty 当前组件属性列表
* @parame obj 当前对象
* @parame val 当前对象的值 
*/
function toggleOprate(tagProperty , obj , val){
	//$(this).logs(tagCategory+'__'+val+'__'+obj);
	//privateProperty[tagCategory]
	// 得到当前对象的分组 
	var curG = $(obj).attr('group');
	var curOrder ='';
	if(isNullorEmpty(curG)){
		orderG = tagProperty['toggle']; // 目标分组 
		/**
		* 	修改代码：以支持多分组功能  toggle=a,b,c,d
		**/
		var orderGArr = orderG.split(',');
		//$(this).logs('cur group:'+curG+'   orderG:'+orderG);
		if(isNullorEmpty(orderG)){
			var istrue = false;
			var c = $('#nbm_right_panel');
			$('[group='+curG+']' , c).each(function(){
				if(isNullorEmpty($(this).val())){
					istrue = true;
					return false;
				}
			});
			if(istrue){
				$.each(orderGArr , function(k , v){
					$('[group='+v+']' , c).each(function(){
						//$(this).logs('cur 1:'+curG+'   orderG 1 :'+v);
						$(this).attr('disabled',true);
						//$(this).logs('disabled true：'+$(this).attr('id'));
						//$('#'+$(this).attr('id')).select2('destroy');
					});
				});
				
				//$('[group='+orderG+']' , c).select2('destroy');
				//initsearchselect();
			}else{
				
				$.each(orderGArr , function(k , v){
					$('[group='+v+']' , c).each(function(){
						$(this).attr('disabled',false);
						//$(this).logs('disabled false：'+$(this).attr('id'));
						$('#'+$(this).attr('id'));
					});
				});
				//$('[group='+orderG+']' , c).select2('destroy');
				//initsearchselect();
			}
			
			destroysearchselect();
			initsearchselect();
		}
		
	}
}
/**
* 检查指定对象值是否存在，然后改变另一个标签的可用性 
* @parame container	容器
* @parame obj			属性更改对象
* @parame orderTagName	值检查对象name值 
*/
function visableByOrderTag(container , obj , orderTagName){
	if(isNullorEmpty(orderTagName)){
		 var orderVal =  getTag(container , 'hidden' , orderTagName ).val();
		 if(isNullorEmpty(orderVal)){
			 $(obj).attr('disabled',true);
		 }
	}
}
/**
* 获取依赖项 
* @parame container		容器
* @parame privateProperty	当前项的私有属性 
* @parane orderKey			依赖项的配置文件中key值 
*/
function getReferItem(container , privateProperty , orderKey){
	// 查找 依赖项的name值  nbmxkj
	var pl='';
	pl = publicProperty[orderKey]['name'];
	if(!isNullorEmpty(pl)){
		pl = configProperty[orderKey]['name'];
	}
	return pl;
}


/* ******************************************************************************************************** */
/* *										配置函数end 												 	  * */ 
/* ******************************************************************************************************** */


/**
 * 生成成组件隐藏域 
 * @parame order 生成标签存放对象
 * @parame category 组件类型标识 
 */
function creaHidden(order , category){
	/** 生成 公用属性 **/
	// 遍历么有属性 
	for(var val in privateProperty[category]){
		var beforefuncCharacter = privateProperty[category][val]['beforefunc'];
		var nameCharacter = privateProperty[category][val]['name'];
		if(isNullorEmpty(nameCharacter)){
			//$(this).logs(category+' ___ '+nameCharacter);
			var defaultVal = isNullorEmpty(privateProperty[category][val]['default'])?privateProperty[category][val]['default']:'';
			if(defaultVal !='' && defaultVal.toString().indexOf(':')>-1){
				defaultVal ='';
			}
			//$(this).logs(nameCharacter+':'+defaultVal);// nbmxkj
			var obj;
			if(nameCharacter == 'catalog'){
				obj = $('<input type="hidden" name="'+nameCharacter+'" value="'+category+'" />');
			}else{
				obj = $('<input type="hidden" name="'+nameCharacter+'" value="'+defaultVal+'" />');
			}
			order.append(obj);
			if(beforefuncCharacter){
				nbm_doCallback(eval(beforefuncCharacter),[containerObj,obj]);
			}
		}
	}
}
$(function(){
	containerObj = $('#'+containerIndetity);
	try{
	//publicProperty = $.parseJSON(publicProperty);
	//privateProperty = $.parseJSON(privateProperty);
	//lookupConfig = $.parseJSON(lookupConfig);
	//checkforConfig = $.parseJSON(checkforConfig);
	}catch(e){
		console.log(e.message);
	}
	binddelbtn();
	reservedField = $.parseJSON(reservedField);
	//querytables = $.parseJSON(querytables);
	// 生成公用属性面板.
	var rightPanel = createPropertyyPanel(publicProperty,'');
	$('#nbm_right_panel').html(rightPanel);
	
	var tagIndex = containerObj.children().length;
	$('#nbmDroppable').sortable({
		revert:false,
		opacity: 0.6 ,
		helper:'clone',
		placeholder:'nbm_highlight',
		start:function(e,u){
		 if(u.item.attr('class').indexOf('dragItems')>-1){
			 var c = u.item.children();
			 c.removeClass('nbmmove');
			 u.item.removeClass();
			 u.item.removeAttr('title');
			 //u.item.removeAttr('style');
			 u.item.attr('data',c.attr('data'));
			 u.item.addClass('nbmmove');
			 if(c && c.attr('colcls')){
				 u.item.addClass(c.attr('colcls'));
			 }
			 creaHidden(u.item , c.attr('data'));
			 //u.item.attr('onclick','setProp(this)');
		 }
		 /** 更改当当前点位符的样式  **/
		$(u.placeholder).removeClass();
		var hightcls = u.item.attr('class');
        $(u.placeholder).addClass(hightcls+' nbm_highlight');
        $(u.item).find('a.nnbm_delete_plain_ctl').click(function(e){
            deleteCntroll(this , e);
        });
		  /*
		 if(u.item.attr('class')== 'line'){
             $(u.placeholder).removeClass();
             $(u.placeholder).addClass('line nbm_highlight');
         }else{
        	 $(u.placeholder).removeClass();
             $(u.placeholder).addClass('noline nbm_highlight');
         }
         */
		//生成编号 
         if(u.item.attr(tagIndetity)==undefined){
             // 保证不重复 
             while($('li[names="'+u.item.children().attr('data')+tagIndex+'"]',containerObj).length > 0){
            	tagIndex ++;
             }
			u.item.find('label:first').text(u.item.find('label:first').text()+'_'+tagIndex);
			u.item.attr(tagIndetity,u.item.children().attr('data')+tagIndex);
			u.item.attr('names',u.item.children().attr('data')+tagIndex);
			
			u.item.find('input[type="hidden"]').each(function(){
				//console.log('组件拖入name:'+$(this).attr('name'));
				if($(this).attr('name').indexOf('fields') > -1){
					$(this).attr('name', $(this).attr('name')+'[]');
					$(this).val(u.item.attr('data')+tagIndex);	
					
				}else{
					if($(this).attr('name') == 'title'){
					/// if($(this).attr('name').indexOf('title') > -1){
	                    $(this).val(u.item.find('label:first').text());
	                }
					$(this).attr('name', $(this).attr('name')+'['+u.item.attr('data')+tagIndex+']');
				}
			});
			tagIndex++;
        }
            binddelbtn();
        return u;
		},
		deactivate:function(e,u){
			// 重新给组件排序。
			var allItem = containerObj.find('.nbmmove');
            allItem.each(function(k,v){
           	 $(v).find('input[type="hidden"][name^="sort"]').val(k);
            });
            
         	// 获取到当前新拖入没有保存的内容 
			var saveobj = $('input[type="hidden"][name^="ids["][value=""]' , containerObj).closest('li');
			if(saveobj.length>0){
				var tempHtml = saveobj.html();
				var curnode = $('input[name="curnode"]').val();
				tempHtml+='<input type="hidden" name="curnode" value="'+curnode+'" />';
				var curaformid = $('input[name="dynamicformid"]').val();
				tempHtml+='<input type="hidden" name="formid" value="'+curaformid+'" />';
				var choiseformid = $('input[name="choiseformid"]').val();
				var choiseaction =  $('input[name="choiseaction"]').val();
				if(choiseformid && choiseaction){
					tempHtml+='<input type="hidden" name="choiseformid" value="'+choiseformid+'" />';
					tempHtml+='<input type="hidden" name="choiseaction" value="'+choiseaction+'" />';
				}
				$('#nbmAjaxEditForm').html(tempHtml);
				
				var formData = $('#nbmAjaxEditForm').formSerialize();
				if(formData){
					 $('#nbmAjaxEditForm').ajaxSubmit(function(data){
						 if(data){
							 data = $.parseJSON(data);
							 if(data.code==0){
								 alert(data.msg);
								 console.log(this);
								 if(data.field){
									 $('li[checkorder="'+data.field+'"]').remove();
								 }
							 }else{
					         	// 将新加数据的ID值反写回页面中 
					         	$(this).logs(data.ids);
					         	$(this).logs(data.ids);
					         	saveobj.find('input[type="hidden"][name^="ids["]').val(data.ids);
					         	saveobj.find('input[type="hidden"][name^="id["]').val(data.id);
							 }
						 }
			         });
				}
				$('#nbmAjaxEditForm').html('');
			}
		}
		
	}).disableSelection();
	$('#toolBarPanel li').draggable({
		helper:'clone',
		addClasses:false,
		start:function(e , u){
			//var curh = $("#nbmDroppable").height();
			// 在从左侧拖取时显示组件效果 
        	var item = $(u.helper);
            u.item= item;
            var c = u.item.children();
            $("#nbmDroppable").css({'background-color': '#ccc',height:$("#nbmDroppable").height()+65});
            u.item.removeClass();
            u.item.html(c.html());
            u.item.attr('data',c.attr('data'));
            u.item.addClass('nbm_highlight');
            /*if(c.attr('class').indexOf('tml-form-row') >-1){
                $(this).draggable('option', 'placeholder', 'line nbm_highlight');
            }else{
                $(this).draggable('option', 'placeholder', 'noline nbm_highlight');
            }*/
           // return u;
         //  console.log(u.item);
          $(u.item).find('li').click(function(e){
              e.stopPropagation();
              console.log('我要开始属性的生成');
              setProp(this);
         });
            binddelbtn();
       	},
       	stop:function(e,u){
        	$("#nbmDroppable").removeAttr('style');//不清空样式，不然无法拖入组件
        	//$("#nbmDroppable").css({'background-color':'#fff'});
        },
		connectToSortable:'#nbmDroppable'
	});
	 $("#rightToolbar").toggle(function () {
       	$('#rightToolbar_c').animate({ width: 'toggle', opacity: 'toggle' }, "slow");
       }, function () {
       	$('#rightToolbar_c').animate({ width: 'toggle', opacity: 'toggle' }, "slow");
    });
 $("#formName").unbind('blur');
    $('#formName').blur(function(){
        $('h2.contentTitle').text($(this).val());
    });

   function binddelbtn(){
       $('#nbmDroppable li').hover(function(){
           var aobj = $(this).find('a.nnbm_delete_plain_ctl');
           aobj.addClass('icon-remove');
           aobj.show();
       },function(){
           var aobj = $(this).find('a.nnbm_delete_plain_ctl');
           aobj.hide();
       });
       $('#nbmDroppable li').off('click');
       $('#nbmDroppable li').on('click',function(e){
           e.stopPropagation();
              console.log('我要开始属性的生成');
              setProp(this);
       });
   }
   /*
   $('.tml_formBar_btn').click(function(){
	   var orderItem = $('#nbmDroppable').find('li[saveitem="1"]');
	   var tempHtml = orderItem.html();
		if(tempHtml){
			var curnode = $('input[name="curnode"]').val();
			tempHtml+='<input type="hidden" name="curnode" value="'+curnode+'" />';
			var curaformid = $('input[name="dynamicformid"]').val();
			tempHtml+='<input type="hidden" name="formid" value="'+curaformid+'" />';
		}
		$('#nbmAjaxEditForm').html(tempHtml);
		
		var formData = $('#nbmAjaxEditForm').formSerialize();
		if(formData){
			 $('#nbmAjaxEditForm').ajaxSubmit(function(data){
	             //alert(data);
	             return false;
	         });
		}
		orderItem.removeAttr('saveitem');
	   $('#nbmForm').submit();
   });
   */
});
function nullValidateFunc(json){}
function validateCallbackFunc(obj, func){}
</script>
<div class="page">
    <div class="pageContent">
    <form action="__URL__/ajaxeditporperty" method="post" id="nbmAjaxEditForm" style="display: none;" onsubmit="return validateCallbackFunc(this, nullValidateFunc)"></form>
    <form id="nbmForm" method="post" action="__URL__/editAutoForm" class="pageForm required-validate"  onsubmit="return iframeCallback(this,DynamicnavTabDone);" >
             <!-- 编辑区预览 -->
            <div class="pageFormContent applecloth anchorsToolBarParent" layoutH="100">
                <div class="new_version_page" style="width: calc(100% - 325px);">
                    <!-- 标题 -->
                    <div class="new_version_page_header pageFormContent" style="width: 100%">
                        <?php if($vo["actiontitle"] ): echo ($vo["actiontitle"]); ?>【<a class="header_edit_btn" href="__URL__/edit/type/1/aname/<?php echo ($vo["actionname"]); ?>/formid/<?php echo ($vo["id"]); ?>" target="navtab" >修改</a>】
                            <input type="hidden" name="excelsource" value="<?php echo ($vo["tpl"]); ?>" />
                            <input type="hidden" name="dynamicformid" value="<?php echo ($vo["id"]); ?>" />
                            <input type="hidden" name="curnode" value="<?php echo ($curnode); ?>" />
                            <input type="hidden" name="choiseformid" value="<?php echo ($vo["choiseformid"]); ?>" />
                            <input type="hidden" name="choiseaction" value="<?php echo ($vo["choiseaction"]); ?>" />
                       <?php else: ?>
                       		请在字段设置面板中设置表单属性<?php endif; ?>
                    </div>
                    <!-- 列表 -->
                   	<ul id="nbmDroppable" class="new_version_page_content"> 
                        <?php echo ($html); ?>
                    </ul>
                    <!-- 列表end -->
                </div>
				<div class="formBar" style="position: fixed;left:0px;bottom:40px;width: 100%;margin: 0 auto;">
				<ul>
					<li>
						 
							<button class="tml_formBar_btn tml_formBar_btn_blue" type="submit">
								<?php if($step == 1): echo (L("nextstep")); else: echo (L("save")); endif; ?>
							</button>
					</li>
					<!--<li><button type="button" class="close tml-btn tml-btn-default"><?php echo (L("close")); ?></button></li>-->
				</ul>
			</div>
            </div>
			

				<!-- 编辑区预览 end-->
			<!-- 工具框 -->
			<div class="" style="position: fixed; top:116px; left:5px;">
			<ul id="toolBarPanel" class="dragItemsContainer" layoutH="134">
<?php if(is_array($controlls)): $i = 0; $__LIST__ = $controlls;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li class="dragItems" title="<?php echo ($item["title"]); ?>">
<?php echo ($item["html"]); ?>
</li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
        	</div>
			<!-- 工具框end -->
			<script>
				$(function(){
					initsearchselect();
				});
			</script>
			<!-- 属性框 -->
			<div id="nbm_right_toolbar" style="position: fixed;right:20px; top:130px; z-index:1;">
				<div style="box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.2);border-radius: 4px;">
    <div class="rightToggleCollapse" id="rightToolbar" style="background: #1abc9c;color: #fff;text-shadow: 0px 0px 1px rgba(255,255,255,0.5);text-align: center;line-height: 32px;font-size: 14px; border: none;border-radius: 4px;">
        <span style="padding: 0px 12px; cursor: default;">字段设置面板</span>
    </div>
    <div class="accordion " style="padding-top:5px; width: 325px; background: #eff0f2; border: none;box-shadow: inset 0px 2px 0px #1abc9c;margin-top: -2px;" id="rightToolbar_c">
        <div class="accordionContent" style="height: 385px;">
            <input type="hidden" id="hidObj" />
            <div id="nbm_right_panel" class="nbm_right_panel"></div>
        </div>
    </div>
</div>
<div class="form_trr_element" style="display: none;">

    节点名称：<input name="nodename" style="border-radius: 4px;" placeholder="只能输入英文" class="required textInput lettersonly" value="<?php echo ($vo["actionname"]); ?>" <?php if($vo["actionname"] ): ?>readonly="readonly"<?php endif; ?> />


    显示名称：<input id="formName" style="border-radius: 4px;" name="nodetitle" class="required textInput" value="<?php echo ($vo["actiontitle"]); ?>" />
</div>
</div>
			</div>
			<!-- 属性框end -->
			
			
    </form>
    </div>
</div>