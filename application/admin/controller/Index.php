<?php

namespace app\admin\controller;

use app\admin\controller\Base;

use think\Cache;
class Index extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {

        //order count
        $orderCount = model('Order')->where(['status' =>['neq',0] ])->count();
        //nowday count order
        $nowOrder = model('Order')->where(['status' =>['neq',0] ,'odate' => date('Y-m-d',time())])->count();
        //money count
        $moneyCount = model('Order')->where(['status' =>['neq',0] ])->sum('cmoney');
        $moneyCount = $moneyCount ? $moneyCount:0;
        //nowday money
        $nowMoney = model('Order')->where(['status' =>['neq',0] ,'odate' => date('Y-m-d',time())])->sum('cmoney');
        $nowMoney = $nowMoney? $nowMoney :0;
        //is check order number 5
        $checkOrderList = model('Order')->where(['status' => 1])->limit(5)->select();
        //is check order number count
        $checkOrdernumber = model('Order')->where(['status' => 1])->count();

      

        $this->assign('orderCount',$orderCount);
        $this->assign('nowOrder',$nowOrder);
        $this->assign('moneyCount',$moneyCount);
        $this->assign('nowMoney',$nowMoney);
        $this->assign('checkOrderList',$checkOrderList);

        $this->assign('checkOrdernumber',$checkOrdernumber);

        return view();
    }

    public function updatePwd()
    {
        $pwd = input('post.pwd');
        $res = model('admin')->save(['passwd' => md5(config('web_token').$pwd)],['id' =>1]);
        if($res!==false){
            $this->success('修改成功');
        }else{
            $this->error('修改失败');
        }
    }

    public function logout()
    {
        session('admin_user',null);
        $this->success('退出系统，即将跳转',url('admin/Login/index'));
    }

    public function clearCache()
    {
        Cache::clear();
        $this->success( '清除成功', 'index/index' );
    }

 





}
