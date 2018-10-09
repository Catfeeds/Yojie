<?php if (!defined('THINK_PATH')) exit();?><div class="tablesouce" style="display:none">
<div class="list_header">
	<span>表名：</span> <input style="font-family: 'microsoft yahei'"
		type="text" name="tablename[1]" placeholder="请输入表名"
		class="required " /> <span class="right"
		style="padding-right: 20px;"> 
		<input
		class="mr10 nbm_primary_table" value="1" type="checkbox"
		checked="checked" name="tableprimary[1]"  disabled="disabled"/> <span>是否设置为主表</span>
	</span>
</div>
<table class="new_table" index="1">
	<colgroup>
		<col width="10%"></col>
		<col width="10%"></col>
		<col width="10%"></col>
		<col width="10%"></col>
		<col width="10%"></col>
		<col width="10%"></col>
		<col width="10%"></col>
		<col width="10%"></col>
	</colgroup>
	<thead>
		<tr>
			<th>字段名称(英文)</th>
			<th>字段标题(中文)</th>
			<th>备注</th>
			<th>字段类型</th>
			<th>字段长度</th>
			<th>组件类型</th>
			<th>权重</th>
			<th><a href="javascript:void(0);"
				class="nbm_check_all_item">是否唯一</a></th>
			<th><a href="javascript:void(0);"
				class="nbm_check_all_item">是否显示</a></th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<input name="fieldname[1][1]" placeholder="请输入英文名称" autocomplete="off"
				type="text" id="filed_add_table1_fieldname_index1" class="lettersonly required  nbm_fieldnameonly"
				/>
			</td>
			<td>
				<input name="fieldtitle[1][1]" placeholder="请输入中文标题" autocomplete="off"
				id="filed_add_table1_fieldtitle_index1" type="text" class="required" />
			</td>
			<td>
				<input name="fielddesc[1][1]" autocomplete="off" placeholder="请输入备注" type="text"
				class="" />
			</td>
			<td>
				<select name="fieldtype[1][1]" class="select2 opcategory">
					<?php if(is_array($fieldtypeList)): $i = 0; $__LIST__ = $fieldtypeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fieldtypeVo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($fieldtypeVo["key"]); ?>" len="<?php echo ($fieldtypeVo["len"]); ?>" cate="<?php echo ($fieldtypeVo["cate"]); ?>">
							<?php echo ($fieldtypeVo["val"]); ?>
						</option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</td>
			<td>
				<input name="fieldlength[1][1]" placeholder="请输入字段长度" autocomplete="off"
				type="text" id="filed_add_table1_fieldlength_index1" value="10" class="required "
				/>
			</td>
			<td>
				<select name="fieldcategory[1][1]" class="select2 opweight ">
					<?php if(is_array($comboxOptionList)): $i = 0; $__LIST__ = $comboxOptionList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comboxOptionVo): $mod = ($i % 2 );++$i;?><option weight="<?php echo ($comboxOptionVo["weight"]); ?>" value="<?php echo ($comboxOptionVo["name"]); ?>">
							<?php echo ($comboxOptionVo["title"]); ?>
						</option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</td>
			<td>
				<input name="fieldweight[1][1]" placeholder="请输入权重" autocomplete="off"
				value="1" type="text" id="filed_add_table1_fieldweight_index1" class="number required "
				/>
			</td>
			<td>
				<input name="fieldunique[1][1]" value="1" type="checkbox" />
			</td>
			<td>
				<input name="fieldshow[1][1]" value="1" type="checkbox" checked />
			</td>
			<td>
				<a class="nbm_del_col" href="javascript:void(0);">
					移除行
				</a>
			</td>
		</tr>
		<tr>
			<td>
				<input name="fieldname[1][2]" placeholder="请输入英文名称" autocomplete="off"
				type="text" id="filed_add_table1_fieldname_index1" class="lettersonly required  nbm_fieldnameonly"
				/>
			</td>
			<td>
				<input name="fieldtitle[1][2]" placeholder="请输入中文标题" autocomplete="off"
				id="filed_add_table1_fieldtitle_index1" type="text" class="required" />
			</td>
			<td>
				<input name="fielddesc[1][2]" autocomplete="off" placeholder="请输入备注" type="text"
				class="" />
			</td>
			<td>
				<select name="fieldtype[1][2]" class="select2 opcategory">
					<?php if(is_array($fieldtypeList)): $i = 0; $__LIST__ = $fieldtypeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fieldtypeVo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($fieldtypeVo["key"]); ?>" len="<?php echo ($fieldtypeVo["len"]); ?>" cate="<?php echo ($fieldtypeVo["cate"]); ?>">
							<?php echo ($fieldtypeVo["val"]); ?>
						</option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</td>
			<td>
				<input name="fieldlength[1][2]" placeholder="请输入字段长度" autocomplete="off"
				type="text" id="filed_add_table1_fieldlength_index1" value="10" class="required "
				/>
			</td>
			<td>
				<select name="fieldcategory[1][2]" class="select2 opweight ">
					<?php if(is_array($comboxOptionList)): $i = 0; $__LIST__ = $comboxOptionList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comboxOptionVo): $mod = ($i % 2 );++$i;?><option weight="<?php echo ($comboxOptionVo["weight"]); ?>" value="<?php echo ($comboxOptionVo["name"]); ?>">
							<?php echo ($comboxOptionVo["title"]); ?>
						</option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</td>
			<td>
				<input name="fieldweight[1][2]" placeholder="请输入权重" autocomplete="off"
				value="1" type="text" id="filed_add_table1_fieldweight_index1" class="number required "
				/>
			</td>
			<td>
				<input name="fieldunique[1][2]" value="1" type="checkbox" />
			</td>
			<td>
				<input name="fieldshow[1][2]" value="1" type="checkbox" checked />
			</td>
			<td>
				<a class="nbm_del_col" href="javascript:void(0);">
					移除行
				</a>
			</td>
		</tr>
		<tr>
			<td>
				<input name="fieldname[1][3]" placeholder="请输入英文名称" autocomplete="off"
				type="text" id="filed_add_table1_fieldname_index1" class="lettersonly required  nbm_fieldnameonly"
				/>
			</td>
			<td>
				<input name="fieldtitle[1][3]" placeholder="请输入中文标题" autocomplete="off"
				id="filed_add_table1_fieldtitle_index1" type="text" class="required" />
			</td>
			<td>
				<input name="fielddesc[1][3]" autocomplete="off" placeholder="请输入备注" type="text"
				class="" />
			</td>
			<td>
				<select name="fieldtype[1][3]" class="select2 opcategory">
					<?php if(is_array($fieldtypeList)): $i = 0; $__LIST__ = $fieldtypeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fieldtypeVo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($fieldtypeVo["key"]); ?>" len="<?php echo ($fieldtypeVo["len"]); ?>" cate="<?php echo ($fieldtypeVo["cate"]); ?>">
							<?php echo ($fieldtypeVo["val"]); ?>
						</option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</td>
			<td>
				<input name="fieldlength[1][3]" placeholder="请输入字段长度" autocomplete="off"
				type="text" id="filed_add_table1_fieldlength_index1" value="10" class="required "
				/>
			</td>
			<td>
				<select name="fieldcategory[1][3]" class="select2 opweight ">
					<?php if(is_array($comboxOptionList)): $i = 0; $__LIST__ = $comboxOptionList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comboxOptionVo): $mod = ($i % 2 );++$i;?><option weight="<?php echo ($comboxOptionVo["weight"]); ?>" value="<?php echo ($comboxOptionVo["name"]); ?>">
							<?php echo ($comboxOptionVo["title"]); ?>
						</option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</td>
			<td>
				<input name="fieldweight[1][3]" placeholder="请输入权重" autocomplete="off"
				value="1" type="text" id="filed_add_table1_fieldweight_index1" class="number required "
				/>
			</td>
			<td>
				<input name="fieldunique[1][3]" value="1" type="checkbox" />
			</td>
			<td>
				<input name="fieldshow[1][3]" value="1" type="checkbox" checked />
			</td>
			<td>
				<a class="nbm_del_col" href="javascript:void(0);">
					移除行
				</a>
			</td>
		</tr>
		<tr>
			<td>
				<input name="fieldname[1][4]" placeholder="请输入英文名称" autocomplete="off"
				type="text" id="filed_add_table1_fieldname_index1" class="lettersonly required  nbm_fieldnameonly"
				/>
			</td>
			<td>
				<input name="fieldtitle[1][4]" placeholder="请输入中文标题" autocomplete="off"
				id="filed_add_table1_fieldtitle_index1" type="text" class="required" />
			</td>
			<td>
				<input name="fielddesc[1][4]" autocomplete="off" placeholder="请输入备注" type="text"
				class="" />
			</td>
			<td>
				<select name="fieldtype[1][4]" class="select2 opcategory">
					<?php if(is_array($fieldtypeList)): $i = 0; $__LIST__ = $fieldtypeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fieldtypeVo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($fieldtypeVo["key"]); ?>" len="<?php echo ($fieldtypeVo["len"]); ?>" cate="<?php echo ($fieldtypeVo["cate"]); ?>">
							<?php echo ($fieldtypeVo["val"]); ?>
						</option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</td>
			<td>
				<input name="fieldlength[1][4]" placeholder="请输入字段长度" autocomplete="off"
				type="text" id="filed_add_table1_fieldlength_index1" value="10" class="required "
				/>
			</td>
			<td>
				<select name="fieldcategory[1][4]" class="select2 opweight ">
					<?php if(is_array($comboxOptionList)): $i = 0; $__LIST__ = $comboxOptionList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comboxOptionVo): $mod = ($i % 2 );++$i;?><option weight="<?php echo ($comboxOptionVo["weight"]); ?>" value="<?php echo ($comboxOptionVo["name"]); ?>">
							<?php echo ($comboxOptionVo["title"]); ?>
						</option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</td>
			<td>
				<input name="fieldweight[1][4]" placeholder="请输入权重" autocomplete="off"
				value="1" type="text" id="filed_add_table1_fieldweight_index1" class="number required "
				/>
			</td>
			<td>
				<input name="fieldunique[1][4]" value="1" type="checkbox" />
			</td>
			<td>
				<input name="fieldshow[1][4]" value="1" type="checkbox" checked />
			</td>
			<td>
				<a class="nbm_del_col" href="javascript:void(0);">
					移除行
				</a>
			</td>
		</tr>
		<tr>
			<td>
				<input name="fieldname[1][5]" placeholder="请输入英文名称" autocomplete="off"
				type="text" id="filed_add_table1_fieldname_index1" class="lettersonly required  nbm_fieldnameonly"
				/>
			</td>
			<td>
				<input name="fieldtitle[1][5]" placeholder="请输入中文标题" autocomplete="off"
				id="filed_add_table1_fieldtitle_index1" type="text" class="required" />
			</td>
			<td>
				<input name="fielddesc[1][5]" autocomplete="off" placeholder="请输入备注" type="text"
				class="" />
			</td>
			<td>
				<select name="fieldtype[1][5]" class="select2 opcategory">
					<?php if(is_array($fieldtypeList)): $i = 0; $__LIST__ = $fieldtypeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fieldtypeVo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($fieldtypeVo["key"]); ?>" len="<?php echo ($fieldtypeVo["len"]); ?>" cate="<?php echo ($fieldtypeVo["cate"]); ?>">
							<?php echo ($fieldtypeVo["val"]); ?>
						</option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</td>
			<td>
				<input name="fieldlength[1][5]" placeholder="请输入字段长度" autocomplete="off"
				type="text" id="filed_add_table1_fieldlength_index1" value="10" class="required "
				/>
			</td>
			<td>
				<select name="fieldcategory[1][5]" class="select2 opweight ">
					<?php if(is_array($comboxOptionList)): $i = 0; $__LIST__ = $comboxOptionList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comboxOptionVo): $mod = ($i % 2 );++$i;?><option weight="<?php echo ($comboxOptionVo["weight"]); ?>" value="<?php echo ($comboxOptionVo["name"]); ?>">
							<?php echo ($comboxOptionVo["title"]); ?>
						</option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</td>
			<td>
				<input name="fieldweight[1][5]" placeholder="请输入权重" autocomplete="off"
				value="1" type="text" id="filed_add_table1_fieldweight_index1" class="number required "
				/>
			</td>
			<td>
				<input name="fieldunique[1][5]" value="1" type="checkbox" />
			</td>
			<td>
				<input name="fieldshow[1][5]" value="1" type="checkbox" checked />
			</td>
			<td>
				<a class="nbm_del_col" href="javascript:void(0);">
					移除行
				</a>
			</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="10" style="text-align: right;">
					<button type="button" class="new_col_btn nbm_system_field">
						查看系统默认生成字段</button>

					<button type="button" class="new_col_btn nbm_add_col">
						新建一行</button>
					<button type="button"
						class="new_col_btn color_red nbm_remove_table">移除表</button>
				</td>
			</tr>
		</tfoot>
	</table>
</div>

<!-- 导入汉字转拼音库 -->
<script type="text/javascript"
	src="__PUBLIC__/Js/plugs/jQuery.Hz2Py-min.js"></script>
<script>
var maxPYLength = 20;
var asciiCode = 96;
var asciiCodeArr=Array();
	var reserved='<?php echo ($reserved); ?>';
	var dbsystemfield='<?php echo ($dbsystemfield); ?>';
	
	function DynamicnavTabDone(json) {
		DWZ.ajaxDone(json);
		if (json.statusCode == DWZ.statusCode.ok) {
			var type = json.data.type;
			var tpltype = json.data.tpltype;
			var nodename = json.data.nodename;
			var tablename = json.data.tablename;
			var params = [{
				name : 'nodename',
				value : nodename
			},{
				name : 'tablename',
				value : tablename
			},{
				name : 'tpltype',
				value : tpltype
			}];
			// 打开index 页面编辑页 
			navTab.closeCurrentTab();
			var tabids = "__MODULE__setindextpl";
			var urls = "__URL__/setindextpl/tpltype/"+tpltype+"/nodename/"+nodename+"/tablename/"+tablename;
			var titles = "首页模板设置";
			var postdata =params;
			navTab.openTab(tabids, urls, {title : titles,fresh : true,data:postdata});
			
			/*
			navTab.closeCurrentTab();
			var tabids = "__MODULE__add";
			var urls = "__URL__/quickedit";
			var titles = "拖动布局";
			var postdata =params;
			navTab.openTab(tabids, urls, {title : titles,fresh : true,data:postdata});
			*/
			
			return false;
		}
	}
function createNewCharacter(obj , original){
	var splider = '';
	//var defaultCahr = 'a';
	// 生成唯一的字符 
	// 得到最后的字符 
	var curChar = $(obj).val();
	// 取出自动追加的字段
	/*if(curCharArr.length==0){
		var end = curCharArr[curCharArr.length-1];
		var curCharASCII =  end.charCodeAt();
		if(curCharASCII<122){
			curCharASCII +=1;
		}
		end = String.fromCharCode(curCharASCII);
	}else{
		end = defaultCahr;
	}*/
	if(asciiCode<122){
		asciiCode +=1;
	}else{
		asciiCode = 97;
		asciiCodeArr.push(asciiCode); 
	}
	var str = '';
	for(var i in asciiCodeArr){
		str += String.fromCharCode(i);
	}
	end = String.fromCharCode(asciiCode);
		
	
	return original+splider+end;
}
var filedOprate = {
		run : function() {
			this.setPrimary();
			// 每个表单中的添加一行，数据来源于当前对象所在tr的上一个tr。
			this.insertCol();
			// 删除当前选中行
			this.deleteCol();
			// 删除当前表
			this.deleteTable();
			// 字段名称唯一检查
			this.checkFieldOnly();
			// 下拉框改变 赋权重
			this.selecchange();
			// 新加表
			this.addtable();
			// 全勾取
			this.checkall();
			// 显示系统字段
			this.showsystemfield();
			// 设置英文名没有填写的自动拼音填充
			this.setpy();
		},
		get : function() {
			return navTab.getCurrentPanel();
			//return $(document);
		},
		addtable : function() {
			/* 添加表 */
			var box = this.get();
			var _this = this;
			$('button.nbm_add_new_table', box).unbind('click');
			$('button.nbm_add_new_table', box).on('click', function() {
				var table = $('div.tableItem:last', box);
				var index = table.find('table').attr('index');
				try {
					index = parseInt(index, 10);
				} catch(e) {
					index = 0;
				}
				if(table.attr('ischoise') == 1){
					console.log('我要从数据源中取值');
					var tempBox = navTab.getCurrentPanel();
					var soucetable = $('div.tablesouce' , tempBox);
					var cloneTab = soucetable.clone(true);
					cloneTab.removeClass('tablesouce');
					cloneTab.addClass('tableItem');
					cloneTab.show();
				}else{
					var cloneTab = table.clone(true);
				}
				
				// 得到当前克隆对象下的TR个数。大于5的 就只留下5个。小于5的不管
				var ctrObj = cloneTab.find('tbody:first').children('tr');
				if (ctrObj.length > 5) {
					var lastTr = ctrObj.eq(ctrObj.length - 1);
					ctrObj.eq(4).nextAll().remove();
					ctrObj.find('tbody').append(ctrObj);
					ctrObj.find('tbody').append(lastTr);
				}
				cloneTab.find('tfoot').find('button.nbm_remove_table').removeAttr('remove');
				// 移除hidden 
				cloneTab.find('input[type="hidden"]').remove();
				cloneTab.find('tr').removeAttr('title style');
				cloneTab.find('a').show();
				// 将克隆表中的name值更改为当前序号，方便提交页面数据获取。
				
				// 给表头部分的name属性重命名
				cloneTab.find('div.list_header').find(':input').each(function() {
					$(this).attr('readonly', false);
					$(this).removeClass('readonly');
					if ($(this).attr('type') != "checkbox") {
						$(this).val('');
					} else {
						$(this).show();
						if ($(this).hasClass('nbm_primary_table')) {
							$(this).attr('checked', false);
						} else {
							$(this).attr('checked', true);
						}
					}
					var name = $(this).attr('name');
					var _this = this;
					// 当前组件的name值
					if ( typeof (name) == 'string' && $(_this)[0].tagName == "INPUT") {
						var tablename = name.replace(/((tablename\[)|(tableprimary\[))+\d+(\])/g, function(va) {
							
							var ret = va.split('[');
							var tabIds = ret[0]+'[' + (index + 1) + ']';
							return tabIds;
						});
						$(_this).attr('name', tablename);
						
						/*
						var tableprimary = name.replace(/(tableprimary\[)+\d+(\])/g, function(va) {
							var tabIds = 'tableprimary[' + (index + 1) + ']';
							return tabIds;
						});
						$(_this).attr('name', tableprimary);
						*/
					}
				});
				// 给table中的name重命名
				cloneTab.find('table.new_table').find(':input').each(function() {
					$(this).attr('readonly', false);
					$(this).removeClass('readonly');
					if ($(this).attr('type') != "checkbox") {
						$(this).val('');
					} else {
						$(this).show();
						if ($(this).hasClass('nbm_primary_table')) {
							$(this).attr('checked', false);
						} else {
							var _name = $(this).attr('name');
							if(_name.indexOf('fieldunique[') == -1){
								$(this).attr('checked', true);
							}else{
								$(this).attr('checked', false);
							}
						}
					}
					var name = $(this).attr('name');
					// 当前组件的name值
					if ( typeof (name) == "string") {
						// 将写入数据的标签name值改为跟当前表相同的序号
						var curitemname = name.replace(/(\[)+\d+(\]\[)/g, function(va){
							var curIndex = va.match(/\d+/g);
							var i = parseInt(curIndex , 10);
							var tabIds = "[" + (i+1)+'][';
							return tabIds;
						});
						$(this).attr('name', curitemname);
					}
					if ($(this)[0].tagName == "SELECT") {
						var curTag = $(this);
						curTag.removeAttr("style");
						//curTag.addClass('select2');
						// 加样式
						var td = curTag.closest('td');
						// 获取td
						td.html('');
						//移除现有td内容
						td.append(curTag);
						curTag.select2();
						//追加当前select
					}
				});
				table.after(cloneTab);
				// 绑定当前克隆表的实际序号,序号规则：上一个表的序号+1。
				cloneTab.find('table').attr('index', index + 1);
				// 处理dwz 组件的初始化问题
				//$('div.tableItem>table', box).initUI();
				_this.run();
				cloneTab.find('select').change();
			});
		},
		showsystemfield : function(){
			var box = this.get();
			var _this = this;
			// 显示系统字段列表
			var obj = $('button.nbm_system_field' , box);
			obj.unbind('click');
			obj.on('click' , function(){
				// 检查当前区域中是否有系统字段列表 
				var systemfieldlist = $('div.nbm_system_field_list' , box);
				if(systemfieldlist.length>0){
					systemfieldlist.toggle();
				}else{
					var orignal = $('div.nbm_system_field_list');
					//var cloneObj = orignal.clone();
					orignal.show();
					//$(this).closest('table').after(cloneObj);
				}
				_this.run();
			});
			
		},
		checkall : function() {
			var box = this.get();
			var _this = this;
			// 添加一行	
			var obj = $('a.nbm_check_all_item', box);
			
			obj.unbind('click');
			obj.on('click', function() {
				var eventObj = $(this);
				var curIndex = $(this).parent().index();
				var p = $(this).closest('table');
				var ckStatus = true;
				console.log(eventObj.attr('cka'));
				if(eventObj.attr('cka') == 'true'){
					ckStatus = false;
				}
				p.find('input:checkbox').each(function(){
					if($(this).closest('td').index()==curIndex){
						$(this).attr('checked',ckStatus);
						eventObj.attr('cka',ckStatus);
					}
				});
				//_this.run();
			});
			
		},
		insertCol : function() {
			var box = this.get();
			var _this = this;
			// 每个表单中的添加一行，数据来源于当前对象所在tr的上一个tr。
			var obj = $('button.nbm_add_col', box);
			obj.unbind('click');
			obj.on('click', function() {
				//var tr = $(this).closest('tr').prev('tr');
				var tr = $(this).closest('table').find('tbody:first>tr:last');
				var index = tr.closest('table').attr('index');
				try {
					index = parseInt(index, 10);
				} catch(e) {
					index = 0;
				}
				
				var cloneTr = tr.clone();
				cloneTr.find('input[type="hidden"]').remove();
				cloneTr.find(':input').each(function() {
					var ids = $(this).attr('name');
					// 当前组件的name值
					if ( typeof (ids) == "string") {
						var curNames = ids.replace(/(\]\[)+(\d)+/g,  function(va) {
								var curIndex = va.match(/\d+/g);
								var i = parseInt(curIndex , 10);
								var tabIds = '][' + (i + 1);
								return tabIds;
							});
						$(this).attr('name',curNames);
					}
					
					if ($(this).attr('type') != "checkbox") {
						$(this).val('');
					}
					if ($(this)[0].tagName == "SELECT") {
						var curTag = $(this);
						curTag.removeAttr("style");
						//curTag.addClass('select2');
						// 加样式
						var td = curTag.closest('td');
						// 获取td
						td.html('');
						//移除现有td内容
						td.append(curTag);
						curTag.select2();
						//追加当前select
					}
				});
				tr.after(cloneTr);
				//$('div.tableItem>table', this.get).initUI();
				_this.run();
				cloneTr.find('select').change();
			});
		},
		setPrimary : function() {
			var box = this.get();
			/* 主表设置	*/
			$('input[type="checkbox"].nbm_primary_table', box).change(function() {
				var isret = $(this).is(':checked');
				if (isret) {
					$('input[type="checkbox"].nbm_primary_table', box).attr('checked', false).attr('disabled', true);
				} else {
					$('input[type="checkbox"].nbm_primary_table', box).attr('disabled', false);
				}
				$(this).attr('checked', isret).attr('disabled', false);
			});
		},

		deleteCol : function() {
			var box = this.get();
			// 删除当前选中行
			var obj = $('a.nbm_del_col', box);
			obj.unbind('click');
			obj.on('click', function() {
				var tbObj = $(this).closest('table');
				if (tbObj.find('tbody:first>tr').length > 1) {
					$(this).closest('tr').remove();
				}
			});
		},

		deleteTable : function() {
			// 删除当前表
			var box = this.get();
			var obj = $('button.nbm_remove_table', box);
			obj.unbind('click');
			obj.on('click', function() {
				var tableObj = $(this).closest('div.tableItem');
				var totalTable = $('div.tableItem', box);
				if (totalTable.length > 1) {
					var isret = confirm('你是否确定需要删除当前表?');
					if (true == isret) {
						tableObj.remove();
					}
				} else {
					alert('当前表不允许删除');
				}
			});
		},
		checkFieldOnly : function() {
			var box = this.get();
			var _this = this;
			// 字段名称唯一检查
			$('input.nbm_fieldnameonly', box).unbind('keyup change blur');
			$('input.nbm_fieldnameonly', box).on('keyup change blur', function(event) {
				/* 检查字段值，空值不检查 */
				// 取得当前输入值
				var curVal = $(this).val().toLowerCase();
				curVal = $.trimAll(curVal);
				$(this).val(curVal);
				curVal = $(this).toPinyin();
				$(this).val(curVal);
				// 系统保留字段
				if ($.inArray(curVal, reserved) > -1) {
					alert('当前字段不能使用系统使用字段，请更换！ ');
					$(this).val('');
					$(this).attr('isautocreate','');
					return
				}
				// 数据库保留字段
				if ($.inArray(curVal, dbsystemfield) > -1) {
					alert('当前字段为数据库保留字段，请更换！ ');
					$(this).val('');
					$(this).attr('isautocreate','');
					return
				}
				
				
				// 取得所有字段名称的值
				var allVal = Array();
				var _this = this;
				$('input.nbm_fieldnameonly', box).not(this).each(function() {
					if (isNullorEmpty($(this).val())) {
						allVal.push($(this).val().toLowerCase());
					}
				});
				if ($.inArray(curVal, allVal) > -1) {
					alert('已存存字段名 ' + curVal + ' 请更换');
					$(this).val('');
					$(this).attr('isautocreate','');
				}
			});
			$('input.nbm_fieldnameonly', box).unbind('createonlycharacter');
			$('input.nbm_fieldnameonly', box).bind('createonlycharacter', function() {
				var isCreateNewCharacter= false;
				// 取得当前输入值
				var curVal = $(this).val().toLowerCase();
				curVal = $.trimAll(curVal);
				$(this).val(curVal);
				
				
				// 取得所有字段名称的值
				var allVal = Array();
				var _this = this;
				$('input.nbm_fieldnameonly', box).not(this).each(function() {
					if (isNullorEmpty($(this).val())) {
						allVal.push($(this).val().toLowerCase());
					}
				});
				// 如果为系统字段 
				if ($.inArray(curVal, reserved) > -1) {
					isCreateNewCharacter = true;
				}
				// 数据库保留字段
				if ($.inArray(curVal, dbsystemfield) > -1) {
					isCreateNewCharacter = true;
				}
				// 已用字段 
				if ($.inArray(curVal, allVal) > -1) {
					isCreateNewCharacter = true;
				}
				if(isCreateNewCharacter == true){
					var newChar = createNewCharacter(this , curVal);
					$(this).val(newChar);
					isCreateNewCharacter = false;
					$(_this).trigger('createonlycharacter');
				}
			});
		},
		selecchange : function() {
			/* 下拉框值改变事件，给文本写值。 */
			var box = this.get();
			$('select.opweight', box).change(function() {
				//获取当前select选中的值
				var val = $(this).val();
				if (val) {
					var weight = $(this).find("option:selected").attr('weight');
					$(this).closest('td').next('td').find('input').val(weight);
				} else {
					$(this).closest('td').next('td').find('input').val('');
				}
			});
			$('select.opcategory' , box).change(function(){
				//获取当前select选中的值
				var val = $(this).val();
				if (val) {
					var weight = $(this).find("option:selected").attr('len');
					$(this).closest('td').next('td').find('input').val(weight);
					
					var p = $(this).closest('tr').find('select.opweight');
					var cate = $(this).find("option:selected").attr('cate');
					//p.val(cate).change();
					var oreritem = p.find('option[value="'+cate+'"]');
					oreritem.attr('selected',true);
					p.change();
					p.prev('a').text(oreritem.text());
					/*if(cate && p){
						p.changeitem(cate);
					}*/
				} else {
					$(this).closest('td').next('td').find('input').val('');
				}
			});
		},
		setpy : function(){
			var box = this.get();
			var _this = this;
			//  keydown change blur
			$('input[name^="fieldtitle"]').off("keyup");
			$('input[name^="fieldtitle"]').on("keyup",function (){
				var ipt = $(this).closest('tr').find('td:first').find('input[type="text"]');
				var curVal = $(this).val().toLowerCase();
				curVal = $.trimAll(curVal);//去除空格
				$(this).val(curVal);
				if(!isNullorEmpty(ipt.val())){
					ipt.attr('isautocreate',true);
					//ipt.val($(this).toPinyin());
					//ipt.change();
					//ipt.trigger('createonlycharacter');
				}
				if(ipt.attr('isautocreate') == 'true'){
					var curPYStr = $(this).toPinyin();
					if(curPYStr.length>maxPYLength){
						curPYStr = curPYStr.substr(0,maxPYLength);
					}
					ipt.val(curPYStr);
					//ipt.change();
					ipt.trigger('createonlycharacter');
				}
			});
		}
	};
	$(function() {
		filedOprate.run();
		reserved=$.parseJSON(reserved);
		dbsystemfield = $.parseJSON(dbsystemfield);
		 
		var box = navTab.getCurrentPanel();
		//$('div.tableItem' , box).find('select').change();
	});
	 function showtablelist(obj){
		var table=$(obj).val();
		var $box=navTab.getCurrentPanel();
		var $type=$(obj).val();
		$box.find("#MisDynamicFormManagelookuptable").loadUrl("__URL__/lookuptable/tableename/"+table,{},function(){
			$box.find("[layoutH]").layoutH();});
	}
	function toggleinput(){
		//$('#filed_add_table1_fieldname_index5').val('我在绑定点击事件');
		//$('#filed_add_table1_fieldname_index5').keyup();
		$('div.tableItem input').each(function(){
			$(this).focus();
		});
		$('.error:first').focus();
		//var box = navTab.getCurrentPanel();
		//box.click();
	}
	
	function changecombox(obj){
		var $box=navTab.getCurrentPanel();
		var comboxval=$(obj).val();
		$.ajax({
			type : "POST",
			dataType:'json',
			url : "__URL__/lookupcdw",
			data : {
				'group_id' : comboxval,
			},
			global : false,
			success : function(response) {
				var nullhtml="<option value=\"\">请选择 </option>";
				if(response != null){
					$.each(response,function(i,v){ 
						var dis = '';
						if(v.nextEnd == 0){
							dis="disabled=\"disabled\"";
						}
						var level = '';
						if(v.level){
							level="class=\"level"+v.level+"\"";
						}
						nullhtml+="<option  value=\""+v.id+"\">"+v.title+" </option>";
					})
				}
				// 先找到组件html结构的顶层
				$box.find("select[name='parentnodename']").html(nullhtml);
				$box.find("select[name='parentnodename']").change();
			}
		});
	}
	function isexittitle(obj){
		var $box=navTab.getCurrentPanel();
		var $title=$(obj).val();
		if($title){
			//ajax请求验证名称是否重复
			$.ajax({
			type : "POST",
			dataType:'json',
			url : "__URL__/lookupexittitle",
			data : {
				'title' : $title,
			},
			global : false,
			success : function(response) {
				if(response){
					$box.find("input[name='acitontitle']").addClass("error");
					$box.find("span.istitle").attr("class","icon istitle  icon-remove tml-c-red");
				}else{
					 $box.find("span.istitle").attr("class","icon istitle icon-ok tml-c-green");
					 $box.find("input[name='acitontitle']").removeClass("error");
				}
			}
			});
		}
	}
</script>
<link href="__PUBLIC__/Css/tmlstyle/model.css" rel="stylesheet"	type="text/css" media="screen" />
<div class="page">
	<div class="pageContent" layoutH="40">
		<div class="tml_nqq_page">
			<form method="post" action="__URL__/add/type/1" class="pageForm"
				method="post"
				onsubmit="return iframeCallback(this,DynamicnavTabDone);">
				<div class="new_list_title">
					<span style="display: inline-block; width: 310px;"> <input
						type="text" name="acitontitle" onblur="isexittitle(this)"
						class="depict_use_name required textInput"
						placeholder="请输入表单名称，例：采购申请单"> <span class="istitle"
						class="tml-form-text"></span>
					</span>
				</div>
				<!-- div.tableItem 这个是每个表的容器，必须存在 -->
				<div class="tml-row depict_warp">
					<div class="tml-form-col">
						<label>所属组：</label> 
						<select name="group_name" onchange="changecombox(this);" class="select2 required original_width_select2">
							<option value="">请选择</option> <?php echo getDataBaseByHtml('group');?>
						</select>
					</div>
					<div class="tml-form-col">
						<label>所属面板：</label> 
						<select name="parentnodename" class="select2 required original_width_select2">
						</select>
					</div>
					<div class="tml-form-col">
						<label for="isOrNot">是否显示：</label> <input
							style="margin-top: 10px;" id="isOrNot" type="checkbox"
							name="showmenu" value="1" checked="checked">
					</div>
					
					
					<div class="tml-form-col">
						<label for="isrecord">仅记录：</label> <input
							style="margin-top: 10px;" id="isrecord" type="checkbox"
							name="isrecord" value="1">
					</div>
					<div class="tml-form-col">
						<label for="isreminds">单据提示：</label> <input
							style="margin-top: 10px;" id="isreminds" type="checkbox"
							name="isreminds" value="1">
					</div>
					
					
					<div class="form_trr_element" style="display: none;">
						<select name="modeltype">
							<option value="add">创建新节点</option>
							<option value="update">更新以有节点</option>
						</select> 写入节点：<input class="enterIndex" checked="checked" type="checkbox"
							value="1" name="insertnode"> <select
							name="parentnodename2" class="select2"></select>
					</div>
				</div>
				<div class="tml-row depict_warp">
					<!--  模板生成方案	-->
<?php if($tplkey): ?><script>
/**
 * 默认获取当前可用下拉框 
 */
function setSelDatasouce(){
	var defaultField='';
	<?php if(is_array($anameList['datebase'])): $k = 0; $__LIST__ = $anameList['datebase'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$anamevochild): $mod = ($k % 2 );++$k; if($anamevochild["isprimay"] == 1): if(is_array($anamevochild["list"])): $i = 0; $__LIST__ = $anamevochild["list"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; if($item["isdatasouce"] == 1): ?>defaultField= '<?php echo ($item["filed"]); ?>';<?php endif; endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; ?>
 	
	var box = navTab.getCurrentPanel();
	var datasoueArr=new Array();
	// 查找页面上的可用select
	var p = $('div.tableItem input.nbm_primary_table:checked' , box).closest('div.tableItem');
	p.find('select.opweight option:selected').each(function(){
		if($(this).val()=='select'){
			var trobj = $(this).closest('tr');
			var datasoue=new Object();
			datasoue.filed = trobj.find('td input[type="text"][name^="fieldname"]').val();
			datasoue.title = trobj.find('td input[type="text"][name^="fieldtitle"]').val();
			datasoueArr.push(datasoue);
		}
	});
	var str = '<option value="">请选择</option>';
	if(datasoueArr.length){
		$.each(datasoueArr , function(i ,v){
			if(v.filed=="<?php echo ($datasoure); ?>"){
				$selected="selected='selected'";
			}else{
				$selected="";
			}
			str += '<option  '+$selected+'  value="'+v.filed+'">'+v.title+'</option>';
		});
	}

	$('select.tree_datasouce' , box).change(function(){
		var curSelectVal = $(this).val();
		// 取得当前用户选择的下拉框组件key值。
		// 检索组件配置文件的当前值下的数据源配置情况。
		if(curSelectVal){
			var nodename = '<?php echo ($vo["actionname"]); ?>';
			/*$.ajax({
				url:TP_APP+'/MisDynamicFormManage/getControllDataSouce',
				dataType:'json',
				data:{'filed':curSelectVal,'nodename':nodename},
				success:function(data){
					data = DWZ.jsonEval(data);
					var fileddata = DWZ.jsonEval(data.data);
					//DWZ.ajaxDone(data);
					if(data.statusCode == DWZ.statusCode.ok){
						//alertMsg.info(data.data);
						// 设置字段 配置项的值
						var htmls='';
						$.each(fileddata , function(k,v){
							htmls += '<option value="'+v.key+'">'+v.val+'</option>';
						});
						$('select.tree_datasouce_value').html(htmls);
						$('select.tree_datasouce_text').html(htmls);
						initChosen();
					}else{
						alertMsg.error(data.message);
					}
				}
			});*/
		}
		
		// 先将现有的禁用属性清空
		p.find('table').find('input').attr('readonly',false);
		p.find('table').find('a').show();
		p.find('table').find('input[type="checkbox"]').show();
		p.find('table tr').removeAttr('style');
		p.find('select').each(function(){
			$(this).attr('readonly',false);
		});
		
		// 将选中数据源的那一行禁用掉。 
		var curObj = p.find(':input[name^="fieldname"][value="'+curSelectVal+'"]').closest('tr');
		curObj.find('input').attr('readonly',true);
		curObj.find('input[type="checkbox"]').hide();
		curObj.attr('title','当前行被选中为首页左侧树形菜单的数据来源，请慎重操作，数据来源只能为下拉框组件');
		curObj.css({'background':'#ffc'});
		// 将下拉框设为只读 
		curObj.find('select').each(function(){
			$(this).attr('readonly',true);
		});
		curObj.find('a:last').hide();
	});
	$('select.tree_datasouce' , box).html(str);
	if(isNullorEmpty(defaultField)){
		$('select.tree_datasouce' , box).val(defaultField);
		$('select.tree_datasouce' , box).change();
	}
	//initChosen();
}

$(function(){
	setSelDatasouce();
	$('select.tree_datasouce' , box).change();
	// 修改时进来就触发一次单选点击
	var curSelectedVal = '<?php echo ($vo[tpl][0]); ?>';
	if(curSelectedVal){
		var box=navTab.getCurrentPanel();
		$('div.tpltypelist',box).find('input[type="radio"][value="'+curSelectedVal+'"]').click();
	}
});
function editbindval(obj){
	var $box=navTab.getCurrentPanel();
	var datasoureItem = $('div.datasoure:last', $box);
	datasoureItem.find('select').select2("destroy");
	var cloneTab = datasoureItem.clone();
	cloneTab.find('a.icon-plus').attr("class","icon-remove");
	cloneTab.find('a.icon-remove').attr("onclick","removeeditbindval(this)");
	cloneTab.find(".select2").select2();
	datasoureItem.after(cloneTab);
	datasoureItem.find(".select2").select2();
}
function removeeditbindval(obj){
	var $box=navTab.getCurrentPanel();
	$(obj).parent("div.datasoure").remove();
}

</script>
<div class="tml-row depict_warp">
	<div class="tml-form-row tpltypelist">
		<label>模板生成方式：</label>
	    <?php $tpldata = $tpltypeArr[$tplkey][0]['item']; ?>
	<!-- 模板生成类型   -->
		<?php if(is_array($tpldata)): $i = 0; $__LIST__ = $tpldata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; echo createTags($item,false,$vo[tpl][0]); endforeach; endif; else: echo "" ;endif; ?>
	</div>
	<div class="tml-row">
		<div class="tml-form-col">
			<label>树或菜单配置：</label>
			<select name="datasouce" class="select2 tree_datasouce original_width_select2"><option>字段</option></select>
		</div>
		
		<!-- <div class="tml-form-col">
			<label>值字段：</label>
			<select name="datasouce_text" class="select2 tree_datasouce_text"><option value="">请选择</option></select>
		</div>
		<div class="tml-form-col">
			<label>显示字段：</label>
			<select name="datasouce_value" class="select2 tree_datasouce_value"><option value="">请选择</option></select>
		</div> -->
	</div>
	<?php if($tplkey == 'zuhetpl'): ?><input type="hidden" name="bindaname" value="<?php echo ($bindaname); ?>" />
	<?php if(is_array($misAutoBindVoList)): $j = 0; $__LIST__ = $misAutoBindVoList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$misAutoBindVo): $mod = ($j % 2 );++$j;?><div class="tml-form-row datasoure">
		 <label>选择绑定数据源：</label>
		 <input type="hidden" name="bindresult" value="<?php echo ($bindresult); ?>"/>
		  <input type="hidden" name="bindvoid" value="<?php echo ($misAutoBindVo["id"]); ?>" />
			<select name="bindval[]" class="select2 original_width_select2">
			 <?php if(is_array($datasoucelist['list'])): $i = 0; $__LIST__ = $datasoucelist['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$datasouceVo): $mod = ($i % 2 );++$i;?><option <?php if($misAutoBindVo['bindval'] == $key): ?>selected="selected"<?php endif; ?> value="<?php echo ($key); ?>"><?php echo ($datasouceVo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			 <option value="all" <?php if($misAutoBindVo['bindval'] == all): ?>selected="selected"<?php endif; ?>>公共类型</option>
			</select>
			<?php if($j==1): ?><a class="icon-plus" onclick="editbindval(this)"></a>					
			<?php else: ?>
				<a class="icon-remove" onclick="removeeditbindval(this)"></a><?php endif; ?>		
		</div><?php endforeach; endif; else: echo "" ;endif; endif; ?>
</div>
<div class="tml-row depict_warp">
    <div class="sel_mod_lay">
    <label class="mod_header_title">生成模板结构如下：</label>
    <div class="tpl_preview">
    	<!--  列出所有当前可用的模板生成方式 -->
    	<?php
 $caurchoiseitem = $vo['tpl'][1]; ?>
    	<?php if(is_array($tpldata)): $i = 0; $__LIST__ = $tpldata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tplitem): $mod = ($i % 2 );++$i; if(is_array($tplitem['tpl'])): $i = 0; $__LIST__ = $tplitem['tpl'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><!--  布局方式  -->
     		<div class="preview_item item_<?php echo ($tplitem['value']); ?>">
     		<?php echo ($item['title']); ?>
     		<?php if($caurchoiseitem == $item["value"] ): ?><input type="radio" name="nbm_tpl" value="<?php echo ($item['value']); ?>" checked="checked"/>
     		<?php else: ?>
     			<input type="radio" name="nbm_tpl" value="<?php echo ($item['value']); ?>" /><?php endif; ?>
     		<?php echo ($item['content']); ?>
     		</div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
    </div>
    </div>
   </div>
<?php else: ?>
<div class="tml-form-row">
	<label title="模板生成方式">模板生成方式：</label>
	<?php if(is_array($tpltypeArr)): $i = 0; $__LIST__ = $tpltypeArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; echo createTags($item[0]); endforeach; endif; else: echo "" ;endif; ?>
</div><?php endif; ?>
				</div>
				<div class="tml-row depict_warp">
					<div class="tml-form-col">
						<label> 选择主表：</label> 
						<select name="primarytable" onchange="showtablelist(this)" class="select2 original_width_select2">
							<option value="">--请选择--</option>
							<?php if(is_array($MisDynamicDatabaseMasList)): $i = 0; $__LIST__ = $MisDynamicDatabaseMasList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$MisDynamicDatabaseMasVo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($key); ?>"><?php echo ($MisDynamicDatabaseMasVo); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
						</select>
					</div>
				</div>
				<div id="MisDynamicFormManagelookuptable">
					 <script>
 $(function() {
		filedOprate.run();
		var box = navTab.getCurrentPanel().find('form');
		
		$('div.tableItem' , box).find('select').change();
		$('input.nbm_copy_primary_table' , box).click().attr('disabled',true);
	});
 </script>
 <?php if($fieldVo): ?><div class="tableItem nbm_copy_primary_table"  ischoise="1">
	<div class="list_header">
		<span>表名：</span>
		<input class="" type="text" name="tablename[]" value="<?php echo (getfieldby($fieldVo[0]['masid'],'id','tabletitle','mis_dynamic_database_mas')); ?>"  readonly="readonly" placeholder="请输入表名" />
		<input type="hidden" name="ischoise[0]" value="1"/>
		<input type="hidden" name="parimarytablename" value="<?php echo (getfieldby($fieldVo[0]['masid'],'id','tablename','mis_dynamic_database_mas')); ?>"/>
		<input type="hidden" name="isprimary" value="<?php echo (getfieldby($fieldVo[0]['masid'],'id','isprimary','mis_dynamic_database_mas')); ?>"/>
		<span class="right">
		    <input type="hidden" value="1" name="tableprimary[0]">
			<input  class="mr10 nbm_primary_table nbm_copy_primary_table" value="1"  type="checkbox"  />
			<span>是否设置为主表</span>
		  </span>
	</div>
	<table class="new_table" index="0">
		<tr>
			<th width="10%">字段名称（英文）</th>
			<th width="10%">字段标题（中文）</th>
			<th width="10%">备注</th>
			<th width="10%">字段类型</th>
			<th width="10%">字段长度</th>
			<th width="10%">组件类型</th>
			<th width="10%">权重</th>
			<!-- <th width="10%">是否唯一</th> -->
			<th width="10%">是否显示</th>
			<th>操作</th>
		</tr>
		 <?php if(is_array($fieldVo)): $k = 0; $__LIST__ = $fieldVo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$anamevochild): $mod = ($k % 2 );++$k;?><tr >
			<td>
			<input name="fieldname[0][]" readonly="readonly" value="<?php echo ($anamevochild['field']); ?>" placeholder="请输入英文名称" type="text" class="readonly  nbm_fieldnameonly" />
			<input  name="oldchoiseid[0][]" value="<?php echo ($anamevochild['id']); ?>"  type="hidden" /> 
			<input  name="oldfieldname[0][]" value="<?php echo ($anamevochild['filed']); ?>" class="nbm_oldfieldnameonly" type="hidden" /> 
			</td>
			<td>
			<input name="fieldtitle[0][]"   readonly="readonly" value="<?php echo ($anamevochild['title']); ?>" placeholder="请输入中文标题" type="text" class="" />
			<input  name="oldfieldtitle[0][]" value="<?php echo ($anamevochild['title']); ?>" type="hidden" /> 
			</td>
			<td>
			<input name="fielddesc[0][]"   readonly="readonly" value="<?php echo ($anamevochild['desc']); ?>" placeholder="请输入中文标题" type="text" class="" />
			<input  name="oldfielddesc[0][]" value="<?php echo ($anamevochild['desc']); ?>" type="hidden" /> 
			</td>						
			<td>
			<select  class="select2"  disabled="disabled">
				 <?php if(is_array($fieldtypeList)): $i = 0; $__LIST__ = $fieldtypeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fieldtypeVo): $mod = ($i % 2 );++$i;?><option <?php if($fieldtypeVo["key"] == $anamevochild["type"] ): ?>selected="selected"<?php endif; ?> value="<?php echo ($fieldtypeVo["key"]); ?>"><?php echo ($fieldtypeVo["val"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select></td>
				<input  name="fieldtype[0][]" value="<?php echo ($anamevochild['type']); ?>" type="hidden" /> 
				<input  name="oldfieldtype[0][]" value="<?php echo ($anamevochild['type']); ?>" type="hidden" /> 
			<td>
			<input name="fieldlength[0][]" placeholder="请输入字段长度"   readonly="readonly" value="<?php echo ($anamevochild['length']); ?>" type="text" value="10" />
			<input  name="oldfieldlength[0][]" value="<?php echo ($anamevochild['length']); ?>" type="hidden" /> 
			</td>
			<td>
			<select   class="select2  opweight " disabled="disabled">
				<?php if(is_array($comboxOptionList)): $i = 0; $__LIST__ = $comboxOptionList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comboxOptionVo): $mod = ($i % 2 );++$i;?><option <?php if($comboxOptionVo["name"] == $anamevochild["category"] ): ?>selected="selected"<?php endif; ?>  weight="<?php echo ($comboxOptionVo["weight"]); ?>" value ="<?php echo ($comboxOptionVo["name"]); ?>"><?php echo ($comboxOptionVo["title"]); ?> </option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
			<input name="fieldcategory[0][]"    value="<?php echo ($anamevochild['category']); ?>" type="hidden"  />
			<input  name="oldfieldcategory[0][]" value="<?php echo ($anamevochild['category']); ?>" type="hidden" /> 
			</td>
			<td>
			<input name="fieldweight[0][]" value="<?php echo ($anamevochild["weight"]); ?>" placeholder="请输入权重" type="text" class=" disabled"/>
			<input  name="oldfieldweight[0][]" value="<?php echo ($anamevochild['weight']); ?>" type="hidden" /> 
			</td>
			<!-- <td>
			 <input name="fieldunique[0][]" value="1" type="checkbox"  style="display: none"/>
			<input  name="oldfieldfieldunique[0][]"<?php if($anamevochild["fieldunique"] ): ?>value="1"<?php endif; ?> type="hidden" /> 
			</td> -->
			<td>
			<input name="fieldshow[0][]" value="1" type="checkbox"  checked="checked" />
			<input  name="oldfieldshow[0][]"<?php if($tempList[$tempids][$anamevochild['filed']]): ?>value="1"<?php endif; ?> type="hidden" /> 
			</td>
			<td>
			<span><a target="navTab" style="color:red;" title="修改" href="__URL__/edit/type/1/aname/<?php echo (getfieldby($anamevochild['formid'],'id','actionname','mis_dynamic_form_manage')); ?>/formid/<?php echo ($anamevochild['formid']); ?>">【<?php echo (getfieldby($anamevochild['formid'],'id','actiontitle','mis_dynamic_form_manage')); ?>】</a></span></span>
			</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
	</div><?php endif; ?>
				</div>
				<!-- 系统字段 -->
				<div class="tml-row depict_warp">
    <?php $indexView=0;;?>
    <ul class="system_word_ul">
        <?php if(is_array($systemUserFieldInfo)): $i = 0; $__LIST__ = $systemUserFieldInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; if($item["canuse"] == 1): ?><li>
                    <?php if($propertyfieldlist): ?><input type="checkbox" <?php if( in_array($key, $propertyfieldlist)): ?>checked="checked"<?php endif; ?> value="1" name="system[fieldshow][<?php echo ($indexView); ?>]" class="nbm_ckb nbm_ckb_<?php echo ($key); ?>"  data-order="nbm_ckb_<?php echo ($key); ?>"/>
                        <?php else: ?>
                        <input type="checkbox" <?php if($key == 'orderno'): ?>checked="checked"<?php endif; ?> value="1" name="system[fieldshow][<?php echo ($indexView); ?>]" class="nbm_ckb nbm_ckb_<?php echo ($key); ?>"  data-order="nbm_ckb_<?php echo ($key); ?>"/><?php endif; ?>
                    <input type="text" class="" value="<?php echo ($key); ?>"  readonly="readonly" placeholder="请输入英文名称"  name="system[fieldname][<?php echo ($indexView); ?>]">

                    <input type="text" class="" <?php if($propertyFieldTitle[$key]): ?>value="<?php echo ($propertyFieldTitle[$key]); ?>" <?php else: ?> value="<?php echo ($item["title"]); ?>"<?php endif; ?>
                    readonly="readonly" placeholder="请输入中文标题" name="system[fieldtitle][<?php echo ($indexView); ?>]">

                    <input type="text" name="system[fieldtype][<?php echo ($indexView); ?>]" value="<?php echo ($item["type"]); ?>" readonly="readonly" />
                    <input type="text" class="" readonly="readonly" value="1" placeholder="请输入权重"
                    name="system[fieldweight][<?php echo ($indexView); ?>]" />
                     <select class="" name="system[fieldcategory][<?php echo ($index); ?>]" style="display:none;">
                        <option value="text" weight="1" selected="selected">短文本框 </option>
                    </select>
                </li>
                <?php $indexView++;; endif; endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>
<div class="tml-row depict_warp nbm_system_field_list" style="display: none;">
<table class="new_table">
    <colgroup>
        <col width="20%">
        </col>
        <col width="20%">
        </col>
        <col width="10%">
        </col>
        <col width="10%">
        </col>
        <col width="10%">
        </col>
        <col width="10%">
        </col>
        <col width="10%">
        </col>
    </colgroup>
    <tbody>
        <?php $index=0;;?>
        <?php if(is_array($systemUserFieldInfo)): $i = 0; $__LIST__ = $systemUserFieldInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; if($item["canuse"] == 1): ?><tr>
                    <td>
                    <input type="text" class="" value="<?php echo ($key); ?>"
                    readonly="readonly" placeholder="请输入英文名称"  name="system[fieldname][<?php echo ($index); ?>]">
                    </td>
                    <td>
                    <input type="text" class="" <?php if($propertyFieldTitle[$key]): ?>value="<?php echo ($propertyFieldTitle[$key]); ?>" <?php else: ?> value="<?php echo ($item["title"]); ?>"<?php endif; ?>
                    readonly="readonly" placeholder="请输入中文标题" name="system[fieldtitle][<?php echo ($index); ?>]">
                    </td>
                    <td>
                    <input type="text" name="system[fieldtype][<?php echo ($index); ?>]" value="<?php echo ($item["type"]); ?>" readonly="readonly" />
                    <td>
                    <input type="text" class="" readonly="readonly"
                    value="<?php echo ($item["length"]); ?>" placeholder="请输入字段长度"
                    name="system[fieldlength][<?php echo ($index); ?>]">
                    </td>
                    <td>
                    <select class="select2 opweight  enterIndex" name="system[fieldcategory][<?php echo ($index); ?>]">
                        <option value="text" weight="1" selected="selected">短文本框 </option>
                    </select></td>
                    <td>
                    <input type="text" class="" readonly="readonly" value="1" placeholder="请输入权重"
                    name="systemfieldweight[<?php echo ($index); ?>]" />
                    </td>
                    <td>
                    <?php if($propertyfieldlist): ?><input type="checkbox" <?php if( in_array($key, $propertyfieldlist)): ?>checked="checked"<?php endif; ?> value="1" name="system[fieldshow][<?php echo ($index); ?>]"  class="nbm_ckb nbm_ckb_<?php echo ($key); ?>"  data-order="nbm_ckb_<?php echo ($key); ?>"/>
                        <?php else: ?>
                        <input type="checkbox" <?php if($key == 'orderno'): ?>checked="checked"<?php endif; ?> value="1" name="system[fieldshow][<?php echo ($index); ?>]" class="nbm_ckb nbm_ckb_<?php echo ($key); ?>"  data-order="nbm_ckb_<?php echo ($key); ?>"/><?php endif; ?></td>
                </tr>
                 <?php $index++;;?>
                <?php else: ?>
                <tr>
                    <td><?php echo ($key); ?></td>
                    <td><?php echo ($item["title"]); ?></td>
                    <td><?php echo ($item["type"]); ?></td>
                    <td><?php echo ($item["length"]); ?></td>
                    <td>组件类型</td>
                    <td>权重</td>
                    <td>不显示</td>
                </tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>

    </tbody>
</table>
</div>
<script type="text/javascript" charset="utf-8">
	//系统字段组件化-优化操作
	$(function() {
		$('input.nbm_ckb').click(function() {
			var ckd = $(this).attr('checked');
			ckd = ckd == 'true' || ckd == 'checked' ? true : false;
			var order = $(this).data('order');
			$('.' + order).not(this).attr('checked', ckd);
			$(this).logs(order + '__' + ckd);
		});
	});

</script>


				<div class="tableItem">
					<div class="list_header">
						<span>表名：</span> <input style="font-family: 'microsoft yahei'"
							type="text" name="tablename[1]" placeholder="请输入表名"
							class="required " /> <span class="right"
							style="padding-right: 20px;"> 
							<input
							class="mr10 nbm_primary_table" value="1" type="checkbox"
							checked="checked" name="tableprimary[1]" /> <span>是否设置为主表</span>
						</span>
					</div>
					<table class="new_table" index="1">
						<colgroup>
							<col width="10%"></col>
							<col width="10%"></col>
							<col width="10%"></col>
							<col width="10%"></col>
							<col width="10%"></col>
							<col width="10%"></col>
							<col width="10%"></col>
							<col width="10%"></col>
						</colgroup>
						<thead>
							<tr>
								<th>字段名称(英文)</th>
								<th>字段标题(中文)</th>
								<th>备注</th>
								<th>字段类型</th>
								<th>字段长度</th>
								<th>组件类型</th>
								<th>权重</th>
								<th><a href="javascript:void(0);"
									class="nbm_check_all_item">是否唯一</a></th>
								<th><a href="javascript:void(0);"
									class="nbm_check_all_item">是否显示</a></th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<input name="fieldname[1][1]" placeholder="请输入英文名称" autocomplete="off"
									type="text" id="filed_add_table1_fieldname_index1" class="lettersonly required  nbm_fieldnameonly"
									/>
								</td>
								<td>
									<input name="fieldtitle[1][1]" placeholder="请输入中文标题" autocomplete="off"
									id="filed_add_table1_fieldtitle_index1" type="text" class="required" />
								</td>
								<td>
									<input name="fielddesc[1][1]" autocomplete="off" placeholder="请输入备注" type="text"
									class="" />
								</td>
								<td>
									<select name="fieldtype[1][1]" class="select2 opcategory">
										<?php if(is_array($fieldtypeList)): $i = 0; $__LIST__ = $fieldtypeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fieldtypeVo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($fieldtypeVo["key"]); ?>" len="<?php echo ($fieldtypeVo["len"]); ?>" cate="<?php echo ($fieldtypeVo["cate"]); ?>">
												<?php echo ($fieldtypeVo["val"]); ?>
											</option><?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
								</td>
								<td>
									<input name="fieldlength[1][1]" placeholder="请输入字段长度" autocomplete="off"
									type="text" id="filed_add_table1_fieldlength_index1" value="10" class="required "
									/>
								</td>
								<td>
									<select name="fieldcategory[1][1]" class="select2 opweight ">
										<?php if(is_array($comboxOptionList)): $i = 0; $__LIST__ = $comboxOptionList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comboxOptionVo): $mod = ($i % 2 );++$i;?><option weight="<?php echo ($comboxOptionVo["weight"]); ?>" value="<?php echo ($comboxOptionVo["name"]); ?>">
												<?php echo ($comboxOptionVo["title"]); ?>
											</option><?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
								</td>
								<td>
									<input name="fieldweight[1][1]" placeholder="请输入权重" autocomplete="off"
									value="1" type="text" id="filed_add_table1_fieldweight_index1" class="number required "
									/>
								</td>
								<td>
									<input name="fieldunique[1][1]" value="1" type="checkbox" />
								</td>
								<td>
									<input name="fieldshow[1][1]" value="1" type="checkbox" checked />
								</td>
								<td>
									<a class="nbm_del_col" href="javascript:void(0);">
										移除行
									</a>
								</td>
							</tr>
							<tr>
								<td>
									<input name="fieldname[1][2]" placeholder="请输入英文名称" autocomplete="off"
									type="text" id="filed_add_table1_fieldname_index1" class="lettersonly required  nbm_fieldnameonly"
									/>
								</td>
								<td>
									<input name="fieldtitle[1][2]" placeholder="请输入中文标题" autocomplete="off"
									id="filed_add_table1_fieldtitle_index1" type="text" class="required" />
								</td>
								<td>
									<input name="fielddesc[1][2]" autocomplete="off" placeholder="请输入备注" type="text"
									class="" />
								</td>
								<td>
									<select name="fieldtype[1][2]" class="select2 opcategory">
										<?php if(is_array($fieldtypeList)): $i = 0; $__LIST__ = $fieldtypeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fieldtypeVo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($fieldtypeVo["key"]); ?>" len="<?php echo ($fieldtypeVo["len"]); ?>" cate="<?php echo ($fieldtypeVo["cate"]); ?>">
												<?php echo ($fieldtypeVo["val"]); ?>
											</option><?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
								</td>
								<td>
									<input name="fieldlength[1][2]" placeholder="请输入字段长度" autocomplete="off"
									type="text" id="filed_add_table1_fieldlength_index1" value="10" class="required "
									/>
								</td>
								<td>
									<select name="fieldcategory[1][2]" class="select2 opweight ">
										<?php if(is_array($comboxOptionList)): $i = 0; $__LIST__ = $comboxOptionList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comboxOptionVo): $mod = ($i % 2 );++$i;?><option weight="<?php echo ($comboxOptionVo["weight"]); ?>" value="<?php echo ($comboxOptionVo["name"]); ?>">
												<?php echo ($comboxOptionVo["title"]); ?>
											</option><?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
								</td>
								<td>
									<input name="fieldweight[1][2]" placeholder="请输入权重" autocomplete="off"
									value="1" type="text" id="filed_add_table1_fieldweight_index1" class="number required "
									/>
								</td>
								<td>
									<input name="fieldunique[1][2]" value="1" type="checkbox" />
								</td>
								<td>
									<input name="fieldshow[1][2]" value="1" type="checkbox" checked />
								</td>
								<td>
									<a class="nbm_del_col" href="javascript:void(0);">
										移除行
									</a>
								</td>
							</tr>
							<tr>
								<td>
									<input name="fieldname[1][3]" placeholder="请输入英文名称" autocomplete="off"
									type="text" id="filed_add_table1_fieldname_index1" class="lettersonly required  nbm_fieldnameonly"
									/>
								</td>
								<td>
									<input name="fieldtitle[1][3]" placeholder="请输入中文标题" autocomplete="off"
									id="filed_add_table1_fieldtitle_index1" type="text" class="required" />
								</td>
								<td>
									<input name="fielddesc[1][3]" autocomplete="off" placeholder="请输入备注" type="text"
									class="" />
								</td>
								<td>
									<select name="fieldtype[1][3]" class="select2 opcategory">
										<?php if(is_array($fieldtypeList)): $i = 0; $__LIST__ = $fieldtypeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fieldtypeVo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($fieldtypeVo["key"]); ?>" len="<?php echo ($fieldtypeVo["len"]); ?>" cate="<?php echo ($fieldtypeVo["cate"]); ?>">
												<?php echo ($fieldtypeVo["val"]); ?>
											</option><?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
								</td>
								<td>
									<input name="fieldlength[1][3]" placeholder="请输入字段长度" autocomplete="off"
									type="text" id="filed_add_table1_fieldlength_index1" value="10" class="required "
									/>
								</td>
								<td>
									<select name="fieldcategory[1][3]" class="select2 opweight ">
										<?php if(is_array($comboxOptionList)): $i = 0; $__LIST__ = $comboxOptionList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comboxOptionVo): $mod = ($i % 2 );++$i;?><option weight="<?php echo ($comboxOptionVo["weight"]); ?>" value="<?php echo ($comboxOptionVo["name"]); ?>">
												<?php echo ($comboxOptionVo["title"]); ?>
											</option><?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
								</td>
								<td>
									<input name="fieldweight[1][3]" placeholder="请输入权重" autocomplete="off"
									value="1" type="text" id="filed_add_table1_fieldweight_index1" class="number required "
									/>
								</td>
								<td>
									<input name="fieldunique[1][3]" value="1" type="checkbox" />
								</td>
								<td>
									<input name="fieldshow[1][3]" value="1" type="checkbox" checked />
								</td>
								<td>
									<a class="nbm_del_col" href="javascript:void(0);">
										移除行
									</a>
								</td>
							</tr>
							<tr>
								<td>
									<input name="fieldname[1][4]" placeholder="请输入英文名称" autocomplete="off"
									type="text" id="filed_add_table1_fieldname_index1" class="lettersonly required  nbm_fieldnameonly"
									/>
								</td>
								<td>
									<input name="fieldtitle[1][4]" placeholder="请输入中文标题" autocomplete="off"
									id="filed_add_table1_fieldtitle_index1" type="text" class="required" />
								</td>
								<td>
									<input name="fielddesc[1][4]" autocomplete="off" placeholder="请输入备注" type="text"
									class="" />
								</td>
								<td>
									<select name="fieldtype[1][4]" class="select2 opcategory">
										<?php if(is_array($fieldtypeList)): $i = 0; $__LIST__ = $fieldtypeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fieldtypeVo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($fieldtypeVo["key"]); ?>" len="<?php echo ($fieldtypeVo["len"]); ?>" cate="<?php echo ($fieldtypeVo["cate"]); ?>">
												<?php echo ($fieldtypeVo["val"]); ?>
											</option><?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
								</td>
								<td>
									<input name="fieldlength[1][4]" placeholder="请输入字段长度" autocomplete="off"
									type="text" id="filed_add_table1_fieldlength_index1" value="10" class="required "
									/>
								</td>
								<td>
									<select name="fieldcategory[1][4]" class="select2 opweight ">
										<?php if(is_array($comboxOptionList)): $i = 0; $__LIST__ = $comboxOptionList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comboxOptionVo): $mod = ($i % 2 );++$i;?><option weight="<?php echo ($comboxOptionVo["weight"]); ?>" value="<?php echo ($comboxOptionVo["name"]); ?>">
												<?php echo ($comboxOptionVo["title"]); ?>
											</option><?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
								</td>
								<td>
									<input name="fieldweight[1][4]" placeholder="请输入权重" autocomplete="off"
									value="1" type="text" id="filed_add_table1_fieldweight_index1" class="number required "
									/>
								</td>
								<td>
									<input name="fieldunique[1][4]" value="1" type="checkbox" />
								</td>
								<td>
									<input name="fieldshow[1][4]" value="1" type="checkbox" checked />
								</td>
								<td>
									<a class="nbm_del_col" href="javascript:void(0);">
										移除行
									</a>
								</td>
							</tr>
							<tr>
								<td>
									<input name="fieldname[1][5]" placeholder="请输入英文名称" autocomplete="off"
									type="text" id="filed_add_table1_fieldname_index1" class="lettersonly required  nbm_fieldnameonly"
									/>
								</td>
								<td>
									<input name="fieldtitle[1][5]" placeholder="请输入中文标题" autocomplete="off"
									id="filed_add_table1_fieldtitle_index1" type="text" class="required" />
								</td>
								<td>
									<input name="fielddesc[1][5]" autocomplete="off" placeholder="请输入备注" type="text"
									class="" />
								</td>
								<td>
									<select name="fieldtype[1][5]" class="select2 opcategory">
										<?php if(is_array($fieldtypeList)): $i = 0; $__LIST__ = $fieldtypeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fieldtypeVo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($fieldtypeVo["key"]); ?>" len="<?php echo ($fieldtypeVo["len"]); ?>" cate="<?php echo ($fieldtypeVo["cate"]); ?>">
												<?php echo ($fieldtypeVo["val"]); ?>
											</option><?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
								</td>
								<td>
									<input name="fieldlength[1][5]" placeholder="请输入字段长度" autocomplete="off"
									type="text" id="filed_add_table1_fieldlength_index1" value="10" class="required "
									/>
								</td>
								<td>
									<select name="fieldcategory[1][5]" class="select2 opweight ">
										<?php if(is_array($comboxOptionList)): $i = 0; $__LIST__ = $comboxOptionList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comboxOptionVo): $mod = ($i % 2 );++$i;?><option weight="<?php echo ($comboxOptionVo["weight"]); ?>" value="<?php echo ($comboxOptionVo["name"]); ?>">
												<?php echo ($comboxOptionVo["title"]); ?>
											</option><?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
								</td>
								<td>
									<input name="fieldweight[1][5]" placeholder="请输入权重" autocomplete="off"
									value="1" type="text" id="filed_add_table1_fieldweight_index1" class="number required "
									/>
								</td>
								<td>
									<input name="fieldunique[1][5]" value="1" type="checkbox" />
								</td>
								<td>
									<input name="fieldshow[1][5]" value="1" type="checkbox" checked />
								</td>
								<td>
									<a class="nbm_del_col" href="javascript:void(0);">
										移除行
									</a>
								</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="10" style="text-align: right;">
									<button type="button" class="new_col_btn nbm_system_field">
										查看系统默认生成字段</button>

									<button type="button" class="new_col_btn nbm_add_col">
										新建一行</button>
									<button type="button"
										class="new_col_btn color_red nbm_remove_table">移除表</button>
								</td>
							</tr>
						</tfoot>
					</table>
				</div>

				<div class="btn_group">
					<button type="button"
						class="tml_formBar_btn tml_formBar_btn_blue nbm_add_new_table">
						新建表</button>
				</div>
				<div class="formBar"
					style="border-top: 1px solid #d8d8d8; padding-top: 15px">
					<ul>
						<!-- 
                        <li>
                            <input type="checkbox" name="isaudit" value="1"   id="nbm_isaudit" />
                            <label for="nbm_isaudit">是否审批</label>
                        </li>
                         -->
						<li>
							<button onclick="toggleinput()" type="submit"
								class="tml_formBar_btn tml_formBar_btn_blue">保存所有表</button>
						</li>
						<!--<?php if($_SESSION["a"] == 1 or $_SESSION["misdynamicformmanage_insert"] ): ?>-->
						<!--<li><button class="tml-btn tml-btn-primary" type="submit"><?php if($step == 1): echo (L("nextstep")); else: echo (L("save")); endif; ?></button></li>-->
						<!--<?php endif; ?>-->
						<!--<li><button type="button" class="close tml-btn tml-btn-default"><?php echo (L("close")); ?></button></li>-->
					</ul>
				</div>
			</form>
		</div>
	</div>
</div>