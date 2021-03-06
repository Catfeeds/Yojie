<?php 
return array(
	'js-add' => array(
		'ifcheck' => '1',
		'permisname' => 'missystemunit_add',
		'html' => '<a class="js-add add tml-btn tml_look_btn tml_mp" href="__URL__/add" target="dialog" width="720" height="500"  mask="true"  rel="__MODULE__add"  title="单位设置_新增"><span><span class="icon icon-plus icon_lrp"></span>新增</span></a>',
		'shows' => '1',
		'sortnum' => '1',
	),
	'js-edit' => array(
		'ifcheck' => '1',
		'permisname' => 'missystemunit_edit',
		'html' => '<a class="js-edit edit tml-btn tml_look_btn tml_mp"  href="__URL__/edit/id/{sid_node}" target="dialog" width="720" height="500"  mask="true"  title="单位设置_修改"><span><span class="icon icon-edit icon_lrp"></span>修改</span></a>',
		'shows' => '1',
		'sortnum' => '3',
	),
	'js-view' => array(
		'ifcheck' => '0',
		'permisname' => 'missystemunit_view',
		'html' => '<a class="js-view icon tml-btn tml_look_btn tml_mp" href="__URL__/view/id/{sid_node}/eid/{sid_node}" target="dialog" width="720" height="500"  mask="true"   title="单位设置_查看"><span><span class="icon icon-eye-open icon_lrp"></span>查看</span></a>',
		'shows' => '1',
		'sortnum' => '4',
	),
	'js-delete' => array(
		'ifcheck' => '1',
		'permisname' => 'missystemunit_delete',
		'html' => '<a class="js-delete delete tml-btn tml_look_btn tml_mp" href="__URL__/delete/id/{sid_node}/navTabId/__MODULE__" target="ajaxTodo" title="你确定要删除吗？" warn="请选择一条组记录"><span><span class="icon icon-trash icon_lrp"></span>删除</span></a>',
		'shows' => '1',
		'sortnum' => '2',
	),
);

?>