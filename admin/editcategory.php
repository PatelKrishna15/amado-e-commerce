<?php
session_start();
?>
<?php
include('connection.php');

$id = $_GET['id'];
$edit = "SELECT * from category where id ='$id'";
$result = mysqli_query($conn, $edit);

$data = mysqli_fetch_assoc($result);
$data['id'] = $id;
// $data['cat_name'];


if ($data) {
    $response = [
        'id' => $id,
        'cat_name' =>$data['cat_name'],     
        
    ];
    print_r(json_encode($response));
} else {
    $response = [
        'status' => 'ok',
        'success' => false,
        'message' => 'Record deleted failed!'
    ];
    print_r(json_encode($response));
}


?>
<form method="post" id="editcategory_form">
    

    <div class="mb-3">
        
    <input type="hidden" name="id" value="<?php echo $data['id']; ?> " class="d-none"> 
        <input type="text" name="edit_cat_name" class="form-control" id="edit_cat_name" value="<?php echo $data['cat_name']; ?>">
    </div>
    <button type="button" id="modalCloseBtn" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" id="update" name="update" class="btn btn-primary">Update</button>
</form>