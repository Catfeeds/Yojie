<?php 
return array(
	'orderno' => array(
		'name' => 'orderno',
		'showname' => '编号',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'orderno',
		'sortnum' => '2',
		'shows' => '1',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'methods' => '',
		'relation' => '',
		'fieldtype' => '',
		'fieldcategory' => 'text',
		'searchField' => 'mis_auto_oxqxg.orderno',
		'conditions' => '',
		'type' => 'text',
		'validate' => '',
		'unique' => '1',
		'required' => '0',
		'transform' => '0',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '2',
	),
	'auth' => array(
		'name' => 'auth',
		'showname' => '开发人员',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'auth',
		'sortnum' => '3',
		'shows' => '1',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'methods' => '',
		'relation' => '',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'text',
		'searchField' => 'mis_auto_oxqxg.auth',
		'conditions' => '',
		'type' => 'text',
		'validate' => '',
		'unique' => '0',
		'required' => '0',
		'transform' => '0',
		'issearch' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '3',
	),
	'select13' => array(
		'name' => 'select13',
		'showname' => '下拉框_13',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'select13',
		'sortnum' => '4',
		'shows' => '1',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'methods' => 'view',
		'relation' => 'orderno',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'select',
		'searchField' => 'mis_auto_oxqxg.select13',
		'conditions' => '',
		'type' => 'select',
		'validate' => NULL,
		'unique' => '0',
		'required' => '0',
		'transform' => '1',
		'func' => array(
			'0' => array(
				'0' => 'getSelectlistValue',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => '',
				),
			),
		),
		'unfunc' => array(
			'0' => array(
				'0' => 'ungetSelectlistValue',
			),
		),
		'unfuncdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => '',
				),
			),
		),
		'issearch' => '1',
		'isallsearch' => '0',
		'searchsortnum' => '4',
	),
	'areainfomap7' => array(
		'name' => 'areainfomap7',
		'showname' => '新地图组件：_7',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'areainfomap7',
		'sortnum' => '5',
		'shows' => '1',
		'status' => '1',
		'rules' => '1',
		'message' => '1',
		'isexport' => '1',
		'methods' => 'view',
		'relation' => 'orderno',
		'fieldtype' => 'varchar',
		'fieldcategory' => 'areainfomap',
		'searchField' => 'mis_auto_oxqxg.areainfomap7',
		'conditions' => '',
		'type' => 'areainfomap',
		'validate' => '',
		'unique' => '0',
		'required' => '0',
		'transform' => '0',
	),
	'createtime' => array(
		'name' => 'createtime',
		'showname' => '创建时间',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'createtime',
		'sortnum' => '11',
		'fieldtype' => 'date',
		'fieldcategory' => 'date',
		'searchField' => 'mis_auto_oxqxg.createtime',
		'conditions' => '',
		'type' => 'time',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '1',
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
		'helpvalue' => '',
		'transform' => '1',
		'unique' => '0',
		'validate' => '0',
		'required' => '0',
		'unfunc' => array(
			'0' => array(
				'0' => 'untranstime',
			),
		),
		'unfuncdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
				),
			),
		),
	),
);

?>