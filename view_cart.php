<?php
session_start();
// include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row"  style="margin-top:-20px; ">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-left">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Images</th>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>

                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $total = 0;
                        if (isset($_SESSION['cart'])) {
                            $sr=1;
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $total = $total + $value['price'];
                        ?>

                                <tr>
                                    <td><?php echo $sr++; ?></td>
                                    <td><img height="50" src="admin/<?php echo $value['img']; ?>" ></td>
                                    <td><?= $value['name'] ?></td>
                                   
                                    <td><?= $value['price'] ?></td>
                                    <td><input class="text-center" type="number" value="<?= $value['quantity']; ?>"></td>
                                    <td><form action="add_cart.php" method="post">
                                    <button name="remove_item" class="btn btn-sm btn-outline-danger">Remove</button></td>     
                                    <!-- <input type='hidden' name='name' value='$value[name]'> -->
                                </form>
                            </td>
                                </tr>
                        <?php
                            }
                        }

                        ?>

                    </tbody>
                </table>
            </div>
            <div class="col ">
                <div class="border bg-light rounded p-2" style="margin-top: -40px;">
                    <h4>Total:</h4>
                    <h5><?php echo $total; ?></h5>
                    <!-- <br> -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Cash on Delivery
                        </label>
                    </div>
                    <!-- <br> -->
                    <button class="btn btn-primary btn-block">Make Purchase</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
