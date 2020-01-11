<?php
/* Smarty version 3.1.33, created on 2020-01-10 17:37:47
  from 'D:\WWW\Yii2_cms\modules\admin\views\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1845eb9abfd0_23394426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a976a309df8f4f4e34affed4796a2028d6272c7e' => 
    array (
      0 => 'D:\\WWW\\Yii2_cms\\modules\\admin\\views\\index\\index.tpl',
      1 => 1578454959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1845eb9abfd0_23394426 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['public_header']->value;?>


    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div style="float: left">
                                    <h4 class="card-title">图片列表</h4>
                                </div>
                                <div style="float: right">
                                    <a  onclick="add_picture()" class="btn btn-primary btn-block">
                                        <span class="btn-label mr-2" style="color: #fff">
                                            添加图片
                                        </span>
                                    </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="card-body">
                                <div  class="dataTables_filter">
                                    <input type="search" style="display:inline;width:200px;line-height: 32px;margin-right: 10px;" class="form-control form-control-sm" placeholder="" aria-controls="basic-datatables">
                                    <a href="#" class="btn btn-success ">
                                        搜索
                                    </a>
                                </div>
                                <div class="table-responsive">
                                    <table id="basic-datatables" class="display table table-striped table-hover" >
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="page">
                                    <ul class="pagination">

                                        <li class="paginate_button page-item active">
                                            <a href="?page=1" aria-controls="basic-datatables"  class="page-link">
                                                1
                                            </a>
                                        </li>
                                        <li class="paginate_button page-item">
                                            <a href="?page=2" aria-controls="basic-datatables" class="page-link">
                                                2
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div id="message_box" >
    <div id="add_picture_box" style="display: none">
        <div class="col-md-12 col-lg-8" style="margin-left: 50px;">
            <div class="form-group">
                <span >图片名称:</span>
                <input type="text" class="form-control" style="width: 400px;display: inline;margin-left: 10px;" id="picture_name" placeholder="请输入图片名称">
            </div>


            <div class="form-group">
                <span >选择图片:</span>
                <input type="file" style="width: 400px;display: inline;margin-left: 10px;"   id="picture_source">
            </div>
            <div class="card-action" style="text-align: center">
                <button class="btn btn-success" onclick="save_picture()" style="margin-left: auto;margin-top:20px;margin-bottom:20px;: ">Submit</button>
            </div>

        </div>
    </div>
</div>

    <?php echo '<script'; ?>
 >
        $(document).ready(function() {
//            $('#basic-datatables').DataTable({
//            });


        });

        function add_picture(){
            layer.open({
                title:'添加图片',
                type: 1,
                area: ['800px', '600px'], //宽高
                content: $("#add_picture_box")
            });
        };

        function save_picture(){
            var picture_name = $("#picture_name").val();
            var picture_source = $("#picture_source")[0].files[0];

            var formData = new FormData();
            formData.append("picture_name",picture_name);
            formData.append("picture_source", picture_source);

            $.ajax({
                url:'admin/picture/add_picture',
                dataType:'json',
                type:'POST',
                async: false,
                data: formData,
                processData : false, // 使数据不做处理
                contentType : false, // 不要设置Content-Type请求头
                success: function(data){
                    if (data.status == 200) {
                        layer.msg(data.msg,{time:2000},function(){
                            layer.closeAll();
                        })
                    }

                },
                error:function(data){
                    layer.msg(data.msg)
                }
            });
        };

    <?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->tpl_vars['public_footer']->value;
}
}
