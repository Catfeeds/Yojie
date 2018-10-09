<?php
/**
 * @Title: MisAutoDesModel
 * @Package package_name
 * @Description: todo(动态表单_自动生成-项目管理)
 * @author 管理员
 * @company Aqo5Re65bSr5zG755m45t92YuQnZvNHbtRnL3d3d
 * @copyright 本文件归属于Aqo5Re65bSr5zG755m45t92YuQnZvNHbtRnL3d3d
 * @date 2018-09-18 13:39:22
 * @version V1.0
*/
class MisAutoDesModel extends MisAutoDesExtendModel {
	protected $trueTableName = 'mis_auto_hrstt';		
	// 字段权限过滤
	protected $_filter = array();
	
	public $_auto =array(
		array("createid","getMemberId",self::MODEL_INSERT,"callback"),
		array("updateid","getMemberId",self::MODEL_UPDATE,"callback"),
		array("createtime","time",self::MODEL_INSERT,"function"),
		array("updatetime","time",self::MODEL_UPDATE,"function"),
		array("companyid","getCompanyID",self::MODEL_INSERT,"callback"),
		array("departmentid","getDeptID",self::MODEL_INSERT,"callback"),
		array('sysdutyid','getDutyID',self::MODEL_INSERT,'callback'),
		array('informpersonid','implodFeld',self::MODEL_BOTH,'callback'),
		array('allnode','getActionName',self::MODEL_INSERT,'callback'),
		array('estimatedtime','strtotime',self::MODEL_BOTH,'function'),
		array('estimatedtime','setnull',self::MODEL_BOTH,'callback'),
		array('actualtime','strtotime',self::MODEL_BOTH,'function'),
		array('actualtime','setnull',self::MODEL_BOTH,'callback'),
	);
	public $_validate=array(
		array('orderno,status','','单号已经存在',self::MUST_VALIDATE,'unique',self::MODEL_BOTH),
		array('orderno','require','单号必须'),
	);
}
?>