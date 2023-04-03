<?php
session_start();
include('include.php');
?>
<?php
include('connection.php');
$id = $_GET['id'];
$select = "SELECT * from products where id='$id' ";
$res = mysqli_query($conn, $select);
$row = mysqli_fetch_array($res);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>

<body>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Edit Product</strong>
            </div>
            <div class="card-body mt-2">
                <form method="POST" enctype="multipart/form-data" action="./update_product.php">
                    <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="<?php echo $row['name']; ?>">
                    </div>
                    <div class="mb-3">
                        <!-- <div class="form-floating"> -->
                        <label for="description">Description</label>
                        <textarea class="form-control" class="editor" id="description" name="description" style="height: 100px"><?php echo $row['description']; ?></textarea>
                    </div>
                    <!-- </div> -->
                        

                    <div class="mb-3">
                        <label for="newImage" class="form-label">Image</label><br>

                        <input type="file" name="newImage">
                        <input type="text" name="old_img" value="<?php echo $row['img']; ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="price" class="form-label">price</label>
                        <input type="text" name="price" class="form-control" id="price" value="<?php echo $row['price']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="cat_name" class="form-label">Category</label><br>
                        <select name="cat_name">
                            <?php
                            $select = "SELECT  * from category";
                            $res = mysqli_query($conn, $select);
                            while ($row = mysqli_fetch_assoc($res)) {
                            ?>
                                <option value="<?php echo $row['id']; ?>">
                                    <?php echo $row['cat_name']; ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>

                    </div>
                    <button type="submit" name="submit" class="btn btn-primary float-end">Submit</button>

                </form>
            </div>
        </div>
    </div>

</body>

</html>