<?php
session_start();
include('connection.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $cat_name = $_POST['cat_name'];
    $price = $_POST['price'];
    $filename = rand(10, 99999) . basename($_FILES["newImage"]["name"]);
    $tempname = $_FILES['newImage']['tmp_name'];
    $folder = "uploads/products/" . $filename;
    move_uploaded_file($tempname, $folder);
    
    $update = "UPDATE `products` SET 
    `name`='$name',
    `description`='$description',
    `img`='$folder',
    `cat_name`='$cat_name',
    `price`='$price'
    WHERE `id`='$id'";

    // $update = "UPDATE `products` SET `name` = '$name', `description` = '$description', `img` = '$folder', `price` = '$price', `category` = '$category' WHERE `id` = '$id'";
    if (mysqli_query($conn, $update) == TRUE) {
        echo "<script>alert('Record update');location.href='products.php';</script>";
        // header('location:products.php');
    }else{
        // echo "<script>alert('Record update');location.href='products.php';</script>";
        echo "Haju update nathi tatu ";
    }
}

?>