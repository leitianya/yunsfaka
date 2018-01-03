<?php

namespace app\conmm\controller;

use think\Controller;
use think\Request;

class Dao extends Controller
{


    public function _initialize()
    {


        parent::_initialize();

        if(is_mobile_request()){
            $this->assign('is_shouji',1);
        }else{
            $this->assign('is_shouji',2);
        }

        $config = model('admin/Config')->where(['id' => 1])->find();
        config('sysconf',$config);
        $this->assign('controller_name',Request::instance()->controller());
        $this->assign('module_name',Request::instance()->module());
        $this->assign('action_name',Request::instance()->action());
        $sessid = $_COOKIE['PHPSESSID'];

        if(session('tipid') == $sessid && session('tipid')){
            $tips = 0;
        }else{
            $tips = 1;
            session('tipid',$sessid);
        }
        $this->assign('tips',$tips);


    }
}
