			<?php
				/**
				 * @Title: MisSystemReportljmkAction
				 * @Package package_name
				 * @Description: todo(报表)";
				 * @author 汤文志
				 * @company 重庆特米洛科技有限公司";
				 * @copyright 本文件归属于重庆特米洛科技有限公司";
				 * @date 2015-07-20 17:42:12
				 * @version V1.08
				*/
				class MisSystemReportljmkAction extends AutoPanelAction{
					public function setting(){
					}
					public function getConfig(){
					}
					/**
					 * 显示当前面板内容
					 * @Title: showPanel
					 * @Description: todo(页面展示)
					 * @author 汤文志
					 * @date 2015-07-20 17:42:12
					 * @throws
					 */
					public function showPanel(){
						$submodel=M("mis_system_panel_desing_sub");
						$sublist = $submodel->where("id=69")->find();
						$this->assign("sublist",$sublist);
						$this->display("MisSystemPanelDesingMas:report");
					}
					public function index(){
						$this->showPanel();
					}
				}	
		