<?php
/* Smarty version 5.5.1, created on 2025-06-19 05:09:18
  from 'file:profile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68539b7e3aeef4_85397065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30ee6c45f78e927fabe38a0a34fb197ca896e788' => 
    array (
      0 => 'profile.tpl',
      1 => 1750309747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
))) {
function content_68539b7e3aeef4_85397065 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/yip/app/views';
$_smarty_tpl->renderSubTemplate("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


<section class="my-account-section section-padding fix">
            <div class="container">
                <div class="my-account-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="wrap-sidebar-account">
                                <div class="sidebar-account">
                                    <div class="account-avatar">
                                        <div class="image">
                                            <img src="assets/img/avater.jpg" alt="img">
                                        </div>
                                        <h6 class="mb_4">Tony Nguyen</h6>
                                        <div class="body-text-1">cartly@gmail.com</div>
                                    </div>
                                    <ul class="nav" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a href="#Course" data-bs-toggle="tab" class="nav-link active" aria-selected="true" role="tab">
                                                <i class="fa-regular fa-user"></i>
                                                Account Details
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a href="#Curriculum" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                                <i class="fa-sharp fa-regular fa-bag-shopping"></i>
                                                Your Orders
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a href="#Instructors" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                                <i class="fa-regular fa-location-dot"></i>
                                                My Address
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a href="#Reviews" data-bs-toggle="tab" class="nav-link" aria-selected="false" role="tab" tabindex="-1">
                                                <i class="fa-regular fa-share-from-square"></i>
                                                Logout
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="tab-content">
                                <div id="Course" class="tab-pane fade active show" role="tabpanel">
                                    <div class="account-details">
                                        <form action="#" id="contact-form2" method="POST">
                                            <div class="account-info">
                                                <h3>Information</h3>
                                                <div class="row g-4">
                                                    <div class="col-lg-6">
                                                        <div class="form-clt">
                                                            <input type="text" name="name" id="name" placeholder="Tony">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-clt">
                                                            <input type="text" name="name" id="name2" placeholder="Nguyen">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-clt">
                                                            <input type="text" name="email" id="email" placeholder="cartly@gmail.com">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-clt">
                                                            <input type="text" name="number" id="number" placeholder="(+12) 385 678 970">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-clt">
                                                            <div class="form">
                                                                <select class="single-select w-100" style="display: none;">
                                                                    <option> United States</option>
                                                                    <option>  France</option>
                                                                    <option> Canada</option>
                                                                    <option> Poland</option>
                                                                    <option> Italy</option>
                                                                    <option> Portugal</option>
                                                                </select><div class="nice-select single-select w-100" tabindex="0"><span class="current"> United States</span><ul class="list"><li data-value="United States" class="option selected"> United States</li><li data-value="France" class="option">  France</li><li data-value="Canada" class="option"> Canada</li><li data-value="Poland" class="option"> Poland</li><li data-value="Italy" class="option"> Italy</li><li data-value="Portugal" class="option"> Portugal</li></ul></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="account-password">
                                                <div class="account-info">
                                                    <h3>Change Password</h3>
                                                    <div class="row g-4">
                                                        <div class="col-lg-12">
                                                            <div class="form-clt">
                                                                <input id="password2" type="password" placeholder="Password">
                                                                <div class="icon">
                                                                    <i class="far fa-eye-slash"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-clt">
                                                                <input id="password3" type="password" placeholder="Creat Password">
                                                                <div class="icon">
                                                                    <i class="far fa-eye-slash"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-clt">
                                                                <input id="password4" type="password" placeholder="Confirm Password">
                                                                <div class="icon">
                                                                    <i class="far fa-eye-slash"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div id="Curriculum" class="tab-pane fade" role="tabpanel">
                                    <div class="cart-list-area">
                                        <div class="table-responsive">
                                            <table class="table common-table">
                                                <thead data-aos="fade-down">
                                                    <tr>
                                                        <th class="text-center">Product</th>
                                                        <th class="text-center">Price</th>
                                                        <th class="text-center">Subtotal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="align-items-center py-3">
                                                        <td>
                                                            <div class="cart-item-thumb d-flex align-items-center gap-4">
                                                                <i class="fas fa-times"></i>
                                                                <img class="w-100" src="assets/img/cart/03.jpg" alt="product">
                                                                <span class="head text-nowrap">Prayer for Meany</span>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="price-usd">
                                                                $12.40 USD
                                                            </span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="price-usd">
                                                                $12.40 USD
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-items-center py-3">
                                                        <td>
                                                            <div class="cart-item-thumb d-flex align-items-center gap-4">
                                                                <i class="fas fa-times"></i>
                                                                <img class="w-100" src="assets/img/cart/04.jpg" alt="product">
                                                                <span class="head text-nowrap">Don Quixote</span>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="price-usd">
                                                                $25.50 USD
                                                            </span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="price-usd">
                                                                $25.50 USD
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-items-center py-3">
                                                        <td>
                                                            <div class="cart-item-thumb d-flex align-items-center gap-4">
                                                                <i class="fas fa-times"></i>
                                                                <img class="w-100" src="assets/img/cart/05.jpg" alt="product">
                                                                <span class="head text-nowrap">Don Quixote</span>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="price-usd">
                                                                $44.50 USD
                                                            </span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="price-usd">
                                                                $44.50 USD
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr class="align-items-center py-3">
                                                        <td>
                                                            <div class="cart-item-thumb d-flex align-items-center gap-4">
                                                                <i class="fas fa-times"></i>
                                                                <img class="w-100" src="assets/img/cart/06.jpg" alt="product">
                                                                <span class="head text-nowrap">Don Quixote</span>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="price-usd">
                                                                $39.50 USD
                                                            </span>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="price-usd">
                                                                $39.50 USD
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="Instructors" class="tab-pane fade" role="tabpanel">
                                    <div class="axil-dashboard-address">
                                        <p class="notice-text">The following addresses will be used on the checkout page by default.</p>
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="address-info">
                                                    <div class="addrss-header d-flex align-items-center justify-content-between">
                                                        <h4 class="title">Shipping Address</h4>
                                                        <a href="#" class="address-edit"><i class="far fa-edit"></i></a>
                                                    </div>
                                                    <ul class="address-details">
                                                        <li>Name: Annie Mario</li>
                                                        <li>
                                                            <span>Email:</span>
                                                            <a href="mailto:cartly@gmail.com">cartly@gmail.com</a>
                                                        </li>
                                                        <li>
                                                            <span>Phone:</span>
                                                            <a href="tel:+67041390762">+670 413 90 762</a>
                                                        </li>
                                                        <li class="style-2">7398 Smoke Ranch Road <br>
                                                        Las Vegas, Nevada 89128</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="address-info">
                                                    <div class="addrss-header d-flex align-items-center justify-content-between">
                                                        <h4 class="title">Shipping Address</h4>
                                                        <a href="#" class="address-edit"><i class="far fa-edit"></i></a>
                                                    </div>
                                                    <ul class="address-details">
                                                        <li>Name: Annie Mario</li>
                                                        <li>
                                                            <span>Email:</span>
                                                            <a href="mailto:cartly@gmail.com">cartly@gmail.com</a>
                                                        </li>
                                                        <li>
                                                            <span>Phone:</span>
                                                            <a href="tel:+67041390762">+670 413 90 762</a>
                                                        </li>
                                                        <li class="style-2">7398 Smoke Ranch Road <br>
                                                        Las Vegas, Nevada 89128</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="Reviews" class="tab-pane fade" role="tabpanel">
                                    <div class="account-wrapper">
                                        <div class="account-box">
                                            <h3 class="mb-3">Login to Sofia.</h3>
                                            <h6>Don’t have an account? <span>Create a free account</span></h6>
                                            <p class="mt-4">or Sign in with Email</p>
                                            <div class="contact-form-item">
                                                <form action="#" id="contact-form3" method="POST">
                                                    <div class="row g-4">
                                                        <div class="col-lg-12">
                                                            <div class="form-clt">
                                                                <input type="text" name="email" id="email20" placeholder="Your Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-clt">
                                                                <input type="text" name="subject" id="email21" placeholder="Password">
                                                                <div class="icon">
                                                                    <i class="fa-regular fa-eye"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="from-cheak-items">
                                                                <div class="form-check d-flex gap-2 from-customradio">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Remember Me
                                                                    </label>
                                                                </div>
                                                                <span>Forgot Password?</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <button type="submit" class="theme-btn header-btn w-100">
                                                                Login
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
                    </div>
                </div>
            </div>
        </section>

<?php $_smarty_tpl->renderSubTemplate("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php }
}
