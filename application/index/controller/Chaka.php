<?php

namespace app\index\controller;

use app\conmm\controller\Dao;


class Chaka extends Dao
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {


        return view();

    }

    /**详情查询
     * @return \think\response\View
     */
    public function doCha()
    {
        //
        if(input('status') !="all" && input('status')){
            $where['status'] = input('status');
        }else{
            $where['status'] = ['neq',0];
        }
        if(input('account')){
            $where['account'] = input('account');
        } else{
            $this->error('请输入要查询的账号');
        }

        $list = model('admin/Order')->where($where)->order('ctime DESC')->paginate(20, false, [
            'query' => request()->param(),
        ]);

        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->assign('status',input('status'));
        $this->assign('account',input('account'));

        return view('index');
    }

    /**
     * 显示订单充值内容
     *
     * @return \think\Response
     */
    public function info()
    {
        $id = input('post.id');
        $info = model('admin/Order')->where(['id' => $id])->field('info')->find();
        if($info){
            $this->success('ok',null,$info['info']);
            //return json(['status' => 1, 'data' => $info['info']]);
        }else{
            $this->error('error',null,$info['info']);
            //return json(['status' => 0, 'msg' => '订单不存在']);
        }


    }
}
