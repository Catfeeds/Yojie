<?php 
return array(
	'0' => array(
		'name' => '序号',
		'showname' => 'id',
		'shows' => '0',
		'widths' => '30',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'id',
		'sortnum' => '1',
		'issearch' => '0',
		'searchField' => 'mis_work_facility_abnormalmove.id',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
	),
	'1' => array(
		'name' => 'orderno',
		'showname' => '异动编号',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'orderno',
		'sortnum' => '2',
		'issearch' => '1',
		'searchField' => 'mis_work_facility_abnormalmove.orderno',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '2',
		'status' => '1',
		'helpvalue' => '',
	),
	'2' => array(
		'name' => 'movedate',
		'showname' => '异动时间',
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
		'sortname' => 'movedate',
		'sortnum' => '3',
		'issearch' => '1',
		'searchField' => 'mis_work_facility_abnormalmove.movedate',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'time',
		'isallsearch' => '0',
		'searchsortnum' => '3',
		'status' => '1',
		'helpvalue' => '',
	),
	'3' => array(
		'name' => 'movedeptid',
		'showname' => '申请异动部门',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => 'MisSystemDepartment',
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
					'3' => 'mis_system_department',
				),
			),
		),
		'sortname' => 'applydepartmentid',
		'sortnum' => '4',
		'issearch' => '1',
		'searchField' => 'mis_work_facility_abnormalmove.movedeptid',
		'table' => 'mis_system_department',
		'field' => 'id',
		'conditions' => '',
		'type' => 'db|name',
		'isallsearch' => '0',
		'searchsortnum' => '4',
		'status' => '1',
		'helpvalue' => '',
	),
	'34' => array(
		'name' => 'remark',
		'showname' => '备注说明',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'remark',
		'sortnum' => '6',
		'issearch' => '0',
		'searchField' => 'mis_work_facility_abnormalmove.remark',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '35',
		'status' => '1',
		'helpvalue' => '',
	),
	'36' => array(
		'name' => 'auditState',
		'showname' => '审核状态',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'auditState',
		'func' => array(
			'0' => array(
				'0' => 'getAuditState',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => '#id#',
					'2' => '#ptmptid#',
				),
			),
		),
		'sortnum' => '7',
		'searchField' => 'mis_work_facility_abnormalmove.auditState',
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
	'38' => array(
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
				'0' => 'getStatus',
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
		'helpvalue' => '',
	),
	'35' => array(
		'name' => 'place',
		'showname' => '存放地点',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'place',
		'sortnum' => '5',
		'issearch' => '0',
		'searchField' => 'mis_work_facility_manage.place',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '36',
		'status' => '1',
		'helpvalue' => '',
		'rules' => '0',
		'message' => '0',
	),
);

?>