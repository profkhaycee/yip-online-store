

{include file="admin/header.tpl"}


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
                                            {* <li>
                                                <div class="body-title">Quantity</div>
                                            </li> *}
                                            {* <li>
                                                <div class="body-title">Payment</div>
                                            </li> *}
                                            <li>
                                                <div class="body-title">Status</div>
                                            </li>
                                            {* <li>
                                                <div class="body-title">Tracking</div>
                                            </li> *}
                                            <li>
                                                <div class="body-title">Action</div>
                                            </li>
                                        </ul>
                                        <ul class="flex flex-column">
                                            
                                            {foreach $orders as $order}
                                            <li class="product-item gap14">
                                                {* <div class="image no-bg">
                                                    <img src="assets/admin/images/products/52.png" alt="">
                                                </div> *}
                                                <div class="flex items-center justify-between gap20 flex-grow">
                                                    <div class="name">
                                                        
                                                        <a href="#" class="body-title-2">{$order.firstname} {$order.lastname}</a>
                                                    </div>
                                                    <div class="body-text"><a href='order-details?order={$order.id}'> #{$order.id}</a></div>
                                                    <div class="body-text">₦{$order.total_amount}</div>
                                                    {* <div class="body-text">1,638</div>
                                                    <div class="body-text">20</div> *}
                                                    <div>
                                                        <div class="block-pending">{$order.status}</div>
                                                    </div>
                                                    {* <div>
                                                        <div class="block-tracking">Tracking</div>
                                                    </div> *}
                                                    <div class="list-icon-function">
                                                        <div class="item eye">
                                                            <a href='order-details?order={$order.id}'><i class="icon-eye"></i></a>
                                                        </div>
                                                        <div class="item edit">
                                                            <a href='order-details?order={$order.id}'><i class="icon-edit-3"></i></a>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            {/foreach}
                                            
                                            
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



{include file="admin/footer.tpl"}



