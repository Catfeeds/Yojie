<?php 
/**
 * @Title: Config
 * @Package package_name
 * @Description: todo(动态表单_配置文件-data)
 * @author 管理员
 * @company 重庆特米洛科技有限公司
 * @copyright 本文件归属于重庆特米洛科技有限公司
 * @date 2018-09-29 16:14:30
 * @version V1.0
*/
return array(
	'id' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'id',
		'type' => 'int(11)',
		'nullable' => 'NO',
		'default' => NULL,
		'primary' => 'PRI',
		'autoinc' => 'auto_increment',
		'comment' => 'ID',
	),
	'content' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'content',
		'type' => 'longtext',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '项目描述',
	),
	'auth' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'auth',
		'type' => 'varchar(30)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '开发人员',
	),
	'bindid' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'bindid',
		'type' => 'varchar(100)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '绑定id',
	),
	'orderno' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'orderno',
		'type' => 'varchar(100)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '编号',
	),
	'status' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'status',
		'type' => 'tinyint(1)',
		'nullable' => 'YES',
		'default' => '1',
		'primary' => '',
		'autoinc' => '',
		'comment' => '状态',
	),
	'companyid' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'companyid',
		'type' => 'int(10)',
		'nullable' => 'YES',
		'default' => '0',
		'primary' => '',
		'autoinc' => '',
		'comment' => '公司ID',
	),
	'createid' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'createid',
		'type' => 'int(10)',
		'nullable' => 'YES',
		'default' => '0',
		'primary' => '',
		'autoinc' => '',
		'comment' => '创建人ID',
	),
	'createtime' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'createtime',
		'type' => 'int(11)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '创建时间',
	),
	'updateid' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'updateid',
		'type' => 'int(10)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '修改人ID',
	),
	'updatetime' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'updatetime',
		'type' => 'int(11)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '修改时间',
	),
	'operateid' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'operateid',
		'type' => 'int(1)',
		'nullable' => 'NO',
		'default' => '0',
		'primary' => '',
		'autoinc' => '',
		'comment' => '是否确认',
	),
	'departmentid' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'departmentid',
		'type' => 'int(10)',
		'nullable' => 'YES',
		'default' => '0',
		'primary' => '',
		'autoinc' => '',
		'comment' => '部门ID',
	),
	'projectid' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'projectid',
		'type' => 'int(10)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '项目ID',
	),
	'projectworkid' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'projectworkid',
		'type' => 'int(10)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '任务ID',
	),
	'sysdutyid' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'sysdutyid',
		'type' => 'int(10)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '职级ID',
	),
	'relationmodelname' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'relationmodelname',
		'type' => 'varchar(100)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '关系型关联model',
	),
	'auditUser' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'auditUser',
		'type' => 'varchar(200)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '提醒人组合',
	),
	'ptmptid' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'ptmptid',
		'type' => 'int(10)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '固定流程ID',
	),
	'flowid' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'flowid',
		'type' => 'int(10)',
		'nullable' => 'YES',
		'default' => '0',
		'primary' => '',
		'autoinc' => '',
		'comment' => '自定义流程ID',
	),
	'ostatus' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'ostatus',
		'type' => 'varchar(100)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '当前审核节点',
	),
	'auditState' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'auditState',
		'type' => 'tinyint(1)',
		'nullable' => 'YES',
		'default' => '0',
		'primary' => '',
		'autoinc' => '',
		'comment' => '当前审核状态',
	),
	'curAuditUser' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'curAuditUser',
		'type' => 'varchar(300)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '当前可审核人清单',
	),
	'curNodeUser' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'curNodeUser',
		'type' => 'varchar(300)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '当前待审核人清单',
	),
	'alreadyAuditUser' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'alreadyAuditUser',
		'type' => 'varchar(500)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '当前已审核人',
	),
	'alreadyauditnode' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'alreadyauditnode',
		'type' => 'int(11)',
		'nullable' => 'YES',
		'default' => '0',
		'primary' => '',
		'autoinc' => '',
		'comment' => '终审时间',
	),
	'allnode' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'allnode',
		'type' => 'varchar(100)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '所有流程节点',
	),
	'informpersonid' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'informpersonid',
		'type' => 'varchar(500)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '节点知道会人',
	),
	'parentid' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'parentid',
		'type' => 'int(10)',
		'nullable' => 'YES',
		'default' => '0',
		'primary' => '',
		'autoinc' => '',
		'comment' => '父类ID',
	),
	'name' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'name',
		'type' => 'varchar(50)',
		'nullable' => 'YES',
		'default' => '0',
		'primary' => '',
		'autoinc' => '',
		'comment' => '名称',
	),
	'lookup7' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'lookup7',
		'type' => 'varchar(11)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => 'lookup组件 _7',
	),
	'areainfo8' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'areainfo8',
		'type' => 'varchar(200)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '地址组件：_8',
	),
	'date9' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'date9',
		'type' => 'int(11)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '日期组件_9',
	),
	'date10' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'date10',
		'type' => 'int(11)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '日期组件_10',
	),
	'text11' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'text11',
		'type' => 'varchar(11)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '短文本框_11',
	),
	'select13' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'select13',
		'type' => 'varchar(11)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '下拉框_13',
	),
	'uploadpic14' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'uploadpic14',
		'type' => 'varchar(11)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '图片上传组件_14',
	),
	'areainfomap16' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'areainfomap16',
		'type' => 'varchar(200)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '新地图组件：_16',
	),
	'areainfomap15' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'areainfomap15',
		'type' => 'varchar(200)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '新地图组件：_15',
	),
	'areainfo15' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'areainfo15',
		'type' => 'varchar(200)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '地址组件：_15',
	),
	'areainfomap17' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'areainfomap17',
		'type' => 'varchar(200)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '新地图组件：_17',
	),
	'areainfo18' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'areainfo18',
		'type' => 'varchar(200)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '地址组件：_18',
	),
	'areainfomap7' => array(
		'tablename' => 'mis_auto_oxqxg',
		'name' => 'areainfomap7',
		'type' => 'varchar(200)',
		'nullable' => 'YES',
		'default' => NULL,
		'primary' => '',
		'autoinc' => '',
		'comment' => '新地图组件：_7',
	),
);

?>