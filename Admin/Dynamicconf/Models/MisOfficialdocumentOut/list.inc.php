<?php 
return array(
	'0' => array(
		'name' => '序号',
		'showname' => 'id',
		'shows' => '0',
		'widths' => '30',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'id',
		'sortnum' => '1',
		'issearch' => '0',
		'searchField' => 'mis_officialdocument_out.id',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'isexport' => '0',
	),
	'1' => array(
		'name' => 'orderno',
		'showname' => '文号',
		'shows' => '1',
		'widths' => '',
		'sorts' => '1',
		'models' => '',
		'sortname' => 'orderno',
		'sortnum' => '2',
		'issearch' => '1',
		'searchField' => 'mis_officialdocument_out.orderno',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '1',
		'searchsortnum' => '1',
		'status' => '1',
		'isexport' => '1',
	),
	'9' => array(
		'name' => 'title',
		'showname' => '标题',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'title',
		'sortnum' => '3',
		'issearch' => '0',
		'searchField' => 'mis_officialdocument_out.title',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '6',
		'status' => '1',
		'isexport' => '0',
	),
	'2' => array(
		'name' => 'typeid',
		'showname' => '类型',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'typeid',
		'sortnum' => '4',
		'issearch' => '0',
		'searchField' => 'mis_officialdocument_type.typeid',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '2',
		'status' => '1',
		'isexport' => '0',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'mis_officialdocument_type',
				),
			),
		),
	),
	'5' => array(
		'name' => 'draftunit',
		'showname' => '拟稿单位',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'draftunit',
		'sortnum' => '5',
		'issearch' => '0',
		'searchField' => 'mis_officialdocument_out.draftunit',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '6',
		'status' => '1',
		'isexport' => '0',
	),
	'4' => array(
		'name' => 'priorities',
		'showname' => '缓急',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'priorities',
		'sortnum' => '6',
		'issearch' => '0',
		'searchField' => 'mis_officialdocument_out.priorities',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '5',
		'status' => '1',
		'isexport' => '0',
	),
	'3' => array(
		'name' => 'secrecylevel',
		'showname' => '密级',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'secrecylevel',
		'sortnum' => '7',
		'issearch' => '0',
		'searchField' => 'mis_officialdocument_out.secrecylevel',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '2',
		'status' => '1',
		'isexport' => '0',
	),
	'7' => array(
		'name' => 'nuclearemployeeId',
		'showname' => '核稿',
		'shows' => '1',
		'widths' => '',
		'sorts' => '1',
		'models' => '',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'MisHrBasicEmployee',
				),
			),
		),
		'sortname' => 'draftemployeeId',
		'sortnum' => '8',
		'issearch' => '1',
		'searchField' => 'mis_officialdocument_out.draftemployeeId',
		'table' => 'mis_hr_personnel_person_info',
		'field' => 'id',
		'conditions' => '',
		'type' => 'db',
		'isallsearch' => '1',
		'searchsortnum' => '3',
		'status' => '1',
		'isexport' => '1',
	),
	'6' => array(
		'name' => 'draftemployeeId',
		'showname' => '拟稿',
		'shows' => '1',
		'widths' => '',
		'sorts' => '1',
		'models' => '',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'MisHrBasicEmployee',
				),
			),
		),
		'sortname' => 'draftemployeeId',
		'sortnum' => '9',
		'issearch' => '1',
		'searchField' => 'mis_officialdocument_out.draftemployeeId',
		'table' => 'mis_hr_personnel_person_info',
		'field' => 'id',
		'conditions' => '',
		'type' => 'db',
		'isallsearch' => '1',
		'searchsortnum' => '3',
		'status' => '1',
		'isexport' => '1',
	),
	'8' => array(
		'name' => 'copynum',
		'showname' => '份数',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'copynum',
		'sortnum' => '10',
		'issearch' => '0',
		'searchField' => 'mis_officialdocument_out.copynum',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '6',
		'status' => '1',
		'isexport' => '0',
	),
	'10' => array(
		'name' => 'reportsend',
		'showname' => '报送',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'reportsend',
		'sortnum' => '11',
		'issearch' => '0',
		'searchField' => 'mis_officialdocument_out.reportsend',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '6',
		'status' => '1',
		'isexport' => '0',
	),
	'11' => array(
		'name' => 'copysend',
		'showname' => '抄送',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'copysend',
		'sortnum' => '12',
		'issearch' => '0',
		'searchField' => 'mis_officialdocument_out.copysend',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '6',
		'status' => '1',
		'isexport' => '0',
	),
	'12' => array(
		'name' => 'undertakeempId',
		'showname' => '承办人',
		'shows' => '1',
		'widths' => '',
		'sorts' => '1',
		'models' => '',
		'func' => array(
			'0' => array(
				'0' => 'getFieldBy',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'MisHrBasicEmployee',
				),
			),
		),
		'sortname' => 'undertakeempId',
		'sortnum' => '13',
		'issearch' => '1',
		'searchField' => 'mis_officialdocument_out.undertakeempId',
		'table' => 'mis_hr_personnel_person_info',
		'field' => 'id',
		'conditions' => '',
		'type' => 'db',
		'isallsearch' => '1',
		'searchsortnum' => '3',
		'status' => '1',
		'isexport' => '1',
	),
	'13' => array(
		'name' => 'phone',
		'showname' => '电话',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'phone',
		'sortnum' => '14',
		'issearch' => '0',
		'searchField' => 'mis_officialdocument_out.phone',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '6',
		'status' => '1',
		'isexport' => '0',
	),
	'14' => array(
		'name' => 'eamil',
		'showname' => '邮箱',
		'shows' => '0',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'eamil',
		'sortnum' => '15',
		'issearch' => '0',
		'searchField' => 'mis_officialdocument_out.eamil',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => 'text',
		'isallsearch' => '0',
		'searchsortnum' => '6',
		'status' => '1',
		'isexport' => '0',
	),
	'15' => array(
		'name' => 'auditState',
		'showname' => '状态',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'auditState',
		'sortnum' => '16',
		'searchField' => 'mis_officialdocument_out.auditState',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'issearch' => '0',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'isexport' => '0',
		'func' => array(
			'0' => array(
				'0' => 'excelTplselected',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => '-1:打回,0:新建,1:核稿中,2:核稿中,3:核稿完成',
				),
			),
		),
	),
	'16' => array(
		'name' => 'action',
		'showname' => '操作',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'status',
		'sortnum' => '17',
		'issearch' => '0',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'isallsearch' => '0',
		'searchsortnum' => '0',
		'status' => '1',
		'isexport' => '0',
		'func' => array(
			'1' => array(
				'0' => 'getStatus',
			),
		),
		'funcdata' => array(
			'1' => array(
				'0' => array(
					'0' => '#status#',
				),
			),
		),
	),
);

?>