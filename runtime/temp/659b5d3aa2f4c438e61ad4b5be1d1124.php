<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"/www/wwwroot/demo.xiangfa.me/public/../application/admin/view/order/index.html";i:1503634141;s:77:"/www/wwwroot/demo.xiangfa.me/public/../application/admin/view/conmm/main.html";i:1503634141;s:77:"/www/wwwroot/demo.xiangfa.me/public/../application/admin/view/conmm/head.html";i:1503634141;s:77:"/www/wwwroot/demo.xiangfa.me/public/../application/admin/view/conmm/foot.html";i:1503634141;}*/ ?>

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
        订单管理
    </div>
    <ol class="am-breadcrumb">
        <li><a href="" class="am-icon-home">订单管理</a></li>

    </ol>
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 订单列表
            </div>
            <div class="tpl-portlet-input tpl-fz-ml">

            </div>


        </div>
        <div class="tpl-block">
            <div class="am-g">


                <div class="am-u-sm-12 am-u-md-6">
                    <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                            <button onclick="okisnotip('<?php echo url('admin/Order/ordercek'); ?>','确定要处理这些订单吗？',2)" type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-pencil"></span> 开始处理</button>
                            <button onclick="okisnotip('<?php echo url('admin/Order/ordercek'); ?>','确定要处理这些订单吗？',3)" type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-check"></span> 处理成功</button>
                            <button onclick="okisnotip('<?php echo url('admin/Order/ordercek'); ?>','确定要处理这些订单吗？',4)" type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-close"></span> 处理失败</button>
                        </div>
                    </div>
                </div>
                <form method="get" action="<?php echo url('admin/Order/index'); ?>">
                <div class="am-u-sm-12 am-u-md-3">
                    <div class="am-form-group">
                        <select name="status" data-am-selected="{btnSize: 'sm'}">
                            <option value="all">所有类别</option>
                            <option <?php if($status == '1'): ?>selected<?php endif; ?> value="1">等待处理</option>
                            <option <?php if($status == '2'): ?>selected<?php endif; ?> value="2">已处理</option>
                            <option <?php if($status == '3'): ?>selected<?php endif; ?> value="3">已完成</option>
                            <option <?php if($status == '4'): ?>selected<?php endif; ?>value="4">处理失败</option>
                        </select>
                    </div>
                </div>
                <div class="am-u-sm-12 am-u-md-3">
                    <div class="am-input-group am-input-group-sm">
                        <input type="text" name="account" value="<?php echo $account; ?>" placeholder="充值账号搜索" class="am-form-field">
                        <span class="am-input-group-btn">
            <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="submit"></button>
          </span>
                    </div>
                </div>
                </form>
            </div>
            <div class="am-g">
                <div class="am-u-sm-12">

                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>
                            <tr>
                                <th class="table-check"><input id="checkAll" type="checkbox" class="tpl-table-fz-check"></th>
                                <th class="table-id">订单id</th>
                                <th class="table-title">订单名称</th>
                                <th class="table-title">商品id</th>
                                <th class="table-title">订单类型</th>
                                <th class="table-type">充值数量</th>
                                <th class="table-author">商品单价</th>
                                <th class="table-author">订单总价</th>
                                <th class="table-author">充值账号</th>
                                <th class="table-author">商户订单号</th>
                                <th class="table-author">支付方式</th>
                                <th class="table-author">状态</th>
                                <th class="table-date am-hide-sm-only">下单时间</th>
                                <th class="table-set">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$v): ?>
                                <td><input type="checkbox" name="checkname" value="<?php echo $v['id']; ?>"></td>
                                <td><?php echo $v['id']; ?></td>
                                <td><?php echo $v['oname']; ?></td>
                                <td><?php echo $v['gid']; ?></td>
                                <td>
                                    <?php if($v['type'] ==  1): ?>
                                    <span class="am-badge am-badge-primary am-radius">手工充值</span>
                                    <?php else: ?>
                                    <span class="am-badge am-badge-success am-radius">自动发卡</span>
                                    <?php endif; ?>
                                </td>
                                <td class="am-hide-sm-only">x<?php echo $v['number']; ?></td>
                                <td class="am-hide-sm-only"><?php echo $v['money']; ?></td>
                                <td class="am-hide-sm-only"><?php echo $v['cmoney']; ?></td>
                                <td class="am-hide-sm-only"><?php echo $v['account']; ?></td>
                                <td class="am-hide-sm-only"><?php echo $v['payid']; ?></td>
                                <td>

                                    <?php switch($v['paytype']): case "alipay": ?>
                                    <span class="am-badge am-badge-warning am-radius">支付宝</span>
                                    <?php break; case "qqpay": ?>
                                    <span class="am-badge am-badge-primary am-radius">QQ钱包</span>
                                    <?php break; case "wxpay": ?>
                                    <span class="am-badge am-badge-success am-radius">微信</span>
                                    <?php break; case "tenpay": ?>
                                    <span class="am-badge am-badge-danger am-radius">财付通</span>
                                    <?php break; endswitch; ?>
                                </td>
                                <td>

                                    <?php switch($v['status']): case "1": ?>
                                    <span class="am-badge am-badge-warning am-radius">待处理</span>
                                    <?php break; case "2": ?>
                                    <span class="am-badge am-badge-primary am-radius">开始处理</span>
                                    <?php break; case "3": ?>
                                    <span class="am-badge am-badge-success am-radius">已完成</span>
                                    <?php break; case "4": ?>
                                    <span class="am-badge am-badge-danger am-radius">处理失败</span>
                                    <?php break; endswitch; ?>
                                </td>
                                <td class="am-hide-sm-only"><?php echo date('Y-m-d H:i:s',$v['ctime']); ?></td>
                                <td>
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <button onclick="orderInfo('<?php echo $v['id']; ?>','<?php echo url('admin/Order/info'); ?>')" class="am-btn am-btn-default "><span class="am-icon-eye"></span>订单详情</button>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                        <div class="am-cf">

                            <div class="am-fr">
                                <?php echo $page; ?>
                            </div>
                        </div>
                        <hr>


                </div>

            </div>
        </div>
        <div class="tpl-alert"></div>
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

