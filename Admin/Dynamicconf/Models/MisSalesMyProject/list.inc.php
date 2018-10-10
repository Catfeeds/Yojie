<?php 
return array(
	'orderno' => array(
		'name' => 'orderno',
		'showname' => '编号',
		'widths' => '300',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'orderno',
		'sortnum' => '1',
		'shows' => '1',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => '',
		'fieldcategory' => 'text',
		'searchField' => 'mis_auto_kimpu.orderno',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '0',
		'table' => 'mis_auto_kimpu',
		'field' => 'orderno',
		'helpvalue' => '',
	),
	'name' => array(
		'name' => 'name',
		'showname' => '项目名称',
		'widths' => '300',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'name',
		'sortnum' => '2',
		'shows' => '1',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'text',
		'searchField' => 'mis_auto_kimpu.name',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '1',
		'table' => 'mis_auto_kimpu',
		'field' => 'name',
		'helpvalue' => '',
	),
	'canzhaoyewleix' => array(
		'name' => 'canzhaoyewleix',
		'showname' => '参照项目业务类型',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'canzhaoyewleix',
		'sortnum' => '3',
		'shows' => '0',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'select',
		'searchField' => 'mis_auto_kimpu.canzhaoyewleix',
		'conditions' => 'outlinelevel = 1',
		'type' => 'db',
		'table' => 'mis_system_flow_type',
		'field' => 'name',
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
					'1' => 'orderno',
					'2' => 'name',
					'3' => 'mis_system_flow_type',
					'4' => 'outlinelevel',
					'5' => '1',
				),
			),
		),
	),
	'typeid' => array(
		'name' => 'typeid',
		'showname' => '业务类型',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'typeid',
		'sortnum' => '4',
		'shows' => '1',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'select',
		'searchField' => 'mis_auto_kimpu.typeid',
		'conditions' => 'outlinelevel = 1',
		'type' => 'db',
		'table' => 'mis_system_flow_type',
		'field' => 'name',
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
					'1' => 'orderno',
					'2' => 'name',
					'3' => 'mis_system_flow_type',
					'4' => 'outlinelevel',
					'5' => '1',
				),
			),
		),
	),
	'zt' => array(
		'name' => 'zt',
		'showname' => '主体',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'zt',
		'sortnum' => '5',
		'shows' => '1',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'select',
		'searchField' => 'mis_auto_kimpu.zt',
		'conditions' => '',
		'type' => 'db',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'orderno',
					'2' => 'name',
					'3' => 'mis_sale_client_type',
				),
			),
		),
		'table' => 'mis_sale_client_type',
		'field' => 'name',
		'issearch' => '1',
		'isallsearch' => '0',
		'searchsortnum' => '3',
		'helpvalue' => '',
	),
	'hy' => array(
		'name' => 'hy',
		'showname' => '细分品类',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'hy',
		'sortnum' => '7',
		'shows' => '0',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'select',
		'searchField' => 'mis_auto_kimpu.hy',
		'conditions' => '',
		'type' => 'db',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'orderno',
					'2' => 'name',
					'3' => 'mis_sale_profession',
				),
			),
		),
		'table' => 'mis_sale_profession',
		'field' => 'name',
		'issearch' => '1',
		'isallsearch' => '0',
		'searchsortnum' => '4',
		'helpvalue' => '',
	),
	'cyl' => array(
		'name' => 'cyl',
		'showname' => '行业',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'cyl',
		'sortnum' => '8',
		'shows' => '0',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'select',
		'searchField' => 'mis_auto_kimpu.cyl',
		'conditions' => '',
		'type' => 'db',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'orderno',
					'2' => 'name',
					'3' => 'mis_sale_industry',
				),
			),
		),
		'table' => 'mis_sale_industry',
		'field' => 'name',
		'issearch' => '1',
		'isallsearch' => '0',
		'searchsortnum' => '5',
		'helpvalue' => '',
	),
	'customerid' => array(
		'name' => 'customerid',
		'showname' => '客户名称',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'customerid',
		'sortnum' => '9',
		'shows' => '0',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'lookup',
		'searchField' => 'mis_auto_kimpu.customerid',
		'conditions' => '',
		'type' => 'group2',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'orderno',
					'2' => 'kehumingchen',
					'3' => 'MisAutoCbj',
				),
			),
		),
		'table' => 'MisAutoCbj',
		'field' => 'kehumingchen',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '6',
		'helpvalue' => '',
	),
	'sjid' => array(
		'name' => 'sjid',
		'showname' => '商机编号',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'sjid',
		'sortnum' => '10',
		'shows' => '0',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'lookup',
		'searchField' => 'mis_auto_kimpu.sjid',
		'conditions' => '',
		'type' => 'group2',
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
					'3' => '',
				),
			),
		),
		'table' => '',
		'field' => 'id',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '8',
		'helpvalue' => '',
	),
	'sjuserid' => array(
		'name' => 'sjuserid',
		'showname' => '受理单号',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'sjuserid',
		'sortnum' => '11',
		'shows' => '0',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'text',
		'searchField' => 'mis_auto_kimpu.sjuserid',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '9',
		'table' => 'mis_auto_kimpu',
		'field' => 'sjuserid',
		'helpvalue' => '',
	),
	'canzhaoprojectcode' => array(
		'name' => 'canzhaoprojectcode',
		'showname' => '关联项目编码',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'canzhaoprojectcode',
		'sortnum' => '12',
		'shows' => '0',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'text',
		'searchField' => 'mis_auto_kimpu.canzhaoprojectcode',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '10',
		'table' => 'mis_auto_kimpu',
		'field' => 'canzhaoprojectcode',
		'helpvalue' => '',
	),
	'projectcode' => array(
		'name' => 'projectcode',
		'showname' => '咨询项目编码',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'projectcode',
		'sortnum' => '13',
		'shows' => '0',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'text',
		'searchField' => 'mis_auto_kimpu.projectcode',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '10',
		'table' => 'mis_auto_kimpu',
		'field' => 'projectcode',
		'helpvalue' => '',
	),
	'projectname' => array(
		'name' => 'projectname',
		'showname' => '咨询项目名称',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'projectname',
		'sortnum' => '14',
		'shows' => '0',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'text',
		'searchField' => 'mis_auto_kimpu.projectname',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '11',
		'table' => 'mis_auto_kimpu',
		'field' => 'projectname',
		'helpvalue' => '',
	),
	'zd' => array(
		'name' => 'zd',
		'showname' => '主调',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'zd',
		'sortnum' => '15',
		'shows' => '1',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'int',
		'fieldcategory' => 'lookup',
		'searchField' => 'mis_auto_kimpu.zd',
		'conditions' => '',
		'type' => 'group2',
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
					'3' => 'user',
				),
			),
		),
		'table' => '',
		'field' => 'id',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '13',
		'helpvalue' => '',
	),
	'fengxiandj' => array(
		'name' => 'fengxiandj',
		'showname' => '风险等级',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'fengxiandj',
		'sortnum' => '11',
		'shows' => '0',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'methods' => '',
		'relation' => '',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'select',
		'searchField' => 'mis_auto_qqpuk.fengxiandj',
		'conditions' => '',
		'type' => 'group',
		'validate' => NULL,
		'unique' => '0',
		'required' => '1',
		'transform' => '1',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => '',
					'2' => '',
					'3' => 'mis_auto_dwodg',
				),
			),
		),
		'table' => 'mis_auto_dwodg',
		'field' => '',
		'unfunc' => array(
			'0' => array(
				'0' => 'ungetFieldBy',
			),
		),
		'unfuncdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => '',
					'2' => '',
					'3' => 'mis_auto_dwodg',
				),
			),
		),
		'issearch' => '1',
		'isallsearch' => '0',
		'searchsortnum' => '11',
	),
	'zddeptid' => array(
		'name' => 'zddeptid',
		'showname' => '主调部门ID',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'zddeptid',
		'sortnum' => '16',
		'shows' => '0',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'int',
		'fieldcategory' => 'text',
		'searchField' => 'mis_auto_kimpu.zddeptid',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '14',
		'table' => 'mis_auto_kimpu',
		'field' => 'zddeptid',
		'helpvalue' => '',
	),
	'zddeptname' => array(
		'name' => 'zddeptname',
		'showname' => '主调部门',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'zddeptname',
		'sortnum' => '17',
		'shows' => '1',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'text',
		'searchField' => 'mis_auto_kimpu.zddeptname',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '15',
		'table' => 'mis_auto_kimpu',
		'field' => 'zddeptname',
		'helpvalue' => '',
	),
	'fd' => array(
		'name' => 'fd',
		'showname' => '辅调',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'fd',
		'sortnum' => '18',
		'shows' => '0',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'int',
		'fieldcategory' => 'lookup',
		'searchField' => 'mis_auto_kimpu.fd',
		'conditions' => '',
		'type' => 'group2',
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
					'3' => '',
				),
			),
		),
		'table' => '',
		'field' => 'id',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '16',
		'helpvalue' => '',
	),
	'shenqingqixian' => array(
		'name' => 'shenqingqixian',
		'showname' => '申请期限',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'shenqingqixian',
		'sortnum' => '19',
		'shows' => '1',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'int',
		'fieldcategory' => 'text',
		'searchField' => 'mis_auto_kimpu.shenqingqixian',
		'conditions' => '',
		'type' => 'text',
		'func' => array(
			'0' => array(
				'0' => 'unitExchange',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'month',
					'2' => 'month',
					'3' => '3',
				),
			),
		),
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '17',
		'table' => 'mis_auto_kimpu',
		'field' => 'shenqingqixian',
		'helpvalue' => '',
	),
	'shenqingjine' => array(
		'name' => 'shenqingjine',
		'showname' => '申请金额',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'shenqingjine',
		'sortnum' => '20',
		'shows' => '1',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'decimal',
		'fieldcategory' => 'text',
		'searchField' => 'mis_auto_kimpu.shenqingjine',
		'conditions' => '',
		'type' => 'text',
		'func' => array(
			'0' => array(
				'0' => 'unitExchange',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'yuan',
					'2' => 'wan',
					'3' => '3',
				),
			),
		),
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '18',
		'table' => 'mis_auto_kimpu',
		'field' => 'shenqingjine',
		'helpvalue' => '',
	),
	'daikuanyongtu' => array(
		'name' => 'daikuanyongtu',
		'showname' => '资金用途',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'daikuanyongtu',
		'sortnum' => '21',
		'shows' => '0',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'select',
		'searchField' => 'mis_auto_kimpu.daikuanyongtu',
		'conditions' => '',
		'type' => 'db',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'orderno',
					'2' => 'name',
					'3' => 'mis_auto_hgwtp',
				),
			),
		),
		'table' => 'mis_auto_hgwtp',
		'field' => 'name',
		'issearch' => '1',
		'isallsearch' => '0',
		'searchsortnum' => '19',
		'helpvalue' => '',
	),
	'rongzifangan' => array(
		'name' => 'rongzifangan',
		'showname' => '融资方案',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'rongzifangan',
		'sortnum' => '22',
		'shows' => '0',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'text',
		'fieldcategory' => 'textarea',
		'searchField' => 'mis_auto_kimpu.rongzifangan',
		'conditions' => '',
		'type' => 'textarea',
		'ischosice' => '1',
		'table' => 'mis_auto_kimpu',
		'field' => 'rongzifangan',
		'helpvalue' => '',
	),
	'action' => array(
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
		'sortnum' => '23',
		'table' => NULL,
		'field' => NULL,
		'searchField' => '.',
		'helpvalue' => '',
		'status' => '1',
		'rules' => '0',
		'message' => '0',
	),
	'zhutileixing' => array(
		'name' => 'zhutileixing',
		'showname' => '主体类型',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'zhutileixing',
		'sortnum' => '24',
		'shows' => '0',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'select',
		'searchField' => 'mis_auto_banmo.zhutileixing',
		'conditions' => '',
		'type' => 'db',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'orderno',
					'2' => 'name',
					'3' => 'mis_auto_xalsb',
				),
			),
		),
		'table' => 'mis_auto_xalsb',
		'field' => 'name',
		'issearch' => '1',
		'isallsearch' => '0',
		'searchsortnum' => '25',
		'helpvalue' => '',
	),
	'zhutizhonglei' => array(
		'name' => 'zhutizhonglei',
		'showname' => '主体种类',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'zhutizhonglei',
		'sortnum' => '25',
		'shows' => '0',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'select',
		'searchField' => 'mis_auto_banmo.zhutizhonglei',
		'conditions' => '',
		'type' => 'db',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'orderno',
					'2' => 'name',
					'3' => 'mis_auto_bnngf',
				),
			),
		),
		'table' => 'mis_auto_bnngf',
		'field' => 'name',
		'issearch' => '1',
		'isallsearch' => '0',
		'searchsortnum' => '26',
		'helpvalue' => '',
	),
	'xiangmuleixing' => array(
		'name' => 'xiangmuleixing',
		'showname' => '项目类型',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'xiangmuleixing',
		'sortnum' => '26',
		'shows' => '0',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'methods' => '',
		'relation' => '',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'select',
		'searchField' => 'mis_auto_banmo.xiangmuleixing',
		'conditions' => '',
		'type' => 'db',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'orderno',
					'2' => 'name',
					'3' => 'mis_auto_ocqwl',
				),
			),
		),
		'table' => 'mis_auto_ocqwl',
		'field' => 'name',
		'issearch' => '1',
		'isallsearch' => '0',
		'searchsortnum' => '27',
	),
);

?>