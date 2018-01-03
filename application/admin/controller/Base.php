<?php

namespace app\admin\controller;

use app\conmm\controller\Dao;
use think\Request;

class Base extends Dao
{
    protected $user;
    public function _initialize()
    {
        parent::_initialize();
        $this->user = session('admin_user');
        if(!$this->user) $this->error('请先登录',url('admin/Login/index'));
       






    }

}
