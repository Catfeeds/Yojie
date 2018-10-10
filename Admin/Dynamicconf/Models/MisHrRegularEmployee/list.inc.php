<?php 
return array(
	'0' => array(
		'name' => 'id',
		'showname' => 'ID',
		'shows' => '0',
		'widths' => '30',
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
	),
	'1' => array(
		'name' => 'orderno',
		'showname' => '员工编号',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'orderno',
		'sortnum' => '2',
		'issearch' => '0',
		'isexport' => '1',
		'searchField' => 'mis_hr_personnel_person_info.orderno',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '1',
		'status' => '1',
	),
	'2' => array(
		'name' => 'name',
		'showname' => '姓名',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'name',
		'sortnum' => '3',
		'issearch' => '1',
		'isexport' => '1',
		'searchField' => 'mis_hr_personnel_person_info.name',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '2',
		'status' => '1',
	),
	'3' => array(
		'name' => 'sex',
		'showname' => '性别',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'sex',
		'sortnum' => '4',
		'func' => array(
			'0' => array(
				'0' => 'getS',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
				),
			),
		),
		'issearch' => '1',
		'isexport' => '1',
		'searchField' => 'mis_hr_personnel_person_info.sex',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'radio|sex',
		'isallsearch' => '0',
		'searchsortnum' => '3',
		'status' => '1',
	),
	'4' => array(
		'name' => 'age',
		'showname' => '年龄',
		'shows' => '1',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'age',
		'sortnum' => '5',
		'issearch' => '0',
		'searchField' => 'mis_hr_personnel_person_info.age',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '0',
		'searchsortnum' => '4',
		'status' => '1',
		'widths' => '',
	),
	'5' => array(
		'name' => 'education',
		'showname' => '学历',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'education',
		'sortnum' => '3',
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
					'3' => 'mis_hr_typeinfo',
				),
			),
		),
		'issearch' => '1',
		'isexport' => '1',
		'searchField' => 'mis_hr_personnel_person_info.education',
		'table' => 'mis_hr_typeinfo',
		'field' => 'id',
		'conditions' => 'typeid=2,pid=44',
		'type' => 'group',
		'isallsearch' => '0',
		'searchsortnum' => '5',
		'status' => '1',
	),
	'6' => array(
		'name' => 'deptid',
		'showname' => '部门',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'deptid',
		'sortnum' => '7',
		'issearch' => '1',
		'isexport' => '1',
		'searchField' => 'mis_hr_personnel_person_info.deptid',
		'table' => 'mis_system_department',
		'field' => 'id',
		'conditions' => '',
		'type' => 'db',
		'isallsearch' => '1',
		'searchsortnum' => '6',
		'status' => '1',
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
	'7' => array(
		'name' => 'dutyname',
		'showname' => '职位',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'dutylevelid',
		'sortnum' => '8',
		'issearch' => '1',
		'isexport' => '1',
		'searchField' => 'mis_hr_personnel_person_info.dutyname',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '7',
		'status' => '1',
	),
	'8' => array(
		'name' => 'worktype',
		'showname' => '工种',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'worktype',
		'sortnum' => '9',
		'func' => array(
			'0' => array(
				'0' => 'excelTplselected',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => '1:技术,2:非技,3:实习,4:普工',
				),
			),
		),
		'issearch' => '1',
		'isexport' => '1',
		'searchField' => 'mis_hr_personnel_person_info.worktype',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'select|yuangongBz',
		'isallsearch' => '1',
		'searchsortnum' => '8',
		'status' => '1',
	),
	'9' => array(
		'name' => 'regulardate',
		'showname' => '转正时间',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'regulardate',
		'sortnum' => '10',
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
		'issearch' => '1',
		'isexport' => '1',
		'searchField' => 'mis_hr_personnel_person_info.indate',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'time',
		'isallsearch' => '0',
		'searchsortnum' => '9',
		'status' => '1',
	),
	'10' => array(
		'name' => 'chinaid',
		'showname' => '身份证号',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'chinaid',
		'sortnum' => '11',
		'issearch' => '0',
		'isexport' => '1',
		'searchField' => 'mis_hr_personnel_person_info.chinaid',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '10',
		'status' => '1',
	),
	'11' => array(
		'name' => 'remark',
		'showname' => '备注',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'chinaid',
		'sortnum' => '12',
		'issearch' => '0',
		'isexport' => '1',
		'searchField' => 'mis_hr_personnel_person_info.chinaid',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '11',
		'status' => '1',
	),
	'12' => array(
		'name' => 'leavereason',
		'showname' => '查看详情',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'leavereason',
		'sortnum' => '13',
		'issearch' => '0',
		'isexport' => '1',
		'searchField' => 'mis_hr_leave_employee.leavereason',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '12',
		'status' => '1',
		'func' => array(
			'0' => array(
				'0' => 'showhtml',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '<a href="__URL__/edit/id/#id#/modelname/MisHrRegularEmployee" title="员工档案" rel="MisHrLeaveEmployee_edit" target="dialog" mask="true" height="497" width="998"><span style="color:red">查看</span></a>',
				),
			),
		),
	),
);

?>