<?php
$pageTitle = 'Cart';
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


<section class="cart_details_Section p64 mt-lg-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="cart_prodcuct_detail_table">
                    <div class="table-responsive">
                        <table class="table border">
                            <thead>
                                <tr>
                                    <th>Products</th>
                                    <th>Quantity</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex gap-3 align-items-center">
                                            <div class="cart_product_img">
                                                <img src="./assets/images/products/bag1.png" alt="">
                                            </div>

                                            <div>
                                                <div class="cart_product_name">
                                                    Polo Shirt Sleeveless
                                                </div>

                                                <div class="cart_prodct_price">
                                                    $35.00
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="cart_btn_increment">

                                            <div class="position-relative">
                                                <button onclick="increase()" class="increase_btn">
                                                    <i class="ri-add-line"></i>
                                                </button>
                                                <input type="text" id="numberBox" value="01" readonly>

                                                <button onclick="decrease()" class="decrease_btn">
                                                    <i class="ri-subtract-line"></i>
                                                </button>
                                            </div>

                                        </div>
                                    </td>

                                    <td>
                                        <div class="cart_subtotal">
                                            <div class="cart_sub_total_pric">
                                                $40.00
                                            </div>

                                            <button>
                                                <i class="ri-delete-bin-fill"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex gap-3 align-items-center">
                                            <div class="cart_product_img">
                                                <img src="./assets/images/products/hat.png" alt="">
                                            </div>

                                            <div>
                                                <div class="cart_product_name">
                                                    Polo Shirt Sleeveless
                                                </div>

                                                <div class="cart_prodct_price">
                                                    $35.00
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="cart_btn_increment">

                                            <div class="position-relative">
                                                <button onclick="increase()" class="increase_btn">
                                                    <i class="ri-add-line"></i>
                                                </button>
                                                <input type="text" id="numberBox" value="01" readonly>

                                                <button onclick="decrease()" class="decrease_btn">
                                                    <i class="ri-subtract-line"></i>
                                                </button>
                                            </div>

                                        </div>
                                    </td>

                                    <td>
                                        <div class="cart_subtotal">
                                            <div class="cart_sub_total_pric">
                                                $40.00
                                            </div>

                                            <button>
                                                <i class="ri-delete-bin-fill"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex gap-3 align-items-center">
                                            <div class="cart_product_img">
                                                <img src="./assets/images/products/halfpant1.png" alt="">
                                            </div>

                                            <div>
                                                <div class="cart_product_name">
                                                    Polo Shirt Sleeveless
                                                </div>

                                                <div class="cart_prodct_price">
                                                    $35.00
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="cart_btn_increment">

                                            <div class="position-relative">
                                                <button onclick="increase()" class="increase_btn">
                                                    <i class="ri-add-line"></i>
                                                </button>
                                                <input type="text" id="numberBox" value="01" readonly>

                                                <button onclick="decrease()" class="decrease_btn">
                                                    <i class="ri-subtract-line"></i>
                                                </button>
                                            </div>

                                        </div>
                                    </td>

                                    <td>
                                        <div class="cart_subtotal">
                                            <div class="cart_sub_total_pric">
                                                $40.00
                                            </div>

                                            <button>
                                                <i class="ri-delete-bin-fill"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="cart_btns">
                        <a href="#" class="black-btn">update Cart</a>
                        <a href="checkout.php" class="primary-btn">continue shipping</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 ">
                <div class="card_product_total_price_container common_subtotal border p-4">
                    <h4>Cart Total</h4>

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

                    <div class="card_payment_methods">
                        <button><img src="./assets/images/icons/mastercard.png" alt=""></button>
                        <button><img src="./assets/images/icons/visa.png" alt=""></button>
                        <button><img src="./assets/images/icons/unionpay.png" alt=""></button>
                        <button><img src="./assets/images/icons/paypal.png" alt=""></button>
                    </div>

                    <div class="terms_agree_check">
                        <input type="checkbox" id="check">
                        <label for="check">I agree with the terms and conditions</label>
                    </div>

                    <a href="checkout.html" class="black-btn">update Cart</a>
                </div>
            </div>
        </div>

        <div class="row g-4 pt64 justify-content-lg-between">
            <div class="col-lg-4">
                <div class="shipping_calculate_div">
                    <h4>Shipping Calculate</h4>

                    <form action="">

                        <div class="row gy-4">
                            <div class="col-12">
                                <label for="country" class="form-label">Country</label>
                                <select class="form-select" aria-label="country select" id="country" name="country">
                                    <option selected>United States</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="country" class="form-label">State</label>
                                <select class="form-select" aria-label="State select" id="State" name="State">
                                    <option selected>New York</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="exampleFormControlInput1" class="form-label">Postal Code</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Zip Code">
                            </div>

                            <div class="col-12">
                                <button class="black-btn">calculate shipping</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="cart_note">
                    <h4>Cart Note</h4>
                    <label class="form-label">Note</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 160px"></textarea>
                        <label for="floatingTextarea2">Special instructions...</label>
                    </div>

                    <div class="cupon_code mt-4 mt-lg-5">
                        <h4>Cupon code</h4>

                        <form action="" class="d-flex align-items-end gap-2">
                            <div class="w-100">
                                <label for="cupon" class="form-label"> Code</label>
                                <input type="number" class="form-control" id="cupon" placeholder="Cupon Code">
                            </div>
                            <button class="primary-btn">apply code</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'inc/related-product.php'; ?>




<?php include 'inc/footer.php'; ?>