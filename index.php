<?php
$pageTitle = 'Home';
include 'inc/header.php'; 
?>


<!-- hero section starts  -->
<section class="hero_slider_container">

    <div class="swiper heroSlider">
        <div class="swiper-wrapper">
            <?php foreach ($hero_sliders as $slider) : ?>
                <div class="swiper-slide">
                    <div class="hero-slider ">
                        <div class="container position-relative h-100">
                            <div class="hero-left-text">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="offer-tag">
                                        <?= $slider['offer_tag']; ?>
                                    </div>
                                    <?php if (isset($slider['offer_text']) && $slider['offer_text'] !== ''):  ?>
                                        <h5><?= $slider['offer_text']; ?></h5>
                                    <?php endif; ?>
                                </div>
                                <h3><?= $slider['heading']; ?></h3>
                            </div>

                            <div class="slider-img">
                                <img src="<?= $slider['image'] ?>" alt="Women image">
                            </div>
                            <div class="hero-right-text">
                                <h4><?= $slider['right_heading']; ?></h4>
                                <p><?= $slider['right_paragraph'] ?></p>

                                <a href="shop-sidebar.php" class="primary-btn">
                                    <?= !empty($slider['button_text']) ? $slider['button_text'] : 'Shop now' ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-button-next">
            <i class="ri-arrow-right-wide-line"></i>
        </div>
        <div class="swiper-button-prev">
            <i class="ri-arrow-left-wide-line"></i>
        </div>
    </div>
</section>
<!-- hero section ends  -->


<!-- home product banner 1 starts -->
<section class="home_banner_one">
    <div class="container">
        <div class="row g-3">
            <div class="col-lg-6">
                <div class="large_banner_one">
                    <img src="./assets/images/bannerImages/men.jpg" alt="banner image">

                    <div class="banner_content">
                        <div class="collection_name">
                            gents collection
                        </div>
                        <a href="shop-sidebar.php" class="primary-btn">shop now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="small_banner_one">
                                    <img src="./assets/images/bannerImages/kids.jpg" alt="kid image">
                                    <div class="banner_content2">
                                        <div class="collection_name">
                                            kid's fashion
                                        </div>
                                        <a href="shop-sidebar.php" class="primary-btn">shop now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="small_banner_one">
                                    <img src="./assets/images/bannerImages/womev.jpg" alt="kid image">
                                    <div class="banner_content2">
                                        <div class="collection_name">
                                            Girl's fashion
                                        </div>
                                        <a href="shop-sidebar.php" class="primary-btn">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="small_banner_one">
                            <img src="./assets/images/bannerImages/shoe.jpg" alt="kid image">
                            <div class="banner_content">
                                <div class="collection_name">
                                    both Accessories
                                </div>
                                <a href="shop-sidebar.php" class="primary-btn">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- home product banner 1 ends -->

<!-- product showcase section starts  -->
<section class="browser_product_section p64">
    <div class="container">
        <div class="common_heading">
            <h3>browser products</h3>
        </div>

        <div class="row g-4 mt-4 d-none d-lg-flex">

            <?php foreach (array_slice($products, 0, 8) as $product) : ?>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="product_card_container">
                        <div class="product_img">
                            <?php if (isset($product['discount']) && $product['discount'] !== ''):  ?>
                                <div class="discount_price_tag">
                                    <?= $product['discount'] ?>
                                </div>
                            <?php endif; ?>
                            <?php if (isset($product['trending']) && $product['trending'] !== ''):  ?>
                                <div class="trending_tag">
                                    <?= $product['trending'] ?>
                                </div>
                            <?php endif; ?>
                            <?php if (isset($product['sale']) && $product['sale'] !== ''):  ?>
                                <div class="sale_tag">
                                    <?= $product['sale']; ?>
                                </div>
                            <?php endif; ?>

                            <img class="primary" src="<?= $product['image1']; ?>" alt="bag image">
                            <img class="secondary" src="<?= $product['image2']; ?>" alt="bag hover image">

                            <div class="product_bg_overlay">
                                <div
                                    class="d-flex align-items-center justify-content-center position-relative top-50 translate-middle-y gap-2">
                                    <div class="product-more-info">
                                        <i class="ri-luggage-cart-line"></i>
                                    </div>
                                    <div class="product-more-info">
                                        <i class="ri-heart-line"></i>
                                    </div>
                                    <div class="product-more-info">
                                        <i class="ri-recycle-line"></i>
                                    </div>
                                    <div class="product-more-info">
                                        <i class="ri-eye-line"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product_details">
                            <div class="product_type">
                                <?= $product['product_category'] ?>
                            </div>
                            <div class="product-description">
                                <a href="productDetails.php">
                                    <?= $product['product_description'] ?>

                                </a>
                            </div>
                            <div class="product_price_container">
                                <div class="discount-price">
                                    <?= $product['discount_price'] ?>
                                </div>
                                <div class="actual-price">
                                    <?= $product['actual_price'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>


        <!-- small screen slider  -->
        <div class="d-lg-none mt-4">
            <div class="swiper ProductSlider">
                <div class="swiper-wrapper">
                    <?php foreach (array_slice($products, 0, 8) as $product) : ?>
                        <div class="swiper-slide">
                            <div class="product_card_container">
                                <div class="product_img">
                                    <?php if (isset($product['discount']) && $product['discount'] !== ''):  ?>
                                        <div class="discount_price_tag">
                                            <?= $product['discount'] ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (isset($product['trending']) && $product['trending'] !== ''):  ?>
                                        <div class="trending_tag">
                                            <?= $product['trending'] ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (isset($product['sale']) && $product['sale'] !== ''):  ?>
                                        <div class="sale_tag">
                                            <?= $product['sale']; ?>
                                        </div>
                                    <?php endif; ?>

                                    <img class="primary" src="<?= $product['image1']; ?>" alt="bag image">
                                    <img class="secondary" src="<?= $product['image2']; ?>" alt="bag hover image">

                                    <div class="product_bg_overlay">
                                        <div
                                            class="d-flex align-items-center justify-content-center position-relative top-50 translate-middle-y gap-2">
                                            <div class="product-more-info">
                                                <i class="ri-luggage-cart-line"></i>
                                            </div>
                                            <div class="product-more-info">
                                                <i class="ri-heart-line"></i>
                                            </div>
                                            <div class="product-more-info">
                                                <i class="ri-recycle-line"></i>
                                            </div>
                                            <div class="product-more-info">
                                                <i class="ri-eye-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product_details">
                                    <div class="product_type">
                                        <?= $product['product_category'] ?>
                                    </div>
                                    <div class="product-description">
                                        <a href="productDetails.php">
                                            <?= $product['product_description'] ?>

                                        </a>
                                    </div>
                                    <div class="product_price_container">
                                        <div class="discount-price">
                                            <?= $product['discount_price'] ?>
                                        </div>
                                        <div class="actual-price">
                                            <?= $product['actual_price'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
<!-- product showcase section ends  -->


<!-- sale banner section starts  -->
<section class="sale_banner_section p64">
    <div class="container position-relative">
        <div class="row gy-4 g-lg-0 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3 align-items-center">
                    <div class="col-md-7 col-xxl-6">
                        <div class="sale_banner_left_image">
                            <img src="./assets/images/backgrounds/saleleft.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-5 col-xxl-6 d-none d-md-flex justify-content-lg-end justify-content-center">
                        <div class="sale_text_outline">
                            <h4>sale</h4>
                            <h4>sale</h4>
                            <h4>sale</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-4 align-items-center">
                    <div class="col-md-5 col-xxl-6 d-flex justify-content-center justify-content-md-start">
                        <div class="sale_discount_offer">
                            <h4>UP TO</h4>
                            <div class="d-flex gap-2 align-items-center">
                                <h3>50%</h3>
                                <div class="d-flex flex-column">
                                    <span>O</span>
                                    <span>F</span>
                                    <span>F</span>
                                </div>
                            </div>
                            <div class="offer_code d-flex align-items-center gap-1 mb-3">
                                <p>USE code:</p>
                                <span>12jkvew8</span>
                            </div>
                            <a href="shop-sidebar.php">explore now</a>
                        </div>
                    </div>
                    <div class="col-md-7 col-xxl-6 d-lg-flex justify-content-lg-end">
                        <div class="sale_banner_right_image">
                            <img src="./assets/images/backgrounds/saleright.avif" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- sale banner section ends  -->


<!-- popular porduct section starts  -->
<section class="popular_products_section p64">
    <div class="container">
        <div class="common_heading">
            <h3>popular products</h3>
        </div>
        <div class="row mt-lg-5 mt-4 g-3">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="popular_product_banner_image">
                            <img src="./assets/images/bannerImages/pwome.jpg" alt="">

                            <div class="popular_banner_content_one popular_banner_content">
                                <p>new arrival</p>
                                <h3>Trendy flexible shopping</h3>
                                <a href="shop-sidebar.php">show now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="popular_product_banner_image">
                            <img src="./assets/images/bannerImages/pmen.jpg" alt="">

                            <div class="popular_banner_content_two popular_banner_content">
                                <p>hot products</p>
                                <h3>summer shirt for men's fashion</h3>
                                <a href="shop-sidebar.php">show now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <?php foreach (array_slice($products, 2, 4) as $product) : ?>
                        <div class="col-sm-6">
                            <div class="product_card_container">
                                <div class="product_img">
                                    <?php if (isset($product['discount']) && $product['discount'] !== ''):  ?>
                                        <div class="discount_price_tag">
                                            <?= $product['discount'] ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (isset($product['trending']) && $product['trending'] !== ''):  ?>
                                        <div class="trending_tag">
                                            <?= $product['trending'] ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (isset($product['sale']) && $product['sale'] !== ''):  ?>
                                        <div class="sale_tag">
                                            <?= $product['sale']; ?>
                                        </div>
                                    <?php endif; ?>

                                    <img class="primary" src="<?= $product['image1']; ?>" alt="bag image">
                                    <img class="secondary" src="<?= $product['image2']; ?>" alt="bag hover image">

                                    <div class="product_bg_overlay">
                                        <div
                                            class="d-flex align-items-center justify-content-center position-relative top-50 translate-middle-y gap-2">
                                            <div class="product-more-info">
                                                <i class="ri-luggage-cart-line"></i>
                                            </div>
                                            <div class="product-more-info">
                                                <i class="ri-heart-line"></i>
                                            </div>
                                            <div class="product-more-info">
                                                <i class="ri-recycle-line"></i>
                                            </div>
                                            <div class="product-more-info">
                                                <i class="ri-eye-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product_details">
                                    <div class="product_type">
                                        <?= $product['product_category'] ?>
                                    </div>
                                    <div class="product-description">
                                        <a href="productDetails.php">
                                            <?= $product['product_description'] ?>

                                        </a>
                                    </div>
                                    <div class="product_price_container">
                                        <div class="discount-price">
                                            <?= $product['discount_price'] ?>
                                        </div>
                                        <div class="actual-price">
                                            <?= $product['actual_price'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- popular porduct section ends -->


<!-- deal countdown section starts  -->
<section class="count_down_section">
    <div class="d-flex">
        <div class="count_down_same_height d-none d-lg-block">
            <img src="./assets/images/backgrounds/leftcount.jpg" alt="Clothing">
        </div>
        <div class="count_down_container count_down_same_height">
            <img src="./assets/images/backgrounds/countbg.jpg" alt="Clothing">

            <div class="count_down_number">
                <h6>UP TO 25% OFF</h6>
                <h3>DEALS OF THE DAY</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, corporis explicabo! Harum
                    impedit, cum voluptatum debitis ipsum numquam.</p>

                <div class="count_down_counter">
                    <div>
                        <h3>23</h3>
                        <p>days</p>
                    </div>
                    <div>
                        <h3>30</h3>
                        <p>hrs</p>
                    </div>
                    <div>
                        <h3>50</h3>
                        <p>mins</p>
                    </div>
                    <div>
                        <h3>40</h3>
                        <p>secs</p>
                    </div>
                </div>
                <a href="#" class="border-btn">shop now</a>
            </div>
        </div>
        <div class="count_down_same_height d-none d-md-block">
            <img src="./assets/images/backgrounds/rightcount.jpg" alt="Clothing">
        </div>
    </div>
</section>
<!-- deal countdown section ends -->


<!-- collection section starts form here  -->
<section class="news_collection_section p64">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="collection_container">
                    <h3>new collection </h3>

                    <div class="collection_content_container">
                        <div class="product_Card_two">
                            <div class="card_two_img">
                                <img src="./assets/images/products/ladyhoot.png" alt="">
                            </div>
                            <div class="card_two_details">
                                <h5>Underwear</h5>
                                <a href="#">Striped textile boxer </a>

                                <div class="card_two_price">
                                    <div class="card_two_discount_price">
                                        $15.00
                                    </div>

                                    <div class="card_two_actual_price">
                                        $30.00
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="product_Card_two">
                            <div class="card_two_img">
                                <img src="./assets/images/products/halfpant.png" alt="">
                            </div>
                            <div class="card_two_details">
                                <h5>Underwear</h5>
                                <a href="#">Striped textile boxer</a>

                                <div class="card_two_price">
                                    <div class="card_two_discount_price">
                                        $15.00
                                    </div>

                                    <div class="card_two_actual_price">
                                        $30.00
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="product_Card_two">
                            <div class="card_two_img">
                                <img src="./assets/images/products/hat1.png" alt="">
                            </div>
                            <div class="card_two_details">
                                <h5>Underwear</h5>
                                <a href="#">Striped textile boxer</a>

                                <div class="card_two_price">
                                    <div class="card_two_discount_price">
                                        $15.00
                                    </div>

                                    <div class="card_two_actual_price">
                                        $30.00
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-4">
                <div class="collection_container">
                    <h3>monthly top </h3>

                    <div class="collection_content_container">
                        <div class="product_Card_two">
                            <div class="card_two_img">
                                <img src="./assets/images/products/cap.png" alt="">
                            </div>
                            <div class="card_two_details">
                                <h5>Underwear</h5>
                                <a href="#">Striped textile boxer</a>

                                <div class="card_two_price">
                                    <div class="card_two_discount_price">
                                        $15.00
                                    </div>

                                    <div class="card_two_actual_price">
                                        $30.00
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="product_Card_two">
                            <div class="card_two_img">
                                <img src="./assets/images/products/genhoot.png" alt="">
                            </div>
                            <div class="card_two_details">
                                <h5>Underwear</h5>
                                <a href="#">Striped textile boxer</a>

                                <div class="card_two_price">
                                    <div class="card_two_discount_price">
                                        $15.00
                                    </div>

                                    <div class="card_two_actual_price">
                                        $30.00
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="product_Card_two">
                            <div class="card_two_img">
                                <img src="./assets/images/products/halfpant1.png" alt="">
                            </div>
                            <div class="card_two_details">
                                <h5>Underwear</h5>
                                <a href="#">Striped textile boxer</a>

                                <div class="card_two_price">
                                    <div class="card_two_discount_price">
                                        $15.00
                                    </div>

                                    <div class="card_two_actual_price">
                                        $30.00
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-4">
                <div class="collection_right_img">
                    <img src="./assets/images/bannerImages/kidstwo.jpg" alt="two kids">

                    <div class="collection_right_content">
                        <h5>spring offer </h5>
                        <h3>save upto 50% this month </h3>
                        <a href="#" class="border-btn">shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- collection section starts form ends -->


<!-- shop instagram section starts  -->
<section class="shop_instagram_section">
    <div class="container-fluid">
        <div class="common_heading">
            <h3>shop instagram</h3>
        </div>
        <div class="insta_grid mt-4 mt-lg-5">
            <div class="shop_insta_img">
                <img src="./assets/images/insta/insta1.jpg" alt="">
                <div class="insta_overlay">
                    <a href="#">
                        <img src="./assets/images/icons/instagram.png" alt="instagram icon">
                        @mega
                    </a>
                </div>
            </div>
            <div class="shop_insta_img">
                <img src="./assets/images/insta/insta2.jpg" alt="">
                <div class="insta_overlay">
                    <a href="#">
                        <img src="./assets/images/icons/instagram.png" alt="instagram icon">
                        @mega
                    </a>
                </div>
            </div>
            <div class="shop_insta_img">
                <img src="./assets/images/insta/insta3.jpg" alt="">
                <div class="insta_overlay">
                    <a href="#">
                        <img src="./assets/images/icons/instagram.png" alt="instagram icon">
                        @mega
                    </a>
                </div>
            </div>
            <div class="shop_insta_img">
                <img src="./assets/images/insta/insta4.jpg" alt="">
                <div class="insta_overlay">
                    <a href="#">
                        <img src="./assets/images/icons/instagram.png" alt="instagram icon">
                        @mega
                    </a>
                </div>
            </div>
            <div class="shop_insta_img">
                <img src="./assets/images/insta/insta5.jpg" alt="">
                <div class="insta_overlay">
                    <a href="#">
                        <img src="./assets/images/icons/instagram.png" alt="instagram icon">
                        @mega
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- shop instagram section ends -->


<!-- delivery options section starts  -->
<section class="delivery_options_section p64">
    <div class="container">
        <div class="delivery-options">
            <div class="row g-4">
                <div class="col-6 col-lg-3">
                    <div class="d-flex flex-column flex-md-row gap-3 delivery_data">
                        <img src="./assets/images/icons/delivery-truck.png" alt="delivery truk">
                        <div>
                            <h5>delivery</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="d-flex flex-column flex-md-row gap-3 delivery_data">
                        <img src="./assets/images/icons/return-box.png" alt="delivery truk">
                        <div>
                            <h5>return</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="d-flex flex-column flex-md-row gap-3 delivery_data">
                        <img src="./assets/images/icons/credit-card.png" alt="delivery truk">
                        <div>
                            <h5>payment</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="d-flex flex-column flex-md-row gap-3 delivery_data">
                        <img src="./assets/images/icons/support.png" alt="delivery truk">
                        <div>
                            <h5>support</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- delivery options section ends -->


<!-- popular journal section starts  -->
<section class="popular_journal_Section">
    <div class="container">
        <div class="common_heading">
            <h3>popular journal</h3>
        </div>

        <div class="row mt-4 mt-lg-5 g-3">
            <div class="col-md-6 col-lg-4">
                <div class="journal_fist">
                    <img src="./assets/images/bannerImages/pwome.jpg" alt="">
                    <div class="journal_overlay">
                        <div class="journal_content">
                            <h5>
                                <span>Lifestyle</span>
                                | 06 AUG 2025
                            </h5>
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem iure.</h4>
                            <a href="#">__ readmore</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="journel_second">
                    <img src="./assets/images/bannerImages/pmen.jpg" alt="">

                    <div class="journel_sec_content">
                        <div class="journal_content">
                            <h5>
                                <span>backpack</span>
                                | 06 AUG 2025
                            </h5>
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem iure.</h4>
                            <a href="#">__ readmore</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-4">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="journel_individual">
                            <div class="journal_content">
                                <h5>
                                    <span>backpack</span>
                                    | 06 AUG 2025
                                </h5>
                                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem iure.</h4>
                                <a href="#">__ readmore</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="journel_individual">
                            <div class="journal_content">
                                <h5>
                                    <span>backpack</span>
                                    | 06 AUG 2025
                                </h5>
                                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem iure.</h4>
                                <a href="#">__ readmore</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="journel_individual">
                            <div class="journal_content">
                                <h5>
                                    <span>backpack</span>
                                    | 06 AUG 2025
                                </h5>
                                <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem iure.</h4>
                                <a href="#">__ readmore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- popular journal section ends -->



<!-- brand slider section starts  -->
<section class="brand_slider_logo p64">
    <div class="container">
        <div class="swiper brandLogo">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="brand_logo">
                        <img src="./assets/images/brandlogo/1.svg" alt="brand_logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand_logo">
                        <img src="./assets/images/brandlogo/2.svg" alt="brand_logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand_logo">
                        <img src="./assets/images/brandlogo/3.svg" alt="brand_logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand_logo">
                        <img src="./assets/images/brandlogo/4.svg" alt="brand_logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand_logo">
                        <img src="./assets/images/brandlogo/5.svg" alt="brand_logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand_logo">
                        <img src="./assets/images/brandlogo/6.svg" alt="brand_logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand_logo">
                        <img src="./assets/images/brandlogo/7.svg" alt="brand_logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand_logo">
                        <img src="./assets/images/brandlogo/8.svg" alt="brand_logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand_logo">
                        <img src="./assets/images/brandlogo/5.svg" alt="brand_logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand_logo">
                        <img src="./assets/images/brandlogo/6.svg" alt="brand_logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand_logo">
                        <img src="./assets/images/brandlogo/7.svg" alt="brand_logo">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand_logo">
                        <img src="./assets/images/brandlogo/8.svg" alt="brand_logo">
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!-- brand slider section ends -->


<?php include 'inc/footer.php'; ?>