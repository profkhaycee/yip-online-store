
{include file="layout/header.tpl"}

{if $error !== false}
<script>
{literal}
    
Swal.fire({
          icon: 'error',
          text: 'could not complete payment, please try again',
          confirmButtonText: 'Ok',
        });
{/literal}

</script>

{elseif $error === false}
    <script>
    {literal}

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
{/literal}

</script>
{/if}
  
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
                    {if $cartItems|@count == 0}
                        <div class="empty-cart text-center">
                            <h3>Your cart is empty</h3>
                            <p>Looks like you haven’t added anything to your cart yet.</p>
                            <a href="shop" class="theme-btn alt-color radius-xs">Continue Shopping</a>
                        </div>
                    {else}
                        
                    
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
                            {foreach $cartItems as $cartItem}
                                <tr class="align-items-center py-3">
                                    <td>
                                        <div class="cart-item-thumb d-flex align-items-center gap-4">
                                            {* <i class="fas fa-times"></i> *}
                                            <i class="bi bi-trash remove-item" data-product-id="{$cartItem.product}"></i>
                                            <img class="w-100" src="{$cartItem.image}" alt="product">
                                            <span class="head text-nowrap">{$cartItem.name}</span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="price-usd">
                                           ₦<span class="item-price">{$cartItem.current_price|number_format}</span>
                                            
                                        </span>
                                    </td>
                                    <td class="price-quantity text-center">
                                        <div
                                        class="quantity d-inline-flex align-items-center justify-content-center gap-1 py-2 px-4 border n50-border_20 text-sm">
                                        <button class="quantityDecrement"><i class="fal fa-minus"></i></button>
                                        <input type="text" value="{$cartItem.quantity}" class="quantityValue change-qty" min="1" max="30" data-product-id="{$cartItem.product}">
                                        <button class="quantityIncrement"><i class="fal fa-plus"></i></button>
                                    </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="price-usd" data-product-id="{$cartItem.product}">
                                            ₦<span class="item-subtotal" data-product-id="{$cartItem.product}">{$cartItem.subtotal|number_format}</span>
                                            
                                        </span>
                                    </td>
                                </tr>
                            {/foreach}
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                        <span class="text-uppercase fs-4 fw-bold">Total</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="price-usd  fs-4 fw-bold">
                                            ₦<span class="total-item-price">{$total_price|number_format}</span>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                           
                        </table>
                    </div>


                    
                    <div class="coupon-items d-flex flex-md-nowrap flex-wrap justify-content-between align-items-center gap-4 pt-4">
                        {* <form action="#" class="d-flex flex-sm-nowrap flex-wrap align-items-center gap-3">
                            <input type="text"
                                placeholder="Enter coupon code">
                            <button type="submit" class="theme-btn alt-color radius-xs">Apply</button>
                        </form> *}
                        {* <button type="button" class="theme-btn alt-color radius-xs">Checkout Cart</button> *}
                        <a href="checkout" class="theme-btn alt-color radius-xs ms-auto">Proceed To Checkout </a>
                    </div>
                    {/if}
                </div>
            </div>
        </div>



{include file="layout/footer.tpl"}

        