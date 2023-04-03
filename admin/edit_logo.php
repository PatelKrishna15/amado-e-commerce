<?php
session_start();
?>
<?php
include('include.php');
include('connection.php');

$id = $_GET['id'];
$select = "SELECT * from `logo` where id='$id'";
$result = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($result);


?>
<div class="container">
    
<form action="update_logo.php" method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" id="id" value="<?php $row['id']; ?>">

        <div class="form-group mt-5">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $row['title']; ?>">
        </div>
        <div class="form-group mt-5">
            <label for="logo" class="form-label">Image</label>
            <input class="form-control" type="file" id="logo" name="img_upload" >
        </div>
        <div class="form-group mt-3">
            <button value="submit" name="update" class="btn btn-info float-end">Update</button>
        </div>
    </form>
</div>