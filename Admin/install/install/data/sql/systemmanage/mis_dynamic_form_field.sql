CREATE TABLE `mis_dynamic_form_field` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `formid` int(11) NOT NULL,
  `fieldname` varchar(50) NOT NULL COMMENT '字段名称',
  `fieldtitle` varchar(100) NOT NULL COMMENT '字符中文名称',
  `defaultval` varchar(20) DEFAULT NULL COMMENT '默认值',
  `fieldtype` varchar(20) NOT NULL COMMENT '字段类型',
  `fieldonly` tinyint(1) NOT NULL DEFAULT '0',
  `options` text COMMENT '存在多项时的枚举值',
  `linktable` varchar(50) DEFAULT NULL COMMENT '数据源表名',
  `linkfield` varchar(20) DEFAULT NULL COMMENT '数据源值字段',
  `linkshowfield` varchar(20) DEFAULT NULL COMMENT '数据源显示字段',
  `fieldcheck` varchar(20) DEFAULT NULL COMMENT '字段检查类型',
  `companyid` int(10) DEFAULT NULL COMMENT 'company_id',
  `departmentid` int(10) DEFAULT '0' COMMENT '部门ID',
  `createid` int(10) DEFAULT NULL COMMENT 'create_id',
  `operateid` int(10) DEFAULT '0' COMMENT '操作人ID',
  `createtime` int(11) DEFAULT NULL COMMENT 'create_time',
  `updatetime` int(11) DEFAULT NULL COMMENT 'update_time',
  `updateid` int(10) DEFAULT NULL COMMENT 'update_id',
  `quicktag` int(10) DEFAULT '0' COMMENT '快捷添加',
  `sort` int(10) DEFAULT NULL COMMENT '备用动态布局页面排序',
  `tabletype` varchar(50) DEFAULT NULL COMMENT '组件类型',
  `tablelength` varchar(11) DEFAULT NULL COMMENT '生成字段数据长度',
  `if_searchlist` int(11) DEFAULT NULL COMMENT '是否局部搜索',
  `if_searchalllist` int(11) DEFAULT NULL COMMENT '是否全局搜索',
  `sysdutyid` int(10) DEFAULT '0' COMMENT 'èŒçº§ID',
  `relationmodelname` varchar(100) DEFAULT '0' COMMENT '关系型表单关联model',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=772 DEFAULT CHARSET=utf8;
