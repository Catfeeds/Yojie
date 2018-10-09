<?php 
return array(
	'name' => array(
		'name' => 'name',
		'showname' => '地区名',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'name',
		'sortnum' => '1',
		'searchField' => 'mis_system_areas.name',
		'conditions' => 'aa',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '1',
	),
	'action' => array(
		'name' => 'action',
		'showname' => '状态',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'mis_system_areas.status',
		'sortnum' => '2',
		'issearch' => '',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '',
		'searchsortnum' => '',
		'status' => '1',
		'extention_html_end' => array(
			'0' => ' ',
		),
		'func' => array(
			'0' => array(
				'0' => 'getStatus',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '#status#',
				),
			),
		),
		'helpvalue' => '',
	),
	'id' => array(
		'name' => 'id',
		'showname' => '编号',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'mis_system_areas.id',
		'sortnum' => '1',
		'issearch' => '1',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '1',
		'searchsortnum' => '3',
		'status' => '1',
		'helpvalue' => '',
	),
	'parentid' => array(
		'name' => 'parentid',
		'showname' => '上级节点',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'parentid',
		'sortnum' => '5',
		'searchField' => 'mis_system_areas.parentid',
		'conditions' => '',
		'type' => 'select',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '3',
		'helpvalue' => '',
		'table' => '',
		'field' => '',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
	'joinname' => array(
		'name' => 'joinname',
		'showname' => '详细',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'joinname',
		'sortnum' => '4',
		'searchField' => 'mis_system_areas.joinname',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '2',
		'helpvalue' => '',
		'table' => '',
		'field' => '',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
);

?>