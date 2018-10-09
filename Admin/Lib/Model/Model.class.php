<?php
/**
 * @Title: Model
 * @Package package_name
 * @Description: todo(动态表单_自动生成-发吧开办费)
 * @author 管理员
 * @company Aqo5Re65bSr5zG755m45t92YuQnZvNHbtRnL3d3d
 * @copyright 本文件归属于Aqo5Re65bSr5zG755m45t92YuQnZvNHbtRnL3d3d
 * @date 2018-09-18 09:20:36
 * @version V1.0
*/
class Model extends ExtendModel {
	protected $trueTableName = '';		
	// 字段权限过滤
	protected $_filter = array();
	
	public $_auto =array(
		array('allnode','getActionName',self::MODEL_INSERT,'callback'),
	);
	public $_validate=array(
	);
}
?>