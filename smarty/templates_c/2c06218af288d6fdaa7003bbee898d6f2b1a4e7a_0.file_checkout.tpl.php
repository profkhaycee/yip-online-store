<?php
/* Smarty version 5.5.1, created on 2025-06-19 22:05:48
  from 'file:checkout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685489bcaca420_29803892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c06218af288d6fdaa7003bbee898d6f2b1a4e7a' => 
    array (
      0 => 'checkout.tpl',
      1 => 1750369106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
))) {
function content_685489bcaca420_29803892 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/yip/app/views';
$_smarty_tpl->renderSubTemplate("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

 

        <!-- Checkout Section Start -->
        <section class="checkout-section fix section-padding">
            <div class="container">
                <div class="checkout-wrapper">
                    <div class="top-content">
                        <h2>Checkout</h2>
                        <ul class="list">
                            <li>
                                <a href="index">Home</a>
                            </li>
                            <li>
                                Checkout
                            </li>
                        </ul>
                    </div>
                    <form action="checkout-pay" method="post">
                    <div class="row g-4">
                        <div class="col-lg-8">
                                                            <div class="checkout-single-wrapper">
                                    <div class="checkout-single boxshado-single">
                                        <h4>Billing Details</h4>
                                        <div class="checkout-single-form">
                                            <div class="row g-4">
                                                <div class="col-lg-6">
                                                    <div class="input-single">
                                                        <span>First Name*</span>
                                                        <input type="text" name="user-firstname" id="userFirstName" required=""
                                                            placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-single">
                                                        <span>Last Name*</span>
                                                        <input type="text" name="user-lastname" id="userLastName" required=""
                                                            placeholder="Last Name">
                                                    </div>
                                                </div>
                                                                                                                                                <div class="col-lg-12">
                                                    <div class="input-single">
                                                        <span>Street Address*</span>
                                                        <input name="user-address" id="userAddress"
                                                            placeholder="Home number and street name">
                                                    </div>
                                                </div>
                                                                                                                                                <div class="col-lg-12">
                                                    <div class="input-single">
                                                        <span>Phone*</span>
                                                        <input name="user-phone" id="phone" placeholder="phone">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-single">
                                                        <span>Email Address*</span>
                                                        <input name="user-email" id="email22" placeholder="email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-check payment-save">
                                                        <input type="checkbox" class="form-check-input" name="save-for-next" id="saveForNext111">
                                                        <label for="saveForNext111">Save for my next payment</label>
                                                    </div>
                                                                                                    </div>
                                                <div class="col-lg-12">
                                                    <div class="input-single">
                                                        <span>order notes (optional)</span>
                                                        <textarea name="user-notes" id="notes"
                                                            placeholder="Notes about your order, e.g special notes for delivery."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                    </div>
                        <div class="col-lg-4">
                            <div class="checkout-order-area">
                                <h3>Your Order</h3>
                                <div class="product-checout-area">
                                    <div class="checkout-item d-flex align-items-center justify-content-between">
                                        <p>Product</p>
                                        <p>Subtotal</p>
                                    </div>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cartItems'), 'cartItem');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cartItem')->value) {
$foreach0DoElse = false;
?>
                                    <div class="checkout-item d-flex align-items-center justify-content-between">
                                        <p><?php echo $_smarty_tpl->getValue('cartItem')['name'];?>
 <br> Qty: <?php echo $_smarty_tpl->getValue('cartItem')['quantity'];?>
</p>
                                        <p>₦<?php echo $_smarty_tpl->getValue('cartItem')['subtotal'];?>
</p>
                                    </div>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    <div class="checkout-item d-flex justify-content-between">
                                        <p>Shipping</p>
                                        <div class="shopping-items">
                                            <div class="form-check d-flex align-items-center from-customradio">
                                                <label class="form-check-label">
                                                    Free Shipping: ₦0.00
                                                </label>
                                                                                            </div>
                                                                                    </div>
                                    </div>
                                    <div class="checkout-item d-flex align-items-center justify-content-between">
                                        <p>Total</p>
                                        <p>₦<?php echo $_smarty_tpl->getValue('total_price');?>
</p>
                                    </div>
                                    <div class="checkout-item-2">
                                        <div class="form-check-2 d-flex align-items-center from-customradio-2">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1222">
                                            <label class="form-check-label" for="flexRadioDefault1222">
                                                Direct bank transfer
                                            </label>
                                        </div>
                                        <p>
                                            Make your payment directly into our bank account please use your Order ID as the
                                            payment reference. Your order will not be shipped until the funds have cleared in
                                            our account.
                                        </p>
                                        <div class="form-check-3 d-flex align-items-center from-customradio-2 mt-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault12224">
                                            <label class="form-check-label" for="flexRadioDefault12224">
                                                Cash on delivery
                                            </label>
                                        </div>
                                        <div class="form-check-3 d-flex align-items-center from-customradio-2 mt-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault12225">
                                            <label class="form-check-label" for="flexRadioDefault12225">
                                                Paypal
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="theme-btn mt-4 pay-btn">
                                        Procced To Pay
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </section>




<?php $_smarty_tpl->renderSubTemplate("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

        <?php }
}
