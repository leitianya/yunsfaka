<?php

namespace app\admin\controller;

use app\admin\controller\Base;
use think\Request;

class Yclass extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
        if(input('get.type') !="all" && input('get.type')){
            $where['type'] = input('get.type');
        }else{
            $where['id'] = ['neq',''];
        }
        $list = model('Yclass')->where($where)->order('ord desc')->select();

        $this->assign('list',$list);
        $this->assign('type',input('get.type'));
        return view();
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        if(request()->isPost()){
            $data = input('post.');
            if($data['name'] =="") $this->error('名字不能为空');
            $res = model('Yclass')->save($data);
            if($res){
                $this->success('添加成功',url('admin/Yclass/index'));
            }else{
                $this->error('添加失败');
            }

        }else{
            return view();
        }

    }




    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit()
    {
        $id = input('id');
        if(request()->isPost()){
            $data = input('post.');

            if($data['name'] =="") $this->error('名字不能为空');
            $res = model('Yclass')->save($data,['id' => $data['id']]);
            if($res !== false){
                $this->success('编辑成功',url('admin/Yclass/index'));
            }else{
                $this->error('编辑失败');
            }

        }else{
            $info = model('Yclass')->where(['id' => $id])->find();
            //echo model('Yclass')->getLastSql();
            if(!$info)$this->error('分类不存在');
            $this->assign('info',$info);
            return view();
        }
    }


    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete()
    {
        $ids = input('ids');
        if(!$ids) $this->error('请选择要删除的分类');
        $where['id'] = ['in',$ids];
        $res = model('Yclass')->where($where)->delete();
        //echo model('Order')->getLastSql();
        if($res !== false){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
}
