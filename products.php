<?php
session_start();

include('sidebar.php');
?>
<div class="shop_sidebar_area">
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
<!-- </div> -->



<div class="body-wrapper">
    <!-- <div class="col-sm-12 order-1 order-lg-6"> -->
    <!-- Begin Header Area -->

    <!-- Li's Breadcrumb Area End Here -->
    <!-- Begin Li's Content Wraper Area -->
    <div class="content-wraper pt-60 pb-60 pt-sm-30">
        <div class="container">
            <div class="col-lg-9 order-1 order-lg-3">
                <div class="row">
                     <div class="shop-products-wrapper">
                        <div class="tab-content">
                            <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                <div class="product-area shop-product-area">

                                    <div class="row">
                                        <?php
                                        include('connection.php');
                                        $id = $_GET['id'];
                                        $select = "SELECT * FROM `products` WHERE cat_name='$id' ";
                                        $result = mysqli_query($conn, $select);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <!-- single-product-wrap start -->
                                            <div class="single-product-wrap">
                                                <div class="product-image">
                                                    <a href="product_detail.php?id=<?php echo $row['id']; ?> ">
                                                        <img src="admin/<?= $row["img"]; ?>" alt="" style="height: 300px; width: 100%;">
                                                    </a>
                                                </div>
                                                <span class="sticker">New</span>0
                                                <div class="product_desc">
                                                    <div class="product_desc_info">
                                                        <div class="product-review">
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

                                                        <h4><a class="product_name" href="product_detail.php?id=<?php echo $row['id']; ?> "><?php echo $row['name'] ?></a></h4>
                                                        <div class="price-box">
                                                            <span class="new-price"><?PHP echo $row['price']; ?></span>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="view-cart.php">Add to cart</a></li>
                                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- </div> -->
                                                    <!-- single-product-wrap end -->
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <!-- shop-products-wrapper end -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- </div> -->

<!-- Begin Body Wrapper -->

<!-- Content Wraper Area End Here -->
<?php
include('footer.php');
?>