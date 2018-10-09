<?php 
return array(
	'0' => array(
		'name' => 'id',
		'showname' => '编号',
		'shows' => '1',
		'widths' => '20',
		'sorts' => '1',
		'models' => '',
		'sortname' => 'id',
		'sortnum' => '1',
		'issearch' => '',
		'isexport' => '1',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '',
		'searchsortnum' => '',
		'status' => '1',
		'sortsorder' => '1',
		'sortstype' => 'desc',
	),
	'1' => array(
		'name' => 'name',
		'showname' => '名称',
		'shows' => '1',
		'widths' => '180',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'name',
		'sortnum' => '2',
		'issearch' => '1',
		'isexport' => '1',
		'searchField' => 'rolegroup.name',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '2',
		'status' => '1',
		'sortsorder' => '0',
		'sortstype' => 'asc',
	),
	'2' => array(
		'name' => 'pid',
		'showname' => '上级组',
		'shows' => '0',
		'widths' => '180',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'pid',
		'func' => array(
			'0' => array(
				'0' => 'getGroupName',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
				),
			),
		),
		'sortnum' => '3',
		'issearch' => '',
		'isexport' => '1',
		'searchField' => 'role.pid',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '',
		'searchsortnum' => '3',
		'status' => '1',
		'sortsorder' => '0',
		'sortstype' => 'asc',
	),
	'3' => array(
		'name' => 'remark',
		'showname' => '备注',
		'shows' => '0',
		'widths' => '200',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'remark',
		'sortnum' => '4',
		'issearch' => '1',
		'isexport' => '1',
		'searchField' => 'rolegroup.remark',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '4',
		'status' => '1',
		'sortsorder' => '0',
		'sortstype' => 'asc',
	),
	'6' => array(
		'name' => 'companyid',
		'showname' => '所属公司',
		'shows' => '1',
		'widths' => '200',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'companyid',
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
					'3' => 'mis_system_company',
				),
			),
		),
		'sortnum' => '5',
		'issearch' => '0',
		'isexport' => '1',
		'searchField' => 'rolegroup.companyid',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '4',
		'status' => '1',
		'sortsorder' => '0',
		'sortstype' => 'asc',
	),
	'4' => array(
		'name' => 'status',
		'showname' => '状态',
		'shows' => '1',
		'widths' => '50',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'status',
		'func' => array(
			'0' => array(
				'0' => 'getStatus',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
				),
			),
		),
		'sortnum' => '6',
		'issearch' => '',
		'isexport' => '1',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '',
		'searchsortnum' => '',
		'status' => '1',
		'sortsorder' => '0',
		'sortstype' => 'asc',
	),
);

?>