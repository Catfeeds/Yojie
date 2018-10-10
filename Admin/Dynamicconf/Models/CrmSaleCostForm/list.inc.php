<?php 
return array(
		'0' => array(
				'name' => 'orderno',
				'showname' => '订单编号',
				'shows' => '1',
				'widths' => '',
				'sorts' => '0',
				'models' => '',
				'sortname' => 'orderno',
				'sortnum' => '1',
				'issearch' => '1',
				'searchField' => 'crm_sale_cost_form.orderno',
				'table' => '',
				'field' => '',
				'conditions' => '',
				'type' => 'text',
				'isallsearch' => '1',
				'searchsortnum' => '1',
		),
		'1' => array(
				'name' => 'sumary',
				'showname' => '订单摘要',
				'shows' => '1',
				'widths' => '',
				'sorts' => '0',
				'models' => '',
				'sortname' => 'sumary',
				'sortnum' => '2',
				'issearch' => '1',
				'searchField' => 'crm_sale_cost_form.sumary',
				'table' => '',
				'field' => '',
				'conditions' => '',
				'type' => 'text',
				'isallsearch' => '1',
				'searchsortnum' => '2',
		),
		'2' => array(
				'name' => 'userid',
				'showname' => '申请人',
				'shows' => '1',
				'widths' => '',
				'sorts' => '0',
				'models' => 'User',
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
				'sortname' => 'userid',
				'sortnum' => '3',
				'issearch' => '1',
				'searchField' => 'crm_sale_cost_form.userid',
				'table' => 'user',
				'field' => 'id',
				'conditions' => '',
				'type' => 'db',
				'isallsearch' => '1',
				'searchsortnum' => '3',
		),
		'3' => array(
				'name' => 'department',
				'showname' => '申请人部门',
				'shows' => '1',
				'widths' => '',
				'sorts' => '0',
				'models' => '',
				'func' => array(
						'0' => array(
								'0' => 'getFieldBy',
								'1' => 'getFieldBy',
						),
				),
				'funcdata' => array(
						'0' => array(
								'0' => array(
										'0' => '#userid#',
										'1' => 'id',
										'2' => 'dept_id',
										'3' => 'User',
								),
								'1' => array(
										'0' => '###',
										'1' => 'id',
										'2' => 'name',
										'3' => 'MisSystemDepartment',
								),
						),
				),
				'sortname' => 'department',
				'sortnum' => '4',
				'issearch' => '1',
				'searchField' => 'crm_sale_cost_form.userid',
				'table' => 'mis_system_department,user',
				'field' => '',
				'conditions' => '',
				'type' => 'db|name,dept_id',
				'isallsearch' => '1',
				'searchsortnum' => '4',
		),
		'4' => array(
				'name' => 'apamount',
				'showname' => '申请金额',
				'shows' => '1',
				'widths' => '',
				'sorts' => '0',
				'models' => '',
				'sortname' => 'apamount',
				'sortnum' => '5',
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
				'issearch' => '',
				'searchField' => 'crm_sale_cost_form.apamount',
				'table' => '',
				'field' => '',
				'conditions' => '',
				'type' => 'number',
				'isallsearch' => '',
				'searchsortnum' => '5',
		),
		'5' => array(
				'name' => 'rqdate',
				'showname' => '需求日期',
				'shows' => '1',
				'widths' => '',
				'sorts' => '0',
				'models' => '',
				'sortname' => 'rqdate',
				'sortnum' => '6',
				'func' => array(
						'0' => array(
								'0' => 'transtime',
						),
				),
				'funcdata' => array(
						'0' => array(
								'0' => array(
										'1' => '###',
								),
						),
				),
				'issearch' => '1',
				'searchField' => 'crm_sale_cost_form.rqdate',
				'table' => '',
				'field' => '',
				'conditions' => '',
				'type' => 'time',
				'isallsearch' => '',
				'searchsortnum' => '6',
		),
		'6' => array(
				'name' => 'avamount',
				'showname' => '审批金额',
				'shows' => '1',
				'widths' => '',
				'sorts' => '0',
				'models' => '',
				'sortname' => 'avamount',
				'sortnum' => '7',
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
				'issearch' => '',
				'searchField' => 'crm_sale_cost_form.avamount',
				'table' => '',
				'field' => '',
				'conditions' => '',
				'type' => 'text',
				'isallsearch' => '',
				'searchsortnum' => '7',
		),
		'7' => array(
				'name' => 'customerid',
				'showname' => '拜访客户',
				'shows' => '1',
				'widths' => '',
				'sorts' => '0',
				'models' => 'MisSalesCustomer',
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
										'3' => 'MisSalesCustomer',
								),
						),
				),
				'sortname' => 'customerid',
				'sortnum' => '8',
				'issearch' => '1',
				'searchField' => 'crm_sale_cost_form.customerid',
				'table' => 'mis_sales_customer',
				'field' => 'id',
				'conditions' => '',
				'type' => 'db',
				'isallsearch' => '1',
				'searchsortnum' => '8',
		),
		'8' => array(
				'name' => 'companyid',
				'showname' => '公司',
				'shows' => '1',
				'widths' => '',
				'sorts' => '0',
				'models' => 'MisSystemCompany',
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
										'3' => 'MisSystemCompany',
								),
						),
				),
				'sortname' => 'companyid',
				'sortnum' => '9',
				'issearch' => '1',
				'searchField' => 'crm_sale_cost_form.companyid',
				'table' => 'mis_system_company',
				'field' => 'id',
				'conditions' => 'status=1',
				'type' => 'db',
				'isallsearch' => '1',
				'searchsortnum' => '9',
		),
		'9' => array(
				'name' => 'projectid',
				'showname' => '销售项目',
				'shows' => '0',
				'widths' => '',
				'sorts' => '0',
				'models' => 'MisSalesProject',
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
										'2' => 'namemis_sales_project',
								),
						),
				),
				'sortname' => 'projectid',
				'sortnum' => '10',
				'issearch' => '',
				'searchField' => 'crm_sale_cost_form.projectid',
				'table' => '',
				'field' => '',
				'conditions' => '',
				'type' => 'text',
				'isallsearch' => '',
				'searchsortnum' => '10',
		),
		'10' => array(
				'name' => 'sacnoid',
				'showname' => '销售合同',
				'shows' => '0',
				'widths' => '',
				'sorts' => '0',
				'models' => 'MisSalesContractmas',
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
										'3' => 'mis_sales_contractmas',
								),
						),
				),
				'sortname' => 'sacnoid',
				'sortnum' => '11',
				'issearch' => '',
				'searchField' => 'crm_sale_cost_form.sacnoid',
				'table' => '',
				'field' => '',
				'conditions' => '',
				'type' => 'text',
				'isallsearch' => '',
				'searchsortnum' => '11',
		),
		'11' => array(
				'name' => 'cappid',
				'showname' => '费用项目',
				'shows' => '0',
				'widths' => '',
				'sorts' => '0',
				'models' => '',
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
										'3' => 'crm_application',
								),
						),
				),
				'sortname' => 'cappid',
				'sortnum' => '12',
				'issearch' => '',
				'searchField' => 'crm_sale_cost_form.cappid',
				'table' => '',
				'field' => '',
				'conditions' => '',
				'type' => 'text',
				'isallsearch' => '',
				'searchsortnum' => '12',
		),
		'12' => array(
				'name' => 'typeid',
				'showname' => '申请类型',
				'shows' => '0',
				'widths' => '',
				'sorts' => '0',
				'models' => 'MisOrderTypes',
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
										'3' => 'mis_order_types',
								),
						),
				),
				'sortname' => 'typeid',
				'sortnum' => '13',
				'issearch' => '',
				'searchField' => 'crm_sale_cost_form.typeid',
				'table' => 'mis_order_types',
				'field' => 'id',
				'conditions' => 'type=13 and status=1',
				'type' => 'group',
				'isallsearch' => '',
				'searchsortnum' => '13',
		),
		'13' => array(
				'name' => 'ptmptid',
				'showname' => '流程选择',
				'shows' => '0',
				'widths' => '',
				'sorts' => '0',
				'models' => 'ProcessInfo',
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
										'3' => 'process_info',
								),
						),
				),
				'sortname' => 'ptmptid',
				'sortnum' => '14',
				'issearch' => '',
				'searchField' => 'crm_sale_cost_form.ptmptid',
				'table' => '',
				'field' => '',
				'conditions' => '',
				'type' => 'text',
				'isallsearch' => '',
				'searchsortnum' => '14',
		),
		'14' => array(
				'name' => 'auditState',
				'showname' => '审核状态',
				'shows' => '1',
				'widths' => '',
				'sorts' => '0',
				'models' => '',
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
				'sortname' => 'auditState',
				'sortnum' => '15',
				'issearch' => '',
				'searchField' => 'crm_sale_cost_form.auditState',
				'table' => '',
				'field' => '',
				'conditions' => '',
				'type' => 'text',
				'isallsearch' => '',
				'searchsortnum' => '15',
		),
		'15' => array(
				'name' => 'remark',
				'showname' => '申请原因',
				'shows' => '0',
				'widths' => '',
				'sorts' => '0',
				'models' => '',
				'sortname' => 'remark',
				'sortnum' => '16',
				'issearch' => '',
				'searchField' => 'crm_sale_cost_form.remark',
				'table' => '',
				'field' => '',
				'conditions' => '',
				'type' => 'text',
				'isallsearch' => '',
				'searchsortnum' => '16',
		),
		'16' => array(
				'name' => 'action',
				'showname' => '操作',
				'shows' => '1',
				'widths' => '',
				'sorts' => '0',
				'models' => '',
				'sortname' => 'status',
				'sortnum' => '18',
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
										'5' => 'navTab',
										'6' => '销售费用',
								),
						),
						'1' => array(
								'0' => array(
										'0' => '#status#',
								),
						),
				),
		),
);

?>