<?php 
return array(
	'1' => array(
		'name' => 'name',
		'showname' => '岗位名称',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'name',
		'sortnum' => '1',
		'issearch' => '1',
		'searchField' => 'mis_hr_job_info.name',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '2',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
		'helpvalue' => '',
	),
	'2' => array(
		'name' => 'deptid',
		'showname' => '部门',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'deptid',
		'sortnum' => '2',
		'issearch' => '1',
		'searchField' => 'mis_hr_job_info.deptid',
		'table' => 'mis_system_department',
		'field' => 'id',
		'conditions' => '',
		'type' => 'db',
		'isallsearch' => '1',
		'searchsortnum' => '3',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
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
					'3' => 'mis_system_department',
				),
			),
		),
	),
	'4' => array(
		'name' => 'sort',
		'showname' => '排序',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'sort',
		'sortnum' => '3',
		'issearch' => '0',
		'searchField' => 'mis_hr_job_info.sort',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '5',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
		'helpvalue' => '',
	),
	'5' => array(
		'name' => 'rolegroup_id',
		'showname' => '岗位授权',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'sort',
		'sortnum' => '4',
		'issearch' => '0',
		'searchField' => 'mis_hr_job_info.rolegroup_id',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '6',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
		'helpvalue' => '',
		'func' => array(
			'0' => array(
				'0' => 'createUrl',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '点我授权',
					'1' => 'rolegroupid/#rolegroup_id#',
					'2' => 'Rolegroup',
					'3' => 'roleGroupAuthorizeC',
					'4' => 'RolegroupAccess',
					'5' => 'navTab',
					'6' => '#name#',
				),
			),
		),
	),
	'3' => array(
		'name' => 'remark',
		'showname' => '备注',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'remark',
		'sortnum' => '5',
		'issearch' => '0',
		'searchField' => 'mis_hr_job_info.remark',
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
	'6' => array(
		'name' => 'action',
		'showname' => '操作',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'status',
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
					'6' => '岗位',
					'7' => '700',
					'8' => '400',
				),
			),
			'1' => array(
				'0' => array(
					'0' => '#status#',
				),
			),
		),
		'sortnum' => '6',
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
		'helpvalue' => '',
	),
	'id' => array(
		'name' => 'id',
		'showname' => 'ID',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'id',
		'sortnum' => '8',
		'issearch' => '0',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '1',
		'searchsortnum' => '8',
		'status' => '1',
		'helpvalue' => '',
		'rules' => '0',
		'message' => '0',
	),
);

?>