<?php


class TestAction extends CommonTestAction
{

    public function index()
    {

        if ($this->isGet()) {
            //获取字段中文名称
            $sql = "select COLUMN_NAME,column_comment from INFORMATION_SCHEMA.Columns where table_name='mis_hr_personnel_person_info' ";
            $data = D()->query($sql);

            //获取数据
            $list = D("MisHrPersonnelManagement")
                ->field('id,orderno,name,education,sex,deptid,worktype,dutylevelid,chinaid,phone,status')
                ->select();
//            dump($list);exit;
            if (empty($list)) {
                ReturnData('未找到任何信息！',0);
            }
            foreach ($list as $pk => $pv) {

                $pv['phone'] = substr_replace($pv['phone'],"****",3,4);
                $list[$pk]['id'] = intval($pv['id']);
                if ($pv['sex'] == 1) {

                    $list[$pk]['sex'] ='男';

                }else {
                    $list[$pk]['sex'] ='女';
                }
            }

            if (empty($list)) {

                return ReturnData('暂时没有数据！', 0);
            }

            //获取表头信息
            $key = 0;
            foreach ($data as $k => $v) {

                switch ($v['COLUMN_NAME']) {
                    case 'id':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = $v['column_comment'];
                        $flag[$key]['width'] = 40;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'center';
                        $flag[$key]['isFrozen'] = true;
                        $flag[$key]['orderBy'] = 'asc';
                        break;
                    case 'orderno':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = $v['column_comment'];
                        $flag[$key]['width'] = 100;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'center';
                        $flag[$key]['orderBy'] = 'asc';
                        break;
                    case 'name':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = $v['column_comment'];
                        $flag[$key]['width'] = 40;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'center';
                        $flag[$key]['isEdit'] = true;
                        $flag[$key]['isResize'] = true;
                        break;
                    case 'education':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = $v['column_comment'];
                        $flag[$key]['width'] = 40;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'center';
                        $flag[$key]['isResize'] = true;
                        break;
                    case 'sex':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = substr($v['column_comment'],0,6);
                        $flag[$key]['width'] = 120;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'center';
                        $flag[$key]['filters'] = array(
                            0 => array(
                                'label' => '男',
                                'value' => '男'
                            ),
                            1 => array(
                                'label' => '女',
                                'value' => '女'
                            ),
                            2 => array(
                                'label' => '其他',
                                'value' => '其他'
                            )
                        );
                        break;
                    case 'deptid':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = $v['column_comment'];
                        $flag[$key]['width'] = 100;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'center';
                        break;
                    case 'worktype':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = $v['column_comment'];
                        $flag[$key]['width'] = 120;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'center';
                        break;
                    case 'dutylevelid':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = $v['column_comment'];
                        $flag[$key]['width'] = 100;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'center';
                        break;
                    case 'chinaid':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = $v['column_comment'];
                        $flag[$key]['width'] = 100;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'left';
                        break;
                    case 'phone':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = $v['column_comment'];
                        $flag[$key]['width'] = 100;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'left';
                        break;
                    case 'status':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = $v['column_comment'];
                        $flag[$key]['width'] = 100;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'center';
                        break;
                    default:
                        unset($data[$k]);
                        $key--;
                }
                $key++;
            }
            if (empty($flag)) {
                ReturnData('未找到表头信息！',0);
            }

            //加入复选框信息
            array_unshift($flag, array(
                'width'=> 20,
                'titleAlign' => 'center',
                'columnAlign' => 'center',
                'type' => 'selection',
                'isFrozen'=> true
            ));
//            dump($list);exit;

            return ReturnData('员工档案请求成功！', 200, $list,$flag);
        } else {
            return ReturnData('请求方式错误！', 0);
        }

    }

    public  function save (){

        if($this->isGet()) {
            //获取字段中文名称
            $sql = "select COLUMN_NAME,column_comment from INFORMATION_SCHEMA.Columns where table_name='mis_hr_personnel_person_info' ";
            $data = D()->query($sql);


            //获取需求字段的中文名称
            $key = 0;
            foreach ($data as $k => $v) {

                switch ($v['COLUMN_NAME']) {
                    case 'id':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = $v['column_comment'];
                        $flag[$key]['width'] = 40;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'center';
                        $flag[$key]['isFrozen'] = true;
                        break;
                    case 'orderno':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = $v['column_comment'];
                        $flag[$key]['width'] = 100;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'center';
                        $flag[$key]['isFrozen'] = true;
                        break;
                    case 'name':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = $v['column_comment'];
                        $flag[$key]['width'] = 40;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'center';
                        break;
                    case 'education':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = $v['column_comment'];
                        $flag[$key]['width'] = 40;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'center';
                        break;
                    case 'sex':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = substr($v['column_comment'],0,6);
                        $flag[$key]['width'] = 120;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'center';
                        break;
                    case 'deptid':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = $v['column_comment'];
                        $flag[$key]['width'] = 100;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'center';
                        break;
                    case 'worktype':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = $v['column_comment'];
                        $flag[$key]['width'] = 120;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'center';
                        break;
                    case 'dutylevelid':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = $v['column_comment'];
                        $flag[$key]['width'] = 100;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'center';
                        break;
                    case 'chinaid':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = $v['column_comment'];
                        $flag[$key]['width'] = 100;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'left';
                        break;
                    case 'phone':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = $v['column_comment'];
                        $flag[$key]['width'] = 100;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'left';
                        break;
                    case 'status':
                        $flag[$key]['field'] = $v['COLUMN_NAME'];
                        $flag[$key]['title'] = $v['column_comment'];
                        $flag[$key]['width'] = 100;
                        $flag[$key]['titleAlign'] = 'center';
                        $flag[$key]['columnAlign'] = 'center';
                        break;
                    default:
                        unset($data[$k]);
                        $key--;
                }
                $key++;
            }

            if (empty($flag)) {
                ReturnData('未找到表头信息！',0);
            }
             array_unshift($flag, array(
                 'width'=> 60,
                 'titleAlign' => 'center',
                 'columnAlign' => 'center',
                 'type' => 'selection'
             ));
//            dump($flag);exit;
            return ReturnData('表头信息请求成功！', 200,'',$flag);
        } else {
            return ReturnData('请求方式错误！', 0);
        }
    }

    //自动加载 数据

    public  function limit () {
        if ($this->isGet()) {
            $limit = $_GET['limit'];
            if (empty($limit)){
                //获取数据
                $list = D("MisHrPersonnelManagement")
                    ->field('id,orderno,name,education,sex,deptid,worktype,dutylevelid,chinaid,phone,status')
                    ->limit('0,10')
                    ->select();
//            dump($list);exit;
                if (empty($list)) {
                    ReturnData('未找到任何信息！',0);
                }
                foreach ($list as $pk => $pv) {

                    $pv['phone'] = substr_replace($pv['phone'],"****",3,4);
                    $list[$pk]['id'] = intval($pv['id']);
                    if ($pv['sex'] == 1) {

                        $list[$pk]['sex'] ='男';

                    }else {
                        $list[$pk]['sex'] ='女';
                    }
                }
                $columns = $this->getColumns();
//                dump($columns);exit;
                return ReturnData('员工档案请求成功！',200,$list,$columns);
            } else {
                $list = D("MisHrPersonnelManagement")
                    ->field('id,orderno,name,education,sex,deptid,worktype,dutylevelid,chinaid,phone,status')
                    ->limit($limit)
                    ->select();
                if (empty($list)) {
                    return ReturnData('未找到信息！',0);
                }
                return ReturnData('信息获取成功！',200,$list);
            }

        } else {
            return ReturnData('请求方式错误！',0);
        }
    }

    //获取表头信息
    public function  getColumns(){
        $sql = "select COLUMN_NAME,column_comment from INFORMATION_SCHEMA.Columns where table_name='mis_hr_personnel_person_info' ";
        $data = D()->query($sql);

        $key = 0;
        foreach ($data as $k => $v) {

            switch ($v['COLUMN_NAME']) {
                case 'id':
                    $flag[$key] = $v;

                    break;
                case 'orderno':
                    $flag[$key] = $v;
                    break;
                case 'name':
                    $flag[$key] = $v;
                    break;
                case 'education':
                    $flag[$key] = $v;
                    break;
                case 'sex':
                    $flag[$key] = $v;
                    $flag[$key]['column_comment'] = substr($v['column_comment'],0,6);
                    break;
                case 'deptid':
                    $flag[$key] = $v;
                    break;
                case 'worktype':
                    $flag[$key] = $v;
                    break;
                case 'dutylevelid':
                    $flag[$key] = $v;
                    break;
                case 'chinaid':
                    $flag[$key] = $v;
                    break;
                case 'phone':
                    $flag[$key] = $v;
                    break;
                case 'status':
                    $flag[$key] = $v;
                    break;
                default:
                    unset($data[$k]);
                    $key--;
            }
            $key++;
        }
        return $flag;
    }
}