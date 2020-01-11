<?php
/* Smarty version 3.1.33, created on 2020-01-10 17:46:12
  from 'D:\WWW\Yii2_cms\modules\home\views\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1847e47112b5_64691535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd53a8c266f9e6c8b3ab8a64d6705add0bc1926dc' => 
    array (
      0 => 'D:\\WWW\\Yii2_cms\\modules\\home\\views\\index\\index.tpl',
      1 => 1578643765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1847e47112b5_64691535 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['public_header']->value;?>


    <!-- Portfolio block BEGIN -->
    <div class="portfolio-block content content-center" id="portfolio" style="min-height: 550px;">
        <div class="row">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'e');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
?>
            <div class="item col-md-2 col-sm-6 col-xs-12">
                <img src="/upload/<?php echo $_smarty_tpl->tpl_vars['e']->value['show_url'];?>
" alt="NAME" class="img-responsive">
                <a href="/upload/<?php echo $_smarty_tpl->tpl_vars['e']->value['url'];?>
" class="zoom valign-center">
                    <div class="valign-center-elem">
                        <strong><?php echo $_smarty_tpl->tpl_vars['e']->value['name'];?>
</strong>
                        <b>Details</b>
                    </div>
                </a>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
    </div>

<div id="page" style="text-align: center">
</div>

    <div style="height:50px;"></div>

<?php echo '<script'; ?>
>
    $(function(){
        create_page('<?php echo $_smarty_tpl->tpl_vars['now_page']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['total_page']->value;?>
', '&size=18');
    })
<?php echo '</script'; ?>
>


<?php echo $_smarty_tpl->tpl_vars['public_footer']->value;
}
}
