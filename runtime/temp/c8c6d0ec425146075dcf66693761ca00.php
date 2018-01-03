<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"/www/wwwroot/demo.xiangfa.me/public/../application/index/view/index/index.html";i:1503634141;s:77:"/www/wwwroot/demo.xiangfa.me/public/../application/index/view/conmm/main.html";i:1503634141;s:77:"/www/wwwroot/demo.xiangfa.me/public/../application/index/view/conmm/head.html";i:1503634141;s:77:"/www/wwwroot/demo.xiangfa.me/public/../application/index/view/conmm/foot.html";i:1503634141;}*/ ?>

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

            <div class="tpl-logo">
                <?php echo config('sysconf.name'); ?> <i class="am-icon-skyatlas"></i>

            </div>

    </div>
    <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">


            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen" class="tpl-header-list-link"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>

            <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                    <span class="tpl-header-list-user-nick"></span><span class="tpl-header-list-user-ico"> <img src="http://q4.qlogo.cn/headimg_dl?dst_uin=<?php echo config('sysconf.kfqq'); ?>&spec=100"></span>
                </a>

            </li>

        </ul>
    </div>
</header>


<div class="tpl-page-container tpl-page-header-fixed">


    <div class="tpl-left-nav tpl-left-nav-hover">
        <div class="tpl-left-nav-title">
            菜单
        </div>
        <div class="tpl-left-nav-list">
            <ul class="tpl-left-nav-menu">
                <li class="tpl-left-nav-item">
                    <a href="<?php echo url('index/Index/index'); ?>" class="nav-link <?php if(($controller_name == 'Index') && ($action_name == 'index')): ?> active <?php endif; ?>">
                        <i class="am-icon-home"></i>
                        <span>自助下单</span>
                    </a>
                </li>
                <li class="tpl-left-nav-item">
                    <a href="<?php echo url('index/Chaka/index'); ?>" class="nav-link <?php if(($controller_name == 'Chaka')): ?> active <?php endif; ?>">
                    <i class="am-icon-eye"></i>
                    <span>进度查询</span>
                    </a>
                </li>



            </ul>
        </div>
    </div>





    

<div class="tpl-content-wrapper">
    <div class="tpl-content-page-title">
        <?php echo config('sysconf.name'); ?> <?php echo config('sysconf.houzui'); ?>
    </div>
    <ol class="am-breadcrumb">
        <li><a href="#" class="am-icon-home">首页</a></li>
    </ol>
    <div class="tpl-content-scope">
        <div class="note note-info">
           <?php echo config('sysconf.gtips'); ?>
        </div>
    </div>

    <div class="row">
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
            <div class="dashboard-stat blue">
                <div class="visual">
                    <i class="am-icon-comments-o"></i>
                </div>
                <div class="details">
                    <div class="number"> <?php echo $countDay; ?>天 </div>
                    <div class="desc"> 本站已稳定运行 </div>
                </div>

            </div>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
            <div class="dashboard-stat red">
                <div class="visual">
                    <i class="am-icon-bar-chart-o"></i>
                </div>
                <div class="details">
                    <div class="number"> <?php echo $orderCount; ?>笔 </div>
                    <div class="desc"> 总订单 </div>
                </div>

            </div>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
            <div class="dashboard-stat purple">
                <div class="visual">
                    <i class="am-icon-thumbs-up"></i>
                </div>
                <div class="details">
                    <div class="number"> <?php echo $checkOrder; ?> </div>
                    <div class="desc"> 已处理成功的订单 </div>
                </div>

            </div>
        </div>
        <div class="am-u-lg-3 am-u-md-6 am-u-sm-12">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="am-icon-money"></i>
                </div>
                <div class="details">
                    <div class="number"> <?php echo $moneyCount; ?> ￥</div>
                    <div class="desc"> 总流水 </div>
                </div>

            </div>
        </div>




    </div>

    <div class="row">
        <div class="am-u-md-6 am-u-sm-12 row-mb">
            <div class="tpl-portlet">
                <div class="tpl-portlet-title">
                    <div class="tpl-caption font-green ">
                        <i class="am-icon-hand-grab-o"></i>
                        <span> 人工代充</span>
                    </div>

                </div>

                <div class="tpl-scrollable">
                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 ">
                            <form class="am-form am-form-horizontal" id="sgform" >
                                <div class="am-form-group">
                                    <label for="cid" class="am-u-sm-2 am-form-label">商品分类</label>
                                    <div class="am-u-sm-10">
                                        <select id="sgcid"  class="am-form-field am-round" >
                                            <option value="0">请选择商品分类</option>
                                            <?php if(is_array($sclass) || $sclass instanceof \think\Collection || $sclass instanceof \think\Paginator): if( count($sclass)==0 ) : echo "" ;else: foreach($sclass as $key=>$v): ?>
                                            <option value="<?php echo $v['id']; ?>" ><?php echo $v['name']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="gid" class="am-u-sm-2 am-form-label">商品列表</label>
                                    <div class="am-u-sm-10">
                                        <select  class="am-form-field am-round"  id="glist">
                                            <option value="">请选择商品</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="money" class="am-u-sm-2 am-form-label">商品单价</label>
                                    <div class="am-u-sm-10">
                                        <input type="text" id="money" class="am-form-field am-round" disabled="disabled" value=""  >
                                    </div>
                                </div>



                                <div class="am-form-group">
                                    <label for="otitle" class="am-u-sm-2 am-form-label">购买数量</label>
                                    <div class="am-u-sm-10">
                                        <input id="number"  class="am-form-field am-round" type="text" value="1"  >
                                    </div>
                                </div>



                                <div class="am-form-group" id="okshop">

                                    <div class="am-u-sm-12 am-u-sm-push-5">
                                        <a onclick="okSgOrder()" class="am-btn am-btn-primary">确认购买</a>
                                    </div>

                                </div>



                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="am-u-md-6 am-u-sm-12 row-mb">
            <div class="tpl-portlet">
                <div class="tpl-portlet-title">
                    <div class="tpl-caption font-red ">
                        <i class="am-icon-credit-card-alt"></i>
                        <span> 自动提卡</span>
                    </div>
                    <div class="actions">

                    </div>
                </div>
                <div class="tpl-scrollable">
                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 ">
                            <form class="am-form am-form-horizontal" id="zsgform" >
                                <div class="am-form-group">
                                    <label for="zcid" class="am-u-sm-2 am-form-label">商品分类</label>
                                    <div class="am-u-sm-10">
                                        <select id="zsgcid"  class="am-form-field am-round" >
                                            <option value="0">请选择商品分类</option>
                                            <?php if(is_array($kclass) || $kclass instanceof \think\Collection || $kclass instanceof \think\Paginator): if( count($kclass)==0 ) : echo "" ;else: foreach($kclass as $key=>$v): ?>
                                            <option value="<?php echo $v['id']; ?>" ><?php echo $v['name']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="zgid" class="am-u-sm-2 am-form-label">商品列表</label>
                                    <div class="am-u-sm-10">
                                        <select  class="am-form-field am-round"  id="zglist">
                                            <option value="">请选择商品</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="money" class="am-u-sm-2 am-form-label">商品单价</label>
                                    <div class="am-u-sm-10">
                                        <input type="text" id="zmoney" class="am-form-field am-round" disabled="disabled" value=""  >
                                    </div>
                                </div>



                                <div class="am-form-group">
                                    <label for="zotitle" class="am-u-sm-2 am-form-label">购买数量</label>
                                    <div class="am-u-sm-10">
                                        <input id="znumber"  class="am-form-field am-round" type="text" value="1"  >
                                    </div>
                                </div>



                                <div class="am-form-group" id="zokshop">

                                    <div class="am-u-sm-12 am-u-sm-push-5">
                                        <a onclick="okZdOrder()" class="am-btn am-btn-primary">确认购买</a>
                                    </div>

                                </div>



                            </form>
                        </div>

                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div  class="am-u-md-6 am-u-sm-12 row-mb">


        </div>
        <div class="am-u-md-6 am-u-sm-12 row-mb">

        </div>
    </div>



</div>

    

</div>



</div>

<footer data-am-widget="footer"
        class="am-footer am-footer-default"
        data-am-footer="{  }">
   <?php echo config('sysconf.foot'); ?>
</footer>



</body>

</html>
<script src="<?php echo STATIC_PATH; ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo STATIC_PATH; ?>/assets/js/amazeui.min.js"></script>
<script src="<?php echo STATIC_PATH; ?>/assets/js/app.js"></script>
<script src="<?php echo STATIC_PATH; ?>/layer/layer.js"></script>



<script>
    var getGoodsUrl = "<?php echo url('index/Index/getGoodsList'); ?>";
    var getGoodsInfo = "<?php echo url('index/Index/getGoodsInfo'); ?>";
    var postSgOrder = "<?php echo url('index/Index/postSgOrder'); ?>";
    var postZdOrder = "<?php echo url('index/Index/postZdOrder'); ?>";

</script>
    <script src="<?php echo STATIC_PATH; ?>/js/index/index.js"></script>
    <?php if(($is_shouji == 2) && ($tips != null)): ?>
    <script>
        $(function(){
            $.post('<?php echo url('index/Index/getTips'); ?>',{},function(result){

                if(result.code == 0){
                    layer.alert(result.msg,{icon:2})
                }else{
                    layer.open({
                        type: 1,
                        title: '公告',

                        content: result.data
                    });
                }
            });
        });
    </script>
    <?php endif; ?>


