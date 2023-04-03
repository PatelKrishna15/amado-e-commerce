<?php
session_start();
?>
<?php
// include("include.php");
include('connection.php');
if (isset($_POST['update'])) {

    $id = $_POST['id'];

    $title = $_POST['title'];
    $tempname = $_FILES['img_upload']['tmp_name'];
    $filename = $_FILES['img_upload']['name'];
    $target_dir = "uploads/logo/" . $filename;
    move_uploaded_file($tempname, $target_dir);
    if ($_POST['img_upload']) {?>
    
         value="<?php echo $row['img_upload']; ?>" . "<br>";
    <?php } else 
    {

        $update = "UPDATE logo SET `title`='$title' ,`image`='$target_dir' WHERE `id`=1";
        // print_r($update);
        $result = mysqli_query($conn, $update);

        if ($result) {
            move_uploaded_file($tempname, $target_dir);
            echo "<script>alert('Record Update');</script>";
            header('location:logo.php');
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

?>