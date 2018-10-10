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
		'searchField' => 'mis_hr_invitere_special_form.name',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '2',
		'status' => '1',
	),
	'2' => array(
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
		'searchField' => 'mis_hr_invitere_special_form.sex',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'radio|sex',
		'isallsearch' => '0',
		'searchsortnum' => '3',
		'status' => '1',
	),
	'3' => array(
		'name' => 'age',
		'showname' => '年龄',
		'shows' => '1',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'age',
		'sortnum' => '5',
		'issearch' => '0',
		'searchField' => 'mis_hr_invitere_special_form.age',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '0',
		'searchsortnum' => '4',
		'status' => '1',
		'widths' => '',
	),
	'4' => array(
		'name' => 'chinaid',
		'showname' => '身份证号',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'chinaid',
		'sortnum' => '6',
		'issearch' => '1',
		'isexport' => '1',
		'searchField' => 'mis_hr_invitere_special_form.chinaid',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '5',
		'status' => '1',
	),
	'5' => array(
		'name' => 'interviewposition',
		'showname' => '应聘岗位',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'interviewposition',
		'sortnum' => '7',
		'issearch' => '1',
		'isexport' => '1',
		'searchField' => 'mis_hr_invitere_special_form.interviewposition',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '6',
		'status' => '1',
	),
	'6' => array(
		'name' => 'interviewpositiondate',
		'showname' => '应聘时间',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'interviewpositiondate',
		'sortnum' => '8',
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
		'searchField' => 'mis_hr_invitere_special_form.interviewpositiondate',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'time',
		'isallsearch' => '0',
		'searchsortnum' => '9',
		'status' => '1',
	),
	'7' => array(
		'name' => 'address',
		'showname' => '现住地址',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'address',
		'sortnum' => '9',
		'issearch' => '0',
		'searchField' => 'mis_hr_invitere_special_form.address',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
	),
	'9' => array(
		'name' => 'mobilephone',
		'showname' => '联系电话',
		'shows' => '0',
		'widths' => '30',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'mobilephone',
		'sortnum' => '10',
		'issearch' => '0',
		'searchField' => 'mis_hr_invitere_special_form.mobilephone',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
	),
	'10' => array(
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
		'sortnum' => '19',
		'searchField' => 'mis_business_contract_cityalarm.auditState',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '18',
		'status' => '1',
	),
		
		'11' => array(
				'name' => 'action',
				'showname' => '操作',
				'shows' => '1',
				'widths' => '',
				'sorts' => '0',
				'models' => '',
				'sortname' => 'status',
				'sortnum' => '20',
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
								'0' => 'showhtml',
						),
						'2' => array(
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
										'6' => '特殊人员招聘报名表',
										'7' => '671',
										'8' => '437',
								),
						),
						'1' => array(
								'0' => array(
										'0' => '<a class=\' tml-mr3 tml-icon tml-icon-userplus\' rel="MisHrInvitereSpecialFormadd" title="办理入职" target="navTab" href="__APP__/MisHrBasicEmployee/add/InvitereSpecialId/#id#"><span>办理入职</span></a>',
								),
						),
						'2' => array(
								'0' => array(
										'0' => '#status#',
								),
						),
				),
		),
);

?>