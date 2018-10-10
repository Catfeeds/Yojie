<?php 
/**
 * @Title: Config
 * @Package package_name
 * @Description: todo(动态表单_配置文件-data)
 * @author 管理员
 * @company 重庆特米洛科技有限公司
 * @copyright 本文件归属于重庆特米洛科技有限公司
 * @date 2015-06-02 13:58:15
 * @version V1.0
*/
return array(
	'id' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'id',
		'type' => 'int(10)',
		'nullable' => 'NO',
		'default' => NULL,
		'primary' => 'PRI',
		'autoinc' => 'auto_increment',
		'comment' => 'ID',
	),
	'name' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'name',
		'type' => 'varchar(100)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '文件名',
	),
	'category' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'category',
		'type' => 'int(1)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '分类',
	),
	'type' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'type',
		'type' => 'int(1)',
		'nullable' => 'YES',
		'default' => '1',
		'primary' => '',
		'autoinc' => '',
		'comment' => '2记录;1文件夹;0文件',
	),
	'stype' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'stype',
		'type' => 'tinyint(1)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '',
	),
	'issystem' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'issystem',
		'type' => 'int(1)',
		'nullable' => 'YES',
		'default' => '0',
		'primary' => '',
		'autoinc' => '',
		'comment' => '是否为系统文件',
	),
	'uploadname' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'uploadname',
		'type' => 'varchar(100)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '别名',
	),
	'userid' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'userid',
		'type' => 'varchar(100)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '文件管理员ID',
	),
	'parentid' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'parentid',
		'type' => 'int(10)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '上级ID',
	),
	'remark' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'remark',
		'type' => 'text',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '备注',
	),
	'filepath' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'filepath',
		'type' => 'varchar(255)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '路径',
	),
	'createtime' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'createtime',
		'type' => 'int(11)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '创建时间',
	),
	'createid' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'createid',
		'type' => 'int(10)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '创建人',
	),
	'updatetime' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'updatetime',
		'type' => 'int(11)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '修改时间',
	),
	'updateid' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'updateid',
		'type' => 'int(10)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '修改人',
	),
	'status' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'status',
		'type' => 'int(1)',
		'nullable' => 'YES',
		'default' => '1',
		'primary' => '',
		'autoinc' => '',
		'comment' => '状态',
	),
	'companyid' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'companyid',
		'type' => 'int(10)',
		'nullable' => 'YES',
		'default' => '0',
		'primary' => '',
		'autoinc' => '',
		'comment' => '公司ID',
	),
	'departmentid' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'departmentid',
		'type' => 'int(10)',
		'nullable' => 'YES',
		'default' => '0',
		'primary' => '',
		'autoinc' => '',
		'comment' => '部门ID',
	),
	'sort' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'sort',
		'type' => 'int(5)',
		'nullable' => 'NO',
		'default' => '0',
		'primary' => '',
		'autoinc' => '',
		'comment' => '',
	),
	'sysdutyid' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'sysdutyid',
		'type' => 'int(10)',
		'nullable' => 'YES',
		'default' => '0',
		'primary' => '',
		'autoinc' => '',
		'comment' => 'èŒçº§ID',
	),
	'relationmodelname' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'relationmodelname',
		'type' => 'varchar(100)',
		'nullable' => 'YES',
		'default' => '0',
		'primary' => '',
		'autoinc' => '',
		'comment' => '关系型表单关联model',
	),
	'projectid' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'projectid',
		'type' => 'int(11)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '关联项目',
	),
	'attachedid' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'attachedid',
		'type' => 'int(11)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '附件id',
	),
	'orderno' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'orderno',
		'type' => 'varchar(255)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '文档编号',
	),
	'position' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'position',
		'type' => 'varchar(255)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '文档位置',
	),
	'page' => array(
		'tablename' => 'mis_file_manager',
		'name' => 'page',
		'type' => 'varchar(255)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '文档位置',
	),
);

?>