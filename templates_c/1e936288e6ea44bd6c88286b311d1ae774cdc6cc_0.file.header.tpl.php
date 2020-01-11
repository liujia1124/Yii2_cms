<?php
/* Smarty version 3.1.33, created on 2020-01-10 17:37:47
  from 'D:\WWW\Yii2_cms\modules\admin\views\common\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1845eb7b6dd4_08335952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e936288e6ea44bd6c88286b311d1ae774cdc6cc' => 
    array (
      0 => 'D:\\WWW\\Yii2_cms\\modules\\admin\\views\\common\\header.tpl',
      1 => 1578386386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1845eb7b6dd4_08335952 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/img/icon.ico" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/js/plugin/webfont/webfont.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    <?php echo '</script'; ?>
>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/css/atlantis.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/css/demo.css">

    <!--   Core JS Files   -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/js/core/jquery.3.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/js/core/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/js/core/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/layer/layer.js"><?php echo '</script'; ?>
>
    <!-- jQuery UI -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"><?php echo '</script'; ?>
>
    <!-- jQuery Scrollbar -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"><?php echo '</script'; ?>
>
    <!-- Chart JS -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/js/plugin/chart.js/chart.min.js"><?php echo '</script'; ?>
>
    <!-- jQuery Sparkline -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/js/plugin/jquery.sparkline/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
    <!-- Chart Circle -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/js/plugin/chart-circle/circles.min.js"><?php echo '</script'; ?>
>
    <!-- Datatables -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/js/plugin/datatables/datatables.min.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap Notify -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/js/plugin/bootstrap-notify/bootstrap-notify.min.js"><?php echo '</script'; ?>
>

    <!-- jQuery UI -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"><?php echo '</script'; ?>
>
    <!-- Atlantis JS -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/js/atlantis.min.js"><?php echo '</script'; ?>
>
    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/js/setting-demo2.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="wrapper">
    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="blue">

            <a href="index.html" class="logo">
                <img src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/img/logo.svg" alt="navbar brand" class="navbar-brand">
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
            </button>
            <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="icon-menu"></i>
                </button>
            </div>
        </div>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
            <div class="container-fluid">
                <div class="collapse" id="search-nav">
                    <form class="navbar-left navbar-form nav-search mr-md-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button type="submit" class="btn btn-search pr-1">
                                    <i class="fa fa-search search-icon"></i>
                                </button>
                            </div>
                            <input type="text" placeholder="Search ..." class="form-control">
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    <li class="nav-item toggle-nav-search hidden-caret">
                        <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-envelope"></i>
                        </a>
                        <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                            <li>
                                <div class="dropdown-title d-flex justify-content-between align-items-center">
                                    Messages
                                    <a href="#" class="small">Mark all as read</a>
                                </div>
                            </li>
                            <li>
                                <div class="message-notif-scroll scrollbar-outer">
                                    <div class="notif-center">
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/img/jm_denis.jpg" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="subject">Jimmy Denis</span>
                                                <span class="block">
														How are you ?
													</span>
                                                <span class="time">5 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/img/chadengle.jpg" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="subject">Chad</span>
                                                <span class="block">
														Ok, Thanks !
													</span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/img/mlane.jpg" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="subject">Jhon Doe</span>
                                                <span class="block">
														Ready for the meeting today...
													</span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/img/talha.jpg" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="subject">Talha</span>
                                                <span class="block">
														Hi, Apa Kabar ?
													</span>
                                                <span class="time">17 minutes ago</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="notification">4</span>
                        </a>
                        <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                            <li>
                                <div class="dropdown-title">You have 4 new notification</div>
                            </li>
                            <li>
                                <div class="notif-scroll scrollbar-outer">
                                    <div class="notif-center">
                                        <a href="#">
                                            <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
                                            <div class="notif-content">
													<span class="block">
														New user registered
													</span>
                                                <span class="time">5 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
                                            <div class="notif-content">
													<span class="block">
														Rahmad commented on Admin
													</span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/img/profile2.jpg" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
													<span class="block">
														Reza send messages to you
													</span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
                                            <div class="notif-content">
													<span class="block">
														Farrah liked Admin
													</span>
                                                <span class="time">17 minutes ago</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown hidden-caret">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                            <div class="avatar-sm">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                            <div class="dropdown-user-scroll scrollbar-outer">
                                <li>
                                    <div class="user-box">
                                        <div class="avatar-lg"><img src="<?php echo $_smarty_tpl->tpl_vars['view_home_assets']->value;?>
/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                                        <div class="u-text">
                                            <h4>Hizrian</h4>
                                            <p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">My Profile</a>
                                    <a class="dropdown-item" href="#">My Balance</a>
                                    <a class="dropdown-item" href="#">Inbox</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Account Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Logout</a>
                                </li>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>




    <!-- Sidebar -->
    <div class="sidebar sidebar-style-2">
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <ul class="nav nav-primary">
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#base">
                            <i class="fas fa-layer-group"></i>
                            <p>Base</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="components/avatars.html">
                                        <span class="sub-item">Avatars</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/buttons.html">
                                        <span class="sub-item">Buttons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/gridsystem.html">
                                        <span class="sub-item">Grid System</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/panels.html">
                                        <span class="sub-item">Panels</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/notifications.html">
                                        <span class="sub-item">Notifications</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/sweetalert.html">
                                        <span class="sub-item">Sweet Alert</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/font-awesome-icons.html">
                                        <span class="sub-item">Font Awesome Icons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/simple-line-icons.html">
                                        <span class="sub-item">Simple Line Icons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/flaticons.html">
                                        <span class="sub-item">Flaticons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components/typography.html">
                                        <span class="sub-item">Typography</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#sidebarLayouts">
                            <i class="fas fa-th-list"></i>
                            <p>Sidebar Layouts</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="sidebarLayouts">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="sidebar-style-1.html">
                                        <span class="sub-item">Sidebar Style 1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="overlay-sidebar.html">
                                        <span class="sub-item">Overlay Sidebar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="compact-sidebar.html">
                                        <span class="sub-item">Compact Sidebar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="static-sidebar.html">
                                        <span class="sub-item">Static Sidebar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="icon-menu.html">
                                        <span class="sub-item">Icon Menu</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#forms">
                            <i class="fas fa-pen-square"></i>
                            <p>Forms</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="forms">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="forms/forms.html">
                                        <span class="sub-item">Basic Form</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#tables">
                            <i class="fas fa-table"></i>
                            <p>Tables</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="tables">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="tables/tables.html">
                                        <span class="sub-item">Basic Table</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tables/datatables.html">
                                        <span class="sub-item">Datatables</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#maps">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Maps</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="maps">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="maps/jqvmap.html">
                                        <span class="sub-item">JQVMap</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#charts">
                            <i class="far fa-chart-bar"></i>
                            <p>Charts</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="charts">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="charts/charts.html">
                                        <span class="sub-item">Chart Js</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="charts/sparkline.html">
                                        <span class="sub-item">Sparkline</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="widgets.html">
                            <i class="fas fa-desktop"></i>
                            <p>Widgets</p>
                            <span class="badge badge-success">4</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="collapse" href="#submenu">
                            <i class="fas fa-bars"></i>
                            <p>Menu Levels</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="submenu">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a data-toggle="collapse" href="#subnav1">
                                        <span class="sub-item">Level 1</span>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="subnav1">
                                        <ul class="nav nav-collapse subnav">
                                            <li>
                                                <a href="#">
                                                    <span class="sub-item">Level 2</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="sub-item">Level 2</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a data-toggle="collapse" href="#subnav2">
                                        <span class="sub-item">Level 1</span>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse" id="subnav2">
                                        <ul class="nav nav-collapse subnav">
                                            <li>
                                                <a href="#">
                                                    <span class="sub-item">Level 2</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sub-item">Level 1</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->
<?php }
}
