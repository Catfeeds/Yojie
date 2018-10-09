<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\9\17 0017
 * Time: 下午 1:37
 */

class MobileListAction extends CommonAction
{
    /**
     * 自定义表名
     * @var $this->tableTitle
     */
    private $tableTitle ;
    /**
     * 真实表名
     * @var $this->tableName
     * 
     */
    private $tableName ;

    public function getList()
    {
        //获取需要查询的表名称
        $this->tableTitle = $_REQUEST['tabletitle'];

        //获取需要查询的字段信息
        $fields = implode(',',array_keys($this->getColumns($this->tableTitle)));
        $this->tableName = getFieldBy($this->tableTitle,'tabletitle','tablename','mis_dynamic_database_mas');
        $TableModel = M($this->tableName);
        $list = $TableModel->field($fields)->select();
        if (empty($list)) {
            ReturnData('未找到相应的数据','1002');
        } else {
            ReturnData('数据获取成功','200',$list,$this->getColumns($this->tableTitle));
        }

    }

    //获取需要查询的字段信息
    public function getColumns($modelname){
        //查询需要显示的表头字段
        $this->tableName = getFieldBy($modelname,'modelname','tablename','mis_dynamic_database_mas');
        $map['dbname'] = $this->tableName;
        $map['isviewshow'] = 1;
        $MisDynamicFormPropery = M('mis_dynamic_form_propery');

        $filed = $MisDynamicFormPropery->where($map)->getField('fieldname,title');
        return $filed;
    }

    //只是获取表头信息
    public function getViewColumns() {
        $this->tableTitle = $_REQUEST['tabletitle'];

        //查询需要显示的表头字段
        $this->tableName = getFieldBy($this->tableTitle,'tabletitle','tablename','mis_dynamic_database_mas');

        $map['dbname'] = $this->tableName;
        $map['isviewshow'] = 1;
        $MisDynamicFormPropery = M('mis_dynamic_form_propery');
        $filed = $MisDynamicFormPropery->where($map)->getField('fieldname,title');

        //表头信息 索引化
        $columns = array();
        foreach ($filed as $fkey => $fval){
            $columns[] =array(
                'COLUMN_NAME' => $fkey,
                'column_comment' => $fval
            );
        }

        if (empty($columns)) {
            ReturnData('未找到该表的表头信息','1002');
        } else {
            ReturnData('表头获取成功!','200',$columns);
        }
    }
    //获取该节点的需要查询的地址信息
    public function getAreaInfo() {
        $this->tableTitle = $_REQUEST['tabletitle'];
        $id = intval($_GET['id']);
        $this->tableName = getFieldBy($this->tableTitle,'tabletitle','tablename','mis_dynamic_database_mas');

        $tableModel = D($this->tableName);
        $sql = "select COLUMN_NAME,column_comment from INFORMATION_SCHEMA.Columns where table_name='{$this->tableName}' ";

        $columns = $tableModel->query($sql);

        foreach ($columns as $ckey => $cval){
            if (preg_match("/areainfo/i",$cval['COLUMN_NAME'])  ) {
                $field = $cval['COLUMN_NAME'];
            }
        }
        $areaInfo = $tableModel
                ->where('id='.$id)
                ->field($field)
                ->select();
        if (empty($areaInfo)) {
            ReturnData('未找到地址信息！',1002);
        } else {
            ReturnData('地址信息查询成功！',200,$areaInfo);
        }
    }

    //获取该节点的Index 页面内容
    public function index () {
        $nodeName = $_REQUEST['nodename'];//获取当前的节点名 [Action控制器名称]
        $ModelClass = D($nodeName);
        $field = $this->getColumns($nodeName); //获取需要查询的字段名称
        $list = $ModelClass
                ->field(implode(',',array_keys($field)))
                ->select();

        //**********地址信息查询  Start ********/
        $areamap['actionnname'] = $nodeName;
        $infoarray = M('mis_dynamic_form_areainfo')->where($areamap)->select();
        foreach ($list as $vkey=>$val) {
            //获取所有的字段名
            $keyArry = array_keys($val);
            foreach ($keyArry as $k=>$v) {
                foreach ($infoarray as $ik=>$iv){
                    //判读当前字段名是否等于当前附表数据的存储字段名，以及是否是同条数据
                    if ($v == $iv['fieldname'] & $val['id'] == $iv['dataid'] ) {
                        $list[$vkey][$v] = $iv['detail'];
                    }
                }
            }
        }
        //**********地址信息查询  END ********/
        if (empty($list)) {
            ReturnData('未找到数据！',1002);
        } else {
            ReturnData('数据查询成功！',200,$list);
        }

    }

    public function add () {
        if ($this->isPost()) {
            $data = $_REQUEST;
            $isaudit = getFieldBy($data['nodename'],'actionname','isaudit','mis_dynamic_form_manage');
            if ($isaudit) {

            } else {

            }

        } else {
            ReturnData('请求方式错误！',1002);
        }
    }
}