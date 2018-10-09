CREATE TABLE `#__user` (
  `id` smallint(10) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(64) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `zhname` varchar(20) DEFAULT NULL COMMENT '中文登录名',
  `sex` tinyint(1) DEFAULT '1',
  `duty_id` int(10) DEFAULT NULL,
  `dept_id` int(10) DEFAULT NULL,
  `role_id` int(10) DEFAULT NULL COMMENT '主角色',
  `auditduty` varchar(200) DEFAULT NULL COMMENT '审批职级',
  `attachdept` varchar(200) DEFAULT NULL COMMENT '附属部门',
  `attachrole` varchar(50) DEFAULT NULL COMMENT '所有角色',
  `orderdisplay` tinyint(1) DEFAULT '2' COMMENT '浏览权限,2个人,1部门,0所有',
  `knowledgedisplay` tinyint(1) DEFAULT NULL COMMENT '知识库等级浏览',
  `projectdisplay` tinyint(1) DEFAULT '0' COMMENT '项目浏览权限',
  `password` char(50) DEFAULT 'e10adc3949ba59abbe56e057f20f883e',
  `bind_account` varchar(50) DEFAULT NULL,
  `work_date` int(11) DEFAULT NULL,
  `last_login_time` int(11) DEFAULT '0',
  `last_login_ip` varchar(40) DEFAULT NULL,
  `login_count` mediumint(8) DEFAULT '0',
  `login_error_count` int(2) DEFAULT '0' COMMENT '错误登录次数',
  `verify` varchar(32) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `mobilestatus` int(1) DEFAULT '0' COMMENT '手机验证状态',
  `qq` varchar(20) DEFAULT NULL COMMENT 'qq',
  `email` varchar(50) DEFAULT NULL,
  `remindid` varchar(200) DEFAULT NULL COMMENT '提醒列表(逗号分隔)',
  `reportmethod` varchar(50) DEFAULT NULL COMMENT '首页默认报表(方法名)',
  `remark` varchar(255) DEFAULT NULL,
  `createtime` int(11) DEFAULT NULL,
  `createid` int(10) DEFAULT NULL,
  `operateid` int(10) DEFAULT '0' COMMENT '操作人ID',
  `updatetime` int(11) DEFAULT NULL,
  `updateid` int(10) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1' COMMENT '状态',
  `typeid` tinyint(2) DEFAULT '1',
  `info` text,
  `score` int(11) DEFAULT '0' COMMENT '积分',
  `expertmanage` tinyint(1) DEFAULT '0' COMMENT '专家系统[0无;1所有权限]',
  `employeid` int(10) DEFAULT NULL COMMENT '用户绑定员工ID',
  `ispur` int(1) DEFAULT '0' COMMENT '选为采购人员',
  `imgname` varchar(50) DEFAULT NULL COMMENT '签章图片名称',
  `channel` varchar(30) DEFAULT NULL COMMENT '频道名称',
  `isonline` tinyint(1) DEFAULT '0' COMMENT '是否在线',
  `sessionid` varchar(32) DEFAULT NULL COMMENT 'sessionID',
  `logintime` int(11) DEFAULT NULL COMMENT '登录时间（每次清空）',
  `leavetime` int(11) DEFAULT NULL COMMENT '离开时间',
  `companyid` int(10) DEFAULT NULL COMMENT 'company_id',
  `departmentid` int(10) DEFAULT '0' COMMENT '部门ID',
  `newmsg` tinyint(1) DEFAULT '0' COMMENT '是否有新消息',
  `newmsgtype` tinyint(1) DEFAULT '1' COMMENT '消息类型1待办事项2工作流',
  `isnewmsg` tinyint(1) DEFAULT '1' COMMENT '是否显示提醒信息1显示0不显示',
  `sort` int(4) DEFAULT NULL COMMENT '排序',
  `pinyin` varchar(20) DEFAULT '0' COMMENT 'pinyin',
  `projectdefset` int(1) DEFAULT '0' COMMENT '项目默认设置(1新建，2审核，3查阅)',
  `loginnumstatus` tinyint(1) DEFAULT '0' COMMENT '因登录次数而受限制，超过就改为1',
  `questionpwd` text COMMENT '找回密码问题（序列化）',
  `solidpath` varchar(100) DEFAULT NULL COMMENT '名人名言配图',
  `appdateils` text COMMENT '自行设置显示app （序列化）',
  `sysdutyid` int(10) DEFAULT '0' COMMENT 'èŒçº§ID',
  `relationmodelname` varchar(100) DEFAULT '0' COMMENT '关系型表单关联model',
  `anquandengji` int(11) DEFAULT NULL COMMENT '安全等级',
  `shangji` int(11) DEFAULT NULL COMMENT '上级',
  `usertype` varchar(255) DEFAULT '1' COMMENT '1用户 2专家 ',
  `txsj` varchar(30) DEFAULT NULL COMMENT '调休时间',
  `yongyouorderno` varchar(100) DEFAULT NULL,
  `zhpassword` varchar(255) DEFAULT '123456' COMMENT '未加密密码，给BI导入用户后登陆用',
  PRIMARY KEY (`id`),
  KEY `employeid` (`employeid`),
  KEY `dutyid` (`duty_id`),
  KEY `deptid` (`dept_id`),
  KEY `auditduty` (`auditduty`),
  KEY `IDX_user_id` (`id`),
  KEY `IDX_user_anquandengji` (`anquandengji`),
  KEY `IDX_user_employeid` (`employeid`),
  KEY `IDX_user_shangji` (`shangji`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=COMPACT;
