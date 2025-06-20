<?php
/* Smarty version 5.5.1, created on 2025-06-17 21:10:38
  from 'file:products.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6851d9ce148473_27321521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '740ac2874d0c360996ca380ca5a60f044b902dd2' => 
    array (
      0 => 'products.tpl',
      1 => 1750194627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6851d9ce148473_27321521 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/yip/app/views';
?><h1>Product List</h1>

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach0DoElse = false;
?>
    <div>
        <h3><?php echo $_smarty_tpl->getValue('product')['name'];?>
</h3>
        <p>Price: ₦<?php echo $_smarty_tpl->getValue('product')['price'];?>
</p>
    </div>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

<h3>tt PRoducts</h3>
<div> 
<strong>PRODUCTS:</strong><br>
<i><?php echo $_smarty_tpl->getValue('tt');?>
</i>


</div>


<h3>ALL PRoducts</h3>
<div> 
<strong>PRODUCTS:</strong><br>
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('all_products'), 'single_product');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('single_product')->value) {
$foreach1DoElse = false;
?>
    <li><img width="150" height="74" src="<?php echo $_smarty_tpl->getValue('single_product')['image'];?>
"> - <?php echo $_smarty_tpl->getValue('single_product')['name'];?>
 </li>
    
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


</div>
<?php }
}
