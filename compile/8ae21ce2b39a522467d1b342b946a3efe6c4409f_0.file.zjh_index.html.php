<?php
/* Smarty version 3.1.30, created on 2017-07-06 02:39:59
  from "F:\wampserver\wamp\www\php\qingyou\template\index\zjh_index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595d86df6f7230_96659274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ae21ce2b39a522467d1b342b946a3efe6c4409f' => 
    array (
      0 => 'F:\\wampserver\\wamp\\www\\php\\qingyou\\template\\index\\zjh_index.html',
      1 => 1499301597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595d86df6f7230_96659274 (Smarty_Internal_Template $_smarty_tpl) {
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
/zjh_base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/zjh_main.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/animate.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
    <!--<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/login.js"><?php echo '</script'; ?>
>-->
</head>
<body style="font-family: 苹方">
    <div class="indexZjh">
        <div class="animated bounceInDown zjhlogo" style="animation-duration: 1.3s;"></div>
        <div class="zjhlogin">
            <!--href="<?php echo LOGIN_PATH;?>
/template/index/zjh_login.html"-->
            <a href="javascript:;" class="login_In"><span>登录</span></a>
        </div>
        <div class="zjhreg">
            <!--href="<?php echo LOGIN_PATH;?>
/template/index/zjh_Reg.html"-->
            <a href="javascript:;" class="reg_In"><span>注册</span></a>
        </div>
        <ul class="zjhthird">
            <li class="zjhwchat"></li>
            <span></span>
            <li class="zjhqq"></li>
            <span></span>
            <li class="zjhwb"></li>
        </ul>
    </div>
</body>
<?php echo '<script'; ?>
>
    $(".login_In").click(function () {
        setTimeout(function () {
            location.href="index.php?m=index&f=login";

        },1000)
    })
    $(".reg_In").click(function () {
        setTimeout(function () {
            location.href="index.php?m=index&f=login&a=regIn";

        },1000)
    })
<?php echo '</script'; ?>
>
</html><?php }
}
