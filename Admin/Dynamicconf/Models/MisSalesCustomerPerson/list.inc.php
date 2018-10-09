<?php 
return array(
	'0' => array(
		'name' => 'name',
		'showname' => '姓名',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'name',
		'sortnum' => '1',
		'searchField' => 'mis_sales_customer_person.name',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '1',
		'helpvalue' => '',
	),
	'1' => array(
		'name' => 'typeid',
		'showname' => '客户类型',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'typeid',
		'sortnum' => '2',
		'searchField' => 'mis_sales_customer_person.typeid',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '0',
		'searchsortnum' => '2',
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
					'3' => 'mis_sales_customertype',
				),
			),
		),
	),
	'3' => array(
		'name' => 'address',
		'showname' => '所属区县',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'address',
		'sortnum' => '3',
		'searchField' => 'mis_sales_customer_person.address',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '0',
		'searchsortnum' => '3',
		'helpvalue' => '',
	),
	'8' => array(
		'name' => 'needmoney',
		'showname' => '需求金额',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'amount',
		'sortnum' => '4',
		'searchField' => 'mis_sales_customer_person.needmoney',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '0',
		'searchsortnum' => '4',
		'helpvalue' => '',
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
	'16' => array(
		'name' => 'deptname',
		'showname' => '经办部门',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'deptname',
		'sortnum' => '5',
		'searchField' => 'mis_sales_customer_person.deptname',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '0',
		'searchsortnum' => '5',
		'helpvalue' => '',
	),
	'17' => array(
		'name' => 'username',
		'showname' => '经办人员',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'username',
		'sortnum' => '6',
		'searchField' => 'mis_sales_customer_person.username',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '0',
		'searchsortnum' => '6',
		'helpvalue' => '',
	),
	'2' => array(
		'name' => 'phone',
		'showname' => '联系方式',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'phone',
		'sortnum' => '7',
		'searchField' => 'mis_sales_customer_person.phone',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '7',
		'helpvalue' => '',
	),
	'4' => array(
		'name' => 'job',
		'showname' => '职业',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'job',
		'sortnum' => '8',
		'searchField' => 'mis_sales_customer_person.job',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '8',
		'helpvalue' => '',
	),
	'5' => array(
		'name' => 'companyname',
		'showname' => '就职单位名称',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'companyname',
		'sortnum' => '9',
		'searchField' => 'mis_sales_customer_person.companyname',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '9',
		'helpvalue' => '',
	),
	'6' => array(
		'name' => 'income',
		'showname' => '月收入',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'income',
		'sortnum' => '10',
		'searchField' => 'mis_sales_customer_person.income',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '10',
		'helpvalue' => '',
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
	'7' => array(
		'name' => 'firstcontacttime',
		'showname' => '首次接触时间',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'firstcontacttime',
		'sortnum' => '11',
		'searchField' => 'mis_sales_customer_person.firstcontacttime',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'time',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '11',
		'helpvalue' => '',
		'func' => array(
			'0' => array(
				'0' => 'transtime',
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
	'9' => array(
		'name' => 'debt',
		'showname' => '个人负债情况',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'debt',
		'sortnum' => '12',
		'searchField' => 'mis_sales_customer_person.debt',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '12',
		'helpvalue' => '',
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
	'10' => array(
		'name' => 'assets',
		'showname' => '个人资产情况',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'assets',
		'sortnum' => '13',
		'searchField' => 'mis_sales_customer_person.assets',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '13',
		'helpvalue' => '',
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
	'11' => array(
		'name' => 'serverinfo',
		'showname' => '服务跟踪',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'serverinfo',
		'sortnum' => '14',
		'searchField' => 'mis_sales_customer_person.serverinfo',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '14',
		'helpvalue' => '',
		'func' => array(
			'0' => array(
				'0' => 'transtime',
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
	'12' => array(
		'name' => 'servercompany',
		'showname' => '最终服务机构',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'servercompany',
		'sortnum' => '15',
		'searchField' => 'mis_sales_customer_person.servercompany',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '15',
		'helpvalue' => '',
	),
	'15' => array(
		'name' => 'action',
		'showname' => '状态',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'status',
		'sortnum' => '18',
		'issearch' => '0',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
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
		'helpvalue' => '',
	),
	'13' => array(
		'name' => 'lendamount',
		'showname' => '放款额度（元）',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'lendamount',
		'sortnum' => '16',
		'searchField' => 'mis_sales_customer_person.lendamount',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '0',
		'searchsortnum' => '16',
		'helpvalue' => '',
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
	'14' => array(
		'name' => 'lendtime',
		'showname' => '放贷日期',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'lendtime',
		'sortnum' => '17',
		'searchField' => 'mis_sales_customer_person.lendtime',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '17',
		'helpvalue' => '',
		'func' => array(
			'0' => array(
				'0' => 'transtime',
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
);

?>