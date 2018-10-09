<?php
/**
 * @Title: MisAutoLxnModelView
 * @Package package_name
 * @Description: todo(动态表单_自动生成-项目内容)
 * @author 管理员
 * @company Aqo5Re65bSr5zG755m45t92YuQnZvNHbtRnL3d3d
 * @copyright 本文件归属于Aqo5Re65bSr5zG755m45t92YuQnZvNHbtRnL3d3d
 * @date 2018-09-29 16:14:30
 * @version V1.0
*/
class MisAutoLxnViewModel extends ViewModel {
			
	function __construct(){
		parent::__construct();
		$arr = getModelFilterByNodeSetting();
		if(is_array($arr)){
			$this->_filter = $arr;
		}
	}
	// 字段权限过滤
	protected $_filter = array();
		public $viewFields = array(
	'mis_auto_oxqxg'=>array('id','content','auth','lookup7','areainfo8','date9','date10','areainfo11','areainfo12','text11','select13','uploadpic14','areainfomap16','areainfomap15','areainfo15','areainfomap17','areainfo18','areainfomap7','bindid','orderno','status','companyid','createid','createtime','updateid','updatetime','operateid','departmentid','projectid','projectworkid','sysdutyid','relationmodelname','auditUser','ptmptid','flowid','ostatus','auditState','curAuditUser','curNodeUser','alreadyAuditUser','alreadyauditnode','allnode','informpersonid','parentid','name','_type'=>'LEFT'),
);
}
?>