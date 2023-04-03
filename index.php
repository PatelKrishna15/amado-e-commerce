<?php
session_start();
include('connection.php');
// $url=basename($_SERVER['REQUEST_URL']);
// $title="Admin Logo";
$select = "SELECT * from logo";
$result = mysqli_query($conn, $select);
$title = mysqli_fetch_assoc($result);

include('sidebar.php');
?>
<!-- Product Catagories Area Start -->
<div class="products-catagories-area clearfix">
    <div class="amado-pro-catagory clearfix">
        <?php
        $sql = "SELECT * from `products` where cat_name='1'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {

        ?>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="shop.php">
                    <img src="admin/<?= $row['img'] ?>" alt="">
                    <!-- Hover Content -->
                    <div class="line"></div>
                    <div class="hover-content">
                    </div>
                    <h5 class="manufacturer">
                        <a href="shop.php"><?php echo $row['name']; ?></a>
                    </h5>
                </a>
            </div>


        <?php } ?>
    </div>
    <div class="amado-pro-catagory clearfix">
        <?php
        $sql = "SELECT * from `products` where cat_name='2'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {

        ?>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="shop.php">
                    <img src="admin/<?= $row['img'] ?>" alt="">
                    <!-- Hover Content -->
                    <div class="line"></div>
                    <div class="hover-content">
                    </div>
                    <h5 class="manufacturer">
                        <a href="shop.php"><?php echo $row['name']; ?></a>
                    </h5>
                </a>
            </div>


        <?php } ?>
    </div>
    <div class="amado-pro-catagory clearfix">
        <?php
        $sql = "SELECT * from `products` where cat_name='3'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {

        ?>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="shop.php">
                    <img src="admin/<?= $row['img'] ?>" alt="">
                    <!-- Hover Content -->
                    <div class="line"></div>
                    <div class="hover-content">
                    </div>
                    <h5 class="manufacturer">
                        <a href="shop.php"><?php echo $row['name']; ?></a>
                    </h5>
                </a>
            </div>


        <?php } ?>
    </div>
    <div class="amado-pro-catagory clearfix">
        <?php
        $sql = "SELECT * from `products` where cat_name='4'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {

        ?>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="shop.php">
                    <img src="admin/<?= $row['img'] ?>" alt="">

                    <!-- Hover Content -->
                    <div class="line"></div>
                    <div class="hover-content">
                    </div>
                    <h5 class="manufacturer">
                        <a href="shop.php"><?php echo $row['name']; ?></a>
                    </h5>

                </a>

            </div>
        <?php } ?>
    </div>
    <div class="amado-pro-catagory clearfix">
        <?php
        $sql = "SELECT * from `products` where cat_name='3'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            
        ?>

            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="shop.php">
                    <img src="admin/<?= $row['img'] ?>" alt="">
                    <!-- Hover Content -->
                    <div class="line"></div>
                    <div class="hover-content">
                        </div>
                        <h5 class="manufacturer">
                            <a href="shop.php"><?php echo $row['name']; ?></a>
                        </h5>
                </a>
            </div>


        <?php } ?>
    </div>
</div>
<!-- Product Catagories Area End -->
</div>
<!-- ##### Main Content Wrapper End ##### -->


<?php
include('footer.php');
?>