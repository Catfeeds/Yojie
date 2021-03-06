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
		'findtype' => 'text',
		'findtable' => 'crm_cust_advanced_info',
		'findfield' => 'cust_advanced_info_count',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
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
		'searchField' => 'mis_vehicle_type.code',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
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
		'searchField' => 'mis_vehicle_type.name',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
	),
	'8' => array(
		'name' => 'remark',
		'showname' => '备注',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'remark',
		'sortnum' => '4',
		'searchField' => 'mis_vehicle_type.remark',
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
		'searchField' => 'mis_vehicle_type.createtime',
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
	'3' => array(
		'name' => 'createid',
		'showname' => '创建人',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'createid',
		'sortnum' => '6',
		'searchField' => 'mis_vehicle_type.createid',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
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
					'3' => 'User',
				),
			),
		),
	),
	'5' => array(
		'name' => 'updateid',
		'showname' => '更新人',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'updateid',
		'sortnum' => '7',
		'searchField' => 'mis_vehicle_type.updateid',
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
		'sortnum' => '8',
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
		'searchField' => 'mis_vehicle_type.updatetime',
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
		'name' => 'action',
		'showname' => '操作',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'status',
		'sortnum' => '9',
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
					'6' => '车辆分类信息',
					'7' => '600',
					'8' => '250',
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
);

?>