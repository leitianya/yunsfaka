<?php

namespace app\admin\controller;

use app\admin\controller\Base;
use think\Request;

class Goods extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        if (input('get.type') != "all" && input('get.type')) {
            $where['type'] = input('get.type');
        } else {
            $where['id'] = ['neq', ''];
        }
        if (input('get.account')) {
            $where['name'] = ['like', '%' . input('get.account') . '%'];
        }

        $list = model('Goods')->where($where)->order('ord DESC')->paginate(20, false, [
            'query' => request()->param(),
        ]);
        foreach ($list as $v) {
            $v['cname'] = model('Yclass')->where(['id' => $v['cid']])->value('name');
            $v['kucun'] = model('admin/Kami')->where(['gid' => $v['id'], 'isok' => 0])->count();
        }
        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->assign('name', input('get.account'));
        $this->assign('type', input('get.type'));
        return view();
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        $type = input('type');
        if (request()->isPost()) {
            $data = input('post.');
            if (!$data['name']) $this->error('请输入商品名称');
            $cid = model('Yclass')->where(['id' => $data['cid']])->find();
            if (!$cid) $this->error('分类不存在');
            //如果填写了卡密
            $res = model('Goods')->save($data);


            if ($res !== false) {
                $this->success('添加商品成功', url('admin/Goods/index'));
            } else {
                $this->error('添加商品失败');
            }


        } else {
            if ($type == 1) {
                $list = model('Yclass')->where(['type' => 1])->order('ord DESC')->select();
                $this->assign('list', $list);
                return view();
            } else {
                $list = model('Yclass')->where(['type' => 2])->order('ord DESC')->select();
                $this->assign('list', $list);
                return view('faka');
            }


        }
    }


    /**
     * 显示编辑资源表单页.
     *
     * @param  int $id
     * @return \think\Response
     */
    public function edit()
    {
        $id = input('id');
        $type = input('type');
        if (request()->isPost()) {
            $data = input('post.');
            if (!$data['name']) $this->error('请输入商品名称');
            $cid = model('Yclass')->where(['id' => $data['cid']])->find();
            if (!$cid) $this->error('分类不存在');

            $res = model('Goods')->save($data, ['id' => $id]);


            if ($res !== false) {
                $this->success('编辑商品成功', url('admin/Goods/index'));
            } else {
                $this->error('编辑商品失败');
            }

        } else {
            $info = model('Goods')->where(['id' => $id, 'type' => $type])->find();
            if (!$info) $this->error('商品不存在');
            if ($type == 1) {
                $list = model('Yclass')->where(['type' => 1])->order('ord DESC')->select();
                $this->assign('list', $list);
                $this->assign('info', $info);
                return view();
            } else {
                $list = model('Yclass')->where(['type' => 2])->order('ord DESC')->select();
                $this->assign('list', $list);
                $this->assign('info', $info);
                return view('fakaedit');
            }


        }
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request $request
     * @param  int $id
     * @return \think\Response
     */
    public function update()
    {
        $ids = input('post.ids');
        $status = input('post.status');
        if (!$ids || !$status) $this->error('请选择要操作的商品');
        $where['id'] = ['in', $ids];
        $res = model('Goods')->save(['status' => $status], $where);
        //echo model('Order')->getLastSql();
        if ($res !== false) {
            $this->success('处理成功');
        } else {
            $this->error('处理失败');
        }
    }

    /**
     * 删除指定资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function delete()
    {
        $ids = input('ids');
        if (!$ids) $this->error('请选择要删除的商品');
        $where['id'] = ['in', $ids];
        $res = model('Goods')->where($where)->delete();
        //echo model('Order')->getLastSql();
        if ($res !== false) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

    /**
     * 导入卡密
     */
    public function impka()
    {
        $id = input('id');
        $res = model('Goods')->where(['id' => $id])->find();
        if (!$res) $this->error('商品不存在');

        if (request()->isPost()) {
            $kami = trim(input('post.kami'));
            if (!$kami) $this->error('请填写卡密');
            $ka_arr = explode("\r\n", $kami);
            $kamiList = [];
            //格式化数据
            foreach ($ka_arr as $key => $v) {
                $kamiList[$key]['gid'] = $id;
                $kamiList[$key]['ctime'] = time();
                if (strstr($v, '----')) {
                    $cstr = explode('----', $v);
                    $kamiList[$key]['knumber'] = $cstr[0];
                    $kamiList[$key]['kpasswd'] = $cstr[1];
                } else {
                    $kamiList[$key]['knumber'] = $v;
                }
            }
            $res = model('kami')->saveAll($kamiList);

            if ($res) {
                $this->success('导入成功，本次功导入' . count($kamiList) . '张卡密');
            } else {
                $this->error('导入失败');
            }
        } else {

            $this->assign('id', $id);
            return view();
        }


    }

    /**查看卡密列表
     * @param $id
     * @return \think\response\View
     */
    public function kamilist()
    {
        $id = input('id');
        if (input('get.account')) {
            $where['knumber'] = ['like', '%' . trim(input('get.account')) . '%'];
        }
        if (input('get.isok') != "all" && input('get.isok')) {
            $where['isok'] = input('get.isok');
        } else {
            $where['isok'] = ['neq', 5];
        }

        $list = model('kami')->where($where)->order('ctime DESC')->paginate(20);
        //echo model('kami')->getLastSql();
        foreach ($list as &$v) {
            $v['gname'] = model('Goods')->where(['id' => $v['gid']])->value('name');

        }
        $page = $list->render();
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->assign('id', $id);
        $this->assign('name', trim(input('get.account')));
        $this->assign('isok', input('get.isok'));
        return view();
    }

    /**删除卡密
     * @param $ids
     */
    public function delkami()
    {
        $ids = input('ids');
        if (!$ids) $this->error('请选择要删除的卡密');
        $where['id'] = ['in', $ids];
        $res = model('Kami')->where($where)->delete();
        //echo model('Order')->getLastSql();
        if ($res) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }


}
