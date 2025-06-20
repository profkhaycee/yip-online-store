<?php
/* Smarty version 5.5.1, created on 2025-06-19 05:12:59
  from 'file:login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68539c5ba9d332_28699469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3e0de3c5cafacdb8b4b43c69531b10d63d25f26' => 
    array (
      0 => 'login.tpl',
      1 => 1750284201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
))) {
function content_68539c5ba9d332_28699469 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/yip/app/views';
$_smarty_tpl->renderSubTemplate("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


<section class="my-account-section section-padding fix">
            <div class="container">
                <div class="account-wrapper">
                    <div class="shape-1 float-bob-x">
                        <img src="assets/img/shape-1.png" alt="img">
                    </div>
                    <div class="shape-2 float-bob-y">
                        <img src="assets/img/shape-2.png" alt="img">
                    </div>
                    <div class="shape-3 float-bob-y">
                        <img src="assets/img/dot.png" alt="img">
                    </div>
                    <div class="shape-4 float-bob-x">
                        <img src="assets/img/shape-3.png" alt="img">
                    </div>
                    <div class="shape-5 float-bob-y">
                        <img src="assets/img/man-shape.png" alt="img">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="content">
                                <h2>My account</h2>
                                <ul class="list">
                                    <li>
                                        <a href="index">Home</a>
                                    </li>
                                    <li>
                                        My account
                                    </li>
                                </ul>
                            </div>
                            <div class="account-box">
                                <h3>Login to Sofia.</h3>
                                <h6>Don’t have an account? <span><a href="register" style="color: inherit;"> Create a free account<a></span></h6>
                                <div class="account-item">
                                    <div class="google-image">
                                        <img src="assets/img/google.png" alt="img">
                                        <h6>Sign in with google</h6>
                                    </div>
                                    <div class="facebook">
                                        <i class="fa-brands fa-facebook"></i>
                                    </div>
                                    <div class="apple">
                                        <i class="fa-brands fa-apple"></i>
                                    </div>
                                </div>
                                <p>or Sign in with Email</p>
                                <h4><?php echo $_smarty_tpl->getValue('error');?>
</h4>
                                <div class="contact-form-item">
                                    <form action="login-submit" id="contact-form2" method="POST">
                                        <div class="row g-4">
                                            <div class="col-lg-12">
                                                <div class="form-clt">
                                                    <input type="email" name="email"  placeholder="Your Email" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-clt">
                                                    <input type="password" name="password"  placeholder="Password" required>
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
        </section>

<?php $_smarty_tpl->renderSubTemplate("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
