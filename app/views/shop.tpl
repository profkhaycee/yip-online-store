
{include file="layout/header.tpl"}

<div>

{$user_session}

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
                                
                                {foreach $all_products as $single_product}

                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <div class="product-details-item">
                                        <div class="shop-image">
                                            <img src="{$single_product.image}" alt="img">
                                            <ul class="shop-icon d-grid justify-content-center align-items-center">
                                                {* <li>
                                                    <a class="add-to-cart" data-product-id="{$single_product.id}"><i class="fa-regular fa-cart-shopping"></i></a>
                                                </li> *}
                                                {* <li>
                                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </button>
                                                </li> *}
                                                {* <li>
                                                    <a href="shop-cart"><i class="far fa-heart"></i></a>
                                                </li> *}
                                            </ul>
                                        </div>
                                        <div class="content">
                                            <p>Shoe, Men's</p>
                                            <h4>
                                                <a href="product-details?p={$single_product.id}">{$single_product.name}</a>
                                            </h4>
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                            <h6>₦{$single_product.current_price} <del>₦{$single_product.old_price}</del></h6>
                                            
                                            {if $single_product.id is in $itemInCart}
                                                <a class="mx-auto text-muted"><i><small> Item Already In Cart </small> </i></a>
                                            {else}
                                                <a class="theme-btn add-to-cart w-100 my-2" data-product-id="{$single_product.id}">Add To Cart</a>
                                            {/if}

                                            </div>
                                    </div>
                                </div>
                                {foreachelse}
                                    <h1>No Products Found</h1>
                                {/foreach}

                                
                            </div>
                        </div>
                        <div id="Curriculum" class="tab-pane fade">
                            <div class="row justify-content-center">
                                <div class="row g-4">
                                    <div class="col-xl-12">
                                        
                                        {foreach $all_products as $single_product}
                                        <div class="product-details-item style-2">
                                            <div class="shop-image">
                                                <img src="{$single_product.image}" alt="img">
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                                    {* <li>
                                                        <a class="add-to-cart" data-product-id="{$single_product.id}"><i class="fa-regular fa-cart-shopping"></i></a>
                                                    </li> *}
                                                    {* <li>
                                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                                            <i class="fa-regular fa-eye"></i>
                                                        </button>
                                                    </li> *}
                                                    {* <li>
                                                        <a href="shop-cart"><i class="far fa-heart"></i></a>
                                                    </li> *}
                                                </ul>
                                            </div>
                                            <div class="content">
                                                <p>Whitetails Store</p>
                                                <h3>
                                                    <a href="product-details?p={$single_product.id}">{$single_product.name}</a>
                                                </h3>
                                                <div class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <h6>₦{$single_product.current_price} <del>{$single_product.old_price}</del></h6>
                                                <p>
                                                    {$single_product.summary}
                                                </p>
                                                {if $single_product.id is in $itemInCart}
                                                    <a class="mx-auto text-muted"><i><small> Item Already In Cart </small> </i></a>
                                                {else}
                                                    <a class="theme-btn add-to-cart" data-product-id="{$single_product.id}">Add To Cart</a>
                                                {/if}
                                                {* <a class="theme-btn add-to-cart" data-product-id="{$single_product.id}">Add To Cart</a>
                                                <a class="mx-auto text-muted"><i><small> Item Already In Cart </small> </i></a> *}
                                                
                                            </div>
                                        </div>
                                        {foreachelse}
                                            <h1>No Products Found</h1>
                                        {/foreach}
                                        
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

{include file="layout/footer.tpl"}




        