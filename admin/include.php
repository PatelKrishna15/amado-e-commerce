<?php 
if ($_SESSION['e_mail'] == null || $_SESSION['e_mail'] == false) {
  header("location:login.php");
}
?>
<!-- ======= Header ======= -->
<?php include 'header.php'?>
  <!-- ======= Sidebar ======= -->
  <?php include 'sidebar.php'?>
  
