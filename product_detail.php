<?php session_start(); ?>
<!-- Core Style CSS -->
<link rel="stylesheet" href="css/core-style.css">
<link rel="stylesheet" href="style.css">
<!-- <link rel="stylesheet" href="./style.css"> -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
<!-- Material Design Iconic Font-V2.2.0 -->
<link rel="stylesheet" href="./css/css1/material-design-iconic-font.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="./css/css1/font-awesome.min.css">
<!-- Font Awesome Stars-->
<link rel="stylesheet" href="./css/css1/fontawesome-stars.css">
<!-- Meanmenu CSS -->
<link rel="stylesheet" href="./css/css1/meanmenu.css">
<!-- owl carousel CSS -->
<link rel="stylesheet" href="./css/css1/owl.carousel.min.css">
<!-- Slick Carousel CSS -->
<link rel="stylesheet" href="./css/css1/slick.css">
<!-- Animate CSS -->
<link rel="stylesheet" href="./css/css1/animate.css">
<!-- Jquery-ui CSS -->
<link rel="stylesheet" href="./css/css1/jquery-ui.min.css">
<!-- Venobox CSS -->
<link rel="stylesheet" href="./css/css1/venobox.css">
<!-- Nice Select CSS -->
<link rel="stylesheet" href="./css/css1/nice-select.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="./css/css1/magnific-popup.css">
<!-- Bootstrap V4.1.3 Fremwork CSS -->
<link rel="stylesheet" href="./css/css1/bootstrap.min.css">
<!-- Helper CSS -->
<link rel="stylesheet" href="./css/css1/helper.css">
<!-- Main Style CSS -->
<link rel="stylesheet" href="./style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="./css/css1/responsive.css">
<script src="js/js1/vendor/modernizr-2.8.3.min.js"></script>

<!-- content-wraper start -->
<div class="content-wraper " style="margin-top: 60px;">
    <div class="container">
        <?php
        include('connection.php');
        $id = $_GET['id'];
        $select = "SELECT * FROM products WHERE id='$id' ";
        $result = mysqli_query($conn, $select);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="row single-product-area">
                <div class="col-lg-5 col-md-6">
                    <!-- Product Details Left -->
                    <div class="product-details-left">
                        <div class="product-details-images slider-navigation-1">
                            <div class="lg-image">
                                <a class="popup-img venobox vbox-item" href="admin/<?php echo $row['img'] ?>" data-gall="myGallery">
                                    <img src="admin/<?php echo $row['img'] ?>" alt="product image">
                                </a>
                            </div>
                        </div>

                    </div>
                    <!--// Product Details Left -->
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="product-details-view-content pt-60">
                        <div class="product-info">
                            <h2><?php echo $row['name'] ?></h2>
                            <span class="product-details-ref">Reference: demo_15</span>
                            <div class="rating-box pt-20">
                                <ul class="rating rating-with-review-item">
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                    <li class="review-item"><a href="#">Read Review</a></li>
                                    <li class="review-item"><a href="#">Write Review</a></li>
                                </ul>
                            </div>
                            <div class="price-box pt-20">
                                <h4>$<?php echo $row['price'] ?></h4>
                            </div>
                            <div class="product-desc">
                                <p>
                                    <span><?php echo $row['description']; ?>
                                    </span>
                                </p>
                            </div>

                            <div class="single-add-to-cart">
                                <form action="add_cart.php" method="post" class="cart-quantity">
                                    <div class="quantity">
                                        <label>Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" name="quantity" value="1" type="text">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        </div>
                                    </div>

                                    <!-- <button class="add-to-cart" name="add-to-cart" type="submit">Add to cart</button> -->
                                    <?php
                                    echo '<a class="add-to-cart" href="add_cart.php?name=' . $row['name'] . '&price=' . $row['price'] . '&img=' . $row['img'] . '" class="add_to_cart_button">Add To Cart</a>';
?>
                                    <!-- <button type="submit" name="submit"  >Add To Cart</button> -->
                                </form>

                            </div>
                            <div class="product-additional-info pt-25">
                                <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Add to wishlist</a>
                                <div class="product-social-sharing pt-25">
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</div>
<!-- content-wraper end -->
<section class="product-area li-laptop-product pt-30 pb-50">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Realeted Products :</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">
                        <?php
                        include('connection.php');
                        // $id = $_GET['id'];
                        $select = "SELECT category.cat_name,products.name,products.img,products.price FROM category JOIN products ON category.id = products.cat_name ";
                        $result = mysqli_query($conn, $select);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <div class="col-lg-12">
                                <!-- single-product-wrap start -->

                                <div class="single-product-wrap">
                                    <div class="product-image">
                                        <a href="product_detail.php?id=<?php echo $row['id']; ?> ">
                                            <img src="admin/<?= $row["img"] ?>" alt="Li's Product Image">
                                        </a>
                                        <span class="sticker">New</span>
                                    </div>
                                    <div class="product_desc">
                                        <div class="product_desc_info">
                                            <div class="product-review">
                                                <h5 class="manufacturer">
                                                    <a href="product_detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['cat_name'] ?></a>
                                                </h5>
                                                <div class="rating-box">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4><a class="product_name" href="product_detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['name'] ?></a></h4>
                                            <div class="price-box">
                                                <span class="new-price"><?php echo $row['price']; ?></span>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul class="add-actions-link">
                                                <?php

                                                echo '<a href="add_cart.php?img=' . $row['img'] .  'name=' . $row['name'] . '&price=' . $row['price']  . '&quantity=' . $row['quantity']  . '" class="add_to_cart_button">Add To Cart</a>';

                                                ?>
                                                <li class="add_cart active"><a href="#">Add to cart</a></li>
                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- single-product-wrap end -->
                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>


<?php include('footer.php'); ?>