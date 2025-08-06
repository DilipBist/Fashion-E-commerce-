<?php
$pageTitle = 'Login';
include 'inc/header.php';
?>

<!-- breadcrumb section starts  -->
<section class="bread_crumb_section">
    <img src="./assets/images/backgrounds/crumpwave.jpg" alt="wave bg">
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="bread_crump_link">
            <a href="index.php">Home</a>
            <span>/</span>
            <p>Login/Register</p>
        </div>
    </div>
</section>
<!-- breadcrumb section ends  -->

<!-- SECTION LOGIN/REGISTER  -->
<section class="login_register_section p64">
    <div class="container">
        <div class="row g-0 justify-content-center">
            <div class="col-lg-10">
                <div class="row g-0">
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="login_left_img">
                            <img src="assets/images/backgrounds/loginimg.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login_form_container">
                            <div class="form_heading">
                                <h2>SIGN IN</h2>
                                <p>Choose one of the following method</p>

                                <div class="social_methods d-flex align-items-center gap-2 flex-wrap">
                                    <a href="#" class="facebook">
                                        <i class="ri-facebook-fill"></i>
                                        Facebook
                                    </a>
                                    <a href="#" class="twitter">
                                        <i class="ri-twitter-x-line"></i>
                                        Twitter
                                    </a>
                                    <a href="#" class="google">
                                        <i class="ri-google-fill"></i>
                                        Google
                                    </a>
                                </div>
                            </div>

                            <form action="">
                                <p>Or sign in using your email address</p>

                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="d-flex flex-column gap-1">
                                            <label for="email">Email Address</label>
                                            <input type="email" name="email" id="email" placeholder="Email Here">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex flex-column gap-1">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex align-items-center gap-3 justify-content-between flex-wrap">
                                            <div class="d-flex align-items-center gap-2">
                                                <input type="radio" id="radio">
                                                <label for="radio">Remember Me</label>
                                            </div>

                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button>LOGIN NOW</button>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex align-items-center gap-1 signup">
                                            <p class="m-0">Dont't have and account?</p>
                                            <a href="#">Sign up</a>
                                        </div>
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
<!-- SECTION LOGIN/REGISTER ENDS -->


<?php include 'inc/footer.php'; ?>