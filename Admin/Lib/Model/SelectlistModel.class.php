<?php
/**
 * @Title: file_name 
 * @Package package_name 
 * @Description: todo(selectlist配置文件) 
 * @author libo 
 * @company 重庆特米洛科技有限公司
 * @copyright 本文件归属于重庆特米洛科技有限公司
 * @date 2014-7-28 下午2:20:04 
 * @version V1.0
 */
class SelectlistModel extends CommonModel{
	protected $trueTableName = "mis_system_selectlist";
	
	protected $autoCheckFields = false;
	public function SetRules($data=array()){
		$filename=  $this->GetFile();
		$this->writeover($filename,"return ".$this->pw_var_export($data).";\n",true);
	}
	// 数据验证
	public $_validate = array (
			// 多字段组合验证
			array ('name','','数据有重复，请检查！',self::MUST_VALIDATE,'unique',	self::MODEL_BOTH )
	);
	public function GetRules($keyVal = '') {
		$value = '';
		if (file_exists($this->GetFile())) {
			$selectlist = require $this->GetFile();
			foreach ($selectlist as $key => $val) {
				if ($key) {
					if ($key==$keyVal) {
						$value = $val;
					}
				}
	
			}
		}
		return $value;
	}
	
	public  function GetFile(){
		return  DConfig_PATH."/System/selectlist.inc.php";
	}
}

?>