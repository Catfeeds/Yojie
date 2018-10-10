<?php 
return array(
	'0' => array(
		'name' => 'id',
		'showname' => '编号',
		'shows' => '1',
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
		'isexport' => '1',
	),
	'1' => array(
		'name' => 'carid',
		'showname' => '车辆名',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'carid',
		'sortnum' => '1',
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
		'issearch' => '1',
		'searchField' => 'mis_car_tires.carid',
		'table' => 'mis_system_car',
		'field' => '',
		'conditions' => '',
		'type' => 'db',
		'isallsearch' => '0',
		'searchsortnum' => '1',
		'status' => '1',
		'isexport' => '1',
	),
	'2' => array(
		'name' => 'position',
		'showname' => '轮胎位置',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'position',
		'sortnum' => '2',
		'issearch' => '1',
		'searchField' => 'mis_car_tires.position',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '2',
		'status' => '1',
		'isexport' => '1',
	),
	'3' => array(
		'name' => 'brand',
		'showname' => '品牌型号',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'brand',
		'sortnum' => '3',
		'issearch' => '1',
		'searchField' => 'mis_car_tires.brand',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '3',
		'status' => '1',
		'isexport' => '1',
	),
	'4' => array(
		'name' => 'unit',
		'showname' => '单价',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'unit',
		'sortnum' => '4',
		'issearch' => '1',
		'searchField' => 'mis_car_tires.unit',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '4',
		'status' => '1',
		'isexport' => '1',
	),
	'5' => array(
		'name' => 'number',
		'showname' => '数量',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'number',
		'sortnum' => '5',
		'issearch' => '1',
		'searchField' => 'mis_car_tires.number',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '5',
		'status' => '1',
		'isexport' => '1',
	),
	'6' => array(
		'name' => 'amount',
		'showname' => '合计',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'amount',
		'sortnum' => '6',
		'issearch' => '1',
		'searchField' => 'mis_car_tires.amount',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '6',
		'status' => '1',
		'isexport' => '1',
	),
	'7' => array(
		'name' => 'remark',
		'showname' => '备注',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'remark',
		'sortnum' => '7',
		'issearch' => '1',
		'searchField' => 'mis_car_tires.remark',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '7',
		'status' => '1',
		'isexport' => '1',
	),
	'8' => array(
		'name' => 'action',
		'showname' => '操作',
		'shows' => '0',
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
		'sortnum' => '9',
		'issearch' => '0',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
	),
);

?>