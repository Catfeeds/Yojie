<?php 
return array(
	'0' => array(
		'name' => 'id',
		'showname' => '编号',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'id',
		'sortnum' => '1',
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'issearch' => '',
		'isallsearch' => '',
		'searchsortnum' => '',
	),
	'1' => array(
		'name' => 'title',
		'showname' => '标题',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'code',
		'sortnum' => '2',
		'searchField' => '',
		'table' => '',
		'field' => 'title',
		'conditions' => '',
		'type' => '',
		'issearch' => '',
		'isallsearch' => '',
		'searchsortnum' => '',
	),
	'2' => array(
		'name' => 'createid',
		'showname' => '提问人',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'createid',
		'sortnum' => '3',
		'func' => array(
			'0' => array(
				'0' => 'getFieldby',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'User',
				),
			),
		),
		'searchField' => '',
		'table' => '',
		'field' => '',
		'conditions' => '',
		'type' => '',
		'issearch' => '',
		'isallsearch' => '',
		'searchsortnum' => '',
	),
	'3' => array(
		'name' => 'categoryid',
		'showname' => '分类名称',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'categoryid',
		'sortnum' => '4',
		'func' => array(
			'0' => array(
				'0' => 'getFieldby',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
					'1' => 'id',
					'2' => 'name',
					'3' => 'mis_expert_question_type',
				),
			),
		),
		'searchField' => '',
		'table' => '',
		'field' => 'categoryid',
		'conditions' => '',
		'type' => '',
		'issearch' => '',
		'isallsearch' => '',
		'searchsortnum' => '',
	),
	'4' => array(
		'name' => 'createtime',
		'showname' => '提问时间',
		'shows' => '1',
		'widths' => '',
		'sorts' => '0',
		'models' => '',
		'sortname' => 'createtime',
		'sortnum' => '5',
		'func' => array(
			'0' => array(
				'0' => 'timeDiff',
			),
		),
		'funcdata' => array(
			'0' => array(
				'0' => array(
					'0' => '###',
				),
			),
		),
		'searchField' => '',
		'table' => '',
		'field' => 'createtime',
		'conditions' => '',
		'type' => '',
		'issearch' => '',
		'isallsearch' => '',
		'searchsortnum' => '',
	),
);

?>