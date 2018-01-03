<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"/www/wwwroot/demo.xiangfa.me/public/../application/admin/view/login/index.html";i:1503634141;s:77:"/www/wwwroot/demo.xiangfa.me/public/../application/admin/view/conmm/head.html";i:1503634141;s:77:"/www/wwwroot/demo.xiangfa.me/public/../application/admin/view/conmm/foot.html";i:1503634141;}*/ ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo config('sysconf.name'); ?> &nbsp; <?php echo config('sysconf.houzui'); ?></title>
    <meta name="description" content="<?php echo config('sysconf.description'); ?>">
    <meta name="keywords" content="<?php echo config('sysconf.keywords'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="<?php echo STATIC_PATH; ?>/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="<?php echo STATIC_PATH; ?>/assets/css/admin.css">
    <link rel="stylesheet" href="<?php echo STATIC_PATH; ?>/assets/css/app.css">
</head>




<div class="am-g myapp-login">
    <div class="myapp-login-logo-block  tpl-login-max">
        <div class="myapp-login-logo-text">
            <div class="myapp-login-logo-text">
                <?php echo config('sysconf.name'); ?><span> 管理员登录</span> <i class="am-icon-skyatlas"></i>

            </div>
        </div>

        <div class="login-font">
            <i>Log In </i>
        </div>
        <div class="am-u-sm-10 login-am-center">
            <form class="am-form" method="post" action="<?php echo url('admin/Login/doLogin'); ?>">
                <fieldset>
                    <div class="am-form-group">
                        <input type="text" class="" name="uname" id="uname" placeholder="请输入账号" required>
                    </div>
                    <div class="am-form-group">
                        <input type="password" class="" name="passwd" id="passwd" placeholder="请输入密码" required>
                    </div>
                    <p><button type="submit" class="am-btn am-btn-default">登录</button></p>
                </fieldset>
            </form>
        </div>
    </div>
</div>



</div>
</body>

</html>
<script src="<?php echo STATIC_PATH; ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo STATIC_PATH; ?>/assets/js/amazeui.min.js"></script>
<script src="<?php echo STATIC_PATH; ?>/assets/js/app.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"></script>
<script src="<?php echo STATIC_PATH; ?>/layer/layer.js"></script>
<script src="<?php echo STATIC_PATH; ?>/js/admin/index.js"></script>

<script src="<?php echo STATIC_PATH; ?>/js/admin/index.js"></script>
