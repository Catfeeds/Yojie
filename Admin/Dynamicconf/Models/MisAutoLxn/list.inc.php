<?php 
/**
 * @Title: Config
 * @Package package_name
 * @Description: todo(动态表单_配置文件-list.inc 配置文件)
 * @author 管理员
 * @company 重庆特米洛科技有限公司
 * @copyright 本文件归属于重庆特米洛科技有限公司
 * @date 2018-09-29 16:14:29
 * @version V1.0
*/
$original = array(
	'id' => array(
		'name' => 'id',
		'showname' => 'ID',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'status' => '1',
		'sortname' => 'id',
		'sortnum' => '0',
		'searchField' => 'mis_auto_oxqxg.id',
		'conditions' => '',
		'type' => 'text',
		'issearch' => '1',
		'message' => '1',
		'isallsearch' => '1',
		'searchsortnum' => '0',
	),
	'projectid' => array(
		'name' => 'projectid',
		'showname' => '项目ID',
		'rules' => '0',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'projectid',
		'sortnum' => '11',
		'searchField' => 'mis_auto_oxqxg.projectid',
		'transform' => '0',
		'unique' => '0',
		'validate' => '0',
		'required' => '0',
	),
	'createid' => array(
		'name' => 'createid',
		'rules' => '1',
		'showname' => '创建人',
		'shows' => '0',
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
		'sortname' => 'createid',
		'issearch' => '1',
		'table' => 'user',
		'sortnum' => '11',
		'searchField' => 'mis_auto_oxqxg.createid',
		'transform' => '1',
		'unique' => '0',
		'validate' => '0',
		'required' => '0',
		'unfunc' => array(
			'0' => array(
				'0' => 'ungetFieldBy',
			),
		),
		'unfuncdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'User',
				),
			),
		),
	),
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
		'sortnum' => '8',
		'transform' => '0',
		'unique' => '0',
		'validate' => '0',
		'required' => '0',
	),
	'operateid' => array(
		'name' => 'operateid',
		'showname' => '是否确认',
		'rules' => '1',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'func' => array(
			'0' => array(
				'0' => 'getSelectByName',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => 'operateidVal',
					'1' => '###',
				),
			),
		),
		'sortname' => 'operateid',
		'sortnum' => '9',
		'searchField' => 'mis_auto_oxqxg.operateid',
		'transform' => '0',
		'unique' => '0',
		'validate' => '0',
		'required' => '0',
	),
	'companyid' => array(
		'name' => 'companyid',
		'showname' => '公司',
		'shows' => '0',
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
		'sortnum' => '10',
		'issearch' => '1',
		'table' => 'mis_system_company',
		'searchField' => 'mis_auto_oxqxg.companyid',
		'transform' => '1',
		'unique' => '0',
		'validate' => '0',
		'required' => '0',
		'unfunc' => array(
			'0' => array(
				'0' => 'ungetFieldBy',
			),
		),
		'unfuncdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'MisSystemCompany',
				),
			),
		),
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

$extedsList = require 'listExtend.inc.php';
return array_merge($original , $extedsList);
?>