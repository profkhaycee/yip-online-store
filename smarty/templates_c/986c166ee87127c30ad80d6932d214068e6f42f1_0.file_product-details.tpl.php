<?php
/* Smarty version 5.5.1, created on 2025-06-19 19:29:07
  from 'file:product-details.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685465032e89f0_14878329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '986c166ee87127c30ad80d6932d214068e6f42f1' => 
    array (
      0 => 'product-details.tpl',
      1 => 1750361324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
))) {
function content_685465032e89f0_14878329 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/yip/app/views';
$_smarty_tpl->renderSubTemplate("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>



         <!-- Shop Details Section Start -->
        <section class="shop-details-section section-padding fix shop-bg">
            <div class="container">
            <div class="shop-details-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="shop-details-image">
                        <div class="tab-content">
                            <div id="thumb1" class="tab-pane fade show active">
                                <div class="shop-thumb">
                                    <img src="<?php echo $_smarty_tpl->getValue('product')['image'];?>
" alt="img">
                                </div>
                            </div>
                            <div id="thumb2" class="tab-pane fade">
                                <div class="shop-thumb">
                                    <img src="assets/img/shop/details-5.jpg" alt="img">
                                </div>
                            </div>
                            <div id="thumb3" class="tab-pane fade">
                                <div class="shop-thumb">
                                    <img src="assets/img/shop/details-6.jpg" alt="img">
                                </div>
                            </div>
                            <div id="thumb4" class="tab-pane fade">
                                <div class="shop-thumb">
                                    <img src="assets/img/shop/details-7.jpg" alt="img">
                                </div>
                            </div>
                            <div id="thumb5" class="tab-pane fade">
                                <div class="shop-thumb">
                                    <img src="assets/img/shop/details-8.jpg" alt="img">
                                </div>
                            </div>
                            </div>
                            <ul class="nav">
                            <li class="nav-item">
                                <a href="#thumb1" data-bs-toggle="tab" class="nav-link ps-0 active">
                                <img src="assets/img/shop/small-1.jpg" alt="img">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#thumb2" data-bs-toggle="tab" class="nav-link">
                                    <img src="assets/img/shop/small-2.jpg" alt="img">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#thumb3" data-bs-toggle="tab" class="nav-link">
                                    <img src="assets/img/shop/small-3.jpg" alt="img">
                                </a>
                            </li>
                            <li class="nav-item">
                            <a href="#thumb4" data-bs-toggle="tab" class="nav-link">
                                <img src="assets/img/shop/small-4.jpg" alt="img">
                            </a>
                            </li>
                            <li class="nav-item">
                                <a href="#thumb5" data-bs-toggle="tab" class="nav-link">
                                    <img src="assets/img/shop/small-5.jpg" alt="img">
                                </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details-content">
                            <h3 class="pb-3"><?php echo $_smarty_tpl->getValue('product')['name'];?>
</h3>
                            <div class="star pb-3">
                                <a href="#"> <i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"> <i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                                            </div>
                            <p class="mb-3">
                                <?php echo $_smarty_tpl->getValue('product')['summary'];?>

                            </p>
                            <div class="price-list">
                                <h3>₦<?php echo $_smarty_tpl->getValue('product')['current_price'];?>
 <small><del>₦<?php echo $_smarty_tpl->getValue('product')['old_price'];?>
</del></small></h3>
                            </div> <?php if ('condition') {?>
                                
                            <?php } else { ?>
                                
                            <?php }?>
                            <div class="cart-wrp">
                                <?php if ($_smarty_tpl->getValue('productInCart')['status'] === true) {?>
                                <div class="cart-quantity">
                                                                        <div>
                                        <input type='button' value='--' class='qtyminus quantityDecrement minus'>
                                        <input type='text' name='quantity' value='<?php echo $_smarty_tpl->getValue('productInCart')['quantity'];?>
' class='qty change-qty' min="1" max="30" data-product-id="<?php echo $_smarty_tpl->getValue('product')['id'];?>
">
                                        <input type='button' value='+' class='qtyplus quantityIncrement plus'>
                                    </div>
                                    <a class="mx-auto text-muted"><i><small> Item Already In Cart </small> </i></a>
                                </div>
                                <?php }?>
                                                                    
                                                                <div class="social-profile">
                                    <span class="plus-btn"><i class="far fa-share"></i></span>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                

                            </div>
                            <?php if ($_smarty_tpl->getValue('productInCart')['status'] === false) {?>
                                
                            <div class="shop-btn">
                                <a class="theme-btn add-to-cart" data-product-id="<?php echo $_smarty_tpl->getValue('product')['id'];?>
">
                                    <span> Add to cart</span>
                                </a><br>
                            </div>
                            <?php }?>

                            <h6 class="details-info"><span>Availability:</span> <span class="text-success">In Stock</span></h6>
                            <h6 class="details-info"><span>SKU:</span> <a href="#">124224</a></h6>
                            <h6 class="details-info"><span>Categories:</span> <a href="#">Crux Indoor Fast and Easy</a></h6>
                            <h6 class="details-info style-2"><span>Tags:</span> <a href="#"> <b>accessories</b> <b>business</b></a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <!-- Single-tab Section Start -->
        <section class="single-tab-section section-padding fix pt-0">
            <div class="container">
                <div class="single-tab">
                    <ul class="nav mb-5">
                        <li class="nav-item">
                            <a href="#description" data-bs-toggle="tab" class="nav-link ps-0 active">
                                <h6>Description</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#additional" data-bs-toggle="tab" class="nav-link">
                                <h6>Additional Information  </h6>
                            </a>
                        </li>
                        <li class="nav-item">
                          <a href="#review" data-bs-toggle="tab" class="nav-link">
                              <h6>reviews (2)</h6>
                          </a>
                      </li>
                    </ul>
                    <div class="tab-content">
                        <div id="description" class="tab-pane fade show active">
                          <div class="description-items">
                             <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                   <div class="description-content">
                                      <h3>Product descriptions</h3>
                                      <?php echo $_smarty_tpl->getValue('product')['description'];?>

                                      <div class="description-list-items d-flex justify-content-between">
                                         <ul class="description-list">
                                            <li>
                                               Model wears:
                                               <span>UK 10/ EU 38/ US 6</span>
                                            </li>
                                            <li>
                                               Occasion:
                                               <span> Lifestyle, Sport</span>
                                            </li>
                                            <li>
                                               Country:
                                               <span>Italy</span>
                                            </li>
                                         </ul>
                                         <ul class="description-list">
                                            <li>
                                               Model wears:
                                               <span>UK 10/ EU 38/ US 6</span>
                                            </li>
                                            <li>
                                               Occasion:
                                               <span> Lifestyle, Sport</span>
                                            </li>
                                            <li>
                                               Country:
                                               <span>Italy</span>
                                            </li>
                                         </ul>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 mt-5 mt-lg-0">
                                   <div class="description-image">
                                      <img src="<?php echo $_smarty_tpl->getValue('product')['image'];?>
" alt="img">
                                   </div>
                                </div>
                             </div>
                          </div>
                        </div>
                        <div id="additional" class="tab-pane fade">
                          <div class="table-responsive">
                             <table class="table table-bordered">
                                 <tbody>
                                   <tr>
                                     <td>Weight</td>
                                     <td>240 Ton</td>
                                   </tr>
                                   <tr>
                                     <td>Dimensions</td>
                                     <td>20 × 30 × 40 cm</td>
                                   </tr>
                                   <tr>
                                     <td>Colors</td>
                                     <td>Black, Blue, Green</td>
                                   </tr>
                                 </tbody>
                             </table>
                         </div>
                        </div>
                        <div id="review" class="tab-pane fade">
                            <div class="review-items">
                                <div class="admin-items d-flex flex-wrap flex-md-nowrap align-items-center pb-4">
                                    <div class="admin-img pb-4 pb-md-0 me-4">
                                        <img src="assets/img/shop/01.jpg" alt="image">
                                    </div>
                                    <div class="content p-4">
                                        <div class="head-content pb-1 d-flex flex-wrap justify-content-between">
                                         <h5>miklos salsa<span>27June 2025 at 5.44pm</span></h5>
                                            <div class="star">
                                               <i class="fas fa-star"></i>
                                               <i class="fas fa-star"></i>
                                               <i class="fas fa-star"></i>
                                               <i class="fas fa-star"></i>
                                               <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                       <p>
                                         Lorem ipsum dolor sit amet consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus dolor eget viverra pretium.Curabitur vulputate vestibulum Phasellus rhoncus dolor eget viverra pretium.
                                       </p>
                                    </div>
                                </div>
                                <div class="admin-items d-flex flex-wrap flex-md-nowrap align-items-center pb-4">
                                    <div class="admin-img pb-4 pb-md-0 me-4">
                                        <img src="assets/img/shop/02.jpg" alt="image">
                                    </div>
                                    <div class="content p-4">
                                        <div class="head-content pb-1 d-flex flex-wrap justify-content-between">
                                         <h5>Ethan Turner <span>27June 2025 at 5.44pm</span></h5>
                                            <div class="star">
                                               <i class="fas fa-star"></i>
                                               <i class="fas fa-star"></i>
                                               <i class="fas fa-star"></i>
                                               <i class="fas fa-star"></i>
                                               <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <p>
                                         Lorem ipsum dolor sit amet consectetur adipiscing elit. Curabitur vulputate vestibulum Phasellus rhoncus dolor eget viverra pretium.Curabitur vulputate vestibulum Phasellus rhoncus dolor eget viverra pretium.
                                       </p>
                                    </div>
                                </div>
                                <div class="review-title mt-5 py-15 mb-30">
                                    <h4>add a review</h4>
                                    <div class="rate-now d-flex align-items-center">
                                        <p>Rate this product? *</p>
                                        <div class="star">
                                         <i class="fas fa-star"></i>
                                         <i class="fas fa-star"></i>
                                         <i class="fas fa-star"></i>
                                         <i class="fas fa-star"></i>
                                         <i class="fas fa-star"></i>
                                      </div>
                                    </div>
                                </div>
                                <div class="review-form">
                                   <form action="#" id="contact-form2" method="POST">
                                      <div class="row g-4">
                                         <div class="col-lg-6">
                                            <div class="form-clt">
                                               <input type="text" name="name" id="name" placeholder="Full Name">
                                            </div>
                                         </div>
                                         <div class="col-lg-6">
                                            <div class="form-clt">
                                               <input type="text" name="email" id="email" placeholder="email addres">
                                            </div>
                                         </div>
                                         <div class="col-lg-12 wow fadeInUp" data-wow-delay=".8">
                                            <div class="form-clt-big form-clt">
                                               <textarea name="message" id="message" placeholder="message"></textarea> 
                                            </div>
                                         </div>
                                         <div class="col-lg-6 wow fadeInUp" data-wow-delay=".9">
                                            <button type="submit" class="theme-btn hover-color">
                                                Post Submit
                                            </button>
                                         </div>
                                      </div>
                                   </form>
                                </div>
                            </div>
                        </div>
                    </div>
                   </div>
               </div>
        </section>

        <!-- Product-collection Section Start -->
        <section class="product-collection-section-2 section-padding pt-0 fix">
            <div class="container">
                <div class="section-title style-2 text-center">
                    <h6 class="sub-title wow fadeInUp">
                        Next day Products
                    </h6>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                        Related Products
                    </h2>
                </div>
               <div class="tab-content">
                <div class="row">
                    
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('relatedProducts'), 'r_product');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('r_product')->value) {
$foreach0DoElse = false;
?>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="product-collection-item">
                                <div class="product-image">
                                    <img src="<?php echo $_smarty_tpl->getValue('r_product')['image'];?>
" alt="img">
                                                                        <div class="product-btn text-center">
                                                                                <?php if (in_array($_smarty_tpl->getValue('r_product')['id'],(array)$_smarty_tpl->getValue('itemInCart'))) {?>
                                                <a class="mx-auto text-muted"><i><small> Item Already In Cart </small> </i></a>
                                            <?php } else { ?>
                                                <a class="theme-btn-2 style-2 add-to-cart" data-product-id="<?php echo $_smarty_tpl->getValue('r_product')['id'];?>
">Add To Cart</a>
                                            <?php }?>

                                    </div>
                                </div>
                                <div class="product-content">
                                    <p>Mineral </p>
                                    <h4>
                                        <a href="product-details?p=<?php echo $_smarty_tpl->getValue('r_product')['id'];?>
"><?php echo $_smarty_tpl->getValue('r_product')['name'];?>
</a>
                                    </h4>
                                    <ul class="doller">
                                        <li>
                                            ₦<?php echo $_smarty_tpl->getValue('r_product')['current_price'];?>
 <del>₦<?php echo $_smarty_tpl->getValue('r_product')['old_price'];?>
</del>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    
                </div>
               </div>
            </div>
        </section>



<?php $_smarty_tpl->renderSubTemplate("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

        <?php }
}
