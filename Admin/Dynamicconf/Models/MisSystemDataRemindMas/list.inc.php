<?php 
return array(
	'0' => array(
		'name' => 'id',
		'showname' => 'ID',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'id',
		'sortnum' => '1',
		'issearch' => '0',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
	'1' => array(
		'name' => 'modelname',
		'showname' => '来源模型',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'modelname',
		'sortnum' => '1',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'name',
					'2' => 'title',
					'3' => 'node',
				),
			),
		),
		'issearch' => '1',
		'searchField' => 'mis_system_data_remind_mas.modelname',
		'table' => 'node',
		'field' => 'name',
		'conditions' => '',
		'type' => 'db|title',
		'isallsearch' => '1',
		'searchsortnum' => '3',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
	'2' => array(
		'name' => 'porderno',
		'showname' => '单据编号',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'porderno',
		'sortnum' => '2',
		'issearch' => '1',
		'searchField' => 'mis_system_data_remind_mas.porderno',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '3',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
	'4' => array(
		'name' => 'msginfo',
		'showname' => '提醒内容',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'msginfo',
		'sortnum' => '5',
		'issearch' => '1',
		'searchField' => 'mis_system_data_remind_mas.msginfo',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '4',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
	'6' => array(
		'name' => 'createtime',
		'showname' => '提醒时间',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'createtime',
		'sortnum' => '6',
		'issearch' => '1',
		'searchField' => 'mis_system_data_remind_mas.createtime',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'time',
		'isallsearch' => '1',
		'searchsortnum' => '4',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
		'func' => array(
			'0' => array(
				'0' => 'transTime',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
				),
			),
		),
	),
	'9' => array(
		'name' => 'action2',
		'showname' => '操作',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'status',
		'func' => array(
			'0' => array(
				'0' => 'showStatus',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '#status#',
					'1' => '#id#',
				),
			),
		),
		'sortnum' => '7',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
);

?>