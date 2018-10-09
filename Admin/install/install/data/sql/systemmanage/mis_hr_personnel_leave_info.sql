CREATE TABLE `mis_hr_personnel_leave_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `orderno` varchar(20) DEFAULT NULL COMMENT '请假单编号',
  `typeid` int(10) DEFAULT NULL COMMENT '单据类型',
  `personid` int(10) DEFAULT '0' COMMENT '员工编号',
  `name` varchar(50) DEFAULT NULL COMMENT '员工姓名',
  `deptid` int(10) DEFAULT NULL COMMENT '员工部门编号',
  `deptname` varchar(50) DEFAULT NULL COMMENT '员工部门名称',
  `dutyid` int(10) DEFAULT NULL COMMENT '员工职级编号',
  `cname` varchar(50) DEFAULT NULL COMMENT '员工职级编号',
  `dutyname` varchar(100) DEFAULT NULL COMMENT '员工职务名称',
  `leavetype` int(10) DEFAULT NULL COMMENT '请假类型',
  `forleavetype` int(1) DEFAULT '1' COMMENT '1.正式自办 2.试用自办 3.代办正式 4.代办试用',
  `beginleavedate` int(11) DEFAULT NULL COMMENT '请假开始时间',
  `endleavedate` int(11) DEFAULT NULL COMMENT '请假结束时间',
  `hours` varchar(20) DEFAULT NULL COMMENT '请假时间',
  `days` int(5) DEFAULT NULL COMMENT '请假天数',
  `leaveagency` text COMMENT '委托事件和代理人',
  `remark` text COMMENT '请假原因',
  `ptmptid` int(10) DEFAULT NULL COMMENT '流程ID',
  `ostatus` varchar(100) DEFAULT NULL COMMENT '当前可审核流程节点清单',
  `auditState` tinyint(1) DEFAULT '0' COMMENT '待审核状态',
  `auditUser` varchar(500) DEFAULT NULL COMMENT '所有审核人清单',
  `curAuditUser` varchar(300) DEFAULT NULL COMMENT '当前可审核人清单',
  `alreadyAuditUser` varchar(500) DEFAULT NULL COMMENT '所有已审核人',
  `alreadyauditnode` varchar(200) DEFAULT '0' COMMENT '当前并行时已审核节点',
  `curNodeUser` varchar(300) DEFAULT NULL COMMENT '当前待审核人清单',
  `noderule` varchar(500) DEFAULT NULL COMMENT '所有节点规则',
  `noderuleinfo` varchar(500) DEFAULT NULL COMMENT '所有节点规则描述',
  `allnode` varchar(100) DEFAULT NULL COMMENT '所有流程节点ID',
  `createtime` int(11) DEFAULT NULL COMMENT '新增时间',
  `updatetime` int(11) DEFAULT NULL,
  `createid` int(10) DEFAULT NULL,
  `operateid` int(10) DEFAULT '0' COMMENT '操作人ID',
  `updateid` int(10) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `companyid` int(10) DEFAULT NULL COMMENT 'company_id',
  `departmentid` int(10) DEFAULT '0' COMMENT '部门ID',
  `isread` tinyint(1) DEFAULT '0' COMMENT '是否查阅提醒信息0否1是',
  `sysdutyid` int(10) DEFAULT '0' COMMENT 'èŒçº§ID',
  `relationmodelname` varchar(100) DEFAULT '0' COMMENT '关系型表单关联model',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC COMMENT='请假';
