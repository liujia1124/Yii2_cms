<?php
/* Smarty version 3.1.33, created on 2020-01-10 17:46:12
  from 'D:\WWW\Yii2_cms\modules\home\views\common\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1847e45415a0_80526587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56428f8fc03462c357d07db938327006aeed0847' => 
    array (
      0 => 'D:\\WWW\\Yii2_cms\\modules\\home\\views\\common\\header.tpl',
      1 => 1578628413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1847e45415a0_80526587 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta content="Metronic Shop UI description" name="description">
    <meta content="Metronic Shop UI keywords" name="keywords">
    <meta content="keenthemes" name="author">

    <meta property="og:site_name" content="-CUSTOMER VALUE-">
    <meta property="og:title" content="-CUSTOMER VALUE-">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
    <meta property="og:url" content="-CUSTOMER VALUE-">

    <!-- Global styles BEGIN -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Global styles END -->
    <!-- Page level plugin styles BEGIN -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/pages/css/animate.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <!-- Page level plugin styles END -->
    <!-- Theme styles BEGIN -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/pages/css/components.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/pages/css/slider.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/onepage/css/style.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/onepage/css/style-responsive.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/onepage/css/themes/red.css" rel="stylesheet" id="style-color">
    <link href="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/onepage/css/custom.css" rel="stylesheet">
    <!-- Theme styles END -->
</head>
<!--DOC: menu-always-on-top class to the body element to set menu on top -->
<body class="menu-always-on-top">
<!-- Header BEGIN -->
<div class="header header-mobi-ext">
    <div class="container">
        <div class="row">
            <!-- Logo BEGIN -->
            <div class="col-md-2 col-sm-2">
                <a class="scroll site-logo" href="#promo-block"><img src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/onepage/img/logo/free.png" width="100px;"  alt=""></a>
            </div>
            <!-- Logo END -->
            <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>
            <!-- Navigation BEGIN -->
            <div class="col-md-10 pull-right" style="display: none">
                <ul class="header-navigation">
                    <li class="current"><a href="#promo-block">首页</a></li>
                    <li><a href="#about">关于我们</a></li>
                    <li><a href="#services">产品服务</a></li>
                    <li><a href="#team">团队</a></li>
                    <li><a href="#portfolio">成功案例</a></li>
                    <li><a href="#benefits">同行优势</a></li>
                    <li><a href="#prices">产品价格</a></li>
                    <li><a href="#contact">联系方式</a></li>
                </ul>
            </div>
            <!-- Navigation END -->
        </div>
    </div>
</div>


<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/plugins/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->
<!-- Load JavaScripts at the bottom, because it will reduce page load time -->
<!-- Core plugins BEGIN (For ALL pages) -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/plugins/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/plugins/jquery-migrate.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- Core plugins END (For ALL pages) -->
<!-- Core plugins BEGIN (required only for current page) -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"><?php echo '</script'; ?>
><!-- pop up -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/plugins/jquery.easing.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/plugins/jquery.parallax.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/plugins/jquery.scrollTo.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/onepage/scripts/jquery.nav.js"><?php echo '</script'; ?>
>
<!-- Core plugins END (required only for current page) -->
<!-- Global js BEGIN -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/onepage/scripts/layout.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/pages/scripts/bs-carousel.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_common_assets']->value;?>
/js/common.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    jQuery(document).ready(function() {
        Layout.init();
    });
<?php echo '</script'; ?>
>
<!-- Header END -->
<?php }
}
