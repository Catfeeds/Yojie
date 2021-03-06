CREATE TABLE `user_dept_duty` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `userid` int(10) DEFAULT NULL COMMENT '用户ID',
  `deptid` int(10) DEFAULT NULL COMMENT '部门ID',
  `dutyid` int(10) DEFAULT NULL COMMENT '职级ID',
  `worktype` int(11) DEFAULT NULL COMMENT '岗位',
  `typeid` tinyint(1) DEFAULT '0' COMMENT '0为辅助职级1为主职级',
  `remark` varchar(200) DEFAULT NULL COMMENT '备注',
  `status` int(1) DEFAULT '1' COMMENT '状态',
  `employeid` int(10) DEFAULT NULL COMMENT '人事id',
  `companyid` int(10) DEFAULT '0' COMMENT '公司ID',
  `departmentid` int(10) DEFAULT '0' COMMENT '部门ID',
  `createid` int(10) DEFAULT NULL COMMENT '创建人',
  `createtime` int(11) DEFAULT NULL COMMENT '创建时间',
  `updateid` int(10) DEFAULT NULL COMMENT '修改人',
  `updatetime` int(11) DEFAULT NULL COMMENT '修改时间',
  `sysdutyid` int(10) DEFAULT '0' COMMENT 'èŒçº§ID',
  `relationmodelname` varchar(100) DEFAULT '0' COMMENT '关系型表单关联model',
  PRIMARY KEY (`id`),
  KEY `IDX_user_dept_duty_employeid` (`employeid`),
  KEY `IDX_user_dept_duty_companyid` (`companyid`),
  KEY `IDX_user_dept_duty_worktype` (`worktype`)
) ENGINE=InnoDB AUTO_INCREMENT=189 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;
