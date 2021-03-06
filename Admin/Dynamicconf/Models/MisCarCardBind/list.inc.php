<?php 
return array(
	'0' => array(
		'name' => 'id',
		'showname' => '编号',
		'shows' => '1',
		'widths' => '',
		'sorts' => '1',
		'models' => '',
		'sortname' => 'id',
		'sortnum' => '1',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'isexport' => '1',
	),
	'1' => array(
		'name' => 'carid',
		'showname' => '车辆名',
		'shows' => '1',
		'widths' => '',
		'sorts' => '1',
		'models' => '',
		'sortname' => 'carid',
		'sortnum' => '1',
		'searchField' => 'mis_car_card_bind.carid',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '0',
		'status' => '1',
		'isexport' => '1',
		'extention_html_end' => array(
			'0' => '-',
		),
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
			'1' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'carno',
					'3' => 'mis_system_car',
				),
			),
			'1' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'mis_system_car',
				),
			),
		),
	),
	'2' => array(
		'name' => 'oil_id',
		'showname' => '油卡ID',
		'shows' => '1',
		'widths' => '',
		'sorts' => '1',
		'models' => '',
		'sortname' => 'oil_id',
		'sortnum' => '2',
		'searchField' => 'mis_car_card_bind.oil_id',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '0',
		'status' => '1',
		'isexport' => '1',
	),
	'3' => array(
		'name' => 'oil_balance',
		'showname' => '余额',
		'shows' => '1',
		'widths' => '',
		'sorts' => '1',
		'models' => '',
		'sortname' => 'oil_balance',
		'sortnum' => '3',
		'searchField' => 'mis_car_card_bind.oil_balance',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '0',
		'status' => '1',
		'isexport' => '1',
		'func' => array(
			'0' => array(
				'0' => 'getDigits',
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
	'4' => array(
		'name' => 'bind_time',
		'showname' => '绑定时间',
		'shows' => '1',
		'widths' => '',
		'sorts' => '1',
		'models' => '',
		'sortname' => 'bind_time',
		'sortnum' => '4',
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
		'searchField' => 'mis_car_card_bind.bind_time',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '0',
		'status' => '1',
		'isexport' => '1',
	),
	'5' => array(
		'name' => 'type',
		'showname' => '卡类型',
		'shows' => '1',
		'widths' => '',
		'sorts' => '1',
		'models' => '',
		'sortname' => 'type',
		'sortnum' => '5',
		'searchField' => 'mis_car_card_bind.type',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '0',
		'status' => '1',
		'isexport' => '1',
		'func' => array(
			'0' => array(
				'0' => 'excelTplselected',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => '1:备用卡,2:新卡绑定',
				),
			),
		),
	),
	'6' => array(
		'name' => 'remark',
		'showname' => '备注',
		'shows' => '1',
		'widths' => '',
		'sorts' => '1',
		'models' => '',
		'sortname' => 'remark',
		'sortnum' => '6',
		'searchField' => 'mis_car_card_bind.remark',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '0',
		'status' => '1',
		'isexport' => '1',
	),
	'46' => array(
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
		'sortnum' => '47',
	),
);

?>