<?php 
return array(
	'0' => array(
		'name' => 'name',
		'showname' => '物品名称',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'name',
		'sortnum' => '1',
		'status' => '1',
		'isexport' => '1',
		'searchField' => 'mis_meeting_room_urged.name',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '0',
		'rules' => '0',
		'message' => '0',
		'helpvalue' => '',
	),
	'1' => array(
		'name' => 'mark',
		'showname' => '物品信息',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'mark',
		'sortnum' => '2',
		'searchField' => 'mis_meeting_room_urged.mark',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
	),
	'7' => array(
		'name' => 'key',
		'showname' => '标示',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'key',
		'sortnum' => '3',
		'status' => '1',
		'isexport' => '1',
		'searchField' => 'mis_meeting_room_urged.key',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'rules' => '0',
		'message' => '0',
		'helpvalue' => '',
	),
	'3' => array(
		'name' => 'createid',
		'showname' => '创建人',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'createid',
		'sortnum' => '4',
		'searchField' => 'mis_meeting_room_urged.createid',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
	),
	'4' => array(
		'name' => 'createtime',
		'showname' => '创建时间',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'createtime',
		'sortnum' => '5',
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
		'searchField' => 'mis_meeting_room_urged.createtime',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'time',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
	),
	'5' => array(
		'name' => 'updateid',
		'showname' => '更新人',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'updateid',
		'sortnum' => '6',
		'searchField' => 'mis_meeting_room_urged.updateid',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
	),
	'6' => array(
		'name' => 'updatetime',
		'showname' => '更新时间',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'updatetime',
		'sortnum' => '7',
		'func' => array(
			'0' => array(
				'0' => 'date',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => 'Y-m-d',
					'1' => '###',
				),
			),
		),
		'searchField' => 'mis_meeting_room_urged.updatetime',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'time',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
	),
	'8' => array(
		'name' => 'action',
		'showname' => '操作',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'status',
		'sortnum' => '8',
		'issearch' => '0',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'extention_html_end' => array(
			'0' => ' ',
		),
		'func' => array(
			'0' => array(
				'0' => 'getOperateStatus',
			),
			'1' => array(
				'0' => 'getStatus',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '#createid#',
					'1' => '#auditState#',
					'2' => 'id/#id#',
					'3' => '',
					'4' => '',
					'5' => 'dialog',
					'6' => '会议室',
				),
			),
			'1' => array(
				'0' => array(
					'0' => '#status#',
				),
			),
		),
		'helpvalue' => '',
	),
		'9' => array(
				'name' => 'remark',
				'showname' => '备注',
				'shows' => '1',
				'widths' => '',
				'sorts' => '0',
				'models' => '',
				'sortname' => 'remark',
				'sortnum' => '4',
				'issearch' => '0',
				'searchField' => 'mis_meeting_room_urged.remark',
				'table' => '',
				'field' => '',
				'conditions' => '',
				'type' => 'text',
				'isallsearch' => '0',
				'searchsortnum' => '4',
				'status' => '1',
				'rules' => '0',
				'message' => '0',
				'helpvalue' => '',
		),
);

?>