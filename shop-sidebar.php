<?php
$pageTitle = 'Shop';
include 'inc/header.php'; 
?>

<!-- breadcrumb section starts  -->
<section class="bread_crumb_section">
    <img src="./assets/images/backgrounds/crumpwave.jpg" alt="wave bg">
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="bread_crump_link">
            <a href="index.php">Home</a>
            <span>/</span>
            <p>Shop Grid With Sidebar</p>
        </div>
    </div>
</section>
<!-- breadcrumb section ends  -->


<!-- SHOP SIDEBAR SECTION STARTS  -->
<section class="shop_side_bar_section pt64 mt-lg-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-xxl-3">
                <div class="shop_side_bar_left d-flex flex-wrap flex-lg-column gap-4">
                    <div class="common_sliderbar_border">
                        <h3>Category</h3>

                        <div class="radio_btns_container">
                            <div>
                                <input type="radio" class="form-check-input" name="category" id="fashion">
                                <label for="fashion">Fashion (10)</label>
                            </div>
                            <div>
                                <input type="radio" class="form-check-input" name="category" id="Furniture">
                                <label for="Furniture">Furniture(12)</label>
                            </div>
                            <div>
                                <input type="radio" class="form-check-input" name="category" id="Cosmetic">
                                <label for="Cosmetic">Cosmetic (08)</label>
                            </div>
                            <div>
                                <input type="radio" class="form-check-input" name="category" id="Jwellery">
                                <label for="Jwellery">Jwellery (22)</label>
                            </div>
                            <div>
                                <input type="radio" class="form-check-input" name="category" id="Kids">
                                <label for="Kids">Kids Items (05)</label>
                            </div>
                            <div>
                                <input type="radio" class="form-check-input" name="category" id="Women">
                                <label for="Women">Women (55)</label>
                            </div>
                            <div>
                                <input type="radio" class="form-check-input" name="category" id="Underwear">
                                <label for="Underwear">Underwear (55)</label>
                            </div>
                        </div>
                    </div>
                    <div class="common_sliderbar_border">
                        <h3>Filter By Price</h3>

                        <div class="filter_slide mt-4">
                            <div class="slider-container">
                                <div id="slider-range"></div>
                                <div class="d-flex align-items-center flex-wrap gap-4 mt-4">
                                    <button>Filter</button>
                                    <div class="value-display">
                                        $<span id="minPrice">0</span> – $<span id="maxPrice">1000</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="common_sliderbar_border">
                        <h3>Color</h3>

                        <div class="color_filter mt-2">
                            <a href="#">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="color-tag" data-color="#FF9FF3"></div>
                                    <p>Pink</p>
                                </div>
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                            <a href="#">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="color-tag" data-color="#FF6B6B"></div>
                                    <p>Red</p>
                                </div>
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                            <a href="#">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="color-tag" data-color="#FECA57"></div>
                                    <p>Yellow</p>
                                </div>
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                            <a href="#">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="color-tag" data-color="#1DD1A1"></div>
                                    <p>Green</p>
                                </div>
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                            <a href="#">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="color-tag" data-color="#0ABDE3"></div>
                                    <p>Blue</p>
                                </div>
                                <i class="ri-arrow-right-s-line"></i>
                            </a>
                        </div>
                    </div>

                    <div class="common_sliderbar_border">
                        <h3>Brands</h3>

                        <div class="radio_btns_container">
                            <div>
                                <input type="radio" class="form-check-input" name="brand" id="Broughton">
                                <label for="Broughton">Broughton (10)</label>
                            </div>
                            <div>
                                <input type="radio" class="form-check-input" name="brand" id="Chivers">
                                <label for="Chivers">Chivers(12)</label>
                            </div>
                            <div>
                                <input type="radio" class="form-check-input" name="brand" id="Eagle">
                                <label for="Eagle">Eagle Brand (08)</label>
                            </div>
                            <div>
                                <input type="radio" class="form-check-input" name="brand" id="Jwellery">
                                <label for="Jwellery">Jwellery (22)</label>
                            </div>
                            <div>
                                <input type="radio" class="form-check-input" name="brand" id="Bordern">
                                <label for="Bordern">Bordern (05)</label>
                            </div>
                            <div>
                                <input type="radio" class="form-check-input" name="brand" id="Almara">
                                <label for="Almara">Almara (55)</label>
                            </div>
                            <div>
                                <input type="radio" class="form-check-input" name="brand" id="Jordern">
                                <label for="Jordern">Jordern (55)</label>
                            </div>
                        </div>
                    </div>

                    <div class="common_sliderbar_border">
                        <h3>Recent Products</h3>

                        <div class="recent_product mt-4 d-flex flex-column gap-3">
                            <a href="#" class="d-flex align-items-center gap-3">
                                <div class="p_image">
                                    <img src="./assets/images/products/bag1.png" alt="">
                                </div>

                                <div>
                                    <h5>Man Tower</h5>
                                    <p>$42.00</p>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center gap-3">
                                <div class="p_image">
                                    <img src="./assets/images/products/hat.png" alt="">
                                </div>

                                <div>
                                    <h5>Man Tower</h5>
                                    <p>$42.00</p>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center gap-3">
                                <div class="p_image">
                                    <img src="./assets/images/products/halfpant1.png" alt="">
                                </div>

                                <div>
                                    <h5>Man Tower </h5>
                                    <p>$42.00</p>
                                </div>
                            </a>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-lg-8 col-xxl-9">
                <div class="shop_sidebar_right">
                    <div
                        class="shop_filter_Showcase d-flex flex-column flex-md-row align-items-center gap-3 justify-content-between mb-4">
                        <div class="resutlt">Showing 15 of 120 Results</div>
                        <div class="filter_sorting_container d-flex align-items-center gap-3">
                            <div class="grid_one active">
                                <i class="ri-more-fill"></i>
                                <i class="ri-more-fill"></i>
                            </div>
                            <div class="grid_two">
                                <i class="ri-list-check"></i>
                            </div>
                            <div class="slect_sorting d-flex align-items-center gap-3">
                                <p class="text-nowrap">Sort by:</p>
                                <select class="form-select" aria-label="Filter select" name="Sorting">
                                    <option selected>Default Sorting</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sider_bar_right_products">
                    <div class="row g-4">
                        <?php foreach ($products as $product) : ?>
                            <div class="col-md-6 col-lg-4">
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

                    <div class="pagination_btns_container mt-4">
                        <div class="prev_btn">
                            Previous
                        </div>

                        <div class="paginaton_numbers">
                            <div class="active">
                                1
                            </div>
                            <div>
                                2
                            </div>
                            <div>
                                3
                            </div>
                        </div>

                        <div class="next_btn">
                            next
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SHOP SIDEBAR SECTION ENDS -->

<?php include 'inc/delivery-option.php'; ?>

<?php include 'inc/footer.php'; ?>