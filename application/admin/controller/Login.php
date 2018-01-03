<?php

namespace app\admin\controller;

use app\conmm\controller\Dao;

class Login extends Dao
{
    protected $model = null;

    public function _initialize()
    {
        parent::_initialize();
        $this->model = model('Admin');

    }

    /**
     * 登录后台
     *
     * @return \think\Response
     */
    public function index()
    {

        return view();
    }

    public function doLogin()
    {
        $uname = input('post.uname');
        $passwd = input('post.passwd');
        if(!$uname || !$passwd) $this->error('请输入管理员账号或密码');
        $info = $this->model->where(['uname' => $uname])->find();
        if(!$info || $info['passwd'] != md5(config('web_token').$passwd)) $this->error('账号或密码错误');
        $data['sip'] = request()->ip();
        $data['stime'] = time();
        $this->model->save($data,['uname' => $uname]);
        session('admin_user',$info);
        $this->success('登录成功，请等待跳转',url('admin/Index/index'));
    }


}
