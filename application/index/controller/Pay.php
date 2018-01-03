<?php

namespace app\index\controller;

use app\conmm\controller\Dao;
use think\Controller;
use think\Request;

class Pay extends Dao
{
    /**
     * 开始支付
     */
    public function pay()
    {
        $oid = input('oid');
        $type= input('type');
        $info = model('admin/Order')->where(['id' =>$oid])->find();
        if(!$info || $info['status'] != 0 )$this->error('订单不存在或已经付过款了');
        $url_base = strcasecmp($_SERVER['HTTPS'],"ON")==0?"https://":"http://";

        //组装支付参数
        $paydata = [
            'pid' => config('sysconf.payid'),
            'type' =>$type,
            'out_trade_no' => $oid,
            'notify_url'   => $url_base.$_SERVER['HTTP_HOST'].'/notify',
            'return_url'   => $url_base.$_SERVER['HTTP_HOST'].'/preturn',
            'name'   => $info['oname'],
            'money'  => $info['cmoney'],
            'sign' =>config('sysconf.paykey'),
            'sitename'  => config('sysconf.name'),
            'sign_type' =>'MD5'
        ];

        $para_filter = createLinkstring(argSort(paraFilter($paydata)));//除去待签名参数数组中的空值和签名参数
        $sgin = md5Sign($para_filter,config('sysconf.paykey'));
        $paydata['sign'] = $sgin;
        $canshu =createLinkstring($paydata);
        $this->redirect('http://pay.blpay.me/submit.php?'.$canshu);

    }

    /**
     * 支付通知同步回调
     */
    public function preturn()
    {
        $data = input('get.');
        $sign = input('get.sign');
        //除去待签名参数数组中的空值和签名参数
        $para_filter = paraFilter($data);

        //对待签名参数数组排序
        $para_sort = argSort($para_filter);

        //把数组所有元素，按照“参数=参数值”的模式用“&”字符拼接成字符串
        $prestr = createLinkstring($para_sort);
        $isSgin = md5Verify($prestr, $sign,config('sysconf.paykey'));
        if($isSgin){
            if($data['trade_status'] == 'TRADE_SUCCESS') {
                $res = $this->checkOrder($data['out_trade_no'],$data['trade_no'],$data['type']);
                if(!$res)$this->error('订单更新失败，请联系管理员');

                $this->success('支付成功...',url('index/Chaka/doCha',['account' => $res]));

            }
            $this->success('支付成功...',url('index/Index/index'));
        }else{
            $this->error('验签失败');
        }

    }

    /**设置订单状态
     * @param $oid
     * @param $tid
     */
    private function checkOrder($oid,$tid,$type)
    {
        $data['payid'] = $tid;
        $data['paytype'] = $type;
        $data['status'] = 1;
        //查询订单详情
        $orderInfo = model('admin/Order')->where(['id' =>$oid])->find();
        if($orderInfo['status'] != 0) return $orderInfo['account'];

        //如果是自动发卡
        if($orderInfo['type'] == 2){
            $kaList = model('admin/Kami')->where(['gid' => $orderInfo['gid'],'isok' => 0])->limit($orderInfo['number'])->select();


            $text = "";
            $ids = "";
            //循环订单信息
            foreach ($kaList as $v){
                $text .= $v['knumber'];
                if($v['kpasswd']){
                    $text .= '----'.$v['kpasswd'];
                }
                $text.= '<br />';
                $ids .= $v['id'].',';
            }
            $data['info'] = $text;
            $data['status'] = 3;
            //设置卡密已经使用
            model('admin/Kami')->where(['id' => ['in' ,trim($ids,',')]])->setInc('isok',1);
        }

        $res = model('admin/Order')->save($data,['id' => $oid]);
        if($res !== false){
            try{

            $mail =config('sysconf.email');
            $title = "您有一条新订单，请注意处理";
            $cont = "订单id:".$orderInfo['id']."商品：".$orderInfo['oname']." <br /> 充值账号:".$orderInfo['account'].'<br />';
            send_email($mail,$title,$cont);
            }catch (\Exception $e){

            }


            return $orderInfo['account'];
        }
        return false;

    }

    /**异步回调
     * @return string
     */
    public function notify()
    {
        $data = input('get.');
        $sign = input('get.sign');
        //除去待签名参数数组中的空值和签名参数
        $para_filter = paraFilter($data);

        //对待签名参数数组排序
        $para_sort = argSort($para_filter);

        //把数组所有元素，按照“参数=参数值”的模式用“&”字符拼接成字符串
        $prestr = createLinkstring($para_sort);
        $isSgin = md5Verify($prestr, $sign,config('sysconf.paykey'));
        if($isSgin){
            if($data['trade_status'] == 'TRADE_SUCCESS') {
                $res = $this->checkOrder($data['out_trade_no'],$data['trade_no'],$data['type']);
                if(!$res)return 'error';

                return 'success';

            }
            return 'success';
        }else{
            return 'error';
        }
    }



}
