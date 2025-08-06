<?php
$pageTitle = 'Individual Proudut';
include 'inc/header.php'; 
?>

    <!-- breadcrumb section starts  -->
    <section class="bread_crumb_section">
        <img src="./assets/images/backgrounds/crumpwave.jpg" alt="wave bg">
        <div class="container position-absolute top-50 start-50 translate-middle">
            <div class="bread_crump_link">
                <a href="index.php">Home</a>
                <span>/</span>
                <p>Casual Men Winter Shirt</p>
            </div>
        </div>
    </section>
    <!-- breadcrumb section ends  -->


    <!-- individual product details container starts -->
    <section class="individual_product_detail_container p64 mt-lg-4">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="indi_product_slider_container">
                        <div class="swiper IndividualProductSlider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="individual_product_image">
                                        <div class="discount_price_tag">
                                            -30%
                                        </div>
                                        <div class="wishlist_tag">
                                            <i class="ri-heart-line"></i>
                                        </div>
                                        <div class="trending_tag">
                                            hot
                                        </div>
                                        <img src="./assets/images/products/bag1.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="individual_product_image">
                                        <div class="discount_price_tag">
                                            -30%
                                        </div>
                                        <div class="wishlist_tag">
                                            <i class="ri-heart-line"></i>
                                        </div>
                                        <div class="trending_tag">
                                            hot
                                        </div>
                                        <img src="./assets/images/products/bag2.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="individual_product_image">
                                        <div class="discount_price_tag">
                                            -30%
                                        </div>

                                        <div class="trending_tag">
                                            hot
                                        </div>

                                        <div class="wishlist_tag">
                                            <i class="ri-heart-line"></i>
                                        </div>
                                        <img src="./assets/images/products/cap.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="individual_product_image">
                                        <div class="discount_price_tag">
                                            -30%
                                        </div>
                                        <div class="wishlist_tag">
                                            <i class="ri-heart-line"></i>
                                        </div>
                                        <div class="trending_tag">
                                            hot
                                        </div>
                                        <img src="./assets/images/products/cap1.png" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div thumbsSlider="" class="swiper IndividualProductSliderThumbs mt-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="individual_product_imagethumbs">
                                        <img src="./assets/images/products/bag1.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="individual_product_imagethumbs">
                                        <img src="./assets/images/products/bag2.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="individual_product_imagethumbs">
                                        <img src="./assets/images/products/cap.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="individual_product_imagethumbs">
                                        <img src="./assets/images/products/cap1.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-button-next">
                                <i class="ri-arrow-right-s-line"></i>
                            </div>
                            <div class="swiper-button-prev">
                                <i class="ri-arrow-left-s-line"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="indi_product_description_container">
                        <div class="rating">
                            <div class="d-flex align-items-center gap-0">
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-s-fill"></i>
                                <i class="ri-star-half-s-line"></i>
                            </div>
                            <p> (5k+ Reviews)</p>
                        </div>
                        <div class="indi_product_name">
                            Casual Men Winter Shirt
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <div class="indi_product_price">
                                $512.00
                            </div>
                            <div class="vat_percentage">
                                (15% Vat Included)
                            </div>
                        </div>

                        <div class="product_color_avalibility">
                            <h5>Color Available</h5>
                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                <div class="product_color active">
                                    <img src="./assets/images/products/bag1.png" alt="bag">
                                </div>
                                <div class="product_color">
                                    <img src="./assets/images/products/bag2.png" alt="bag">
                                </div>
                                <div class="product_color">
                                    <img src="./assets/images/products/genhoot.png" alt="bag">
                                </div>
                            </div>
                        </div>

                        <div class="product_size">
                            <h5>Size:</h5>
                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                <div class="active">
                                    M
                                </div>
                                <div>
                                    L
                                </div>
                                <div>
                                    XL
                                </div>
                                <div>
                                    XXL
                                </div>
                            </div>
                        </div>

                        <div class="product_vist_person">
                            Real time <span>210</span> person visit right now
                        </div>

                        <div class="cart_btn_container mt-4">
                            <h5>Quantity:</h5>
                            <div class="d-flex align-items-center gap-3">
                                <div class="incrememt_decrement_btns d-flex justify-content-center align-items-center">
                                    <button onclick="decrease()" class="decrease_btn">
                                        <i class="ri-subtract-line"></i>
                                    </button>
                                    <div>
                                        <input type="text" id="numberBox" value="01" readonly>
                                    </div>
                                    <button onclick="increase()" class="increase_btn">
                                        <i class="ri-add-line"></i>
                                    </button>
                                </div>

                                <a href="#">Add to cart</a>
                            </div>

                            <a href="#" class="buy_now_btn">buy it now</a>
                        </div>

                        <div class="ques_compare_div d-flex align-items-center justify-content-between gap-3">
                            <div class="d-flex align-items-center gap-3">
                                <a href="#">
                                    <i class="ri-donut-chart-line"></i>
                                    Compare
                                </a>
                                <a href="#">
                                    <i class="ri-truck-line"></i>
                                    Shipping
                                </a>
                            </div>

                            <a href="#">
                                <i class="ri-message-3-line"></i>
                                Ask Question
                            </a>
                        </div>

                        <div class="indi_product_tag">
                            <div>
                                <span>SKU:</span>
                                45XM5DKJOL2NJ
                            </div>
                            <div>
                                <span>Category:</span>
                                Fashion, Lifestyle, T-shirts
                            </div>
                            <div>
                                <span>Tags:</span>
                                Shirt, Pant, Dress
                            </div>
                        </div>

                        <div
                            class="product_social_links d-flex flex-xxl-nowrap flex-wrap align-items-center gap-2 mt-3">
                            <a href="#" class="facebook">
                                <i class="ri-facebook-fill"></i>
                                Facebook
                            </a>
                            <a href="#" class="twitter">
                                <i class="ri-twitter-line"></i>
                                Twitter
                            </a>
                            <a href="#" class="youtube">
                                <i class="ri-youtube-line"></i>
                                Youtube
                            </a>
                            <a href="#" class="instagram">
                                <i class="ri-instagram-line"></i>
                                Instagram
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="d-flex flex-column gap-3">
                        <div class="product_delivery_details">
                            <div class="delivery_bg d-flex flex-column gap-3 flex-xxl-row align-items-start">
                                <img src="./assets/images/icons/box.png" alt="icon">
                                <div>
                                    <h5>Free Shipping</h5>
                                    <p>Brought good third life image your're brought days</p>
                                </div>
                            </div>
                        </div>
                        <div class="product_delivery_details">
                            <div class="delivery_bg d-flex flex-column gap-3 flex-xxl-row align-items-start">
                                <img src="./assets/images/icons/customer-service-headset.png" alt="icon">
                                <div>
                                    <h5>Support 24/7</h5>
                                    <p>Brought good third life image your're brought days</p>
                                </div>
                            </div>
                        </div>
                        <div class="product_delivery_details">
                            <div class="delivery_bg d-flex flex-column gap-3 flex-xxl-row align-items-start">
                                <img src="./assets/images/icons/return.png" alt="icon">
                                <div>
                                    <h5>30 Days Return</h5>
                                    <p>Brought good third life image your're brought days</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="indi_produt_details_filter_container d-md-flex">
                <div class="indi_product_des_filter_btns">
                    <button class="active" data-target="description">Description</button>
                    <button data-target="specification">Specification</button>
                    <button data-target="reviews">Reviews</button>
                    <button data-target="shipping">Shippinig & Returns</button>
                </div>

                <div class="product_filter_content ">
                    <div class="filter-content description active">
                        <p>This is the Description content.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, officiis maiores!
                            Temporibus atque excepturi consequatur! Corporis mollitia labore quam autem voluptatibus
                            provident officia alias vero deleniti, repudiandae doloribus reprehenderit esse fugit nam
                            facere, quidem quas accusamus rem adipisci veritatis quaerat rerum. Nam totam atque,
                            laudantium unde cum, eos excepturi accusantium, iure consequatur consectetur dicta libero
                            fuga neque porro quas eius! Necessitatibus praesentium illo amet blanditiis harum,
                            explicabo, dolorum quibusdam nobis aliquam placeat ab pariatur cum facere asperiores saepe
                            eius expedita. Repellat hic minus et minima nihil expedita doloribus amet, qui quibusdam
                            aliquam reiciendis. Minus aliquid eligendi, quisquam nostrum sapiente sit!</p>
                    </div>
                    <div class="filter-content specification">
                        <p>This is the Specification content.</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta, alias voluptatem? Quasi odit
                            sint quaerat laboriosam consectetur eius est ipsum at qui neque corrupti dolorem, illo
                            repudiandae veniam! Consequuntur illo nisi fugiat, et cupiditate quisquam tempora, velit
                            magnam laboriosam saepe hic laborum distinctio commodi blanditiis molestiae debitis dolore
                            deserunt atque eaque. Aliquid, ipsa vitae nemo debitis, sequi, doloribus odit dolorem
                            commodi quia itaque earum provident blanditiis ducimus cum quae quidem facilis hic eligendi
                            quos doloremque reprehenderit! Ad quasi, perferendis delectus quam, error reiciendis
                            reprehenderit ipsam animi ipsa fugit ea, a vero nam harum. Porro voluptate voluptatibus,
                            laborum repudiandae dolorem enim dolores? Nemo ratione dolorum ducimus incidunt itaque
                            fugiat nisi unde eaque, illo dolores perferendis, beatae doloremque veniam recusandae sed
                            aliquam ipsam sit vel obcaecati modi, expedita magni aperiam quod. Accusantium mollitia est
                            ab voluptatibus id alias, libero quas odio nulla, modi a, corporis cumque impedit possimus
                            unde eligendi aspernatur! Eligendi!</p>
                    </div>
                    <div class="filter-content reviews">
                        <p>This is the Reviews content.</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium, rem consequatur
                            assumenda repellat sint magnam sunt distinctio culpa accusamus laborum nihil reprehenderit
                            voluptatum esse blanditiis nostrum commodi nisi quod animi.</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe numquam nihil voluptate
                            cumque in quis qui, consequuntur quaerat itaque incidunt quisquam ab esse. Ex illo
                            necessitatibus culpa, atque aperiam laboriosam quas, fugiat assumenda facilis perferendis
                            libero vero ipsum. Esse sint mollitia ut iusto maxime at cupiditate ab quidem fugiat
                            nostrum?</p>
                    </div>
                    <div class="filter-content shipping">
                        <p>This is the Shipping & Returns content.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate explicabo cupiditate,
                            libero incidunt nihil officia tenetur perspiciatis illum facilis, asperiores fugiat quo
                            tempora placeat iure ducimus maxime eum modi temporibus assumenda exercitationem iusto
                            dignissimos distinctio porro. Quasi repudiandae doloremque velit dolorem veritatis obcaecati
                            iure quas impedit dolorum fuga corporis, quis facilis illo culpa eum recusandae accusantium.
                            Libero quam fugiat sint alias exercitationem odit. Iure veniam libero iste maiores assumenda
                            ducimus aliquam aperiam aliquid deserunt incidunt, suscipit odit, animi et dolores. A soluta
                            deserunt cum facilis recusandae delectus veniam voluptatum quas? Quibusdam reprehenderit
                            voluptatem maiores debitis. Suscipit illum ut earum ad.</p>
                    </div>
                </div>

            </div>


            <div class="individual_proudut_more_description">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="show_case_img same_height">
                            <img src="./assets/images/bannerImages/womev.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="show_case_description same_height">
                            <h3>Sensors in Smart Clothes</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia incidunt, vel tenetur
                                sunt ea aliquid consequuntur corporis recusandae eaque iure, voluptates odio corrupti
                                officiis! Aperiam sit delectus, pariatur saepe, ex unde at id sunt voluptates reiciendis
                                cumque? Libero at culpa nam consectetur? Ducimus fuga perferendis ea facilis accusamus
                                officia neque obcaecati earum repudiandae, deleniti, impedit nam voluptatibus iste saepe
                                soluta aliquid! Magnam itaque deleniti et unde dicta. Ex quisquam rem, aperiam labore
                                quod harum distinctio iure delectus, suscipit illum sapiente ullam qui assumenda atque
                                perspiciatis debitis, ab itaque quasi? Ducimus deserunt nostrum quibusdam quas,
                                repellendus amet asperiores quisquam itaque beatae.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor exercitationem nostrum
                                ipsa praesentium consequatur eaque debitis accusamus beatae assumenda, facilis ad, error
                                laudantium quos itaque blanditiis dolore similique magnam dolorem!</p>
                        </div>
                    </div>
                </div>
                <div class="row g-4 mt-4">

                    <div class="col-lg-8">
                        <div class="show_case_description same_height">
                            <h3>Fashion Tech & Health</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia incidunt, vel tenetur
                                sunt ea aliquid consequuntur corporis recusandae eaque iure, voluptates odio corrupti
                                officiis! Aperiam sit delectus, pariatur saepe, ex unde at id sunt voluptates reiciendis
                                cumque? Libero at culpa nam consectetur? Ducimus fuga perferendis ea facilis accusamus
                                officia neque obcaecati earum repudiandae, deleniti, impedit nam voluptatibus iste saepe
                                soluta aliquid! Magnam itaque deleniti et unde dicta. Ex quisquam rem, aperiam labore
                                quod harum distinctio iure delectus, suscipit illum sapiente ullam qui assumenda atque
                                perspiciatis debitis, ab itaque quasi? Ducimus deserunt nostrum quibusdam quas,
                                repellendus amet asperiores quisquam itaque beatae.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor exercitationem nostrum
                                ipsa praesentium consequatur eaque debitis accusamus beatae assumenda, facilis ad, error
                                laudantium quos itaque blanditiis dolore similique magnam dolorem!</p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="show_case_img same_height">
                            <img src="./assets/images/bannerImages/pmen.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- individual product details container ends -->




<?php include 'inc/related-product.php' ?>


<?php include 'inc/footer.php'; ?>
