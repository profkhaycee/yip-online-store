<?php
/* Smarty version 5.5.1, created on 2025-06-19 05:03:01
  from 'file:register.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68539a0540f5a8_88969660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a2b08a42a2bf55eae54350710becbf91d5151e6' => 
    array (
      0 => 'register.tpl',
      1 => 1750284211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
))) {
function content_68539a0540f5a8_88969660 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/MAMP/htdocs/yip/app/views';
$_smarty_tpl->renderSubTemplate("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>


<section class="sign-up-section section-padding fix">
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
                                <h3>Rejister to Sofia.</h3>
                                <h6>Don’t have an account? <span>Create a free account</span></h6>
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
                                    <form action="register-submit" id="contact-form2" method="POST">
                                        <div class="row g-4">
                                            <div class="col-lg-12">
                                                <div class="form-clt">
                                                    <input type="text" name="firstname"  placeholder="First name" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-clt">
                                                    <input type="text" name="lastname"  placeholder="Last name" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-clt">
                                                    <input type="email" name="email" id="email" placeholder="Email" required>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-clt">
                                                    <input type="tel" name="phone"  placeholder="Phone Number" minlength="11" maxlength="11" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-clt">
                                                    <input type="password" name="password" id="password" placeholder="Password" minlength="5" required>
                                                                                                    </div>
                                            </div>
                                                                                        <div class="col-lg-12">
                                                <button type="submit" class="theme-btn w-100">
                                                    Sign Up
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
