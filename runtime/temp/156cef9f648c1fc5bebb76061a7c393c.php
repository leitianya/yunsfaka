<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"/www/wwwroot/demo.xiangfa.me/public/../application/index/view/index/getgoodsinfo.html";i:1503634141;}*/ ?>
<div class="am-form-group" id="ipu-otitle">
    <label for="ipotitle" class="am-u-sm-2 am-form-label"><?php echo $info['otitle']; ?></label>
    <div class="am-u-sm-10">
        <input type="text" id="ipotitle" placeholder="作为充值和查询的重要依据，仔细确认填写" class="am-form-field am-round" value=""  >
    </div>
</div>

<?php if($info['tcheck'] == '1'): ?>

<div class="am-form-group" id="ipu-tcheck">
    <label for="ipttitle" class="am-u-sm-2 am-form-label"><?php echo $info['ttitle']; ?></label>
    <div class="am-u-sm-10">
        <input type="text" id="ipttitle" class="am-form-field am-round" value=""  >
    </div>
</div>
<?php endif; if($info['scheck'] == '1'): ?>

<div class="am-form-group" id="ipu-scheck">
    <label for="ipstitle" class="am-u-sm-2 am-form-label"><?php echo $info['stitle']; ?></label>
    <div class="am-u-sm-10">
        <input type="text" id="ipstitle" class="am-form-field am-round" value=""  >
    </div>
</div>
<?php endif; ?>