<?php
$pageTitle = 'Blog';
include 'inc/header.php';
?>

<!-- breadcrumb section starts  -->
<section class="bread_crumb_section">
    <img src="./assets/images/backgrounds/crumpwave.jpg" alt="wave bg">
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="bread_crump_link">
            <a href="index.php">Home</a>
            <span>/</span>
            <p>Blog Grid</p>
        </div>
    </div>
</section>
<!-- breadcrumb section ends  -->


<!-- BLOG SECTION STARTS  -->
<section class="blog_section p64">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8 order-2 order-lg-1">
                <div class="row g-4">
                    <?php foreach ($blogposts as $blog) : ?>
                        <div class="col-md-6">
                            <div class="blog_left_div">
                                <div class="blog_info_container">
                                    <div class="blog_img">
                                        <img src="<?= $blog['image']; ?>" alt="blogimg">
                                    </div>

                                    <div class="blog_description">
                                        <div class="blog_tag_container">
                                            <div class="blog_cat">
                                                <?php echo $blog['category'] ?>
                                            </div>
                                            <div class="blog_date">
                                                <?= $blog['date'] ?>
                                            </div>
                                            <div class="blog_comment">
                                                (<?= $blog['comments'] ?>)
                                                comment
                                            </div>
                                        </div>

                                        <h3><?= $blog['title'] ?></h3>
                                        <p><?= $blog['description'] ?></p>
                                        <a href="individual-blog.php">continue Reading</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-lg-4 order-1 order-lg-2">
                <div class="blog_right_div d-flex flex-column gap-4">
                    <div class="faq_search_bar">
                        <form action="">
                            <input type="text" name="search" placeholder="Search here...">
                            <button class="search_icon">
                                <i class="ri-search-line"></i>
                            </button>
                        </form>
                    </div>

                    <div class="common_sliderbar_border d-none d-lg-block">
                        <h3>Category</h3>

                        <div class="radio_btns_container">
                            <div>
                                <a href="#">
                                    <span>Fashion (10)</span>
                                    <i class="ri-arrow-right-circle-line"></i>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <span>Fashion (10)</span>
                                    <i class="ri-arrow-right-circle-line"></i>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <span>Under Wear (20)</span>
                                    <i class="ri-arrow-right-circle-line"></i>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <span>Lifesytle (10)</span>
                                    <i class="ri-arrow-right-circle-line"></i>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <span>Swimmer (05)</span>
                                    <i class="ri-arrow-right-circle-line"></i>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <span>Wedding (07)</span>
                                    <i class="ri-arrow-right-circle-line"></i>
                                </a>
                            </div>
                            <div>
                                <a href="#">
                                    <span>Sports Wear (10)</span>
                                    <i class="ri-arrow-right-circle-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="common_sliderbar_border d-none d-lg-block">
                        <h3>Popular Post</h3>

                        <div class="popular_post d-flex flex-column gap-3 mt-4">
                            <a href="#" class="d-flex align-items-center gap-3">
                                <div class="post_img">
                                    <img src="assets/images/blog/blog5.jpg" alt="popular blog image">
                                </div>
                                <div class="pop_post_content">
                                    <p>25 sep 2025</p>
                                    <h5>Nulla laore sceler habitant massa eget supista</h5>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center gap-3">
                                <div class="post_img">
                                    <img src="assets/images/blog/blog9.jpg" alt="popular blog image">
                                </div>
                                <div class="pop_post_content">
                                    <p>25 sep 2025</p>
                                    <h5>Nulla laore sceler habitant massa eget supista</h5>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center gap-3">
                                <div class="post_img">
                                    <img src="assets/images/blog/blog3.jpg" alt="popular blog image">
                                </div>
                                <div class="pop_post_content">
                                    <p>25 sep 2025</p>
                                    <h5>Nulla laore sceler habitant massa eget supista</h5>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center gap-3">
                                <div class="post_img">
                                    <img src="assets/images/blog/blog1.jpg" alt="popular blog image">
                                </div>
                                <div class="pop_post_content">
                                    <p>25 sep 2025</p>
                                    <h5>Nulla laore sceler habitant massa eget supista</h5>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="common_sliderbar_border d-none d-lg-block">
                        <h3>Tags Clouds</h3>

                        <div class="Tags_cloud d-flex flex-wrap gap-2 mt-4">
                            <a href="#">Salad</a>
                            <a href="#">Vegetables</a>
                            <a href="#">Fruits</a>
                            <a href="#">Accessories</a>
                            <a href="#">Career</a>
                            <a href="#">Beverage</a>
                            <a href="#">HoneyComb</a>
                            <a href="#">Snacks</a>
                        </div>
                    </div>

                    <div class="fahion_year_img d-none d-lg-block">
                        <img src="assets/images/blog/fyear.jpg" alt="fahion image">

                        <h4>fashion of the year</h4>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- BLOG SECTION ENDS -->

<?php include 'inc/footer.php'; ?>