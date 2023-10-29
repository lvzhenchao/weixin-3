<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:102:"/home/mycode/weixin-小程序/weixin-3/weixin_backend/public/../application/admin/view/user/index.html";i:1521504720;s:95:"/home/mycode/weixin-小程序/weixin-3/weixin_backend/application/admin/view/layout/layout.html";i:1521516130;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>lampol-微信小程序-后台管理系统</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="/static/css/style.css">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
<script src="/static/js/jquery.js"></script>
<script src="/static/js/jquery.mCustomScrollbar.concat.min.js"></script>

</head>
<body>
<!--header-->
<header>
 <h1><img src="/static/images/admin_logo.png"/></h1>
 <ul class="rt_nav">
  <li><a href="login.html" class="quit_icon">安全退出</a></li>
 </ul>
</header>
<!--aside nav-->
<!--aside nav-->
<aside class="lt_aside_nav content mCustomScrollbar">
 <h2><a href="/admin">首页</a></h2>
 <ul>
   <li>
   <dl>
    <dt>图片管理</dt>
    <!--当前链接则添加class:active-->
    <dd><a href="/pic" class="active">图片列表</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>商品管理</dt>
    <!--当前链接则添加class:active-->
    <dd><a href="/goods" class="active">商品列表</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>订单信息</dt>
    <dd><a href="/order">订单列表</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>会员管理</dt>
    <dd><a href="/user">会员列表</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>基础设置</dt>
    <dd><a href="setting.html">站点基础设置示例</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>配送与支付设置</dt>
    <dd><a href="express_list.html">配送方式</a></dd>
    <dd><a href="pay_list.html">支付方式</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>在线统计</dt>
    <dd><a href="discharge_statistic.html">流量统计</a></dd>
    <dd><a href="sales_volume.html">销售额统计</a></dd>
   </dl>
  </li>
  <li>
   <p class="btm_infor">© DeathGhost.cn 版权所有</p>
  </li>
 </ul>
</aside> 


<section class="rt_wrap content mCustomScrollbar">
 <div class="rt_content">
      <div class="page_title">
       <h2 class="fl">会员列表</h2>
       <a href="user_detail.html" class="fr top_rt_btn add_icon">添加新会员</a>
      </div>
      <section class="mtb">
       <select class="select">
        <option>会员等级</option>
        <option>普通会员</option>
        <option>高级会员</option>
       </select>
       <input type="text" class="textbox textbox_225" placeholder="输入会员号/手机/电子邮件查询..."/>
       <input type="button" value="查询" class="group_btn"/>
      </section>
      <table class="table">
       <tr>
        <th>Id</th>
        <th>会员头像</th>
        <th>会员账号</th>
        <th>手机号码</th>
        <th>电子邮件</th>
        <th>验证</th>
        <th>会员等级</th>
        <th>账户余额</th>
        <th>冻结资金</th>
        <th>操作</th>
       </tr>
       <tr>
        <td class="center">001</td>
        <td class="center"><img src="upload/user_002.png" width="50" height="50"/></td>
        <td>DeathGhost</td>
        <td class="center">18300000000</td>
        <td class="center">deathghost@sina.cn</td>
        <td class="center"><a title="已验证" class="link_icon">&#89;</a></td>
        <td class="center">普通会员</td>
        <td class="center">
         <strong class="rmb_icon">5559.00</strong>
        </td>
        <td class="center">
         <strong class="rmb_icon">59.00</strong>
        </td>
        <td class="center">
         <a href="user_detail.html" title="编辑" class="link_icon">&#101;</a>
         <a href="#" title="删除" class="link_icon">&#100;</a>
        </td>
       </tr>
       <tr>
        <td class="center">002</td>
        <td class="center"><img src="upload/user_001.png" width="50" height="50"/></td>
        <td>DeathGhost02</td>
        <td class="center">15800000000</td>
        <td class="center">232650413@sina.cn</td>
        <td class="center"><a title="未验证" class="link_icon">&#88;</a></td>
        <td class="center">高级会员</td>
        <td class="center">
         <strong class="rmb_icon">199.00</strong>
        </td>
        <td class="center">
         <strong class="rmb_icon">15.00</strong>
        </td>
        <td class="center">
         <a href="user_detail.html" title="编辑" class="link_icon">&#101;</a>
         <a href="#" title="删除" class="link_icon">&#100;</a>
        </td>
       </tr>
      </table>
      <aside class="paging">
       <a>第一页</a>
       <a>1</a>
       <a>2</a>
       <a>3</a>
       <a>…</a>
       <a>1004</a>
       <a>最后一页</a>
      </aside>
 </div>
</section>



<script src="/static/js/serial.js" type="text/javascript"></script>
<script src="/static/js/pie.js" type="text/javascript"></script>
</body>
</html>
