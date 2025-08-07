<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega Fashion | <?= isset($pageTitle) ? $pageTitle : 'Home'; ?> </title>
    <!-- bootsrap link  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- owl carousel link  -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- remix icon link  -->
    <link rel="stylesheet" href="assets/css/remixicon.css">
    <!-- magnific-popup css link  -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- jquey ui  -->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.theme.min.css">
    <!-- swiper css link  -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>

    <!-- dummy data file  -->
    <?php include 'data/data.php'; ?>


    <div class="scroll_top" title="Go To Top" id="Scroll_top">
        <i class="ri-arrow-up-line"></i>
    </div>


    <header>

        <!-- top header -->
        <div class="top_header">
            <div class="container">
                <div class="d-flex align-items-center justify-content-center header_address">
                    <div class="call d-flex align-items-center gap-1">
                        <i class="ri-phone-line"></i>
                        <a href="tel:1234567890">124567890</a>
                    </div>
                    <div class="mail d-none d-md-flex align-items-center gap-1">
                        <i class="ri-mail-open-line"></i>
                        <a href="mailto:example123@gmail.com">example123@gmail.com</a>
                    </div>
                    <div class="location d-none d-md-flex align-items-center gap-1">
                        <i class="ri-map-pin-line"></i>
                        <a href="#" target="_blank">Mitrapark, chabil(KTM)</a>
                    </div>
                    <div class="track_order d-flex align-items-center gap-1">
                        <i class="ri-truck-line"></i>
                        <a href="#">Track Order</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="logo_divison">
            <div class="container">
                <div class="search_box order-2 order-lg-1">
                    <input type="text" placeholder="Search keyword..." id="searchBox">
                    <button id="searchToggleBtn" aria-label="Search">
                        <i class="ri-search-line"></i>
                    </button>
                </div>

                <a href="index.php" class="logo order-1 order-lg-2">
                    Fashion
                </a>

                <div class="right_side order-3">
                    <div class="language_selector d-none d-xl-block">
                        <select class="form-select">
                            <option>USD</option>
                            <option value="en">English</option>
                            <option value="fr">French</option>
                            <option value="es" selected>Spanish</option>
                            <option value="de">Deutsch</option>
                        </select>
                    </div>

                    <div class="order_detail_container">
                        <a href="#" class="wish_list">
                            <i class="ri-heart-line"></i>
                            <div class="d-flex align-items-center gap-1">
                                <p class="d-none d-md-flex">Wishlist</p> <span>(0)</span>
                            </div>
                        </a>

                        <a href="cart.php" class="cart">
                            <div class="cart_counter">
                                <i class="ri-luggage-cart-line"></i>
                                <div class="cart_item_number">
                                    0
                                </div>
                            </div>
                            <div class="d-none d-md-flex gap-1">
                                <p class="d-flex align-items-center gap-1"> Cart <span>($0.00)</span></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- nav bar  -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container">
                <button class="navbar-toggler" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                    aria-controls="offcanvasExample" type="button" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ri-menu-3-line"></i>
                </button>


                <!-- Offcanvas Menu -->
                <div class="offcanvas offcanvas-start" id="offcanvasExample" tabindex="-1"
                    aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <p class="menu_text">Menu</p>
                        <button type="button" data-bs-dismiss="offcanvas" aria-label="Close" class="custom-close-btn">
                            <i class="ri-close-line"></i>
                        </button>
                    </div>

                    <div class="offcanvas-body">
                        <ul class="navbar-nav align-items-lg-center">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item dropdown mega_dropdown position-static">
                                <a class="nav-link dropdown_toggle megaMenuLink" href="#" role="button">
                                    Shop
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>

                                <!-- Mega Menu -->
                                <div class="mega_menu dropdown_menu" aria-labelledby="megaMenuLink">
                                    <div class="container">
                                        <div class="row g-lg-3 gy-3">
                                            <div class="col-lg-4">
                                                <h6 class="dropdown-header">Men</h6>
                                                <ul>
                                                    <li><a href="#" class="dropDown_item">Jackets & Coats</a></li>
                                                    <li><a href="#" class="dropDown_item">Jeans Loungewear</a></li>
                                                    <li><a href="#" class="dropDown_item">Polo shirts</a></li>
                                                    <li><a href="#" class="dropDown_item">Shirts</a></li>
                                                    <li><a href="#" class="dropDown_item">Shorts</a></li>
                                                    <li><a href="#" class="dropDown_item">Suits Swimwear</a></li>
                                                    <li><a href="#" class="dropDown_item">T-shirts</a></li>
                                                    <li><a href="#" class="dropDown_item">Tracksuits</a></li>
                                                    <li><a href="#" class="dropDown_item">Trousers</a></li>
                                                    <li><a href="#" class="dropDown_item">Underwear</a></li>
                                                </ul>

                                            </div>
                                            <div class="col-lg-4">
                                                <h6 class="dropdown-header">Women</h6>
                                                <ul>
                                                    <li><a href="#" class="dropDown_item"> Dresses</a></li>
                                                    <li> <a href="#" class="dropDown_item"> Jackets & Coats</a></li>
                                                    <li> <a href="#" class="dropDown_item"> Jeans Lingerie</a></li>
                                                    <li><a href="#" class="dropDown_item"> Shorts</a></li>
                                                    <li><a href="#" class="dropDown_item"> Skirts</a></li>
                                                    <li><a href="#" class="dropDown_item"> Suits</a></li>
                                                    <li><a href="#" class="dropDown_item"> Top Trousers</a></li>
                                                </ul>

                                            </div>
                                            <div class="col-lg-4">
                                                <h6 class="dropdown-header">Other</h6>
                                                <ul>
                                                    <li><a href="#" class="dropDown_item"> Accessories</a></li>
                                                    <li> <a href="#" class="dropDown_item"> Bags</a></li>
                                                    <li><a href="#" class="dropDown_item"> Belts</a></li>
                                                    <li><a href="#" class="dropDown_item"> Hats</a></li>
                                                    <li><a href="#" class="dropDown_item"> Watches</a></li>
                                                    <li> <a href="#" class="dropDown_item"> Jewelry</a></li>
                                                    <li><a href="#" class="dropDown_item"> Sale</a></li>
                                                    <li><a href="#" class="dropDown_item"> Vintage</a></li>
                                                    <li><a href="#" class="dropDown_item"> Shoes</a></li>
                                                    <li><a href="#" class="dropDown_item"> Lifestyle</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown mega_dropdown position-static">
                                <a class="nav-link dropdown_toggle megaMenuLink" href="#" role="button">
                                    Products
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>

                                <!-- Mega Menu -->
                                <div class="mega_menu dropdown_menu" aria-labelledby="megaMenuLink">
                                    <div class="container">
                                        <div class="row g-lg-3 gy-3">
                                            <div class="col-lg-4">
                                                <h6 class="dropdown-header">Fashion</h6>
                                                <ul>
                                                    <li><a href="#" class="dropDown_item">Jackets & Coats</a></li>
                                                    <li><a href="#" class="dropDown_item">Jeans Loungewear</a></li>
                                                    <li><a href="#" class="dropDown_item">Polo shirts</a></li>
                                                    <li><a href="#" class="dropDown_item">Shirts</a></li>
                                                    <li><a href="#" class="dropDown_item">Shorts</a></li>
                                                    <li><a href="#" class="dropDown_item">Suits Swimwear</a></li>
                                                    <li><a href="#" class="dropDown_item">T-shirts</a></li>
                                                    <li><a href="#" class="dropDown_item">Tracksuits</a></li>
                                                    <li><a href="#" class="dropDown_item">Trousers</a></li>
                                                    <li><a href="#" class="dropDown_item">Underwear</a></li>
                                                </ul>

                                            </div>
                                            <div class="col-lg-4">
                                                <h6 class="dropdown-header">Electronics</h6>
                                                <ul>
                                                    <li><a href="#" class="dropDown_item"> Dresses</a></li>
                                                    <li> <a href="#" class="dropDown_item"> Jackets & Coats</a></li>
                                                    <li> <a href="#" class="dropDown_item"> Jeans Lingerie</a></li>
                                                    <li><a href="#" class="dropDown_item"> Shorts</a></li>
                                                    <li><a href="#" class="dropDown_item"> Skirts</a></li>
                                                    <li><a href="#" class="dropDown_item"> Suits</a></li>
                                                    <li><a href="#" class="dropDown_item"> Top Trousers</a></li>
                                                </ul>

                                            </div>
                                            <div class="col-lg-4">
                                                <h6 class="dropdown-header">Other</h6>
                                                <ul>
                                                    <li><a href="#" class="dropDown_item"> Accessories</a></li>
                                                    <li> <a href="#" class="dropDown_item"> Bags</a></li>
                                                    <li><a href="#" class="dropDown_item"> Belts</a></li>
                                                    <li><a href="#" class="dropDown_item"> Hats</a></li>
                                                    <li><a href="#" class="dropDown_item"> Watches</a></li>
                                                    <li> <a href="#" class="dropDown_item"> Jewelry</a></li>
                                                    <li><a href="#" class="dropDown_item"> Sale</a></li>
                                                    <li><a href="#" class="dropDown_item"> Vintage</a></li>
                                                    <li><a href="#" class="dropDown_item"> Shoes</a></li>
                                                    <li><a href="#" class="dropDown_item"> Lifestyle</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog.php">Blog</a>
                            </li>
                            <li class="nav-item dropdown mega_dropdown position-relative">
                                <a class="nav-link dropdown_toggle megaMenuLink" href="#" role="button">
                                    Pages
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <!-- Mega Menu -->
                                <div class="mega_menu dropdown_menu pages_dropdown" aria-labelledby="megaMenuLink">
                                    <div class="container">
                                        <div class="row g-lg-3 gy-3">
                                            <ul>
                                                <li><a href="about.php">About Us</a></li>
                                                <li><a href="#">Careers</a></li>
                                                <li><a href="faq.php">FAQ</a></li>
                                                <li><a href="#">Comming Soon</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="login_register_container">
                    <div class="discount_tag d-none d-xl-flex">
                        <img src="./assets/images/icons/favourite.png" alt="star image">
                        Flat 20% cashback for first order
                    </div>

                    <div class="login-register">
                        <i class="ri-user-line"></i>
                        <a href="login.php">Login/Register</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- nav bar ends  -->
    </header>
    <!-- header ends  -->