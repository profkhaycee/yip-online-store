<?php
/* Smarty version 5.5.1, created on 2025-06-20 04:29:55
  from 'file:admin/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6854e3c3d35f65_16933048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3abe8fd492aed668b24121aa7bc15ef46e49735f' => 
    array (
      0 => 'admin/index.tpl',
      1 => 1750393785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
))) {
function content_6854e3c3d35f65_16933048 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/yip/app/views/admin';
$_smarty_tpl->renderSubTemplate("file:admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div class="main-content-wrap">
    <div class="tf-section-4 mb-30">
        <!-- wg-goal -->
        <div class="wg-goal">
            <div class="image">
                <img src="images/images-section/goal.jpg" alt="">
            </div>
            <div class="left">
                <h5 class="mb-14">Great! Your goal is almost complete</h5>
                <div class="body-text mb-14">You have completed <span class="body-title">61%</span> <br> of your target. You can <br> view the work details.</div>
                <a href="#"><span class="body-title">View detail</span><i class="icon-arrow-right"></i></a>
            </div>
            <div class="right">
                <div id="line-chart-17">
                    <div class="circle_percent" data-percent="61">
                        <div class="circle_inner">
                            <div class="round_per"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /wg-goal -->
        <!-- chart-default -->
        <div class="wg-chart-default style-1">
            <div class="flex flex-column gap15 flex-shrink-0">
                <div class="flex gap14 flex-column">
                    <div class="image type-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                            <path d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z" fill="#22C55E"/>
                        </svg>
                        <i class="icon-shopping-bag"></i>
                    </div>
                    <div>
                        <div class="body-text mb-2">Total Sales</div>
                        <h3>34,945</h3>
                    </div>
                </div>
                <div class="box-icon-trending up">
                    <div class="body-title number tf-color-2">1.56%</div>
                    <i class="icon-trending-up"></i>
                </div>
            </div>
            <div class="wrap-chart flex-grow">
                <div id="line-chart-18"></div>
            </div>
        </div>
        <!-- /chart-default -->
        <!-- chart-default -->
        <div class="wg-chart-default style-1">
            <div class="flex flex-column gap15 flex-shrink-0">
                <div class="flex gap14 flex-column">
                    <div class="image type-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                            <path d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z" fill="#FF5200"/>
                        </svg>
                        <i class="icon-dollar-sign"></i>
                    </div>
                    <div>
                        <div class="body-text mb-2">Total Income</div>
                        <h3>$37,802</h3>
                    </div>
                </div>
                <div class="box-icon-trending down">
                    <div class="body-title number tf-color-1">1.56%</div>
                    <i class="icon-trending-down"></i>
                </div>
            </div>
            <div class="wrap-chart flex-grow">
                <div id="line-chart-19"></div>
            </div>
        </div>
        <!-- /chart-default -->
        <!-- chart-default -->
        <div class="wg-chart-default style-1">
            <div class="flex flex-column gap15 flex-shrink-0">
                <div class="flex gap14 flex-column">
                    <div class="image type-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                            <path d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z" fill="#2377FC"/>
                        </svg>
                        <i class="icon-users"></i>
                    </div>
                    <div>
                        <div class="body-text mb-2">Total Visitor</div>
                        <h3>34,945</h3>
                    </div>
                </div>
                <div class="box-icon-trending up">
                    <div class="body-title number tf-color-2">1.56%</div>
                    <i class="icon-trending-up"></i>
                </div>
            </div>
            <div class="wrap-chart flex-grow">
                <div id="line-chart-20"></div>
            </div>
        </div>
        <!-- /chart-default -->
    </div>
    <div class="tf-section-8 mb-30 d-flex">
        <!-- sale -->
        <div class="wg-box d-none">
            <div class="flex items-center justify-between">
                <h5>Sale by category</h5>
                <div class="dropdown default">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>  
                            <a href="javascript:void(0);">This Week</a>
                        </li>
                        <li>  
                            <a href="javascript:void(0);">Last Week</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex gap10 justify-between flex-wrap">
                <div>
                    <div class="text-tiny mb-2">Total Mar 20, 2023</div>
                    <div class="flex items-center gap10">
                        <h4>$37,802</h4>
                        <div class="box-icon-trending up">
                            <i class="icon-trending-up"></i>
                            <div class="body-title number">0.56%</div>
                        </div>
                    </div>
                </div>
                <div class="dropdown default style-box">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="view-all">Week<i class="icon-chevron-down"></i></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li>  
                            <a href="javascript:void(0);">Month</a>
                        </li>
                        <li>  
                            <a href="javascript:void(0);">Year</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="line-chart-21"></div>
            <div class="flex gap20">
                <div class="block-legend justify-center w-full">
                    <div class="dot-1 t1"></div>
                    <div class="text-tiny">Mens</div>
                </div>
                <div class="block-legend justify-center w-full">
                    <div class="dot-1 t2"></div>
                    <div class="text-tiny">Women’s</div>
                </div>
            </div>
        </div>
        <!-- /sale -->
        <!-- order -->
        <div class="wg-box w-100">
            <div class="flex items-center justify-between">
                <h5>Recent orders</h5>
                <div class="dropdown default">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="view-all">View all<i class="icon-chevron-down"></i></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>  
                            <a href="javascript:void(0);">3 days</a>
                        </li>
                        <li>  
                            <a href="javascript:void(0);">7 days</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="wg-table table-product-overview t3">
                <ul class="table-title flex gap20 mb-14">
                    <li>
                        <div class="body-title">Product</div>
                    </li>    
                    <li>
                        <div class="body-title">Customer</div>
                    </li>
                    <li>
                        <div class="body-title">Product ID</div>
                    </li>
                    <li>
                        <div class="body-title">Quantity</div>
                    </li>
                    <li>
                        <div class="body-title">Price</div>
                    </li>
                    <li>
                        <div class="body-title">Status</div>
                    </li>
                </ul>
                <div class="divider mb-14"></div>
                <ul class="flex flex-column gap10">
                    <li class="product-item gap14">
                        <div class="image no-bg">
                            <img src="images/products/31.png" alt="">
                        </div>
                        <div class="flex items-center justify-between flex-grow gap20">
                            <div class="name">
                                <a href="product-list.html" class="body-title-2">Taste of the Wild Formula Finder</a>
                            </div>
                            <div class="body-text">2,672</div>
                            <div class="body-text">$28,672.36</div>
                            <div class="body-text">X1</div>
                            <div class="body-text">$28,672.36</div>
                            <div>
                                <div class="block-available">Delivered</div>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li class="product-item gap14">
                        <div class="image no-bg">
                            <img src="images/products/32.png" alt="">
                        </div>
                        <div class="flex items-center justify-between flex-grow gap20">
                            <div class="name">
                                <a href="product-list.html" class="body-title-2">Proden Plaqueoff Dental Bites Dog, 150 G</a>
                            </div>
                            <div class="body-text">2,672</div>
                            <div class="body-text">$28,672.36</div>
                            <div class="body-text">X2</div>
                            <div class="body-text">$28,672.36</div>
                            <div>
                                <div class="block-available">Delivered</div>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li class="product-item gap14">
                        <div class="image no-bg">
                            <img src="images/products/33.png" alt="">
                        </div>
                        <div class="flex items-center justify-between flex-grow gap20">
                            <div class="name">
                                <a href="product-list.html" class="body-title-2">Zuke's Lil' Links Healthy Little Sausage Links for Dogs...</a>
                            </div>
                            <div class="body-text">2,672</div>
                            <div class="body-text">$28,672.36</div>
                            <div class="body-text">X1</div>
                            <div class="body-text">$28,672.36</div>
                            <div>
                                <div class="block-available">Delivered</div>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li class="product-item gap14">
                        <div class="image no-bg">
                            <img src="images/products/34.png" alt="">
                        </div>
                        <div class="flex items-center justify-between flex-grow gap20">
                            <div class="name">
                                <a href="product-list.html" class="body-title-2">Rachael Ray Nutrish Grain Free Chicken Drumstick...</a>
                            </div>
                            <div class="body-text">2,672</div>
                            <div class="body-text">$28,672.36</div>
                            <div class="body-text">X3</div>
                            <div class="body-text">$28,672.36</div>
                            <div>
                                <div class="block-available">Delivered</div>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li class="product-item gap14">
                        <div class="image no-bg">
                            <img src="images/products/35.png" alt="">
                        </div>
                        <div class="flex items-center justify-between flex-grow gap20">
                            <div class="name">
                                <a href="product-list.html" class="body-title-2">Fruitables Dog Treats Sweet Potato & Pecan Flavor</a>
                            </div>
                            <div class="body-text">2,672</div>
                            <div class="body-text">$28,672.36</div>
                            <div class="body-text">X2</div>
                            <div class="body-text">$28,672.36</div>
                            <div>
                                <div class="block-available">Delivered</div>
                            </div>
                        </div>
                    </li>
                    
                </ul>
            </div>
            <div class="divider"></div>
            <div class="flex items-center justify-between flex-wrap gap10">
                <div class="text-tiny">Showing 5 entries</div>
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
        <!-- /order -->
    </div>
        <div class="tf-section-2">
        <!-- sales -->
        <div class="wg-box">
            <div class="flex items-center justify-between">
                <h5>Product overview</h5>
                <div class="dropdown default">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="view-all">View all<i class="icon-chevron-down"></i></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>  
                            <a href="javascript:void(0);">3 days</a>
                        </li>
                        <li>  
                            <a href="javascript:void(0);">7 days</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="wg-table table-product-overview t4">
                <ul class="table-title flex gap20 mb-14">
                    <li>
                        <div class="body-title">Name</div>
                    </li>    
                    <li>
                        <div class="body-title">ID</div>
                    </li>
                    <li>
                        <div class="body-title">Price</div>
                    </li>
                    <li>
                        <div class="body-title">Sale</div>
                    </li>
                    <li>
                        <div class="body-title">Revenue</div>
                    </li>
                    <li>
                        <div class="body-title">Status</div>
                    </li>
                </ul>
                <div class="divider mb-14"></div>
                <ul class="flex flex-column gap10">
                    <li class="product-item gap14">
                        <div class="image no-bg">
                            <img src="images/products/6.png" alt="">
                        </div>
                        <div class="flex items-center justify-between gap20 flex-grow">
                            <div class="name">
                                <a href="product-list.html" class="body-text">Dog Food, Chicken & Chicken Liver Recipe...</a>
                            </div>
                            <div class="body-text">#70668</div>
                            <div class="body-text">$450</div>
                            <div class="body-text">$28,672.36</div>
                            <div class="body-text">$928.41</div>
                            <div>
                                <div class="block-available">Available</div>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li class="product-item gap14">
                        <div class="image no-bg">
                            <img src="images/products/7.png" alt="">
                        </div>
                        <div class="flex items-center justify-between gap20 flex-grow">
                            <div class="name">
                                <a href="product-list.html" class="body-text">Grain Free Dry Dog Food | Rachael Ray® Nutrish®</a>
                            </div>
                            <div class="body-text">#70668</div>
                            <div class="body-text">$450</div>
                            <div class="body-text">$28,672.36</div>
                            <div class="body-text">$928.41</div>
                            <div>
                                <div class="block-not-available">Not Available</div>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li class="product-item gap14">
                        <div class="image no-bg">
                            <img src="images/products/8.png" alt="">
                        </div>
                        <div class="flex items-center justify-between gap20 flex-grow">
                            <div class="name">
                                <a href="product-list.html" class="body-text">Weruva Pumpkin Patch Up! Pumpkin With Ginger...</a>
                            </div>
                            <div class="body-text">#70668</div>
                            <div class="body-text">$450</div>
                            <div class="body-text">$28,672.36</div>
                            <div class="body-text">$928.41</div>
                            <div>
                                <div class="block-available">Available</div>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li class="product-item gap14">
                        <div class="image no-bg">
                            <img src="images/products/9.png" alt="">
                        </div>
                        <div class="flex items-center justify-between gap20 flex-grow">
                            <div class="name">
                                <a href="product-list.html" class="body-text">Milk-Bone Mini's Flavor Snacks Dog Treats, 15...</a>
                            </div>
                            <div class="body-text">#70668</div>
                            <div class="body-text">$450</div>
                            <div class="body-text">$28,672.36</div>
                            <div class="body-text">$928.41</div>
                            <div>
                                <div class="block-available">Available</div>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li class="product-item gap14">
                        <div class="image no-bg">
                            <img src="images/products/10.png" alt="">
                        </div>
                        <div class="flex items-center justify-between gap20 flex-grow">
                            <div class="name">
                                <a href="product-list.html" class="body-text">Weruva Pumpkin Patch Up! Dog & Cat Food...</a>
                            </div>
                            <div class="body-text">#70668</div>
                            <div class="body-text">$450</div>
                            <div class="body-text">$28,672.36</div>
                            <div class="body-text">$928.41</div>
                            <div>
                                <div class="block-not-available">Not Available</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="divider"></div>
            <div class="flex items-center justify-between flex-wrap gap10">
                <div class="text-tiny">Showing 5 entries</div>
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
        <!-- /sales -->
        <!-- revenue -->
        <div class="wg-box">
            <div class="flex items-center justify-between">
                <h5>Revenue</h5>
                <div class="dropdown default">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="icon-more"><i class="icon-more-horizontal"></i></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>  
                            <a href="javascript:void(0);">This Week</a>
                        </li>
                        <li>  
                            <a href="javascript:void(0);">Last Week</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-wrap gap40">
                <div>
                    <div class="mb-3">
                        <div class="block-legend">
                            <div class="dot t1"></div>
                            <div class="text-tiny">Website</div>
                        </div>
                    </div>
                    <div class="flex items-center gap10">
                        <h4>$37,802</h4>
                        <div class="box-icon-trending up">
                            <i class="icon-trending-up"></i>
                            <div class="body-title number">0.56%</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mb-3">
                        <div class="block-legend">
                            <div class="dot t4"></div>
                            <div class="text-tiny">Store</div>
                        </div>
                    </div>
                    <div class="flex items-center gap10">
                        <h4>$28,305</h4>
                        <div class="box-icon-trending up">
                            <i class="icon-trending-up"></i>
                            <div class="body-title number">0.56%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="line-chart-22"></div>
        </div>
        <!-- /revenue -->
    </div>
</div>


<?php $_smarty_tpl->renderSubTemplate("file:admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

        

<?php }
}
