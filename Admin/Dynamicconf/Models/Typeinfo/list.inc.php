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
		'issearch' => '',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '',
		'searchsortnum' => '',
	),
	'1' => array(
		'name' => 'code',
		'showname' => '编码',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'code',
		'sortnum' => '2',
		'issearch' => '1',
		'searchField' => 'mis_hr_typeinfo.code',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '2',
	),
	'2' => array(
		'name' => 'name',
		'showname' => '名称',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'name',
		'sortnum' => '3',
		'issearch' => '1',
		'searchField' => 'mis_hr_typeinfo.name',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '3',
	),
	'3' => array(
		'name' => 'remark',
		'showname' => '备注',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'remark',
		'sortnum' => '4',
		'issearch' => '',
		'searchField' => 'mis_hr_typeinfo.remark',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '',
		'searchsortnum' => '4',
	),
	'4' => array(
		'name' => 'createtime',
		'showname' => '创建时间',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
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
		'sortname' => 'startdate',
		'sortnum' => '5',
		'issearch' => '1',
		'searchField' => 'mis_hr_typeinfo.createtime',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'time',
		'isallsearch' => '',
		'searchsortnum' => '5',
	),
		'5' => array(
				'name' => 'updatetime',
				'showname' => '修改时间',
				'shows' => '1',
				'widths' => '',
				'sorts' => '0',
				'models' => '',
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
				'sortname' => 'startdate',
				'sortnum' => '6',
				'issearch' => '1',
				'searchField' => 'mis_hr_typeinfo.updatetime',
				'table' => '',
				'field' => '',
				'conditions' => '',
				'type' => 'time',
				'isallsearch' => '',
				'searchsortnum' => '6',
		),
	'6' => array(
		'name' => 'createid',
		'showname' => '创建人',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'remark',
		'sortnum' => '7',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'user',
				),
			),
		),
		'issearch' => '1',
		'searchField' => 'mis_hr_typeinfo.createid',
		'table' => 'user',
		'field' => 'id',
		'conditions' => '',
		'type' => 'db',
		'isallsearch' => '1',
		'searchsortnum' => '7',
	),
	'7' => array(
		'name' => 'updateid',
		'showname' => '修改人',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'remark',
		'sortnum' => '8',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'user',
				),
			),
		),
		'issearch' => '1',
		'searchField' => 'mis_hr_typeinfo.updateid',
		'table' => 'user',
		'field' => 'id',
		'conditions' => '',
		'type' => 'db',
		'isallsearch' => '1',
		'searchsortnum' => '8',
	),
	'8' => array(
		'name' => 'action',
		'showname' => '操作',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'status',
		'sortnum' => '10',
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
	),
	/* '9' => array(
		'name' => 'action',
		'showname' => '操作',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'status',
		'sortnum' => '10',
		'func' => array(
			'0' => array(
				'0' => 'showRelStatus',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '#status#',
					'1' => '#id#',
					'2' => 'unitBox',
				),
			),
		),
		'issearch' => '',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '',
		'searchsortnum' => '',
	), */
);

?>