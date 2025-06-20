
{include file="layout/header.tpl"}

 

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
                            {* <form action="#" method="post"> *}
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
                                                {* <div class="col-lg-12">
                                                    <div class="input-single">
                                                        <span>Company name (optional)</span>
                                                        <input type="text" name="company-name" id="company-name" required=""
                                                        placeholder="company-name">
                                                    </div>
                                                </div> *}
                                                {* <div class="col-lg-12">
                                                    <div class="input-single">
                                                        <span>Country*</span>
                                                        <input name="country" id="country" placeholder="Select a country">
                                                    </div>
                                                </div> *}
                                                <div class="col-lg-12">
                                                    <div class="input-single">
                                                        <span>Street Address*</span>
                                                        <input name="user-address" id="userAddress"
                                                            placeholder="Home number and street name">
                                                    </div>
                                                </div>
                                                {* <div class="col-lg-12">
                                                    <div class="input-single">
                                                        <span>Street Address*</span>
                                                        <input name="user-address" id="userAddress2"
                                                            placeholder="Apartment, suite, unit, etc. (optional)">
                                                    </div>
                                                </div> *}
                                                {* <div class="col-lg-12">
                                                    <div class="input-single">
                                                        <span>Town/ City*</span>
                                                        <input name="towncity" id="towncity" placeholder="towncity">
                                                    </div>
                                                </div> *}
                                                <div class="col-lg-12">
                                                    <div class="input-single">
                                                        <span>Phone*</span>
                                                        <input name="user-phone" id="phone" placeholder="phone">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-single">
                                                        <span>Email Address*</span>
                                                        <input type="email" name="user-email" id="email22" placeholder="email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-check payment-save">
                                                        <input type="checkbox" class="form-check-input" name="save-for-next" id="saveForNext111">
                                                        <label for="saveForNext111">Save for my next payment</label>
                                                    </div>
                                                    {* <div class="input-check payment-save style-2">
                                                        <input type="checkbox" class="form-check-input" name="save-for-next"
                                                            id="saveForNext2">
                                                        <label for="saveForNext2">Ship to a different address?</label>
                                                    </div> *}
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
                            {* </form> *}
                        </div>
                        <div class="col-lg-4">
                            <div class="checkout-order-area">
                                <h3>Your Order</h3>
                                <div class="product-checout-area">
                                    <div class="checkout-item d-flex align-items-center justify-content-between">
                                        <p>Product</p>
                                        <p>Subtotal</p>
                                    </div>
                                    {foreach $cartItems as $cartItem}
                                    <div class="checkout-item d-flex align-items-center justify-content-between">
                                        <p>{$cartItem.name} <br> Qty: {$cartItem.quantity}</p>
                                        <p>₦{$cartItem.subtotal}</p>
                                    </div>
                                    {/foreach}
                                    <div class="checkout-item d-flex justify-content-between">
                                        {* <p>Shipping</p> *}
                                        <div class="shopping-items">
                                            <div class="form-check d-flex align-items-center from-customradio">
                                                <label class="form-check-label">
                                                    Free Shipping: ₦0.00
                                                </label>
                                                {* <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault12"> *}
                                            </div>
                                            {* <div class="form-check d-flex align-items-center from-customradio">
                                                <label class="form-check-label">
                                                    Local: $15.00
                                                </label>
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault123">
                                            </div>
                                            <div class="form-check d-flex align-items-center from-customradio">
                                                <label class="form-check-label">
                                                    Flat rate: $10.00
                                                </label>
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault124">
                                            </div> *}
                                        </div>
                                    </div>
                                    <div class="checkout-item d-flex align-items-center justify-content-between">
                                        <p>Total</p>
                                        <p>₦{$total_price}</p>
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




{include file="layout/footer.tpl"}

        