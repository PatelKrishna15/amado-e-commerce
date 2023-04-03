<?php
session_start();
?>
 <?php
    include('connection.php');
    if (isset($_GET['name'])) {
        $_SESSION['cart'][] = array("name" => $_GET['name'], "price" => $_GET['price'], "img" => $_GET['img'], "qty" => 1);
    }
    if(isset($_POST['remove_item']))
    {
        foreach($_SESSION['cart']as $key=>$value)
        // var_dump($value);
        {
            if($value['name']==$_GET['name'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                
                echo "<script>
                alert('product removed');
                header('location:view_cart.php');
                </script>";
            }
        }
    }


    ?>