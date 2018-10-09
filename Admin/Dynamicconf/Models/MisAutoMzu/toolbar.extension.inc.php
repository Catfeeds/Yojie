<?php 
/**
 * @Title: Config
 * @Package package_name
 * @Description: todo(动态表单_配置文件-操作权限配置文件)
 * @author 管理员
 * @company 重庆特米洛科技有限公司
 * @copyright 本文件归属于重庆特米洛科技有限公司
 * @date 2018-09-18 09:20:36
 * @version V1.0
*/
$original = array(
	'js-add' => array(
		'ifcheck' => '1',
		'permisname' => 'misautomzu_add',
		'html' => '<a class="js-add add tml-btn tml_look_btn tml_mp" href="__URL__/add" rel="__MODULE__add" target="navTab"  title="发吧开办费_新增"><span><span class="icon icon-plus icon_lrp"></span>新增</span></a>',
		'shows' => '1',
		'sortnum' => '1',
	),
	'js-delete' => array(
		'ifcheck' => '1',
		'rules' => '#auditState#==0||#auditState#==-1',
		'permisname' => 'misautomzu_delete',
		'html' => '<a class="js-delete delete tml-btn tml_look_btn tml_mp" href="__URL__/delete/id/{sid_node}/navTabId/__MODULE__" target="ajaxTodo" title="你确定要删除吗？" warn="请选择一条组记录"><span><span class="icon icon-trash icon_lrp"></span>删除</span></a>',
		'shows' => '1',
		'sortnum' => '2',
	),
	'js-edit' => array(
		'ifcheck' => '1',
		'rules' => '#auditState#==0||#auditState#==-1',
		'permisname' => 'misautomzu_edit',
		'html' => '<a class="js-edit edit tml-btn tml_look_btn tml_mp" href="__URL__/edit/id/{sid_node}" rel="__MODULE__edit" target="navTab"  title="发吧开办费_修改"><span><span class="icon icon-edit icon_lrp"></span>修改</span></a>',
		'shows' => '1',
		'sortnum' => '3',
	),
	'js-view' => array(
		'ifcheck' => '0',
		'permisname' => 'misautomzu_view',
		'html' => '<a class="js-view icon tml-btn tml_look_btn tml_mp" href="__URL__/auditView/id/{sid_node}" rel="__MODULE__view" target="navTab"   title="发吧开办费_查看"><span><span class="icon icon-eye-open icon_lrp"></span>查看</span></a>',
		'shows' => '1',
		'sortnum' => '4',
	),
	'js-iconBack' => array(
		'ifcheck' => '1',
		'rules' => '#auditState#==1',
		'permisname' => 'misautomzu_add',
		'html' => '<a class="js-iconBack tbundo tml-btn tml_look_btn tml_mp" href="__URL__/lookupGetBackprocess/id/{sid_node}/navTabId/__MODULE__" warn="请选择节点" target="ajaxTodo" title="您确定要撤回单据吗?"><span><span class="icon icon-external-link icon_lrp"></span>单据撤回</span></a>',
		'shows' => '1',
		'sortnum' => '5',
	),
	'js-Change' => array(
		'ifcheck' => '1',
		'rules' => '#auditState#==3 || #operateid#==1',
		'permisname' => 'misautomzu_changeedit',
		'html' => '<a class="js-Change icon tml-btn tml_look_btn tml_mp" href="__URL__/changeEdit/bgval/1/id/{sid_node}" rel="__MODULE__edit" target="navTab"   title=""发吧开办费_变更"><span><span class="icon icon-eye-open icon_lrp"></span>变更</span></a>',
		'shows' => '1',
		'sortnum' => '6',
	),
	'js-fileexport' => array(
		'ifcheck' => '0',
		'permisname' => 'misautomzu_printout',
		'html' => '
						<a class="js-printOut tml-btn tml_look_btn tml_mp" title="导出" export_url="__URL__/fileexport" rel_id="{sid_node}" onclick="fileexport(this)" href="javascript:;" ><span class="icon_lrp"><span class="icon-sort"></span>导出</span></a>
						<div class="top_drop_lay export_operate">
							<a href="__APP__/"MisAutoMzu"/export_word_one/id/" class="tml-btn tml_look_btn tml_mp export_type">
								<span class="icon icon-share icon_lrp"></span><span>导出Word</span>
							</a>
							<a href="__APP__/"MisAutoMzu"/export_pdf_one/id/" class="tml-btn tml_look_btn tml_mp export_type">
								<span class="icon icon-share icon_lrp"></span><span>导出Pdf</span>
							</a>
						</div>',
		'shows' => '0',
		'sortnum' => '8',
		'rightnotshow' => '1',
	),
	'js-addremind' => array(
		'ifcheck' => '0',
		'permisname' => 'misautomzu_remind',
		'html' => '<a class="tml_look_btn  tml_mp js-addremind" mask="true" href="__APP__/MisSystemRemind/lookupaddremind/md/MisAutoMzu" rel="__MODULE__addremind" target="dialog" width="640" height="227"  title="加入提醒"><span class="icon-bell icon_lrp"></span><span>加入提醒</span></a>',
		'shows' => '1',
		'sortnum' => '5',
	),
	'js-printOut' => array(
		'ifcheck' => '0',
		'permisname' => 'misautomzu_printout',
		'html' => '<a class="js-printOut tml-btn tml_look_btn tml_mp" title="打印" rel_id="{sid_node}" id="printOut" print_url="__URL__/printout" onclick="printOut(this,1)" href="javascript:;" ><span><span class="icon icon-edit icon_lrp"></span>打印</span></a>',
		'shows' => '0',
		'sortnum' => '7',
	),
);
$extedsTool = require 'toolbar.extensionExtend.inc.php';
return array_merge($original , $extedsTool);
?>