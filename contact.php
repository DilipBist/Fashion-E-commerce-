<?php
$pageTitle = 'Contact';
include 'inc/header.php';
?>



<!-- breadcrumb section starts  -->
<section class="bread_crumb_section">
    <img src="./assets/images/backgrounds/crumpwave.jpg" alt="wave bg">
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="bread_crump_link">
            <a href="index.php">Home</a>
            <span>/</span>
            <p>Contact Us</p>
        </div>
    </div>
</section>
<!-- breadcrumb section ends  -->


<!-- CONTACT SECTION STARTS  -->
<section class="contact_Section p64">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <div class="col-lg-5 col-xxl-4 order-lg-1 order-2">
                <div class="contact_left_div">
                    <h2>have any query in mind</h2>

                    <div class="contact_sec_contact_detail_container d-flex flex-column gap-3">
                        <div>
                            <a href="telto:">
                                <i class="ri-phone-fill"></i>
                                1234567890
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <i class="ri-map-pin-2-fill"></i>
                                2361 Pleasant Hill Road Lake Worth, FL 33456
                            </a>
                        </div>
                        <div>
                            <a href="mailto:">
                                <i class="ri-mail-send-fill"></i>
                                example@123gamil.com
                            </a>
                        </div>
                    </div>

                    <div class="live_chat_btn">
                        <a href="#">
                            <i class="ri-question-answer-line"></i>
                            live chat
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-xxl-8 order-1 order-lg-1">
                <div class="comment_form">
                    <form action="">
                        <h3>Leave A Replay</h3>

                        <div class="row g-3">
                            <div class="col-12">
                                <textarea name="comment" placeholder="Comment"></textarea>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="input" name="fullname" placeholder="Full Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="input" name="Email" placeholder="Your Email">
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-2">
                                    <input type="checkbox" name="chekbox" id="checkbox">
                                    <label for="checkbox">Save my name, and webstite in this browser for the time i comment.</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button>send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="location_map pt64">
            <div class="common_heading">
                <h3>location in map</h3>
            </div>

            <div class="mt-lg-5 mt-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.484830692849!2d85.3424406758687!3d27.71248967617964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb197bf11725d3%3A0x9667b0e977175ef1!2sMega%20Web%20Link%20Pvt%20Ltd!5e1!3m2!1sen!2snp!4v1754565674822!5m2!1sen!2snp" width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT SECTION ENDS -->


<?php include 'inc/footer.php'; ?>