<?php

namespace App\Controllers;

use App\Cores\BaseController;

class IndexController extends BaseController
{
    public function actionIndex()
    {
        //$content = 'Hello May';
        //require APP_PATH . '/views/index/index.php';

        $model = new \Framework\Lib\Model();
        $sql = 'select * from c_user';
        $res = $model->query($sql);

        dd($res->fetchAll());

        //$res = Config::get('debug');
        //$res = Config::get('debug');
        

        $this->assign('title','todd');
        $this->assign('content','hello');
        $this->display('index/index.php');

    }
}