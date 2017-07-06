<?php
/* Smarty version 3.1.30, created on 2017-07-06 02:53:30
  from "F:\wampserver\wamp\www\php\qingyou\template\index\zjh_Reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595d8a0abbbc14_47549231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '529c7448e659598b067ea4744d0e90abcaaef095' => 
    array (
      0 => 'F:\\wampserver\\wamp\\www\\php\\qingyou\\template\\index\\zjh_Reg.html',
      1 => 1499302306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595d8a0abbbc14_47549231 (Smarty_Internal_Template $_smarty_tpl) {
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
/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/header.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="zjh_Reg">
    <form class="Regbox">
        <div class="account">
            <span></span>
            <input type="text"  name="mname"  placeholder="请输入用户名">
        </div>
        <div class="phone">
            <span></span>
            <input type="text"  name="telphone"  class="telphone" placeholder="请绑定手机号方便找回密码">
        </div>
        <div class="password">
            <span></span>
            <input type="password"  name="mpass" class="mpass" placeholder="请输入数字字母组合的六位密码">
        </div>
        <div class="password">
            <span></span>
            <input type="password"  name="mpass1" id="mpass1" placeholder="请再次输入密码">
        </div>
        <button class="Regbtn willReg">
            立即注册
        </button>
    </form>
</div>
</body>
<?php echo '<script'; ?>
>
    $.extend($.validator.messages, {
        required:"不能为空!"
    })
    $(".Regbox").validate({
        rules:{
            mname:{
                required:true,
            },
            telphone:{
                required:true,
            },
            mpass:{
                required:true,
            },
            mpass1:{
                required:true,
                equalTo:".mpass"
            },
        },
        messages:{
          mpass1:"两次密码输入不一致"
        },
        debug:true
    })

<?php echo '</script'; ?>
>
</html><?php }
}
