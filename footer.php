<section class="newsletter-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center">
            <!-- Newsletter Text -->
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="newsletter-text mb-100">
                    <h2>Subscribe for a <span>25% Discount</span></h2>
                    <p>Nulla ac convallis lorem, eget euismod nisl. Donec in libero sit amet mi vulputate consectetur. Donec auctor interdum purus, ac finibus massa bibendum nec.</p>
                </div>
            </div>
            <!-- Newsletter Form -->
            <div class="col-12 col-lg-6 col-xl-5">
                <div class="newsletter-form mb-100">
                    <form action="#" method="post">
                        <input type="email" name="email" class="nl-email" placeholder="Your E-mail">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Newsletter Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer_area clearfix">
    <div class="container">
        <div class="row align-items-center">
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-4">
                <div class="single_widget_area">
                    <!-- Logo -->
                    <div class="footer-logo mr-50">
                    <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="index.php">
                                         <?php
                                         include('connection.php');
                $select = "SELECT * FROM logo";
                $result = mysqli_query($conn,$select);              
                while($row = mysqli_fetch_assoc($result))
                    {
            ?>
                                        <img src="admin/<?php echo $row['image'] ?>" alt="" style="height: 20px; width:50px">
                                        <?php } ?>
                                    </a>
                                </div>
                            </div>
                    </div>
                    <!-- Copywrite Text -->
                    <p class="copywrite">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a> & Re-distributed by <a href="https://themewagon.com/"
                            target="_blank">Themewagon</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-8">
                <div class="single_widget_area">
                    <!-- Footer Menu -->
                    <div class="footer_menu">
                        <nav class="navbar navbar-expand-lg justify-content-end">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                            <div class="collapse navbar-collapse" id="footerNavContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="shop.php">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="product_detail.php">Product</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="cart.php">Cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="checkout.php">Checkout</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <!-- <script src="../css/jquery-ui.min.css"></script> -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
<!-- jQuery-V1.12.4 -->
<!-- jQuery-V1.12.4 -->
        <script src="js/js1/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/js1/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="js/js1/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="js/js1/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="js/js1/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="js/js1/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="js/js1/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="js/js1/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="js/js1/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="js/js1/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="js/js1/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="js/js1/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="js/js1/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="js/js1/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="js/js1/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="js/js1/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="js/js1/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="js/js1/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="js/js1/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="js/js1/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="js/js1/main.js"></script>
</body>


<!-- Mirrored from themewagon.github.io/amado/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2023 15:53:56 GMT -->

</html>
