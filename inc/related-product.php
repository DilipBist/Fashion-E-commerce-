<!-- more related products section  -->
<section class="p64">
    <div class="container">
        <div class="common_heading">
            <h3>Related products</h3>
        </div>

        <div class="swiper ProductSlider mt-4 mt-lg-5">
            <div class="swiper-wrapper">
                <?php foreach (array_slice($products, 2, 8) as $product) : ?>
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
</section>
<!-- more related products section ends  -->