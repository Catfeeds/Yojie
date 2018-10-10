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
		'issearch' => '0',
		'searchField' => '',
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
		'name' => 'code',
		'showname' => '客户代码',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'code',
		'sortnum' => '2',
		'issearch' => '1',
		'searchField' => 'mis_sales_customer.code',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '1',
		'status' => '1',
		'helpvalue' => '',
	),
	'2' => array(
		'name' => 'enterprisename',
		'showname' => '客户名称',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'enterprisename',
		'sortnum' => '3',
		'issearch' => '1',
		'searchField' => 'mis_sales_customer.enterprisename',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '2',
		'status' => '1',
		'helpvalue' => '',
	),
	'20' => array(
		'name' => 'intype',
		'showname' => '所属行业',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'intype',
		'sortnum' => '4',
		'issearch' => '1',
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
					'3' => 'MisSalesCustomerIndustry',
				),
			),
		),
		'searchField' => 'mis_sales_customer.intype',
		'table' => 'mis_sales_customer_industry',
		'field' => 'id',
		'conditions' => '',
		'type' => 'group',
		'isallsearch' => '0',
		'searchsortnum' => '2',
		'status' => '1',
		'helpvalue' => '',
	),
	'12' => array(
		'name' => 'county',
		'showname' => '所属区县',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'sname',
		'sortnum' => '5',
		'issearch' => '0',
		'searchField' => 'mis_sales_customer.county',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
	),
	'3' => array(
		'name' => 'typeid',
		'showname' => '客户类型',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'typeid',
		'sortnum' => '6',
		'issearch' => '0',
		'searchField' => 'mis_sales_customer.typeid',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'select|customertype',
		'isallsearch' => '0',
		'searchsortnum' => '3',
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
		'status' => '1',
		'helpvalue' => '',
	),
	'22' => array(
		'name' => 'needmoney',
		'showname' => '需求金额',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'needmoney',
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
		'sortnum' => '7',
		'issearch' => '0',
		'searchField' => 'mis_sales_customer.needmoney',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
	),
	'4' => array(
		'name' => 'registertime',
		'showname' => '注册时间',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'registertime',
		'sortnum' => '8',
		'issearch' => '1',
		'searchField' => 'mis_sales_customer.registertime',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'time',
		'isallsearch' => '1',
		'searchsortnum' => '4',
		'status' => '1',
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
		'helpvalue' => '',
	),
	'8' => array(
		'name' => 'registermoney',
		'showname' => '注册金额',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'registermoney',
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
		'sortnum' => '9',
		'issearch' => '0',
		'searchField' => 'mis_sales_customer.registermoney',
		'table' => 'user',
		'field' => 'id',
		'conditions' => '',
		'type' => 'db',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
	),
	'5' => array(
		'name' => 'deptname',
		'showname' => '经办部门',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'deptname',
		'sortnum' => '10',
		'issearch' => '0',
		'searchField' => 'mis_sales_customer.deptname',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
	),
	'16' => array(
		'name' => 'username',
		'showname' => '经办人',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'username',
		'sortnum' => '11',
		'issearch' => '0',
		'searchField' => 'mis_sales_customer.username',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
	),
	'17' => array(
		'name' => 'servercompany',
		'showname' => '最终服务机构',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'servercompany',
		'sortnum' => '12',
		'issearch' => '0',
		'searchField' => 'mis_sales_customer.servercompany',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
	),
	'18' => array(
		'name' => 'lendamount',
		'showname' => '最终放款金额',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'lendamount',
		'sortnum' => '13',
		'issearch' => '0',
		'searchField' => 'mis_sales_customer.lendamount',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
	),
	'9' => array(
		'name' => 'staffnum',
		'showname' => '企业职工数',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'staffnum',
		'sortnum' => '14',
		'issearch' => '0',
		'searchField' => 'mis_sales_customer.staffnum',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
	),
	'14' => array(
		'name' => 'enterpriseaddress',
		'showname' => '企业地址',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'enterpriseaddress',
		'sortnum' => '15',
		'issearch' => '0',
		'searchField' => 'mis_sales_customer.enterpriseaddress',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
	),
	'15' => array(
		'name' => 'clientsource',
		'showname' => '客户来源',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'clientsource',
		'sortnum' => '16',
		'issearch' => '0',
		'searchField' => 'mis_sales_customer.clientsource',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
	),
	'37' => array(
		'name' => 'lossstatus',
		'showname' => '客户状态',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'lossstatus',
		'sortnum' => '17',
		'issearch' => '1',
		'searchField' => 'mis_sales_customer.lossstatus',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'select|customervitalityid',
		'isallsearch' => '0',
		'searchsortnum' => '5',
		'status' => '1',
		'func' => array(
			'0' => array(
				'0' => 'getSelectByName',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => 'customervitalityid',
					'1' => '###',
				),
			),
		),
		'helpvalue' => '',
	),
	'10' => array(
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
					'6' => '客户信息',
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
	'38' => array(
		'name' => 'losscause',
		'showname' => '流失原因',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'losscause',
		'sortnum' => '19',
		'issearch' => '0',
		'searchField' => 'mis_sales_customer.losscause',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'helpvalue' => '',
	),
	'26' => array(
		'name' => 'invoicid',
		'showname' => '',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'invoicid',
		'sortnum' => '27',
		'issearch' => '0',
		'searchField' => 'mis_sales_customer.invoicid',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '-1',
		'helpvalue' => '',
	),
);

?>