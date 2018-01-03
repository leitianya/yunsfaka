<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"/www/wwwroot/demo.xiangfa.me/public/../application/index/view/index/postsgorder.html";i:1503634141;}*/ ?>
<div class="am-form-group" id="sgoktips">


    <div class="am-alert am-alert-success"><strong>订单保存成功，请点击以下方式在线付款：</strong></div>


</div>
<div class="am-form-group" id="paytype">

    <div class="am-u-sm-12 am-u-sm-push-2">
        <a href="<?php echo url('index/Pay/pay',['oid' => $oid,'type' => 'alipay']); ?>" class="am-btn am-btn-warning am-round am-icon-credit-card-alt">支付宝</a>
        <a href="<?php echo url('index/Pay/pay',['oid' => $oid,'type' => 'wxpay']); ?>" class="am-btn am-btn-success am-round am-icon-wechat">微信</a>
        <a href="<?php echo url('index/Pay/pay',['oid' => $oid,'type' => 'qqpay']); ?>" class="am-btn am-btn-default am-round am-icon-qq">QQ钱包</a>
        <a href="<?php echo url('index/Pay/pay',['oid' => $oid,'type' => 'tenpay']); ?>" class="am-btn am-btn-primary am-round am-icon-credit-card">财付通</a>
    </div>

</div>