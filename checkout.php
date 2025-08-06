<?php
$pageTitle = 'Chekout';
include 'inc/header.php'; 
?>


<!-- breadcrumb section starts  -->
<section class="bread_crumb_section">
    <img src="./assets/images/backgrounds/crumpwave.jpg" alt="wave bg">
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="bread_crump_link">
            <a href="index.php">Home</a>
            <span>/</span>
            <p>Shopping Cart</p>
        </div>
    </div>
</section>
<!-- breadcrumb section ends  -->

<!-- CHECK OUT INPUT DETIALS SECTION STARS  -->
<section class="checkout_input_details p64 mt-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xxl-7">
                <div class="billing_details_container">
                    <div class="return_login">
                        <p><i class="ri-home-8-line"></i>Returning Customer?</p>
                        <a href="#">Click here to login</a>
                    </div>

                    <form action="">
                        <h4>Billing Address</h4>

                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="fname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="Your Name"
                                    name="fname" required>
                            </div>
                            <div class="col-md-6">
                                <label for="lname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lname" placeholder="Your Name"
                                    name="lname" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email Here"
                                    name="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="Phone" class="form-label">Phone</label>
                                <input type="number" class="form-control" id="Phone" placeholder="Phone Number"
                                    name="phone">
                            </div>
                            <div class="col-12">
                                <label for="company" class="form-label">Company</label>
                                <input type="text" class="form-control" id="company"
                                    placeholder="Company Name(Optional)" name="company">
                            </div>
                            <div class="col-12">
                                <label for="company" class="form-label">Address</label>
                                <input type="text" class="form-control" id="company" placeholder="Street Address">
                                <input type="text" class="form-control mt-3" id="company"
                                    placeholder="Apartment, Suite, Unit (Optional)" name="address">
                            </div>
                            <div class="col-md-6">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" id="country" placeholder="England"
                                    name="country">
                            </div>
                            <div class="col-md-6">
                                <label for="state" class="form-label">State</label>
                                <input type="text" class="form-control" id="state" placeholder="London"
                                    name="state">
                            </div>
                            <div class="col-md-6">
                                <label for="City" class="form-label">City</label>
                                <input type="text" class="form-control" id="City" placeholder="London" name="City">
                            </div>
                            <div class="col-md-6">
                                <label for="postalcode" class="form-label">Postal Code</label>
                                <input type="text" class="form-control" id="postalcode" placeholder="3900"
                                    name="postal-code">
                            </div>
                            <div class="col-12 d-flex align-items-center flex-wrap gap-3">
                                <div class="terms_agree_check m-0">
                                    <input type="checkbox" id="check">
                                    <label for="check">Create An Account?</label>
                                </div>
                                <div class="terms_agree_check m-0">
                                    <input type="checkbox" id="check2">
                                    <label for="check2">Ship To Different Address?</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Order Notes</label>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea2" style="height: 160px"></textarea>
                                    <label for="floatingTextarea2">Notes about your orders...</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 col-xxl-5">
                <div class="checkout_right">
                    <h5>Order Summary</h5>

                    <div>
                        <div class="product_summary">
                            <div class="image">
                                <img src="./assets/images/products/bag1.png" alt="">
                            </div>

                            <h6>Polo Shirt Sleeveless</h6>
                            <p>$350</p>
                        </div>
                        <div class="product_summary">
                            <div class="image">
                                <img src="./assets/images/products/genhoot1.png" alt="">
                            </div>

                            <h6>Polo Shirt Sleeveless</h6>
                            <p>$150</p>
                        </div>
                    </div>

                    <div class="cupon_code my-3">
                        <form action="" class="d-flex align-items-end gap-2">
                            <div class="w-100">
                                <input type="text" class="form-control" id="cupon" placeholder="Discount Code">
                            </div>
                            <button class="primary-btn">apply code</button>
                        </form>
                    </div>

                    <div class="common_subtotal mt-4">
                        <ul>
                            <li>
                                <h6>Subtotal</h6>
                                <p>$160.00</p>
                            </li>
                            <li>
                                <h6>Shipping</h6>
                                <p>$60.00</p>
                            </li>
                            <li>
                                <h6>Incl. Vat</h6>
                                <p>$20.00</p>
                            </li>
                        </ul>

                        <div class="checkout_total">
                            <h5>Total Value</h5>
                            <p>$240.00</p>
                        </div>
                    </div>


                    <div class="bank_policy_accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Direct Bank Transfer
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit error,
                                            velit alias autem ipsam asperiores molestias perspiciatis facilis
                                            dolores voluptas obcaecati quia porro voluptatum unde nulla adipisci,
                                            molestiae culpa blanditiis!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                        Check Payment
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit error,
                                            velit alias autem ipsam asperiores molestias perspiciatis facilis
                                            dolores voluptas obcaecati quia porro voluptatum unde nulla adipisci,
                                            molestiae culpa blanditiis!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        PayPal
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit error,
                                            velit alias autem ipsam asperiores molestias perspiciatis facilis
                                            dolores voluptas obcaecati quia porro voluptatum unde nulla adipisci,
                                            molestiae culpa blanditiis!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <a href="#" class="primary-btn">place order</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CHECK OUT INPUT DETIALS SECTION ENDS -->

<?php include 'inc/footer.php'; ?>
