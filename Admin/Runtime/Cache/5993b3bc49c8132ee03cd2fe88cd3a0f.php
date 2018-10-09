<?php if (!defined('THINK_PATH')) exit();?><script>
$(document).ready(function(){
	var zNodes = <?php echo ($typeTree); ?>;    //控制器中，分配数据
	var setting = {
			view: {
               selectedMulti: false,
               fontCss: getFontCss
			},
			data: {
				simpleData: {
					enable: true
				}
			}
		};
	$.fn.zTree.init($("#misdynamicformmanagetree"), setting, zNodes);
	var zTree = $.fn.zTree.getZTreeObj("misdynamicformmanagetree");
	var valid = '<?php echo ($uilid); ?>';
    var nodes = zTree.getNodesByParam("id", valid, null);
    var url = $(navTab.getCurrentPanel()).find("[title='动态表管理_编辑']").attr("href");
    if(zNodes.length){
        $(navTab.getCurrentPanel()).find("[title='动态表管理_编辑']").attr("href",url+nodes[0]["id"]);
	}
    zTree.selectNode(nodes[0]);
});
</script>
<div class="pageContent">
<?php echo W("ShowToLevelMenu");?>
	<div class="treeleft">
	<div class="work_statement"></div>
		<div class="close">
		   <div class="toggleCollapse"><h2></h2><div></div></div>
			<div class="clearfix p5">
				<div class="member_searcher">
					<input class="add_key left" id="MisDynamicFormManageSearchNodeKeys"  type="text" placeholder="请输入查找词" name=""/>
					<button class="btn_member icon-search right" onclick="SearchZTreeNode('misdynamicformmanagetree','MisDynamicFormManageSearchNodeKeys')" type="button"></button>
				</div>
			</div>
			<ul id="misdynamicformmanagetree" class="ztree" layoutH="148"></ul>
		</div>
	</div>
	<div id="MisDynamicFormManageview" class="unitBox treeright">
		<form id="pagerForm" action="__URL__/index">
	<input type="hidden" name="pageNum" value="<?php echo ($pageNum); ?>"/>
	<input type="hidden" name="orderField" value="<?php echo ($order); ?>" />
	<input type="hidden" name="orderDirection" value="<?php echo ($sort); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" />
	 <input type="hidden" name="deptid" value="<?php echo ($deptid); ?>" />
	<input type="hidden" name="parentid" value="<?php echo ($parentid); ?>" />
</form>
<div class="pageContent">
	<div class="panelBar">
        <ul class="toolBar">
            <?php if(is_array($toolbarextension)): $i = 0; $__LIST__ = $toolbarextension;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$toolb): $mod = ($i % 2 );++$i; if($_SESSION["a"] == 1 or $toolb['ifcheck'] == 0 or ($toolb['ifcheck'] == 1 and !empty($toolb['permisname']) and $_SESSION[$toolb['permisname']])): ?><li><?php echo ($toolb['html']); ?></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
           <!-- <a class="js-add add tml-btn tml_look_btn tml_mp" href="__URL__/dataupdate" target="navTab" rel="MisDynamicFormManageview"  title="数据更新"><span><span class="icon icon-plus icon_lrp"></span>数据更新</span></a>
         -->
        </ul>
    </div>
    <div class="grid" layoutH="84">
        <?php if($MisDynamicFormTemplateList): ?><table class="model_name_lay">
                <tr>
                    <td width="15%" class="model_name_lay_left">是否带审批流：</td>
                    <td width="85%" class="model_name_lay_right"> <?php if($formvodata["isaudit"] == '1'): ?>是<?php else: ?>否<?php endif; ?></td>
                </tr>
                <tr>
                    <td class="model_name_lay_left">模板名称:</td>
                    <td class="model_name_lay_right">
                        <?php if(is_array($MisDynamicFormTemplateList)): $i = 0; $__LIST__ = $MisDynamicFormTemplateList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tempvo): $mod = ($i % 2 );++$i;?><span class="model_name"><?php echo ($tempvo["tplname"]); ?><span>，</span></span><?php endforeach; endif; else: echo "" ;endif; ?>
                    </td>
                </tr>
                <tr>
                    <td class="model_name_lay_left">Action名称:</td>
                    <td class="model_name_lay_right">
                            <span class="model_name"><?php echo ($formvodata["actionname"]); ?></span>
                  		 &nbsp;&nbsp;&nbsp;
                  			<span><a  target="dialog" rel="__MODULE__lookupSetAccess"  width="630" height="560"  mask="true"  href="__URL__/lookupSetAccess/actionname/<?php echo ($formvodata["actionname"]); ?>/actiontitle/<?php echo ($formvodata["actiontitle"]); ?>">查看授权</a></span><span style="color:red"><?php if(!$nodelist): ?>(未添加)<?php else: ?>(已有节点)<?php endif; ?></span>
                    </td>
                </tr>
                <tr>
                    <td class="model_name_lay_left">表单类型:</td>
                    <td class="model_name_lay_right">
                            <span class="model_name"><?php echo getSelectByName('AutotypEnum',$formtype);?></span>
                    </td>
                </tr>
            </table><?php endif; ?>
	<table class="tml_field_table" width="98%">
        <tr style="background: #f2f2f2;color: #363636;text-shadow: 0px 0px 1px rgba(0,0,0,0.5);">
            <td width="10%">表名</td>
            <td width="18%">字段名称</td>
            <td width="18%">字段标题</td>
            <td width="15%">字段类型</td>
            <td width="8%">字段长度</td>
            <td width="15%">组件类型</td>
            <td width="8%">权重</td>
             <td width="8%">是否唯一</td>
            <td width="8%">是否显示</td>
        </tr>
        <?php if(is_array($anameVo)): $i = 0; $__LIST__ = $anameVo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$anamel): $mod = ($i % 2 );++$i; $count =count($anamel['list']); if($anamel['isprimay'] =='1'){ if($formvodata['isaudit']==1){ $count=$count+count($defaultlist['auditField'])+count($defaultlist['defaultField']); }else{ $count=$count+count($defaultlist['defaultField']); } }else{ $count=$count+count($defaultlist['defaultField']); }; ?>
            <?php if(is_array($anamel['list'])): $i = 0; $__LIST__ = $anamel['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$afiled): $mod = ($i % 2 );++$i;?><tr>
                    <?php if($i == 1): ?><td style="background: #f2f2f2; text-shadow: 0px 0px 1px rgba(0,0,0,0.5); color: #363636;" rowspan="<?php echo ($count); ?>+<?php echo ($count); ?>"><?php echo ($anamel['tabletitle']); ?>[<?php echo ($anamel['tablename']); ?>]<?php if($anamel['isprimary'] == 1): ?>主表<?php else: ?>子表<?php endif; ?></td><?php endif; ?>
                    <td><?php echo ($afiled['field']); ?></td>
                    <td><?php echo ($afiled['title']); ?></td>
                    <td><?php if($comboxOptionList[$afiled['category']]['title'] == '日期组件'): ?>日期型(date)<?php else: echo ($fieldtypeList[$afiled['type']]['val']); endif; ?></td>
                    <td><?php echo ($afiled['length']); ?></td>
                    <td><?php echo ($comboxOptionList[$afiled['category']]['title']); ?></td>
                    <td><?php echo ($afiled['weight']); ?></td>
                     <td><?php echo getSelectByName('positivestatus',$afiled['unique']);?></td>
                     <?php  $isshow=getFieldBy($afiled['field'],'fieldname','id','mis_dynamic_form_propery','formid',$formid);?>
                    <td><?php if($isshow): ?>是<?php else: ?>否<?php endif; ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            <?php if($anamel['isprimay'] == 1 && $isaudit ==1 ): if(is_array($defaultlist['auditField'])): $i = 0; $__LIST__ = $defaultlist['auditField'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$daval): $mod = ($i % 2 );++$i;?><tr class="system_tr">
                <td><?php echo ($afiled['filed']); ?></td>
                <td><?php echo ($afiled['title']); ?></td>
                <td><?php echo ($fieldtypeList[$afiled['type']]['val']); ?></td>
                <td><?php echo ($afiled['length']); ?></td>
                <td>系统自带</td>
                <td>系统自带</td>
                <td>系统自带</td>
                <td>系统自带</td>
            </tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
            <?php if(is_array($defaultlist['defaultField'])): $i = 0; $__LIST__ = $defaultlist['defaultField'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dval): $mod = ($i % 2 );++$i;?><tr class="system_tr">
                    <td><?php echo ($dval['filed']); ?></td>
                    <td><?php echo ($dval['title']); ?></td>
                    <td><?php echo ($fieldtypeList[$dval['type']]['val']); ?></td>
                    <td><?php echo ($dval['length']); ?></td>
                    <td>系统自带</td>
                   	<td>系统自带</td>
                    <td>系统自带</td>
                    <td>系统自带</td>
                </tr><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
    </table>
    </div>
</div>
	</div>
</div>