<?php
/* Smarty version 5.5.1, created on 2025-06-20 07:56:12
  from 'file:layout/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6855141c27eb06_59729394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '693510e3c2e4590f6bbe2cc226e89110cce99913' => 
    array (
      0 => 'layout/header.tpl',
      1 => 1750406116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6855141c27eb06_59729394 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/yip/app/views/layout';
?><!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Gramentheme">
        <meta name="description" content="Get Anything You Want at YIP Store">
        <!-- ======== Page title ============ -->
        <title>YIP STORE - <?php echo $_smarty_tpl->getValue('page_title');?>
</title>
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="assets/img/yip-icon.jpeg">
        <!--<< Bootstrap min.css >>-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/font/bootstrap-icons.css">

        <!--<< All Min Css >>-->
        <link rel="stylesheet" href="assets/css/all.min.css">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <!--<< Color.css >>-->
        <link rel="stylesheet" href="assets/css/color.css">
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="assets/css/main.css">

        <style>
            img[alt="logo-img"] {
                width: 140px !important;
                height: 36px !important;
            }
            .dropdown-item:hover{
                color: #BD844C;
            }

            .header-1 .header-main .header-right .menu-cart .cart-icon .cart-item-count {
                position: absolute;
                top: -7px;
                right: -8px;
                /* content: "13"; */
                width: 20px;
                line-height: 20px;
                height: 20px;
                border-radius: 50px;
                background-color: var(--theme);
                color: var(--white);
                font-size: 12px;
                text-align: center;
                font-weight: 500;
            }
            .header-1 .header-main .header-right .menu-cart .cart-icon::before {
                display: none !important;
                position: absolute;
                top: -7px;
                right: -8px;
                content: "13";
                width: 20px;
                line-height: 20px;
                height: 20px;
                border-radius: 50px;
                background-color: var(--theme);
                color: var(--white);
                font-size: 12px;
                text-align: center;
                font-weight: 500;
            }

            @media (max-width: 1399px) {
                .header-1 .header-main .header-right .header-icon {
                    display: flex !important;
                }
            }
            @media (max-width: 1199px) {
                .header-1 .header-main .header-right .menu-cart {
                    display: flex !important;
                }
            }

        </style>
    </head>
    <body>

        <!-- Preloader Start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">                
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="Y" class="letters-loading">
                        Y
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="P" class="letters-loading">
                        P
                    </span>
                                    </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back To Top Start -->
        <button id="back-top" class="back-to-top">
            <i class="fa-regular fa-arrow-up"></i>
        </button>

        <!--<< Mouse Cursor Start >>-->  
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <!-- fix-area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="index">
                                                                        <img src="assets/img/yip-logo.png" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text d-none d-xl-block">
                            Nullam dignissim, ante scelerisque the  is euismod fermentum odio sem semper the is erat, a feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                        </p>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Main Street, Melbourne, Australia</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="mailto:info@example.com"><span class="mailto:info@example.com">info@example.com</span></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:+11002345909">+11002345909</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-button mt-4">
                                
                            </div>
                            <a href="contact" class="theme-btn"><span>Let’s Talk <i class="fa-solid fa-arrow-right"></i></span></a>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        <!-- Sidebar Area Here -->
        <div id="targetElement" class="side_bar slideInRight side_bar_hidden">
            <div class="side_bar_overlay"></div>
            <div class="cart-title mb-50">
                <h4>Log in</h4>
            </div>
            <div class="login-sidebar">
                <form action="#" id="contact-form" method="POST">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="form-clt">
                                <span>Username or email address *</span>
                                <input type="text" name="name15" id="name15" placeholder="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-clt">
                                <span>Password *</span>
                                <input id="password" type="password" placeholder="">
                                <div class="icon"><i class="fa-regular fa-eye"></i></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button class="theme-btn" type="submit"><span>Log In</span></button>
                        </div>
                        <div class="col-lg-12">
                            <div class="from-cheak-items">
                                <div class="form-check d-flex gap-2 from-customradio">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Remember Me
                                    </label>
                                </div>
                                <p>Forgot Password?</p>
                            </div>
                        </div>
                    </div>
                </form>
                <p class="text">Or login with</p>
                <div class="social-item">
                    <a href="#" class="facebook-text"><img src="assets/img/facebook.png" alt="img">FACEBOOK</a>
                    <a href="#" class="facebook-text google-text"><img src="assets/img/google.png" alt="img">Google</a>
                </div>
                <div class="user-icon-box">
                    <img src="assets/img/user.png" alt="img">
                    <p>No account yet?</p>
                    <a href="account">Create an Account</a>
                </div>
            </div>
            <button id="closeButton" class="x-mark-icon"><i class="fas fa-times"></i></button>
        </div>

         <!-- Sidebar Area Here -->
         <div id="targetElement2" class="side_bar-2 slideInRight side_bar_hidden2">
            <div class="side_bar_overlay"></div>
            <div class="main-sideber">
                <div class="single-sidebar-widget-2">
                    <div class="wid-title">
                        <h5>price filter</h5>
                    </div>
                    <div class="range__barcustom">
                        <div class="slider">
                            <div class="progress" style="left: 25%; right: 25%;"></div>
                        </div>
                        <div class="range-input">
                            <input type="range" class="range-min" min="0" max="10000" value="2500">
                            <input type="range" class="range-max" min="100" max="10000" value="7500">
                        </div>
                        <div class="range-items">
                            <div class="price-input d-flex">
                                <div class="field style-2">
                                    <span>$</span>
                                    <input type="number" class="input-min" value="95">
                                </div>
                                <div class="separators">-</div>
                                <div class="field">
                                    <span>$</span>
                                    <input type="number" class="input-max" value="2500">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-sidebar-widget-2">
                    <div class="wid-title">
                        <h5>Product Status</h5>
                    </div>
                    <div class="product-list">
                        <label class="checkbox-single">
                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                <span class="checkbox-area d-center">
                                    <input type="checkbox">
                                    <span class="checkmark bg-2 d-center"></span>
                                </span>
                                <span class="text-color">
                                    On sale
                                </span>
                            </span>
                        </label>
                        <label class="checkbox-single">
                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                <span class="checkbox-area d-center">
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark d-center"></span>
                                </span>
                                <span class="text-color">
                                    In stock
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="single-sidebar-widget-2">
                    <div class="courses-list">
                        <label class="checkbox-single">
                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                <span class="checkbox-area d-center">
                                    <input type="checkbox">
                                    <span class="checkmark d-center"></span>
                                </span>
                                <span class="text-color">
                                    <span class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <span class="ratting-text">(22)</span>
                                </span>
                            </span>
                        </label>
                        <label class="checkbox-single">
                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                <span class="checkbox-area d-center">
                                    <input type="checkbox">
                                    <span class="checkmark d-center"></span>
                                </span>
                                <span class="text-color">
                                    <span class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star color-2"></i>
                                    </span>
                                    <span class="ratting-text">(15)</span>
                                </span>
                            </span>
                        </label>
                        <label class="checkbox-single">
                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                <span class="checkbox-area d-center">
                                    <input type="checkbox">
                                    <span class="checkmark d-center"></span>
                                </span>
                                <span class="text-color">
                                    <span class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star color-2"></i>
                                        <i class="fas fa-star color-2"></i>
                                    </span>
                                    <span class="ratting-text">(03)</span>
                                </span>
                            </span>
                        </label>
                        <label class="checkbox-single">
                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                <span class="checkbox-area d-center">
                                    <input type="checkbox">
                                    <span class="checkmark d-center"></span>
                                </span>
                                <span class="text-color">
                                    <span class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star color-2"></i>
                                        <i class="fas fa-star color-2"></i>
                                        <i class="fas fa-star color-2"></i>
                                    </span>
                                   <span class="ratting-text">(00)</span>
                                </span>
                            </span>
                        </label>
                        <label class="checkbox-single">
                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                <span class="checkbox-area d-center">
                                    <input type="checkbox">
                                    <span class="checkmark d-center"></span>
                                </span>
                                <span class="text-color">
                                    <span class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star color-2"></i>
                                        <i class="fas fa-star color-2"></i>
                                        <i class="fas fa-star color-2"></i>
                                        <i class="fas fa-star color-2"></i>
                                    </span>
                                   <span class="ratting-text">(00)</span>
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="single-sidebar-widget-2">
                    <div class="wid-title">
                        <h5>Categories</h5>
                    </div>
                    <div class="widget-categories">
                        <ul>
                            <li><a href="product-details">Leather</a><span>10</span></li>
                            <li><a href="product-details">Classic Watch</a><span>28</span></li>
                            <li><a href="product-details">Leather Man Wacth</a><span>12</span></li>
                            <li><a href="product-details">Trending Watch</a><span>17</span></li>
                            <li><a href="product-details">Google</a><span>22</span></li>
                            <li><a href="product-details">Woman Wacth</a><span>14</span></li>
                            <li><a href="product-details">Tables</a><span>19</span></li>
                            <li><a href="product-details">ShopEngine</a><span>29</span></li>
                        </ul>
                    </div>
                </div>
                <div class="single-sidebar-widget-2">
                    <div class="wid-title">
                        <h5>Filter by Color</h5>
                    </div>
                    <div class="list">
                        <label class="checkbox-single">
                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                <span class="checkbox-area d-center">
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark d-center"></span>
                                </span>
                                <span class="text-color">
                                    Red
                                </span>
                            </span>
                            <span class="text">
                                8
                            </span>
                        </label>
                        <label class="checkbox-single">
                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                <span class="checkbox-area d-center">
                                    <input type="checkbox">
                                    <span class="checkmark bg-2 d-center"></span>
                                </span>
                                <span class="text-color">
                                    Dark Blue
                                </span>
                            </span>
                            <span class="text">
                                14
                            </span>
                        </label>
                        <label class="checkbox-single">
                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                <span class="checkbox-area d-center">
                                    <input type="checkbox">
                                    <span class="checkmark bg-3 d-center"></span>
                                </span>
                                <span class="text-color">
                                    Orange
                                </span>
                            </span>
                            <span class="text">
                                18
                            </span>
                        </label>
                        <label class="checkbox-single">
                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                <span class="checkbox-area d-center">
                                    <input type="checkbox">
                                    <span class="checkmark bg-4 d-center"></span>
                                </span>
                                <span class="text-color">
                                    Purple
                                </span>
                            </span>
                            <span class="text">
                                23
                            </span>
                        </label>
                        <label class="checkbox-single">
                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                <span class="checkbox-area d-center">
                                    <input type="checkbox">
                                    <span class="checkmark bg-5 d-center"></span>
                                </span>
                                <span class="text-color">
                                    Yellow
                                </span>
                            </span>
                            <span class="text">
                                17
                            </span>
                        </label>
                        <label class="checkbox-single">
                            <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                <span class="checkbox-area d-center">
                                    <input type="checkbox">
                                    <span class="checkmark bg-6 d-center"></span>
                                </span>
                                <span class="text-color">
                                    Green
                                </span>
                            </span>
                            <span class="text">
                                15
                            </span>
                        </label>
                    </div>
                </div>
                <div class="single-sidebar-widget-2">
                    <div class="wid-title">
                        <h5>Popular Brands</h5>
                    </div>
                    <div class="brand-post">
                        <div class="brand-item">
                            <div class="brand-image">
                                <img src="assets/img/brand/b1.png" alt="img">
                            </div>
                            <div class="brand-image">
                                <img src="assets/img/brand/b2.png" alt="img">
                            </div>
                        </div>
                        <div class="brand-item">
                            <div class="brand-image">
                                <img src="assets/img/brand/b3.png" alt="img">
                            </div>
                            <div class="brand-image">
                                <img src="assets/img/brand/b4.png" alt="img">
                            </div>
                        </div>
                        <div class="brand-item">
                            <div class="brand-image">
                                <img src="assets/img/brand/b5.png" alt="img">
                            </div>
                            <div class="brand-image">
                                <img src="assets/img/brand/b6.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button id="closeButton2" class="x-mark-icon"><i class="fas fa-times"></i></button>
         </div>


        <!-- Header top Section Start -->
        
        <!-- Header Section Start -->
        <header id="header-sticky" class=" header-1">
            <div class="container-fluid style-2">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="logo">
                            <a href="index" class="header-logo">
                                                                <img src="assets/img/yip-logo.png" alt="logo-img">
                            </a>
                            <a href="index" class="header-logo-2 d-none">
                                                                <img src="assets/img/yip-logo.png" alt="logo-img">
                            </a>
                        </div>
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu" style="display: block;">
                                    <ul>
                                        <li class="has-dropdownx active menu-thumb">
                                            <a href="shop">
                                                Home 
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </a>
                                                                                    </li>
                                        <li class="has-dropdownx active d-xl-none">
                                           <a href="shop" class="border-none">
                                            Home
                                            </a>
                                                                                    </li>
                                                                                <li>
                                            <a href="shop">
                                                Shop 
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </a>
                                                                                    </li>
                                        <li>
                                            <a href="#">
                                                Latest News
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </a>
                                                                                    </li>
                                        <li><a href="orders">Admin Dashboard</a></li>
                                        <li>
                                            <a href="#">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                                                                                    <div class="menu-cart">
                                                                <a href="shop-cart" class="cart-icon">
                                    <span class="cart-item-count"><?php echo $_smarty_tpl->getValue('cartTotalCount');?>
</span>
                                    <i class="fa-sharp fa-regular fa-bag-shopping"></i>
                                </a>
                            </div>


                            <div class="content dropdown-center">
                                <button id="openButtonxx" class="account-text" data-bs-toggle="dropdown">
                                    <i class="fa-regular fa-user fs-5"></i> <?php if ($_smarty_tpl->getValue('user')) {?>
                                        <?php echo $_smarty_tpl->getValue('user')['firstname'];?>

                                    <?php }?>
                                    
                                </button>
                                <ul class="dropdown-menu my-2">
                                    <li><a class="dropdown-item p-2 my-1" href="account">My Account</a></li>
                                    <?php if ($_smarty_tpl->getValue('user')) {?>
                                        <li><a class="dropdown-item p-2 my-1" href="#">My Orders</a></li>
                                        <li><a class="dropdown-item p-2 my-1" href="#">My Wishlist</a></li>
                                        <li><a class="dropdown-item p-2 my-1" href="cart">My Cart</a></li>
                                        <li><a class="dropdown-item p-2 my-1" href="logout">Log Out</a></li>
                                    <?php } else { ?>
                                        <li><a class="dropdown-item p-2 my-1" href="login">Sign In</a></li>
                                    <?php }?>
                                    
                                </ul>
                            </div>


                            <div class="header__hamburger d-xl-none my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- search-wrap Start -->
        <div class="search-wrap">
            <div class="search-inner">
                <i class="fas fa-times search-close" id="search-close"></i>
                <div class="search-cell">
                    <form method="get">
                        <div class="search-field-holder">
                            <input type="search" class="main-search-input" placeholder="Search...">
                        </div>
                    </form>
                </div>
            </div>
        </div>

         <!-- Modal Version 2 -->
         <div class="modal modal-common-wrap fade" id="exampleModal2" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="shop-details-wrapper">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="shop-details-image">
                                    <div class="tab-content">
                                        <div class="shop-thumb">
                                            <img src="assets/img/shop/popup.jpg" alt="img">
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="product-details-content">
                                        <h3 class="pb-3">Sulwhasoo Essential Cream</h3>
                                        <div class="star pb-3">
                                            <a href="#"> <i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"> <i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <a href="#"><i class="fas fa-star"></i></a>
                                            <span>(25 Customer Review)</span>
                                        </div>
                                        <p class="mb-3">
                                            In today’s online world, a brand’s success lies in combining
                                            technological planning and social strategies to draw
                                            customers in–and keep them coming back
                                        </p>
                                        <div class="price-list">
                                            <h3>$1,260.00</h3>
                                        </div>
                                        <div class="cart-wrp">
                                            <div class="cart-quantity">
                                                <form id='myform' method='POST' class='quantity' action='#'>
                                                    <input type='button' value='-' class='qtyminus minus'>
                                                    <input type='text' name='quantity' value='0' class='qty'>
                                                    <input type='button' value='+' class='qtyplus plus'>
                                                </form>
                                            </div>
                                            <a href="product-details" class="icon">
                                                <i class="far fa-heart"></i>
                                            </a>
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
                                        <div class="shop-btn">
                                            <a href="shop-cart" class="theme-btn">
                                                <span> Add to cart</span>
                                            </a>
                                            <a href="product-details" class="theme-btn">
                                                <span> Buy now</span>
                                            </a>
                                        </div>
                                        <h6 class="details-info"><span>SKU:</span> <a href="product-details">124224</a></h6>
                                        <h6 class="details-info"><span>Categories:</span> <a href="product-details">Crux Indoor Fast and Easy</a></h6>
                                        <h6 class="details-info style-2"><span>Tags:</span> <a href="product-details"> <b>accessories</b> <b>business</b></a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php }
}
