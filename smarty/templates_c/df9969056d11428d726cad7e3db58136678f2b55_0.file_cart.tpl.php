<?php
/* Smarty version 5.5.1, created on 2025-06-20 07:58:55
  from 'file:cart.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685514bf96c5a2_69188175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df9969056d11428d726cad7e3db58136678f2b55' => 
    array (
      0 => 'cart.tpl',
      1 => 1750406330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
))) {
function content_685514bf96c5a2_69188175 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/yip/app/views';
$_smarty_tpl->renderSubTemplate("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php if ($_smarty_tpl->getValue('error') !== false) {
echo '<script'; ?>
>

    
Swal.fire({
          icon: 'error',
          text: 'could not complete payment, please try again',
          confirmButtonText: 'Ok',
        });


<?php echo '</script'; ?>
>

<?php } elseif ($_smarty_tpl->getValue('error') === false) {?>
    <?php echo '<script'; ?>
>
    

Swal.fire({
          icon: 'success',
          text: 'Payment Successful. Your cart has been cleared.',
          title: 'Payment Successful',
          showConfirmButton: true,
          confirmButtonText: 'Ok',
        });
        setTimeout(() => {
            location.href = 'cart';
        }, 2000); 


<?php echo '</script'; ?>
>
<?php }?>
  
        <!-- cart section start -->
        <div class="cart-section section-padding">
            <div class="container">
                <div class="cart-list-area">
                    <div class="top-content">
                        <h2>Shopping Cart</h2>
                        <ul class="list">
                            <li>
                                <a href="index">Home</a>
                            </li>
                            <li>
                                Shopping Cart
                            </li>
                        </ul>
                    </div>
                    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('cartItems')) == 0) {?>
                        <div class="empty-cart text-center">
                            <h3>Your cart is empty</h3>
                            <p>Looks like you haven’t added anything to your cart yet.</p>
                            <a href="shop" class="theme-btn alt-color radius-xs">Continue Shopping</a>
                        </div>
                    <?php } else { ?>
                        
                    
                    <div class="table-responsive">
                        <table class="table common-table">
                            <thead data-aos="fade-down">
                                <tr>
                                    <th class="text-center">Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cartItems'), 'cartItem');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cartItem')->value) {
$foreach0DoElse = false;
?>
                                <tr class="align-items-center py-3">
                                    <td>
                                        <div class="cart-item-thumb d-flex align-items-center gap-4">
                                                                                        <i class="bi bi-trash remove-item" data-product-id="<?php echo $_smarty_tpl->getValue('cartItem')['product'];?>
"></i>
                                            <img class="w-100" src="<?php echo $_smarty_tpl->getValue('cartItem')['image'];?>
" alt="product">
                                            <span class="head text-nowrap"><?php echo $_smarty_tpl->getValue('cartItem')['name'];?>
</span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="price-usd">
                                           ₦<span class="item-price"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('cartItem')['current_price']);?>
</span>
                                            
                                        </span>
                                    </td>
                                    <td class="price-quantity text-center">
                                        <div
                                        class="quantity d-inline-flex align-items-center justify-content-center gap-1 py-2 px-4 border n50-border_20 text-sm">
                                        <button class="quantityDecrement"><i class="fal fa-minus"></i></button>
                                        <input type="text" value="<?php echo $_smarty_tpl->getValue('cartItem')['quantity'];?>
" class="quantityValue change-qty" min="1" max="30" data-product-id="<?php echo $_smarty_tpl->getValue('cartItem')['product'];?>
">
                                        <button class="quantityIncrement"><i class="fal fa-plus"></i></button>
                                    </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="price-usd" data-product-id="<?php echo $_smarty_tpl->getValue('cartItem')['product'];?>
">
                                            ₦<span class="item-subtotal" data-product-id="<?php echo $_smarty_tpl->getValue('cartItem')['product'];?>
"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('cartItem')['subtotal']);?>
</span>
                                            
                                        </span>
                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                        <span class="text-uppercase fs-4 fw-bold">Total</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="price-usd  fs-4 fw-bold">
                                            ₦<span class="total-item-price"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('total_price'));?>
</span>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                           
                        </table>
                    </div>


                    
                    <div class="coupon-items d-flex flex-md-nowrap flex-wrap justify-content-between align-items-center gap-4 pt-4">
                                                                        <a href="checkout" class="theme-btn alt-color radius-xs ms-auto">Proceed To Checkout </a>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>



<?php $_smarty_tpl->renderSubTemplate("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

        <?php }
}
