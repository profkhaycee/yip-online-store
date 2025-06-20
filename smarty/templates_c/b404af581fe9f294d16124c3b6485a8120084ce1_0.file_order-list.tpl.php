<?php
/* Smarty version 5.5.1, created on 2025-06-20 06:42:43
  from 'file:admin/order-list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685502e37f0c99_13593445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b404af581fe9f294d16124c3b6485a8120084ce1' => 
    array (
      0 => 'admin/order-list.tpl',
      1 => 1750400172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
))) {
function content_685502e37f0c99_13593445 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/yip/app/views/admin';
?>

<?php $_smarty_tpl->renderSubTemplate("file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


<div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Order List</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="admin-dashboard"><div class="text-tiny">Dashboard</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#"><div class="text-tiny">Order</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Order List</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- order-list -->
                                <div class="wg-box">
                                    <div class="flex items-center justify-between gap10 flex-wrap">
                                        <div class="wg-filter flex-grow">
                                            <form class="form-search" action="#">
                                                <fieldset class="name">
                                                    <input type="text" placeholder="Search here..." class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                                </fieldset>
                                                <div class="button-submit">
                                                    <button class="" type="button"><i class="icon-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        <a class="tf-button style-1 w208" href="#"><i class="icon-file-text"></i>Export all order</a>
                                    </div>
                                    <div class="wg-table table-all-category">
                                        <ul class="table-title flex gap20 mb-14">
                                            
                                            <li>
                                                <div class="body-title">Customer Name</div>
                                            </li>    
                                            <li>
                                                <div class="body-title">Order ID</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Total Amount</div>
                                            </li>
                                                                                                                                    <li>
                                                <div class="body-title">Status</div>
                                            </li>
                                                                                        <li>
                                                <div class="body-title">Action</div>
                                            </li>
                                        </ul>
                                        <ul class="flex flex-column">
                                            
                                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('orders'), 'order');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('order')->value) {
$foreach0DoElse = false;
?>
                                            <li class="product-item gap14">
                                                                                                <div class="flex items-center justify-between gap20 flex-grow">
                                                    <div class="name">
                                                        
                                                        <a href="#" class="body-title-2"><?php echo $_smarty_tpl->getValue('order')['firstname'];?>
 <?php echo $_smarty_tpl->getValue('order')['lastname'];?>
</a>
                                                    </div>
                                                    <div class="body-text"><a href='order-details?order=<?php echo $_smarty_tpl->getValue('order')['id'];?>
'> #<?php echo $_smarty_tpl->getValue('order')['id'];?>
</a></div>
                                                    <div class="body-text">₦<?php echo $_smarty_tpl->getValue('order')['total_amount'];?>
</div>
                                                                                                        <div>
                                                        <div class="block-pending"><?php echo $_smarty_tpl->getValue('order')['status'];?>
</div>
                                                    </div>
                                                                                                        <div class="list-icon-function">
                                                        <div class="item eye">
                                                            <a href='order-details?order=<?php echo $_smarty_tpl->getValue('order')['id'];?>
'><i class="icon-eye"></i></a>
                                                        </div>
                                                        <div class="item edit">
                                                            <a href='order-details?order=<?php echo $_smarty_tpl->getValue('order')['id'];?>
'><i class="icon-edit-3"></i></a>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                            
                                            
                                        </ul>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="flex items-center justify-between flex-wrap gap10">
                                        <div class="text-tiny">Showing 10 entries</div>
                                        <ul class="wg-pagination">
                                            <li>
                                                <a href="#"><i class="icon-chevron-left"></i></a>
                                            </li>
                                            <li>
                                                <a href="#">1</a>
                                            </li>
                                            <li class="active">
                                                <a href="#">2</a>
                                            </li>
                                            <li>
                                                <a href="#">3</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /order-list -->
                            </div>



<?php $_smarty_tpl->renderSubTemplate("file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>



<?php }
}
