<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:103:"/home/mycode/weixin-小程序/weixin-3/weixin_backend/public/../application/admin/view/login/index.html";i:1521506898;}*/ ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>后台登录</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="/static/css/style.css" />
<style>
body{height:100%;background:#16a085;overflow:hidden;}
canvas{z-index:-1;position:absolute;}
</style>
<script src="/static/js/jquery.js"></script>
<script src="/static/js/verificationNumbers.js"></script>
<script src="/static/js/Particleground.js"></script>
</head>
<body>
<dl class="admin_login">
 <dt>
  <strong style="color:white">后台管理系统</strong>
  <em>lampol wechat</em>
 </dt>
 <dd class="user_icon">
  <input type="text" placeholder="账号" class="login_txtbx"/>
 </dd>
 <dd class="pwd_icon">
  <input type="password" placeholder="密码" class="login_txtbx"/>
 </dd>
 <dd class="val_icon">
  <div class="checkcode">
    <input type="text" id="J_codetext" placeholder="验证码" maxlength="4" class="login_txtbx">
    <canvas class="J_codeimg" id="myCanvas" onclick="createCode()">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>
  </div>
  <input type="button" value="验证码核验" class="ver_btn" onClick="validate();">
 </dd>
 <dd>
  <input type="button" value="立即登陆" class="submit_btn"/>
 </dd>
 <dd>
  <p>© 2015-2018  版权所有</p>
  <p>lampol</p>
 </dd>
</dl>
</body>
</html>
