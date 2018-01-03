<?php

namespace app\admin\controller;

use app\admin\controller\Base;
use think\Request;

class Order extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
        if(input('get.status') !="all" && input('get.status')){
            $where['status'] = input('get.status');
        }else{
            $where['status'] = ['neq',0];
        }
        if(input('get.account')) $where['account'] = input('get.account');
        $list = model('Order')->where($where)->order('ctime DESC')->paginate(20, false, [
            'query' => request()->param(),
        ]);
        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->assign('status',input('get.status'));
        $this->assign('account',input('get.account'));

        return view();
    }

    /**
     * 显示订单充值内容
     *
     * @return \think\Response
     */
    public function info()
    {
        $id = input('post.id');
        $info = model('Order')->where(['id' => $id])->field('info')->find();
        if($info){
            $this->success('ok',null,$info['info']);
            //return json(['status' => 1, 'data' => $info['info']]);
        }else{
            $this->error('error',null,$info['info']);
            //return json(['status' => 0, 'msg' => '订单不存在']);
        }


    }

    /**
     * 处理订单
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function ordercek()
    {
        $ids = input('post.ids');
        $status = input('post.status');
        if(!$ids || !$status) $this->error('请选择要处理的订单');
        $where['id'] = ['in',$ids];
        $res = model('Order')->save(['status' => $status],$where);
        //echo model('Order')->getLastSql();
        if($res !== false){
            $this->success('处理成功');
        }else{
            $this->error('处理失败');
        }
    }



}
