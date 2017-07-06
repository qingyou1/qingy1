<?php
/* Smarty version 3.1.30, created on 2017-07-05 19:12:16
  from "F:\wampserver\wamp\www\php\qingyou\template\index\zjh_login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595d1df02472e8_19108398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '383a2c1a38936b47a5acdcb47c97cf365e4f70da' => 
    array (
      0 => 'F:\\wampserver\\wamp\\www\\php\\qingyou\\template\\index\\zjh_login.html',
      1 => 1499274735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595d1df02472e8_19108398 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/zjh_main.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/zjh_base.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/header.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="zjh_Login">
    <form action="" class="zjhLogin_box">
        <div class="face"></div>
        <label>用户名 <em>NAME</em></label>
        <div class="account" style="margin-top: 0">
            <span class="loguser"></span>
            <input type="text"  name="mname" placeholder="请输入用户名或手机号">
        </div>
        <label>密码 <em>PASSWORD</em></label>
        <div class="password" style="margin-top: 0">
            <span class="logpass"></span>
            <input type="password"  name="mpass" placeholder="请输入字母组合的六位密码">
        </div>
        <div class="caozuo">
        <a href="" class="zhpass">找回密码</a>
        <a href="zjh_Reg.html" class="zc">快速注册</a>
        </div>
        <button class="Regbtn willLogin">
            登录
        </button>
    </form>

    <ul class="zjhthird">
        <li class="zjhwchat"></li>
        <span></span>
        <li class="zjhqq"></li>
        <span></span>
        <li class="zjhwb"></li>
    </ul>
</div>
</body>
</html><?php }
}
