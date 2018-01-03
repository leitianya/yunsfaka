<?php

namespace app\admin\controller;

use app\admin\controller\Base;
use think\Request;

class Config extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        if($this->request->isPost()){
            $data = input('post.');
            $res = model('Config')->save($data,['id' => 1]);
            if($res !== false){
                $this->success('更新网站信息成功');
            }else{
                $this->error('更新网站信息失败');
            }


        }else{
            $info = model('Config')->where(['id' => 1])->find();
            $this->assign('info', $info);
            return view();
        }
    }

    /**
     * 邮件配置
     */
    public function stmp()
    {
        if($this->request->isPost()){
            $json = input('post.');
            $data['stmp'] = json_encode($json);
            $res = model('Config')->save($data,['id' => 1]);
            if($res !== false){
                $this->success('更新网站信息成功');
            }else{
                $this->error('更新网站信息失败');
            }
        }else{
            $info = model('Config')->where(['id' => 1])->field('stmp')->find();
            $info = json_decode($info['stmp'],true);
            $this->assign('info', $info);
            return view();
        }

    }

    /**公告设置
     * @return \think\response\View
     */
    public function gtips()
    {
        if($this->request->isPost()){
            $data = input('post.');
            $res = model('Config')->save($data,['id' => 1]);
            if($res !== false){
                $this->success('更新网站信息成功');
            }else{
                $this->error('更新网站信息失败');
            }

        }else{
            $info = model('Config')->where(['id' => 1])->find();
            $this->assign('info', $info);
            return view();
        }
    }




}
