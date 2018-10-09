<?php 
return array(
	'6' => array(
		'name' => 'orderno',
		'showname' => '编号',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'orderno',
		'sortnum' => '1',
		'issearch' => '1',
		'searchField' => 'group.orderno',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '1',
		'searchsortnum' => '1',
		'status' => '1',
		'helpvalue' => '',
		'rules' => '0',
		'message' => '0',
		'isexport' => '1',
	),
	'1' => array(
		'name' => 'name',
		'showname' => '名称',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'name',
		'sortnum' => '2',
		'issearch' => '1',
		'searchField' => 'group.name',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '1',
		'searchsortnum' => '2',
		'status' => '1',
		'helpvalue' => '',
		'func' => array(
			'0' => array(
				'0' => 'createUrl',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'index/level/2/group_id/#id#',
					'2' => 'Node',
					'3' => 'index',
					'4' => 'Node',
				),
			),
		),
		'rules' => '0',
		'message' => '0',
		'isexport' => '1',
	),
	'2' => array(
		'name' => 'sorts',
		'showname' => '排序',
		'shows' => '1',
		'widths' => '',
		'sorts' => '1',
		'models' => '',
		'sortname' => 'sorts',
		'sortnum' => '3',
		'func' => array(
			'0' => array(
				'0' => 'trim',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
				),
			),
		),
		'status' => '1',
		'rules' => '0',
		'message' => '0',
		'isexport' => '1',
		'searchField' => 'group.sorts',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '3',
	),
	'3' => array(
		'name' => 'show',
		'showname' => '是否显示工具栏',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'type',
		'sortnum' => '4',
		'func' => array(
			'0' => array(
				'0' => 'getStatus',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
				),
			),
		),
		'status' => '1',
		'rules' => '0',
		'message' => '0',
		'isexport' => '1',
		'searchField' => 'group.show',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '4',
	),
	'4' => array(
		'name' => 'indexlink',
		'showname' => '打开导航链接',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'indexlink',
		'sortnum' => '5',
		'status' => '-1',
		'rules' => '0',
		'message' => '0',
		'searchField' => 'group.indexlink',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '0',
	),
	'5' => array(
		'name' => 'status',
		'showname' => '状态',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'status',
		'func' => array(
			'0' => array(
				'0' => 'getStatus',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
				),
			),
		),
		'sortnum' => '6',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '0',
	),
);

?>