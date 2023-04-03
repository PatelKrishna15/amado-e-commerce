<?php
session_start();
?>
<?php
include 'connection.php';
$id = $_GET['id'];
if (($_GET['id'])) {

  $delete = "delete from category where id='$id'";
  $result = mysqli_query($conn, $delete);
  if ($result) {
    $response = [
      'status' => 'ok',
      'success' => true,
      'message' => 'Record deleted successfully!'
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
}
?>
