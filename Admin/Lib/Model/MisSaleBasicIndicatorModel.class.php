<?php
/**
 * @Title: MisSaleIndicatorModel
 * @Package package_name
 * @Description: todo(动态表单_自动生成-指标)
 * @author 管理员
 * @company 重庆特米洛科技有限公司
 * @copyright 本文件归属于重庆特米洛科技有限公司
 * @date 2014-10-08 11:21:48
 * @version V1.0
*/
class MisSaleBasicIndicatorModel extends CommonModel {
	protected $trueTableName = 'mis_sale_basic_indicator';
	public $_auto =array(
		array("createid","getMemberId",self::MODEL_INSERT,"callback"),
		array("createid","getMemberId",self::MODEL_UPDATE,"callback"),
		array("createtime","time",self::MODEL_INSERT,"function"),
		array("updatetime","time",self::MODEL_UPDATE,"function"),
		array("companyid","getCompanyID",self::MODEL_INSERT,"callback"),
		array("departmentid","getDeptID",self::MODEL_INSERT,"callback"),
		array('sysdutyid','getDutyID',self::MODEL_INSERT,'callback'),
	);
}
?>