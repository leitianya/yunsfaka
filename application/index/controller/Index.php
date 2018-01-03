<?php

namespace app\index\controller;

use app\conmm\controller\Dao;
use think\Request;

class Index extends Dao
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {

        //计算运行了多少天

        $countDay = $this->checkDay();
        //order count
        $orderCount = model('admin/Order')->where(['status' =>['neq',0] ])->count();
        //已处理
        $checkOrder = model('admin/Order')->where(['status' =>['eq',3]])->count();
        //money count
        $moneyCount = model('admin/Order')->where(['status' =>['neq',0] ])->sum('money');
        $moneyCount = $moneyCount ? $moneyCount:0;
        //所有手工商品分类
        $sclass = $this->getCate(1);
        //所有自动发卡类
        $kclass = $this->getCate(2);
        $this->assign('sclass',$sclass);
        $this->assign('kclass',$kclass);
        $this->assign('moneyCount',$moneyCount);
        $this->assign('countDay',$countDay);
        $this->assign('orderCount',$orderCount);
        $this->assign('checkOrder',$checkOrder);
        return view();
    }

    /**返回建站天数
     * @return number
     */
    private function checkDay()
    {
        $nowDay = date('Y-m-d',time());
        $webDay = config('sysconf.webst');
        return diffBetweenTwoDays($webDay,$nowDay);
    }

    /**
     * 获取商品分类
     */
    private function getCate($type)
    {
        $list = model('admin/Yclass')->where(['type' => $type])->order('ord DESC')->select();
        return $list;

    }

    /**
     * 获取商品列表
     */
    public function getGoodsList()
    {
        $id = input('post.id');
        $list = model('admin/Goods')->where(['cid' => $id,'status' => ['neq',2]])->order('ord DESC')->select();
        foreach ($list as $v){
            $v['kucun'] = model('admin/Kami')->where(['gid'=>$v['id'],'isok' =>0])->count();

        }
        //echo model('admin/Goods')->getLastSql();
        //dump($list);
        $this->assign('list',$list);
        $html = $this->fetch();
        $this->success('ok',null,$html);

    }

    /**
     * 获取商品详情
     */
    public function getGoodsInfo()
    {
        $id = input('post.id');
        $info = model('admin/Goods')->where(['id' => $id])->find();

        $this->assign('info',$info);
        $info['html'] = $this->fetch();
        $this->success('ok',null,$info);

    }

    /**
     * 提交手工订单
     */
    public function postSgOrder()
    {
        $post = input('post.',null,'htmlspecialchars');
        if(!$post['cid'])$this->error('请选择分类');
        if(!$post['gid'])$this->error('请选择商品');
        if(!$post['num'] || !is_numeric($post['num']) || !preg_match("/^[1-9][0-9]*$/",$post['num']))$this->error('请填写数量');
        if(!$post['account'])$this->error('请填写充值账号');
        $ginfo = model('admin/Goods')->where(['id' => $post['gid']])->find();
        if(!$ginfo || $ginfo['status'] ==2)$this->error('商品不存在或已下架');
        if($ginfo['tcheck'] ==1 && trim($post['ttitle']) =="")$this->error('请输入'.$ginfo['ttitle']);
        if($ginfo['scheck'] ==1 && trim($post['stitle']) =="")$this->error('请输入'.$ginfo['stitle']);
        //开始入库
        $data['id'] =build_order_no();
        $data['oname'] = $ginfo['name'];
        $data['number'] =$post['num'];
        $data['gid'] = $ginfo['id'];
        $data['money'] = $ginfo['money'];
        $data['cmoney'] = $post['num']*$ginfo['money'];
        $data['account'] = $post['account'];
        $data['info'] = $ginfo['otitle'].':'.$post['account'];
        if($ginfo['tcheck']==1 )$data['info'].='<br />'.$ginfo['ttitle'].':'.$post['ttitle'];
        if($ginfo['scheck']==1 )$data['info'].='<br />'.$ginfo['stitle'].':'.$post['stitle'];
        $data['type'] = 1;
        $data['ctime'] = time();
        $data['odate'] = date('Y-m-d',time());
        //判断商品是否不要钱
        if($ginfo['money'] == 0){
            $data['status'] =1;
            $status = $data['account'];
        }else{
            $status = 0;
        }
        $res= model('admin/Order')->save($data);
        $this->assign('oid',$data['id']);
        $html = $this->fetch();
        if($res){
            $this->success('订单提交成功，请付款',null,['status' => $status,'html' => $html]);
        }else{
            $this->error('订单提交失败');
        }
    }

    /**
     * 提交手工订单
     */
    public function postZdOrder()
    {
        $post = input('post.',null,'htmlspecialchars');
        if(!$post['cid'])$this->error('请选择分类');
        if(!$post['gid'])$this->error('请选择商品');
        if(!$post['num'] || !is_numeric($post['num']) || !preg_match("/^[1-9][0-9]*$/",$post['num']))$this->error('请填写数量');
        if(!$post['account'])$this->error('请填写充值账号');
        $ginfo = model('admin/Goods')->where(['id' => $post['gid']])->find();
        if(!$ginfo || $ginfo['status'] ==2)$this->error('商品不存在或已下架');
        $kucun = model('admin/Kami')->where(['gid'=>$post['gid'],'isok' =>0])->count();
        if($kucun < $post['num'])$this->error('库存不足，联系管理员补货');
        //开始入库
        $data['id'] =build_order_no();
        $data['oname'] = $ginfo['name'];
        $data['number'] =$post['num'];
        $data['gid'] = $ginfo['id'];
        $data['money'] = $ginfo['money'];
        $data['cmoney'] = $post['num']*$ginfo['money'];
        $data['account'] = $post['account'];
        $data['type'] = 2;
        $data['ctime'] = time();
        $data['odate'] = date('Y-m-d',time());
        $res= model('admin/Order')->save($data);
        $this->assign('oid',$data['id']);
        $html = $this->fetch('postsgorder');
        if($res){
            $this->success('订单提交成功，请付款',null,$html);
        }else{
            $this->error('订单提交失败');
        }
    }

    public function getTips()
    {
        $this->success('ok',null,config('sysconf.altps'));
    }




}
