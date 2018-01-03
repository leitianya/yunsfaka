<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"/www/wwwroot/demo.xiangfa.me/public/../application/admin/view/index/index.html";i:1514961623;s:77:"/www/wwwroot/demo.xiangfa.me/public/../application/admin/view/conmm/main.html";i:1503634141;s:77:"/www/wwwroot/demo.xiangfa.me/public/../application/admin/view/conmm/head.html";i:1503634141;s:77:"/www/wwwroot/demo.xiangfa.me/public/../application/admin/view/conmm/foot.html";i:1503634141;}*/ ?>

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





<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <a href="javascript:;" class="tpl-logo">
            <img src="<?php echo STATIC_PATH; ?>/assets/img/logo.png" alt="">
        </a>
    </div>
    <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">


            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>

            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="tpl-header-list-user-nick">管理员</span><span class="tpl-header-list-user-ico"> <img src="http://q4.qlogo.cn/headimg_dl?dst_uin=<?php echo config('sysconf.kfqq'); ?>&spec=100"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="javascript:;" onclick="updatePwd('<?php echo url('admin/Index/updatePwd'); ?>')"><span class="am-icon-cog"></span> 修改密码</a></li>
                    <li><a href="<?php echo url('admin/Index/logout'); ?>"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li><a href="<?php echo url('admin/Index/logout'); ?>" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
        </ul>
    </div>
</header>







<div class="tpl-page-container tpl-page-header-fixed">


    <div class="tpl-left-nav tpl-left-nav-hover">
        <div class="tpl-left-nav-title">
            系统菜单
        </div>
        <div class="tpl-left-nav-list">
            <ul class="tpl-left-nav-menu">
                <li class="tpl-left-nav-item">
                    <a href="<?php echo url('admin/Index/index'); ?>" class="nav-link <?php if(($controller_name == 'Index') && ($action_name == 'index')): ?> active <?php endif; ?>">
                        <i class="am-icon-home"></i>
                        <span>首页</span>
                    </a>
                </li>


                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list <?php if(($controller_name == 'Config')): ?> active <?php endif; ?>">
                        <i class="am-icon-cogs"></i>
                        <span>系统设置</span>
                    <?php if(($controller_name == 'Config')): ?>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                    <?php else: ?>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                    <?php endif; ?>



                    </a>
                    <ul class="tpl-left-nav-sub-menu" <?php if(($controller_name == 'Config')): ?> style="display: block;" <?php endif; ?> >
                        <li >
                            <a href="<?php echo url('admin/Config/index'); ?>" <?php if(($controller_name == 'Config') && ($action_name == 'index')): ?> class="nav-link active" <?php endif; ?>>
                                <i class="am-icon-angle-right"></i>
                                <span>基础设置</span>
                                <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                            </a>
                            <a href="<?php echo url('admin/Config/stmp'); ?>" <?php if(($controller_name == 'Config') && ($action_name == 'stmp')): ?> class="nav-link active" <?php endif; ?>>
                                <i class="am-icon-angle-right"></i>
                                <span>邮件设置</span>
                                <i class="am-icon-mail-forward tpl-left-nav-content-ico am-fr am-margin-right"></i>
                            </a>
                            <a href="<?php echo url('admin/Config/gtips'); ?>" <?php if(($controller_name == 'Config') && ($action_name == 'gtips')): ?> class="nav-link active" <?php endif; ?>>
                                <i class="am-icon-angle-right"></i>
                                <span>公告设置</span>
                                <i class="am-icon-bullhorn tpl-left-nav-content-ico am-fr am-margin-right"></i>
                            </a>

                        </li>
                    </ul>
                </li>




                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list <?php if(($controller_name == 'Order')): ?> active <?php endif; ?>">
                        <i class="am-icon-table"></i>
                        <span>订单管理</span>
                    <?php if(($controller_name == 'Order')): ?>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                    <?php else: ?>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                    <?php endif; ?>

                    </a>
                    <ul class="tpl-left-nav-sub-menu" <?php if(($controller_name == 'Order')): ?> style="display: block;" <?php endif; ?>>
                        <li>
                            <a href="<?php echo url('admin/Order/index'); ?>" <?php if(($controller_name == 'Order')): ?> class="nav-link active" <?php endif; ?>>
                                <i class="am-icon-angle-right"></i>
                                <span>订单列表</span>
                                <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                            </a>

                        </li>
                    </ul>
                </li>

                <li class="tpl-left-nav-item">
                    <a href="javascript:;" class="nav-link tpl-left-nav-link-list <?php if(($controller_name == 'Goods') OR ($controller_name == 'Yclass')): ?> active <?php endif; ?>">
                        <i class="am-icon-shopping-cart"></i>
                        <span>商品管理</span>
                    <?php if(($controller_name == 'Goods') OR ($controller_name == 'Yclass')): ?>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                    <?php else: ?>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                    <?php endif; ?>
                    </a>
                    <ul class="tpl-left-nav-sub-menu" <?php if(($controller_name == 'Goods') OR ($controller_name == 'Yclass')): ?> style="display: block;" <?php endif; ?>>
                        <li>
                            <a href="<?php echo url('admin/Yclass/index'); ?>" <?php if(($controller_name == 'Yclass')): ?> class="nav-link active" <?php endif; ?>>
                                <i class="am-icon-angle-right"></i>
                                <span>商品分类</span>
                                <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                            </a>

                            <a href="<?php echo url('admin/Goods/index'); ?>" <?php if(($controller_name == 'Goods')): ?> class="nav-link active" <?php endif; ?>>
                                <i class="am-icon-angle-right"></i>
                                <span>商品列表</span>
                            </a>
                        </li>
                    </ul>
                </li>

            <li class="tpl-left-nav-item">
                <a href="<?php echo url('admin/Index/clearCache'); ?>" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-terminal"></i>
                    <span>清除缓存<span>

                </a>
            </li>

                <li class="tpl-left-nav-item">
                    <a href="<?php echo url('admin/Index/logout'); ?>" class="nav-link tpl-left-nav-link-list">
                        <i class="am-icon-key"></i>
                        <span>退出<span>

                    </a>
                </li>
            </ul>
        </div>
    </div>





    
<div class="tpl-content-wrapper">
    <div class="tpl-content-page-title">
        系统后台管理
    </div>
    <ol class="am-breadcrumb">
        <li><a href="" class="am-icon-home">首页</a></li>

    </ol>
    <div class="tpl-content-scope">
        <?php echo $systps['data']['html']; ?>
    </div>

    <div class="row">
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
            <div class="dashboard-stat blue">
                <div class="visual">
                    <i class="am-icon-shopping-cart"></i>
                </div>
                <div class="details">
                    <div class="number"> <?php echo $orderCount; ?> </div>
                    <div class="desc"> 总订单 </div>
                </div>
                <a class="more" href="<?php echo url('admin/Order/index'); ?>"> 查看更多
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
            <div class="dashboard-stat red">
                <div class="visual">
                    <i class="am-icon-table"></i>
                </div>
                <div class="details">
                    <div class="number"> <?php echo $nowOrder; ?> </div>
                    <div class="desc"> 今日订单 </div>
                </div>
                <a class="more" href="<?php echo url('admin/Order/index'); ?>"> 查看更多
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="am-icon-money"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <?php if($moneyCount == null): ?>
                        0
                        <?php else: ?>
                        <?php echo $moneyCount; endif; ?> ￥
                    </div>
                    <div class="desc"> 总销售额 </div>
                </div>
                <a class="more" href="<?php echo url('admin/Order/index'); ?>"> 查看更多
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
            <div class="dashboard-stat purple">
                <div class="visual">
                    <i class="am-icon-money"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <?php if($moneyCount == null): ?>
                        0
                        <?php else: ?>
                        <?php echo $nowMoney; endif; ?>￥
                    </div>
                    <div class="desc"> 今日销售额 </div>
                </div>
                <a class="more" href="<?php echo url('admin/Order/index'); ?>"> 查看更多
                    <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>



    </div>

    <div class="row">
        <div class="am-u-md-6 am-u-sm-12 row-mb">
            <div class="tpl-portlet">
                <div class="tpl-portlet-title">
                    <div class="tpl-caption font-green ">
                        <i class="am-icon-cloud-download"></i>
                        <span> 系统信息</span>
                    </div>

                </div>


                <div class="tpl-scrollable" >
                    <table class="am-table tpl-table">

                        <tbody>
                        <tr>
                            <td>PHP 版本</td>
                            <td><?php echo phpversion(); ?></td>

                        </tr>
                        <tr>
                            <td>本站网址</td>
                            <td><?php echo $_SERVER['SERVER_NAME']; ?></td>

                        </tr>
                        <tr>
                            <td>服务器软件</td>
                            <td><?php echo $_SERVER['SERVER_SOFTWARE']; ?></td>

                        </tr>
                        <tr>
                            <td>程序最大运行时间</td>
                            <td><?php echo ini_get('max_execution_time'); ?>m</td>

                        </tr>
                        <tr>
                            <td>服务器系统</td>
                            <td><?php echo php_uname(); ?></td>

                        </tr>
                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="am-u-md-6 am-u-sm-12 row-mb">
            <div class="tpl-portlet">
                <div class="tpl-portlet-title">
                    <div class="tpl-caption font-red ">
                        <i class="am-icon-bar-chart"></i>
                        <span> 待处理订单</span>
                    </div>
                    <div class="actions">
                        <ul class="actions-btn">


                            <a href="<?php echo url('admin/Order/index'); ?>"><li class="dark">去处理</li></a>
                        </ul>
                    </div>
                </div>
                <div class="tpl-scrollable">
                    <div class="number-stats">
                        <div class="stat-number am-fl am-u-md-6">
                            <div class="title am-text-right"> 待处理 </div>
                            <div class="number am-text-right am-text-warning"> <?php echo $checkOrdernumber; ?> </div>
                        </div>
                        <div class="stat-number am-fr am-u-md-6">
                            <div class="title"> 总订单 </div>
                            <div class="number am-text-success"> <?php echo $orderCount; ?> </div>
                        </div>

                    </div>

                    <table class="am-table tpl-table">
                        <thead>
                        <tr class="tpl-table-uppercase">
                            <th>订单名称</th>
                            <th>金额</th>
                            <th>个数</th>
                            <th>日期</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if(is_array($checkOrderList) || $checkOrderList instanceof \think\Collection || $checkOrderList instanceof \think\Paginator): if( count($checkOrderList)==0 ) : echo "" ;else: foreach($checkOrderList as $key=>$v): ?>
                        <tr>
                            <td><?php echo $v['oname']; ?></td>
                            <td><?php echo $v['money']; ?></td>
                            <td><?php echo $v['number']; ?></td>
                            <td class="font-green bold"><?php echo $v['odate']; ?></td>
                        </tr>
                       <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
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

