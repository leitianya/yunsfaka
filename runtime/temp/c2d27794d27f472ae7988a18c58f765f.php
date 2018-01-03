<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"/www/wwwroot/demo.xiangfa.me/public/../application/index/view/index/getgoodslist.html";i:1503634141;}*/ ?>
<option value="0">请选择商品</option>
<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$v): ?>
<option value="<?php echo $v['id']; ?>" ><?php echo $v['name']; ?>&nbsp;&nbsp;<?php if($v['type'] == '2'): ?>--库存(<?php echo $v['kucun']; ?>)<?php endif; ?></option>
<?php endforeach; endif; else: echo "" ;endif; ?>