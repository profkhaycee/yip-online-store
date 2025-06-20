

{include file="admin/header.tpl"}


<div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <div class="d-flex gap-3 align-items-center">
                                        <h3>Order #{$orderDetails.id}</h3>
                                        <p class="bg bg-{$status_color} text-white rounded py-2 px-4 ms-4 fs-5">{$orderDetails.status}</p> 
                                        <a class="fs-6" style="text-decoration: underline;" data-bs-toggle="modal" data-bs-target='#updateStatusModal' data-orderid='{$orderDetails.id}'>Update Status</a>
                                    </div>

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
                                            <a href="#"><div class="text-tiny">Order detail</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Order #{$orderDetails.id}</div>
                                        </li>
                                    </ul>
                                </div>
                                {* <h6 class="d-flex"><p>Status: <span class="order-current-status block-published">{$orderDetails.status}</span></p></h6> *}

                                <!-- order-detail -->
                                <div class="wg-order-detail">
                                    <div class="left flex-grow">
                                        <div class="wg-box mb-20">
                                            <div class="wg-table table-order-detail">
                                                <ul class="table-title flex items-center justify-between gap20 mb-24">
                                                    <li>
                                                        <div class="body-title">All item</div>
                                                    </li>    
                                                    <li>
                                                        <div class="dropdown default">
                                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="body-title-2 flex items-center gap8">Sort<i class="h6 icon-chevron-down"></i></span>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li>  
                                                                    <a href="javascript:void(0);">Name</a>
                                                                </li>
                                                                <li>  
                                                                    <a href="javascript:void(0);">Quantity</a>
                                                                </li>
                                                                <li>  
                                                                    <a href="javascript:void(0);">Price</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-column">
                                                    
                                                    {foreach $orderItems as $item}
                                                    <li class="product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="{$item.image}" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap40 flex-grow">
                                                            <div class="name">
                                                                <div class="text-tiny mb-1">Product name</div>
                                                                <a href="#" class="body-title-2">{$item.name}</a>
                                                            </div>
                                                            <div class="name">
                                                                <div class="text-tiny mb-1">Quantity</div>
                                                                <div class="body-title-2">{$item.quantity}</div>
                                                            </div>
                                                            <div class="name">
                                                                <div class="text-tiny mb-1">Price</div>
                                                                <div class="body-title-2">{$item.total_price}</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    {/foreach}
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wg-box">
                                            <div class="wg-table table-cart-totals">
                                                <ul class="table-title flex mb-24">
                                                    <li>
                                                        <div class="body-title">Cart Totals</div>
                                                    </li>    
                                                    <li>
                                                        <div class="body-title">Price</div>
                                                    </li>    
                                                </ul>
                                                <ul class="flex flex-column gap14">
                                                    <li class="cart-totals-item">
                                                        <span class="body-text">Subtotal:</span>
                                                        <span class="body-title-2">₦{$orderDetails.total_amount}</span>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="cart-totals-item">
                                                        <span class="body-text">Shipping:</span>
                                                        <span class="body-title-2">₦0.00</span>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="cart-totals-item">
                                                        <span class="body-text">Tax (GST):</span>
                                                        <span class="body-title-2">₦0.00</span>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="cart-totals-item">
                                                        <span class="body-title">Total price:</span>
                                                        <span class="body-title tf-color-1">₦{$orderDetails.total_amount}</span>
                                                    </li>
                                                  
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="wg-box mb-20 gap10">
                                            <div class="body-title">Summary</div>
                                            <div class="summary-item">
                                                <div class="body-text">Order ID</div>
                                                <div class="body-title-2">#{$orderDetails.id}</div>
                                            </div>
                                            <div class="summary-item">
                                                <div class="body-text">Date</div>
                                                <div class="body-title-2">{$orderDetails.created_at}</div>
                                            </div>
                                            <div class="summary-item">
                                                <div class="body-text">Total</div>
                                                <div class="body-title-2 tf-color-1">₦{$orderDetails.total_amount}</div>
                                            </div>
                                        </div>
                                        <div class="wg-box mb-20 gap10">
                                            <div class="body-title">Shipping Address</div>
                                            <div class="body-text">₦{$orderDetails.address}</div>
                                        </div>
                                        <div class="wg-box mb-20 gap10">
                                            <div class="body-title">Payment Method</div>
                                            <div class="body-text">Pay on Delivery (Cash/Card). Cash on delivery (COD) available. Card/Net banking acceptance subject to device availability.</div>
                                        </div>
                                        <div class="wg-box gap10">
                                            <div class="body-title">Expected Date Of Delivery</div>
                                            <div class="body-title-2 tf-color-2">27 Jun 2025</div>
                                            <a class="tf-button style-1 w-full" href="#"><i class="icon-truck"></i>Track order</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /order-detail -->
                            </div>

<div class="modal" id="updateStatusModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Order #{$orderDetails.id}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="mb-3">Update Status for Order #{$orderDetails.id}</p>

        <form action="order-update" method="post">
          <input type="hidden" name="order_id" value="{$orderDetails.id}">
          <div class="mb-3">
            <label for="orderStatus" class="form-label">Select Status</label>
            <select class="form-select" id="orderStatus" name="status">
              <option value="pending">Pending</option>
              <option value="confirmed">Confirmed</option>
              <option value="shipped">Shipped</option>
              <option value="delivered">Delivered</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

{include file="admin/footer.tpl"}



