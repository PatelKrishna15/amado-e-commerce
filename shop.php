<?php
include('sidebar.php');
?>
<div class="shop_sidebar_area">

    <!-- ##### Single Widget ##### -->
    <div class="widget catagory mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Catagories</h6>

        <!--  Catagories  -->
        <div class="catagories-menu">
            <ul>
                <?php
                include('connection.php');
                $select = "SELECT * from category";
                $res = mysqli_query($conn, $select);
                while ($row = mysqli_fetch_assoc($res)) {
                ?>
                    <li><a href="products.php?id=<?php echo $row['id'] ?>"><?php echo $row['cat_name'] ?></a></li>
                <?php
                } ?>
            </ul>
        </div>
    </div>


</div>

<div class="amado_product_area section-padding-100">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $select = "SELECT category.cat_name, products.description,products.name,products.img FROM category JOIN products ON category.id = products.cat_name";
            $result = mysqli_query($conn, $select);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>

                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <a href="single-product.html">
                                <img src="admin/<?php echo $row['img'] ?>" alt="">

                            </a>
                            <!-- Hover Thumb -->
                            <!-- <img class="hover-img" src="img/product-img/product1.jpg" alt=""> -->
                        </div>

                        <!-- Product Description -->

                        <div class="product-description d-flex align-items-center justify-content-between">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <!-- <p class="product-price">$220</p> -->
                                <h5 class="manufacturer">
                                    <a href=""><?php echo $row['cat_name']; ?></a>
                                </h5>
                            </div>
                            <!-- </div> -->
                            <!-- Ratings & Cart -->
                            <div class="ratings-cart text-right">

                                <div class="ratings">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="cart">
                                    <a href="cart.html" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a>
                                </div>
                                <!-- <h4><a class="product_name" href="single-product.html"><?php echo $row['name'] ?></a></h4> -->
                            </div>
                            
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="row">
                <div class="col-12">
                    <!-- Pagination -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- ##### Main Content Wrapper End ##### -->

<?php
include('footer.php')
?>

