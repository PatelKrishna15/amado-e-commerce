<?php
include('connection.php');
$id = $_POST['id'];
$cat_name = $_POST['edit_cat_name'];
$update = "UPDATE `category` SET `cat_name` = '$cat_name' WHERE `id` = '$id'";
$result = mysqli_query($conn, $update);
if ($result) {
    $response = [

        'success' => 'ok',

    ];
    print_r(json_encode($response));
} 
else {
    echo json_encode(array("statusCode=>201"));
}
?>