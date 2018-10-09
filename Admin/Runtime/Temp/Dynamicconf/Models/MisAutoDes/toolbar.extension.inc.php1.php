<?php 
return array(
	'js-add' => array(
		'ifcheck' => '1',
		'permisname' => 'misautodes_add',
		'html' => '<a class="js-add add tml-btn tml_look_btn tml_mp" href="__URL__/add" rel="__MODULE__add" target="navTab"  title="项目管理_新增"><span><span class="icon icon-plus icon_lrp"></span>新增</span></a>',
		'shows' => '1',
		'sortnum' => '1',
	),
	'js-delete' => array(
		'ifcheck' => '1',
		'rules' => '#auditState#==0||#auditState#==-1',
		'permisname' => 'misautodes_delete',
		'html' => '<a class="js-delete delete tml-btn tml_look_btn tml_mp" href="__URL__/delete/id/{sid_node}/navTabId/__MODULE__" target="ajaxTodo" title="你确定要删除吗？" warn="请选择一条组记录"><span><span class="icon icon-trash icon_lrp"></span>删除</span></a>',
		'shows' => '1',
		'sortnum' => '2',
	),
	'js-edit' => array(
		'ifcheck' => '1',
		'rules' => '#auditState#==0||#auditState#==-1',
		'permisname' => 'misautodes_edit',
		'html' => '<a class="js-edit edit tml-btn tml_look_btn tml_mp" href="__URL__/edit/id/{sid_node}" rel="__MODULE__edit" target="navTab"  title="项目管理_修改"><span><span class="icon icon-edit icon_lrp"></span>修改</span></a>',
		'shows' => '1',
		'sortnum' => '3',
	),
	'js-view' => array(
		'ifcheck' => '0',
		'permisname' => 'misautodes_view',
		'html' => '<a class="js-view icon tml-btn tml_look_btn tml_mp" href="__URL__/auditView/id/{sid_node}" rel="__MODULE__view" target="navTab"   title="项目管理_查看"><span><span class="icon icon-eye-open icon_lrp"></span>查看</span></a>',
		'shows' => '1',
		'sortnum' => '4',
	),
	'js-iconBack' => array(
		'ifcheck' => '1',
		'rules' => '#auditState#==1',
		'permisname' => 'misautodes_add',
		'html' => '<a class="js-iconBack tbundo tml-btn tml_look_btn tml_mp" href="__URL__/lookupGetBackprocess/id/{sid_node}/navTabId/__MODULE__" warn="请选择节点" target="ajaxTodo" title="您确定要撤回单据吗?"><span><span class="icon icon-external-link icon_lrp"></span>单据撤回</span></a>',
		'shows' => '1',
		'sortnum' => '5',
	),
	'js-Change' => array(
		'ifcheck' => '1',
		'rules' => '#auditState#==3 || #operateid#==1',
		'permisname' => 'misautodes_changeedit',
		'html' => '<a class="js-Change icon tml-btn tml_look_btn tml_mp" href="__URL__/changeEdit/bgval/1/id/{sid_node}" rel="__MODULE__edit" target="navTab"   title=""项目管理_变更"><span><span class="icon icon-eye-open icon_lrp"></span>变更</span></a>',
		'shows' => '1',
		'sortnum' => '6',
	),
	'js-addremind' => array(
		'ifcheck' => '0',
		'permisname' => 'misautodes_remind',
		'html' => '<a class="tml_look_btn  tml_mp js-addremind" mask="true" href="__APP__/MisSystemRemind/lookupaddremind/md/MisAutoDes" rel="__MODULE__addremind" target="dialog" width="640" height="227"  title="加入提醒"><span class="icon-bell icon_lrp"></span><span>加入提醒</span></a>',
		'shows' => '1',
		'sortnum' => '5',
	),
);

?>