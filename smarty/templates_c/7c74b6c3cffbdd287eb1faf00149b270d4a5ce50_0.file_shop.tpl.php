<?php
/* Smarty version 5.5.1, created on 2025-06-19 18:44:09
  from 'file:shop.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68545a79a13ce2_47858769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c74b6c3cffbdd287eb1faf00149b270d4a5ce50' => 
    array (
      0 => 'shop.tpl',
      1 => 1750358638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
))) {
function content_68545a79a13ce2_47858769 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/yip/app/views';
$_smarty_tpl->renderSubTemplate("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<div>

<?php echo $_smarty_tpl->getValue('user_session');?>


</div>
        <!-- product-details-Section Start -->
        <section class="product-details-section section-padding fix">
            <div class="container">
                <div class="product-details-wrapper">
                    <div class="top-content">
                        <h2>Only Categories</h2>
                        <ul class="list">
                            <li>Home</li>
                            <li>
                                Only Categories
                            </li>
                        </ul>
                    </div>
                    <div class="product-details-sideber">
                       <div class="product-details-wrap">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="#Course" data-bs-toggle="tab" class="nav-link active">
                                    <i class="fa-regular fa-grid-2"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#Curriculum" data-bs-toggle="tab" class="nav-link">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </li>
                        </ul>
                        <p>Showing 1–14 of 26 results</p>
                       </div>
                       <div class="shop-right">
                         <div class="form-clt">
                            <div class="nice-select" tabindex="0">
                               <span class="current">
                                Default sorting
                               </span>
                               <ul class="list">
                                  <li data-value="1" class="option selected focus">
                                    Default sorting
                               </li>
                               <li data-value="1" class="option">
                                  Sort by popularity
                               </li>
                               <li data-value="1" class="option">
                                  Sort by average rating
                               </li>
                               <li data-value="1" class="option">
                                  Sort by latest
                               </li>
                            </ul>
                            </div>
                          </div>
                          <div id="openButton2">
                            <div class="filter-button">
                                <h6><a href="#"><span><img src="assets/img/filter.png" alt="img"></span>Filter</a></h6>
                            </div>
                         </div>
                       </div>
                    </div>
                    <div class="tab-content">
                        <div id="Course" class="tab-pane fade show active">
                            <div class="row">
                                
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('all_products'), 'single_product');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('single_product')->value) {
$foreach0DoElse = false;
?>

                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <div class="product-details-item">
                                        <div class="shop-image">
                                            <img src="<?php echo $_smarty_tpl->getValue('single_product')['image'];?>
" alt="img">
                                            <ul class="shop-icon d-grid justify-content-center align-items-center">
                                                                                                                                                                                            </ul>
                                        </div>
                                        <div class="content">
                                            <p>Shoe, Men's</p>
                                            <h4>
                                                <a href="product-details?p=<?php echo $_smarty_tpl->getValue('single_product')['id'];?>
"><?php echo $_smarty_tpl->getValue('single_product')['name'];?>
</a>
                                            </h4>
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                            <h6>₦<?php echo $_smarty_tpl->getValue('single_product')['current_price'];?>
 <del>₦<?php echo $_smarty_tpl->getValue('single_product')['old_price'];?>
</del></h6>
                                            
                                            <?php if (in_array($_smarty_tpl->getValue('single_product')['id'],(array)$_smarty_tpl->getValue('itemInCart'))) {?>
                                                <a class="mx-auto text-muted"><i><small> Item Already In Cart </small> </i></a>
                                            <?php } else { ?>
                                                <a class="theme-btn add-to-cart w-100 my-2" data-product-id="<?php echo $_smarty_tpl->getValue('single_product')['id'];?>
">Add To Cart</a>
                                            <?php }?>

                                            </div>
                                    </div>
                                </div>
                                <?php
}
if ($foreach0DoElse) {
?>
                                    <h1>No Products Found</h1>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>

                                
                            </div>
                        </div>
                        <div id="Curriculum" class="tab-pane fade">
                            <div class="row justify-content-center">
                                <div class="row g-4">
                                    <div class="col-xl-12">
                                        
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('all_products'), 'single_product');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('single_product')->value) {
$foreach1DoElse = false;
?>
                                        <div class="product-details-item style-2">
                                            <div class="shop-image">
                                                <img src="<?php echo $_smarty_tpl->getValue('single_product')['image'];?>
" alt="img">
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                                                                                                                                                                                            </ul>
                                            </div>
                                            <div class="content">
                                                <p>Whitetails Store</p>
                                                <h3>
                                                    <a href="product-details?p=<?php echo $_smarty_tpl->getValue('single_product')['id'];?>
"><?php echo $_smarty_tpl->getValue('single_product')['name'];?>
</a>
                                                </h3>
                                                <div class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <h6>₦<?php echo $_smarty_tpl->getValue('single_product')['current_price'];?>
 <del><?php echo $_smarty_tpl->getValue('single_product')['old_price'];?>
</del></h6>
                                                <p>
                                                    <?php echo $_smarty_tpl->getValue('single_product')['summary'];?>

                                                </p>
                                                <?php if (in_array($_smarty_tpl->getValue('single_product')['id'],(array)$_smarty_tpl->getValue('itemInCart'))) {?>
                                                    <a class="mx-auto text-muted"><i><small> Item Already In Cart </small> </i></a>
                                                <?php } else { ?>
                                                    <a class="theme-btn add-to-cart" data-product-id="<?php echo $_smarty_tpl->getValue('single_product')['id'];?>
">Add To Cart</a>
                                                <?php }?>
                                                                                                
                                            </div>
                                        </div>
                                        <?php
}
if ($foreach1DoElse) {
?>
                                            <h1>No Products Found</h1>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-nav-wrap">
                        <ul>
                            <li class="active"><a class="page-numbers" href="#">1</a></li>
                            <li><a class="page-numbers" href="#">2</a></li>
                            <li><a class="page-numbers" href="#">3</a></li>
                            <li><a class="page-numbers" href="#"><i class="fa-solid fa-arrow-right-long"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

<?php $_smarty_tpl->renderSubTemplate("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>




        <?php }
}
