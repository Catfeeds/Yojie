<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\9\10 0010
 * Time: 下午 5:13
 */

class CommonTestAction extends Action
{
    protected function _initialize()
    {
        header('content-type:text/html;charset=utf-8');
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        ksort($_POST);
        ksort($_GET);

    }
}