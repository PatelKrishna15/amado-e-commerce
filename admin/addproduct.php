<?php
session_start();
include('include.php');
?>
<?php
include('connection.php');
    if(isset($_POST['submit'])){
        $folder="uploads/products/";
        $filename=rand(10, 99999).basename($_FILES['img']['name']);
        $target_file=$folder.$filename;
        $imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if($imageFileType!='jpg' && $imageFileType!='png' && $imageFileType!='jpeg' ){
            echo "sorry, only image  files are allowd";

        }else{
            if(move_uploaded_file($_FILES['img']['tmp_name'],$target_file)){
                $name= $_POST['name'];
                $description=$_POST['description'];
                $cat_name=$_POST['cat_name'];
               $price=$_POST['price']; 
                $insert="INSERT INTO products(name,description,img,cat_name,price)VALUES('$name','$description','$target_file','$cat_name' ,'$price')";
                $result=mysqli_query($conn,$insert);
                // var_dump($result);exit();
                if($result == true){
                //    header('location:products.php');
                    echo "<script>alert('data inserted');location.href='products.php';</script>";
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
</head>

<body>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Product Table</strong>
            </div>
            <div class="card-body mt-2">
                <form method="post" name="product_form"  enctype="multipart/form-data">
                    <input type="hidden" id="id" name="id">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <!-- <div class="form-floating"> -->
                        <label for="description">Description</label>
                        <textarea class="form-control" class="editor" placeholder="Leave a comment here" id="description" name="description" style="height: 100px"></textarea>
                    </div>
                    <!-- </div> -->
                    <div class="mb-3">
                        <label for="img" class="form-label">Image</label>
                        <input type="file" name="img" class="form-control" id="img">
                    </div>
                    <div class="mb-3">
                        <label for="cat_name" class="form-label">Category</label><br>
                        <select name="cat_name">
                            <option selected disabled>--Select Category--</option>
                            <?php
                            $select = "SELECT * from category";
                            $result = mysqli_query($conn, $select);
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <option value="<?php echo $row['id']; ?>">
                                    <?php echo $row['cat_name']; ?>
                                </option>
                            <?php
                            }
                            ?>
                            
                        </select>

                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">price</label>
                        <input type="text" name="price" class="form-control" id="price">
                    </div>
                    <button type="submit" name="submit" id="submit" class="btn btn-primary float-end">Submit</button>
                    
                </form>
            </div>
        </div>
    </div>

</body>

</html>
